<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:imap_reopen()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:imap_reopen()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP �����ʼ�ϵͳ������</a></div><br><h1><font color=0000bb>imap_reopen</font></h1><p>
�ؿ� IMAP ���ӡ�<p>
<font color=ff8000>�﷨:</font> <b>int imap_reopen(string imap_stream, string mailbox, string [flags]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�����������´򿪿ͻ����������֮��� IMAP ���ӡ�������ͨ���� <a href="function.php-imap_ping.php" alt="function.php?imap_ping">imap_ping()</a> �������á����� mailbox Ϊ�������˵�λ�á����� flags ��ʡ�ԣ������е�ֵ��<p>

<ul type=disc>
<li>OP_READONLY : ������ʹ��ֻ��״̬��
<li>OP_ANONYMOUS : ������ȡ NNTP ����������ʹ�� .newsrc �ļ���
<li>OP_HALFOPEN : ֻ�� IMAP �� NNTP ���������ӣ��������䡣
<li>CL_EXPUNGE : �ر�����ʱ�Զ���������е��ż���
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$userid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"nulluser"</font><font color="#007700">;<br></font><font color="#0000BB">$passwd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"passwd38"</font><font color="#007700">;<br></font><font color="#0000BB">$mb&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imap_open</font><font color="#007700">(</font><font color="#DD0000">"(imap.null.org)INBOX"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$passwd</font><font color="#007700">);<br>if&nbsp;(!</font><font color="#0000BB">imap_ping</font><font color="#007700">(</font><font color="#0000BB">$mb</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">imap_reopen</font><font color="#007700">(</font><font color="#0000BB">$mb</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$passwd</font><font color="#007700">);<br>}<br></font><font color="#0000BB">imap_close</font><font color="#007700">(</font><font color="#0000BB">$mb</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_renamemailbox.php" alt="function.php?imap_renamemailbox">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-imap_subscribe.php" alt="function.php?imap_subscribe">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
