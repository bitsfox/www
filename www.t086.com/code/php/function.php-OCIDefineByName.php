<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:OCIDefineByName()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:OCIDefineByName()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-38.php" alt="group.php?38">Oracle 8 数据库函数库</a></div><br><h1><font color=0000bb>OCIDefineByName</font></h1><p>
让 SELECT 指令可使用 PHP 变量。<p>
<font color=ff8000>语法:</font> <b>boolean OCIDefineByName(int stmt, string ColumnName, mixed &variable, int [type]);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来定义指定的 PHP 变量，使其能供 SQL 指令中的 SELECT 指令使用。在大小写的问题上要注意一下，因为 Oracle 数据库中的字段名称其实都是大写的名字。参数 stmt 是经过 Oracle 解析 (OCIParse) 后的字符串指针。参数 ColumnName 是 Oracle 资料表上的字段名称。参数 variable 前面一定要加 & 符号，表 PHP 变量位址。参数 type 通常省略。治募注意的是欲使用 Oracle 8 中特有的新资料类型 LOB/ROWID/BFILE 等时，需要先执行 <a href="function.php-OCINewDescriptor.php" alt="function.php?OCINewDescriptor">OCINewDescriptor()</a> 函数。执行本函数成功则返回 true 值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
这个范例是&nbsp;thies@digicol.de&nbsp;所提出的<br><font color="#0000BB">&lt;?php<br>$conn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">OCILogon</font><font color="#007700">(</font><font color="#DD0000">"scott"</font><font color="#007700">,</font><font color="#DD0000">"tiger"</font><font color="#007700">);<br></font><font color="#0000BB">$stmt&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">OCIParse</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,</font><font color="#DD0000">"select&nbsp;empno,&nbsp;ename&nbsp;from&nbsp;emp"</font><font color="#007700">);<br></font><font color="#FF8000">/*&nbsp;使用&nbsp;OCIDefineByName&nbsp;要在执行&nbsp;OCIExecute&nbsp;前&nbsp;*/<br></font><font color="#0000BB">OCIDefineByName</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">,</font><font color="#DD0000">"EMPNO"</font><font color="#007700">,&amp;</font><font color="#0000BB">$empno</font><font color="#007700">);<br></font><font color="#0000BB">OCIDefineByName</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">,</font><font color="#DD0000">"ENAME"</font><font color="#007700">,&amp;</font><font color="#0000BB">$ename</font><font color="#007700">);<br></font><font color="#0000BB">OCIExecute</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">OCIFetch</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"empno:"</font><font color="#007700">.</font><font color="#0000BB">$empno</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"ename:"</font><font color="#007700">.</font><font color="#0000BB">$ename</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">OCIFreeStatement</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">);<br></font><font color="#0000BB">OCILogoff</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-odbc_setoption.php" alt="function.php?odbc_setoption">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-OCIBindByName.php" alt="function.php?OCIBindByName">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
