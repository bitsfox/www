<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:mssql_close()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mssql_close()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-32.php" alt="group.php?32">SQL Server 数据库函数库</a></div><br><h1><font color=0000bb>mssql_close</font></h1><p>
关闭与数据库的连接。<p>
<font color=ff8000>语法:</font> <b>boolean mssql_close(int [link_identifier]);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来关闭与 MS SQL Server 数据库的连接，能关闭的为使用 <a href="function.php-mssql_connect.php" alt="function.php?mssql_connect">mssql_connect()</a> 函数打开的数据库，若使用 <a href="function.php-mssql_pconnect.php" alt="function.php?mssql_pconnect">mssql_pconnect()</a> 打开的数据库则不能以本函数关闭。参数 link_identifier 可省略，为打开数据库的连接代号。关闭成功则返回 true 值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-mssql_connect.php" alt="function.php?mssql_connect">mssql_connect()</a> &nbsp;<a href="function.php-mssql_pconnect.php" alt="function.php?mssql_pconnect">mssql_pconnect()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mssql_affected_rows.php" alt="function.php?mssql_affected_rows">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-mssql_connect.php" alt="function.php?mssql_connect">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
