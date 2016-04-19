<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:odbc_fetch_row()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:odbc_fetch_row()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-37.php" alt="group.php?37">ODBC 数据库链接函数库</a></div><br><h1><font color=0000bb>odbc_fetch_row</font></h1><p>
取得返回一列。<p>
<font color=ff8000>语法:</font> <b>int odbc_fetch_row(int result_id, int [row_number]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来取得 Query 的返回资料的一列。参数 result_id 为 ODBC 返回 ID 值。参数 rownumber 可省略，为指定的取得列 (row)。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$conn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_connect</font><font color="#007700">(</font><font color="#DD0000">"WebDB"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">);<br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"select&nbsp;user,&nbsp;idno&nbsp;"</font><font color="#007700">;<br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">.=&nbsp;</font><font color="#DD0000">"from&nbsp;userinfo"</font><font color="#007700">;<br></font><font color="#0000BB">$result_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_do</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">);<br>while(</font><font color="#0000BB">odbc_fatch_row</font><font color="#007700">(</font><font color="#0000BB">$result_id</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$user&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_result</font><font color="#007700">(</font><font color="#0000BB">$result_id</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$idno&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_result</font><font color="#007700">(</font><font color="#0000BB">$result_id</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$user</font><font color="#007700">.</font><font color="#DD0000">"的身份证字号为"</font><font color="#007700">.</font><font color="#0000BB">$idno</font><font color="#007700">.</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">odbc_close</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-odbc_fetch_into.php" alt="function.php?odbc_fetch_into">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-odbc_field_name.php" alt="function.php?odbc_field_name">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
