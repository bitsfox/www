<?php
putenv('GDFONTPATH='.realpath('.'));
session_start();
$xd=$_SESSION['fs_g_xway'];
$yd=$_SESSION['fs_g_yway'];
$gd=$_SESSION['fs_g_data'];
//global $scr_width,$scr_height;
$i=$_COOKIE['screen'];
if(($i == NULL) || ($i < 100))
	$i=1000;
$sw=floor($i*0.67);
$sh=500;
if(count($gd)<2)
	die("参数传递错误a001！！！");
//设置坐标原点：
$ox=50;$oy=$sh-40;
$ow=$sw-60;$oh=$sh-80; //x,y轴的长度
?>
<?php
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
///////////////////////////////////////////////
$ay=$gd[0];$i=count($ay);
$s1="count is:".$i;
imagettftext($im,10,0,80,80,$red,$font,$s1);
//////////////////////////////////////////////////
//{{{首先画出横坐标的刻度
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
for($j=1;$j<$i;$j++)
{
	$py=$zzy[$j-1];
	$py1=$zzy[$j];
	imageline($im,$py[0],$py[1],$py1[0],$py1[1],$red);
	$py=$zzy1[$j-1];
	$py1=$zzy1[$j];
	imageline($im,$py[0],$py[1],$py1[0],$py1[1],$blue);
}
$s1="红色曲线：COD";
imagettftext($im,10,0,$sw-200,20,$red,$font,$s1);
$s2="蓝色曲线：氨氮";
imagettftext($im,10,0,$sw-200,40,$blue,$font,$s2);


header('Content-type:image/png'); //通知浏览器这不是文本而是一个图片
imagepng($im);
imagedestroy($im);
?>
