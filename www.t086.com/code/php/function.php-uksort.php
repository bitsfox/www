<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:uksort()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:uksort()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">数组处理函数库</a></div><br><h1><font color=0000bb>uksort</font></h1><p>
将数组的索引依用户自定的函数排序。<p>
<font color=ff8000>语法:</font> <b>void uksort(array array, function cmp_function);</b><p>
<font color=ff8000>返回值:</font> 无<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将数组的索引依用户自定的方式重排，cmp_function 即用户自行开发的函数。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">mycompare</font><font color="#007700">(</font><font color="#0000BB">$a</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">==&nbsp;</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;return&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">&gt;&nbsp;</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;?&nbsp;-</font><font color="#0000BB">1&nbsp;</font><font color="#007700">:&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>}<br></font><font color="#0000BB">$a&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#0000BB">4&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"four"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">3&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"three"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">20&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"twenty"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">10&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"ten"</font><font color="#007700">);<br></font><font color="#0000BB">uksort</font><font color="#007700">(</font><font color="#0000BB">$a</font><font color="#007700">,&nbsp;</font><font color="#0000BB">mycompare</font><font color="#007700">);<br>while(list(</font><font color="#0000BB">$key</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$value</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$a</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$key:&nbsp;$value</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font><br>上面的程序返回资料为<br>20:&nbsp;twenty<br>10:&nbsp;ten<br>4:&nbsp;four<br>3:&nbsp;three</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-arsort.php" alt="function.php?arsort">arsort()</a> &nbsp;<a href="function.php-asort.php" alt="function.php?asort">asort()</a> &nbsp;<a href="function.php-ksort.php" alt="function.php?ksort">ksort()</a> &nbsp;<a href="function.php-rsort.php" alt="function.php?rsort">rsort()</a> &nbsp;<a href="function.php-sort.php" alt="function.php?sort">sort()</a> &nbsp;<a href="function.php-uasort.php" alt="function.php?uasort">uasort()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-uasort.php" alt="function.php?uasort">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-usort.php" alt="function.php?usort">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
