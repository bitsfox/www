<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:odbc_result_all()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:odbc_result_all()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-37.php" alt="group.php?37">ODBC ���ݿ����Ӻ�����</a></div><br><h1><font color=0000bb>odbc_result_all</font></h1><p>
���� HTML ������ϡ�<p>
<font color=ff8000>�﷨:</font> <b>int odbc_result_all(int result_id, string [format]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������������ȡ�õ�����ת�� HTML �ı�� (table) ��ʽ������ result_id Ϊ ODBC ���� ID ֵ������ format ��ʡ�ԣ�Ϊ������������ֵ������ֵΪ����������<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$conn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_connect</font><font color="#007700">(</font><font color="#DD0000">"WebDB"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">);<br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"select&nbsp;item,&nbsp;price&nbsp;"</font><font color="#007700">;<br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">.=&nbsp;</font><font color="#DD0000">"from&nbsp;userinfo"</font><font color="#007700">;<br></font><font color="#0000BB">$result_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_do</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">);<br></font><font color="#0000BB">odbc_result_all</font><font color="#007700">(</font><font color="#0000BB">$result_id</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"border=1&nbsp;width=50%"</font><font color="#007700">);<br></font><font color="#0000BB">odbc_close</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-odbc_result.php" alt="function.php?odbc_result">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-odbc_rollback.php" alt="function.php?odbc_rollback">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
