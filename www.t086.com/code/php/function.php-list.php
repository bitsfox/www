<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:list()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:list()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">���鴦������</a></div><br><h1><font color=0000bb>list</font></h1><p>
�г�������Ԫ�ص�ֵ��<p>
<font color=ff8000>�﷨:</font> <b>void list(...);</b><p>
<font color=ff8000>����ֵ:</font> ��<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�� <a href="function.php-array.php" alt="function.php?array">array</a> ����һ��������������ĺ�����list() ���������г����������е���ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����ķ����г���&nbsp;MySQL&nbsp;���ݿⷵ�ص��������ϡ�<br>&lt;table&gt;<br>&nbsp;&lt;tr&gt;<br>&nbsp;&nbsp;&lt;th&gt;Ա������&lt;/th&gt;<br>&nbsp;&nbsp;&lt;th&gt;н��&lt;/th&gt;<br>&nbsp;&lt;/tr&gt;<br><font color="#0000BB">&lt;?php<br><br>$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"SELECT&nbsp;id,&nbsp;name,&nbsp;salary&nbsp;FROM&nbsp;employees"</font><font color="#007700">);<br>while&nbsp;(list(</font><font color="#0000BB">$id</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$name</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$salary</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">mysql_fetch_row</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;print(</font><font color="#DD0000">"&nbsp;&lt;tr&gt;\n"</font><font color="#007700">.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"&nbsp;&nbsp;&lt;td&gt;&lt;a&nbsp;href=</font><font color="#007700">\"</font><font color="#DD0000">info.php3?id=$id</font><font color="#007700">\"</font><font color="#DD0000">&gt;$name&lt;/a&gt;&lt;/td&gt;</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"&nbsp;&nbsp;&lt;td&gt;$salary&lt;/td&gt;</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"&nbsp;&lt;/tr&gt;\n"</font><font color="#007700">);<br>}<br><br></font><font color="#0000BB">?&gt;</font>&lt;/table&gt;<br></font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-each.php" alt="function.php?each">each()</a> &nbsp;<a href="function.php-array.php" alt="function.php?array">array()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ksort.php" alt="function.php?ksort">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-next.php" alt="function.php?next">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
