<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
#require_once("config/main.php");
require_once("interface/main.php");
_verf_fox();
echo "<a href = 'javascript:void(0)' onclick = 'unreg()'>注销</a>";
$obj=new my_init();
$ary=array($obj->get_base_dir(),$obj->get_conf_dir(),$obj->get_temp_dir(),$obj->get_incl_dir(),$obj->get_core_dir(),$obj->get_intr_dir());
$str=implode(",",$ary);
echo $str;
//	<meta http-equiv="Refresh" content="2;URL=./login.php" />;
//	alert("用户名或密码错误！");
//	$_SESSION['logok']=NULL;
//	$_SESSION['logok'] = NULL;
//	winndow.location.href='./login.php';
?>
<script type="text/javascript">
function unreg()
{
	location.href="template/t01/login1.php";
}
</script>



