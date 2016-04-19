<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:sybase_pconnect()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:sybase_pconnect()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-34.php" alt="group.php?34">Sybase 数据库函数库</a></div><br><h1><font color=0000bb>sybase_pconnect</font></h1><p>
打开服务器持续连接。<p>
<font color=ff8000>语法:</font> <b>int sybase_pconnect(string [servername], string [username], string [password]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数和 <a href="function.php-sybase_connect.php" alt="function.php?sybase_connect">sybase_connect()</a> 雷同。不同的地方在于使用本函数打开数据库时，程序会先寻找是否曾经执行过本函数，若执行过则返回先前执行的 ID。另一个不同的地方是本函数无法使用 <a href="function.php-sybase_close.php" alt="function.php?sybase_close">sybase_close()</a> 关闭数据库。参数 servername 为欲连上的数据库服务器名称。参数 username 及 password 可省略，分别为连接使用的帐号及密码。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-sybase_num_rows.php" alt="function.php?sybase_num_rows">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-sybase_query.php" alt="function.php?sybase_query">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
