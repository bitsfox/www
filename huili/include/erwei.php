<?php
//http://phpqrcode.sourceforge.net/
include("./phpqrcode.php");
QRcode::png("http://192.168.1.122/huili/index.php",false,"L",6,2);
//$apng=imagecreatefromstring(file_get_contents("as.png"));
//Header("Content-type: image/png");
//imagepng($apng,"./dfdf.png");
//imagedestroy($apng);
//echo "ok!";
//phpinfo();
?>
