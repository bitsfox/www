<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>����:Ora_Logon()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>
<div align=center><table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:Ora_Logon()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-39.php" alt="39">Oracle ���ݿ⺯����</a></div><br><h1><font color=0000bb>Ora_Logon</font></h1><p>
���� Oracle �����ӡ�<p>
<font color=ff8000>�﷨:</font> <b>int ora_logon(string user, string password);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������ʹ PHP �� Oracle �������ӡ���������� SQL*Net �ṩ�� TNS name ���ӵ�Զ�˵����ݿ⣬�������£�<p><code>$conn = Ora_Logon("user@TNSNAME", "pass");</code><p>���ӳɹ��᷵������������ֵ������ false ��ʾ����������ϸ�Ĵ���������ʹ�� <a href="function.php-ora_error.php" alt="ora_error">ora_error()</a> �� <a href="function.php-ora_errorcode.php" alt="ora_errorcode">ora_errorcode()</a>������������Ĺ��ң����ݿ��п��ܻ��з� ASCII �ַ������Σ���ʱ��Ҫ�ڻ��������м��� NLS_LANG �ı��������磺����ѯ���������������� BIG5 ������ϣ��� ora_logon() ֮ǰ�������µĳ�����<p><code>putenv("NLS_LANG=american_taiwan.zht16big5");</code><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
pwalker@pwccanada.com&nbsp;(21-Sep-1998)&nbsp;�ṩ�����������<br><br>1.&nbsp;���ӵ���&nbsp;Web&nbsp;������ͬһ̨��&nbsp;Oracle&nbsp;���ݿ����<br>&nbsp;&nbsp;&nbsp;<font color="#0000BB">&lt;?<br>&nbsp;&nbsp;&nbsp;Ora_Logon</font><font color="#007700">(</font><font color="#DD0000">"system"&nbsp;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"manager"</font><font color="#007700">);&nbsp;</font><font color="#0000BB">��<br>&nbsp;&nbsp;&nbsp;Ora_Logon</font><font color="#007700">(</font><font color="#DD0000">"system/manager"&nbsp;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">?&gt;<br></font><br>2.&nbsp;���ӵ�Զ��&nbsp;Oracle&nbsp;������Ҫ����&nbsp;SQL*Net&nbsp;��&nbsp;Net8<br>&nbsp;&nbsp;&nbsp;<font color="#0000BB">&lt;?<br>&nbsp;&nbsp;&nbsp;Ora_Logon</font><font color="#007700">(</font><font color="#DD0000">"system/manager@host"&nbsp;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">?&gt;<br></font>
</font>
<p><hr size=1><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-Ora_Logoff.php" alt="Ora_Logoff">��һҳ</a> 
      </td>
      <td> <a href="default.htm" alt="PHP"> PHP �ֲ� </a>  
	  </td>
      <td> <a href="function.php-Ora_Open.php" alt="Ora_Open">��һҳ</a> 
        ]</td>
    </tr>
  </table>
</div>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
