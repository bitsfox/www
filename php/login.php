<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
include_once("varset.php"); 
?>
<form name='login' method='post' action='login.php'><center>
<table width="340" border=0 cellpadding=0 cellspacing=0>
	<tr>
		<td height=60 colspan=2 align=center><font color=red size=4>监控站房门禁系统测试</font></td>
	</tr>
	<tr>
		<td height=35 width=100 align=right>用户名： </td><td width=240 align=left><input type="text" name="user" size=20 value=""/></td>
	</tr>	
	<tr>
		<td height=35  width=100 align=right>密  码： </td><td width=240 align=left><input type="password" name="password" size=20 value=""/></td>
	</tr>
	<tr>
		<td height=35  width=100 align=right>验证码： </td><td width=240 align=left><input type="text" name="verf" size=20 value=""/>&nbsp;&nbsp;<img src="ta_verf1.php" title="点击更换图片" onclick="this.src=this.src+'?'+Math.random();" />&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td heiht=35 colspan=2 align=center><input type="submit" name="log" size=20 value="登  录"/>&nbsp;&nbsp;<a href="./signup.php">注  册</a>&nbsp;&nbsp;
		<input type="reset" name="reset" value="重 置"></td>
	</tr>
	

</table></center>
<center><br><br>
<?php
	session_start();
	if(is_null($_POST[user]))
	{}
	else
	{
		echo "$_POST[user]&nbsp;&nbsp;$_POST[password]&nbsp;&nbsp;$_POST[verf]";
		//unset($_POST[user]);
		if($_SESSION["CODE"] == $_POST["verf"])
		{
			echo"<br><br>match!!";
		}
		else
		{
			$_SESSION["timez"]+=1;
			if($_SESSION["timez"]>3)
			{echo"<script>window.close();</script>";}
			echo"<br><br>no match! $_SESSION[timez]";
		}
	}
?>
</center>
</form>
