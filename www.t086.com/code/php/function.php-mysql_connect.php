<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:mysql_connect()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:mysql_connect()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-33.php" alt="group.php?33">MySQL ���ݿ⺯����</a></div><br><h1><font color=0000bb>mysql_connect</font></h1><p>
�� MySQL ���������ӡ�<p>
<font color=ff8000>�﷨:</font> <b>int mysql_connect(string [hostname] [:port], string [username], string [password]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������������ MySQL �����������ӡ��������еĲ�������ʡ�ԡ���ʹ�ñ�����ȴ�����κβ���ʱ������ hostname ��Ĭ��ֵΪ localhost������ username ��Ĭ��ֵΪ PHP ִ���г̵�ӵ���ߡ����� password ��Ϊ���ַ��� (��û������)�������� hostname ������Լ�ð���벺�ţ�����ʹ���Ǹ����� MySQL ���ӡ���Ȼ��ʹ�����ݿ�ʱ�����ʹ�� <a href="function.php-mysql_close.php" alt="function.php?mysql_close">mysql_close()</a> �����ӹص����Խ�ʡ��Դ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����һλδ���������ṩ�ķ���&nbsp;(18-Feb-1999)
<br><font color="#0000BB">&lt;?php
<br>$dbh&nbsp;</font><font color="#007700">=&nbsp;&nbsp;</font><font color="#0000BB">mysql_connect</font><font color="#007700">(</font><font color="#DD0000">'localhost:3306'</font><font color="#007700">,</font><font color="#DD0000">'mcclain'</font><font color="#007700">,</font><font color="#DD0000">'standard'</font><font color="#007700">);
<br></font><font color="#0000BB">mysql_select_db</font><font color="#007700">(</font><font color="#DD0000">'admreqs'</font><font color="#007700">);
<br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"insert&nbsp;into&nbsp;requests(date,&nbsp;request,&nbsp;email,&nbsp;priority,status)&nbsp;values&nbsp;(NOW(),'$description',&nbsp;'$email',&nbsp;'$priority',&nbsp;'NEW')"</font><font color="#007700">;
<br></font><font color="#0000BB">$res&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_query</font><font color="#007700">(</font><font color="#0000BB">$query</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$dbh</font><font color="#007700">);
<br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"select&nbsp;max(id)&nbsp;from&nbsp;requests"</font><font color="#007700">;
<br></font><font color="#0000BB">$res&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_query</font><font color="#007700">(</font><font color="#0000BB">$query</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$dbh</font><font color="#007700">);
<br></font><font color="#0000BB">$err&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_error</font><font color="#007700">();
<br>if(</font><font color="#0000BB">$err</font><font color="#007700">){
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"����������֪ͨ&lt;a&nbsp;href=mailto:webmaster@my.site&gt;վ��&lt;/a&gt;"</font><font color="#007700">;
<br>}
<br>&nbsp;&nbsp;</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_row</font><font color="#007700">(</font><font color="#0000BB">$res</font><font color="#007700">);
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"δ����ʹ�õĺ���Ϊ:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];
<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-mysql_close.php" alt="function.php?mysql_close">mysql_close()</a> &nbsp;<a href="function.php-mysql_pconnect.php" alt="function.php?mysql_pconnect">mysql_pconnect()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mysql_close.php" alt="function.php?mysql_close">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-mysql_create_db.php" alt="function.php?mysql_create_db">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
