<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ldap_modify()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ldap_modify()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP Ŀ¼Э�麯����</a></div><br><h1><font color=0000bb>ldap_modify</font></h1><p>
�ı� LDAP ��¼�����ԡ�<p>
<font color=ff8000>�﷨:</font> <b>boolean ldap_modify(int handle, string dn, array entry);</b><p>
<font color=ff8000>����ֵ:</font> ����ֵ<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�����������ı� LDAP ��������Ŀǰ������¼�ϵ����ԡ����� handle Ϊ�� LDAP �Ĵ��š����� dn ΪҪ������Ŀ�ľ��� dn �ַ��������� entry Ϊ���飬Ϊ�������е����ԣ��������������¼���Ե������Ϣ�����޴����򷵻� true ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����Ϊ&nbsp;nickt@powys.gov.uk&nbsp;�����Ƭ��&nbsp;(23-Apr-1999)<br><br><font color="#0000BB">&lt;?php<br>$newinfo</font><font color="#007700">[</font><font color="#0000BB">mail</font><font color="#007700">]=</font><font color="#DD0000">"nick@county.gov.uk"</font><font color="#007700">;<br></font><font color="#0000BB">ldap_modify</font><font color="#007700">(</font><font color="#0000BB">$valid_ldaplink</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$valid_dn</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$newinfo</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-ldap_mod_add.php" alt="function.php?ldap_mod_add">ldap_mod_add()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_list.php" alt="function.php?ldap_list">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ldap_next_attribute.php" alt="function.php?ldap_next_attribute">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
