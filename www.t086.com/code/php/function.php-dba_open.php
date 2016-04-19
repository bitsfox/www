<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:dba_open()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:dba_open()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-9.php" alt="group.php?9">DBA 函数库</a></div><br><h1><font color=0000bb>dba_open</font></h1><p>
打开数据库链接。<p>
<font color=ff8000>语法:</font> <b>int dba_open(string path, string mode, string handler);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来打开指定的数据库。参数 path 为数据库的路径及数据库名称，例如 "/tmp/mysite/wahaha.db"。参数 mode 值如下表<p>

<table border=1>
<tr><th>属性</th><th>说明</th></tr>
<tr><td>r</td><td>打开只读既有数据库</td></tr>
<tr><td>w</td><td>打开可读写既有数据库</td></tr>
<tr><td>c</td><td>打开可读写数据库，若不存在则建立</td></tr>
<tr><td>n</td><td>删去现有数据库，若不存在则建立，之后可读写</td></tr>
</table><p>

参数 handler 为打开数据库的种类，有 dbm、ndbm、gdbm、db2 或 cdb 等种类。返回值为数据库的代号 ID，若失败则返回 false。本函数和 <a href="function.php-dba_popen.php" alt="function.php?dba_popen">dba_popen()</a> 不同的地方在于本函数打开的数据库在 PHP 程序结束后即关闭，<a href="function.php-dba_popen.php" alt="function.php?dba_popen">dba_popen()</a> 会保持与数据库连接，待下次再执行，则不必再打开与数据库的链接。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-dba_close.php" alt="function.php?dba_close">dba_close()</a> &nbsp;<a href="function.php-dba_popen.php" alt="function.php?dba_popen">dba_popen()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-dba_popen.php" alt="function.php?dba_popen">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-dba_optimize.php" alt="function.php?dba_optimize">下一页</a> 
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
