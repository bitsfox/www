 <html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>函数:mysql_field_type()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>

<div align=center><table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mysql_field_type()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-33.php" alt="33">MySQL 数据库函数库</a></div><br><h1><font color=0000bb>mysql_field_type</font></h1><p>
获得目前字段的类型。<p>
<font color=ff8000>语法:</font> <b>string mysql_field_type(int result, int field_offset);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可以得到目前所在字段的类型格式。返回的字符串为字段的类型，包括了 int、real、string、blob....等等，详见 MySQL 的相关文件中有关于类型的部份。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>mysql_connect</font><font color="#007700">(</font><font color="#DD0000">"localhost:3306"</font><font color="#007700">);<br></font><font color="#0000BB">mysql_select_db</font><font color="#007700">(</font><font color="#DD0000">"wisconsin"</font><font color="#007700">);<br></font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_query</font><font color="#007700">(</font><font color="#DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;onek"</font><font color="#007700">);<br></font><font color="#0000BB">$fields&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_num_fields</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br></font><font color="#0000BB">$rows&nbsp;&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_num_rows</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br></font><font color="#0000BB">$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br></font><font color="#0000BB">$table&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_field_table</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"资料表&nbsp;'"</font><font color="#007700">.</font><font color="#0000BB">$table</font><font color="#007700">.</font><font color="#DD0000">"'&nbsp;有&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$fields</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;栏及&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$rows</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;列。&lt;br&gt;"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"本资料表的字段如下&lt;br&gt;"</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">$fields</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$type&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_field_type&nbsp;&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$name&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_field_name&nbsp;&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$len&nbsp;&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_field_len&nbsp;&nbsp;&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$flags&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_field_flags&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$type</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$name</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$len</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$flags</font><font color="#007700">.</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>}<br></font><font color="#0000BB">mysql_close</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;</font>
</font>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-ada_result.php" alt="function.php?ada_result">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ada_rollback.php" alt="function.php?ada_rollback">下一页</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
