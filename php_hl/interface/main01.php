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
	private $nowtile,$rq;
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
		//一下三个函数仅与取得数据有关，在构造函数中调用。
		$this->get_used_db();
		$this->get_ctlarea();
		$this->get_unit();
		$this->my=array("国控","省控","市控","县控","其他");//控制级别
		$this->ny=array("小时值","日均值","小时超标值","日均超标值");//数据类型
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
//{{{public function get_cur_year() no use..
	public function get_cur_year()
	{
		$dy=array();
		$dy=getdate(time());
		return $dy['year'];
	}//}}}
//{{{public function get_ctlarea()
	public function get_ctlarea()
	{
	//	$this->get_used_db($y);
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_errno())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		$res=mysqli_query($mysqli,"select aid,aname from area_info where bused = 1");
		if(mysqli_num_rows($res) != 1)
		{
			mysqli_free_result($res);
			mysqli_close($mysqli);
			die("严重错误！行政区划的设定错误！");
		}
		$row=mysqli_fetch_row($res);
		$this->ay=array();
		if($row[0]%10000 == 0) //省级系统
		{
			$_SESSION['sys_level'] = 1;
			$i=intval($row[0])+1;
			$j=$i+9998;
			$s1="SELECT aid,aname FROM area_info WHERE aid between ".$i." AND ".$j." AND aid%100 = 0";		
		}
		else
		{
			if($row[0]%100 == 0) //地市级系统
			{
				$_SESSION['sys_level'] = 2;
				$i=intval($row[0])+1;
				$j=$i+98;
				$s1="SELECT aid,aname FROM area_info WHERE aid between ".$i." AND ".$j;
			}
			else
			{
				$_SESSION['sys_level'] = 0; //县区级系统
				array_push($this->ay,$row);
			}
		}
		mysqli_free_result($res);
		if($_SESSION['sys_level'] > 0)
		{
			$res=mysqli_query($mysqli,$s1);
			while($row=mysqli_fetch_row($res))
			{
				$by=array($row[0],$row[1]);
				array_push($this->ay,$by);
			}
			mysqli_free_result($res);
		}
		mysqli_close($mysqli);
//		return $ay;
	}//}}}
//{{{public function get_unit()
	public function get_unit()
	{
		global $arry;
		if(!is_array($arry))
			$arry=array();
		//var_dump($this->ay);
		if(!isset($_SESSION['sys_level']))
			die("控制区域错误，无法取得相应的站点信息");
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_errno())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
//		mysqli_close($mysqli);
		if($_SESSION['sys_level'] == 0) //县区级
		{
			$s1="SELECT dname,dwid,ctlvl FROM dw_info WHERE aid = ".$this->ay[0][0];
			$this->cy=array();
			for($i=0;$i<5;$i++)
				$dy[$i]=array();
			$res=mysqli_query($mysqli,$s1);
			//$i=mysqli_num_rows($res);
			while($row=mysqli_fetch_row($res))
			{
			//	array_push($dy[$row[2]],$row);数据出错，可能越界
				switch($row[2])
				{//这样处理可以保证不越界
				case 0:
					array_push($dy[0],$row);
					break;
				case 1:
					array_push($dy[1],$row);
					break;
				case 2:
					array_push($dy[2],$row);
					break;
				case 3:
					array_push($dy[3],$row);
					break;
				case 4:
					array_push($dy[4],$row);
					break;
				};
			}
			$ey=array();
			for($i=0;$i<5;$i++)
				array_push($ey,$dy[$i]);
			array_push($this->cy,$ey); //保证与省及市控的处理一致
			array_push($arry,$ey);//同步全局变量
			//一下三个函数仅与取得数据有关，在构造函数中调用。
			mysqli_free_result($res);
			mysqli_close($mysqli);
			return;
		}
		if($_SESSION['sys_level'] == 1) //省级
		{
			for($i=0;$i<5;$i++)
				$dy[$i]=array();
			$i=count($this->ay);
			$this->cy=array();
			for($j=0;$j<$i;$j++)
			{
				$fy=$this->ay[$j];
				$m=intval($fy[0])+1;
				$n=$m+98;
				$s1="SELECT dwid,dname,ctlvl FROM dw_info WHERE aid BETWEEN ".$m." AND ".$n;
				$ey=array();
				$res=mysqli_query($mysqli,$s1);
				while($row=mysqli_fetch_row($res))
				{
					switch($row[2])
					{
					case 0:
						array_push($dy[0],$row);
						break;
					case 1:
						array_push($dy[1],$row);
						break;
					case 2:
						array_push($dy[2],$row);
						break;
					case 3:
						array_push($dy[3],$row);
						break;
					case 4:
						array_push($dy[4],$row);
						break;
					};
				}
				for($k=0;$k<5;$k++)
					array_push($ey,$dy[$k]);
				array_push($this->cy,$ey);
				array_push($arry,$ey);//同步全局变量
				mysqli_free_result($res);
			}
			mysqli_close($mysqli);
			return;
		}
		if($_SESSION['sys_level'] == 2) //地市级
		{
			$i=count($this->ay);
			$this->cy=array();
			for($j=0;$j<$i;$j++)
			{
				$zy=$this->ay[$j];
				$s1="SELECT dwid,dname,ctlvl FROM dw_info WHERE aid = ".$zy[0];
				$ey=array();
				for($k=0;$k<5;$k++)
					$dy[$k]=array();
				$res=mysqli_query($mysqli,$s1);
				while($row=mysqli_fetch_row($res))
				{
					//array_push($ey,$row);
					switch($row[2])
					{
					case 0:
						array_push($dy[0],$row);
						break;
					case 1:
						array_push($dy[1],$row);
						break;
					case 2:
						array_push($dy[2],$row);
						break;
					case 3:
						array_push($dy[3],$row);
						break;
					case 4:
						array_push($dy[4],$row);
						break;
					};
				}
				for($k=0;$k<5;$k++)
					array_push($ey,$dy[$k]);
				array_push($this->cy,$ey);
				array_push($arry,$ey);//同步全局变量
				mysqli_free_result($res);
			}
			mysqli_close($mysqli);
		}
		return;
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
		$s1="<br><div class='dvmsg1'>单位名称：</div><div class='select_style1'><select name='sel2p' id='sel2p'>";
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
	{}//}}}
//{{{public function show_tail()
	public function show_tail()
	{}//}}}
}//}}}






?>
