<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
echo "<table border=0 cellpadding=0 cellspacing=0>";
//echo "<form name=search method=post action=\"sss.php\">";
//echo "<input type=hidden name=action value=search size=0>";
echo "<tr><td align=right valign=middle><input type=hidden name=action value=search size=0>查询关键字：</td><td align=left valign=middle><input type=text name=keyword size=20 /></td>";
echo "<td align=left valign=middle><input type=submit value=\"查 询\" /></td></tr></form></table>";
if($_POST[action]==search)
{
	echo "查询结果：<br>";
	$g=$_POST[keyword];
	$msg=system("/var/www/sch $g",$ret);
	//echo "$msg";
}


?>
