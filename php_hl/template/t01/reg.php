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
session_start();
if(!defined(constant("FULL_PATH")))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2)+7;
	$s2=substr($s1,0,$i);
	define("FULL_PATH",$s2);
}
$st="/var/www";
$re=& Registry::getInstance();
$re->set('AAAAS',$st);
//$re=& Registry::getInstance();
//$st1=& $re->get('AAAAS');
$str=constant("FULL_PATH")."config/main.php";
echo $str;
die();
?>
<?php
header("Content-Type:text/html;charset=UTF-8");
if($_SESSION['leftcnt'] < 0)
{
//	header("Refresh:2 url=./index.php");
	die("fuck you~");
}
global $tybitsfox;
?>
<html><head><title><?php echo $tybitsfox['title'];?></title></head><body>
<form name="register" method="post" action="./reg.php">
<div><h2><?php echo $tybitsfox['regmsg'];?></h2></div>
<div class='ass_class'>
<div id='div1'>
<ul><li id='da1'>用户名：</li><li id='da2'><input type='text' name='user' size=30 /></li></ul>
<ul><li id='da1'>密码：</li><li id='da2'><input type='password' name='password' size=30 /></li></ul>
<ul><li id='da1'>再次输入密码：</li><li id='da2'><input type='password' name='password' size=30 /></li></ul>
<ul><li id='da3'><input type='submit' name='submit' value='确定'/></li></ul>
</div></div>

</body></html>







<?php
/*
 <?php
$db = new DBConnection;
$settings = new Settings_XML;
$user = new User;
// Register objects
$registry =& Registry::getInstance();
$registry->set ('db', $db);
$registry->set ('settings', $settings);
$registry->set ('user', $user);
function test() {
    $registry =& Registry::getInstance();
    $db =& $registry->get('db');
    $settings =& $registry->get('settings');
    $user =& $registry->get('user');
    // Do something with the objects
}
?>
 */
?>









