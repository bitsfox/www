<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:fpassthru()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:fpassthru()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">文件系统函数库</a></div><br><h1><font color=0000bb>fpassthru</font></h1><p>
输出所有剩余资料。<p>
<font color=ff8000>语法:</font> <b>int fpassthru(int fp);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 文件存取<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数读取文件 fp 直到文件尾 (End of file, EOF)，并将资料输出到标准输出 (standard output)。若有错误发生，则返回 false 值。而文件 fp 必须由 <a href="function.php-fopen.php" alt="function.php?fopen">fopen()</a>、<a href="function.php-popen.php" alt="function.php?popen">popen()</a> 或 <a href="function.php-fsockopen.php" alt="function.php?fsockopen">fsockopen()</a> 打开成功的指针。当本函数读完文件，会自动将文件关闭，即 fp 变无效。如果只是要将文件输出到标准输出，可以使用 <a href="function.php-readfile.php" alt="function.php?readfile">readfile()</a> 会比用 <a href="function.php-fopen.php" alt="function.php?fopen">fopen()</a> 更好。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-readfile.php" alt="function.php?readfile">readfile()</a> &nbsp;<a href="function.php-fopen.php" alt="function.php?fopen">fopen()</a> &nbsp;<a href="function.php-fclose.php" alt="function.php?fclose">fclose()</a> &nbsp;<a href="function.php-popen.php" alt="function.php?popen">popen()</a> &nbsp;<a href="function.php-fsockopen.php" alt="function.php?fsockopen">fsockopen()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-fopen.php" alt="function.php?fopen">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-fputs.php" alt="function.php?fputs">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
