<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:error_log()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:error_log()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-22.php" alt="group.php?22">PHP ѡ������Ϣ������</a></div><br><h1><font color=0000bb>error_log</font></h1><p>
�ͳ�һ��������Ϣ��<p>
<font color=ff8000>�﷨:</font> <b>int error_log(string message, int message_type, string [destination], string [extra_headers]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> PHP ϵͳ����<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�˺������ͳ�������Ϣ�� Web �������Ĵ��� log �ļ���TCP Port����ָ���ļ�����һ������ message ��ΪҪ�ͳ��Ĵ�����Ϣ���ڶ������� message_type Ϊ����ֵ��0 ��ʾ�͵�����ϵͳ�� log (UNIX �� syslog��Windows NT ��¼���¼���¼)��1 ��ʹ�� PHP �� <a href="function.php-Mail.php" alt="function.php?Mail">Mail()</a> ����������Ϣ��ĳ E-Mail �������ĸ����� extra_headers ����õ���2 �򽫴�����Ϣ�͵� TCP ������ʱ���������� destination ��ʾĿ�ĵ� IP �� Port��3 ����Ϣ�浽�ļ� destination �С�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����Ϊ����&nbsp;Oracle&nbsp;���ݿ��������Ĵ���<br><br><font color="#0000BB">&lt;?php<br></font><font color="#007700">if&nbsp;(!</font><font color="#0000BB">Ora_Logon</font><font color="#007700">(</font><font color="#0000BB">$username</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$password</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"Oracle&nbsp;���ݿⲻ����!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br>}<br>if&nbsp;(!(</font><font color="#0000BB">$foo&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">allocate_new_foo</font><font color="#007700">())&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"���ִ��鷳��!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"webmaster@www.mydomain.com.tw"</font><font color="#007700">);<br>}<br></font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"������!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"127.0.0.1:7000"</font><font color="#007700">);<br></font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"������!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"loghost"</font><font color="#007700">);<br></font><font color="#0000BB">error_log</font><font color="#007700">(</font><font color="#DD0000">"������!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">3</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"/var/tmp/my-errors.log"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_status.php" alt="function.php?imap_status">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-error_reporting.php" alt="function.php?error_reporting">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
