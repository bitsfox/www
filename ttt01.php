<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--显示时间的函数-->
 <script language=Javascript> 
   function time(){
	       //获得显示时间的div
	       t_div = document.getElementById('showtime');
		      var now=new Date()
				      //替换div内容 
				     t_div.innerHTML =now.getFullYear()
					     +"年"+(now.getMonth()+1)+"月"+now.getDate()
						     +"日"+now.getHours()+"时"+now.getMinutes()
							     +"分"+now.getSeconds()+"秒";
			      //等待一秒钟后调用time方法，由于settimeout在time方法内，所以可以无限调用
			     setTimeout(time,1000);
				   }
</script>
<?php
include_once("./mystyle.css");
echo "<body onload='time()'><a name=a01></a>";
echo "<table class='aaaa'><tr><td width=750px align=left valign=top>";
echo "<div class='menu'><ul>";
$conn=mysql_connect("localhost","taenv","taenv2014");
if(! $conn)
{die("connect err: ".mysql_error());}
mysql_select_db("web_data",$conn);
mysql_query("set names utf8",$conn);
for($i=0;$i<6;$i++)
{
//	$sqlstr="select count(*) from menu_tb where idx = ".$i;
	$sqlstr="select * from menu_tb where idx = ".$i;
	$result=mysql_query($sqlstr,$conn);
	if(!$result)
	{die("valid error");}
	$j=0;
	while($row=mysql_fetch_row($result))
	{
		if($j==0)
		{
			echo "<li><a class='hide' href='#a01'>".$row[0]."</a><ul>";
			$j=1;
		}
		echo "<li><a href='".$row[3]."' title='".$row[4]."' target=_blank>".$row[1]."</a></li>";
	}
	echo "</ul></li>";
//	$j=$row[0];
	//echo "idx = ".$j."<br>";
	mysql_free_result($result);
}
mysql_close($conn);
echo "</ul></li></ul></td></tr></table>";
//echo "end of search....<br>";
?>
<br>
<br>
<br>
<br>
<form name="log1" method="post" action="ttt01.php">
<center><table class="aaaa"><tr>
	<td width=20%>
	<input type='text' name='user' size=20 value='' />
	</td>
	<td width=10%>
	<input type='submit' name='sub1' size=20 value='action'>
	</td>
	<td></td>
<tr></table>
</form>
<?php
if($_POST[sub1] == 'action')
{
	echo $_POST[user]."<br>";
}
/*if($_POST[user] != null)
{
	echo $_POST[user]."<br>".$_POST[sub1];
}*/
?>



