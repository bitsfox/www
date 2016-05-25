<?php
/*这是一个由接口导出的类实现文件
本文件实现下列功能：
1、独立的验证和注册函数
2、控制界面（左边栏）的数据操作类实现
3、显示界面（右边栏）的数据操作类实现
4、控制界面的动态元素显示类实现
5、显示界面的动态元素显示类实现
为便于后期的排错和调试，废水，废气，污水厂以及各自的明晰显示界面都由
单独的类实现，虽然这样做会使得代码臃肿，但方便后期的调试以及个别界面的微调



 	2016-4-17  田勇 alias tybitsfox
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
$st=constant("FULL_PATH")."interface/extra01.php";
require_once($st);
///////////////////////////////////////////////////////////////
//{{{class login_init implements sqli_def
class login_init implements sqli_def
{
	private $conn_reg,$conn_log,$db;//
	private $rq;
//{{{public function __construct($u,$p)
	public function __construct($u,$p)
	{
		if(($u == NULL) || ($p == NULL))
			die("请指定用户名和密码");
		$this->get_cur_year();
		$this->conn_log="SELECT * FROM auth";
		$this->conn_reg=sprintf("INSERT INTO auth(user,pwd) VALUES('%s','%s')",$u,$p);
		$this->get_used_db();
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
//{{{public function query_db($n)
	public function query_db($n)
	{
		$ay=array();
		if(!is_array($this->db))
			$this->get_used_db();
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_errno())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		switch($n)
		{
		case 0:// login
			$res=mysqli_query($mysqli,$this->conn_log);
			while($row=mysqli_fetch_row($res))
				array_push($ay,$row);
			mysqli_free_result($res);
			mysqli_close($mysqli);
			break;
		case 1://register
			$res=mysqli_query($mysqli,$this->conn_reg);
			mysqli_close($mysqli);
			if($res != TRUE)
				die("用户注册失败！");
			return TRUE;
		};
		return $ay;
	}//}}}
}//}}}
//这里定义一个Session验证的函数
//{{{function _verf_fox()
function _verf_fox()
{
	global $tybitsfox;
	if($_SESSION['logok'] != $tybitsfox['corename'])
		die("you're over!");
}//}}}
//{{{function _verf_db($u,$p)
function _verf_db($u,$p)
{
	$a=new login_init($u,$p);
	$ay=$a->query_db(0);
	$i=count($ay);
	for($j=0;$j<$i;$j++)
	{
		$row=$ay[$j];
		if(($row[0] == $u) && ($row[1] == $p))
			return 0;
	}
	return 1; 
}//}}}
//{{{function _reg_db($u,$p)
function _reg_db($u,$p)
{
	$a=new login_init($u,$p);
	$ay=$a->query_db(0);
	$i=count($ay);
	for($j=0;$j<$i;$j++)
	{
		$row=$ay[$j];
		if($row[0] == $u)
			die("该帐号已被注册，请更换名称重新注册");
	}
	$a->query_db(1);
	return 0;
}//}}}
//{{{ class tb_wsc implements tab_show
class tb_wsc implements tab_show
{
	private $ay,$cy;
	private $dy=array();
	public function __construct()
	{
		$this->ay=array("编号","单位名称","COD","氨氮","累计流量");
		$this->cy=array("监测值","标准值");
		//only for test!
		$ey=array("1","清源水务一污","入口","164","--","23.10","--","--");
		array_push($this->dy,$ey);
		$ey=array("2","清源水务一污","出口","22","50","8.42","8","8744659");
		array_push($this->dy,$ey);
		$ey=array("3","康龙排水","入口","398","--","46.83","--","--");
		array_push($this->dy,$ey);
		$ey=array("4","康龙排水","出口","38","50","1.77","5","5131181");
		array_push($this->dy,$ey);
	}
	public function show_header()
	{
		$s1="<table width=97% class='imagetable'><tr>";
		$s2="<th width=10% rowspan=2 align=center>".$this->ay[0]."</th>";
		$s1.=$s2;
		$s2="<th width=30% rowspan=2 align=center>".$this->ay[1]."</th>";
		$s1.=$s2;
		$s2="<th width=20% colspan=2 align=center>".$this->ay[2]."</th>";
		$s1.=$s2;
		$s2="<th width=20% colspan=2 align=center>".$this->ay[3]."</th>";
		$s1.=$s2;
		$s2="<th width=20% rowspan=2 align=center>".$this->ay[4]."</th></tr><tr>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[1]."</th>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[1]."</th></tr>";
		$s1.=$s2;
		echo $s1;
	}
	public function show_body()
	{
		for($k=0;$k<5;$k++)
		{
			$i=count($this->dy);
			for($j=0;$j<$i;$j++)
			{
				$fy=$this->dy[$j];
				$s1="<tr><td width=%10>".$fy[0]."</td><td width=30%>".$fy[1].$fy[2]."</td>";
				if(($fy[3]>$fy[4]) && ($fy[4]>0))
					$s1.="<td width=10% id='tdid'>".$fy[3]."</td><td width=10%>".$fy[4]."</td>";
				else
					$s1.="<td width=10%>".$fy[3]."</td><td width=10%>".$fy[4]."</td>";
				if(($fy[5]>$fy[6]) && ($fy[6]>0))
					$s1.="<td width=10% id='tdid'>".$fy[5]."</td><td width=10%>".$fy[6]."</td><td width=20%>".$fy[7]."</td></tr>";
				else
					$s1.="<td width=10%>".$fy[5]."</td><td width=10%>".$fy[6]."</td><td width=20%>".$fy[7]."</td></tr>";
				echo $s1;
			}
		}
	}
	public function show_tail()
	{echo "</table>";}
}//}}}
//{{{class tb_fs implements tab_show
class tb_fs implements tab_show
{
	private $ay,$cy;
	private $dy;
//{{{public function __construct()	
	public function __construct()
	{
		$this->ay=array("编号","单位名称","COD","氨氮","累计流量");
		$this->cy=array("监测值","标准值");
		$a=new data_sright();
		$a->parse_sql();
		$y=$a->get_unit();
		$i=count($y);
		$this->dy=array();
		for($j=0;$j<$i;$j++)
		{
			$ey=array();
			$x=$y[$j];
			array_push($ey,$j);
			array_push($ey,$x[0]);
			if($x[1] == NULL)
				array_push($ey,"---");
			else
				array_push($ey,$x[1]);
			array_push($ey,200);	//standard
			if($x[2] == NULL)
				array_push($ey,"---");
			else
				array_push($ey,$x[2]);
			array_push($ey,40);
			if($x[3] == NULL)
				array_push($ey,"---");
			else
				array_push($ey,$x[3]);
			array_push($this->dy,$ey);			
		}
	}//}}}
//{{{public function show_header()	
	public function show_header()
	{
		$s1="<table width=97% class='imagetable'><tr>";
		$s2="<th width=10% rowspan=2 align=center>".$this->ay[0]."</th>";
		$s1.=$s2;
		$s2="<th width=30% rowspan=2 align=center>".$this->ay[1]."</th>";
		$s1.=$s2;
		$s2="<th width=20% colspan=2 align=center>".$this->ay[2]."</th>";
		$s1.=$s2;
		$s2="<th width=20% colspan=2 align=center>".$this->ay[3]."</th>";
		$s1.=$s2;
		$s2="<th width=20% rowspan=2 align=center>".$this->ay[4]."</th></tr><tr>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[1]."</th>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[1]."</th></tr>";
		$s1.=$s2;
		echo $s1;
	}//}}}
//{{{public function show_body()	
	public function show_body()
	{
		$i=count($this->dy);
		for($j=0;$j<$i;$j++)
		{
			$fy=$this->dy[$j];
			$s1="<tr><td width=%10>".$fy[0]."</td><td width=30%>".$fy[1]."</td>";
			if(($fy[2]>$fy[3]) && ($fy[3]>0))
				$s1.="<td width=10% id='tdid'>".$fy[2]."</td><td width=10%>".$fy[3]."</td>";
			else
				$s1.="<td width=10%>".$fy[2]."</td><td width=10%>".$fy[3]."</td>";
			if(($fy[4]>$fy[5]) && ($fy[5]>0))
				$s1.="<td width=10% id='tdid'>".$fy[4]."</td><td width=10%>".$fy[5]."</td><td width=20%>".$fy[6]."</td></tr>";
			else
				$s1.="<td width=10%>".$fy[4]."</td><td width=10%>".$fy[5]."</td><td width=20%>".$fy[6]."</td></tr>";
			echo $s1;
		}
	}//}}}
//{{{public function show_tail()	
	public function show_tail()
	{echo "</table>";}//}}}
//{{{public function __destruct()
	public function __destruct()
	{unset($this->ay);unset($this->cy);unset($this->dy);}//}}}
}//}}}
//{{{class tb_fq implements tab_show
class tb_fq implements tab_show
{
	private $ay,$cy;
	private $dy=array();
	public function __construct()
	{
		$this->ay=array("编号","单位名称","SO2","NOx","烟尘","氧量","废气排放量");
		$this->cy=array("监测值","标准值");
		//only for test!
		$ey=array("1","泰山玻璃纤维","133","200","222","300","13","30","12","13156");
		array_push($this->dy,$ey);
		$ey=array("2","泰山石膏股份有限公司","4","200","81","200","7","30","6","107005");
		array_push($this->dy,$ey);
		$ey=array("3","泰山东城热电","299","200","97","200","5","30","13","347814");
		array_push($this->dy,$ey);
		$ey=array("4","新矿集团泰山盐化工分公司热电厂","7","200","57","200","14","30","8","402034");
		array_push($this->dy,$ey);
		$ey=array("5","岱岳精制盐","127","200","109","200","8","30","9","116827");
		array_push($this->dy,$ey); 
	}
	public function show_header()
	{
		$s1="<table width=97% class='imagetable'><tr>";
		$s2="<th width=6% rowspan=2 align=center>".$this->ay[0]."</th>";
		$s1.=$s2;
		$s2="<th width=20% rowspan=2 align=center>".$this->ay[1]."</th>";
		$s1.=$s2;
		$s2="<th width=16% colspan=2 align=center>".$this->ay[2]."</th>";
		$s1.=$s2;
		$s2="<th width=16% colspan=2 align=center>".$this->ay[3]."</th>";
		$s1.=$s2;
		$s2="<th width=16% colspan=2 align=center>".$this->ay[4]."</th>";//;</tr><tr>";
		$s1.=$s2;
		$s2="<th width=10% rowspan=2 align=center>".$this->ay[5]."</th>";
		$s1.=$s2;
		$s2="<th width=16% rowspan=2 align=center>".$this->ay[6]."</th></tr><tr>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[1]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[1]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[1]."</th></tr>";
		$s1.=$s2;
		echo $s1;
	}
	public function show_body()
	{
		$i=count($this->dy);
		for($j=0;$j<$i;$j++)
		{
			$fy=$this->dy[$j];
			$s1="<tr><td width=%6>".$fy[0]."</td><td width=20%>".$fy[1]."</td>";
			if($fy[2]>$fy[3])
				$s2="<td width=8% id='tdid'>".$fy[2]."</td>";
			else
				$s2="<td width=8%>".$fy[2]."</td>";
			$s1.=$s2."<td width=8%>".$fy[3]."</td>";
			if($fy[4]>$fy[5])
				$s2="<td width=8% id='tdid'>".$fy[4]."</td>";
			else
				$s2="<td width=8%>".$fy[4]."</td>";
			$s1.=$s2."<td width=8%>".$fy[5]."</td>";
			if($fy[6]>$fy[7])
				$s2="<td width=8% id='tdid'>".$fy[6]."</td>";
			else
				$s2="<td width=8%>".$fy[6]."</td>";
			$s1.=$s2."<td width=8%>".$fy[7]."</td>";
			$s1.="<td width=10%>".$fy[8]."</td>";
			$s1.="<td width=16%>".$fy[9]."</td></tr>";
			echo $s1;
		}
	}
	public function show_tail()
	{echo "</table>";}
}//}}}
///////////////////////////////////////////////////////////
//{{{class tb_sleft implements tab_show 所有实时数据查看的控制界面类
class tb_sleft implements tab_show
{
	private $db; //数据库服务器信息数组
	private $ay; //ay是控制区域列表框的数据数组
	private $rq;
	private $cy,$dy;	//控制级别和数据类型
//{{{public function __construct()
	public function __construct($y)
	{
		if(($y == 1) || ($y == 2) || ($y == 3))
		{
			if($y==3)
				$y=0;
		}
		else
		{die("参数错误2！！");}	
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
		$x=array();
		array_push($x,$this->rq);
		array_push($x,$y);
		$a=new init_tab($x);
		$this->ay=$a->get_ctlarea();
		$this->cy=array("国控","省控","市控","县控","其他");//控制级别
		$this->dy=array("实时值","日均值");//数据类型
	}//}}}
//{{{public function __destruct()
	public function __destruct()
	{unset($this->db);unset($this->ay);unset($this->cy);unset($this->dy);}//}}}
//{{{public function show_header()
	public function show_header()
	{
		$i=count($this->ay);
		if(isset($_POST['sel1']))
			$k=$_POST['sel1'];
		else
			$k=$this->ay[0][0];
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
//{{{class tb_mxleft_fs implements tab_show  废水明晰的控制界面
class tb_mxleft_fs implements tab_show
{
	private $ay,$cy;	//ay是控制区域列表框的数据数组,cy是站点信息列表框的数据数组
	private $rq;
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
  			$nowtime = time();
  			$this->rq = date("Y-m-d",$nowtime);
		}
		global $arry;$x=array();
		array_push($x,$this->rq);
		array_push($x,0);
		$a=new init_tab($x);
		$this->ay=$a->get_ctlarea();
		$a->get_unit($this->ay);
		$this->cy=$arry;
		$this->my=array("国控","省控","市控","县控","其他");//控制级别
		$this->ny=array("小时值","日均值","小时超标值","日均超标值");//数据类型
	}//}}}
//{{{public function show_header()
	public function show_header()
	{//由于POST['sel1']和POST['sel2']改为传送aid和uid，不再是列表项序号了，因此必须要有个变量来保存序号。因为序号关系到
	//多维数组的序号选择。
		$num=0;
		$i=count($this->ay);
		if(isset($_POST["sel1p"]))
			$k=$_POST["sel1p"];
		else
			$k=$this->ay[0][0];
		$s1="<br><div class='dvmsg'>控制区域：</div><div class='select_style'><select name='sel1p' id='sel1p' onchange = 'onsss()'>";
		for($j=0;$j<$i;$j++)
		{
			$by=$this->ay[$j];
			if($by[0] == $k)
			{$s1.="<option value=".$by[0]." selected='selected'>".$by[1]."</option>";$num=$j;}
			else
				$s1.="<option value=".$by[0].">".$by[1]."</option>";
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
			{$s1.="<option value= ".$j." selected='selected'>".$this->my[$j]."</option>";}
			else
				$s1.="<option value= ".$j.">".$this->my[$j]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;	//end of control area and control level
		$i=count($this->cy);
		if($num >= $i)
			die("get array count error");
		unset($by);
		$by=$this->cy[$num];
		$dy=$by[$k1]; //取得不同控制级别的单位数组
		$i=count($dy);
		if(isset($_POST["sel2p"]))
			$k2 = $_POST["sel2p"];
		else
			$k2 = $dy[0][0];
		$s1="<br><div class='dvmsg1'>站点名称：</div><div class='select_style1'><select name='sel2p' id='sel2p'>";
		for($j=0;$j<$i;$j++)
		{
			if($dy[$j][0] == $k2)
			{$s1.="<option value=".$dy[$j][0]." selected='selected'>".$dy[$j][1]."</option>";$num1=$j;}
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
////////////////////////////////////////////////////////////
//{{{class tb_mxleft_fq implements tab_show  废气明晰的控制界面
class tb_mxleft_fq implements tab_show
{
	private $ay,$cy;	//ay是控制区域列表框的数据数组,cy是站点信息列表框的数据数组
	private $rq;
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
  			$nowtime = time();
  			$this->rq = date("Y-m-d",$nowtime);
		}
		global $arry;$x=array();
		array_push($x,$this->rq);
		array_push($x,1);
		$a=new init_tab($x);
		$this->ay=$a->get_ctlarea();
		$a->get_unit($this->ay);
		$this->cy=$arry;
		$this->my=array("国控","省控","市控","县控","其他");//控制级别
		$this->ny=array("小时值","日均值","小时超标值","日均超标值");//数据类型
	}//}}}
//{{{public function show_header()
	public function show_header()
	{
		$num=0;	
		$i=count($this->ay);
		if(isset($_POST["sel1p"]))
			$k=$_POST["sel1p"];
		else
			$k=$this->ay[0][0];
		$s1="<br><div class='dvmsg'>控制区域：</div><div class='select_style'><select name='sel1p' id='sel1p' onchange = 'onsss()'>";
		for($j=0;$j<$i;$j++)
		{
			$by=$this->ay[$j];
			if($by[0] == $k)
			{$s1.="<option value=".$by[0]." selected='selected'>".$by[1]."</option>";$num=$j;}
			else
				$s1.="<option value=".$by[0].">".$by[1]."</option>";
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
		if($num >= $i)
			die("get array count error");
		unset($by);
		$by=$this->cy[$num];
		$dy=$by[$k1]; //取得不同控制级别的单位数组
		$i=count($dy);
		if(isset($_POST["sel2p"]))
			$k2 = $_POST["sel2p"];
		else
			$k2 = $dy[0][0];
		$s1="<br><div class='dvmsg1'>站点名称：</div><div class='select_style1'><select name='sel2p' id='sel2p'>";
		for($j=0;$j<$i;$j++)
		{
			if($dy[$j][0] == $k2)
			{$s1.="<option value=".$dy[$j][0]." selected='selected'>".$dy[$j][1]."</option>";$num1=$j;}
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
////////////////////////////////////////////////////////////
//{{{class tb_mxleft_wsc implements tab_show  污水厂明晰的控制界面
class tb_mxleft_wsc implements tab_show
{
	private $ay,$cy;	//ay是控制区域列表框的数据数组,cy是站点信息列表框的数据数组
	private $rq;
	private $my,$ny;	//控制级别和数据类型
//{{{public function __construct()
	public function __construct($y)
	{
		if(($y == 3)||($y == 1)||($y == 2))
		{
			if($y == 3)
				$y=0;
		}
		else
		{die("参数错误0A1！！");}
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
		global $arry;$x=array();
		array_push($x,$this->rq);
		array_push($x,$y);
		$a=new init_tab($x);
		$this->ay=$a->get_ctlarea();
		$a->get_unit($this->ay);
		$this->cy=$arry;
		$this->my=array("国控","省控","市控","县控","其他");//控制级别
		$this->ny=array("小时值","日均值","小时超标值","日均超标值");//数据类型
	}//}}}
//{{{public function show_header()
	public function show_header()
	{
		$num=0;
		$i=count($this->ay);
		if(isset($_POST["sel1p"]))
			$k=$_POST["sel1p"];
		else
			$k=$this->ay[0][0];
		$s1="<br><div class='dvmsg'>控制区域：</div><div class='select_style'><select name='sel1p' id='sel1p' onchange = 'onsss()'>";
		for($j=0;$j<$i;$j++)
		{
			$by=$this->ay[$j];
			if($by[0] == $k)
			{$s1.="<option value=".$by[0]." selected='selected'>".$by[1]."</option>";$num=$j;}
			else
				$s1.="<option value=".$by[0].">".$by[1]."</option>";
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
		if($num >= $i)
			die("get array count error");
		unset($by);
		$by=$this->cy[$num];
		$dy=$by[$k1]; //取得不同控制级别的单位数组
		$i=count($dy);
		if(isset($_POST["sel2p"]))
			$k2 = $_POST["sel2p"];
		else
			$k2 = $dy[0][0];
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
?>












