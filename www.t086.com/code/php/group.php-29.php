<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - mhash 哈稀函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>mhash 哈稀函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 4 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>本函数库支持多种哈稀演算法，例如最出名的 MD5、SHA1 或 GOST，还有其它多种的哈稀演算法，列示如下：<p>

<ul type=disc>
<li>MHASH_MD5 
<li>MHASH_SHA1 
<li>MHASH_HAVAL 
<li>MHASH_RIPEMD160 
<li>MHASH_RIPEMD128 
<li>MHASH_SNEFRU 
<li>MHASH_TIGER 
<li>MHASH_GOST 
<li>MHASH_CRC32 
<li>MHASH_CRC32B 
</ul>
              <p> 欲使用本函数库要先下载 mhash-x.x.x.tar.gz，网址为 <a href="http://sasweb.de/mhash" tppabs="/to.asp?url=http://sasweb.de/mhash">http://sasweb.de/mhash</a>。当然还要编译 
                mhash 程序库，之后才能编译 PHP 程序，在编译 PHP 程序时，记得要加 --with-mhash 选项打开系统的 
                mhash 功能。
              <p>

本函数库适合用来产生检查码 (checksums)、数位代信息或者其它功能，如下例：<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$input&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"Let&nbsp;us&nbsp;meet&nbsp;at&nbsp;9&nbsp;o'&nbsp;clock&nbsp;at&nbsp;the&nbsp;secret&nbsp;place."</font><font color="#007700">;<br></font><font color="#0000BB">$hash&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mhash</font><font color="#007700">(</font><font color="#0000BB">MHASH_SHA1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$input</font><font color="#007700">);<br>print&nbsp;</font><font color="#DD0000">"哈稀值为&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">bin2hex</font><font color="#007700">(</font><font color="#0000BB">$hash</font><font color="#007700">).</font><font color="#DD0000">"\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

在浏览器看到的字符串是<p>

<code>哈稀值为 d3b85d710d8f6e4e5efd4d5e67d041f9cecedafe</code>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-mhash_get_hash_name.php" alt="function.php?mhash_get_hash_name">mhash_get_hash_name</a>:</td><td valign=top>取得哈稀演算法名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-mhash_get_block_size.php" alt="function.php?mhash_get_block_size">mhash_get_block_size</a>:</td><td valign=top>取得哈稀方式的区块大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-mhash_count.php" alt="function.php?mhash_count">mhash_count</a>:</td><td valign=top>取得哈稀 ID 的最大值。</td></tr>
<tr><td align=right valign=top><a href="function.php-mhash.php" alt="function.php?mhash">mhash</a>:</td><td valign=top>计算哈稀值。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-28.php" alt="group.php?28">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-30.php" alt="group.php?30">下一页</a> 
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
