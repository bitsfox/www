<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:msql_fetch_array()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:msql_fetch_array()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-31.php" alt="group.php?31">mSQL ���ݿ⺯����</a></div><br><h1><font color=0000bb>msql_fetch_array</font></h1><p>
�����������ϡ�<p>
<font color=ff8000>�﷨:</font> <b>array msql_fetch_array(int query_identifier);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������������ѯ����ָ��������С����Խ������������� <a href="function.php-msql_fetch_row.php" alt="function.php?msql_fetch_row">msql_fetch_row()</a> �ļ�ǿ�档<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"&lt;ol&nbsp;type=A&gt;\n"</font><font color="#007700">;<br></font><font color="#0000BB">$handle&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">msql_connect</font><font color="#007700">(</font><font color="#DD0000">"localhost"</font><font color="#007700">);<br></font><font color="#0000BB">msql_selectdb</font><font color="#007700">(</font><font color="#DD0000">"userinfo"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">$dbresult</font><font color="#007700">=</font><font color="#0000BB">msql_query</font><font color="#007700">(</font><font color="#DD0000">"select&nbsp;*&nbsp;from&nbsp;info"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$handle</font><font color="#007700">);<br>while(</font><font color="#0000BB">$dbarray</font><font color="#007700">=</font><font color="#0000BB">msql_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$dbresult</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;"</font><font color="#007700">.</font><font color="#0000BB">$dbarray</font><font color="#007700">[</font><font color="#DD0000">"IDNumber"</font><font color="#007700">].</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">msql_close</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"&lt;/ol&gt;\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-msql_error.php" alt="function.php?msql_error">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-msql_fetch_field.php" alt="function.php?msql_fetch_field">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
