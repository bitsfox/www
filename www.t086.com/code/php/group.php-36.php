<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - NIS 函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>NIS 函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 8 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>NIS 的全名为 Network Information System，另外一个说法就是 YP 
              (Yellow Pages)。NIS 或 YP 可以让许多不同的 UNIX 机器拥有相同的系统信息，例如相同的用户帐号密码，使系统管理人员及用户都容易在不同的机器间穿梭，不可避免的，会有安全上的缺点，不过安全就不是这儿所讨论的了。而关于 
              NIS 方面的中英文书籍在市面上都可以找到，或者也可以参考 <a href="/to.asp?url=http://www.desy.de/%7Esieversm/ypdoku/ypdoku/ypdoku.html" tppabs="/to.asp?url=http://www.desy.de/~sieversm/ypdoku/ypdoku/ypdoku.html">http://www.desy.de/~sieversm/ypdoku/ypdoku/ypdoku.html</a>。
<p>

欲使用 NIS 函数库，记得要在编译 PHP 时将 YP 的选项打开，即加上 --with-yp 选项。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-yp_get_default_domain.php" alt="function.php?yp_get_default_domain">yp_get_default_domain</a>:</td><td valign=top>取得机器的 Domain。</td></tr>
<tr><td align=right valign=top><a href="function.php-yp_order.php" alt="function.php?yp_order">yp_order</a>:</td><td valign=top>返回 map 的序数。</td></tr>
<tr><td align=right valign=top><a href="function.php-yp_master.php" alt="function.php?yp_master">yp_master</a>:</td><td valign=top>取得 NIS 的 Master。</td></tr>
<tr><td align=right valign=top><a href="function.php-yp_match.php" alt="function.php?yp_match">yp_match</a>:</td><td valign=top>取得指定资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-yp_first.php" alt="function.php?yp_first">yp_first</a>:</td><td valign=top>返回 map 上第一笔符合的资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-yp_next.php" alt="function.php?yp_next">yp_next</a>:</td><td valign=top>指定 map 的下笔资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-yp_errno.php" alt="function.php?yp_errno">yp_errno</a>:</td><td valign=top>取得先前 YP 操作的错误码。</td></tr>
<tr><td align=right valign=top><a href="function.php-yp_err_string.php" alt="function.php?yp_err_string">yp_err_string</a>:</td><td valign=top>取得先前 YP 操作的错误字符串。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-35.php" alt="group.php?35">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-37.php" alt="group.php?37">下一页</a> 
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
