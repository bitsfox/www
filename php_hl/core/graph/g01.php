/*<?php
//{{{
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
imagedestroy($im);  //}}}
?> */
<?php
//{{{设置运行的环境变量，从session和cookie取得传入的参数
putenv('GDFONTPATH='.realpath('.'));
session_start();
$xd=$_SESSION['fs_g_xway'];
$yd=$_SESSION['fs_g_yway'];
$gd=$_SESSION['fs_g_data'];
//global $scr_width,$scr_height;
$i=$_COOKIE['screen'];
if(($i == NULL) || ($i < 100))
	$i=1000;
//}}}
//{{{坐标，长度等基本变量的设置	
$sw=floor($i*0.67);
$sh=500;
if(count($gd)<2)
	die("参数传递错误a001！！！");
//设置坐标原点：
$ox=50;$oy=$sh-40;
$ow=$sw-60;$oh=$sh-80; //x,y轴的长度
//}}}
?>
<?php
//{{{图形的初始化
$im = imagecreatetruecolor($sw,$sh);	//创建画布
$red = imagecolorallocate($im, 255, 0, 0); //设置一个颜色变量为红色
$blue = imagecolorallocate($im,0,0,255);//设置蓝色
$w = imagecolorallocate($im,255,255,255); //白色
$black = imagecolorallocate($im,0,0,0); //黑色
$font="YaHei.Consolas.1.11b.ttf";
$style=array($red,$red,$red,$red,$red,$red,$red,$w,$w,$w,$w,$blue,$blue,$blue,$blue,$blue,$blue,$blue,$w,$w,$w,$w);
imagesetstyle($im,$style);
imagefill($im,0,0,$w);
imageline($im,$ox,$oy,$ox,$oy-$oh,$black);
imageline($im,$ox,$oy,$ox+$ow,$oy,$black);
imageline($im,$ox+$ow,$oy,$ox+$ow-10,$oy-5,$black);
imageline($im,$ox,$oy-$oh,$ox-5,$oy-$oh+10,$black);
//}}}
///////////////////////////////////////////////
$ay=$gd[0];$i=count($ay);
$s1="count is:".$i;
imagettftext($im,10,0,80,80,$red,$font,$s1);
//////////////////////////////////////////////////
//{{{首先画出横坐标和纵坐标的刻度
$i=count($xd)-1;
$l=$ow-10;$m=$ox;$n=$oy;
$a=floor($l/$i);$xstep=$a;
for($j=1;$j<=$i;$j++)
{
	$v1=$m+$j*$a;$v2=$n;
	$v3=$v1;$v4=$v2+5;
	imageline($im,$v1,$v2,$v3,$v4,$black);
	if($j%4 == 0)
	{
		$s1=$j."时";
		imagettftext($im,8,0,$v1-8,$v4+15,$red,$font,$s1);
	}
}
//画出纵坐标刻度
$ay=$yd[0];	//取得标准
$by=$yd[1];//取得最大值
$k1=$ay[0];$k2=$by[0];
$k3=$k1*2>$k2?$k1*2:$k2;
$c1=$ay[1];$c2=$by[1];
$c3=$c1*2>$c2?$c1*2:$c2;
$l=$oh-20;
$a=floor($l/10);$ystep=$a;
for($i=1;$i<=10;$i++)
{
	$v1=$m-5;$v2=$n-$a*$i;
	$v3=$m;$v4=$v2;
	imageline($im,$v1,$v2,$v3,$v4,$black);
	if($i==5)
	{
		imageline($im,$v3,$v4,$sw-10,$v4,IMG_COLOR_STYLED);
		$s1=$k1;
		imagettftext($im,8,0,$v3-45,$v4+10,$red,$font,$s1);
		$s2=$c1;
		imagettftext($im,8,0,$v3-45,$v4-2,$blue,$font,$s2);

	}
	if($i==10)
	{
		$s1=sprintf("%0.2f",$k3);
		imagettftext($im,8,0,$v3-45,$v4+10,$red,$font,$s1);
		$s2=sprintf("%0.2f",$c3);
		imagettftext($im,8,0,$v3-45,$v4-2,$blue,$font,$s2);
	}
}//}}}
//////////////////////////////////////////////////
//{{{ 依据数据画出曲线
$i=count($xd);
$zy=$yd[0];$zy1=$yd[1];
$stdl=$ystep*5; //标准的长度（距原点）
$maxl=$stdl;	//最大值的长度（距标准值）
$zzy=array();$zzy1=array();
for($j=0;$j<$i;$j++)
{
	$py=array();	//cod
	$ay=$gd[$j];
	if($ay[0]>$zy[0])
	{//cod 大于标准
		$a1=$stdl;
		$a1+=floor($maxl*$ay[0]/$zy1[0]);
	}
	else
		$a1=floor($stdl*$ay[0]/$zy[0]);
	$py[1]=$oy-$a1;
	$py[0]=$xstep*$j+$ox;
	array_push($zzy,$py);
	$py=array();
	if($ay[1]>$zy[1])
		$a1=$stdl+floor($max1*$ay[1]/$zy1[1]);
	else
		$a1=floor($stdl*$ay[1]/$zy[1]);
	$py[0]=$xstep*$j+$ox;
	$py[1]=$oy-$a1;
	array_push($zzy1,$py);
}//得到全部坐标
$i=count($zzy);
//2016-12-17修改，小时值数据（24）采用柱状图表示，日均值（一个月）采用曲线图表示
if($i>24)
{
	for($j=1;$j<$i;$j++)
	{
		$py=$zzy[$j-1];
		$py1=$zzy[$j];
		imageline($im,$py[0],$py[1],$py1[0],$py1[1],$red);
		$py=$zzy1[$j-1];
		$py1=$zzy1[$j];
		imageline($im,$py[0],$py[1],$py1[0],$py1[1],$blue);
	}
}
else
{//小时值，采用柱状图
	$vv=$xstep/2;
	for($j=0;$j<$i;$j++)
	{
		$py=$zzy($j);
		imagerectangle($im,$py[0],$py[1],$py[0]+$vv,$oy,$red);
		$py1=$zzy1($j);
		imagerectangle($im,$py1[0]+$vv,$py1[1],$py1[0]+$xstep,$oy,$blue);
	}
}
//}}}
$s1="红色曲线：COD";
imagettftext($im,10,0,$sw-200,20,$red,$font,$s1);
$s2="蓝色曲线：氨氮";
imagettftext($im,10,0,$sw-200,40,$blue,$font,$s2);


header('Content-type:image/png'); //通知浏览器这不是文本而是一个图片
imagepng($im);
imagedestroy($im);
?>
