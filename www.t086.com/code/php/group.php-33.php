<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - MySQL ���ݿ⺯����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>MySQL ���ݿ⺯����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 32 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>�������⹩��ȡ MySQL ���ݿ⡣�й� MySQL ��ϸ�ڣ������� MySQL ���ݿ⣬�뵽�����ַ 
              <a href="http://www.mysql.com/" tppabs="http://www.mysql.com/">http://www.mysql.com</a>����������Ҳ������ṩ���� 
              MySQL ���û�������򣬽��鵽 <a href="/to.asp?url=http://www.phpwizard.net/phpMyAdmin" tppabs="/to.asp?url=http://www.phpwizard.net/phpMyAdmin">http://www.phpwizard.net/phpMyAdmin</a> 
              ���� phpMyAdmin������ʹ����������������� MySQL������ phpMyAdmin �������� PHP3 ��ɵģ����ͬʱ�о� 
              PHP3 �� MySQL �����ӡ� </td>
          </tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-mysql_affected_rows.php" alt="function.php?mysql_affected_rows">mysql_affected_rows</a>:</td><td valign=top>�õ� MySQL ������Ӱ�������Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_close.php" alt="function.php?mysql_close">mysql_close</a>:</td><td valign=top>�ر� MySQL ���������ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_connect.php" alt="function.php?mysql_connect">mysql_connect</a>:</td><td valign=top>�� MySQL ���������ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_create_db.php" alt="function.php?mysql_create_db">mysql_create_db</a>:</td><td valign=top>����һ�� MySQL �����ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_data_seek.php" alt="function.php?mysql_data_seek">mysql_data_seek</a>:</td><td valign=top>�ƶ��ڲ�����ָ�롣</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_db_query.php" alt="function.php?mysql_db_query">mysql_db_query</a>:</td><td valign=top>�Ͳ�ѯ�ַ��� (query) �� MySQL ���ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_drop_db.php" alt="function.php?mysql_drop_db">mysql_drop_db</a>:</td><td valign=top>�Ƴ����ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_errno.php" alt="function.php?mysql_errno">mysql_errno</a>:</td><td valign=top>���ش�����Ϣ���롣</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_error.php" alt="function.php?mysql_error">mysql_error</a>:</td><td valign=top>���ش�����Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_array.php" alt="function.php?mysql_fetch_array">mysql_fetch_array</a>:</td><td valign=top>�����������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_field.php" alt="function.php?mysql_fetch_field">mysql_fetch_field</a>:</td><td valign=top>ȡ���ֶ���Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_lengths.php" alt="function.php?mysql_fetch_lengths">mysql_fetch_lengths</a>:</td><td valign=top>���ص��и���������󳤶ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_object.php" alt="function.php?mysql_fetch_object">mysql_fetch_object</a>:</td><td valign=top>���������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_row.php" alt="function.php?mysql_fetch_row">mysql_fetch_row</a>:</td><td valign=top>���ص��еĸ��ֶΡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_name.php" alt="function.php?mysql_field_name">mysql_field_name</a>:</td><td valign=top>����ָ���ֶε����ơ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_seek.php" alt="function.php?mysql_field_seek">mysql_field_seek</a>:</td><td valign=top>����ָ�뵽����ֵ��ĳ�ֶΡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_table.php" alt="function.php?mysql_field_table">mysql_field_table</a>:</td><td valign=top>���Ŀǰ�ֶε����ϱ� (table) ���ơ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_type.php" alt="function.php?mysql_field_type">mysql_field_type</a>:</td><td valign=top>���Ŀǰ�ֶε����͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_flags.php" alt="function.php?mysql_field_flags">mysql_field_flags</a>:</td><td valign=top>���Ŀǰ�ֶεı�־��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_len.php" alt="function.php?mysql_field_len">mysql_field_len</a>:</td><td valign=top>���Ŀǰ�ֶεĳ��ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_free_result.php" alt="function.php?mysql_free_result">mysql_free_result</a>:</td><td valign=top>�ͷŷ���ռ���ڴ档</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_insert_id.php" alt="function.php?mysql_insert_id">mysql_insert_id</a>:</td><td valign=top>�������һ��ʹ�� INSERT ָ��� ID��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_list_fields.php" alt="function.php?mysql_list_fields">mysql_list_fields</a>:</td><td valign=top>�г�ָ�����ϱ���ֶ� (field)��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_list_dbs.php" alt="function.php?mysql_list_dbs">mysql_list_dbs</a>:</td><td valign=top>�г� MySQL ���������õ����ݿ� (database)��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_list_tables.php" alt="function.php?mysql_list_tables">mysql_list_tables</a>:</td><td valign=top>�г�ָ�����ݿ�����ϱ� (table)��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_num_fields.php" alt="function.php?mysql_num_fields">mysql_num_fields</a>:</td><td valign=top>ȡ�÷����ֶε���Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_num_rows.php" alt="function.php?mysql_num_rows">mysql_num_rows</a>:</td><td valign=top>ȡ�÷����е���Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_pconnect.php" alt="function.php?mysql_pconnect">mysql_pconnect</a>:</td><td valign=top>�� MySQL �������������ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_query.php" alt="function.php?mysql_query">mysql_query</a>:</td><td valign=top>�ͳ�һ�� query �ַ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_result.php" alt="function.php?mysql_result">mysql_result</a>:</td><td valign=top>ȡ�ò�ѯ (query) �Ľ����</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_select_db.php" alt="function.php?mysql_select_db">mysql_select_db</a>:</td><td valign=top>ѡ��һ�����ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_tablename.php" alt="function.php?mysql_tablename">mysql_tablename</a>:</td><td valign=top>ȡ�����ϱ����ơ�</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-32.php" alt="group.php?32">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-34.php" alt="group.php?34">��һҳ</a> 
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
