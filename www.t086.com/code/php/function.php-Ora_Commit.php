<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:Ora_Commit()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:Ora_Commit()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-39.php" alt="group.php?39">Oracle 数据库函数库</a></div><br><h1><font color=0000bb>Ora_Commit</font></h1><p>
将 Oracle 的交易处理付诸实行。<p>
<font color=ff8000>语法:</font> <b>int ora_commit(int conn);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>返回值 true 表示成功，false 表示发生错误。详细的错误纠错可以使用 <a href="function.php-ora_error.php" alt="function.php?ora_error">ora_error()</a> 及 <a href="function.php-ora_errorcode.php" alt="function.php?ora_errorcode">ora_errorcode()</a>。本函数会将最近一次 commit/rollback 后的交易 (transaction) 做永久性的修改，当与 Oracle 数据库连接确认后自动执行功能 (autocommit) 会关闭。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-Ora_ColumnType.php" alt="function.php?Ora_ColumnType">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-Ora_CommitOff.php" alt="function.php?Ora_CommitOff">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
