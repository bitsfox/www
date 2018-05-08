<?php
if(!defined("FULL_PATH"))
{
	define("FULL_PATH",dirname(__FILE__)."/");
	define("GLOB_DEF",constant("FULL_PATH")."config/glob_def.php");
}
require_once(constant("GLOB_DEF"));	//全局常量及变量定义文件的引入
?>
