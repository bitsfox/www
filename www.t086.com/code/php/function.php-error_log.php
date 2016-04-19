<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:error_log()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:error_log()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-22.php" alt="group.php?22">PHP 选项及相关信息函数库</a></div><br><h1><font color=0000bb>error_log</font></h1><p>
送出一个错误信息。<p>
<font color=ff8000>语法:</font> <b>int error_log(string message, int message_type, string [destination], string [extra_headers]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> PHP 系统功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>此函数会送出错误信息到 Web 服务器的错误 log 文件，TCP Port，或到指定文件。第一个参数 message 即为要送出的错误信息。第二个参数 message_type 为整数值：0 表示送到操作系统的 log (UNIX 在 syslog、Windows NT 记录到事件记录)；1 则使用 PHP 的 <a href="function.php-Mail.php" alt="function.php?Mail">Mail()</a> 函数，送信息到某 E-Mail 处，第四个参数 extra_headers 亦会用到；2 则将错误信息送到 TCP 埠，此时第三个参数 destination 表示目的地 IP 及 Port；3 则将信息存到文件 destination 中。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
本例为登入&nbsp;Oracle&nbsp;数据库出现问题的处理。<br><br><font color="#0000BB">&lt;?php<br></font><font color="#007700">if&nbsp;(!</font><font color="#0000BB">Ora_Logon</font><font color="#007700">(</font><font color="#0000BB">$username</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$password</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"Oracle&nbsp;数据库不可用!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br>}<br>if&nbsp;(!(</font><font color="#0000BB">$foo&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">allocate_new_foo</font><font color="#007700">())&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"出现大麻烦了!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"webmaster@www.mydomain.com.tw"</font><font color="#007700">);<br>}<br></font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"搞砸了!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"127.0.0.1:7000"</font><font color="#007700">);<br></font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"搞砸了!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"loghost"</font><font color="#007700">);<br></font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"搞砸了!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">3</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"/var/tmp/my-errors.log"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_status.php" alt="function.php?imap_status">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-error_reporting.php" alt="function.php?error_reporting">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
