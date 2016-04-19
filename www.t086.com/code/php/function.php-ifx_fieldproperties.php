<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ifx_fieldproperties()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ifx_fieldproperties()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix 数据库函数库</a></div><br><h1><font color=0000bb>ifx_fieldproperties</font></h1><p>
列出 Informix 的 SQL 字段属性。<p>
<font color=ff8000>语法:</font> <b>array ifx_fieldproperties(int result_id);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可以获得 Informix 的 SQL 指令返回字段的属性。参数 result_id 是经过 <a href="function.php-ifx_query.php" alt="function.php?ifx_query">ifx_query()</a> 或 <a href="function.php-ifx_prepare.php" alt="function.php?ifx_prepare">ifx_prepare()</a> 的返回代号。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
本例为程序的一部份<br><br><font color="#0000BB">&lt;?php<br>$properties&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_fieldtypes</font><font color="#007700">(</font><font color="#0000BB">$resultid</font><font color="#007700">);<br>if&nbsp;(!&nbsp;isset(</font><font color="#0000BB">$properties</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;错误处理<br></font><font color="#007700">}<br>for&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$properties</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$fname&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">key</font><font color="#007700">(</font><font color="#0000BB">$properties</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">printf</font><font color="#007700">(</font><font color="#DD0000">"%s:\t&nbsp;type&nbsp;=&nbsp;&nbsp;%s\n"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$fname</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$properties</font><font color="#007700">[</font><font color="#0000BB">$fname</font><font color="#007700">]);<br>&nbsp;&nbsp;</font><font color="#0000BB">next</font><font color="#007700">(</font><font color="#0000BB">$properties</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_fieldtypes.php" alt="function.php?ifx_fieldtypes">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ifx_num_fields.php" alt="function.php?ifx_num_fields">下一页</a>  ]</td></tr></table>
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
