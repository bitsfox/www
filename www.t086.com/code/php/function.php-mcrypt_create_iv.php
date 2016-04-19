<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:mcrypt_create_iv()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mcrypt_create_iv()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-28.php" alt="group.php?28">mcrypt 编码函数库</a></div><br><h1><font color=0000bb>mcrypt_create_iv</font></h1><p>
从随机源将向量初始化。<p>
<font color=ff8000>语法:</font> <b>string mcrypt_create_iv(int size, int source);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 编码处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来建立向量初始化 (Initialization vector, IV) 的值。参数 size 为指定的向量初始化治募长度。参数 source 为随机资料的来源，来源可以是 MCRYPT_RAND (系统产生的随机值)、MCRYPT_DEV_RANDOM (UNIX 系统中 /dev/random 的资料)、MCRYPT_DEV_URANDOM (UNIX 系统中 /dev/urandom 的资料)，若使用 MCRYPT_RAND 当做随机源，记得先使用 <a href="function.php-srand.php" alt="function.php?srand">srand()</a> 产生乱数种子。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$cipher&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">MCRYPT_TripleDES</font><font color="#007700">;<br></font><font color="#0000BB">$block_size&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mcrypt_get_block_size</font><font color="#007700">(</font><font color="#0000BB">$cipher</font><font color="#007700">);<br></font><font color="#0000BB">$iv&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mcrypt_create_iv</font><font color="#007700">(</font><font color="#0000BB">$block_size</font><font color="#007700">,&nbsp;</font><font color="#0000BB">MCRYPT_DEV_RANDOM</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mcrypt_get_key_size.php" alt="function.php?mcrypt_get_key_size">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-mcrypt_cbc.php" alt="function.php?mcrypt_cbc">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
