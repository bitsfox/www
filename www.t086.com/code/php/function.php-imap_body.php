<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:imap_body()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:imap_body()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP �����ʼ�ϵͳ������</a></div><br><h1><font color=0000bb>imap_body</font></h1><p>
���ŵ����ġ�<p>
<font color=ff8000>�﷨:</font> <b>string imap_body(int imap_stream, int msg_number, int [flags]);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������ɶ�ȡ�ż������� (body) ���ݡ����� imap_stream Ϊ IMAP �Ĵ��š����� msg_number Ϊ�ż�����š����� flags ��ʡ�ԣ������е�ֵ<p>

<ul type=circle>
<li>FT_UID : �ż����Ϊ UID��
<li>FT_PEEK : �������� \Seen ��־��Ҫ�豾��־��
<li>FT_INTERNAL : �����ַ���ʹ��ϵͳ��ʽ����Ҫ����ת�� CRLF �н�����׼��
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
��������&nbsp;IMAP&nbsp;Э���ȡ&nbsp;myid@localhost&nbsp;�ĵ�һ���ż���<br><br><font color="#0000BB">&lt;?php<br>$mbox&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_open</font><font color="#007700">(</font><font color="#DD0000">"{localhost:143}INBOX"</font><font color="#007700">,</font><font color="#DD0000">"myid"</font><font color="#007700">,</font><font color="#DD0000">"mypw"</font><font color="#007700">);<br></font><font color="#0000BB">$message&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_body</font><font color="#007700">(</font><font color="#0000BB">$mbox</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">imap_close</font><font color="#007700">(</font><font color="#0000BB">$mbox</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$message</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_base64.php" alt="function.php?imap_base64">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-imap_check.php" alt="function.php?imap_check">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
