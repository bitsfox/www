<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:sybase_fetch_array()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:sybase_fetch_array()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-34.php" alt="group.php?34">Sybase ���ݿ⺯����</a></div><br><h1><font color=0000bb>sybase_fetch_array</font></h1><p>
�����������ϡ�<p>
<font color=ff8000>�﷨:</font> <b>array sybase_fetch_array(int result);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������������ѯ��� result ����������С��� result û�����ϣ��򷵻� false ֵ��������������˵�� <a href="function.php-sybase_fetch_row.php" alt="function.php?sybase_fetch_row">sybase_fetch_row()</a> �ļ�ǿ�����������Խ������м�����������������֮�⣬�����Խ������������������С�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����&nbsp;joey@samaritan.com&nbsp;(22-Feb-1999)&nbsp;�����������<br><br><font color="#0000BB">&lt;?php<br>$q&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">sybase_query</font><font color="#007700">(</font><font color="#DD0000">"SELECT&nbsp;COUNT(DISTINCT&nbsp;OPPORTUNITY_ID)&nbsp;FROM&nbsp;M_OPP_INTERESTS&nbsp;WHERE&nbsp;INTEREST_ID&nbsp;=&nbsp;$i_id"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$db</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">$op_by_int&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">sybase_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$q</font><font color="#007700">))&nbsp;{<br>while&nbsp;(list(</font><font color="#0000BB">$k</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$v</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$op_by_int</font><font color="#007700">))&nbsp;{<br>echo&nbsp;</font><font color="#DD0000">"</font><font color="#007700">\$</font><font color="#DD0000">op</font><font color="#007700">[</font><font color="#DD0000">$k</font><font color="#007700">]</font><font color="#DD0000">&nbsp;=&gt;&nbsp;$v</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font><br>������������<br>$op[0]&nbsp;=&gt;&nbsp;2164<br>$op[computed]&nbsp;=&gt;&nbsp;2164</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-sybase_data_seek.php" alt="function.php?sybase_data_seek">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-sybase_fetch_field.php" alt="function.php?sybase_fetch_field">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
