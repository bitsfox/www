<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:strrchr()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:strrchr()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>strrchr</font></h1><p>
取得某字符最后出现处起的字符串。<p>
<font color=ff8000>语法:</font> <b>string strrchr(string haystack, string needle);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来寻找字符串 haystack 中的字符 needle 最后出现位置，并将此位置起至字符串 haystack 结束之间的字符串返回。若没有找到 needle 则返回 false。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下例取回环境变量&nbsp;PATH&nbsp;之最后一个路径<br><br><font color="#0000BB">&lt;?php<br>$dir&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">substr</font><font color="#007700">(&nbsp;</font><font color="#0000BB">strrchr</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$PATH</font><font color="#007700">,&nbsp;</font><font color="#DD0000">":"&nbsp;</font><font color="#007700">),&nbsp;</font><font color="#0000BB">1&nbsp;</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"最后的路径为:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$dir</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-substr.php" alt="function.php?substr">substr()</a> &nbsp;<a href="function.php-strstr.php" alt="function.php?strstr">strstr()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-strpos.php" alt="function.php?strpos">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-strrev.php" alt="function.php?strrev">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
