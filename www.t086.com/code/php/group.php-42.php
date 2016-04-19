<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - PostgreSQL 数据库函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>PostgreSQL 数据库函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 32 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>Postgres 数据库是由柏克莱大学电脑科学系所开发的数据库系统，为类关联式数据库的先驱。它提供 
              SQL92/SQL3 语法。PostgreSQL 是公开使用的免费系统。更多细节可在 <a href="/to.asp?url=http://www.postgresql.org/" tppabs="/to.asp?url=http://www.postgresql.org/">http://www.PostgreSQL.org</a> 
              站上看到。
              <p> 在 phpWizard.net 网站上也有用 Browser 管理 PostgreSQL 的套装程序 <a href="/to.asp?url=http://www.phpwizard.net/PostgresAdmin/" tppabs="/to.asp?url=http://www.phpwizard.net/PostgresAdmin/">PostgresAdmin</a>。可以用它来轻松管理 
                PostgreSQL 数据库。
              <p>

在公元 1998 年的 PostgreSQL 6.3 版之后，可以使用 UNIX 上的 domain sockets。postmaster 加上参数 -i 就可以使用，PostgreSQL 系统会用到 /tmp/.s.PGSQL.5432 的文件。<p>

下面为使用 LOB (Large Object) 的例子<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$database&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_Connect&nbsp;</font><font color="#007700">(</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"jacarta"</font><font color="#007700">);<br></font><font color="#0000BB">pg_exec&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"begin"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$oid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_locreate&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;(</font><font color="#DD0000">"$oid</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$handle&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_loopen&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$oid</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;(</font><font color="#DD0000">"$handle</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">pg_lowrite&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"gaga"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">pg_loclose&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">pg_exec&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"commit"</font><font color="#007700">)<br></font><font color="#0000BB">pg_exec&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"end"</font><font color="#007700">)<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-pg_Close.php" alt="function.php?pg_Close">pg_Close</a>:</td><td valign=top>关闭 PostgreSQL 服务器连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_cmdTuples.php" alt="function.php?pg_cmdTuples">pg_cmdTuples</a>:</td><td valign=top>取得被 SQL 指令影响的资料笔数。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Connect.php" alt="function.php?pg_Connect">pg_Connect</a>:</td><td valign=top>打开 PostgreSQL 服务器连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_DBname.php" alt="function.php?pg_DBname">pg_DBname</a>:</td><td valign=top>取得目前的数据库名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_ErrorMessage.php" alt="function.php?pg_ErrorMessage">pg_ErrorMessage</a>:</td><td valign=top>返回错误信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Exec.php" alt="function.php?pg_Exec">pg_Exec</a>:</td><td valign=top>执行 query 指令。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Fetch_Array.php" alt="function.php?pg_Fetch_Array">pg_Fetch_Array</a>:</td><td valign=top>返回数组资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Fetch_Object.php" alt="function.php?pg_Fetch_Object">pg_Fetch_Object</a>:</td><td valign=top>返回类资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Fetch_Row.php" alt="function.php?pg_Fetch_Row">pg_Fetch_Row</a>:</td><td valign=top>返回单列的各字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldIsNull.php" alt="function.php?pg_FieldIsNull">pg_FieldIsNull</a>:</td><td valign=top>检查字段是否有资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldName.php" alt="function.php?pg_FieldName">pg_FieldName</a>:</td><td valign=top>返回指定字段的名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldNum.php" alt="function.php?pg_FieldNum">pg_FieldNum</a>:</td><td valign=top>取得指定字段的行数。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldPrtLen.php" alt="function.php?pg_FieldPrtLen">pg_FieldPrtLen</a>:</td><td valign=top>计算可列示的长度。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldSize.php" alt="function.php?pg_FieldSize">pg_FieldSize</a>:</td><td valign=top>计算指定字段的长度。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldType.php" alt="function.php?pg_FieldType">pg_FieldType</a>:</td><td valign=top>获得目前字段的类型。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FreeResult.php" alt="function.php?pg_FreeResult">pg_FreeResult</a>:</td><td valign=top>释放返回占用内存。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_GetLastOid.php" alt="function.php?pg_GetLastOid">pg_GetLastOid</a>:</td><td valign=top>取得最后的类代码。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Host.php" alt="function.php?pg_Host">pg_Host</a>:</td><td valign=top>取得连接机器名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_loclose.php" alt="function.php?pg_loclose">pg_loclose</a>:</td><td valign=top>关闭大型类。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_locreate.php" alt="function.php?pg_locreate">pg_locreate</a>:</td><td valign=top>建立大型类。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_loopen.php" alt="function.php?pg_loopen">pg_loopen</a>:</td><td valign=top>打开大型类。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_loread.php" alt="function.php?pg_loread">pg_loread</a>:</td><td valign=top>读取大型类。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_loreadall.php" alt="function.php?pg_loreadall">pg_loreadall</a>:</td><td valign=top>读取大型类并输出。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_lounlink.php" alt="function.php?pg_lounlink">pg_lounlink</a>:</td><td valign=top>删除大型类。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_lowrite.php" alt="function.php?pg_lowrite">pg_lowrite</a>:</td><td valign=top>读取大型类。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_NumFields.php" alt="function.php?pg_NumFields">pg_NumFields</a>:</td><td valign=top>取得返回字段的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_NumRows.php" alt="function.php?pg_NumRows">pg_NumRows</a>:</td><td valign=top>取得返回列的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Options.php" alt="function.php?pg_Options">pg_Options</a>:</td><td valign=top>取得连接机器选项。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_pConnect.php" alt="function.php?pg_pConnect">pg_pConnect</a>:</td><td valign=top>打开 PostgreSQL 服务器持续连接。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Port.php" alt="function.php?pg_Port">pg_Port</a>:</td><td valign=top>取得连接机器埠号。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Result.php" alt="function.php?pg_Result">pg_Result</a>:</td><td valign=top>取得查询 (query) 的结果。</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_tty.php" alt="function.php?pg_tty">pg_tty</a>:</td><td valign=top>取得连接机器终端机。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-41.php" alt="group.php?41">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-43.php" alt="group.php?43">下一页</a> 
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
