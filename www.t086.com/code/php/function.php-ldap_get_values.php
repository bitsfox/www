<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ldap_get_values()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ldap_get_values()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP Ŀ¼Э�麯����</a></div><br><h1><font color=0000bb>ldap_get_values</font></h1><p>
ȡ��ȫ������ֵ��<p>
<font color=ff8000>�﷨:</font> <b>array ldap_get_values(int handle, int result_entry_identifier, string attribute);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������ȡ�� LDAP ��ȫ����������ֵ������ handle Ϊ�� LDAP �Ĵ��š����� attribute �� surname �� mail ���֡�����ֵΪ��������ֵ������<p>

return_value["count"] : ����ֵ����<br>
return_value[0]       : ��һ������ֵ<br>
return_value[i]       : �� i+1 ������ֵ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����ΪƬ�γ���<br><br><font color="#0000BB">&lt;?<br>$values&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ldap_get_values</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$entry</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"mail"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$values</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;�ʵ����ʼ���ַ:&nbsp;&lt;p&gt;\n"</font><font color="#007700">;<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">$values</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">];&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$values</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">].</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_get_entries.php" alt="function.php?ldap_get_entries">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ldap_list.php" alt="function.php?ldap_list">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
