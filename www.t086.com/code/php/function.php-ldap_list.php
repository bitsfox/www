<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ldap_list()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ldap_list()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP Ŀ¼Э�麯����</a></div><br><h1><font color=0000bb>ldap_list</font></h1><p>
�г����<p>
<font color=ff8000>�﷨:</font> <b>int ldap_list(int handle, string base_dn, string filter, array [attributes]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table>
        <p>�����������г����� (One Level) �����ϣ�ʵ����������ldap_searchldap_search()��ֻ�ǽ�ֵ��ĳ� LDAP_SCOPE_ONELEVEL�������������е��� 
          DOS �� dir ���� UNIX �� ls������ handle Ϊ�� LDAP �Ĵ��š����� base_dn Ϊ������� dn ����ֵ��������� 
          o �� c ���ֶΡ����� filter Ϊ���������������﷨������ Netscape վ����һ�� dirsdkpg.pdf �ļ������е� 
          Search Syntax һ��������ϸ��˵�������� attributes ��ʡ�ԣ��������ø�ϸ���г����ԡ� 
        <p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
�������ΪƬ�γ���<br><br><font color="#0000BB">&lt;?php<br>$basedn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"o=SuperPHP&nbsp;Company,&nbsp;c=TW"</font><font color="#007700">;<br></font><font color="#0000BB">$justthese&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"ou"</font><font color="#007700">);<br></font><font color="#0000BB">$sr</font><font color="#007700">=</font><font color="#0000BB">ldap_list</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$basedn</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"ou=*"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$justthese</font><font color="#007700">);<br></font><font color="#0000BB">$info&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ldap_get_entries</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$sr</font><font color="#007700">);<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">];&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#DD0000">"ou"</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-ldap_read.php" alt="function.php?ldap_read">ldap_read()</a> &nbsp;<a href="function.php-ldap_search.php" alt="function.php?ldap_search">ldap_search()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_get_values.php" alt="function.php?ldap_get_values">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ldap_modify.php" alt="function.php?ldap_modify">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
