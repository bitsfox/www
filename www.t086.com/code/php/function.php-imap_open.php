<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:imap_open()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:imap_open()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP 电子邮件系统函数库</a></div><br><h1><font color=0000bb>imap_open</font></h1><p>
打开 IMAP 链接。<p>
<font color=ff8000>语法:</font> <b>int imap_open(string mailbox, string username, string password, int [flags]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可打开客户端与服务器之间的 IMAP 链接，并可链接至 POP3 或 NNTP 服务器。参数 mailbox 为服务器端的位置。参数 username 为用户帐号。参数 password 为用户的密码。参数 flags 可省略，有下列的值：<p>

<ul type=disc>
<li>OP_READONLY : 打开链接使用只读状态。
<li>OP_ANONYMOUS : 匿名读取 NNTP 服务器，不使用 .newsrc 文件。
<li>OP_HALFOPEN : 只与 IMAP 或 NNTP 服务器链接，不打开邮箱。
<li>CL_EXPUNGE : 关闭链接时自动清除邮箱中的信件。
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下例分别为打开&nbsp;IMAP、POP3、NNTP&nbsp;的部份参考范例<br><br><font color="#0000BB">&lt;?php<br>$mbox&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_open</font><font color="#007700">(</font><font color="#DD0000">"{localhost:143}INBOX"</font><font color="#007700">,</font><font color="#DD0000">"user_id"</font><font color="#007700">,</font><font color="#DD0000">"password"</font><font color="#007700">);<br>&nbsp;</font><font color="#0000BB">?/font><font color="#007700">}</font><font color="#0000BB">启与&nbsp;IMAP&nbsp;服务器链接，IMAP&nbsp;的埠&nbsp;</font><font color="#007700">(</font><font color="#0000BB">port</font><font color="#007700">)&nbsp;</font><font color="#0000BB">通?/font><font color="#007700">`</font><font color="#0000BB">为&nbsp;143。<br>$mbox&nbsp;=&nbsp;imap_open("</font><font color="#007700">{</font><font color="#0000BB">localhost/pop3:110</font><font color="#007700">}</font><font color="#0000BB">INBOX","user_id","password");<br></font><font color="#007700">\\</font><font color="#0000BB">&nbsp;?/font><font color="#007700">}</font><font color="#0000BB">启与&nbsp;POP3&nbsp;服务器链接，POP3&nbsp;的埠值为&nbsp;110。<br>$nntp&nbsp;=&nbsp;imap_open("</font><font color="#007700">{</font><font color="#0000BB">localhost/nntp:119</font><font color="#007700">}</font><font color="#0000BB">comp.test","","");<br></font><font color="#007700">\\</font><font color="#0000BB">&nbsp;?/font><font color="#007700">}</font><font color="#0000BB">启与&nbsp;NNTP&nbsp;服务器链接，NNTP&nbsp;的埠为&nbsp;119。<br>?&gt;</font>
</font>
<p><hr size=1><br><p>
</font></font></font></font></td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_num_recent.php" alt="function.php?imap_num_recent">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-imap_ping.php" alt="function.php?imap_ping">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
