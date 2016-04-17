<style>
#clear
{clear:both;}
ul li{list-style-type:none;}
div{text-align:center;}
.aas_class
{background-color:#F3F3F3;margin:0 auto;padding:0;width:40%;}
#div1
{background-color:#F3F3F3;width:40%;margin:0 auto;padding:20px 0;}
#da1
{background-color:#F3F3F3;width:30%;margin:0 auto;padding:0px 0;float:left;}
#da2
{background-color:#F3F3F3;width:70%;margin:0 auto;padding:0px 0;}
#da3
{background-color:#F3F3F3;width:100%;margin:0 auto;padding:0px 0;}
</style>
<?php
header("Content-Type:text/html;charset=UTF-8");
session_start();
if($_SESSION['leftcnt'] < 0)
{
//	header("Refresh:2 url=./index.php");
	die("fuck you~");
}
?>
<html><head><title>山东汇力污染源监控平台</title></head><body>
<form name="register" method="post" action="./reg.php">
<div><h2>山东汇力公司污染源监控用户注册</h2></div>
<div class='ass_class'>
<div id='div1'>
<ul><li id='da1'>用户名：</li><li id='da2'><input type='text' name='user' size=30 /></li></ul>
<ul><li id='da1'>密码：</li><li id='da2'><input type='password' name='password' size=30 /></li></ul>
<ul><li id='da1'>再次输入密码：</li><li id='da2'><input type='password' name='password' size=30 /></li></ul>
<ul><li id='da3'><input type='submit' name='submit' value='确定'/></li></ul>
</div></div>

</body></html>



















