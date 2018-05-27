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
if(isset($_GET["selecter"]))
{
	switch($_GET["selecter"])
	{
	case $GLOB_DEF['PG_ONE']:
		echo $EX_HTML['expert_beg'];
		$k=count($GLOB_DEF['EXPE_ARRY']);
		for($i=0;$i<$k;$i++)
		{
			$ay=array();
			$ay=$GLOB_DEF['EXPE_ARRY'][$i];
			$st=sprintf($EX_HTML['expert_list'],$ay[0],$ay[1],$ay[2]);
			echo $st;
			unset($ay);
		}
		echo $EX_HTML['expert_end'];
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
	echo $EX_HTML['home'];
	echo $EX_HTML['feature'];
}
include_once(constant("FULL_PATH")."include/foot.php");	//底部文件的引入
?>
