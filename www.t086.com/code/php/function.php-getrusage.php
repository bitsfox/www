<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:getrusage()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:getrusage()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-22.php" alt="group.php?22">PHP 选项及相关信息函数库</a></div><br><h1><font color=0000bb>getrusage</font></h1><p>
返回系统资源使用率。<p>
<font color=ff8000>语法:</font> <b>array getrusage(int [who]);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> PHP 系统功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数使用 UNIX 的系统呼叫 getrusage(2)。返回的信息以数组的方式返回。若参数 who 为 1，本函数会呼叫 RUSAGE_CHILDREN。更进一步的信息可以参考 UNIX 函数库方面的文件。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$dat&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">getrusage</font><font color="#007700">();<br>echo&nbsp;</font><font color="#0000BB">$dat</font><font color="#007700">[</font><font color="#DD0000">"ru_nswap"</font><font color="#007700">];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;Swaps&nbsp;数<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$dat</font><font color="#007700">[</font><font color="#DD0000">"ru_majflt"</font><font color="#007700">];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;分页数<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$dat</font><font color="#007700">[</font><font color="#DD0000">"ru_utime.tv_sec"</font><font color="#007700">];&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;使用时间&nbsp;(秒)<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$dat</font><font color="#007700">[</font><font color="#DD0000">"ru_utime.tv_usec"</font><font color="#007700">];&nbsp;</font><font color="#FF8000">//&nbsp;使用时间&nbsp;(毫秒)<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-getmyuid.php" alt="function.php?getmyuid">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-phpinfo.php" alt="function.php?phpinfo">下一页</a> 
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
