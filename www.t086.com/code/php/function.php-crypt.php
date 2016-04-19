<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:crypt()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:crypt()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>crypt</font></h1><p>
将字符串用 DES 编码加密。<p>
<font color=ff8000>语法:</font> <b>string crypt(string str, string [salt]);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 编码处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将字符串用 UNIX 的标准加密 DES 模块加密。这是单向的加密函数，无法解密。欲比对字符串，将已加密的字符串的头二个字符放在 salt 的参数中，再比对加密后的字符串。<p>
更详细的资料请参考 UNIX Manual (man) 中的 crypt。<p>
在一些较新的 UNIX 版本中，除了 DES 之外还提供了其它的加密模块，如 MD5。甚至有些系统还用 MD5 取代 DES。在 salt 参数还有一些变化，端看传给 salt 参数的字符串长度而定：<p>
<ul type=disc>
<li>CRYPT_STD_DES - 标准的 DES 编码，输入 2 字符的 salt。
<li>CRYPT_EXT_DES - 延伸的 DES 编码，输入 9 字符的 salt。
<li>CRYPT_MD5 - MD5 编码，输入 12 字符加上 $1$ 的 salt。
<li>CRYPT_BLOWFISH - 延伸的 DES 编码，输入 16 字符加上 $2$ 的 salt。
</ul><p>
此外，若不使用 salt 参数，则程序会自动产生。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-convert_cyr_string.php" alt="function.php?convert_cyr_string">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-echo.php" alt="function.php?echo">下一页</a> 
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
