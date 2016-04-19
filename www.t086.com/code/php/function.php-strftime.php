<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:strftime()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:strftime()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-8.php" alt="group.php?8">日期与时间函数库</a></div><br><h1><font color=0000bb>strftime</font></h1><p>
将服务器的时间本地格式化。<p>
<font color=ff8000>语法:</font> <b>string strftime(string format, int [timestamp]);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 时间日期<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>返回值的字符串依配置的格式来决定。若有传入时间戳记值，则将时间戳记格式化返回；若无传入时间戳记值，则将目前服务器的时间本地格式化返回。月份或者星期名称随着本地语系配置 <a href="function.php-setlocale.php" alt="function.php?setlocale">setlocale()</a> 的不同而改变。<p>
返回的字符串可以依下列的格式而定：<p>
<ul type=disc>
<li>%a  星期几的缩写。
<li>%A  星期几的全名。
<li>%b  月份名称的缩写。
<li>%B  月份名称的全名。
<li>%c  本地端日期时间较佳表示字符串。
<li>%d  用数字表示本月的第几天 (范围为 00 至 31)。
<li>%H  用 24 小时制数字表示小时数 (范围为 00 至 23)。
<li>%I  用 12 小时制数字表示小时数 (范围为 01 至 12)。
<li>%j  以数字表示当年度的第几天 (范围为 001 至 366)。
<li>%m  月份的数字 (范围由 1 至 12)。
<li>%M  分钟。
<li>%p  以 'AM' 或 'PM' 表示本地端时间。
<li>%S  秒数。
<li>%U  数字表示为本年度的第几周，第一个星期由第一个周日开始。
<li>%W  数字表示为本年度的第几周，第一个星期由第一个周一开始。
<li>%w  用数字表示本周的第几天 ( 0 为周日)。
<li>%x  不含时间的日期表示法。
<li>%X  不含日期的时间表示法。
<li>%y  二位数字表示年份 (范围由 00 至 99)。
<li>%Y  完整的年份数字表示，即四位数。
<li>%Z  时区或名称缩写。
<li>%%  % 字符。
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>setlocale&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"LC_TIME"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"C"</font><font color="#007700">);<br>print(</font><font color="#0000BB">strftime</font><font color="#007700">(</font><font color="#DD0000">"%A&nbsp;in&nbsp;Finnish&nbsp;is&nbsp;"</font><font color="#007700">));<br></font><font color="#0000BB">setlocale&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"LC_TIME"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"fi"</font><font color="#007700">);<br>print(</font><font color="#0000BB">strftime</font><font color="#007700">(</font><font color="#DD0000">"%A,&nbsp;in&nbsp;French&nbsp;"</font><font color="#007700">));<br></font><font color="#0000BB">setlocale&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"LC_TIME"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"fr"</font><font color="#007700">);<br>print(</font><font color="#0000BB">strftime</font><font color="#007700">(</font><font color="#DD0000">"%A&nbsp;and&nbsp;in&nbsp;German&nbsp;"</font><font color="#007700">));<br></font><font color="#0000BB">setlocale&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"LC_TIME"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"de"</font><font color="#007700">);<br>print(</font><font color="#0000BB">strftime</font><font color="#007700">(</font><font color="#DD0000">"%A.\n"</font><font color="#007700">));<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-setlocale.php" alt="function.php?setlocale">setlocale()</a> &nbsp;<a href="function.php-mktime.php" alt="function.php?mktime">mktime()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-date.php" alt="function.php?date">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-getdate.php" alt="function.php?getdate">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
