<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ODBC ���ݿ����Ӻ�����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>ODBC ���ݿ����Ӻ�����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 25 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>������������ (Open Database Connectivity, ODBC) ���������ݿ�Ĺ�ͨ���档ODBC ����΢�����������ݿ����ӱ�׼��ʵ������Ҳ��΢���ϵͳ����졣�� UNIX ϵͳ�У�ͨ��Ҫʹ�������������ṩ�� ODBC ���棬��Щ UNIX ���̻��Լ��ṩ ODBC ���� (�� SUN ��Ϊ Solaris �ṩ ODBC)��<p>

ODBC �����ݿ�Ĳ�ѯ���� SQL ���ԣ���ʹ󲿷ݵ����ݿ��ѯ��ʽһ������ʹ��ϵͳ���Ժ����׺͸������ݿ⹵ͨ����Ȼ��͸�� ODBC ���棬��˵����ݿⲻһ��Ҫ DBMS ���ִ������ݿ�ϵͳ������������ϱ� (�� Microsoft Access)������������� (�� Microsoft Excel)��
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-odbc_autocommit.php" alt="function.php?odbc_autocommit">odbc_autocommit</a>:</td><td valign=top>�����Զ��Ķ����ܡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_binmode.php" alt="function.php?odbc_binmode">odbc_binmode</a>:</td><td valign=top>���ö���λ���ϴ���ʽ��</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_close.php" alt="function.php?odbc_close">odbc_close</a>:</td><td valign=top>�ر� ODBC ���ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_close_all.php" alt="function.php?odbc_close_all">odbc_close_all</a>:</td><td valign=top>�ر����� ODBC ���ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_commit.php" alt="function.php?odbc_commit">odbc_commit</a>:</td><td valign=top>�Ķ� ODBC ���ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_connect.php" alt="function.php?odbc_connect">odbc_connect</a>:</td><td valign=top>������ ODBC ���ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_cursor.php" alt="function.php?odbc_cursor">odbc_cursor</a>:</td><td valign=top>ȡ���α�����</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_do.php" alt="function.php?odbc_do">odbc_do</a>:</td><td valign=top>ִ�� SQL ָ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_exec.php" alt="function.php?odbc_exec">odbc_exec</a>:</td><td valign=top>ִ�� SQL ָ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_execute.php" alt="function.php?odbc_execute">odbc_execute</a>:</td><td valign=top>ִ��Ԥ�� SQL ָ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_fetch_into.php" alt="function.php?odbc_fetch_into">odbc_fetch_into</a>:</td><td valign=top>ȡ�÷��ص�ָ���С�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_fetch_row.php" alt="function.php?odbc_fetch_row">odbc_fetch_row</a>:</td><td valign=top>ȡ�÷���һ�С�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_field_name.php" alt="function.php?odbc_field_name">odbc_field_name</a>:</td><td valign=top>ȡ���ֶ����ơ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_field_type.php" alt="function.php?odbc_field_type">odbc_field_type</a>:</td><td valign=top>ȡ���ֶ��������͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_field_len.php" alt="function.php?odbc_field_len">odbc_field_len</a>:</td><td valign=top>ȡ���ֶ����ϳ��ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_free_result.php" alt="function.php?odbc_free_result">odbc_free_result</a>:</td><td valign=top>�ͳ��������ϵ��ڴ档</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_longreadlen.php" alt="function.php?odbc_longreadlen">odbc_longreadlen</a>:</td><td valign=top>���÷����������ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_num_fields.php" alt="function.php?odbc_num_fields">odbc_num_fields</a>:</td><td valign=top>ȡ���ֶ���Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect</a>:</td><td valign=top>���������� ODBC ���ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_prepare.php" alt="function.php?odbc_prepare">odbc_prepare</a>:</td><td valign=top>Ԥ�� SQL ָ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_num_rows.php" alt="function.php?odbc_num_rows">odbc_num_rows</a>:</td><td valign=top>ȡ�÷�������Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_result.php" alt="function.php?odbc_result">odbc_result</a>:</td><td valign=top>ȡ�÷������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_result_all.php" alt="function.php?odbc_result_all">odbc_result_all</a>:</td><td valign=top>���� HTML ������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_rollback.php" alt="function.php?odbc_rollback">odbc_rollback</a>:</td><td valign=top>������ǰ���ס�</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_setoption.php" alt="function.php?odbc_setoption">odbc_setoption</a>:</td><td valign=top>���� ODBC ���á�</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-36.php" alt="group.php?36">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-38.php" alt="group.php?38">��һҳ</a> 
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
