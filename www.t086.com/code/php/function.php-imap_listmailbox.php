<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:imap_listmailbox()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:imap_listmailbox()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP 电子邮件系统函数库</a></div><br><h1><font color=0000bb>imap_listmailbox</font></h1><p>
获取邮箱列示。<p>
<font color=ff8000>语法:</font> <b>array imap_listmailbox(int stream_id, string ref, string pattern);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可获得邮箱列示。参数 imap_stream 为 IMAP 的代号。参数 ref 通常为 IMAP 服务器名称，参考下例。参数 pattern 可用万用字符 * 代表全部的路径，aayawa@yahoo.com 并指出 (27-Apr-1999) 若本参数以 "" (空字符) 代入，不会返回资料。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
本例为&nbsp;alank@shermanloan.com&nbsp;于&nbsp;02-Jun-1999&nbsp;所提出的。<br><br><font color="#0000BB">&lt;?php<br>$Account&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"myid"</font><font color="#007700">;<br></font><font color="#0000BB">$Password</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"mypasswd"</font><font color="#007700">;<br></font><font color="#0000BB">$mailbox&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_open</font><font color="#007700">(</font><font color="#DD0000">"{mail.xyz.com:143}INBOX"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$Account</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$Password</font><font color="#007700">);<br>if&nbsp;(</font><font color="#0000BB">$mailbox</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$mailboxes&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_listmailbox</font><font color="#007700">(</font><font color="#0000BB">$mailbox</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"{mail.xyz.com:143}"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"*"</font><font color="#007700">);<br>&nbsp;&nbsp;for&nbsp;(</font><font color="#0000BB">$index&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$index&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$mailboxes</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$index</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;print(</font><font color="#0000BB">$mailboxes</font><font color="#007700">[</font><font color="#0000BB">$index</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"\n"</font><font color="#007700">);<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;</font><font color="#0000BB">imap_close</font><font color="#007700">(</font><font color="#0000BB">$mailbox</font><font color="#007700">);<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;print(</font><font color="#DD0000">"无法?/font><font color="#007700">}</font><font color="#DD0000">启&nbsp;$Account&nbsp;的信箱.</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</font></td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_headers.php" alt="function.php?imap_headers">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-imap_listsubscribed.php" alt="function.php?imap_listsubscribed">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
