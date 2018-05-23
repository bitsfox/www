<?php
include("./phpqrcode.php");
QRcode::png("http://tybitsfox.github.com",false,"L",6,2);
//$apng=imagecreatefromstring(file_get_contents("as.png"));
//Header("Content-type: image/png");
//imagepng($apng,"./dfdf.png");
//imagedestroy($apng);
//echo "ok!";
//phpinfo();
?>
