<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:filemtime()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:filemtime()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">文件系统函数库</a></div><br><h1><font color=0000bb>filemtime</font></h1><p>
取得文件最后的修改时间。<p>
<font color=ff8000>语法:</font> <b>int filemtime(string filename);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 文件存取<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数返回指定文件 filename 的最后修改时间。返回 false 表示发生错误。返回值放在快取缓冲区中，可以参考 <a href="function.php-clearstatcache.php" alt="function.php?clearstatcache">clearstatcache()</a>。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
以下是&nbsp;benbatten@home.com&nbsp;(29-Apr-1999)&nbsp;在&nbsp;Win95&nbsp;上的实作范例，例中返回当页&nbsp;Homepage&nbsp;的最后修改时间并将&nbsp;filemtime()&nbsp;返回的&nbsp;UNIX&nbsp;格式的时间字符串转换成&nbsp;12&nbsp;小时制的字符串。<br><br>(注：由于本例的文件为&nbsp;__FILE__&nbsp;表示目前的文件，其实和使用&nbsp;getlastmod()&nbsp;函数有相同的效果。)<br><br><font color="#0000BB">&lt;?php<br>$filemod&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">filemtime</font><font color="#007700">(</font><font color="#0000BB">__FILE__</font><font color="#007700">);<br></font><font color="#0000BB">$filemodtime&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"F&nbsp;j&nbsp;Y&nbsp;h:i:s&nbsp;A"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$filemod</font><font color="#007700">);<br>print(</font><font color="#DD0000">"本页最后修改时间:&nbsp;$filemodtime"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-fileinode.php" alt="function.php?fileinode">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-fileowner.php" alt="function.php?fileowner">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
