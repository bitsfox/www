<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:mysql_tablename()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mysql_tablename()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-33.php" alt="group.php?33">MySQL 数据库函数库</a></div><br><h1><font color=0000bb>mysql_tablename</font></h1><p>
取得资料表名称。<p>
<font color=ff8000>语法:</font> <b>string mysql_tablename(int result, int i);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可取得资料表名称字符串，一般配合 <a href="function.php-mysql_list_tables.php" alt="function.php?mysql_list_tables">mysql_list_tables()</a> 函数使用，取得该函返回的数字的名称字符串。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php&nbsp;<br>mysql_connect&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"localhost:3306"</font><font color="#007700">);<br></font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_list_tables&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"wisconsin"</font><font color="#007700">);<br></font><font color="#0000BB">$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">mysql_num_rows&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$tb_names</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">mysql_tablename&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$tb_names</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"&lt;BR&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mysql_select_db.php" alt="function.php?mysql_select_db">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-sybase_affected_rows.php" alt="function.php?sybase_affected_rows">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
