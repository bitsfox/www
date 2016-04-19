<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - Informix 数据库函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>Informix 数据库函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 38 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>目前支持的 Informix 版本为 ODS 7.x、SE 7.x 与 Universal Server (IUS) 9.x 三种。在 ODS 7.x 的版本中，完全支持所有的资料类型，而在 IUS 9.x 中，不支持 SLOB 与 CLOB 二种类型。<p>

要在 Web Server 上安装 Informix Client 端，在编译 PHP 之前 (configure 之前)，要先设好 IFX_LIBDIR、IFX_LIBS 及 IFX_INCDIR 三种环境变量，若是 9.x 版尚要配置 HAVE_IFX_IUS 环境变量。同时在配置时要加入 --with_informix=yes 的选项。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-ifx_connect.php" alt="function.php?ifx_connect">ifx_connect</a>:</td><td valign=top>打开 Informix 服务器连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect</a>:</td><td valign=top>打开 Informix 服务器持续连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_close.php" alt="function.php?ifx_close">ifx_close</a>:</td><td valign=top>关闭 Informix 服务器连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_query.php" alt="function.php?ifx_query">ifx_query</a>:</td><td valign=top>送出一个 query 字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_prepare.php" alt="function.php?ifx_prepare">ifx_prepare</a>:</td><td valign=top>准备 query 字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_do.php" alt="function.php?ifx_do">ifx_do</a>:</td><td valign=top>执行已准备 query 字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_error.php" alt="function.php?ifx_error">ifx_error</a>:</td><td valign=top>取得 Informix 最后的错误。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_errormsg.php" alt="function.php?ifx_errormsg">ifx_errormsg</a>:</td><td valign=top>取得 Informix 最后错误信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_affected_rows.php" alt="function.php?ifx_affected_rows">ifx_affected_rows</a>:</td><td valign=top>得到 Informix 最后操作影响的列数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_getsqlca.php" alt="function.php?ifx_getsqlca">ifx_getsqlca</a>:</td><td valign=top>取得 query 后的 sqlca 信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_fetch_row.php" alt="function.php?ifx_fetch_row">ifx_fetch_row</a>:</td><td valign=top>返回单列的各字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_htmltbl_result.php" alt="function.php?ifx_htmltbl_result">ifx_htmltbl_result</a>:</td><td valign=top>将 query 返回资料转成 HTML 表格。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_fieldtypes.php" alt="function.php?ifx_fieldtypes">ifx_fieldtypes</a>:</td><td valign=top>列出 Informix 的 SQL 字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_fieldproperties.php" alt="function.php?ifx_fieldproperties">ifx_fieldproperties</a>:</td><td valign=top>列出 Informix 的 SQL 字段属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_num_fields.php" alt="function.php?ifx_num_fields">ifx_num_fields</a>:</td><td valign=top>取得返回字段的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_num_rows.php" alt="function.php?ifx_num_rows">ifx_num_rows</a>:</td><td valign=top>取得返回列的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_free_result.php" alt="function.php?ifx_free_result">ifx_free_result</a>:</td><td valign=top>释放返回占用内存。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_create_char.php" alt="function.php?ifx_create_char">ifx_create_char</a>:</td><td valign=top>建立字符类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_free_char.php" alt="function.php?ifx_free_char">ifx_free_char</a>:</td><td valign=top>删除字符类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_update_char.php" alt="function.php?ifx_update_char">ifx_update_char</a>:</td><td valign=top>更改字符类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_get_char.php" alt="function.php?ifx_get_char">ifx_get_char</a>:</td><td valign=top>取得字符类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_create_blob.php" alt="function.php?ifx_create_blob">ifx_create_blob</a>:</td><td valign=top>建立长位类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_copy_blob.php" alt="function.php?ifx_copy_blob">ifx_copy_blob</a>:</td><td valign=top>复制长位类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_free_blob.php" alt="function.php?ifx_free_blob">ifx_free_blob</a>:</td><td valign=top>删除长位类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_get_blob.php" alt="function.php?ifx_get_blob">ifx_get_blob</a>:</td><td valign=top>取得长位类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_update_blob.php" alt="function.php?ifx_update_blob">ifx_update_blob</a>:</td><td valign=top>更改长位类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_blobinfile_mode.php" alt="function.php?ifx_blobinfile_mode">ifx_blobinfile_mode</a>:</td><td valign=top>配置长位类模式。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_textasvarchar.php" alt="function.php?ifx_textasvarchar">ifx_textasvarchar</a>:</td><td valign=top>配置文字模式默认值。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_byteasvarchar.php" alt="function.php?ifx_byteasvarchar">ifx_byteasvarchar</a>:</td><td valign=top>配置位组模式默认值。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_nullformat.php" alt="function.php?ifx_nullformat">ifx_nullformat</a>:</td><td valign=top>配置空字符模式默认值。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_create_slob.php" alt="function.php?ifxus_create_slob">ifxus_create_slob</a>:</td><td valign=top>建立 slob 类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifx_free_slob.php" alt="function.php?ifx_free_slob">ifx_free_slob</a>:</td><td valign=top>删除 slob 类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_close_slob.php" alt="function.php?ifxus_close_slob">ifxus_close_slob</a>:</td><td valign=top>删除 slob 类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_open_slob.php" alt="function.php?ifxus_open_slob">ifxus_open_slob</a>:</td><td valign=top>打开 slob 类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_tell_slob.php" alt="function.php?ifxus_tell_slob">ifxus_tell_slob</a>:</td><td valign=top>返回目前文件或找寻位置。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_seek_slob.php" alt="function.php?ifxus_seek_slob">ifxus_seek_slob</a>:</td><td valign=top>配置目前文件或找寻位置。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_read_slob.php" alt="function.php?ifxus_read_slob">ifxus_read_slob</a>:</td><td valign=top>读取指定数目的 slob 类。</td></tr>
<tr><td align=right valign=top><a href="function.php-ifxus_write_slob.php" alt="function.php?ifxus_write_slob">ifxus_write_slob</a>:</td><td valign=top>将字符串写入 slob 类中。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-22.php" alt="group.php?22">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-24.php" alt="group.php?24">下一页</a> 
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
