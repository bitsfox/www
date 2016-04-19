<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ftp_get()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>

<div align=center><table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ftp_get()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-56.php" alt="group.php?56">FTP 文件传输函数库</a></div><br><h1><font color=0000bb>ftp_get</font></h1><p>
下载文件。<p>
<font color=ff8000>语法:</font> <b>boolean ftp_get(int ftp_stream, string local_file, string remote_file, int mode);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来下载指定的文件。参数 ftp_stream 为 FTP 的连接代码。参数 local_file 为欲存成本地端的文件名。参数 remote_file 为欲下载的文件名。参数 mode 的值有 FTP_ASCII 及 FTP_BINARY 二种，分别表示文字档宁或者是二进位文件。成功则返回 true 值，失败则返回 false 值。<p>
<p><hr size=1><br><p>
</td></tr></table></div>

<div align="center">[
  <a href="function.php-ftp_pasv.php" alt="function.php?ftp_pasv">上一页</a>
  <a href="../php/" alt="PHP">PHP中文手册</a>
  <a href="function.php-ftp_fget.php" alt="function.php?ftp_fget">下一页</a>
  ]
</div>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
