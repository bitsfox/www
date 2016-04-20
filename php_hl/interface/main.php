<?php
session_start();
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."php_hl/";
	define("FULL_PATH",$s2);
}
//确保包含了全局变量的定义文件
$ifile=constant("FULL_PATH")."config/main.php";
require_once($ifile);
$st=constant("FULL_PATH")."include/inter_def.php";
require_once($st);

//{{{ class my_init implements inter_base_def
class my_init implements inter_base_def
{
	public function __construct()
	{//定义常量
		global $tybitsfox;
		define("BASE_DIR",$tybitsfox['www_path']."/php_hl");
		define("TEMP_DIR",constant("BASE_DIR")."/template");
		define("INCL_DIR",constant("BASE_DIR")."/include");
		define("CONF_DIR",constant("BASE_DIR")."/config");
		define("CORE_DIR",constant("BASE_DIR")."/core");
		define("INTR_DIR",constant("BASE_DIR")."/interface");
	}
	public function get_base_dir()
	{return constant("BASE_DIR");}
	public function get_conf_dir()
	{return constant("CONF_DIR");}
	public function get_temp_dir()
	{return constant("TEMP_DIR");}
	public function get_incl_dir()
	{return constant("INCL_DIR");}
	public function get_core_dir()
	{return constant("CORE_DIR");}
	public function get_intr_dir()
	{return constant("INTR_DIR");}
}//}}}
//{{{class msql implements sql_def
class msql implements sql_def
{
	private $str;
	private $conn=NULL;
	public function __construct()
	{
		global $database;
		$this->str="'".$database['host']."','".$database['user']."','".$database['pwd']."'";
	}
	public function get_db_type()
	{return $database['type'];}
	public function connect_db()
	{
		$this->conn=MYSQL_connect($str) or die("connect die: ".MYSQL_error());
		return $this->conn;
	}
	public function query_db()
	{
		global $database;
		if($this->conn == NULL)
			$this->connect_db();
		MYSQL_select_db($database['dbname']) or die("select_db die:".MYSQL_error());
		$result=mysql_query($database['logstr'],$this->conn) or die("query die:".MYSQL_error());
		$ay=array();
		while($rows=mysql_fetch_row($result))
			array_push($ay,$row);
		MYSQL_free_result($result);
		return $ay;
	}
	public function close_db()
	{
		MYSQL_close($this->conn);
		$this->conn=NULL;
	}
	public function __destruct()
	{
		if($this->conn != NULL)
			$this->close_db();
	}
}
//}}}
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
	global $database;
	$i=1;
	$conn=MYSQL_connect($database['host'],$database['user'],$database['pwd']) or die("connect die: ".MYSQL_error());
	MYSQL_select_db($database['dbname']) or die("select_db die: ".MYSQL_error());
	$result=mysql_query($database['logstr'],$conn) or die("query die: ".MYSQL_error());
//	$ay=array();
	while($rows=mysql_fetch_row($result))
	{
	//	array_push($ay,$row);
	//	print_r($rows);
		if(($rows[0] == $u) && ($rows[1] == $p))
		{
			$i=0;break;
		}
	}
	MYSQL_free_result($result);
	MYSQL_close($conn);
	return $i;
}//}}}
//{{{function _reg_db($u,$p)
function _reg_db($u,$p)
{
	global $database;
	$i=0;
	$conn=MYSQL_connect($database['host'],$database['user'],$database['pwd']) or die("connect die: ".MYSQL_error());
	MYSQL_select_db($database['dbname']) or die("select_db die: ".MYSQL_error());
	$result=mysql_query($database['logstr'],$conn) or die("query die: ".MYSQL_error());
	while($rows=mysql_fetch_row($result))
	{
		if($rows[0] == $u)
		{
			$i=1;break;
		}
	}
	mysql_free_result($result);
	if($i !=0 )
	{
		mysql_close($conn);
		return $i;
	}
	$str=sprintf($database['regstr'],$u,$p);
	$result=mysql_query($str,$conn) or die("query die again: ".mysql_error());
//	mysql_free_result($res); mysql_query返回值不一定都是资源型的（查询时是），此时的写入返回值是bool型的，所以不能（也不用）释放
	mysql_close($conn);
	return 0;
}//}}}
//{{{ class tb_wsc implements tab_wushuichang
class tb_wsc implements tab_wushuichang
{
	private $ay,$cy;
	private $dy;
	public function __construct()
	{
		$this->ay=array("编号","单位名称","COD","氨氮","累计流量");
		$this->cy=array("监测值","标准值");
		//only for test!
		$ey=array("1","清源水务一污","入口","164","--","23.10","--","--");
		array_push($this->dy,$ey);
		$ey=array("1","清源水务一污","出口","22","50","0.42","8","8744659");
		array_push($this->dy,$ey);
		$ey=array("2","康龙排水","入口","398","--","46.83","--","--");
		array_push($this->dy,$ey);
		$ey=array("2","康龙排水","出口","38","50","1.77","5","5131181");
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
		$i=count($this->dy);
		echo "count is:".$i;
		return;
		for($j=0;$j<$i;$j++)
		{
			$fy=$this->dy[$j++];
			$s1="<tr><td width=%10 rowspan=2>".$fy[0]."</td><td width=25% rowspan=2>".$fy[1]."</td>";
			$s1.="<td width=5%>".$fy[2]."</td><td width=10%>".$fy[3]."</td><td width=10%>".$fy[4]."</td>";
			$s1.="<td width=10%>".$fy[5]."</td><td width=10%>".$fy[6]."</td><td width=20%>".$fy[7]."</td></tr>";
			$fy=$this->dy[$j];
			$s1.="<tr><td width=5%>".$fy[2]."</td><td width=10%>".$fy[3]."</td><td width=10%>".$fy[4]."</td>";
			$s1.="<td width=10%>".$fy[5]."</td><td width=10%>".$fy[6]."</td><td width=20%>".$fy[7]."</td></tr>";
			echo $s1;
		}
	}
	public function show_tail()
	{echo "</table>";}
}//}}}



?>












