<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - IMAP �����ʼ�ϵͳ������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>IMAP �����ʼ�ϵͳ������</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 46 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>IMAP ��ȫ���� Internet Message Access Protocol��������������Ϣ��ȡЭ�飬Ϊ����ʷ������ѧ 
              (Stanford University) �� 1986 �꿪ʼ�з��Ķ�����������ʼ�ϵͳ��PHP ���ṩ�Ĺ����� IMAP 4 
              ��ϵͳ�����Ǹ��� RFC 1730 ��ʵ���ġ������й� IMAP ����Ϣ���Բο� IMAP �Ĺٷ���վ <a href="/to.asp?url=http://www.imap.org/" tppabs="/to.asp?url=http://www.imap.org/">http://www.imap.org</a>��
              <p> ��ʹ�� IMAP �ĵ����ʼ����ܣ�Ҫ�ȵ� <a href="/to.asp?url=ftp://ftp.cac.washington.edu/imap" tppabs="/to.asp?url=ftp://ftp.cac.washington.edu/imap">ftp://ftp.cac.washington.edu/imap</a> 
                ���� IMAP �Ŀͻ��˳����ڱ������֮�� c-client/c-client.a ���Ƶ� /usr/local/lib 
                ֮�У����� c-client/rfc822.h��mail.h �� linkage.h �����ļ����Ƶ� /usr/local/include 
                ֮�¡�֮����� PHP ����ʱҪ���� --with-imap ��ѡ� 
            </td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-imap_append.php" alt="function.php?imap_append">imap_append</a>:</td><td valign=top>�����ַ�����ָ���������С�</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_base64.php" alt="function.php?imap_base64">imap_base64</a>:</td><td valign=top>�� BASE64 ���롣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_body.php" alt="function.php?imap_body">imap_body</a>:</td><td valign=top>���ŵ����ġ�</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_check.php" alt="function.php?imap_check">imap_check</a>:</td><td valign=top>����������Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_close.php" alt="function.php?imap_close">imap_close</a>:</td><td valign=top>�ر� IMAP ���ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_createmailbox.php" alt="function.php?imap_createmailbox">imap_createmailbox</a>:</td><td valign=top>�����µ����䡣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_delete.php" alt="function.php?imap_delete">imap_delete</a>:</td><td valign=top>�����ɾ���ʼ���</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_deletemailbox.php" alt="function.php?imap_deletemailbox">imap_deletemailbox</a>:</td><td valign=top>ɾ���������䡣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_expunge.php" alt="function.php?imap_expunge">imap_expunge</a>:</td><td valign=top>ɾ���ѱ�ǵ��ʼ���</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_fetchbody.php" alt="function.php?imap_fetchbody">imap_fetchbody</a>:</td><td valign=top>���ż�����ȡ��ָ�����֡�</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_fetchstructure.php" alt="function.php?imap_fetchstructure">imap_fetchstructure</a>:</td><td valign=top>��ȡĳ�ż��Ľṹ��Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_header.php" alt="function.php?imap_header">imap_header</a>:</td><td valign=top>��ȡĳ�ż��ı�ͷ��Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_headers.php" alt="function.php?imap_headers">imap_headers</a>:</td><td valign=top>��ȡȫ���ż��ı�ͷ��Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_listmailbox.php" alt="function.php?imap_listmailbox">imap_listmailbox</a>:</td><td valign=top>��ȡ������ʾ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_listsubscribed.php" alt="function.php?imap_listsubscribed">imap_listsubscribed</a>:</td><td valign=top>��ȡ����������ʾ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_mail_copy.php" alt="function.php?imap_mail_copy">imap_mail_copy</a>:</td><td valign=top>����ָ���ż����������䡣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_mail_move.php" alt="function.php?imap_mail_move">imap_mail_move</a>:</td><td valign=top>�ƶ�ָ���ż����������䡣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_num_msg.php" alt="function.php?imap_num_msg">imap_num_msg</a>:</td><td valign=top>ȡ���ż�����</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_num_recent.php" alt="function.php?imap_num_recent">imap_num_recent</a>:</td><td valign=top>ȡ���½��ż�����</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_open.php" alt="function.php?imap_open">imap_open</a>:</td><td valign=top>�� IMAP ���ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_ping.php" alt="function.php?imap_ping">imap_ping</a>:</td><td valign=top>��� IMAP �Ƿ����ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_renamemailbox.php" alt="function.php?imap_renamemailbox">imap_renamemailbox</a>:</td><td valign=top>�����������֡�</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_reopen.php" alt="function.php?imap_reopen">imap_reopen</a>:</td><td valign=top>�ؿ� IMAP ���ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_subscribe.php" alt="function.php?imap_subscribe">imap_subscribe</a>:</td><td valign=top>�������䡣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_undelete.php" alt="function.php?imap_undelete">imap_undelete</a>:</td><td valign=top>ȡ��ɾ���ʼ���ǡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_unsubscribe.php" alt="function.php?imap_unsubscribe">imap_unsubscribe</a>:</td><td valign=top>ȡ���������䡣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_qprint.php" alt="function.php?imap_qprint">imap_qprint</a>:</td><td valign=top>�� qp ����ת�ɰ�λ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_8bit.php" alt="function.php?imap_8bit">imap_8bit</a>:</td><td valign=top>����λת�� qp ���롣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_binary.php" alt="function.php?imap_binary">imap_binary</a>:</td><td valign=top>����λת�� base64 ���롣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_scanmailbox.php" alt="function.php?imap_scanmailbox">imap_scanmailbox</a>:</td><td valign=top>Ѱ���ż������ض��ַ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_mailboxmsginfo.php" alt="function.php?imap_mailboxmsginfo">imap_mailboxmsginfo</a>:</td><td valign=top>ȡ��Ŀǰ�������Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_rfc822_write_address.php" alt="function.php?imap_rfc822_write_address">imap_rfc822_write_address</a>:</td><td valign=top>�����ʼ�λַ��׼����</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_rfc822_parse_adrlist.php" alt="function.php?imap_rfc822_parse_adrlist">imap_rfc822_parse_adrlist</a>:</td><td valign=top>���������ʼ�λַ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_setflag_full.php" alt="function.php?imap_setflag_full">imap_setflag_full</a>:</td><td valign=top>�����ż���־��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_clearflag_full.php" alt="function.php?imap_clearflag_full">imap_clearflag_full</a>:</td><td valign=top>����ż���־��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_sort.php" alt="function.php?imap_sort">imap_sort</a>:</td><td valign=top>���ż���ͷ����</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_fetchheader.php" alt="function.php?imap_fetchheader">imap_fetchheader</a>:</td><td valign=top>ȡ��ԭʼ��ͷ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_uid.php" alt="function.php?imap_uid">imap_uid</a>:</td><td valign=top>ȡ���ż� UID��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_getmailboxes.php" alt="function.php?imap_getmailboxes">imap_getmailboxes</a>:</td><td valign=top>ȡ��ȫ���ż���ϸ��Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_getsubscribed.php" alt="function.php?imap_getsubscribed">imap_getsubscribed</a>:</td><td valign=top>�г����ж������䡣</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_msgno.php" alt="function.php?imap_msgno">imap_msgno</a>:</td><td valign=top>�г� UID �������ż���</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_search.php" alt="function.php?imap_search">imap_search</a>:</td><td valign=top>��Ѱָ����׼���ż���</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_last_error.php" alt="function.php?imap_last_error">imap_last_error</a>:</td><td valign=top>���Ĵ�����Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_errors.php" alt="function.php?imap_errors">imap_errors</a>:</td><td valign=top>���еĴ�����Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_alerts.php" alt="function.php?imap_alerts">imap_alerts</a>:</td><td valign=top>���еľ�����Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_status.php" alt="function.php?imap_status">imap_status</a>:</td><td valign=top>Ŀǰ��״̬��Ϣ��</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-20.php" alt="group.php?20">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-22.php" alt="group.php?22">��һҳ</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
