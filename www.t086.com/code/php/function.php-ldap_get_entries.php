<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ldap_get_entries()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ldap_get_entries()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP Ŀ¼Э�麯����</a></div><br><h1><font color=0000bb>ldap_get_entries</font></h1><p>
ȡ��ȫ���������ϡ�<p>
<font color=ff8000>�﷨:</font> <b>array ldap_get_entries(int handle, int result_identifier);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������ȡ�� LDAP ��ȫ���������ϡ����� handle Ϊ�� LDAP �Ĵ��š�����ֵΪ�������ϣ�����<p>

return_value["count"] : �������ϱ���<br>
return_value[0]       : ��һ�ʷ�������<br>
return_value[i]["dn"] : �� i+1 �����ϵ� DN<br>
return_value[i]["count"] : �� i+1 �����ϵ���Ŀ<br>
return_value[i][j]       : �� i+1 �����ϵĵ� j ֵ<br>
return_value[i]["attribute"]["count"] : �� i+1 �����ϵ�������<br>
return_value[i]["attribute"][j]       : �� i+1 �����ϵĵ� j ������<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-ldap_first_entry.php" alt="function.php?ldap_first_entry">ldap_first_entry()</a> &nbsp;<a href="function.php-ldap_next_entry.php" alt="function.php?ldap_next_entry">ldap_next_entry()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_get_dn.php" alt="function.php?ldap_get_dn">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ldap_get_values.php" alt="function.php?ldap_get_values">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
