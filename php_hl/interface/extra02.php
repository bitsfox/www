<?php
/*这是一个由接口导出的类定义文件的扩展
  也就是本目录下main.php文件的扩展
 

 	2016-4-17  田勇 alias tybitsfox
 */
/*本文件现为测试文件，目的为使用重新定义的接口来实现图形的显示

 */
session_start();
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."php_hl/";
	define("FULL_PATH",$s2);
}
$st=constant("FULL_PATH")."include/inter_def.php";
require_once($st);
//{{{ class fs_mx_g implements gra_data,sql_def 废水明晰的图形类
class fs_mx_g	implements gra_data,sql_def
{
	private $xway,$yway,$gdata;
	private $conn,$result,$dbres;
	private $method;
	private $dw,$tm;
	private $id,$cstr,$std1,$std2;
	public function __construct()
	{
		if(!isset($_SESSION['dw_sel']))
	//		die("session error--001");
			$this->init_data();
		$this->id=0;$this->conn=NULL;
		$this->dw=$_SESSION['dw_sel'];
		$std1=0;$std2=0;
//		$this->xway=array();$this->yway=array();$this->gdata=array();
		$this->result=NULL;$this->method=0;$this->dbres=array();
//about method: =0初始状态，任何操作不可执行。
//				=1,2,4,8 表示小时值到日均超标值的四种类型。
//				=0x10,0x20 分别表示表格显示和图形显示 -这里必须是0x20
//				=0x100表示数据库操作已完成。		
		global $database;
		$this->cstr="'".$database['host']."','".$database['user']."','".$database['pwd']."'"; 
		unset($_SESSION['fs_g_xway']);
		unset($_SESSION['fs_g_yway']);
		unset($_SESSION['fs_g_data']);
	}
/*related post:sel1p:控制区域，关系到单位序列的一维序号，sel2p：单位名称
  ，关系到单位序列的二维序号。单位序列是个三维数组，其中三维包含2个两个
  元素：单位名称和id。注意：上述的单位是指站点的意思。
  sel3:数据类型，包含：小时值，日均值，小时超标值，日均超标值。
	其中：前2个计划用曲线图绘制，超标值用直方图表示。
  starttime:日期
  radio1：显示方式：表格显示，图形显示 
 */	
//{{{public function analysis_post()	
	public function analysis_post()
	{
		if(isset($_POST['radio1']))
		{
			if($_POST['radio1']==2)
				$this->method |=0x20;///////////must be!!
			else
				die("unmatch error!");
		}
		else
			die("unmatch error!");
		$i=count($this->dw);
		if(isset($_POST['sel1p']))
			$j=$_POST['sel1p'];
		else
			$j=0;
		if($j >= $i)
			die("count error--001!");
		$d1=$this->dw[$j];	//
		$i=count($d1);
		if(isset($_POST['sel2p']))
			$j=$_POST['sel2p'];
		else
			$j=0;
		if($j >= $i)
			die("count error--002");
		$dd1=$d1[$j];//0:区域，1:名称，2：id <--thus! my target
		$this->id=$dd1[2]; ////////////////////
		//test:
		$v001=$dd1[1];
		if(isset($_POST['sel3']))
			$i=$_POST['sel3'];
		else
			$i=0;
		$j=1<<$i;$this->method+=$j;////////////////
		$this->check_date();
		$str=sprintf("%0x\t%s\t%s",$this->method,$this->tm,$v001);
		echo $str;
	}//}}}
//{{{private function check_date()
	private function check_date()
	{
		if(!isset($_POST['starttime']))
			die("session error--001");
		$str=$_POST['starttime'];
		if(strlen($str)!=10)
			die("日期格式错误！");
		if((substr($str,4,1) != "-") || (substr($str,7,1) != "-"))
			die("日期格式错误--1！");
		$i=(int)substr($str,0,4);
		$j=(int)substr($str,5,2);
		$k=(int)substr($str,8,2);
		if((($i > 2030) || ($i < 2010)) || (($j > 12) || ($j < 1)) || (($k<1) || ($k > 31)))
			die("日期格式错误--2！");
		$this->tm=$str;
	}//}}}
//{{{public function get_db_type()
	public function get_db_type()
	{return $database['type'];}//}}}
//{{{public function connect_db()
	public function connect_db()
	{
		$this->conn=MYSQL_connect($this->cstr) or die("connect die: ".MYSQL_error());
		return $this->conn;
	}//}}}
//{{{private function make_sql_str()
	private function make_sql_str()
	{
		if($this->method & 1)//小时值
		{
			$this->cstr="select * from fs_hour_tb where uid = ".$this->id." and a_data ";
			$this->cstr.="> ".(time()-time()%86400)." and a_data < ".(time()-time()%86400+86400)." order by a_data";
		}
		else
		{
			if($this->method & 2) //日均值
			{
				$a1=mktime(0,0,11,substr($this->tm,5,2),substr($this->tm,8,2),substr($this->tm,0,4));
				$a2=mktime(0,0,11,substr($this->tm,5,2),1,substr($this->tm,0,4));
				$this->cstr="select * from fs_day_tb where uid = ".$this->id." and a_data ";
				$this->cstr.=">= ".$a2." and a_data <= ".$a1."order by a_data"; //注意：这里的+11是定义日均值表的时间格式
			}
			else
			{
				if($this->method & 4)//小时超标值
				{
					$this->cstr="select * from fs_hour_tb where uid = ".$this->id." and a_data ";
					$this->cstr.="> ".(time()-time()%86400)." and a_data < ".(time()-time()%86400+86400)." and 'val' > 'std' order by a_data";
				}
				else //日均超标值
				{
					$a1=mktime(0,0,11,substr($this->tm,5,2),substr($this->tm,8,2),substr($this->tm,0,4));
					$a2=mktime(0,0,11,substr($this->tm,5,2),1,substr($this->tm,0,4));
					$this->cstr="select * from fs_day_tb where uid = ".$this->id." and a_data ";
					$this->cstr.=">= ".$a2." and a_data <= ".$a1." and val > std  order by a_data"; //注意：这里的+11是定义日均值表的时间格式
				}
			}
		}		
	}//}}}
//{{{public function query_db()
public function query_db()
{
	
}//}}}
//{{{public function close_db()
	public function close_db()
	{
		if($this->conn == NULL)
			return;
		MYSQL_close($this->conn);
		$this->conn=NULL;
	}//}}}
//{{{public function range_xway()
	public function range_xway()
	{
		if($this->method == 0)
			die("order by function exec error!");
		if($this->method < 0x100)
			$this->do_db();
		if(($this->method & 5) != 0) //小时值或者小时超标值
		{
			$this->xway=array();
			for($i=0;$i<24;$i++)
			{
				$a1=$i."时";
				array_push($this->xway,$a1);
			}
		}
		else//日均值或日均超标值
		{
			$this->xway=array();
			for($i=0;$i<24;$i++)
			{
				$a1=$i."日";
				array_push($this->xway,$a1);
			}
		}
	}//}}}
//{{{public function range_yway()
	public function range_yway()
	{
		if($this->method == 0)
			die("order by function exec error--001!");
		if($this->method < 0x100)
			$this->do_db();
		global $yway_cnt;
		//废水只有两项指标：COD ,氨氮
		if(count($this->gdata) != 2)
			die("order by function exec error--002!");//必须先执行range_ary函数
		$a1=$this->gdata[0];	//第一数组为COD
		$i=count($a1);//这里可以是小时值或者日均值，所以长度大于20即可认为正确
		if($i<20)
			die("result count error--001!");
		$m1=$std1 * 2;
		for($j=0;$j < $i; $j++)
		{
			$aa1=$a1[$j];
			if($aa1>$m1)
				$m1=$aa1;
		}
		$a1=$this->gdata[1];//第二数组为氨氮
		$i=count($a1);
		if($i<20)
			die("result count error--002!");
		$m2=$std2 *2;
		for($j=0;$j<$i;$j++)
		{
			$aa1=$a1[$j];
			if($aa1>$m2)
				$m2=$aa1;
		}
		$aa1=($std1*2)/$yway_cnt;
		$aa2=($std2*2)/$yway_cnt;
		$a1=array();$a2=array();
		for($i=1;$i<$yway_cnt;$i++)
		{
			$x1=sprintf("%0.2f",$aa1*$i);
			$y1=sprintf("%0.2f",$aa2*$i);
			array_push($a1,$x1);
			array_push($a2,$y1);
		}
		$x1=sprintf("%0.2f",$m1);
		$y1=sprintf("%0.2f",$m2);
		array_push($a1,$x1);
		array_push($a2,$y1);
		array_push($this->yway,$a1);
		array_push($this->yway,$a2);
	}//}}}
//{{{public function range_ary()
	public function range_ary()
	{

	}//}}}	
//{{{public function __destruct()
	public function __destruct()
	{
		if($this->conn != NULL)
			$this->close_db();
	}//}}}
//{{{private function init_data()  this function is only for test!!
private function init_data()
{
	$a1=array();
	$aa1=array("市直","泰山华艺纸业","100");
	array_push($a1,$aa1);
	$aa1=array("市直","泰安康平纳毛纺织","101");
	array_push($a1,$aa1);
	$aa1=array("市直","泰山啤酒","102");
	array_push($a1,$aa1);
	$aa1=array("市直","泰山石膏股份有限公司","103");
	array_push($a1,$aa1);
	$aa1=array("市直","山东泰山生力源集团","104");
	array_push($a1,$aa1);
	$aa1=array("市直","山东泰安制药厂","105");
	array_push($a1,$aa1);
	$b=array();
	array_push($b,$a1);
	$a1=array();
	$aa1=array("泰山区","泰山玻纤慢庄分厂","106");
	array_push($a1,$aa1);
	$aa1=array("泰山区","岱银纺织","107");
	array_push($a1,$aa1);
	$aa1=array("泰山区","山东春雪羊绒制品","108");
	array_push($a1,$aa1);
	array_push($b,$a1);
	$a1=array();
	$aa1=array("岱岳区","泰安富泰毛纺织","109");
	array_push($a1,$aa1);
	$aa1=array("岱岳区","鲁怡针织印染","110");
	array_push($a1,$aa1);
	$aa1=array("岱岳区","新矿集团盐化公司","111");
	array_push($a1,$aa1);
	$aa1=array("岱岳区","泰安金辉制衣","112");
	array_push($a1,$aa1);
	$aa1=array("岱岳区","泰安中泰纸业有限公司","113");
	array_push($a1,$aa1);
	array_push($b,$a1);
	if(isset($_SESSION['dw_sel']))
		unset($_SESSION['dw_sel']);
	$_SESSION['dw_sel'] = $b;
}//}}}
//{{{private function do_db()
	private function do_db()
	{
		$this->connect_db();
		$this->make_sql_str();
		$this->query_db();
		$this->close_db();
		$this->method |= 0x100;
	}//}}}
}






?>




