<?php
/**
 @package		huili manager
 @version		0.0.0.1
 @author		田勇 Alisa tybitsfox <tybitsfox@163.com>
 @license		GPLv2

本文件是超文本头部的定义及输出文件，包括了对所需css和js文件的引入
 **/
?>
<?php
if(!defined("FULL_PATH"))
	die("run error.errno:#00001");
if(!defined("CSS_FILE"))
	die("run error.errno:#00002");
echo "<!DOCTYPE html>\n<html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />\n";
echo "<title>testtest</title>\n";	//<--这里修改标题
echo "<link rel='stylesheet' href='".constant("CSS_FILEB")."'>";
echo "<link rel='stylesheet' href='".constant("CSS_FILE")."'>";
echo "<script src='".constant("JS_FILE_ONE")."'></script>";
echo "<script src='".constant("JS_FILE_TWO")."'></script>";
echo "</head><body>";
?>
