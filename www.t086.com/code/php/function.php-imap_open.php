<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:imap_open()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:imap_open()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP �����ʼ�ϵͳ������</a></div><br><h1><font color=0000bb>imap_open</font></h1><p>
�� IMAP ���ӡ�<p>
<font color=ff8000>�﷨:</font> <b>int imap_open(string mailbox, string username, string password, int [flags]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������ɴ򿪿ͻ����������֮��� IMAP ���ӣ����������� POP3 �� NNTP ������������ mailbox Ϊ�������˵�λ�á����� username Ϊ�û��ʺš����� password Ϊ�û������롣���� flags ��ʡ�ԣ������е�ֵ��<p>

<ul type=disc>
<li>OP_READONLY : ������ʹ��ֻ��״̬��
<li>OP_ANONYMOUS : ������ȡ NNTP ����������ʹ�� .newsrc �ļ���
<li>OP_HALFOPEN : ֻ�� IMAP �� NNTP ���������ӣ��������䡣
<li>CL_EXPUNGE : �ر�����ʱ�Զ���������е��ż���
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
�����ֱ�Ϊ��&nbsp;IMAP��POP3��NNTP&nbsp;�Ĳ��ݲο�����<br><br><font color="#0000BB">&lt;?php<br>$mbox&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_open</font><font color="#007700">(</font><font color="#DD0000">"{localhost:143}INBOX"</font><font color="#007700">,</font><font color="#DD0000">"user_id"</font><font color="#007700">,</font><font color="#DD0000">"password"</font><font color="#007700">);<br>&nbsp;</font><font color="#0000BB">?/font><font color="#007700">}</font><font color="#0000BB">����&nbsp;IMAP&nbsp;���������ӣ�IMAP&nbsp;�Ĳ�&nbsp;</font><font color="#007700">(</font><font color="#0000BB">port</font><font color="#007700">)&nbsp;</font><font color="#0000BB">ͨ?/font><font color="#007700">`</font><font color="#0000BB">Ϊ&nbsp;143��<br>$mbox&nbsp;=&nbsp;imap_open("</font><font color="#007700">{</font><font color="#0000BB">localhost/pop3:110</font><font color="#007700">}</font><font color="#0000BB">INBOX","user_id","password");<br></font><font color="#007700">\\</font><font color="#0000BB">&nbsp;?/font><font color="#007700">}</font><font color="#0000BB">����&nbsp;POP3&nbsp;���������ӣ�POP3&nbsp;�Ĳ�ֵΪ&nbsp;110��<br>$nntp&nbsp;=&nbsp;imap_open("</font><font color="#007700">{</font><font color="#0000BB">localhost/nntp:119</font><font color="#007700">}</font><font color="#0000BB">comp.test","","");<br></font><font color="#007700">\\</font><font color="#0000BB">&nbsp;?/font><font color="#007700">}</font><font color="#0000BB">����&nbsp;NNTP&nbsp;���������ӣ�NNTP&nbsp;�Ĳ�Ϊ&nbsp;119��<br>?&gt;</font>
</font>
<p><hr size=1><br><p>
</font></font></font></font></td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_num_recent.php" alt="function.php?imap_num_recent">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-imap_ping.php" alt="function.php?imap_ping">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
