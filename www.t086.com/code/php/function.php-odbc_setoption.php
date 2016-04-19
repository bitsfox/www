<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:odbc_setoption()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:odbc_setoption()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-37.php" alt="group.php?37">ODBC 数据库链接函数库</a></div><br><h1><font color=0000bb>odbc_setoption</font></h1><p>
调整 ODBC 配置。<p>
<font color=ff8000>语法:</font> <b>int odbc_setoption(int id, int function, int option, int param);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来调整 ODBC 的配置值。参数 id 不一定指 connection_id，SQLSetConnectOption() 则为 connection_id；若为 SQLSetStmtOption() 则为 result_id。参数 function 值为 1 表 SQLSetConnectOption()；若为 2 则为 SQLSetStmtOption()。参数 option 为配置的选项。参数 param 为配置值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br></font><font color="#FF8000">//&nbsp;例一:&nbsp;配置为&nbsp;autocommit，即与&nbsp;odbc_autocommit($conn,&nbsp;true)&nbsp;相同。<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;第三个参数值&nbsp;102&nbsp;表&nbsp;SQL_AUTOCOMMIT。<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;第四个参数值&nbsp;1&nbsp;表&nbsp;SQL_AUTOCOMMIT_ON。<br></font><font color="#0000BB">odbc_setoption&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">102</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;例二:&nbsp;配置查询时间<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;第三个参数&nbsp;0&nbsp;表&nbsp;SQL_QUERY_TIMEOUT<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;第四个参数为最久执行时间，本例设为&nbsp;30&nbsp;秒<br></font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_prepare&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$sql</font><font color="#007700">);<br></font><font color="#0000BB">odbc_setoption&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">30</font><font color="#007700">);<br></font><font color="#0000BB">odbc_execute&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-odbc_rollback.php" alt="function.php?odbc_rollback">上一页</a> </td> <td> ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
