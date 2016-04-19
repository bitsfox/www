<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:substr()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:substr()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>substr</font></h1><p>
取部份字符串。<p>
<font color=ff8000>语法:</font> <b>string substr(string string, int start, int [length]);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将字符串 string 的第 start 位起的字符串取出 length 个字符。若 start 为负数，则从字符串尾端算起。若可省略的参数 length 存在，但为负数，则表示取到倒数第 length 个字符。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">substr</font><font color="#007700">(</font><font color="#DD0000">"abcdef"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">3</font><font color="#007700">);&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;返回&nbsp;"bcd"<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">substr</font><font color="#007700">(</font><font color="#DD0000">"abcdef"</font><font color="#007700">,&nbsp;-</font><font color="#0000BB">2</font><font color="#007700">);&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;返回&nbsp;"ef"<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">substr</font><font color="#007700">(</font><font color="#DD0000">"abcdef"</font><font color="#007700">,&nbsp;-</font><font color="#0000BB">3</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);&nbsp;</font><font color="#FF8000">//&nbsp;返回&nbsp;"d"<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">substr</font><font color="#007700">(</font><font color="#DD0000">"abcdef"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;-</font><font color="#0000BB">1</font><font color="#007700">);&nbsp;</font><font color="#FF8000">//&nbsp;返回&nbsp;"bcde"<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-strrchr.php" alt="function.php?strrchr">strrchr()</a> &nbsp;<a href="function.php-ereg.php" alt="function.php?ereg">ereg()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-strtr.php" alt="function.php?strtr">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-trim.php" alt="function.php?trim">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
