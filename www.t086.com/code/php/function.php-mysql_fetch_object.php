<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:mysql_fetch_object()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:mysql_fetch_object()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-33.php" alt="group.php?33">MySQL ���ݿ⺯����</a></div><br><h1><font color=0000bb>mysql_fetch_object</font></h1><p>
���������ϡ�<p>
<font color=ff8000>�﷨:</font> <b>object mysql_fetch_object(int result, int [result_typ]);</b><p>
<font color=ff8000>����ֵ:</font> ��<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������������ѯ��� result ��������С�ʹ�÷����� <a href="function.php-mysql_fetch_array.php" alt="function.php?mysql_fetch_array">mysql_fetch_array()</a> ������ͬ����ͬ�ĵط����ڱ�������������������������顣�� result û�����ϣ��򷵻� false ֵ��������ļ��ע��ĵط��ǣ�ȡ�ص������ϵ�����ֻ�������ֶ����������֣�������Ϊ������ԡ������ϵ����������е����� (property) ���ƶ����������֣����ֻ�ùԹ�ʹ�������ַ����������ˡ����� result_typ��һ������ֵ�������¼��ֳ��� MYSQL_ASSOC��MYSQL_NUM �� MYSQL_BOTH�������ٶȷ��棬�������Ĵ����ٶȼ����� <a href="function.php-mysql_fetch_row.php" alt="function.php?mysql_fetch_row">mysql_fetch_row()</a> �� <a href="function.php-mysql_fetch_array.php" alt="function.php?mysql_fetch_array">mysql_fetch_array()</a> ��������࣬Ҫ���ĸ��������ǿ�ʹ�õ����������<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
���������ʾ����ʹ�÷��ص��ࡣ<br><br><font color="#0000BB">&lt;?php&nbsp;<br>mysql_connect</font><font color="#007700">(</font><font color="#0000BB">$host</font><font color="#007700">,</font><font color="#0000BB">$user</font><font color="#007700">,</font><font color="#0000BB">$password</font><font color="#007700">);<br></font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_db_query</font><font color="#007700">(</font><font color="#DD0000">"MyDatabase"</font><font color="#007700">,</font><font color="#DD0000">"select&nbsp;*&nbsp;from&nbsp;test"</font><font color="#007700">);<br>while(</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_object</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">-&gt;</font><font color="#0000BB">user_id</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">-&gt;</font><font color="#0000BB">fullname</font><font color="#007700">;<br>}<br></font><font color="#0000BB">mysql_free_result</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-mysql_fetch_array.php" alt="function.php?mysql_fetch_array">mysql_fetch_array()</a> &nbsp;<a href="function.php-mysql_fetch_row.php" alt="function.php?mysql_fetch_row">mysql_fetch_row()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mysql_fetch_lengths.php" alt="function.php?mysql_fetch_lengths">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-mysql_fetch_row.php" alt="function.php?mysql_fetch_row">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
