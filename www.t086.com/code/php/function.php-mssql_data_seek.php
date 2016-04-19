<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:mssql_data_seek()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mssql_data_seek()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-32.php" alt="group.php?32">SQL Server 数据库函数库</a></div><br><h1><font color=0000bb>mssql_data_seek</font></h1><p>
移动列指针。<p>
<font color=ff8000>语法:</font> <b>boolean mssql_data_seek(int result_identifier, int row_number);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来移动 MS SQL Server 资料表中的列指针到指定的列上，可供 <a href="function.php-mssql_fetch_row.php" alt="function.php?mssql_fetch_row">mssql_fetch_row()</a> 等函数使用。参数 result_identifier 为查询的代号值。参数 row_number 则为欲移往的列数。若失败则返回 false 值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-mssql_close.php" alt="function.php?mssql_close">mssql_close()</a> &nbsp;<a href="function.php-mssql_pconnect.php" alt="function.php?mssql_pconnect">mssql_pconnect()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mssql_connect.php" alt="function.php?mssql_connect">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-mssql_fetch_array.php" alt="function.php?mssql_fetch_array">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
