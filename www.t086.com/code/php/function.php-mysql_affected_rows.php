<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:mysql_affected_rows()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mysql_affected_rows()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-33.php" alt="group.php?33">MySQL 数据库函数库</a></div><br><h1><font color=0000bb>mysql_affected_rows</font></h1><p>
得到 MySQL 最后操作影响的列数目。<p>
<font color=ff8000>语法:</font> <b>int mysql_affected_rows(int [link_identifier]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可得到 MySQL 最后查询操作 INSERT、UPDATE 或 DELETE 所影响的列 (row) 数目。若最后的查询 (query) 是使用 DELETE 而且没有使用 WHERE 命令，则会删除全部资料，本函数将返回 0。若最后使用的是 SELECT，则用本函数不会得到预期的数目，因为要改变 MySQL 数据库本函数才有效，欲得到 SELECT 返回的数目需使用 <a href="function.php-mysql_num_rows.php" alt="function.php?mysql_num_rows">mysql_num_rows()</a> 函数。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[ </td> <td> <a href="function.php-mysql_close.php" alt="function.php?mysql_close">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
