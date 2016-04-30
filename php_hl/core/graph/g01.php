<?php
putenv('GDFONTPATH='.realpath('.'));
session_start();
/* 由于页面刷新后所有global的数据都恢复成初始值，所以，一些经过刷新后仍需保存或传递的值应保存在session或者cookie中。
   既然无法通过global传送数据，那么也就没必要包含下面的文件了
   在调用生成图片前，将所需的数据全部以session的形式传送进来
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."php_hl/";
	define("FULL_PATH",$s2);
}
$str=constant("FULL_PATH")."config/main.php";
require_once($str);  */
$s=$_SESSION['gra_width'];
$sw=$s[0];$sh=$s[1];
$gx=$_SESSION['gra_gx'];
$gy=$_SESSION['gra_gy'];
$gd=$_SESSION['gra_gdata'];
?>
<?php
//global $scr_width,$scr_height,$gx,$gy;	
$im = imagecreatetruecolor($sw, $sh); //创建画布
$red = imagecolorallocate($im, 255, 0, 0); //设置一个颜色变量为红色
$blue = imagecolorallocate($im,0,0,255);//设置蓝色
$w = imagecolorallocate($im,255,255,255); //白色
$black = imagecolorallocate($im,0,0,0); //黑色
$font="YaHei.Consolas.1.11b.ttf";
$style=array($red,$red,$red,$red,$red,$red,$red,$w,$w,$w,$w,$blue,$blue,$blue,$blue,$blue,$blue,$blue,$w,$w,$w,$w);
imagesetstyle($im,$style);
imagefill($im,0,0,$w);
imageline($im,40,40,40,$sh-40,$black);
imageline($im,40,$sh-40,$sw-40,$sh-40,$black);
$i=count($gx);
if($i<25)
	$j=4;
else
	$j=5;
$h=$sh-40;$w=40;$step=($sw-60)/$i;
for($k=0;$k<$i;$k++)
{
	if(($k%$j) == 0)
	{//画长竖线
		imageline($im,$w+$step*$k,$h,$w+$step*$k,$h+8,$black);
		imagettftext($im,7,0,$w+$step*$k-5,$h+12,$black,$font,$gx[$k]);
	}
	else
	{
		imageline($im,$w+$step*$k,$h,$w+$step*$k,$h+4,$black);
	}
}
$a1=array();$a2=array();
$a1=$gy[0];$a2=$gy[1];
$i=count($a1);
$step=($sh-60)/6;
for($k=1;$k<6;$k++)
{
	if($k==3)
	{//画长横线
		imageline($im,$w-8,$h-$step*$k,$w,$h-$step*$k,$black);
		imagettftext($im,7,0,4,$h-$step*$k-4,$red,$font,$a1[$k-1]);
		imagettftext($im,7,0,4,$h-$step*$k+4,$blue,$font,$a2[$k-1]);
		imageline($im,$w,$h-$step*$k,$sw-40,$h-$step*$k,IMG_COLOR_STYLED);
	}
	else
	{
		imageline($im,$w-4,$h-$step*$k,$w,$h-$step*$k,$black);
		imagettftext($im,7,0,4,$h-$step*$k-4,$red,$font,$a1[$k-1]);
		imagettftext($im,7,0,4,$h-$step*$k+4,$blue,$font,$a2[$k-1]);			
	}
}
$max1=$a1[4];$max2=$a2[4];
//ok，开始画曲线
unset($a1);unset($a2);
$a1=array();$a2=array();
$a1=$gd[0];$a2=$gd[1];
$i=count($a1);
$h=$sh-40;$w=($sw-60)/$i;
for($k=0;$k<($i-1);$k++)
{
	if($a1[$k]!=0 || $a1[$k+1]!=0)
	{
		$v1=$h-($a1[$k]/$max1)*$h;
		$v2=$k*$w+40;
		$v3=$h-($a1[$k+1]/$max1)*$h;
		$v4=($k+1)*$w+40;
		imageline($im,$v2,$v1,$v4,$v3,$red);
		imagefilledellipse($im,$v4,$v3,6,6,$red);
	}
	if($a2[$k]!=0 || $a2[$k+1]!=0)
	{
		$v1=$h-($a2[$k]/$max2)*$h;
		$v2=$k*$w+40;
		$v3=$h-($a2[$k+1]/$max2)*$h;
		$v4=($k+1)*$w+40;
		imageline($im,$v2,$v1,$v4,$v3,$blue);
		imagefilledellipse($im,$v4,$v3,6,6,$blue);
	}
}
$s1="红色曲线：COD";
imagettftext($im,10,0,$sw-200,20,$red,$font,$s1);
$s2="蓝色曲线：氨氮";
imagettftext($im,10,0,$sw-200,40,$blue,$font,$s2);

//$s1=realpath('.');
//imagestring($im,5,10,10,$s1,$red);
//imagettftext($im,16,90,80,280,$red,$font,"泰安市环保局 田勇");
header('Content-type:image/png'); //通知浏览器这不是文本而是一个图片
imagepng($im);
imagedestroy($im);
?>
