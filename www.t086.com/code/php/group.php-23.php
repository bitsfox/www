<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - Informix ���ݿ⺯����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>Informix ���ݿ⺯����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 38 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>Ŀǰ֧�ֵ� Informix �汾Ϊ ODS 7.x��SE 7.x �� Universal Server (IUS) 9.x ���֡��� ODS 7.x �İ汾�У���ȫ֧�����е��������ͣ����� IUS 9.x �У���֧�� SLOB �� CLOB �������͡�<p>

Ҫ�� Web Server �ϰ�װ Informix Client �ˣ��ڱ��� PHP ֮ǰ (configure ֮ǰ)��Ҫ����� IFX_LIBDIR��IFX_LIBS �� IFX_INCDIR ���ֻ������������� 9.x ����Ҫ���� HAVE_IFX_IUS ����������ͬʱ������ʱҪ���� --with_informix=yes ��ѡ�
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-ifx_connect.php" alt="function.php?ifx_connect">ifx_connect</a>:</td><td valign=top>�� Informix ���������ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect</a>:</td><td valign=top>�� Informix �������������ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_close.php" alt="function.php?ifx_close">ifx_close</a>:</td><td valign=top>�ر� Informix ���������ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_query.php" alt="function.php?ifx_query">ifx_query</a>:</td><td valign=top>�ͳ�һ�� query �ַ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_prepare.php" alt="function.php?ifx_prepare">ifx_prepare</a>:</td><td valign=top>׼�� query �ַ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_do.php" alt="function.php?ifx_do">ifx_do</a>:</td><td valign=top>ִ����׼�� query �ַ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_error.php" alt="function.php?ifx_error">ifx_error</a>:</td><td valign=top>ȡ�� Informix ���Ĵ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_errormsg.php" alt="function.php?ifx_errormsg">ifx_errormsg</a>:</td><td valign=top>ȡ�� Informix ��������Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_affected_rows.php" alt="function.php?ifx_affected_rows">ifx_affected_rows</a>:</td><td valign=top>�õ� Informix ������Ӱ�������Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_getsqlca.php" alt="function.php?ifx_getsqlca">ifx_getsqlca</a>:</td><td valign=top>ȡ�� query ��� sqlca ��Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_fetch_row.php" alt="function.php?ifx_fetch_row">ifx_fetch_row</a>:</td><td valign=top>���ص��еĸ��ֶΡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_htmltbl_result.php" alt="function.php?ifx_htmltbl_result">ifx_htmltbl_result</a>:</td><td valign=top>�� query ��������ת�� HTML ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_fieldtypes.php" alt="function.php?ifx_fieldtypes">ifx_fieldtypes</a>:</td><td valign=top>�г� Informix �� SQL �ֶΡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_fieldproperties.php" alt="function.php?ifx_fieldproperties">ifx_fieldproperties</a>:</td><td valign=top>�г� Informix �� SQL �ֶ����ԡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_num_fields.php" alt="function.php?ifx_num_fields">ifx_num_fields</a>:</td><td valign=top>ȡ�÷����ֶε���Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_num_rows.php" alt="function.php?ifx_num_rows">ifx_num_rows</a>:</td><td valign=top>ȡ�÷����е���Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_free_result.php" alt="function.php?ifx_free_result">ifx_free_result</a>:</td><td valign=top>�ͷŷ���ռ���ڴ档</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_create_char.php" alt="function.php?ifx_create_char">ifx_create_char</a>:</td><td valign=top>�����ַ��ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_free_char.php" alt="function.php?ifx_free_char">ifx_free_char</a>:</td><td valign=top>ɾ���ַ��ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_update_char.php" alt="function.php?ifx_update_char">ifx_update_char</a>:</td><td valign=top>�����ַ��ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_get_char.php" alt="function.php?ifx_get_char">ifx_get_char</a>:</td><td valign=top>ȡ���ַ��ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_create_blob.php" alt="function.php?ifx_create_blob">ifx_create_blob</a>:</td><td valign=top>������λ�ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_copy_blob.php" alt="function.php?ifx_copy_blob">ifx_copy_blob</a>:</td><td valign=top>���Ƴ�λ�ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_free_blob.php" alt="function.php?ifx_free_blob">ifx_free_blob</a>:</td><td valign=top>ɾ����λ�ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_get_blob.php" alt="function.php?ifx_get_blob">ifx_get_blob</a>:</td><td valign=top>ȡ�ó�λ�ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_update_blob.php" alt="function.php?ifx_update_blob">ifx_update_blob</a>:</td><td valign=top>���ĳ�λ�ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_blobinfile_mode.php" alt="function.php?ifx_blobinfile_mode">ifx_blobinfile_mode</a>:</td><td valign=top>���ó�λ��ģʽ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_textasvarchar.php" alt="function.php?ifx_textasvarchar">ifx_textasvarchar</a>:</td><td valign=top>��������ģʽĬ��ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_byteasvarchar.php" alt="function.php?ifx_byteasvarchar">ifx_byteasvarchar</a>:</td><td valign=top>����λ��ģʽĬ��ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_nullformat.php" alt="function.php?ifx_nullformat">ifx_nullformat</a>:</td><td valign=top>���ÿ��ַ�ģʽĬ��ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_create_slob.php" alt="function.php?ifxus_create_slob">ifxus_create_slob</a>:</td><td valign=top>���� slob �ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_free_slob.php" alt="function.php?ifx_free_slob">ifx_free_slob</a>:</td><td valign=top>ɾ�� slob �ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_close_slob.php" alt="function.php?ifxus_close_slob">ifxus_close_slob</a>:</td><td valign=top>ɾ�� slob �ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_open_slob.php" alt="function.php?ifxus_open_slob">ifxus_open_slob</a>:</td><td valign=top>�� slob �ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_tell_slob.php" alt="function.php?ifxus_tell_slob">ifxus_tell_slob</a>:</td><td valign=top>����Ŀǰ�ļ�����Ѱλ�á�</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_seek_slob.php" alt="function.php?ifxus_seek_slob">ifxus_seek_slob</a>:</td><td valign=top>����Ŀǰ�ļ�����Ѱλ�á�</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_read_slob.php" alt="function.php?ifxus_read_slob">ifxus_read_slob</a>:</td><td valign=top>��ȡָ����Ŀ�� slob �ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_write_slob.php" alt="function.php?ifxus_write_slob">ifxus_write_slob</a>:</td><td valign=top>���ַ���д�� slob ���С�</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-22.php" alt="group.php?22">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-24.php" alt="group.php?24">��һҳ</a> 
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
