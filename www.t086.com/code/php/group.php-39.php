<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - Oracle 数据库函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>Oracle 数据库函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 22 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>要使用这个函数库，要在安装 PHP 及 Apache Server 之前先将 Oracle 数据库安装好，并确定 Oracle 能够顺利运作。之后在 PHP 配置 (configure) 时加入 --with-oracle=DIR 的选项，DIR 就是 $ORACLE_HOME 环境变量，例如：<p>

<code>  ./configure --with-oracle=/abc/def/oracle/product/7.0.3 --with-apache=../apache_1.3.x --enable-track-vars</code><p>

以下的范例是 stevel@nettek-llc.com (22-Jan-1999) 所提供的。这个范例是返回 Oracle 中 sid1 数据库 (Database) 的 EMP 资料表 (Table) 所有资料。帐号是 SCOTT、密码为 TIGER。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br><br>putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=sid1"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/u01/app/oracle/product/8.0.5"</font><font color="#007700">);<br><br></font><font color="#0000BB">$handle&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ora_plogon</font><font color="#007700">(</font><font color="#DD0000">"SCOTT@sid1"</font><font color="#007700">,&nbsp;&nbsp;</font><font color="#DD0000">"TIGER"</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">$cursor&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;EMP"</font><font color="#007700">;<br></font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br><br>echo&nbsp;&nbsp;</font><font color="#DD0000">"&lt;HTML&gt;&lt;PRE&gt;\n"</font><font color="#007700">;<br>echo&nbsp;&nbsp;</font><font color="#DD0000">"$query</font><font color="#007700">\n\n</font><font color="#DD0000">"</font><font color="#007700">;<br></font><font color="#0000BB">$numcols&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>while(</font><font color="#0000BB">ora_fetch</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$numcols&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ora_numcols</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</font><font color="#0000BB">$column</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$column&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">$numcols</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$column</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">trim</font><font color="#007700">(</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$column</font><font color="#007700">));<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">==&nbsp;&nbsp;</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"NULL"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&nbsp;</font><font color="#DD0000">"$data</font><font color="#007700">\t</font><font color="#DD0000">"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&nbsp;</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">$numrows&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ora_numrows</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>echo&nbsp;&nbsp;</font><font color="#DD0000">"</font><font color="#007700">\n</font><font color="#DD0000">ROWS&nbsp;RETURNED:&nbsp;$numrows</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>echo&nbsp;&nbsp;</font><font color="#DD0000">"&lt;/PRE&gt;&lt;/HTML&gt;\n"</font><font color="#007700">;<br><br></font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br><br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

kk@shonline.de (05-Aug-1998) 指出 ORACLE_HOME 为 Oracle 的安装路径，ORACLE_SID 为 Oracle 的数据库名称，若不知道这二个环境变量可以用 sqlplus 连上 Oracle 来查证。<p>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-Ora_Bind.php" alt="function.php?Ora_Bind">Ora_Bind</a>:</td><td valign=top>链接 PHP 变量到 Oracle 参数。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Close.php" alt="function.php?Ora_Close">Ora_Close</a>:</td><td valign=top>关闭一个 Oracle 的 cursor。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_ColumnName.php" alt="function.php?Ora_ColumnName">Ora_ColumnName</a>:</td><td valign=top>得到 Oracle 返回列 (Column) 的名称。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_ColumnType.php" alt="function.php?Ora_ColumnType">Ora_ColumnType</a>:</td><td valign=top>得到 Oracle 返回列 (Column) 的类型。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Commit.php" alt="function.php?Ora_Commit">Ora_Commit</a>:</td><td valign=top>将 Oracle 的交易处理付诸实行。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_CommitOff.php" alt="function.php?Ora_CommitOff">Ora_CommitOff</a>:</td><td valign=top>关闭自动执行 Oracle 交易改动的功能。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_CommitOn.php" alt="function.php?Ora_CommitOn">Ora_CommitOn</a>:</td><td valign=top>打开自动执行 Oracle 交易改动的功能。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Error.php" alt="function.php?Ora_Error">Ora_Error</a>:</td><td valign=top>获得 Oracle 错误信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_ErrorCode.php" alt="function.php?Ora_ErrorCode">Ora_ErrorCode</a>:</td><td valign=top>获得 Oracle 错误代码。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Exec.php" alt="function.php?Ora_Exec">Ora_Exec</a>:</td><td valign=top>执行 Oracle 的指令部分。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Fetch.php" alt="function.php?Ora_Fetch">Ora_Fetch</a>:</td><td valign=top>取得返回资料的一列 (row)。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_GetColumn.php" alt="function.php?Ora_GetColumn">Ora_GetColumn</a>:</td><td valign=top>从返回列 (row) 的资料取得一栏 (column)。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Logoff.php" alt="function.php?Ora_Logoff">Ora_Logoff</a>:</td><td valign=top>结束与 Oracle 的链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Logon.php" alt="function.php?Ora_Logon">Ora_Logon</a>:</td><td valign=top>打开与 Oracle 的链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Open.php" alt="function.php?Ora_Open">Ora_Open</a>:</td><td valign=top>打开 Oracle 的 cursor。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Parse.php" alt="function.php?Ora_Parse">Ora_Parse</a>:</td><td valign=top>分析 SQL 语法。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Rollback.php" alt="function.php?Ora_Rollback">Ora_Rollback</a>:</td><td valign=top>撤消当前交易。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Do.php" alt="function.php?Ora_Do">Ora_Do</a>:</td><td valign=top>快速的 SQL 查询。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_FetchInto.php" alt="function.php?Ora_FetchInto">Ora_FetchInto</a>:</td><td valign=top>取回 Oracle 资料放入数组。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_ColumnSize.php" alt="function.php?Ora_ColumnSize">Ora_ColumnSize</a>:</td><td valign=top>取得字段类型的大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Numcols.php" alt="function.php?Ora_Numcols">Ora_Numcols</a>:</td><td valign=top>取得字段的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_PLogon.php" alt="function.php?Ora_PLogon">Ora_PLogon</a>:</td><td valign=top>打开与 Oracle 的长期链接。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-38.php" alt="group.php?38">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-40.php" alt="group.php?40">下一页</a> 
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
