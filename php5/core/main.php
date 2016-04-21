<?php
if($_POST["vvv"]!="")
{
// 通过测试，使用location.href和使用设置_GET[]值都能达到目的	
// 从效果来看，设置_GET显然更好。
	$_GET["id"]=base64_encode($menuitem[2]);
	$_GET["user"]=base64_encode("root");
//	echo "<br>".$_POST["vvv"]."and".$_POST["www"]."<br>";
	echo "<br>".$_POST["vvv"]."and".$_POST["sel01"]."<br>";
//	echo "<script>window.location.href='".$menulink[4]."'</script>";
}
if($_POST["www"]!="")
{
	echo "<br>".$_POST["vvv"]."and".$_POST["www"]."<br>";
}
if($_GET["id"]=="")
{
	include_once("template/01/mainpage.html");
}
else
{
	$str=str_replace(" ","+",$_GET["id"]);
	$va=base64_decode($str);
	/*if($va == "数据库" )
	{
		include_once("template/01/database.html");
	}
	else
	{
		include_once("template/01/e02.html");
	}*/
	switch($va)
	{
		case $menuitem[0]:
		case $menuitem[1]:
		case $menuitem[2]:
		case $menuitem[3]:
			include_once("template/01/e02.html");
			break;
		case $menuitem[4]:
			include_once("template/01/database.html");
			break;
		case $dmenuitem[0]://查询数据库
		case $dmenuitem[1]://查询数据库
		case $dmenuitem[2]://查询数据库
		case $dmenuitem[3]://查询数据库
		case $dmenuitem[4]://查询数据库
			include_once("template/01/searchdb.html");
			break;
	};
}
?>
