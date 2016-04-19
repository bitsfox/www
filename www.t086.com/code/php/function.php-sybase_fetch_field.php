<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:sybase_fetch_field()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:sybase_fetch_field()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-34.php" alt="group.php?34">Sybase 数据库函数库</a></div><br><h1><font color=0000bb>sybase_fetch_field</font></h1><p>
取得字段信息。<p>
<font color=ff8000>语法:</font> <b>object sybase_fetch_field(int result, int field_offset);</b><p>
<font color=ff8000>返回值:</font> 类<p>
<font color=ff8000>函数种类:</font> 数学运算<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数返回的类资料为 result 的字段 (Column) 信息。返回类的属性如下：

<ul type=disc>
<li>name - 字段名称
<li>column_source -字段所在表格的资料表名称 
<li>max_length - 字段的最大长度
<li>numeric - 若为 1 表示本字段为数字类型 (numeric)
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-sybase_field_seek.php" alt="function.php?sybase_field_seek">sybase_field_seek()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-sybase_fetch_array.php" alt="function.php?sybase_fetch_array">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-sybase_fetch_object.php" alt="function.php?sybase_fetch_object">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
