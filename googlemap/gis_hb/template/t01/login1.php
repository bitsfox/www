<?php
session_start();
$_SESSION['logok']=NULL;
header("Refresh:0 url='../../login.php'");
?>
