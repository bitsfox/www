<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:GregorianToJD()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:GregorianToJD()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-6.php" alt="group.php?6">历法函数库</a></div><br><h1><font color=0000bb>GregorianToJD</font></h1><p>
将格里高里历法转换成为凯撒日计数。<p>
<font color=ff8000>语法:</font> <b>int gregoriantojd(int month, int day, int year);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 时间日期<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>有效的范围为格里高里历法公元前 4714 年至公元 9999 年。这套软件能计算到公元前 4714 年，但这是不太有意义的。格里高里历在 1582 年 10 月 15 日施行，但一些欧洲国家到很久后才实行，如英国在 1752 年实行、苏联在 1918 年施行、希腊在 1923 年实行。大部份的欧洲国家优先使用凯撒历法，再次才是格里高里历法。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$jd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">GregorianToJD</font><font color="#007700">(</font><font color="#0000BB">10</font><font color="#007700">,</font><font color="#0000BB">11</font><font color="#007700">,</font><font color="#0000BB">1970</font><font color="#007700">);<br>echo(</font><font color="#DD0000">"$jd</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">);<br></font><font color="#0000BB">$gregorian&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">JDToGregorian</font><font color="#007700">(</font><font color="#0000BB">$jd</font><font color="#007700">);<br>echo(</font><font color="#DD0000">"$gregorian</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-JDToGregorian.php" alt="function.php?JDToGregorian">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-JDToJulian.php" alt="function.php?JDToJulian">下一页</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
