<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:OCIDefineByName()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:OCIDefineByName()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-38.php" alt="group.php?38">Oracle 8 ���ݿ⺯����</a></div><br><h1><font color=0000bb>OCIDefineByName</font></h1><p>
�� SELECT ָ���ʹ�� PHP ������<p>
<font color=ff8000>�﷨:</font> <b>boolean OCIDefineByName(int stmt, string ColumnName, mixed &variable, int [type]);</b><p>
<font color=ff8000>����ֵ:</font> ����ֵ<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������������ָ���� PHP ������ʹ���ܹ� SQL ָ���е� SELECT ָ��ʹ�á��ڴ�Сд��������Ҫע��һ�£���Ϊ Oracle ���ݿ��е��ֶ�������ʵ���Ǵ�д�����֡����� stmt �Ǿ��� Oracle ���� (OCIParse) ����ַ���ָ�롣���� ColumnName �� Oracle ���ϱ��ϵ��ֶ����ơ����� variable ǰ��һ��Ҫ�� & ���ţ��� PHP ����λַ������ type ͨ��ʡ�ԡ���ļ��ע�������ʹ�� Oracle 8 �����е����������� LOB/ROWID/BFILE ��ʱ����Ҫ��ִ�� <a href="function.php-OCINewDescriptor.php" alt="function.php?OCINewDescriptor">OCINewDescriptor()</a> ������ִ�б������ɹ��򷵻� true ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
���������&nbsp;thies@digicol.de&nbsp;�������<br><font color="#0000BB">&lt;?php<br>$conn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">OCILogon</font><font color="#007700">(</font><font color="#DD0000">"scott"</font><font color="#007700">,</font><font color="#DD0000">"tiger"</font><font color="#007700">);<br></font><font color="#0000BB">$stmt&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">OCIParse</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,</font><font color="#DD0000">"select&nbsp;empno,&nbsp;ename&nbsp;from&nbsp;emp"</font><font color="#007700">);<br></font><font color="#FF8000">/*&nbsp;ʹ��&nbsp;OCIDefineByName&nbsp;Ҫ��ִ��&nbsp;OCIExecute&nbsp;ǰ&nbsp;*/<br></font><font color="#0000BB">OCIDefineByName</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">,</font><font color="#DD0000">"EMPNO"</font><font color="#007700">,&amp;</font><font color="#0000BB">$empno</font><font color="#007700">);<br></font><font color="#0000BB">OCIDefineByName</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">,</font><font color="#DD0000">"ENAME"</font><font color="#007700">,&amp;</font><font color="#0000BB">$ename</font><font color="#007700">);<br></font><font color="#0000BB">OCIExecute</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">OCIFetch</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"empno:"</font><font color="#007700">.</font><font color="#0000BB">$empno</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"ename:"</font><font color="#007700">.</font><font color="#0000BB">$ename</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">OCIFreeStatement</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">);<br></font><font color="#0000BB">OCILogoff</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-odbc_setoption.php" alt="function.php?odbc_setoption">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-OCIBindByName.php" alt="function.php?OCIBindByName">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
