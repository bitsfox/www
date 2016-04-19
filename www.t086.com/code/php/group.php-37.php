<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ODBC 数据库链接函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>ODBC 数据库链接函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 25 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>开放资料链接 (Open Database Connectivity, ODBC) 是链接数据库的共通界面。ODBC 是由微软主导的数据库链接标准，实作环境也以微软的系统最成熟。在 UNIX 系统中，通常要使用其它厂商所提供的 ODBC 界面，有些 UNIX 厂商会自己提供 ODBC 界面 (如 SUN 有为 Solaris 提供 ODBC)。<p>

ODBC 和数据库的查询采用 SQL 语言，这和大部份的数据库查询方式一样，这使得系统可以很容易和各种数据库沟通。当然，透过 ODBC 界面，后端的数据库不一定要 DBMS 这种大型数据库系统，亦可以是资料表 (如 Microsoft Access)、或者是试算表 (如 Microsoft Excel)。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-odbc_autocommit.php" alt="function.php?odbc_autocommit">odbc_autocommit</a>:</td><td valign=top>开关自动改动功能。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_binmode.php" alt="function.php?odbc_binmode">odbc_binmode</a>:</td><td valign=top>配置二进位资料处理方式。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_close.php" alt="function.php?odbc_close">odbc_close</a>:</td><td valign=top>关闭 ODBC 链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_close_all.php" alt="function.php?odbc_close_all">odbc_close_all</a>:</td><td valign=top>关闭所有 ODBC 链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_commit.php" alt="function.php?odbc_commit">odbc_commit</a>:</td><td valign=top>改动 ODBC 数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_connect.php" alt="function.php?odbc_connect">odbc_connect</a>:</td><td valign=top>链接至 ODBC 数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_cursor.php" alt="function.php?odbc_cursor">odbc_cursor</a>:</td><td valign=top>取得游标名。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_do.php" alt="function.php?odbc_do">odbc_do</a>:</td><td valign=top>执行 SQL 指令。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_exec.php" alt="function.php?odbc_exec">odbc_exec</a>:</td><td valign=top>执行 SQL 指令。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_execute.php" alt="function.php?odbc_execute">odbc_execute</a>:</td><td valign=top>执行预置 SQL 指令。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_fetch_into.php" alt="function.php?odbc_fetch_into">odbc_fetch_into</a>:</td><td valign=top>取得返回的指定列。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_fetch_row.php" alt="function.php?odbc_fetch_row">odbc_fetch_row</a>:</td><td valign=top>取得返回一列。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_field_name.php" alt="function.php?odbc_field_name">odbc_field_name</a>:</td><td valign=top>取得字段名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_field_type.php" alt="function.php?odbc_field_type">odbc_field_type</a>:</td><td valign=top>取得字段资料类型。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_field_len.php" alt="function.php?odbc_field_len">odbc_field_len</a>:</td><td valign=top>取得字段资料长度。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_free_result.php" alt="function.php?odbc_free_result">odbc_free_result</a>:</td><td valign=top>释出返回资料的内存。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_longreadlen.php" alt="function.php?odbc_longreadlen">odbc_longreadlen</a>:</td><td valign=top>配置返回栏的最大值。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_num_fields.php" alt="function.php?odbc_num_fields">odbc_num_fields</a>:</td><td valign=top>取得字段数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect</a>:</td><td valign=top>长期链接至 ODBC 数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_prepare.php" alt="function.php?odbc_prepare">odbc_prepare</a>:</td><td valign=top>预置 SQL 指令。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_num_rows.php" alt="function.php?odbc_num_rows">odbc_num_rows</a>:</td><td valign=top>取得返回列数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_result.php" alt="function.php?odbc_result">odbc_result</a>:</td><td valign=top>取得返回资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_result_all.php" alt="function.php?odbc_result_all">odbc_result_all</a>:</td><td valign=top>返回 HTML 表格资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_rollback.php" alt="function.php?odbc_rollback">odbc_rollback</a>:</td><td valign=top>撤消当前交易。</td></tr>
<tr><td align=right valign=top><a href="function.php-odbc_setoption.php" alt="function.php?odbc_setoption">odbc_setoption</a>:</td><td valign=top>调整 ODBC 配置。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-36.php" alt="group.php?36">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-38.php" alt="group.php?38">下一页</a> 
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
