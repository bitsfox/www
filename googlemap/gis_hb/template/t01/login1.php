<?php
session_start();
$_SESSION['logok']=NULL;
//header("Refresh:0 url='../../login.php'");
echo "<script>setTimeout(\"window.location='../../login.php'\",0);</script>";
?>
