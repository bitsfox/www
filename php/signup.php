<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php include_once("varset.php");?>
<?php
function check_input()
{
	$len=strlen($_POST["user"]);
	if($len<4 || $len>12)
	{
		echo"用户名长度有误";
		return false;
	}
	$len=strlen($_POST["password"]);
	if($len<6 || $len>12)
	{
			echo "密码长度有误";
			return false;
	}
	if(strcmp($_POST["password"],$_POST["password1"])!=0)
	{
		echo "两次密码的输入不一致";
		return false;
	}
	if($_SESSION["CODE"] == $_POST["verf"])
	{return true;}
	else
	{
		echo "$_SESSION[CODE] $_POST[verf]";
	}
	return false;
}
function add_result()
{
	$conn=MYSQL_connect("localhost","root","");
   	if(! $conn)
	{die("connect err: ".MYSQL_error());}
	MYSQL_select_db("ta_test",$conn);
	mysql_query("SET NAMES 'UTF8'");
    mysql_query("SET CHARACTER SET UTF8");
	mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");	
	$sqlstr="insert into usrtab (uname,upasswd) values ('$_POST[user]','$_POST[password]')";
	$result=MYSQL_query($sqlstr,$conn);
	if($result)
	{
		echo"添加成功";
	}
	else
	{
		echo "添加失败";
	}
	mysql_close($conn);
}
if(is_null($_SESSION["timez"]))
{
	echo "no set";
}
else
{
	echo"<center><font color=red size=5>用户注册</font></center><br>";
	//$_SESSION["timez"]=0;
}
?>
<form name="signup" method="post" action="signup.php"><center>
<table width=400 border=0 cellpadding=0 cellspacing=0>
	<tr>
		<td width=100 height=35 align=right>用户名： </td>
		<td width=140 align=left><input type="text" name="user" value=""/></td>
		<td width=160 align=left>用户名长度为4～12字符长度</td>
	</tr>
	<tr>
		<td width=100 height=35 align=right>密   码： </td>
		<td width=140 align=left><input type="password" name="password" value=""/></td>
		<td width=160 align=left>密码长度为6～12字符长度</td>
	</tr>
	<tr>
		<td width=100 height=35 align=right>重复密码： </td>
		<td width=140 align=left><input type="password" name="password1" value=""/></td>
		<td width=160 align=left>密码长度为6～12字符长度</td>
	</tr>
	<tr>
		<td width=100 height=35 align=right>验证码： </td>
		<td colspan=2 width=300 align=left><input type="text" name="verf" size=20 value=""/>&nbsp;&nbsp;<img src="ta_verf1.php" title="点击更换图片" onclick="this.src=this.src+'?'+Math.random();" />
	</tr>
	<tr>
		<td colspan=3 width=100% height=35 align=center><input type="submit" name="submit" value="注  册" />&nbsp;&nbsp;<input type="reset" name="reset" value="重   置" /></td>
	</tr>
</table></center>
<br><br>
<?php
	session_start();
	$_SESSION["timez"]+=1;
	if($_SESSION["timez"]>3)
	{
		echo"<script>window.close();</script>";
	}
	if(is_null($_POST["user"]))
	{
	}
	else
	{
		if(check_input()==true)
		{
			//echo "<br>ok~~~<br>";
			add_result();
		}
		else
		{
			echo "<br>error~~~<br>";
		}
	}
	echo "$_SESSION[timez]";
?>
</form>







