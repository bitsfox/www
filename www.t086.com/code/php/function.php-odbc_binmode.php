<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:odbc_binmode()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:odbc_binmode()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-37.php" alt="group.php?37">ODBC ���ݿ����Ӻ�����</a></div><br><h1><font color=0000bb>odbc_binmode</font></h1><p>
���ö���λ���ϴ���ʽ��<p>
<font color=ff8000>�﷨:</font> <b>int odbc_binmode(int result_id, int mode);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������������ö���λ���Ϸ���ʱ�Ĵ���ʽ���ܵ�������Ӱ������������� BINARY��VARBINARY �� LONGVARBINARY������ result_id Ϊ���ص� ID ֵ������Ϊ 0�����������һ���µ� ID ֵ������ mode Ϊ���õĶ���λ����ʽ�������е�ֵ<p>

<ul type=disc>
<li>ODBC_BINMODE_PASSTHRU  ���ض���λ����
<li>ODBC_BINMODE_RETURN    ת��ʮ����λ����
<li>ODBC_BINMODE_CONVERT   ת���ַ������Ϸ���
</ul><p>

ע��:  ��ʹ�� <a href="function.php-odbc_fetch_into.php" alt="function.php?odbc_fetch_into">odbc_fetch_into()</a>��ODBC_BINMODE_PASSTHRU �ᵼ�������ַ���ֵ���ǿյ� (empty)�����������������ļ��Ĭ�ϴ�СΪ 4096 λ�飬��Ҫ���ظ����������ʹ�� <a href="function.php-odbc_longreadlen.php" alt="function.php?odbc_longreadlen">odbc_longreadlen()</a>��
<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-odbc_fetch_into.php" alt="function.php?odbc_fetch_into">odbc_fetch_into()</a> &nbsp;<a href="function.php-odbc_longreadlen.php" alt="function.php?odbc_longreadlen">odbc_longreadlen()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-odbc_autocommit.php" alt="function.php?odbc_autocommit">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-odbc_close.php" alt="function.php?odbc_close">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
