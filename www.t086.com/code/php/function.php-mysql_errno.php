<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:mysql_errno()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:mysql_errno()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-33.php" alt="group.php?33">MySQL ���ݿ⺯����</a></div><br><h1><font color=0000bb>mysql_errno</font></h1><p>
���ش�����Ϣ���롣<p>
<font color=ff8000>�﷨:</font> <b>int mysql_errno(int [link_identifier]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>���������Եõ� MySQL ���ݿ�������Ĵ�����롣ͨ������ PHP ��ҳ���򿪷��׶Σ���Ϊ PHP �� MySQL �ĳ����á�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>mysql_connect</font><font color="#007700">(</font><font color="#DD0000">"marliesle"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">mysql_errno</font><font color="#007700">().</font><font color="#DD0000">":&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">mysql_error</font><font color="#007700">().</font><font color="#DD0000">"&lt;BR&gt;"</font><font color="#007700">;<br></font><font color="#0000BB">mysql_select_db</font><font color="#007700">(</font><font color="#DD0000">"nonexistentdb"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">mysql_errno</font><font color="#007700">().</font><font color="#DD0000">":&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">mysql_error</font><font color="#007700">().</font><font color="#DD0000">"&lt;BR&gt;"</font><font color="#007700">;<br></font><font color="#0000BB">$conn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_query</font><font color="#007700">(</font><font color="#DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;nonexistenttable"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">mysql_errno</font><font color="#007700">().</font><font color="#DD0000">":&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">mysql_error</font><font color="#007700">().</font><font color="#DD0000">"&lt;BR&gt;"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-mysql_error.php" alt="function.php?mysql_error">mysql_error()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mysql_drop_db.php" alt="function.php?mysql_drop_db">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-mysql_error.php" alt="function.php?mysql_error">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
