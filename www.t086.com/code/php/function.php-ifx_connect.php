<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ifx_connect()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ifx_connect()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix ���ݿ⺯����</a></div><br><h1><font color=0000bb>ifx_connect</font></h1><p>
�� Informix ���������ӡ�<p>
<font color=ff8000>�﷨:</font> <b>int ifx_connect(string [database], string [userid], string [password]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������������ Informix �����������ӡ��������еĲ�������ʡ�ԡ���ȫ��������ʡ��ʱ��ʹ��ϵͳ�� php3.ini ���� php.ini (�� PHP �汾����) �� ifx.default_host ָ���Ļ��������ǻ������� $INFORMIXSERVER��ifx.default_user Ϊ�û��ʺţ�ifx.default_password Ϊ�û����롣������ database��userid �� password �ֱ�Ϊ���ݿ�����֡������ʺż�ʹ�����롣��Ȼ����ʹ�ñ�����֮�󣬾���ʹ�� <a href="function.php-ifx_close.php" alt="function.php?ifx_close">ifx_close()</a> �ر� Informix ���ݿ�ȽϺá����ӳɹ��򷵻����Ӵ��룬ʧ���򷵻� false ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����ֻ���������ݿ⣬ʲô�¶�û����<br><br><font color="#0000BB">&lt;?php<br>$conn_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_pconnect</font><font color="#007700">(</font><font color="#DD0000">"mydb@ol_srv1"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"imyself"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"mypassword"</font><font color="#007700">);<br></font><font color="#0000BB">ifx_close</font><font color="#007700">(</font><font color="#0000BB">$conn_id</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> &nbsp;<a href="function.php-ifx_close.php" alt="function.php?ifx_close">ifx_close()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-set_time_limit.php" alt="function.php?set_time_limit">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">��һҳ</a> 
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
