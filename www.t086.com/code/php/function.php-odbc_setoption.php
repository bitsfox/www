<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:odbc_setoption()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:odbc_setoption()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-37.php" alt="group.php?37">ODBC ���ݿ����Ӻ�����</a></div><br><h1><font color=0000bb>odbc_setoption</font></h1><p>
���� ODBC ���á�<p>
<font color=ff8000>�﷨:</font> <b>int odbc_setoption(int id, int function, int option, int param);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������������� ODBC ������ֵ������ id ��һ��ָ connection_id��SQLSetConnectOption() ��Ϊ connection_id����Ϊ SQLSetStmtOption() ��Ϊ result_id������ function ֵΪ 1 �� SQLSetConnectOption()����Ϊ 2 ��Ϊ SQLSetStmtOption()������ option Ϊ���õ�ѡ����� param Ϊ����ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br></font><font color="#FF8000">//&nbsp;��һ:&nbsp;����Ϊ&nbsp;autocommit������&nbsp;odbc_autocommit($conn,&nbsp;true)&nbsp;��ͬ��<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����������ֵ&nbsp;102&nbsp;��&nbsp;SQL_AUTOCOMMIT��<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;���ĸ�����ֵ&nbsp;1&nbsp;��&nbsp;SQL_AUTOCOMMIT_ON��<br></font><font color="#0000BB">odbc_setoption&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">102</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;����:&nbsp;���ò�ѯʱ��<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����������&nbsp;0&nbsp;��&nbsp;SQL_QUERY_TIMEOUT<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;���ĸ�����Ϊ���ִ��ʱ�䣬������Ϊ&nbsp;30&nbsp;��<br></font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_prepare&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$sql</font><font color="#007700">);<br></font><font color="#0000BB">odbc_setoption&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">30</font><font color="#007700">);<br></font><font color="#0000BB">odbc_execute&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-odbc_rollback.php" alt="function.php?odbc_rollback">��һҳ</a> </td> <td> ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
