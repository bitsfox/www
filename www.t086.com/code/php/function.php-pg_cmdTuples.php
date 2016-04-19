<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:pg_cmdTuples()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:pg_cmdTuples()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-42.php" alt="group.php?42">PostgreSQL 数据库函数库</a></div><br><h1><font color=0000bb>pg_cmdTuples</font></h1><p>
取得被 SQL 指令影响的资料笔数。<p>
<font color=ff8000>语法:</font> <b>int pg_cmdtuples(int result_id);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来取得 PostgreSQL 的 SQL 指令所影响的资料笔数，这些 query 指令包括 INSERT、UPDATE 与 DELETE 等。返回值为影响的笔数，若没有资料受影响则返回 0。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
本例为部份的程序<br><br><font color="#0000BB">&lt;?php<br>$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_exec</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"INSERT&nbsp;INTO&nbsp;verlag&nbsp;VALUES&nbsp;('Autor')"</font><font color="#007700">);<br></font><font color="#0000BB">$cmdtuples&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_cmdtuples</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$cmdtuples</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;笔资料受影响&lt;p&gt;\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-pg_Close.php" alt="function.php?pg_Close">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-pg_Connect.php" alt="function.php?pg_Connect">下一页</a>  ]</td></tr></table>
</div><p><br><br>
 
</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
