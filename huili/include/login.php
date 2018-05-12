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
if(!defined("FULL_PATH"))
	require_once("../need.php");
require_once(constant("FULL_PATH")."lib/main.php");
global $SIGN_DEF;
echo $SIGN_DEF["head"];
echo $SIGN_DEF["title"];
echo $SIGN_DEF["css"];
echo $SIGN_DEF["js"];
echo $SIGN_DEF["head_end"];
for($i=1;$i<=10;$i++)
{
	$str=sprintf("body_10_%d",$i);
	echo $SIGN_DEF[$str];
}
echo $SIGN_DEF["tail"];
?>
