<?php
/*本文件将对系统常用的一些函数进行定义。
函数类别的定义：
1、原子函数：独立实现一个单一功能的函数，原子函数不会调用其他自定义函数来协同操作。
2、基本功能函数：可以提供一个单一实用功能的函数，该函数可能会调用一个或多个原子函数或其他基本功能函数协同实现这一实用功能。
3、复合功能函数：可以根据传入参数实现多重功能的函数，该函数可能会调用上述两类函数来协同实现其功能。
2,3类函数的区别：主要在于函数的执行结果是否明确，也即函数的返回值是否单一，基本功能函数的返回结果是明确的。而复合函数的返回
				 结果可能会随传入的参数有多种结果。
本文件将着重于定义上述1,2类函数。				 
*******系统正常的执行流程：
<1>定位数据库服务器及确定访问该数据库所需基本资料
<2>访问行政区划表，取得本系统所属的区划。
<3>按照行政区划，确定控制区域选择列表框的内容。
<4>开始正常的数据访问操作。

 	2016-4-17  田勇 alias tybitsfox
 */
//{{{ be sure the constant is defined!
session_start();
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."php_hl/";
	define("FULL_PATH",$s2);
}//}}}
$str=constant("FULL_PATH")."config/main.php";
require_once($str);
$str=constant("FULL_PATH")."include/inter_def.php";
require_once($str);
////////////////////////////////////////////////////////////
//{{{class tb_mxleft_e implements tab_show,listbox_data
class tb_mxleft_e implements tab_show
{
	private $db=array(); //数据库服务器信息数组
	private $ay,$cy;	//ay是控制区域列表框的数据数组,cy是站点信息列表框的数据数组
	private $nowtime,$rq;
	private $my,$ny;	//控制级别和数据类型
//{{{public function __construct()
	public function __construct()
	{
  		date_default_timezone_set("PRC");
		if($_POST['starttime'])
		{
			$this->rq=$_POST['starttime'];
		}
		else
		{
  			$this->nowtime = time();
  			$this->rq = date("Y-m-d",$this->nowtime);
		}
		global $arry;
		$a=new init_tab($this->rq);
		$this->ay=$a->get_ctlarea();
		$a->get_unit($this->ay);
		$this->cy=$arry;
		$this->my=array("国控","省控","市控","县控","其他");//控制级别
		$this->ny=array("小时值","日均值","小时超标值","日均超标值");//数据类型
	}//}}}
//{{{public function show_header()
	public function show_header()
	{
		$i=count($this->ay);
		if(isset($_POST["sel1p"]))
			$k=$_POST["sel1p"];
		else
			$k=0;
		$s1="<br><div class='dvmsg'>控制区域：</div><div class='select_style'><select name='sel1p' id='sel1p' onchange = 'onsss()'>";
		for($j=0;$j<$i;$j++)
		{
			$by=$this->ay[$j];
			if($by[0] == $k)
				$s1.="<option value=".$k." selected='selected'>".$by[1]."</option>";
			else
				$s1.="<option value=".$k.">".$by[1]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		if(isset($_POST["sel3p"]))
			$k1=$_POST["sel3p"];
		else
			$k1=0;
		$s1.="<br><div class='dvmsg'>控制级别：</div><div class='select_style'><select name='sel3p' id='sel3p' onchange = 'onsss()'>";
		for($j=0;$j<5;$j++)
		{
			if($k1 == $j)
				$s1.="<option value= ".$j." selected='selected'>".$this->my[$j]."</option>";
			else
				$s1.="<option value= ".$j.">".$this->my[$j]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;	//end of control area and control level
		$i=count($this->cy);
		if($k >= $i)
			die("get array count error");
		unset($by);
		$by=$this->cy[$k];
		if(isset($_POST["sel2p"]))
			$k2 = $_POST["sel2p"];
		else
			$k2 = 0;
		$dy=$by[$k1]; //取得不同控制级别的单位数组
		$i=count($dy);
		$s1="<br><div class='dvmsg1'>站点名称：</div><div class='select_style1'><select name='sel2p' id='sel2p'>";
		for($j=0;$j<$i;$j++)
		{
			if($dy[$j][0] == $k2)
				$s1.="<option value=".$dy[$j][0]." selected='selected'>".$dy[$j][1]."</option>";
			else
				$s1.="<option value=".$dy[$j][0].">".$dy[$j][1]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;
	}//}}}
//{{{public function show_body()
	public function show_body()
	{
		if(isset($_POST['sel3']))
			$k=$_POST['sel3'];
		else
			$k=0;
		$s1="<br><div class='dvmsg'>数据类型：</div><div class='select_style'><select name='sel3' id='sel3'>";
		for($i=0;$i<4;$i++)
		{
			if($i==$k)
				$s1.="<option value= ".$i." selected='selected'>".$this->ny[$i]."</option>";
			else
				$s1.="<option value= ".$i." >".$this->ny[$i]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;
		$s1="<br><div class='dvmsg'>日期选择：</div><div class='dvmsg'><input type='text' id='text1_id' name='starttime' onfocus='MyCalendar.SetDate(this)' value='".$this->rq."'/>";
		$s1.="</div><div id='clear_id'></div>";
		echo $s1;
		if(isset($_POST['radio1']))
		{
			if($_POST['radio1'] == 1)
				$k=0;
			else
				$k=1;
		}
		else
			$k=0;
		$s1="<br><br><div class='dwmsg'>";
		if($k==0)
		{
			$s1.="<input type='radio' name='radio1' value=1 checked />数据以表格显示";
			$s1.="<input type='radio' name='radio1' value=2 />数据以图形显示</div>";
		}
		else
		{
			$s1.="<input type='radio' name='radio1' value=1 />数据以表格显示";
			$s1.="<input type='radio' name='radio1' value=2 checked/>数据以图形显示</div>";
		}
		echo $s1;
		$s1="<br><br><center><input type='submit' id='button_id' name='submit' value='应用'></center>";
		echo $s1;
	}//}}}
//{{{public function show_tail()
	public function show_tail()
	{}//}}}
}//}}}
/////////////////////////////////////////////////////////////
//{{{class init_tab implements listbox_data
class init_tab implements listbox_data
{
	private $conn,$str_sj,$str_ds;
	private $str_uxq,$str_usj,$str_uds;
	private $rq,$db;
//{{{public function __construct($y)	
	public function __construct($y)
	{
		if($y != NULL)
			$this->rq=intval($y);
		else
			$this->get_cur_year();
		$this->get_used_db();
		$this->conn="SELECT aid,aname FROM area_info WHERE bused = 1";
		$this->str_sj="SELECT aid,aname FROM area_info WHERE aid BETWEEN %u AND %u AND aid%100 = 0";
		$this->str_ds="SELECT aid,aname FROM area_info WHERE aid BETWEEN %u AND %u";
		$this->str_uxq="SELECT dname,dwid,ctlvl FROM dw_info WHERE aid = %u";	//临时测试用，正式的应为取自zd_info!!!
		$this->str_usj="SELECT dwid,dname,ctlvl FROM dw_info WHERE aid BETWEEN %u AND %u";//同上
		$this->str_uds="SELECT dwid,dname,ctlvl FROM dw_info WHERE aid = %u";//同上！
	}//}}}
//{{{public function __destruct()
	public function __destruct()
	{
		unset($this->db);
	}//}}}
//{{{public function get_cur_year()
	public function get_cur_year()
	{
		$dy=array();
		$dy=getdate(time());
		$this->rq= $dy['year'];
	}//}}}
//{{{public function get_used_db()
	public function get_used_db()
	{
		global $DB_ADDR_TY,$DB_PORT_TY,$DB_NAME_TY,$DB_PWD_TY;
		global $DB_USER_TY;
		$i=intval($this->rq);
		if(!isset($DB_ADDR_TY[$i]))
			die("你所选择的日期".$i."年，没有数据！");
		$this->db=array();
		array_push($this->db,$DB_ADDR_TY[$i]);
		array_push($this->db,$DB_PORT_TY[$i]);
		array_push($this->db,$DB_NAME_TY[$i]);
		array_push($this->db,$DB_USER_TY);
		array_push($this->db,$DB_PWD_TY);
	}//}}}
//{{{public function get_ctlarea()
	public function get_ctlarea()
	{
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_errno())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		$res=mysqli_query($mysqli,$this->conn);
		if(mysqli_num_rows($res) != 1)
		{
			mysqli_free_result($res);
			mysqli_close($mysqli);
			die("严重错误！行政区划的设定错误！");
		}
		$row=mysqli_fetch_row($res);
		$ay=array();
		if($row[0]%10000 == 0) //省级系统
		{
			$_SESSION['sys_level'] = 1;
			$i=intval($row[0])+1;
			$j=$i+9998;
			$s1=sprintf($this->str_sj,$i,$j);
		}
		else
		{
			if($row[0]%100 == 0) //地市级系统
			{
				$_SESSION['sys_level'] = 2;
				$i=intval($row[0])+1;
				$j=$i+98;
				$s1=sprintf($this->str_ds,$i,$j);
			}
			else
			{
				$_SESSION['sys_level'] = 0; //县区级系统
				array_push($ay,$row);
			}
		}
		mysqli_free_result($res);
		if($_SESSION['sys_level'] > 0)
		{
			$res=mysqli_query($mysqli,$s1);
			while($row=mysqli_fetch_row($res))
				array_push($ay,$row);
			mysqli_free_result($res);
		}
		mysqli_close($mysqli);
		return $ay;
	}//}}}
//{{{public function get_unit($y)
	public function get_unit($y)
	{
		global $arry;
		if(!is_array($arry))
			$arry=array();
		if(!is_array($y))
			die("缺少传入参数或参数错误！");
		if(!isset($_SESSION['sys_level']))
			die("控制区域错误，无法取得相应的站点信息");
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_errno())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		if($_SESSION['sys_level'] == 0) //县区级
		{
			$s1=sprintf($this->str_uxq,$y[0][0]);
			for($i=0;$i<5;$i++)
				$dy[$i]=array();
			$res=mysqli_query($mysqli,$s1);
			while($row=mysqli_fetch_row($res))
			{
				if($row[2] > 4)
				{
					mysqli_free_result($res);
					mysqli_close($mysqli);
					die("越界错误！");
				}
				array_push($dy[$row[2]],$row);
			}
			$ey=array();
			for($i=0;$i<5;$i++)
				array_push($ey,$dy[$i]);
			array_push($arry,$ey);//保证与省市控的处理一致，并同步全局变量
			mysqli_free_result($res);
			mysqli_close($mysqli);
			return;
		}
		if($_SESSION['sys_level'] == 1) //省级
		{
			$i=count($y);
			for($j=0;$j<$i;$j++)
			{
				for($k=0;$k<5;$k++)
					$dy[$k]=array();
				$cy=$y[$j];
				$m=intval($cy[0])+1;
				$n=$m+98;
				$s1=sprintf($this->str_usj,$m,$n);
				$res=mysqli_query($mysqli,$s1);
				while($row=mysqli_fetch_row($res))
				{
					if($row[2] > 4)
					{
						mysqli_free_result($res);
						mysqli_close($mysqli);
						die("越界错误1！");
					}
					array_push($dy[$row[2]],$row);
				}
				$ey=array();
				for($k=0;$k<5;$k++)
					array_push($ey,$dy[$k]);
				array_push($arry,$ey);//并同步全局变量
				mysqli_free_result($res);
			}
			mysqli_close($mysqli);
			return;
		}
		if($_SESSION['sys_level'] == 2) //地市级
		{
			$i=count($y);
			for($j=0;$j<$i;$j++)
			{
				$cy=$y[$j];
				$s1=sprintf($this->str_uds,$cy[0]);
				for($k=0;$k<5;$k++)
					$dy[$k]=array();
				$res=mysqli_query($mysqli,$s1);
				while($row=mysqli_fetch_row($res))
				{
					if($row[2] > 4)
					{
						mysqli_free_result($res);
						mysqli_close($mysqli);
						die("越界错误1！");
					}
					array_push($dy[$row[2]],$row);
				}
				$ey=array();
				for($k=0;$k<5;$k++)
					array_push($ey,$dy[$k]);
				array_push($arry,$ey);//并同步全局变量
				mysqli_free_result($res);
			}
			mysqli_close($mysqli);
			return;
		}
	}//}}}
}//}}}
////////////////////////////////////////////////////////////
//{{{class tb_sleft_e implements tab_show
class tb_sleft_e implements tab_show
{
	private $db; //数据库服务器信息数组
	private $ay; //ay是控制区域列表框的数据数组
	private $rq;
	private $cy,$dy;	//控制级别和数据类型
//{{{public function __construct()
	public function __construct()
	{
  		date_default_timezone_set("PRC");
		if($_POST['starttime'])
		{
			$this->rq=$_POST['starttime'];
		}
		else
		{
  			$nowtime = time();
  			$this->rq = date("Y-m-d",$nowtime);
		}
		$a=new init_tab($this->rq);
		$this->ay=$a->get_ctlarea();
		$this->cy=array("国控","省控","市控","县控","其他");//控制级别
		$this->dy=array("实时值","日均值");//数据类型
	}//}}}
//{{{public function __destruct()
	public function __destruct()
	{unset($this->db);unset($this->ay);unset($this->my);}//}}}
//{{{public function show_heaer()
	public function show_header()
	{
		$i=count($this->ay);
		if(isset($_POST['sel1']))
			$k=$_POST['sel1'];
		else
			$k=0;
		$s1="<br><div class='dvmsg'>控制区域：</div><div class='select_style'><select name='sel1'>";
		for($j=0;$j<$i;$j++)
		{
			$by=$this->ay[$j];
			if($by[0] == $k)
				$s1.="<option value=".$by[0]." selected='selected'>".$by[1]."</option>";
			else
				$s1.="<option value=".$by[0].">".$by[1]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;	//end of control area
		if(isset($_POST["sel2"]))
			$k=$_POST["sel2"];
		else
			$k=0;
		$i=count($this->cy);
		$s1="<br><div class='dvmsg'>控制级别：</div><div class='select_style'><select name='sel2'>";
		for($j=0;$j<$i;$j++)
		{
			if($j == $k)
				$s1.="<option value=".$j." selected='selected'>".$this->cy[$j]."</option>";
			else
				$s1.="<option value=".$j.">".$this->cy[$j]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;	//end of control level
		if(isset($_POST["sel3"]))
			$k=$_POST["sel3"];
		else
			$k=0;
		$i=count($this->dy);
		$s1="<br><div class='dvmsg'>数据类型：</div><div class='select_style'><select name='sel3'>";
		for($j=0;$j<$i;$j++)
		{
			if($j == $k)
				$s1.="<option value=".$j." selected='selected'>".$this->dy[$j]."</option>";
			else
				$s1.="<option value=".$j.">".$this->dy[$j]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;	//end of data type
	}//}}}
//{{{public function show_body()
	public function show_body()
	{
		$s1="<br><div class='dvmsg'>日均值日期:</div>";
		$s1.="<div class='dvmsg'><input type='text' id='text1_id' name='starttime' onfocus='MyCalendar.SetDate(this)' value='".$this->rq."'/>";
		$s1.="</div><div id='clear_id'></div>";
		echo $s1;
		$s1="<br><br><center><input type='submit' id='button_id' name='submit' value='应用'></center>";
		echo $s1;
	}//}}}
//{{{public function show_tail()
	public function show_tail()
	{}//}}}
}//}}}
////////////////////////////////////////////////////////////
//{{{ class data_sright implements main_data
class data_sright implements main_data
{
	private $db,$ins;	//目标数据库相关信息，传入的查询条件。
	private $con_std,$con_val; //解析后生成的执行标准查询字符串和项目数据查询字符串
	private $say,$vay;  //标准数据数组，项目数据数组
//{{{ public function __construct($y)
	public function __construct()
	{
		if(!isset($_POST['starttime']))
			die("参数传递错误！starttime");
		if(!isset($_POST['sel1']))
			die("参数传递错误！sel1");
		if(!isset($_POST['sel2']))
			die("参数传递错误！sel2");
		if(!isset($_POST['sel3']))
			die("参数传递错误！sel3");
		if(!isset($_SESSION['sys_level']))
			die("初始化信息错误！sys_level");
		$i=intval($_POST['starttime']);
		$this->get_used_db($i);
	}//}}}
//{{{public function get_used_db($y)
	public function get_used_db($y)
	{
		global $DB_ADDR_TY,$DB_PORT_TY,$DB_NAME_TY,$DB_PWD_TY;
		global $DB_USER_TY;
		if(!isset($DB_ADDR_TY[$y]))
			die("你所选择的日期".$i."年，没有数据！");
		$this->db=array();
		array_push($this->db,$DB_ADDR_TY[$i]);
		array_push($this->db,$DB_PORT_TY[$i]);
		array_push($this->db,$DB_NAME_TY[$i]);
		array_push($this->db,$DB_USER_TY);
		array_push($this->db,$DB_PWD_TY);
	}//}}}
//{{{public function parse_sql()
	public function parse_sql()
	{//废水,县区级
		switch($_SESSION['sys_level'])
		{
		case 0: //县区级
			$s1="SELECT e.uname,e.cod,e.nhx,e.ll_sh,e.ll_jg FROM (SELECT a.uid,b.uname,a.cod,a.nhx,a.ll_sh,a.ll_jg FROM zd_info as b LEFT JOIN fs_h_master as a ON b.uid = a.uid AND a.date > date_add(now(),interval -2 hour) WHERE b.utype = 0 AND b.ctlvl = %d ORDER BY a.date DESC) AS e GROUP BY e.uid";
			$this->con_val=sprintf($s1,$_POST['sel2']);
			break;
		case 1://省级
			$s1="SELECT e.uname,e.cod,e.nhx,e.ll_sh,e.ll_jg FROM (SELECT b.uid,b.uname,a.cod,a.nhx,a.ll_sh,a.ll_jg FROM zd_info AS b LEFT JOIN fs_h_master AS a ON a.date > date_add(now(),interval -2 hour) AND a.uid = b.uid WHERE b.aid BETWEEN %u AND %u AND b.utype = 0 AND b.ctlvl = %d ORDER BY a.date DESC) as e GROUP BY e.uid";
			$i=intval($_POST['sel1'])+1;
			$j=$i+98;
			$this->con_val=sprintf($s1,$i,$j,$_POST['sel2']);
			break;
		case 2://地市级
			$s1="SELECT e,uname,e.cod,e.nhx,e.ll_sh,e.ll_jg FROM (SELECT b.uid,b.uname,a.cod,a.nhx,a.ll_sh,a.ll_jg FROM zd_info AS b LEFT JOIN fs_h_master AS a ON a.date > date_add(now(),interval -2 hour) AND a.uid = b.uid WHERE b.aid = %u AND b.utype = 0 AND b.ctlvl = %d ORDER BY a.date DESC) as GROUP BY e.uid";
			$this->con_val=sprintf($s1,$_POST['sel1'],$_POST['sel2']);
			break;
		default:
			$this->con_val="sys_level=".$_SESSION['sys_level'];
			break;
		};
		echo $this->con_val;
		$s1="SELECT b.uid,a.std1,a.std1_area,a.std2 FROM gb_std a,zd_info b WHERE b.utype = 0 AND b.ctlvl = %d AND b.uid = a.uid AND b.sttm < %s AND b.edtm > %s ORDER BY b.uid,a.iid";
		
	}//}}}
//{{{public function get_std()
	public function get_std()
	{
	}//}}}
//{{{public function get_unit()
	public function get_unit()
	{
	}//}}}

}//}}}
//{{{废气的查询字符串：
/*		case 0: //县区级
			$s1="SELECT b.uname,a.cod,a.nhx,a.ll_sh,a.ll_jg from (SELECT b.uname,a.cod,a.nhx,a.ll_sh,a.ll_jg FROM fs_h_master a,zd_info b WHERE a.uid = b.uid AND a.date > date_add(now(),interval -5 minute) AND b.aid = %u AND b.utype = %d AND b.ctlvl = %d ORDER BY a.date DESC) as e,fs_h_master as a,zd_info as b GROUP BY a.uid";
			break;
		case 1://省级
			$s1="SELECT b.uname,a.code,a.nhx,a.ll_sh,a.ll_jg FROM fs_h_master a,zd_info b WHERE a.uid = b.uid AND a.date > date_add(now(),interval -5 minute) AND b.aid BETWEEN %u AND %u AND b.utype = %d AND b.ctlvl = %d ORDER BY a.date DESC GROUP BY a.uid";
			break;
 */
/*

mysql> select e.uname,e.date,e.cod from (select b.uid,b.uname,a.date,a.cod from zd_info b left join fs_h_master a on b.uid = a.uid and a.date > date_add(now(),interval -15 day) where b.utype = 0 AND b.ctlvl = 0 order by a.date desc) as e group by e.uid;

*/
//}}}
?>




