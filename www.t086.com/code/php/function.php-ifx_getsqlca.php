<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ifx_getsqlca()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ifx_getsqlca()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix 数据库函数库</a></div><br><h1><font color=0000bb>ifx_getsqlca</font></h1><p>
取得 query 后的 sqlca 信息。<p>
<font color=ff8000>语法:</font> <b>array ifx_getsqlca(int result_id);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可得到 Informix 最后查询操作后的 sqlca 结构 (struct) 中的相关信息。参数 result_id 是经过 <a href="function.php-ifx_query.php" alt="function.php?ifx_query">ifx_query()</a> 及 <a href="function.php-ifx_prepare.php" alt="function.php?ifx_prepare">ifx_prepare()</a> 的返回代号。本函数返回的数组其实就是 sqlca.sqlerrd[0] 到 sqlca.sqlerrd[5] 等六个元素的数组。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下例为部份程序<br><br><font color="#0000BB">&lt;?php<br>$qid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_query</font><font color="#007700">(</font><font color="#DD0000">"insert&nbsp;into&nbsp;sometable&nbsp;values(0,&nbsp;'2nd&nbsp;column',&nbsp;'another&nbsp;column'&nbsp;"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$connid</font><font color="#007700">);<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">$qid</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;错误处理<br></font><font color="#007700">}<br></font><font color="#0000BB">$sqlca&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_getsqlca&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$qid</font><font color="#007700">);<br></font><font color="#0000BB">$serial_value&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$sqlca</font><font color="#007700">[</font><font color="#DD0000">"sqlerrd1"</font><font color="#007700">];<br>echo&nbsp;</font><font color="#DD0000">"插入列序号为:&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$serial_value</font><font color="#007700">&lt;</font><font color="#0000BB">br</font><font color="#007700">&gt;</font><font color="#0000BB">n</font><font color="#DD0000">";<br>?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_affected_rows.php" alt="function.php?ifx_affected_rows">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ifx_fetch_row.php" alt="function.php?ifx_fetch_row">下一页</a>  ]</td></tr></table>
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
