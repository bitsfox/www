<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ldap_get_attributes()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ldap_get_attributes()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP Ŀ¼Э�麯����</a></div><br><h1><font color=0000bb>ldap_get_attributes</font></h1><p>
ȡ�÷������ϵ����ԡ�<p>
<font color=ff8000>�﷨:</font> <b>array ldap_get_attributes(int handle, int result_entry_identifier);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������ȡ�� LDAP ��������Դ�����ԡ����� handle Ϊ�� LDAP �Ĵ��š����� result_entry_identifier ���� <a href="function.php-ldap_next_attribute.php" alt="function.php?ldap_next_attribute">ldap_next_attribute()</a> ���á�����ֵΪ�������ϣ�����Ԫ�ش��㿪ʼ����Ϊ���Ե�ֵ������<p>

return_value["count"] : ���Ը���<br>
return_value[0]       : ��һ������<br>
return_value[n]       : ��n+1������<br>
return_value["attribute"]["count"] : ����ֵ����<br>
return_value["attribute"][0]       : ��һ������ֵ<br>
return_value["attribute"][i]       : ��i+1������ֵ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
���淶��ΪƬ�εĳ���<br><br><font color="#0000BB">&lt;?php<br>$entry&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ldap_first_entry</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$sr</font><font color="#007700">);<br></font><font color="#0000BB">$attrs&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ldap_get_attributes</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$entry</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$attrs</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;��������������:&lt;p&gt;\n"</font><font color="#007700">;<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$attrs</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">];&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$attrs</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">].</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-ldap_first_attribute.php" alt="function.php?ldap_first_attribute">ldap_first_attribute()</a> &nbsp;<a href="function.php-ldap_next_attribute.php" alt="function.php?ldap_next_attribute">ldap_next_attribute()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_free_result.php" alt="function.php?ldap_free_result">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ldap_get_dn.php" alt="function.php?ldap_get_dn">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
