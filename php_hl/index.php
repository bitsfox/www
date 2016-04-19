<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."php_hl/";
	define("FULL_PATH",$s2);
}
$str=constant("FULL_PATH")."interface/main.php";
require_once($str);
_verf_fox();
global $tybitsfox;
$str=constant("FULL_PATH")."template/01/01.html";
include_once($str);
switch($arun[0])
{
	case 0:
		$str=constant("FULL_PATH")."template/01/m01.html";
		require_once($str);
		break;
	case 1:
	case 2:
	case 3:
		break;
};
?>
<script type="text/javascript">
function unreg()
{
	location.href="template/t01/login1.php";
}
</script>



