<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:crypt()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:crypt()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">�ַ�����������</a></div><br><h1><font color=0000bb>crypt</font></h1><p>
���ַ����� DES ������ܡ�<p>
<font color=ff8000>�﷨:</font> <b>string crypt(string str, string [salt]);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ���봦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>���������ַ����� UNIX �ı�׼���� DES ģ����ܡ����ǵ���ļ��ܺ������޷����ܡ����ȶ��ַ��������Ѽ��ܵ��ַ�����ͷ�����ַ����� salt �Ĳ����У��ٱȶԼ��ܺ���ַ�����<p>
����ϸ��������ο� UNIX Manual (man) �е� crypt��<p>
��һЩ���µ� UNIX �汾�У����� DES ֮�⻹�ṩ�������ļ���ģ�飬�� MD5��������Щϵͳ���� MD5 ȡ�� DES���� salt ��������һЩ�仯���˿����� salt �������ַ������ȶ�����<p>
<ul type=disc>
<li>CRYPT_STD_DES - ��׼�� DES ���룬���� 2 �ַ��� salt��
<li>CRYPT_EXT_DES - ����� DES ���룬���� 9 �ַ��� salt��
<li>CRYPT_MD5 - MD5 ���룬���� 12 �ַ����� $1$ �� salt��
<li>CRYPT_BLOWFISH - ����� DES ���룬���� 16 �ַ����� $2$ �� salt��
</ul><p>
���⣬����ʹ�� salt �������������Զ�������<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-convert_cyr_string.php" alt="function.php?convert_cyr_string">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-echo.php" alt="function.php?echo">��һҳ</a> 
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
