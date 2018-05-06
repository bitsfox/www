<?php
/**
 @package		huili manager
 @version		0.0.0.1
 @author		田勇 Alisa tybitsfox <tybitsfox@163.com>
 @license		GPLv2

本文件是系统所需的全局变量和常量的定义文件
 **/
?>
<?php
if(!defined("CSS_FILE"))
{
	define("WORK_PLACE","/huili/");
	define("CSS_FILE",constant("WORK_PLACE")."css/fin.css");
	define("JS_FILE_ONE",constant("WORK_PLACE")."js/jquery.min.js");
	define("JS_FILE_TWO",constant("WORK_PLACE")."js/core.aadddae364.js");
	define("DB_SET",constant("FULL_PATH")."config/db_set.php");
}
require_once(constant("DB_SET"));
?>
