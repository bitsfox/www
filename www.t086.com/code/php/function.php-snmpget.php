<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:snmpget()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:snmpget()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-46.php" alt="group.php?46">SNMP ���ܺ�����</a></div><br><h1><font color=0000bb>snmpget</font></h1><p>
ȡ��ָ����ʶ���롣<p>
<font color=ff8000>�﷨:</font> <b>int snmpget(string hostname, string community, string object_id);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������������ȡ��ָ������ʶ����� (OID, Object Identifier)������ hostname Ϊָ���Ļ��������� community Ϊ��Ⱥ���ƣ��� public �� private �ȡ����� object_id ��Ϊ OID �࣬Ϊ MIB ��������ࡣ����ֵΪ OID ֵ����ʧ���򷵻� false��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����Ϊ���ݷ���<br><br><font color="#0000BB">&lt;?php<br>snmpget</font><font color="#007700">(</font><font color="#DD0000">"127.0.0.1"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"public"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"system.SysContact.0"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-solid_result.php" alt="function.php?solid_result">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-snmpwalk.php" alt="function.php?snmpwalk">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
