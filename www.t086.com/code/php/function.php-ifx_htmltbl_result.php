<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ifx_htmltbl_result()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ifx_htmltbl_result()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix 数据库函数库</a></div><br><h1><font color=0000bb>ifx_htmltbl_result</font></h1><p>
将 query 返回资料转成 HTML 表格。<p>
<font color=ff8000>语法:</font> <b>int ifx_htmltbl_result(int result_id, string [html_table_options]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来将 query 查询结果格式化成 HTML 标记格式的表格形式。参数 html_table_options 可省略，为 &lt;table&gt; 标记中的参数选项。成功则返回列数，失败则返回 false 值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
以下的范例中，&lt;table&gt;&nbsp;标记的参数设表格边宽为&nbsp;2。<br><br><font color="#0000BB">&lt;?php<br>$rid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_prepare</font><font color="#007700">(</font><font color="#DD0000">"select&nbsp;*&nbsp;from&nbsp;emp&nbsp;where&nbsp;name&nbsp;like&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$name</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$connid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">IFX_SCROLL</font><font color="#007700">);<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">$rid</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;错误处理<br></font><font color="#007700">}<br></font><font color="#0000BB">$rowcount&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_affected_rows</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">);<br>if&nbsp;(</font><font color="#0000BB">$rowcount&nbsp;</font><font color="#007700">&gt;&nbsp;</font><font color="#0000BB">1000</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">printf&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"返回资料太多，共&nbsp;%d&nbsp;笔\n&lt;br&gt;"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$rowcount</font><font color="#007700">);<br>&nbsp;&nbsp;die&nbsp;(</font><font color="#DD0000">"请重新执行&nbsp;SQL&nbsp;指令&lt;br&gt;\n"</font><font color="#007700">);<br>}<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">ifx_do</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;错误处理<br></font><font color="#007700">}<br></font><font color="#0000BB">ifx_htmltbl_result</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"border=\"2\""</font><font color="#007700">);<br></font><font color="#0000BB">ifx_free_result</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_fetch_row.php" alt="function.php?ifx_fetch_row">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ifx_fieldtypes.php" alt="function.php?ifx_fieldtypes">下一页</a>  ]</td></tr></table>
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
