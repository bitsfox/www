<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:msql_tablename()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:msql_tablename()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-31.php" alt="group.php?31">mSQL 数据库函数库</a></div><br><h1><font color=0000bb>msql_tablename</font></h1><p>
返回指定资料表的名称。<p>
<font color=ff8000>语法:</font> <b>string msql_tablename(int query_identifier, int field);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来取得资料表字段的名称。参数 query_identifier 为查询结果的 ID 代码。参数 field 为第几个字段的数字。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php&nbsp;<br>msql_connect&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"localhost"</font><font color="#007700">);<br></font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">msql_list_tables</font><font color="#007700">(</font><font color="#DD0000">"userinfo"</font><font color="#007700">);<br></font><font color="#0000BB">$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">msql_numrows</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$tb_names</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">msql_tablename</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$tb_names</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;&nbsp;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-msql_selectdb.php" alt="function.php?msql_selectdb">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-mssql_affected_rows.php" alt="function.php?mssql_affected_rows">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
