<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:imap_reopen()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:imap_reopen()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP 电子邮件系统函数库</a></div><br><h1><font color=0000bb>imap_reopen</font></h1><p>
重开 IMAP 链接。<p>
<font color=ff8000>语法:</font> <b>int imap_reopen(string imap_stream, string mailbox, string [flags]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可重新打开客户端与服务器之间的 IMAP 链接。本函数通常与 <a href="function.php-imap_ping.php" alt="function.php?imap_ping">imap_ping()</a> 函数合用。参数 mailbox 为服务器端的位置。参数 flags 可省略，有下列的值：<p>

<ul type=disc>
<li>OP_READONLY : 打开链接使用只读状态。
<li>OP_ANONYMOUS : 匿名读取 NNTP 服务器，不使用 .newsrc 文件。
<li>OP_HALFOPEN : 只与 IMAP 或 NNTP 服务器链接，不打开邮箱。
<li>CL_EXPUNGE : 关闭链接时自动清除邮箱中的信件。
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$userid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"nulluser"</font><font color="#007700">;<br></font><font color="#0000BB">$passwd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"passwd38"</font><font color="#007700">;<br></font><font color="#0000BB">$mb&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_open</font><font color="#007700">(</font><font color="#DD0000">"(imap.null.org)INBOX"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$passwd</font><font color="#007700">);<br>if&nbsp;(!</font><font color="#0000BB">imap_ping</font><font color="#007700">(</font><font color="#0000BB">$mb</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">imap_reopen</font><font color="#007700">(</font><font color="#0000BB">$mb</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$passwd</font><font color="#007700">);<br>}<br></font><font color="#0000BB">imap_close</font><font color="#007700">(</font><font color="#0000BB">$mb</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_renamemailbox.php" alt="function.php?imap_renamemailbox">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-imap_subscribe.php" alt="function.php?imap_subscribe">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
