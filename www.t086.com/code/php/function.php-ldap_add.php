<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ldap_add()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ldap_add()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP Ŀ¼Э�麯����</a></div><br><h1><font color=0000bb>ldap_add</font></h1><p>
���� LDAP ��¼����Ŀ��<p>
<font color=ff8000>�﷨:</font> <b>boolean ldap_add(int handle, string dn, array entry);</b><p>
<font color=ff8000>����ֵ:</font> ����ֵ<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>���������������µ���Ŀ�� LDAP ��¼֮�С����� handle Ϊ�� LDAP �Ĵ��š����� dn ΪҪ������Ŀ�ľ��� dn �ַ��������� entry Ϊ���飬Ϊ�������е���Ŀ���������������Ŀ�������Ϣ�����޴����򷵻� true ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$ds</font><font color="#007700">=</font><font color="#0000BB">ldap_connect</font><font color="#007700">(</font><font color="#DD0000">"localhost"</font><font color="#007700">);&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;����&nbsp;LDAP&nbsp;������<br></font><font color="#007700">if&nbsp;(</font><font color="#0000BB">$ds</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;ϵסǡ����&nbsp;dn<br>&nbsp;&nbsp;</font><font color="#0000BB">$r</font><font color="#007700">=</font><font color="#0000BB">ldap_bind</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,</font><font color="#DD0000">"cn=root,&nbsp;o=A2Z&nbsp;Company,&nbsp;c=TW"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"secret"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;Ԥ��׼��������Ŀ������<br>&nbsp;&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"cn"</font><font color="#007700">]=</font><font color="#DD0000">"Wilson&nbsp;Peng"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"sn"</font><font color="#007700">]=</font><font color="#DD0000">"Peng"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"mail"</font><font color="#007700">]=</font><font color="#DD0000">"wilson@wilson.gs"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"objectclass"</font><font color="#007700">]=</font><font color="#DD0000">"person"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��������Ŀ<br>&nbsp;&nbsp;</font><font color="#0000BB">$r</font><font color="#007700">=</font><font color="#0000BB">ldap_add</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"cn=Wilson&nbsp;Peng,&nbsp;o=A2Z&nbsp;Company,&nbsp;c=TW"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ldap_close</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">);<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"��Ǹ���޷�����&nbsp;LDAP&nbsp;��������"</font><font color="#007700">;&nbsp;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ibase_timefmt.php" alt="function.php?ibase_timefmt">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ldap_mod_add.php" alt="function.php?ldap_mod_add">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
