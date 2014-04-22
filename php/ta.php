<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form name='login' method='post' action='ta.php'>
<table width="500" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan=3><center><font color=red size=4>监控站房门禁系统测试</font></center></td>
	</tr>
	<tr>
		<td height="30" width="100">服务器地址</td><td width="100">服务器名称</td><td width="300">版本信息</td>
	</tr>
	<tr>	
		<td height="30"><?php echo $_SERVER[SERVER_ADDR];?></td><td><?php echo $_SERVER[SERVER_NAME];?></td><td><?php echo $_SERVER[SERVER_SIGNATURE];?></td>
	</tr>
</table>
<?php
function func1(&$var1)
{
	$a2=0;
	for($a1=1;$a1<=$var1;$a1++)
	{
		$a2+=$a1;
	}
	$var1=$a2;
}
function func2()
{
	//system("ln -s ./html5/oceans.mp4 ./tron.rmvb",$ret);
	$conn=MYSQL_connect("localhost","root","") or die("connect err: ".MYSQL_error());
	echo "连接mysql数据库成功<br>";
	sleep(1);
	MYSQL_close($conn);
	echo "关闭数据库成功<br>";

}
echo "<br><br><br>";
$v=10;
func1($v);
echo "calc value is: $v<br><br>";
//func2();
?>
<script language=javascript>
function reloadcode(){
//	  document.login.vvvv.value="something changes"; 
//	  return false; 
    document.getElementById('codeaa').src = "./ta_verf1.php";
}
</script>
<img src="./ta_verf1.php" title="点击更新" onClick="this.src=this.src+'?'+Math.random();">
<!--<img id="codeaa" src="./ta_verf1.php"><a href="javascript:reloadcode();" ><font size=2>刷新图片</font></a>
"看不清楚，换一张"<input type="button" name="change" value="更换" onclick="return create_code();"/>-->
<input type="text" name="vvvv" size="20" value=""/>
<button type="submit">提交</button>
<?php 
session_start();
if($_POST['vvvv'] == $_SESSION['CODE'])
{	echo "ok";}
else
{	echo "no";}
?>
</form>

