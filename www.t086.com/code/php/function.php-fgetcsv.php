<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:fgetcsv()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:fgetcsv()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">文件系统函数库</a></div><br><h1><font color=0000bb>fgetcsv</font></h1><p>
取得文件指针所指行，并解析 CSV 字段。<p>
<font color=ff8000>语法:</font> <b>array fgetcsv(int fp, int length, string [delimiter]);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 文件存取<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数与 fgets() 的功用类似，不同的地方在于本函数用来解析读取行的 CSV 字段资料，并将其放入数组变量之中。其中的第三个参数 delimiter 若未指定，则使用内定值：逗号。其中的文件指针 fp 必须是有效的，且必须是已经用 <a href="function.php-fopen.php" alt="function.php?fopen">fopen()</a>、<a href="function.php-popen.php" alt="function.php?popen">popen()</a> 或 <a href="function.php-fsockopen.php" alt="function.php?fsockopen">fsockopen()</a> 成功开文件的指针。而第二个参数 length 的值必须要比 CSV 文件最长一行的字符数还大。本函数若发生错误或者到文件尾 (EOF, end of file)，则会返回 false 值。若遇到空行，则传到数组结构的字符为空字符字段 (null)，而不是当作发生错误的情形。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$row</font><font color="#007700">=</font><font color="#0000BB">1</font><font color="#007700">;<br></font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"mycsv.csv"</font><font color="#007700">,</font><font color="#DD0000">"r"</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fgetcsv</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#0000BB">1000</font><font color="#007700">,&nbsp;</font><font color="#DD0000">","</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$data</font><font color="#007700">);<br>&nbsp;&nbsp;print&nbsp;</font><font color="#DD0000">"&lt;p&gt;字段&nbsp;$num&nbsp;在第&nbsp;$row&nbsp;行:&nbsp;&lt;br&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">++;<br>&nbsp;&nbsp;for&nbsp;(&nbsp;</font><font color="#0000BB">$c</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$c</font><font color="#007700">&lt;</font><font color="#0000BB">$num</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$c</font><font color="#007700">++&nbsp;)&nbsp;print&nbsp;</font><font color="#0000BB">$data</font><font color="#007700">[</font><font color="#0000BB">$c</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-fgetc.php" alt="function.php?fgetc">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-fgets.php" alt="function.php?fgets">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
