<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:imap_search()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:imap_search()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP �����ʼ�ϵͳ������</a></div><br><h1><font color=0000bb>imap_search</font></h1><p>
��Ѱָ����׼���ż���<p>
<font color=ff8000>�﷨:</font> <b>array imap_search(int imap_stream, string criteria, int flags);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������Ѱ�Ϻ�ָ���������ż������� imap_stream Ϊ IMAP �Ĵ��š����� criteria Ϊָ�������������ֶ��Կո� (space) �ֿ����������±����� flags Ϊ SE_UID��<p>

<table border=1>
<tr><th>����</th><th>˵��</th></tr>
<tr><td>ALL</td><td>�������кϺ���׼���ż�</td></tr>
<tr><td>ANSWERED</td><td>�ż������� \\ANSWERED ��־��</td></tr>
<tr><td>BCC "�ַ���"</td><td>Bcc ������ָ�� "�ַ���" ���ż�</td></tr>
<tr><td>BEFORE "����"</td><td>ָ�� "����" ��ǰ���ż�</td></tr>
<tr><td>BODY "�ַ���"</td><td>�����ֶ�����ָ�� "�ַ���" ���ż�</td></tr>
<tr><td>CC "�ַ���"</td><td>Cc ������ָ�� "�ַ���" ���ż�</td></tr>
<tr><td>DELETED</td><td>�Ϻ���ɾ�����ż�</td></tr>
<tr><td>FLAGGED</td><td>�ż������� \\FLAGGED ��־��</td></tr>
<tr><td>FROM "�ַ���"</td><td>From ������ָ�� "�ַ���" ���ż�</td></tr>
<tr><td>KEYWORD "�ַ���"</td><td>�ؼ���Ϊָ�� "�ַ���" ��</td></tr>
<tr><td>NEW</td><td>�µ��ż�</td></tr>
<tr><td>OLD</td><td>�ɵ��ż�</td></tr>
<tr><td>ON "����"</td><td>ָ�� "����" ���ż�</td></tr>
<tr><td>RECENT</td><td>�ż������� \\RECENT ��־��</td></tr>
<tr><td>SEEN</td><td>�ż������� \\SEEN ��־��</td></tr>
<tr><td>SINCE "����"</td><td>ָ�� "����" ֮����ż�</td></tr>
<tr><td>SUBJECT "�ַ���"</td><td>Subject ������ָ�� "�ַ���" ���ż�</td></tr>
<tr><td>TEXT "�ַ���"</td><td>Text ������ָ�� "�ַ���" ���ż�</td></tr>
<tr><td>TO "�ַ���"</td><td>To ������ָ�� "�ַ���" ���ż�</td></tr>
<tr><td>UNANSWERED</td><td>δ��Ӧ���ż�</td></tr>
<tr><td>UNDELETED</td><td>δɾ�����ż�</td></tr>
<tr><td>UNFLAGGED</td><td>δ���ñ�־���ż�</td></tr>
<tr><td>UNKEYWORD "�ַ���"</td><td>δ���ùؼ� "�ַ���" ���ż�</td></tr>
<tr><td>UNSEEN</td><td>δ��ȡ���ż�</td></tr>
</table><p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_msgno.php" alt="function.php?imap_msgno">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-imap_last_error.php" alt="function.php?imap_last_error">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
