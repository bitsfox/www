<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:mcrypt_create_iv()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:mcrypt_create_iv()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-28.php" alt="group.php?28">mcrypt ���뺯����</a></div><br><h1><font color=0000bb>mcrypt_create_iv</font></h1><p>
�����Դ��������ʼ����<p>
<font color=ff8000>�﷨:</font> <b>string mcrypt_create_iv(int size, int source);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ���봦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������������������ʼ�� (Initialization vector, IV) ��ֵ������ size Ϊָ����������ʼ����ļ�ĳ��ȡ����� source Ϊ������ϵ���Դ����Դ������ MCRYPT_RAND (ϵͳ���������ֵ)��MCRYPT_DEV_RANDOM (UNIX ϵͳ�� /dev/random ������)��MCRYPT_DEV_URANDOM (UNIX ϵͳ�� /dev/urandom ������)����ʹ�� MCRYPT_RAND �������Դ���ǵ���ʹ�� <a href="function.php-srand.php" alt="function.php?srand">srand()</a> �����������ӡ�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$cipher&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">MCRYPT_TripleDES</font><font color="#007700">;<br></font><font color="#0000BB">$block_size&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mcrypt_get_block_size</font><font color="#007700">(</font><font color="#0000BB">$cipher</font><font color="#007700">);<br></font><font color="#0000BB">$iv&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mcrypt_create_iv</font><font color="#007700">(</font><font color="#0000BB">$block_size</font><font color="#007700">,&nbsp;</font><font color="#0000BB">MCRYPT_DEV_RANDOM</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mcrypt_get_key_size.php" alt="function.php?mcrypt_get_key_size">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-mcrypt_cbc.php" alt="function.php?mcrypt_cbc">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>