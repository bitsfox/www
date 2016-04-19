<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:number_format()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:number_format()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-27.php" alt="group.php?27">数学运算函数库</a></div><br><h1><font color=0000bb>number_format</font></h1><p>
格式化数字字符串。<p>
<font color=ff8000>语法:</font> <b>string number_format(float number, int [decimals], string [dec_point], string [thousands_sep]);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 数学运算<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来将浮点参数 number 格式化。若没加参数 decimals 则返回的字符串只要整数部份，加了此参数才依参数指定的小数点位数返回。参数 dec_point 表示小数点的表示方式方法，默认值是 "."，若需要转换成其它的小数点就可以在这个参数改掉。参数 thousands_sep 为整数部份每三位的分隔符号，默认值是 ","。本函数最特别的地方就是参数数目，最少要有一个，也就是欲格式化的字符串；也可以有二个或者四个参数，但不能用三个参数。治募注意的是指定小数点的位数之后的数字直接舍弃，没有四舍五入的情形。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$short_pi&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"3.14159"</font><font color="#007700">;<br></font><font color="#0000BB">$my_pi&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">number_format</font><font color="#007700">(</font><font color="#0000BB">$short_pi</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$my_pi</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;3.14<br></font><font color="#0000BB">$foo&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">850017.9021</font><font color="#007700">;<br></font><font color="#0000BB">$new_foo&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">number_format</font><font color="#007700">(</font><font color="#0000BB">$foo</font><font color="#007700">,&nbsp;</font><font color="#0000BB">3</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"."</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"&nbsp;"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$new_foo</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;850&nbsp;017.902<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mt_getrandmax.php" alt="function.php?mt_getrandmax">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-OctDec.php" alt="function.php?OctDec">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
