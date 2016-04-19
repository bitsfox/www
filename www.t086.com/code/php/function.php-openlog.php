<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:openlog()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:openlog()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-35.php" alt="group.php?35">网络函数库</a></div><br><h1><font color=0000bb>openlog</font></h1><p>
打开系统纪录。<p>
<font color=ff8000>语法:</font> <b>int openlog(string ident, int option, int facility);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 操作系统与环境<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数会打开操作系统的纪录机制 (logger)。参数 ident 会加到纪录的字符串中。参数 option 的值包括了 LOG_PID、LOG_CONS、LOG_ODELAY、LOG_NDELAY、LOG_NOWAIT、LOG_PERROR，在 Win32 系统中，只有 LOG_PID 有效。参数 facility 的值可能为 LOG_KERN、LOG_USER、LOG_MAIL、LOG_DAEMON、LOG_AUTH、LOG_SYSLOG、LOG_LPR、LOG_NEWS、LOG_UUCP、LOG_CRON 或 LOG_AUTHPRIV，在 Win32 系统上，本参数是无效的字段。本函数呼叫 UNIX 系统的 openlog() 函数，因此在 Windows 系列的操作系统中，本函数没有完全的实作。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>openlog</font><font color="#007700">(</font><font color="#DD0000">"FUN"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">LOG_PID&nbsp;</font><font color="#007700">|&nbsp;</font><font color="#0000BB">LOG_CONS</font><font color="#007700">,&nbsp;</font><font color="#0000BB">LOG_USER</font><font color="#007700">);<br></font><font color="#0000BB">syslog</font><font color="#007700">(</font><font color="#0000BB">LOG_INFO</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Wa&nbsp;ha&nbsp;ha&nbsp;...."</font><font color="#007700">);<br></font><font color="#0000BB">closelog</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-syslog.php" alt="function.php?syslog">syslog()</a> &nbsp;<a href="function.php-closelog.php" alt="function.php?closelog">closelog()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-getmxrr.php" alt="function.php?getmxrr">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-syslog.php" alt="function.php?syslog">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
