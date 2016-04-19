<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - mSQL 数据库函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>mSQL 数据库函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 40 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>mSQL 是个小巧的数据库系统，可以到 <a href="/to.asp?url=http://www.hughes.com.au/" tppabs="/to.asp?url=http://www.hughes.com.au/">http://www.hughes.com.au</a> 
              取得更多有关 mSQL 数据库的详情。 </td>
          </tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-msql.php" alt="function.php?msql">msql</a>:</td><td valign=top>送出 query 字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_affected_rows.php" alt="function.php?msql_affected_rows">msql_affected_rows</a>:</td><td valign=top>得到 mSQL 最后操作影响的列数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_close.php" alt="function.php?msql_close">msql_close</a>:</td><td valign=top>关闭 mSQL 数据库连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_connect.php" alt="function.php?msql_connect">msql_connect</a>:</td><td valign=top>打开 mSQL 数据库连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_create_db.php" alt="function.php?msql_create_db">msql_create_db</a>:</td><td valign=top>建立一个新的 mSQL 数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_createdb.php" alt="function.php?msql_createdb">msql_createdb</a>:</td><td valign=top>建立一个新的 mSQL 数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_data_seek.php" alt="function.php?msql_data_seek">msql_data_seek</a>:</td><td valign=top>移动内部返回指针。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_dbname.php" alt="function.php?msql_dbname">msql_dbname</a>:</td><td valign=top>取得目前所在数据库名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_drop_db.php" alt="function.php?msql_drop_db">msql_drop_db</a>:</td><td valign=top>删除指定的 mSQL 数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_dropdb.php" alt="function.php?msql_dropdb">msql_dropdb</a>:</td><td valign=top>删除指定的 mSQL 数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_error.php" alt="function.php?msql_error">msql_error</a>:</td><td valign=top>取得最后错误信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_fetch_array.php" alt="function.php?msql_fetch_array">msql_fetch_array</a>:</td><td valign=top>返回数组资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_fetch_field.php" alt="function.php?msql_fetch_field">msql_fetch_field</a>:</td><td valign=top>取得字段信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_fetch_object.php" alt="function.php?msql_fetch_object">msql_fetch_object</a>:</td><td valign=top>返回类资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_fetch_row.php" alt="function.php?msql_fetch_row">msql_fetch_row</a>:</td><td valign=top>返回单列的各字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_fieldname.php" alt="function.php?msql_fieldname">msql_fieldname</a>:</td><td valign=top>返回指定字段的名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_field_seek.php" alt="function.php?msql_field_seek">msql_field_seek</a>:</td><td valign=top>配置指针到返回值的某字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_fieldtable.php" alt="function.php?msql_fieldtable">msql_fieldtable</a>:</td><td valign=top>获得字段的资料表 (table) 名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_fieldtype.php" alt="function.php?msql_fieldtype">msql_fieldtype</a>:</td><td valign=top>获得字段的类型。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_fieldflags.php" alt="function.php?msql_fieldflags">msql_fieldflags</a>:</td><td valign=top>获得字段的标志。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_fieldlen.php" alt="function.php?msql_fieldlen">msql_fieldlen</a>:</td><td valign=top>获得字段的长度。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_free_result.php" alt="function.php?msql_free_result">msql_free_result</a>:</td><td valign=top>释放返回占用内存。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_freeresult.php" alt="function.php?msql_freeresult">msql_freeresult</a>:</td><td valign=top>释放返回占用内存。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_list_fields.php" alt="function.php?msql_list_fields">msql_list_fields</a>:</td><td valign=top>列出指定资料表的字段 (field)。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_listfields.php" alt="function.php?msql_listfields">msql_listfields</a>:</td><td valign=top>列出指定资料表的字段 (field)。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_list_dbs.php" alt="function.php?msql_list_dbs">msql_list_dbs</a>:</td><td valign=top>列出可用数据库 (database)。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_listdbs.php" alt="function.php?msql_listdbs">msql_listdbs</a>:</td><td valign=top>列出可用数据库 (database)。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_list_tables.php" alt="function.php?msql_list_tables">msql_list_tables</a>:</td><td valign=top>列出指定数据库的资料表 (table)。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_listtables.php" alt="function.php?msql_listtables">msql_listtables</a>:</td><td valign=top>列出指定数据库的资料表 (table)。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_num_fields.php" alt="function.php?msql_num_fields">msql_num_fields</a>:</td><td valign=top>取得返回字段的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_num_rows.php" alt="function.php?msql_num_rows">msql_num_rows</a>:</td><td valign=top>取得返回列的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_numfields.php" alt="function.php?msql_numfields">msql_numfields</a>:</td><td valign=top>取得返回字段的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_numrows.php" alt="function.php?msql_numrows">msql_numrows</a>:</td><td valign=top>取得返回列的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_pconnect.php" alt="function.php?msql_pconnect">msql_pconnect</a>:</td><td valign=top>打开 mSQL 服务器持续连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_query.php" alt="function.php?msql_query">msql_query</a>:</td><td valign=top>送出一个 query 字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_regcase.php" alt="function.php?msql_regcase">msql_regcase</a>:</td><td valign=top>将字符串逐字返回大小写字符。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_result.php" alt="function.php?msql_result">msql_result</a>:</td><td valign=top>取得查询 (query) 的结果。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_select_db.php" alt="function.php?msql_select_db">msql_select_db</a>:</td><td valign=top>选择一个数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_selectdb.php" alt="function.php?msql_selectdb">msql_selectdb</a>:</td><td valign=top>选择一个数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-msql_tablename.php" alt="function.php?msql_tablename">msql_tablename</a>:</td><td valign=top>返回指定资料表的名称。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-30.php" alt="group.php?30">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-32.php" alt="group.php?32">下一页</a> 
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
