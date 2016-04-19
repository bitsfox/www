<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:Ora_Error()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:Ora_Error()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-39.php" alt="group.php?39">Oracle 数据库函数库</a></div><br><h1><font color=0000bb>Ora_Error</font></h1><p>
获得 Oracle 错误信息。<p>
<font color=ff8000>语法:</font> <b>string Ora_Error(int cursor);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>返回类似 XXX-NNNNN 格式的错误信息，其中的 XXX 表示错误发生的地方 NNNNN 用来验证错误的信息。在 UNIX 版的 Oracle 上，可以找到类似以下的错误信息详细说明：<p>
<pre>
oerr ora 00001

00001, 00000, "unique constraint (%s.%s) violated"
// *Cause: An update or insert statement attempted to insert a duplicate key
//         For Trusted ORACLE configured in DBMS MAC mode, you may see
//         this message if a duplicate entry exists at a different level.
// *Action: Either remove the unique restriction or do not insert the key
</pre><p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-Ora_CommitOn.php" alt="function.php?Ora_CommitOn">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-Ora_ErrorCode.php" alt="function.php?Ora_ErrorCode">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
