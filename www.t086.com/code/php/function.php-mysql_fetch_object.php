<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:mysql_fetch_object()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mysql_fetch_object()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-33.php" alt="group.php?33">MySQL 数据库函数库</a></div><br><h1><font color=0000bb>mysql_fetch_object</font></h1><p>
返回类资料。<p>
<font color=ff8000>语法:</font> <b>object mysql_fetch_object(int result, int [result_typ]);</b><p>
<font color=ff8000>返回值:</font> 类<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来将查询结果 result 拆到类变量中。使用方法和 <a href="function.php-mysql_fetch_array.php" alt="function.php?mysql_fetch_array">mysql_fetch_array()</a> 几乎相同，不同的地方在于本函数返回资料是类而不是数组。若 result 没有资料，则返回 false 值。另外治募注意的地方是，取回的类资料的索引只能是文字而不能用数字，这是因为类的特性。类资料的特性中所有的属性 (property) 名称都不能是数字，因此只好乖乖使用文字字符串当索引了。参数 result_typ是一个常量值，有以下几种常量 MYSQL_ASSOC、MYSQL_NUM 与 MYSQL_BOTH。关于速度方面，本函数的处理速度几乎和 <a href="function.php-mysql_fetch_row.php" alt="function.php?mysql_fetch_row">mysql_fetch_row()</a> 及 <a href="function.php-mysql_fetch_array.php" alt="function.php?mysql_fetch_array">mysql_fetch_array()</a> 二函数差不多，要用哪个函数还是看使用的需求决定。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下面的例子示范如使用返回的类。<br><br><font color="#0000BB">&lt;?php&nbsp;<br>mysql_connect</font><font color="#007700">(</font><font color="#0000BB">$host</font><font color="#007700">,</font><font color="#0000BB">$user</font><font color="#007700">,</font><font color="#0000BB">$password</font><font color="#007700">);<br></font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_db_query</font><font color="#007700">(</font><font color="#DD0000">"MyDatabase"</font><font color="#007700">,</font><font color="#DD0000">"select&nbsp;*&nbsp;from&nbsp;test"</font><font color="#007700">);<br>while(</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_object</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">-&gt;</font><font color="#0000BB">user_id</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">-&gt;</font><font color="#0000BB">fullname</font><font color="#007700">;<br>}<br></font><font color="#0000BB">mysql_free_result</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-mysql_fetch_array.php" alt="function.php?mysql_fetch_array">mysql_fetch_array()</a> &nbsp;<a href="function.php-mysql_fetch_row.php" alt="function.php?mysql_fetch_row">mysql_fetch_row()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mysql_fetch_lengths.php" alt="function.php?mysql_fetch_lengths">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-mysql_fetch_row.php" alt="function.php?mysql_fetch_row">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
