<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:fopen()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:fopen()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">文件系统函数库</a></div><br><h1><font color=0000bb>fopen</font></h1><p>
打开文件或者 URL。<p>
<font color=ff8000>语法:</font> <b>int fopen(string filename, string mode);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 文件存取<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>说明:  本函数可用来打开本地或者远端的文件。若参数 filename 为 "http://......" 则本函数利用 HTTP 1.0 协议与服务器连接，文件指针则指到服务器返回文件的起始处。若参数 filename 为 "ftp://......." 则本函数会与服务器连接，文件指针指到指定的文件处。若 FTP 服务器没有支持被动模式 (passive mode ftp) 则返回失败值。打开的 FTP 文件可以是读取或写入其中之一，但不能读或写二种同时使用。其它的情形，本函数打开本地的文件，文件的指针则指向打开的文件。若开文件失败，则返回 false 值。<p>
字符串参数 mode 可以是下列的情形：<p><ul type=disc>
<li>'r' 开文件方式为只读，文件指针指到开始处。
<li>'r+' 开文件方式为可读写，文件指针指到开始处。
<li>'w' 开文件方式为写入，文件指针指到开始处，并将原文件的长度设为 0。若文件不存在，则建立新文件。
<li>'w+' 开文件方式为可读写，文件指针指到开始处，并将原文件的长度设为 0。若文件不存在，则建立新文件。
<li>'a' 开文件方式为写入，文件指针指到文件最后。若文件不存在，则建立新文件。
<li>'a+' 开文件方式为可读写，文件指针指到文件最后。若文件不存在，则建立新文件。
<li>'b' 若操作系统的文字及二进位文件不同，则可以用此参数，UNIX 系统不需要使用本参数。
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
第一行为&nbsp;UNIX&nbsp;系统使用；第二行是&nbsp;Windows&nbsp;系列系统的用法；第三、四行则为&nbsp;URL&nbsp;的使用范例。<br><br><font color="#0000BB">&lt;?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"/home/rasmus/file.txt"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"c:\\mydata\\info.txt"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"http://www.php.net/"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"ftp://user:password@my.com/"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-fclose.php" alt="function.php?fclose">fclose()</a> &nbsp;<a href="function.php-popen.php" alt="function.php?popen">popen()</a> &nbsp;<a href="function.php-fsockopen.php" alt="function.php?fsockopen">fsockopen()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-flock.php" alt="function.php?flock">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-fpassthru.php" alt="function.php?fpassthru">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
