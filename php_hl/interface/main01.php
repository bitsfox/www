<?php
/*本文件将对系统常用的一些函数进行定义。
函数类别的定义：
1、原子函数：独立实现一个单一功能的函数，原子函数不会调用其他自定义函数来协同操作。
2、基本功能函数：可以提供一个单一实用功能的函数，该函数可能会调用一个或多个原子函数或其他基本功能函数协同实现这一实用功能。
3、复合功能函数：可以根据传入参数实现多重功能的函数，该函数可能会调用上述两类函数来协同实现其功能。
2,3类函数的区别：主要在于函数的执行结果是否明确，也即函数的返回值是否单一，基本功能函数的返回结果是明确的。而复合函数的返回
				 结果可能会随传入的参数有多种结果。
本文件将着重于定义上述1,2类函数。				 
 

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
//{{{ require global variables is include!
if(!isset($database))
{
	$str=constant("FULL_PATH")."config/main.php";
	require_once($str);
}//}}}
//{{{ test to use mysqi
function get_danwei()
{
	global $database;
//	$mysql=new mysqli("127.0.0.1",$database['user'],$database['pwd'],$database['dbname'],3306);
	$mysqli=mysqli_connect("127.0.0.1",$database['user'],$database['pwd'],$database['dbname'],3306);
	if(mysqli_connect_errno())
		die("database connect error");
	mysqli_set_charset($mysqli,"utf8");
	$res=mysqli_query($mysqli,"SELECT * from zd_info");
	while($row=mysqli_fetch_row($res))
	{
		$str="uid=".$row[0]." mncode=".$row[1]." dwid=".$row[2]." uname=".$row[3]."<br>";
		echo $str;
	}
	mysqli_free_result($res);
	mysqli_close($mysqli);
}//}}}
//{{{function get_used_db($y) 基本功能函数，用来确定当前要使用的服务器及数据库
/*
函数功能：取得当前要使用的服务器及数据库的资料。
传入参数：为空，则取得当前年度所用的服务器及数据库资料
		  否则，传入参数为用户指定要访问的年份。
返回值：  成功：为包含服务器ip，port,数据库名称，用户及密码的数组。
		  失败：die输出信息。
 */
function get_used_db($y)
{
	global $DB_ADDR_TY,$DB_PORT_TY,$DB_NAME_TY,$DB_PWD_TY;
	global $DB_USER_TY;
	if($y != NULL)
		$i=intval($y);
	else
		$i=get_cur_year();
	if(!isset($DB_ADDR_TYP[$i]))
		die("你所选择的日期".$i."年，没有数据！");
	$dbay=array();
	array_push($dbay,$DB_ADDR_TY[$i]);
	array_push($dbay,$DB_PORT_TY[$i]);
	array_push($dbay,$DB_NAME_TY[$i]);
	array_push($dbay,$DB_USER_TY);
	array_push($dbay,$DB_PWD_TY);
//	var_dump($dbay);
/*	echo "<br>target database msg is:<br>addr: ".$DB_ADDR_TY[$i]."<br>port: ".$DB_PORT_TY[$i]."<br>dbname: ".$DB_NAME_TY[$i]."<br>user: ".$DB_USER_TY."<br>pwd: ".$DB_PWD_TY;
	print_r($dbay);*/
	return $dbay;
}//}}}
//{{{function get_cur_year() 原子函数,实现取得当前年份
function get_cur_year()
{
	$ay=array();
	$ay=getdate(time());
	return $ay['year'];
}//}}}
//{{{function crt_conn($y) 
function crt_conn($y)
{
	$ay=array();
	$ay=get_cur_dbmsg($y);
	$str="mysqli=mysqli_connect('".$ay[0]."','".$ay[3]."','".$ay[4]."','".$ay[2]."',".$ay[1].");";
	echo $str;
}


?>
