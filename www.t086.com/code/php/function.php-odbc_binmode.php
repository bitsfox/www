<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:odbc_binmode()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:odbc_binmode()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-37.php" alt="group.php?37">ODBC 数据库链接函数库</a></div><br><h1><font color=0000bb>odbc_binmode</font></h1><p>
配置二进位资料处理方式。<p>
<font color=ff8000>语法:</font> <b>int odbc_binmode(int result_id, int mode);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来配置二进位资料返回时的处理方式。受到本函数影响的资料类型有 BINARY、VARBINARY 及 LONGVARBINARY。参数 result_id 为返回的 ID 值，若设为 0，则程序将配置一个新的 ID 值。参数 mode 为配置的二进位处理方式，有下列的值<p>

<ul type=disc>
<li>ODBC_BINMODE_PASSTHRU  返回二进位资料
<li>ODBC_BINMODE_RETURN    转成十六进位返回
<li>ODBC_BINMODE_CONVERT   转成字符串资料返回
</ul><p>

注意:  若使用 <a href="function.php-odbc_fetch_into.php" alt="function.php?odbc_fetch_into">odbc_fetch_into()</a>，ODBC_BINMODE_PASSTHRU 会导至返回字符串值都是空的 (empty)。而返回资料最大治募默认大小为 4096 位组，若要返回更多的资料需使用 <a href="function.php-odbc_longreadlen.php" alt="function.php?odbc_longreadlen">odbc_longreadlen()</a>。
<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-odbc_fetch_into.php" alt="function.php?odbc_fetch_into">odbc_fetch_into()</a> &nbsp;<a href="function.php-odbc_longreadlen.php" alt="function.php?odbc_longreadlen">odbc_longreadlen()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-odbc_autocommit.php" alt="function.php?odbc_autocommit">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-odbc_close.php" alt="function.php?odbc_close">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
