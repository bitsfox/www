<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - DBA 函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>

<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>DBA 函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 12 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>在柏克莱的 BSD 系列操作系统中，有个简单的数据库结构，它以数个文件组成超小型的数据库系统，架构成抽象层 (abstraction layer) 的 DBA 数据库。<p>

目前 PHP 支持的 DBA 数据库包括
<ol type=1>
<li>dbm：柏克莱发展的最早期 DBA 数据库。
<li>ndbm：较新且较有弹性的 DBA。
                <li>gdbm：GNU 发展的 DBA，<a href="/to.asp?url=ftp://ftp.gnu.org/pub/gnu/gdbm/" tppabs="/to.asp?url=ftp://ftp.gnu.org/pub/gnu/gdbm/">ftp://ftp.gnu.org/pub/gnu/gdbm/</a> 
                <li>db2：由 Sleepycat 软件开发的 DB2 (非 IBM 的 DB2)，<a href="/to.asp?url=http://www.sleepycat.com/" tppabs="/to.asp?url=http://www.sleepycat.com/">http://www.sleepycat.com</a> 
                <li>cdb：这是 qmail 作者开发快速可靠的 DBA，<a href="/to.asp?url=http://pobox.com/%7Edjb/cdb.html" tppabs="/to.asp?url=http://pobox.com/~djb/cdb.html">http://pobox.com/~djb/cdb.html</a> 
              </ol><p>

以下是简单的使用范例，当然在使用前，必须先装好 DBA。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">dba_open</font><font color="#007700">(</font><font color="#DD0000">"/tmp/test.db"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"n"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"db2"</font><font color="#007700">);<br><br>if(!</font><font color="#0000BB">$id</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"dba_open&nbsp;failed\n"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>}<br><br></font><font color="#0000BB">dba_replace</font><font color="#007700">(</font><font color="#DD0000">"key"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"This&nbsp;is&nbsp;an&nbsp;example!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">);<br><br>if(</font><font color="#0000BB">dba_exists</font><font color="#007700">(</font><font color="#DD0000">"key"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">dba_fetch</font><font color="#007700">(</font><font color="#DD0000">"key"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">dba_delete</font><font color="#007700">(</font><font color="#DD0000">"key"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">);<br>}<br><br></font><font color="#0000BB">dba_close</font><font color="#007700">(</font><font color="#0000BB">$id</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td><td valign="top"></td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-dba_close.php" alt="function.php?dba_close">dba_close</a>:</td><td valign=top>关闭数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_delete.php" alt="function.php?dba_delete">dba_delete</a>:</td><td valign=top>删除指定资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_exists.php" alt="function.php?dba_exists">dba_exists</a>:</td><td valign=top>检查键是否存在。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_fetch.php" alt="function.php?dba_fetch">dba_fetch</a>:</td><td valign=top>取回指定资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_firstkey.php" alt="function.php?dba_firstkey">dba_firstkey</a>:</td><td valign=top>取回首笔键值。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_insert.php" alt="function.php?dba_insert">dba_insert</a>:</td><td valign=top>加入资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_nextkey.php" alt="function.php?dba_nextkey">dba_nextkey</a>:</td><td valign=top>取回下笔键值。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_popen.php" alt="function.php?dba_popen">dba_popen</a>:</td><td valign=top>打开并保持数据库链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_open.php" alt="function.php?dba_open">dba_open</a>:</td><td valign=top>打开数据库链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_optimize.php" alt="function.php?dba_optimize">dba_optimize</a>:</td><td valign=top>最佳化数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_replace.php" alt="function.php?dba_replace">dba_replace</a>:</td><td valign=top>改动或加入资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_sync.php" alt="function.php?dba_sync">dba_sync</a>:</td><td valign=top>数据库同步化。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-8.php" alt="group.php?8">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-10.php" alt="group.php?10">下一页</a> 
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
