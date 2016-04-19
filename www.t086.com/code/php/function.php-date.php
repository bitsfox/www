<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:date()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:date()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-8.php" alt="group.php?8">日期与时间函数库</a></div><br><h1><font color=0000bb>date</font></h1><p>
将服务器的时间格式化。<p>
<font color=ff8000>语法:</font> <b>string date(string format, int [timestamp]);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 时间日期<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>返回值的字符串依配置的格式来决定。若有传入时间戳记值，则将时间戳记格式化返回；若无传入时间戳记值，则将目前服务器的时间格式化返回。要将日期转为其它的语系格式，应使用<a href="function.php-setlocale.php" alt="function.php?setlocale">setlocale()</a> 及 <a href="function.php-strftime.php" alt="function.php?strftime">strftime()</a> 二个函数。字符串格式化的选项如下：<p>
<ul type=disc>
<li>a - "am" 或是 "pm"
<li>A - "AM" 或是 "PM"
<li>d - 几日，二位数字，若不足二位则前面补零; 如:  "01" 至 "31"
<li>D - 星期几，三个英文字母; 如: "Fri"
<li>F - 月份，英文全名; 如: "January"
<li>h - 12 小时制的小时; 如: "01" 至 "12"
<li>H - 24 小时制的小时; 如: "00" 至 "23"
<li>g - 12 小时制的小时，不足二位不补零; 如: "1" 至 12"
<li>G - 24 小时制的小时，不足二位不补零; 如: "0" 至 "23"
<li>i - 分钟; 如: "00" 至 "59"
<li>j - 几日，二位数字，若不足二位不补零; 如: "1" 至 "31"
<li>l - 星期几，英文全名; 如: "Friday"
<li>m - 月份，二位数字，若不足二位则在前面补零; 如: "01" 至 "12"
<li>n - 月份，二位数字，若不足二位则不补零; 如: "1" 至 "12"
<li>M - 月份，三个英文字母; 如: "Jan"
<li>s - 秒; 如: "00" 至 "59"
<li>S - 字尾加英文序数，二个英文字母; 如: "th"，"nd"
<li>t - 指定月份的天数; 如: "28" 至 "31"
<li>U - 总秒数
<li>w - 数字型的星期几，如: "0" (星期日) 至 "6" (星期六)
<li>Y - 年，四位数字; 如: "1999"
<li>y - 年，二位数字; 如: "99"
<li>z - 一年中的第几天; 如: "0" 至 "365"
</ul><p>
其它不在上列的字符则直接列出该字符。
<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
范例一:<br><font color="#0000BB">&lt;?<br></font><font color="#007700">print(</font><font color="#0000BB">date</font><font color="#007700">(&nbsp;</font><font color="#DD0000">"l&nbsp;dS&nbsp;of&nbsp;F&nbsp;Y&nbsp;h:i:s&nbsp;A"&nbsp;</font><font color="#007700">));<br>print(</font><font color="#DD0000">"July&nbsp;1,&nbsp;2000&nbsp;is&nbsp;on&nbsp;a&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"l"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">7</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">2000</font><font color="#007700">)));<br></font><font color="#0000BB">?&gt;<br></font><br>范例二:<br><font color="#0000BB">&lt;?<br>$tomorrow&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"m"</font><font color="#007700">)&nbsp;&nbsp;,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"d"</font><font color="#007700">)+</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"Y"</font><font color="#007700">));<br></font><font color="#0000BB">$lastmonth&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"m"</font><font color="#007700">)-</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"d"</font><font color="#007700">),&nbsp;&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"Y"</font><font color="#007700">));<br></font><font color="#0000BB">$nextyear&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"m"</font><font color="#007700">),&nbsp;&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"d"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"Y"</font><font color="#007700">)+</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-gmdate.php" alt="function.php?gmdate">gmdate()</a> &nbsp;<a href="function.php-mktime.php" alt="function.php?mktime">mktime()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-checkdate.php" alt="function.php?checkdate">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-strftime.php" alt="function.php?strftime">下一页</a> 
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
