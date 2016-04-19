<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:pg_Fetch_Array()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:pg_Fetch_Array()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-42.php" alt="group.php?42">PostgreSQL 数据库函数库</a></div><br><h1><font color=0000bb>pg_Fetch_Array</font></h1><p>
返回数组资料。<p>
<font color=ff8000>语法:</font> <b>array pg_fetch_array(int result, int row);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来将查询结果 result 拆到数组变量中。若 result 没有资料，则返回 false 值。参数 result 为使用 <a href="function.php-pg_Exec.php" alt="function.php?pg_Exec">pg_Exec()</a> 所返回的代码值。参数 row 为列数。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$conn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_pconnect</font><font color="#007700">(</font><font color="#DD0000">""</font><font color="#007700">,</font><font color="#DD0000">""</font><font color="#007700">,</font><font color="#DD0000">""</font><font color="#007700">,</font><font color="#DD0000">""</font><font color="#007700">,</font><font color="#DD0000">"publisher"</font><font color="#007700">);<br>if&nbsp;(!</font><font color="#0000BB">$conn</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"错误,&nbsp;无法连接\n"</font><font color="#007700">;<br>&nbsp;&nbsp;exit;<br>}<br></font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_Exec</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;authors"</font><font color="#007700">);<br>if&nbsp;(!</font><font color="#0000BB">$result</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"错误,&nbsp;无法查询\n"</font><font color="#007700">;<br>&nbsp;&nbsp;exit;<br>}<br></font><font color="#0000BB">$arr&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$arr</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;&lt;-&nbsp;array\n"</font><font color="#007700">;<br></font><font color="#0000BB">$arr&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_fetch_array&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$arr</font><font color="#007700">[</font><font color="#DD0000">"author"</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"&nbsp;&lt;-&nbsp;array\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-pg_Exec.php" alt="function.php?pg_Exec">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-pg_Fetch_Object.php" alt="function.php?pg_Fetch_Object">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
