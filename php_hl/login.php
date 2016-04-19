<style>
#clear
{clear:both;}
ul li{list-style-type:none;}
div{text-align:center;}
.aas_class
{background-color:#F3F3F3;margin:0 auto;padding:0;width:30%;}
#div1
{background-color:#F3F3F3;width:30%;margin:0 auto;padding:20px 0;}
</style>
<?php
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."php_hl/";
	define("FULL_PATH",$s2);
}
?>
<?php
header("Content-Type:text/html;charset=UTF-8");
session_start();
if(!isset($_SESSION['leftcnt']))
	$_SESSION['leftcnt']=4;
$str=constant("FULL_PATH")."interface/main.php";
//require_once("interface/main.php");
require_once($str);
if($_SESSION['leftcnt'] <= 0)
{
//	header("Refresh:2 url=./index.php");
	die("fuck you~");
}
global $tybitsfox;
if($_SESSION['logok'] == $tybitsfox['corename'])
{
	if(isset($_SESSION['user']))
	{
		header("Refresh:0 url=./index.php");
		die();
	}
}
?>
<html><head><title><?php echo $tybitsfox['title'];?></title></head><body>
<form name="login" method="post" action="login.php">
<div><h2><?php echo $tybitsfox['logmsg']?></h2></div>
<div class='ass_class'>
<div id='div1'>
<table width=100% border=0>
<tr><td width=30%>用户名：</td><td width=40%><input type='text' name='user' size=30 /></td><td width=30%></td></tr>
<tr><td width=30%>密  码：</td><td width=40%><input type='password' name='password' size=30 /></td><td width=30%></td></tr>
<tr><td width=30%>验证码：</td><td width=40%><input type='text' name='verf' size=30 /></td>
<td width=30%><img src="ta_verf1.php" title="点击更换图片" onclick="this.src=this.src+'?'+Math.random();" /></td>
<tr><td colspan=3 width=100% align=center><br><input type='submit' name='submit' value='登录'/> &nbsp;&nbsp;&nbsp;&nbsp;
<input type='reset' name='reset' value="重置"/>&nbsp;&nbsp;&nbsp;&nbsp;<a href='./template/t01/reg.php'>注册</a></td></tr>
</table></div></div></form></body></html>
<?php
function check_verf()
{
	if($_SESSION['CODE'] == $_POST['verf'])
		return true;
	return false;
}
if($_POST['submit'] == true)
{
	if(check_verf())
	{
		if(_verf_db($_POST['user'],$_POST['password']) != 0)
		{
			$st="<div>用户名或者密码错误，可登录次数：".$_SESSION['leftcnt']."次 </div>";
			echo $st;
			$_SESSION['leftcnt']-=1;
			if($_SESSION['leftcnt'] <= 0)
				die();
		}
		else
		{
			$_SESSION['logok'] = $tybitsfox['corename'];
			$_SESSION['leftcnt']	= 4;
			$_SESSION['user']	=	$_POST['user'];
			header("Refresh:0 url=./index.php");
		}
	}
	else
	{
		$st="<div>验证码错误，可登录次数：".$_SESSION['leftcnt']."次 </div>";
		echo $st;
		$_SESSION['leftcnt']-=1;
		if($_SESSION['leftcnt'] <= 0)
			die();
	}
}
else
{
	if(!isset($_SESSION['leftcnt']))
		$_SESSION['leftcnt']=4;
}

?>



