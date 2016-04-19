<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ifx_affected_rows()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ifx_affected_rows()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix 数据库函数库</a></div><br><h1><font color=0000bb>ifx_affected_rows</font></h1><p>
得到 Informix 最后操作影响的列数目。<p>
<font color=ff8000>语法:</font> <b>int ifx_affected_rows(int result_id);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可得到 Informix 最后查询操作 INSERT、UPDATE 或 DELETE 所影响的列 (row) 数目。若最后使用的是 SELECT，则用本函数得到的数目为估计值，而非精确的数目，欲得到 SELECT 返回的数目需使用 <a href="function.php-ifx_num_rows.php" alt="function.php?ifx_num_rows">ifx_num_rows()</a> 函数。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
本例为部份程序<br><br><font color="#0000BB">&lt;?php<br>$rid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_prepare&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"select&nbsp;*&nbsp;from&nbsp;userinfo&nbsp;where&nbsp;name&nbsp;like&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$name</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$connid</font><font color="#007700">);<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">$rid</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;错误处理的部份<br></font><font color="#007700">}<br></font><font color="#0000BB">$rowcount&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_affected_rows&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">);<br>if&nbsp;(</font><font color="#0000BB">$rowcount&nbsp;</font><font color="#007700">&gt;&nbsp;</font><font color="#0000BB">1000</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">printf&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"返回资料太多，共&nbsp;%d&nbsp;笔\n&lt;br&gt;"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$rowcount</font><font color="#007700">);<br>&nbsp;&nbsp;die&nbsp;(</font><font color="#DD0000">"请重新执行&nbsp;SQL&nbsp;指令&lt;br&gt;\n"</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-ifx_num_rows.php" alt="function.php?ifx_num_rows">ifx_num_rows()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_errormsg.php" alt="function.php?ifx_errormsg">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ifx_getsqlca.php" alt="function.php?ifx_getsqlca">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
