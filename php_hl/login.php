<style>
#clear
{clear:both;}
ul li{list-style-type:none;}
div{text-align:center;}
.aas_class
{background-color:#F3F3F3;margin:0 auto;padding:0;width:30%;}
#div1
{background-color:#F3F3F3;width:30%;margin:0 auto;padding:20px 0;}
#da1
{background-color:#F3F3F3;width:20%;margin:0 auto;padding:0px 0;float:left;}
#da2
{background-color:#F3F3F3;width:80%;margin:0 auto;padding:0px 0;}
#da3
{background-color:#F3F3F3;width:100%;margin:0 auto;padding:0px 0;}
</style>
<?php
function get_full()
{
	$str=__FILE__;
	$i=strlen($str)-strlen("login.php");
	$st=substr($str,0,$i);
	define("FULL_PATH",$st);
}
get_full();
?>
<?php
header("Content-Type:text/html;charset=UTF-8");
session_start();
$str=constant("FULL_PATH")."interface/main.php";
//require_once("interface/main.php");
require_once($str);
if($_SESSION['leftcnt'] < 0)
{
//	header("Refresh:2 url=./index.php");
	die("fuck you~");
}
global $tybitsfox;
if($_SESSION['logok'] == $tybitsfox['corename'])
{
	header("Refresh:1 url=./index.php");
	die();
}
?>
<html><head><title><?php echo $tybitsfox['title'];?></title></head><body>
<form name="login" method="post" action="login.php">
<div><h2><?php echo $tybitsfox['logmsg']?></h2></div>
<div class='ass_class'>
<div id='div1'>
<ul><li id='da1'>用户名：</li><li id='da2'><input type='text' name='user' size=30 /></li></ul>
<ul><li id='da1'>密码：</li><li id='da2'><input type='password' name='password' size=30 /></li></ul>
<ul><li id='da3'><input type='submit' name='submit' value='登录'/> &nbsp;&nbsp;&nbsp;&nbsp;
<input type='reset' name='reset' value="重置"/>&nbsp;&nbsp;&nbsp;&nbsp;
<a href='./template/t01/reg.php'>注册</a>
</li></ul>
</div>
</div></form>
</body></html>
<?php
if($_POST['submit'] == true)
{
	if(_verf_db($_POST['user'],$_POST['password']) != 0)
	{
		$st="<div>用户名或者密码错误，登录次数：".$_SESSION['leftcnt']."次 </div>";
		echo $st;
		$_SESSION['leftcnt']-=1;
		if($_SESSION['leftcnt'] <= 0)
			die();
	}
	else
	{
		$_SESSION['logok'] = "tiny";
		header("Refresh:1 url=./index.php");
	}
}
else
{
	$_SESSION['leftcnt']=4;
}

?>



