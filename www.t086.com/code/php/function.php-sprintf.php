<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:sprintf()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:sprintf()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>sprintf</font></h1><p>
将字符串格式化。<p>
<font color=ff8000>语法:</font> <b>string sprintf(string format, mixed [args]...);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来将字符串格式化。参数 format 是转换的格式，以百分比符号 % 开始到转换字符为止。而在转换的格式间依序包括了<p>
<ol type=1>
<li>填空字符。0 的话表示空格填 0；空格是默认值，表示空格就放着。
<li>对齐方式。默认值为向右对齐，负号表向左对齐。
<li>字段宽度。为最小宽度。
<li>精确度。指在小数点后的浮点数位数。
<li>类型，见下表
<table border=1>
<tr><td>%</td><td>印出百分比符号，不转换。</td></tr>
<tr><td>b</td><td>整数转成二进位。</td></tr>
<tr><td>c</td><td>整数转成对应的 ASCII 字符。</td></tr>
<tr><td>d</td><td>整数转成十进位。</td></tr>
<tr><td>f</td><td>倍精确度数字转成浮点数。</td></tr>
<tr><td>o</td><td>整数转成八进位。</td></tr>
<tr><td>s</td><td>整数转成字符串。</td></tr>
<tr><td>x</td><td>整数转成小写十六进位。</td></tr>
<tr><td>X</td><td>整数转成大写十六进位。</td></tr>
</table>
</ol><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$money1&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">68.75</font><font color="#007700">;<br></font><font color="#0000BB">$money2&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">54.35</font><font color="#007700">;<br></font><font color="#0000BB">$money&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$money1&nbsp;</font><font color="#007700">+&nbsp;</font><font color="#0000BB">$money2</font><font color="#007700">;<br></font><font color="#FF8000">//&nbsp;此时变量&nbsp;$money&nbsp;值为&nbsp;"123.1";<br></font><font color="#0000BB">$formatted&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">sprintf&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"%01.2f"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$money</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;此时变量&nbsp;$&nbsp;formatted&nbsp;值为&nbsp;"123.10"<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-soundex.php" alt="function.php?soundex">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-strchr.php" alt="function.php?strchr">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
