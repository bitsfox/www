<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:imap_search()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:imap_search()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP 电子邮件系统函数库</a></div><br><h1><font color=0000bb>imap_search</font></h1><p>
搜寻指定标准的信件。<p>
<font color=ff8000>语法:</font> <b>array imap_search(int imap_stream, string criteria, int flags);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函用来搜寻合乎指定条件的信件。参数 imap_stream 为 IMAP 的代号。参数 criteria 为指定的条件，各字段以空格 (space) 分开，条件见下表。参数 flags 为 SE_UID。<p>

<table border=1>
<tr><th>条件</th><th>说明</th></tr>
<tr><td>ALL</td><td>返回所有合乎标准的信件</td></tr>
<tr><td>ANSWERED</td><td>信件有配置 \\ANSWERED 标志者</td></tr>
<tr><td>BCC "字符串"</td><td>Bcc 栏中有指定 "字符串" 的信件</td></tr>
<tr><td>BEFORE "日期"</td><td>指定 "日期" 以前的信件</td></tr>
<tr><td>BODY "字符串"</td><td>内文字段中有指定 "字符串" 的信件</td></tr>
<tr><td>CC "字符串"</td><td>Cc 栏中有指定 "字符串" 的信件</td></tr>
<tr><td>DELETED</td><td>合乎已删除的信件</td></tr>
<tr><td>FLAGGED</td><td>信件有配置 \\FLAGGED 标志者</td></tr>
<tr><td>FROM "字符串"</td><td>From 栏中有指定 "字符串" 的信件</td></tr>
<tr><td>KEYWORD "字符串"</td><td>关键字为指定 "字符串" 者</td></tr>
<tr><td>NEW</td><td>新的信件</td></tr>
<tr><td>OLD</td><td>旧的信件</td></tr>
<tr><td>ON "日期"</td><td>指定 "日期" 的信件</td></tr>
<tr><td>RECENT</td><td>信件有配置 \\RECENT 标志者</td></tr>
<tr><td>SEEN</td><td>信件有配置 \\SEEN 标志者</td></tr>
<tr><td>SINCE "日期"</td><td>指定 "日期" 之后的信件</td></tr>
<tr><td>SUBJECT "字符串"</td><td>Subject 栏中有指定 "字符串" 的信件</td></tr>
<tr><td>TEXT "字符串"</td><td>Text 栏中有指定 "字符串" 的信件</td></tr>
<tr><td>TO "字符串"</td><td>To 栏中有指定 "字符串" 的信件</td></tr>
<tr><td>UNANSWERED</td><td>未回应的信件</td></tr>
<tr><td>UNDELETED</td><td>未删除的信件</td></tr>
<tr><td>UNFLAGGED</td><td>未配置标志的信件</td></tr>
<tr><td>UNKEYWORD "字符串"</td><td>未配置关键 "字符串" 的信件</td></tr>
<tr><td>UNSEEN</td><td>未读取的信件</td></tr>
</table><p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_msgno.php" alt="function.php?imap_msgno">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-imap_last_error.php" alt="function.php?imap_last_error">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
