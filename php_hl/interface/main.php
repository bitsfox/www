<?php
//session_start();
//确保包含了全局变量的定义文件
$ifile	=	"./config/main.php";
if((!is_array($tybitsfox)) && is_file($ifile))
	require_once($ifile);
else
	die("error!!");
//包含接口的定义文件
require_once("./include/inter_def.php");


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

}

?>












