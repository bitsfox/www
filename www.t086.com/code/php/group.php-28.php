<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - mcrypt ���뺯����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>mcrypt ���뺯����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 8 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>Ҫʹ�ñ�������Ҫ��׼�� mcrypt ���򣬿��Ե� <a href="/to.asp?url=ftp://argeas.cs-net.gr/pub/unix/mcrypt" tppabs="/to.asp?url=ftp://argeas.cs-net.gr/pub/unix/mcrypt">ftp://argeas.cs-net.gr/pub/unix/mcrypt</a> 
              ����������� libmcrypt-x.x.tar.gz��ͬʱ�ڱ��� PHP ����ʱ��Ҫ���� --with-mcrypt ��ѡ���ʹ����������˳��������
<p>

�������ṩ�ı��뷽ʽ�� DES��TripleDES��Blowfish (Ĭ��ֵ)��3-WAY��SAFER-SK64��SAFER-SK128��TWOFISH��TEA��RC2 ��ʹ�� CBC, OFB, CFB, ECB ��Ϊ��������� GOST�����⻹�� RC6 �� IDEA �ȷ���ѵı��뷽ʽ����������ʾΪ�Ѷ�������룺<p>

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
<li>MCRYPT_TWOFISH (mcrypt 2.x ǰ�İ汾��)
<li>MCRYPT_TWOFISH128 (mcrypt 2.x ��İ汾��)
<li>MCRYPT_TWOFISH192
<li>MCRYPT_TWOFISH256
<li>MCRYPT_RC6
<li>MCRYPT_IDEA
</ul><p>

����������� (cipher) ���棬������֧�� CBC��OFB��CFB �� ECB �������������������������������ļ��������£�����ϸ����Ϣ��ο� Schneier �������� Applied Cryptography (ISBN: 0-471-11709-9)��<p>

<ol type=1>
<li>ECB (electronic codebook): �ʺ���������ϣ�����ʹ���������Կ�����������������ʱ��ʹ�� ECB �ϲ��ʺϡ�
<li>CBC (cipher block chaining): �ʺ��ļ��ļ��ܣ���ȫ�Խ� ECB �á�
<li>CFB (cipher feedback): �ʺ϶�λ���������е�ĳ�ζ���λ������ (single bytes) ���ܡ�
<li>OFB (output feedback): �� CFB ���ݣ������ʺ����޷����ܴ��󲨼���Ӧ���ϡ�
</ol><p>

Ŀǰ PHP ���޷��Ե�λ (bit) ����ֵ�����ܽ��ܵĲ��裬Ŀǰֻ�ʺ϶��ַ��������봦��<p>

��ʹ�� CFB �� OFB ����ģʽʱ������Ҫ������ʼ�� (Initialization vector, IV)��CBC ģʽҲ����ʹ��������ʼ����������ʼ����ֵ�ڼӽ���ʱ�����Ƕ�һ�޶��ģ�ͬʱҲҪ������ͬ�������ܺ���������ʱ��Ҳ��ͬʱ�������Կ�� (��������ļ���)������Ҳ���Խ�������ʼ����ֵ����ܺ������һ�������
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-mcrypt_get_cipher_name.php" alt="function.php?mcrypt_get_cipher_name">mcrypt_get_cipher_name</a>:</td><td valign=top>ȡ�ñ��뷽ʽ�����ơ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_get_block_size.php" alt="function.php?mcrypt_get_block_size">mcrypt_get_block_size</a>:</td><td valign=top>ȡ�ñ��뷽ʽ�������С��</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_get_key_size.php" alt="function.php?mcrypt_get_key_size">mcrypt_get_key_size</a>:</td><td valign=top>ȡ�ñ���Կ�״�С��</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_create_iv.php" alt="function.php?mcrypt_create_iv">mcrypt_create_iv</a>:</td><td valign=top>�����Դ��������ʼ����</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_cbc.php" alt="function.php?mcrypt_cbc">mcrypt_cbc</a>:</td><td valign=top>ʹ�� CBC �����ϼ�/���ܡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_cfb.php" alt="function.php?mcrypt_cfb">mcrypt_cfb</a>:</td><td valign=top>ʹ�� CFB �����ϼ�/���ܡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_ecb.php" alt="function.php?mcrypt_ecb">mcrypt_ecb</a>:</td><td valign=top>ʹ�� ECB �����ϼ�/���ܡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mcrypt_ofb.php" alt="function.php?mcrypt_ofb">mcrypt_ofb</a>:</td><td valign=top>ʹ�� OFB �����ϼ�/���ܡ�</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-27.php" alt="group.php?27">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-29.php" alt="group.php?29">��һҳ</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
