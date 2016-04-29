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
$str=constant("FULL_PATH")."config/main.php";
require_once($str);
$scr_width=$_SESSION['gra_width'];
$gx=$_SESSION['gra_gx'];
?>
<?php
//global $scr_width,$scr_height,$gx,$gy;	
$im = imagecreatetruecolor($scr_width, $scr_height); //创建画布
$red = imagecolorallocate($im, 255, 0, 0); //设置一个颜色变量为红色
$blue = imagecolorallocate($im,0,0,255);//设置蓝色
$background_color = imagecolorallocate($im,255,255,255); //白色
$black = imagecolorallocate($im,0,0,0); //黑色
imagefill($im,0,0,$background_color);
$s1=(string)$scr_width;
imagestring($im,5,10,10,$s1,$red);
imageline($im,40,40,40,$scr_height-40,$black);
imageline($im,40,$scr_height-40,$scr_width-40,$scr_height-40,$black);
$i=count($gx);
if($i<25)
	$j=4;
else
	$j=5;
$h=$scr_height-40;$w=40;$step=($scr_width-60)/$i;
for($k=0;$k<$i;$k++)
{
	if(($k%$j) == 0)
	{//画长竖线
		imageline($im,$w+$step*$k,$h,$w+$step*$k,$h+8,$black);
	}
	else
	{
		imageline($im,$w+$step*$k,$h,$w+$step*$k,$h+4,$black);
	}
}
$font="YaHei.Consolas.1.11b.ttf";
//$s1=realpath('.');
//imagestring($im,5,10,10,$s1,$red);
imagettftext($im,16,90,80,280,$red,$font,"泰安市环保局 田勇");
header('Content-type:image/png'); //通知浏览器这不是文本而是一个图片
imagepng($im);
imagedestroy($im);
?>
