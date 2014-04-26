<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
$myindex=0;
if(is_null($_POST[user]))
{}
else
{$myindex=1;}
?>

<?php
if($myindex==1)
{
	echo "<meta http-equiv=\"Refresh\" content=\"3;URL=tb.php\" />";
	echo "3秒后系统自动跳回原页面";
}
if($myindex==0)
{
	echo "<form name=\"login\" method=\"post\" action=\"tb.php\">";
	echo "<center>测试pos</center>";
	echo "<br><br>";
	echo "<input type=\"text\" name=\"user\" value=\"\" width=30 /><br>";
	echo "<input type=\"submit\" name=\"sb\" value=\"sub\" width=20 />";
	echo "</form>";
}
?>


