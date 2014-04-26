<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
include_once("varset.php"); 
unset($_SESSION["loguser"]);
unset($_SESSION["logpwd"]);
?>
<?php
	session_start();
	function check_verf()
	{
		if($_SESSION["CODE"] == $_POST["verf"])
			return true;
		return false;
	}	
	$_SESSION["timez"]+=1;
	if($_SESSION["timez"]>5)
	{
		echo "<script type=\"text/javascript\">alert(\"login failed!\")</script>";
		echo"<script>window.close();</script>";
	}
	if(is_null($_POST[user]))
	{}
	else
	{
		$succ=0;
		if(check_verf()==false)
		{echo "<script type=\"text/javascript\">alert(\"验证码错误！\")</script>";}
		else
		{
			$conn=MYSQL_connect($L_HOST,$L_USER,$L_PASSWORD);
   			if(! $conn)
			{die("connect err: ".MYSQL_error());}
			MYSQL_select_db($L_DBNAME,$conn);
			$result=mysql_query("select * from usrtab",$conn);
			if(!$result)
			{die("valid error");}
//			echo "<table>";
//			echo "<tr><td>姓名</td></tr>";
			while($row=mysql_fetch_row($result))
			{
				//echo "<tr><td>$row[0]</td></tr>";
				if(($row[0] == $_POST[user]) && ($row[2] == $_POST[password]))
				{
					$succ=1;
					break;
				}
			}
//			echo "</table>";
			mysql_free_result($result);
			mysql_close($conn);
			if($succ==1)
			{
				$_SESSION["timez"]=0;
				//session_register("loguser");
				$_SESSION["loguser"]=$_POST[user];
				//session_register("logpwd");
			   	$_SESSION["logpwd"]=$_POST[password];
				echo "<script>window.location.href='./main01.php'</script>";
			//	echo "<meta http-equiv=\"Refresh\" content=\"1;URL=./main01.php\" />";
			//	echo "<br>success~~~~~<br>";
			}
			else
			{echo "<script type=\"text/javascript\">alert(\"用户名或密码错误！\")</script>";}
		}
	}
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
</center>
</form>
