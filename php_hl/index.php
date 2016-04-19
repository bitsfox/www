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
/*echo "<a href = 'javascript:void(0)' onclick = 'unreg()'>注销</a>";
$obj=new my_init();
$ary=array($obj->get_base_dir(),$obj->get_conf_dir(),$obj->get_temp_dir(),$obj->get_incl_dir(),$obj->get_core_dir(),$obj->get_intr_dir());
$str=implode(",",$ary);
echo $str; */
global $tybitsfox;
$str=constant("FULL_PATH")."template/01/01.html";
include_once($str);
//$st=constant("FULL_PATH")."template/01/m01.html";
//include_once($st);
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
//echo "</div></body></html>";
?>
<script type="text/javascript">
function unreg()
{
	location.href="template/t01/login1.php";
}
</script>



