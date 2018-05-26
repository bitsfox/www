<?php
//echo "<img src='./erwei.php'>";
//$str="<div class='form-signup form-box'><div class='side-head'><a href='/'><img class='logo' src='/huili/images/logo/logo.png5.png' alt='huishi group'></a></div>";
//$s1=preg_replace("/form-signup/","form-aaaaa",$str);
//echo $s1;
/*$im=imagecreatefromstring(file_get_contents("../images/logo/logo.png5.png"));
if($im !== false)
{
	Header("Content-type: image/png");
	imagepng($im);
	imagedestroy($im);
}
else
	echo "error";
*/
include("./phpqrcode.php");
//ob_start();
//QRcode::png("http://tybitsfox.github.com","as.png","L",6,2);
//$QR=imagecreatefrompng("as.png");
$QR=QRcode::png("http://tybitsfox.github.com",false,"M",7,2);
$logo=imagecreatefrompng("../images/logo/mmexport.png");
    $QR_width = imagesx($QR);      //二维码图片宽度
    $QR_height = imagesy($QR);     //二维码图片高度
    $logo_width = imagesx($logo);    //logo图片宽度
    $logo_height = imagesy($logo);   //logo图片高度
    $logo_qr_width = $QR_width / 4;   //组合之后logo的宽度(占二维码的1/5)
    $scale = $logo_width/$logo_qr_width;  //logo的宽度缩放比(本身宽度/组合后的宽度)
    $logo_qr_height = $logo_height/$scale; //组合之后logo的高度
    $from_width = ($QR_width - $logo_qr_width) / 2; 
imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,$logo_qr_height, $logo_width, $logo_height);
	Header("Content-type: image/png");
	imagepng($QR);
	imagedestroy($QR);
	imagedestroy($logo);

//$im=ob_get_contents();
//ob_end_clean();
//echo "data:image/jpeg;base64,".base64_encode($s1);
//$im=imagecreatefrompng($s1);
/*$filename = './test.txt';
if (is_writable($filename)) {
  echo 'The file is writable';
} else {
  echo 'The file is not writable';
}*/

?>
