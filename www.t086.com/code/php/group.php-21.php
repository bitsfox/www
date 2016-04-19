<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - IMAP 电子邮件系统函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>IMAP 电子邮件系统函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 46 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>IMAP 的全名是 Internet Message Access Protocol，即网际网络信息存取协议，为美国史丹福大学 
              (Stanford University) 在 1986 年开始研发的多重邮箱电子邮件系统。PHP 所提供的功能是 IMAP 4 
              的系统，这是根据 RFC 1730 所实作的。更多有关 IMAP 的信息可以参考 IMAP 的官方网站 <a href="/to.asp?url=http://www.imap.org/" tppabs="/to.asp?url=http://www.imap.org/">http://www.imap.org</a>。
              <p> 欲使用 IMAP 的电子邮件功能，要先到 <a href="/to.asp?url=ftp://ftp.cac.washington.edu/imap" tppabs="/to.asp?url=ftp://ftp.cac.washington.edu/imap">ftp://ftp.cac.washington.edu/imap</a> 
                下载 IMAP 的客户端程序。在编译完成之后将 c-client/c-client.a 复制到 /usr/local/lib 
                之中，并将 c-client/rfc822.h、mail.h 及 linkage.h 三个文件复制到 /usr/local/include 
                之下。之后编译 PHP 程序时要加入 --with-imap 的选项。 
            </td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-imap_append.php" alt="function.php?imap_append">imap_append</a>:</td><td valign=top>附加字符串到指定的邮箱中。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_base64.php" alt="function.php?imap_base64">imap_base64</a>:</td><td valign=top>解 BASE64 编码。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_body.php" alt="function.php?imap_body">imap_body</a>:</td><td valign=top>读信的内文。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_check.php" alt="function.php?imap_check">imap_check</a>:</td><td valign=top>返回邮箱信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_close.php" alt="function.php?imap_close">imap_close</a>:</td><td valign=top>关闭 IMAP 链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_createmailbox.php" alt="function.php?imap_createmailbox">imap_createmailbox</a>:</td><td valign=top>建立新的信箱。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_delete.php" alt="function.php?imap_delete">imap_delete</a>:</td><td valign=top>标记欲删除邮件。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_deletemailbox.php" alt="function.php?imap_deletemailbox">imap_deletemailbox</a>:</td><td valign=top>删除既有信箱。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_expunge.php" alt="function.php?imap_expunge">imap_expunge</a>:</td><td valign=top>删除已标记的邮件。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_fetchbody.php" alt="function.php?imap_fetchbody">imap_fetchbody</a>:</td><td valign=top>从信件内文取出指定部分。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_fetchstructure.php" alt="function.php?imap_fetchstructure">imap_fetchstructure</a>:</td><td valign=top>获取某信件的结构信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_header.php" alt="function.php?imap_header">imap_header</a>:</td><td valign=top>获取某信件的标头信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_headers.php" alt="function.php?imap_headers">imap_headers</a>:</td><td valign=top>获取全部信件的标头信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_listmailbox.php" alt="function.php?imap_listmailbox">imap_listmailbox</a>:</td><td valign=top>获取邮箱列示。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_listsubscribed.php" alt="function.php?imap_listsubscribed">imap_listsubscribed</a>:</td><td valign=top>获取订阅邮箱列示。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_mail_copy.php" alt="function.php?imap_mail_copy">imap_mail_copy</a>:</td><td valign=top>复制指定信件到它处邮箱。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_mail_move.php" alt="function.php?imap_mail_move">imap_mail_move</a>:</td><td valign=top>移动指定信件到它处邮箱。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_num_msg.php" alt="function.php?imap_num_msg">imap_num_msg</a>:</td><td valign=top>取得信件数。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_num_recent.php" alt="function.php?imap_num_recent">imap_num_recent</a>:</td><td valign=top>取得新进信件数。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_open.php" alt="function.php?imap_open">imap_open</a>:</td><td valign=top>打开 IMAP 链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_ping.php" alt="function.php?imap_ping">imap_ping</a>:</td><td valign=top>检查 IMAP 是否连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_renamemailbox.php" alt="function.php?imap_renamemailbox">imap_renamemailbox</a>:</td><td valign=top>更改邮箱名字。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_reopen.php" alt="function.php?imap_reopen">imap_reopen</a>:</td><td valign=top>重开 IMAP 链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_subscribe.php" alt="function.php?imap_subscribe">imap_subscribe</a>:</td><td valign=top>订阅邮箱。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_undelete.php" alt="function.php?imap_undelete">imap_undelete</a>:</td><td valign=top>取消删除邮件标记。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_unsubscribe.php" alt="function.php?imap_unsubscribe">imap_unsubscribe</a>:</td><td valign=top>取消订阅邮箱。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_qprint.php" alt="function.php?imap_qprint">imap_qprint</a>:</td><td valign=top>将 qp 编码转成八位。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_8bit.php" alt="function.php?imap_8bit">imap_8bit</a>:</td><td valign=top>将八位转成 qp 编码。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_binary.php" alt="function.php?imap_binary">imap_binary</a>:</td><td valign=top>将八位转成 base64 编码。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_scanmailbox.php" alt="function.php?imap_scanmailbox">imap_scanmailbox</a>:</td><td valign=top>寻找信件有无特定字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_mailboxmsginfo.php" alt="function.php?imap_mailboxmsginfo">imap_mailboxmsginfo</a>:</td><td valign=top>取得目前邮箱的信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_rfc822_write_address.php" alt="function.php?imap_rfc822_write_address">imap_rfc822_write_address</a>:</td><td valign=top>电子邮件位址标准化。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_rfc822_parse_adrlist.php" alt="function.php?imap_rfc822_parse_adrlist">imap_rfc822_parse_adrlist</a>:</td><td valign=top>解析电子邮件位址。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_setflag_full.php" alt="function.php?imap_setflag_full">imap_setflag_full</a>:</td><td valign=top>配置信件标志。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_clearflag_full.php" alt="function.php?imap_clearflag_full">imap_clearflag_full</a>:</td><td valign=top>清除信件标志。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_sort.php" alt="function.php?imap_sort">imap_sort</a>:</td><td valign=top>将信件标头排序。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_fetchheader.php" alt="function.php?imap_fetchheader">imap_fetchheader</a>:</td><td valign=top>取得原始标头。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_uid.php" alt="function.php?imap_uid">imap_uid</a>:</td><td valign=top>取得信件 UID。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_getmailboxes.php" alt="function.php?imap_getmailboxes">imap_getmailboxes</a>:</td><td valign=top>取得全部信件详细信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_getsubscribed.php" alt="function.php?imap_getsubscribed">imap_getsubscribed</a>:</td><td valign=top>列出所有订阅邮箱。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_msgno.php" alt="function.php?imap_msgno">imap_msgno</a>:</td><td valign=top>列出 UID 的连续信件。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_search.php" alt="function.php?imap_search">imap_search</a>:</td><td valign=top>搜寻指定标准的信件。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_last_error.php" alt="function.php?imap_last_error">imap_last_error</a>:</td><td valign=top>最后的错误信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_errors.php" alt="function.php?imap_errors">imap_errors</a>:</td><td valign=top>所有的错误信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_alerts.php" alt="function.php?imap_alerts">imap_alerts</a>:</td><td valign=top>所有的警告信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-imap_status.php" alt="function.php?imap_status">imap_status</a>:</td><td valign=top>目前的状态信息。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-20.php" alt="group.php?20">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-22.php" alt="group.php?22">下一页</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
