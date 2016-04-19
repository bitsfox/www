<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:imap_sort()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:imap_sort()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP 电子邮件系统函数库</a></div><br><h1><font color=0000bb>imap_sort</font></h1><p>
将信件标头排序。<p>
<font color=ff8000>语法:</font> <b>array imap_sort(int imap_stream, int criteria, int reverse, int [options]);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将信件标头排序。参数 imap_stream 为 IMAP 的代号。参数 criteria 的意义见下表，并只能是下表的其中一项<p>

<table border=1>
<tr><th>排序方法</th><th>说明</th></tr>
<tr><td>SORTDATE</td><td>依发信日期排序</td></tr>
<tr><td>SORTARRIVAL</td><td>依抵达日期排序</td></tr>
<tr><td>SORTFROM</td><td>依寄件人排序</td></tr>
<tr><td>SORTSUBJECT</td><td>依主题排序</td></tr>
<tr><td>SORTTO</td><td>依收件人排序</td></tr>
<tr><td>SORTCC</td><td>依副本寄送处排序</td></tr>
<tr><td>SORTSIZE</td><td>依信件大小排序</td></tr>
</table><p>

参数 reverse 值为 0 时表由小到大排序，若值为 1 表由大到小排序。参数 options 可省略，有下列的值: SE_UID 与 SE_NOPREFETCH。
<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_clearflag_full.php" alt="function.php?imap_clearflag_full">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-imap_fetchheader.php" alt="function.php?imap_fetchheader">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
