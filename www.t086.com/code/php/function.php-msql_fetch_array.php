<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:msql_fetch_array()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:msql_fetch_array()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-31.php" alt="group.php?31">mSQL 数据库函数库</a></div><br><h1><font color=0000bb>msql_fetch_array</font></h1><p>
返回数组资料。<p>
<font color=ff8000>语法:</font> <b>array msql_fetch_array(int query_identifier);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来将查询结果分割到数组变量中。可以将本函数当作是 <a href="function.php-msql_fetch_row.php" alt="function.php?msql_fetch_row">msql_fetch_row()</a> 的加强版。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"&lt;ol&nbsp;type=A&gt;\n"</font><font color="#007700">;<br></font><font color="#0000BB">$handle&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">msql_connect</font><font color="#007700">(</font><font color="#DD0000">"localhost"</font><font color="#007700">);<br></font><font color="#0000BB">msql_selectdb</font><font color="#007700">(</font><font color="#DD0000">"userinfo"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">$dbresult</font><font color="#007700">=</font><font color="#0000BB">msql_query</font><font color="#007700">(</font><font color="#DD0000">"select&nbsp;*&nbsp;from&nbsp;info"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$handle</font><font color="#007700">);<br>while(</font><font color="#0000BB">$dbarray</font><font color="#007700">=</font><font color="#0000BB">msql_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$dbresult</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;"</font><font color="#007700">.</font><font color="#0000BB">$dbarray</font><font color="#007700">[</font><font color="#DD0000">"IDNumber"</font><font color="#007700">].</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">msql_close</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"&lt;/ol&gt;\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-msql_error.php" alt="function.php?msql_error">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-msql_fetch_field.php" alt="function.php?msql_fetch_field">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
