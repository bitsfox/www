<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:solid_connect()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:solid_connect()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-45.php" alt="group.php?45">Solid 数据库链接函数库</a></div><br><h1><font color=0000bb>solid_connect</font></h1><p>
链接至 solid 数据库。<p>
<font color=ff8000>语法:</font> <b>int solid_connect(string dsn, string user, string password, int [cursor_type]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来链接到 solid 数据库，返回值为链接的代号 ID 值。参数 dsn 为资料来源名称 (Data Sources Name)。参数 user 及 password 分别为链接的帐号及密码。参数 cursor_type 通常省略，其值有 SQL_CUR_USE_IF_NEEDED、SQL_CUR_USE_ODBC、SQL_CUR_USE_DRIVER 及 SQL_CUR_DEFAULT 等四种。当使用复杂的资料存取时可能会有类似 "Cannot open a cursor on a stored procedure that has anything other than a single select statement in it" 的错误信息字符串，此时若将参数 cursor_type 的值设为 SQL_CUR_USE_ODBC 就可以避开了。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-solid_close.php" alt="function.php?solid_close">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-solid_exec.php" alt="function.php?solid_exec">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
