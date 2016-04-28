<?php
putenv('GDFONTPATH='.realpath('.'));
session_start();
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."php_hl/";
	define("FULL_PATH",$s2);
}
if(!isset($scr_width))
{
	$str=constant("FULL_PATH")."config/main.php";
	require_once($str);
}
$im = imagecreatetruecolor($scr_width, $scr_height); //创建画布
$red = imagecolorallocate($im, 255, 0, 0); //设置一个颜色变量为红色
$blue = imagecolorallocate($im,0,0,255);//设置蓝色
$background_color = imagecolorallocate($im,0,0,0); //白色
$font="YaHei.Consolas.1.11b.ttf";
//$s1=realpath('.');
//imagestring($im,5,10,10,$s1,$red);
imagettftext($im,20,90,50,280,$red,$font,"泰安市环保局 田勇");

header('Content-type:image/png'); //通知浏览器这不是文本而是一个图片
imagepng($im);
imagedestroy($im);
?>
