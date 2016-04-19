<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:getmxrr()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:getmxrr()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-35.php" alt="group.php?35">网络函数库</a></div><br><h1><font color=0000bb>getmxrr</font></h1><p>
取得指定网址 DNS 记录之 MX 字段。<p>
<font color=ff8000>语法:</font> <b>int getmxrr(string hostname, array mxhosts, array [weight]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来检查 DNS 字段纪录中的 MX 字段，也就是电子邮件服务器 Mail eXchanger 字段。若找到了指定网址 DNS 纪录的 MX 字段，返回 true；若未找到指定的 DNS MX 字段或是有错误均会返回 false。指定网址的所有 MX 字段纪录的机器都会传入数组参数 mxhosts 中。若有指定数组参数 weight，则同时返回 MX 机器的优先顺序。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-gethostbyaddr.php" alt="function.php?gethostbyaddr">gethostbyaddr()</a> &nbsp;<a href="function.php-gethostbyname.php" alt="function.php?gethostbyname">gethostbyname()</a> &nbsp;<a href="function.php-gethostbynamel.php" alt="function.php?gethostbynamel">gethostbynamel()</a> &nbsp;<a href="function.php-checkdnsrr.php" alt="function.php?checkdnsrr">checkdnsrr()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-checkdnsrr.php" alt="function.php?checkdnsrr">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-openlog.php" alt="function.php?openlog">下一页</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
