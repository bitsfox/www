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
{
	define("FULL_PATH",dirname(__FILE__)."/");
	define("GLOB_DEF",constant("FULL_PATH")."config/glob_def.php");
}
require_once(constant("GLOB_DEF"));	//全局常量及变量定义文件的引入
include_once(constant("FULL_PATH")."include/head_doc.php"); //起始头文件的引入
include_once(constant("FULL_PATH")."include/headbar_doc.php"); //浮动菜单栏定义文件的引入
include_once(constant("FULL_PATH")."include/foot.php");	//底部文件的引入

?>
