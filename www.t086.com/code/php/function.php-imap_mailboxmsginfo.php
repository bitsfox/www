<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:imap_mailboxmsginfo()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:imap_mailboxmsginfo()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP 电子邮件系统函数库</a></div><br><h1><font color=0000bb>imap_mailboxmsginfo</font></h1><p>
取得目前邮箱的信息。<p>
<font color=ff8000>语法:</font> <b>object imap_mailboxmsginfo(int imap_stream);</b><p>
<font color=ff8000>返回值:</font> 类<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函用来取得目前使用中邮箱 (mailbox) 的相关信息。参数 imap_stream 为 IMAP 的代号。返回类包括下列的属性<p>

<table border=1>
<tr><th>类属性</th><th>代表意义说明</th></tr>
<tr><td>Date</td><td>最新邮件的日期</td></tr>
<tr><td>Driver</td><td>使用的界面</td></tr>
<tr><td>Mailbox</td><td>电子邮箱网址</td></tr>
<tr><td>Nmsgs</td><td>总邮件数目</td></tr>
<tr><td>Recent</td><td>新进邮件数目</td></tr>
<tr><td>Unread</td><td>未读邮件数目</td></tr>
<tr><td>Size</td><td>邮箱大小</td></tr>
</table><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-imap_check.php" alt="function.php?imap_check">imap_check()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_scanmailbox.php" alt="function.php?imap_scanmailbox">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-imap_rfc822_write_address.php" alt="function.php?imap_rfc822_write_address">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
