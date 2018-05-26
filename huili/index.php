<?php
/**
 @package		huili manager
 @version		0.0.0.1
 @author		田勇 Alisa tybitsfox <tybitsfox@163.com>
 @license		GPLv2

工程的入口文件
 **/
?>
<?php
if(!defined("FULL_PATH"))
	define("FULL_PATH",substr(dirname(__FILE__),0,strlen(dirname(__FILE__))-strlen(strstr(dirname(__FILE__),"huili")))."huili".DIRECTORY_SEPARATOR);
require_once(constant("FULL_PATH")."config/glob_new.php");	//全局常量及变量定义文件的引入
include_once(constant("FULL_PATH")."include/head_doc.php"); //起始头文件的引入
//include_once(constant("FULL_PATH")."include/headbar_doc.php"); //浮动菜单栏定义文件的引入
if(isset($_GET["selecter"]))
{
	switch($_GET["selecter"])
	{
	case $GLOB_DEF['PG_ONE']:
		include_once(constant("FULL_PATH")."include/expert.php");
		break;
	case $GLOB_DEF['PG_TWO']:
		include_once(constant("FULL_PATH")."include/plateform.php");
		break;
	case $GLOB_DEF['PG_THR']:
		include_once(constant("FULL_PATH")."include/engineer.php");
		break;
	case $GLOB_DEF['PG_FUR']:
		include_once(constant("FULL_PATH")."include/blog.php");
	default:
		break;
	}
}
else
{
	include_once(constant("FULL_PATH")."include/home.php");
	include_once(constant("FULL_PATH")."include/features.php");//features.php
}
include_once(constant("FULL_PATH")."include/foot.php");	//底部文件的引入

?>
