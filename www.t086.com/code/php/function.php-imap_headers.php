<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:imap_headers()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:imap_headers()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP �����ʼ�ϵͳ������</a></div><br><h1><font color=0000bb>imap_headers</font></h1><p>
��ȡȫ���ż��ı�ͷ��Ϣ��<p>
<font color=ff8000>�﷨:</font> <b>array imap_headers(int imap_stream);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������ɶ�ȡȫ���ż��ı�ͷ��Ϣ������ imap_stream Ϊ IMAP �Ĵ��š����ص�����һ��Ԫ��Ϊĳһ���ŵı�ͷ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$mb&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_open</font><font color="#007700">(</font><font color="#DD0000">"{my.imap.com.tw}INBOX"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"wilson"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"mypasswd"</font><font color="#007700">);<br></font><font color="#0000BB">$AllHeaders&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_headers</font><font color="#007700">(</font><font color="#0000BB">$mb</font><font color="#007700">);<br></font><font color="#0000BB">imap_close</font><font color="#007700">(</font><font color="#0000BB">$mb</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"&lt;pre&gt;\n"</font><font color="#007700">;<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$AllHeaders</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$AllHeaders</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">].</font><font color="#DD0000">"&lt;p&gt;&lt;hr&gt;&lt;p&gt;\n"</font><font color="#007700">;<br>}<br>echo&nbsp;</font><font color="#DD0000">"&lt;/pre&gt;\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_header.php" alt="function.php?imap_header">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-imap_listmailbox.php" alt="function.php?imap_listmailbox">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
