<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:checkdnsrr()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:checkdnsrr()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr>
      <td height="502"> 
        <div align=right><a href="group.php-35.php" alt="group.php?35">网络函数库</a></div><br><h1><font color=0000bb>checkdnsrr</font></h1><p>
检查指定网址的 DNS 记录。<p>
<font color=ff8000>语法:</font> <b>int checkdnsrr(string host, string [type]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来检查 DNS 的字段纪录。指定的参数 host 可以是网络位址 (IP Address)，也可以用机器名称 (Domain Name)。参数 type 可以省略，内定值为 MX。而参数 type 的值可为以下的其中之一：A、MX、NS、SOA、PTR、CNAME 或 ANY。若找到了指定网址的 DNS 字段，返回 true；若未找到指定的 DNS 字段或是有错误均会返回 false。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-gethostbyaddr.php" alt="function.php?gethostbyaddr">gethostbyaddr()</a> &nbsp;<a href="function.php-gethostbyname.php" alt="function.php?gethostbyname">gethostbyname()</a> &nbsp;<a href="function.php-gethostbynamel.php" alt="function.php?gethostbynamel">gethostbynamel()</a> &nbsp;<a href="function.php-getmxrr.php" alt="function.php?getmxrr">getmxrr()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr> 
      <td height="16">[ <a href="function.php-gethostbynamel.php" alt="function.php?gethostbynamel">上一页</a> 
      </td>
      <td height="16"> <a href="function.php-getmxrr.php" alt="function.php?getmxrr">下一页</a> 
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
