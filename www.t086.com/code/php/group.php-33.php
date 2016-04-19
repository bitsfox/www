<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - MySQL 数据库函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>MySQL 数据库函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 32 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>本函数库供存取 MySQL 数据库。有关 MySQL 的细节，及下载 MySQL 数据库，请到这个网址 
              <a href="http://www.mysql.com/" tppabs="http://www.mysql.com/">http://www.mysql.com</a>。而网络上也有许多提供处理 
              MySQL 的用户界面程序，建议到 <a href="/to.asp?url=http://www.phpwizard.net/phpMyAdmin" tppabs="/to.asp?url=http://www.phpwizard.net/phpMyAdmin">http://www.phpwizard.net/phpMyAdmin</a> 
              下载 phpMyAdmin，可以使用浏览器操作及管理 MySQL。整套 phpMyAdmin 程序，是用 PHP3 完成的，亦可同时研究 
              PHP3 与 MySQL 的链接。 </td>
          </tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-mysql_affected_rows.php" alt="function.php?mysql_affected_rows">mysql_affected_rows</a>:</td><td valign=top>得到 MySQL 最后操作影响的列数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_close.php" alt="function.php?mysql_close">mysql_close</a>:</td><td valign=top>关闭 MySQL 服务器连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_connect.php" alt="function.php?mysql_connect">mysql_connect</a>:</td><td valign=top>打开 MySQL 服务器连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_create_db.php" alt="function.php?mysql_create_db">mysql_create_db</a>:</td><td valign=top>建立一个 MySQL 新数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_data_seek.php" alt="function.php?mysql_data_seek">mysql_data_seek</a>:</td><td valign=top>移动内部返回指针。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_db_query.php" alt="function.php?mysql_db_query">mysql_db_query</a>:</td><td valign=top>送查询字符串 (query) 到 MySQL 数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_drop_db.php" alt="function.php?mysql_drop_db">mysql_drop_db</a>:</td><td valign=top>移除数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_errno.php" alt="function.php?mysql_errno">mysql_errno</a>:</td><td valign=top>返回错误信息代码。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_error.php" alt="function.php?mysql_error">mysql_error</a>:</td><td valign=top>返回错误信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_array.php" alt="function.php?mysql_fetch_array">mysql_fetch_array</a>:</td><td valign=top>返回数组资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_field.php" alt="function.php?mysql_fetch_field">mysql_fetch_field</a>:</td><td valign=top>取得字段信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_lengths.php" alt="function.php?mysql_fetch_lengths">mysql_fetch_lengths</a>:</td><td valign=top>返回单列各栏资料最大长度。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_object.php" alt="function.php?mysql_fetch_object">mysql_fetch_object</a>:</td><td valign=top>返回类资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_fetch_row.php" alt="function.php?mysql_fetch_row">mysql_fetch_row</a>:</td><td valign=top>返回单列的各字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_name.php" alt="function.php?mysql_field_name">mysql_field_name</a>:</td><td valign=top>返回指定字段的名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_seek.php" alt="function.php?mysql_field_seek">mysql_field_seek</a>:</td><td valign=top>配置指针到返回值的某字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_table.php" alt="function.php?mysql_field_table">mysql_field_table</a>:</td><td valign=top>获得目前字段的资料表 (table) 名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_type.php" alt="function.php?mysql_field_type">mysql_field_type</a>:</td><td valign=top>获得目前字段的类型。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_flags.php" alt="function.php?mysql_field_flags">mysql_field_flags</a>:</td><td valign=top>获得目前字段的标志。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_field_len.php" alt="function.php?mysql_field_len">mysql_field_len</a>:</td><td valign=top>获得目前字段的长度。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_free_result.php" alt="function.php?mysql_free_result">mysql_free_result</a>:</td><td valign=top>释放返回占用内存。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_insert_id.php" alt="function.php?mysql_insert_id">mysql_insert_id</a>:</td><td valign=top>返回最后一次使用 INSERT 指令的 ID。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_list_fields.php" alt="function.php?mysql_list_fields">mysql_list_fields</a>:</td><td valign=top>列出指定资料表的字段 (field)。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_list_dbs.php" alt="function.php?mysql_list_dbs">mysql_list_dbs</a>:</td><td valign=top>列出 MySQL 服务器可用的数据库 (database)。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_list_tables.php" alt="function.php?mysql_list_tables">mysql_list_tables</a>:</td><td valign=top>列出指定数据库的资料表 (table)。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_num_fields.php" alt="function.php?mysql_num_fields">mysql_num_fields</a>:</td><td valign=top>取得返回字段的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_num_rows.php" alt="function.php?mysql_num_rows">mysql_num_rows</a>:</td><td valign=top>取得返回列的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_pconnect.php" alt="function.php?mysql_pconnect">mysql_pconnect</a>:</td><td valign=top>打开 MySQL 服务器持续连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_query.php" alt="function.php?mysql_query">mysql_query</a>:</td><td valign=top>送出一个 query 字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_result.php" alt="function.php?mysql_result">mysql_result</a>:</td><td valign=top>取得查询 (query) 的结果。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_select_db.php" alt="function.php?mysql_select_db">mysql_select_db</a>:</td><td valign=top>选择一个数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-mysql_tablename.php" alt="function.php?mysql_tablename">mysql_tablename</a>:</td><td valign=top>取得资料表名称。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-32.php" alt="group.php?32">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-34.php" alt="group.php?34">下一页</a> 
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
