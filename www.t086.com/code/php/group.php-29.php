<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - mhash ��ϡ������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>mhash ��ϡ������</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 4 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>��������֧�ֶ��ֹ�ϡ���㷨������������� MD5��SHA1 �� GOST�������������ֵĹ�ϡ���㷨����ʾ���£�<p>

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
              <p> ��ʹ�ñ�������Ҫ������ mhash-x.x.x.tar.gz����ַΪ <a href="http://sasweb.de/mhash" tppabs="/to.asp?url=http://sasweb.de/mhash">http://sasweb.de/mhash</a>����Ȼ��Ҫ���� 
                mhash ����⣬֮����ܱ��� PHP �����ڱ��� PHP ����ʱ���ǵ�Ҫ�� --with-mhash ѡ���ϵͳ�� 
                mhash ���ܡ�
              <p>

���������ʺ�������������� (checksums)����λ����Ϣ�����������ܣ���������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$input&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"Let&nbsp;us&nbsp;meet&nbsp;at&nbsp;9&nbsp;o'&nbsp;clock&nbsp;at&nbsp;the&nbsp;secret&nbsp;place."</font><font color="#007700">;<br></font><font color="#0000BB">$hash&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mhash</font><font color="#007700">(</font><font color="#0000BB">MHASH_SHA1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$input</font><font color="#007700">);<br>print&nbsp;</font><font color="#DD0000">"��ϡֵΪ&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">bin2hex</font><font color="#007700">(</font><font color="#0000BB">$hash</font><font color="#007700">).</font><font color="#DD0000">"\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

��������������ַ�����<p>

<code>��ϡֵΪ d3b85d710d8f6e4e5efd4d5e67d041f9cecedafe</code>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-mhash_get_hash_name.php" alt="function.php?mhash_get_hash_name">mhash_get_hash_name</a>:</td><td valign=top>ȡ�ù�ϡ���㷨���ơ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mhash_get_block_size.php" alt="function.php?mhash_get_block_size">mhash_get_block_size</a>:</td><td valign=top>ȡ�ù�ϡ��ʽ�������С��</td></tr>
<tr><td align=right valign=top><a href="function.php-mhash_count.php" alt="function.php?mhash_count">mhash_count</a>:</td><td valign=top>ȡ�ù�ϡ ID �����ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-mhash.php" alt="function.php?mhash">mhash</a>:</td><td valign=top>�����ϡֵ��</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-28.php" alt="group.php?28">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-30.php" alt="group.php?30">��һҳ</a> 
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
