<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:openlog()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:openlog()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-35.php" alt="group.php?35">���纯����</a></div><br><h1><font color=0000bb>openlog</font></h1><p>
��ϵͳ��¼��<p>
<font color=ff8000>�﷨:</font> <b>int openlog(string ident, int option, int facility);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ�뻷��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������򿪲���ϵͳ�ļ�¼���� (logger)������ ident ��ӵ���¼���ַ����С����� option ��ֵ������ LOG_PID��LOG_CONS��LOG_ODELAY��LOG_NDELAY��LOG_NOWAIT��LOG_PERROR���� Win32 ϵͳ�У�ֻ�� LOG_PID ��Ч������ facility ��ֵ����Ϊ LOG_KERN��LOG_USER��LOG_MAIL��LOG_DAEMON��LOG_AUTH��LOG_SYSLOG��LOG_LPR��LOG_NEWS��LOG_UUCP��LOG_CRON �� LOG_AUTHPRIV���� Win32 ϵͳ�ϣ�����������Ч���ֶΡ����������� UNIX ϵͳ�� openlog() ����������� Windows ϵ�еĲ���ϵͳ�У�������û����ȫ��ʵ����<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>openlog</font><font color="#007700">(</font><font color="#DD0000">"FUN"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">LOG_PID&nbsp;</font><font color="#007700">|&nbsp;</font><font color="#0000BB">LOG_CONS</font><font color="#007700">,&nbsp;</font><font color="#0000BB">LOG_USER</font><font color="#007700">);<br></font><font color="#0000BB">syslog</font><font color="#007700">(</font><font color="#0000BB">LOG_INFO</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Wa&nbsp;ha&nbsp;ha&nbsp;...."</font><font color="#007700">);<br></font><font color="#0000BB">closelog</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-syslog.php" alt="function.php?syslog">syslog()</a> &nbsp;<a href="function.php-closelog.php" alt="function.php?closelog">closelog()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-getmxrr.php" alt="function.php?getmxrr">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-syslog.php" alt="function.php?syslog">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
