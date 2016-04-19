<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:list()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:list()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">数组处理函数库</a></div><br><h1><font color=0000bb>list</font></h1><p>
列出数组中元素的值。<p>
<font color=ff8000>语法:</font> <b>void list(...);</b><p>
<font color=ff8000>返回值:</font> 无<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>和 <a href="function.php-array.php" alt="function.php?array">array</a> 函数一样，不算是正规的函数。list() 函数用在列出所有数组中的数值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下面的范例列出从&nbsp;MySQL&nbsp;数据库返回的数组资料。<br>&lt;table&gt;<br>&nbsp;&lt;tr&gt;<br>&nbsp;&nbsp;&lt;th&gt;员工姓名&lt;/th&gt;<br>&nbsp;&nbsp;&lt;th&gt;薪资&lt;/th&gt;<br>&nbsp;&lt;/tr&gt;<br><font color="#0000BB">&lt;?php<br><br>$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"SELECT&nbsp;id,&nbsp;name,&nbsp;salary&nbsp;FROM&nbsp;employees"</font><font color="#007700">);<br>while&nbsp;(list(</font><font color="#0000BB">$id</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$name</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$salary</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">mysql_fetch_row</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;print(</font><font color="#DD0000">"&nbsp;&lt;tr&gt;\n"</font><font color="#007700">.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"&nbsp;&nbsp;&lt;td&gt;&lt;a&nbsp;href=</font><font color="#007700">\"</font><font color="#DD0000">info.php3?id=$id</font><font color="#007700">\"</font><font color="#DD0000">&gt;$name&lt;/a&gt;&lt;/td&gt;</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"&nbsp;&nbsp;&lt;td&gt;$salary&lt;/td&gt;</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"&nbsp;&lt;/tr&gt;\n"</font><font color="#007700">);<br>}<br><br></font><font color="#0000BB">?&gt;</font>&lt;/table&gt;<br></font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-each.php" alt="function.php?each">each()</a> &nbsp;<a href="function.php-array.php" alt="function.php?array">array()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ksort.php" alt="function.php?ksort">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-next.php" alt="function.php?next">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
