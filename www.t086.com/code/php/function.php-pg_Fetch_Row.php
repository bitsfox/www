<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:pg_Fetch_Row()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:pg_Fetch_Row()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-42.php" alt="group.php?42">PostgreSQL ���ݿ⺯����</a></div><br><h1><font color=0000bb>pg_Fetch_Row</font></h1><p>
���ص��еĸ��ֶΡ�<p>
<font color=ff8000>�﷨:</font> <b>array pg_fetch_row(int result, int row);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������������ѯ��� result ֮���в���������С������������������������һ��������ֵ�� 0���� result û�����ϣ��򷵻� false ֵ������ row ��������<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php&nbsp;<br>$conn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_pconnect</font><font color="#007700">(</font><font color="#DD0000">""</font><font color="#007700">,</font><font color="#DD0000">""</font><font color="#007700">,</font><font color="#DD0000">""</font><font color="#007700">,</font><font color="#DD0000">""</font><font color="#007700">,</font><font color="#DD0000">"publisher"</font><font color="#007700">);<br>if&nbsp;(!</font><font color="#0000BB">$conn</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"����ʧ��\n"</font><font color="#007700">;<br>&nbsp;&nbsp;exit;<br>}<br></font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_Exec</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;authors"</font><font color="#007700">);<br>if&nbsp;(!</font><font color="#0000BB">$result</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"��ѯʧ��\n"</font><font color="#007700">;<br>&nbsp;&nbsp;exit;<br>}<br></font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_fetch_row</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"&nbsp;&lt;-&nbsp;row\n"</font><font color="#007700">;<br><br></font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_fetch_row</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"&nbsp;&lt;-&nbsp;row\n"</font><font color="#007700">;<br><br></font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_fetch_row</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"&nbsp;&lt;-&nbsp;row\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-pg_Fetch_Array.php" alt="function.php?pg_Fetch_Array">pg_Fetch_Array()</a> &nbsp;<a href="function.php-pg_Fetch_Object.php" alt="function.php?pg_Fetch_Object">pg_Fetch_Object()</a> &nbsp;<a href="function.php-pg_Result.php" alt="function.php?pg_Result">pg_Result()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-pg_Fetch_Object.php" alt="function.php?pg_Fetch_Object">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-pg_FieldIsNull.php" alt="function.php?pg_FieldIsNull">��һҳ</a>  ]</td></tr></table>
</div><p><br><br>
 
</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
