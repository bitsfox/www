<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:str_replace()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:str_replace()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>str_replace</font></h1><p>
字符串取代。<p>
<font color=ff8000>语法:</font> <b>string str_replace(string needle, string str, string haystack);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将字符串 str 代入 haystack 字符串中，将所有的 needle 置换成 str。mlevine@adtraq.com (11-Apr-1999) 指出在 PHP 3.0.7 版，本函数有些 bug，而 nadeem@bleh.org (05-Jun-1999) 补充在 PHP 3.0.8 版本函数就回复正常了。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下例将&nbsp;%body%&nbsp;以&nbsp;black&nbsp;取代<br><br><font color="#0000BB">&lt;?php<br>$bodytag&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">str_replace</font><font color="#007700">(</font><font color="#DD0000">"%body%"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"black"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"&lt;body&nbsp;text=%body%&gt;"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$bodytag</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-ereg_replace.php" alt="function.php?ereg_replace">ereg_replace()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-strtoupper.php" alt="function.php?strtoupper">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-strtr.php" alt="function.php?strtr">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
