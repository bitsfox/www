<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:mail()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mail()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-26.php" alt="group.php?26">电子邮件函数库</a></div><br><h1><font color=0000bb>mail</font></h1><p>
寄出电子邮件。<p>
<font color=ff8000>语法:</font> <b>boolean mail(string to, string subject, string message, string [additional_headers]);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数寄出电子邮件到指定的邮件地址 to，subject 表示主题，message 为信件内容。额外的选项 additional_headers 可省略，表示其它的邮件文件头。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$message</font><font color="#007700">=</font><font color="#DD0000">"abcdefghijklmnopqrstuvwxyz"</font><font color="#007700">;<br></font><font color="#0000BB">mail</font><font color="#007700">(</font><font color="#DD0000">"php@wilson.gs"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"没有主题"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$message</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"From:&nbsp;someone@wahaha.org.tw\nReply-To:&nbsp;reply@wahaha.org.tw\nX-Mailer:&nbsp;PHP/"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">phpversion</font><font color="#007700">());<br></font><font color="#0000BB">?&gt;</font>&nbsp;<br></font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_unbind.php" alt="function.php?ldap_unbind">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-Abs.php" alt="function.php?Abs">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
