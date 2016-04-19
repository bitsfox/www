<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:easter_date()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:easter_date()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-8.php" alt="group.php?8">日期与时间函数库</a></div><br><h1><font color=0000bb>easter_date</font></h1><p>
计算复活节日期。<p>
<font color=ff8000>语法:</font> <b>int easter_date(int [year]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 时间日期<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>输入某一年份，则以 UNIX 时间戳记的格式返回该年的复活节日期，若没有输入年份，则计算当年的日期。值的注意的是输入的年份必需在公元 1970 至 2037 年之间，否则无法计算。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"M-d-Y"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">easter_date</font><font color="#007700">(</font><font color="#0000BB">1999</font><font color="#007700">));<br>echo&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"M-d-Y"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">easter_date</font><font color="#007700">(</font><font color="#0000BB">2000</font><font color="#007700">));<br>echo&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"M-d-Y"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">easter_date</font><font color="#007700">(</font><font color="#0000BB">2001</font><font color="#007700">));<br></font><font color="#0000BB">?&gt;<br></font><br>返回结果为<br>Apr-04-1999<br>Apr-23-2000<br>Apr-15-2001</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-gmdate.php" alt="function.php?gmdate">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-easter_days.php" alt="function.php?easter_days">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
