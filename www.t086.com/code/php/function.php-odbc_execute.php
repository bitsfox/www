<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:odbc_execute()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:odbc_execute()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-37.php" alt="group.php?37">ODBC ���ݿ����Ӻ�����</a></div><br><h1><font color=0000bb>odbc_execute</font></h1><p>
ִ��Ԥ�� SQL ָ�<p>
<font color=ff8000>�﷨:</font> <b>int odbc_execute(int result_id, array [parameters_array]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������ִ��Ԥ���� 4.36.20 odbc_prepare() �� query ָ����� result_id Ϊ ODBC ���� ID ֵ������ parameters_array ͨ��ʡ�ԡ�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����&nbsp;tony.wood@revolutionltd.com&nbsp;(27-May-1999)&nbsp;����ķ���<br><br><font color="#0000BB">&lt;?php<br>$conn</font><font color="#007700">=</font><font color="#0000BB">odbc_connect</font><font color="#007700">(</font><font color="#DD0000">"mydb"</font><font color="#007700">,</font><font color="#DD0000">""</font><font color="#007700">,</font><font color="#DD0000">""</font><font color="#007700">);<br></font><font color="#0000BB">$stmt&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_prepare</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"INSERT&nbsp;INTO&nbsp;mytable&nbsp;(jor_from,&nbsp;jor_to)&nbsp;VALUES('$from',&nbsp;'$to');"&nbsp;</font><font color="#007700">);<br>if&nbsp;(!</font><font color="#0000BB">odbc_execute</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"����"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">odbc_close</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-odbc_prepare.php" alt="function.php?odbc_prepare">odbc_prepare()</a> &nbsp;<a href="function.php-odbc_exec.php" alt="function.php?odbc_exec">odbc_exec()</a> &nbsp;<a href="function.php-odbc_do.php" alt="function.php?odbc_do">odbc_do()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-odbc_exec.php" alt="function.php?odbc_exec">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-odbc_fetch_into.php" alt="function.php?odbc_fetch_into">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
