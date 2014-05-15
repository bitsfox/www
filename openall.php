<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
//echo $_GET[subid].$_GET[submenu].$_GET[url];
$conn=mysql_connect("localhost","taenv","taenv2014");
if(!$conn)
{die("connect err: ".mysql_error());}
mysql_select_db("web_data",$conn);
mysql_query("set names utf8",$conn);
$sqlstr="update menu_tb set count=count+1  where submenu = '".$_GET[submenu]."' and idx = ".$_GET[subid];
$result=mysql_query($sqlstr,$conn);
if(!$result)
{
	mysql_close($conn);
	die("query error");
}
mysql_close($conn);//当前网页计数完毕，开始转向打开网页
echo "<script>window.location.href='".$_GET[url]."'</script>";

?>
