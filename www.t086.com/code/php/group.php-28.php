<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - mcrypt 编码函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>mcrypt 编码函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 8 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>要使用本函数库要先准备 mcrypt 程序，可以到 <a href="/to.asp?url=ftp://argeas.cs-net.gr/pub/unix/mcrypt" tppabs="/to.asp?url=ftp://argeas.cs-net.gr/pub/unix/mcrypt">ftp://argeas.cs-net.gr/pub/unix/mcrypt</a> 
              下载这个程序 libmcrypt-x.x.tar.gz。同时在编译 PHP 程序时需要加入 --with-mcrypt 的选项，俾使本函数库能顺利运作。
<p>

本函数提供的编码方式有 DES、TripleDES、Blowfish (默认值)、3-WAY、SAFER-SK64、SAFER-SK128、TWOFISH、TEA、RC2 及使用 CBC, OFB, CFB, ECB 作为密码检索的 GOST。此外还有 RC6 及 IDEA 等非免费的编码方式。见下面列示为已定义的密码：<p>

<ul type=disc>
<li>MCRYPT_BLOWFISH
<li>MCRYPT_DES
<li>MCRYPT_TripleDES
<li>MCRYPT_ThreeWAY
<li>MCRYPT_GOST
<li>MCRYPT_CRYPT
<li>MCRYPT_DES_COMPAT
<li>MCRYPT_SAFER64
<li>MCRYPT_SAFER128
<li>MCRYPT_CAST128
<li>MCRYPT_TEAN
<li>MCRYPT_RC2
<li>MCRYPT_TWOFISH (mcrypt 2.x 前的版本用)
<li>MCRYPT_TWOFISH128 (mcrypt 2.x 后的版本用)
<li>MCRYPT_TWOFISH192
<li>MCRYPT_TWOFISH256
<li>MCRYPT_RC6
<li>MCRYPT_IDEA
</ul><p>

在密码检索本 (cipher) 方面，本函库支持 CBC、OFB、CFB 与 ECB 四种密码检索本。这四种密码检索本的简单叙述如下，更详细的信息请参考 Schneier 所着作的 Applied Cryptography (ISBN: 0-471-11709-9)：<p>

<ol type=1>
<li>ECB (electronic codebook): 适合随机的资料，例如使用另外的密钥。若资料量少且随机时，使用 ECB 较不适合。
<li>CBC (cipher block chaining): 适合文件的加密，安全性较 ECB 好。
<li>CFB (cipher feedback): 适合对位组资料流中的某段独立位组资料 (single bytes) 加密。
<li>OFB (output feedback): 与 CFB 相容，尤其适合在无法忍受错误波及的应用上。
</ol><p>

目前 PHP 仍无法对单位 (bit) 的熵值做加密解密的步骤，目前只适合对字符串作密码处理。<p>

在使用 CFB 及 OFB 二种模式时，必须要向量初始化 (Initialization vector, IV)，CBC 模式也可以使用向量初始化。向量初始化的值在加解密时必须是独一无二的，同时也要保持相同。当加密后的资料输出时，也可同时输出密码钥匙 (例如存在文件中)；或者也可以将向量初始化的值与加密后的资料一起输出。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-mcrypt_get_cipher_name.php" alt="function.php?mcrypt_get_cipher_name">mcrypt_get_cipher_name</a>:</td><td valign=top>取得编码方式的名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_get_block_size.php" alt="function.php?mcrypt_get_block_size">mcrypt_get_block_size</a>:</td><td valign=top>取得编码方式的区块大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_get_key_size.php" alt="function.php?mcrypt_get_key_size">mcrypt_get_key_size</a>:</td><td valign=top>取得编码钥匙大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_create_iv.php" alt="function.php?mcrypt_create_iv">mcrypt_create_iv</a>:</td><td valign=top>从随机源将向量初始化。</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_cbc.php" alt="function.php?mcrypt_cbc">mcrypt_cbc</a>:</td><td valign=top>使用 CBC 将资料加/解密。</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_cfb.php" alt="function.php?mcrypt_cfb">mcrypt_cfb</a>:</td><td valign=top>使用 CFB 将资料加/解密。</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_ecb.php" alt="function.php?mcrypt_ecb">mcrypt_ecb</a>:</td><td valign=top>使用 ECB 将资料加/解密。</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_ofb.php" alt="function.php?mcrypt_ofb">mcrypt_ofb</a>:</td><td valign=top>使用 OFB 将资料加/解密。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-27.php" alt="group.php?27">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-29.php" alt="group.php?29">下一页</a> 
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
