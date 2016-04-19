<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:msql_fetch_object()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:msql_fetch_object()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-31.php" alt="group.php?31">mSQL 数据库函数库</a></div><br><h1><font color=0000bb>msql_fetch_object</font></h1><p>
返回类资料。<p>
<font color=ff8000>语法:</font> <b>object msql_fetch_object(int query_identifier);</b><p>
<font color=ff8000>返回值:</font> 类<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来将查询结果 query_identifier 拆到类变量中。使用方法和 <a href="function.php-msql_fetch_array.php" alt="function.php?msql_fetch_array">msql_fetch_array()</a> 几乎相同，不同的地方在于本函数返回资料是类而不是数组。若 query_identifier 没有资料，则返回 false 值。另外治募注意的地方是，取回的类资料的索引只能是文字而不能用数字，这是因为类的特性。类资料的特性中所有的属性 (property) 名称都不能是数字。关于速度方面，本函数的处理速度几乎和 msql_fetch_array()、msql_fetch_row() 二函数差不多，要用哪个函数还是看使用的需求决定。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-msql_fetch_array.php" alt="function.php?msql_fetch_array">msql_fetch_array()</a> &nbsp;<a href="function.php-msql_fetch_row.php" alt="function.php?msql_fetch_row">msql_fetch_row()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-msql_fetch_field.php" alt="function.php?msql_fetch_field">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-msql_fetch_row.php" alt="function.php?msql_fetch_row">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
