<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:fgets()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:fgets()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">文件系统函数库</a></div><br><h1><font color=0000bb>fgets</font></h1><p>
取得文件指针所指的行。<p>
<font color=ff8000>语法:</font> <b>string fgets(int fp, int length);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 文件存取<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数取得文件指针所指的行，返回字符串长度为行的长度减一。若发生错误则返回 false。一般常遇到的陷阱是用 C 语言的经验来使用本函数，而 EOF 时的处理方式则和 C 语言的 fgets() 不同。其中的文件指针必须是有效的，且必须是已经用 <a href="function.php-fopen.php" alt="function.php?fopen">fopen()</a>、<a href="function.php-popen.php" alt="function.php?popen">popen()</a> 或 <a href="function.php-fsockopen.php" alt="function.php?fsockopen">fsockopen()</a> 成功开文件的指针。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$fd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"/tmp/myfile.txt"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">$buffer&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fgets</font><font color="#007700">(</font><font color="#0000BB">$fd</font><font color="#007700">,&nbsp;</font><font color="#0000BB">4096</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$buffer</font><font color="#007700">;<br>}<br></font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fd</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-fread.php" alt="function.php?fread">fread()</a> &nbsp;<a href="function.php-fopen.php" alt="function.php?fopen">fopen()</a> &nbsp;<a href="function.php-popen.php" alt="function.php?popen">popen()</a> &nbsp;<a href="function.php-fsockopen.php" alt="function.php?fsockopen">fsockopen()</a> &nbsp;<a href="function.php-fgetc.php" alt="function.php?fgetc">fgetc()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-fgetcsv.php" alt="function.php?fgetcsv">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-fgetss.php" alt="function.php?fgetss">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
