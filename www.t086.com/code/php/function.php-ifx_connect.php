<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ifx_connect()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ifx_connect()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix 数据库函数库</a></div><br><h1><font color=0000bb>ifx_connect</font></h1><p>
打开 Informix 服务器连接。<p>
<font color=ff8000>语法:</font> <b>int ifx_connect(string [database], string [userid], string [password]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数建立与 Informix 服务器的连接。其中所有的参数都可省略。若全部参数都省略时，使用系统的 php3.ini 或是 php.ini (视 PHP 版本决定) 中 ifx.default_host 指定的机器，或是环境变量 $INFORMIXSERVER；ifx.default_user 为用户帐号；ifx.default_password 为用户密码。而参数 database、userid 及 password 分别为数据库的名字、登入帐号及使用密码。当然，在使用本函数之后，尽早使用 <a href="function.php-ifx_close.php" alt="function.php?ifx_close">ifx_close()</a> 关闭 Informix 数据库比较好。连接成功则返回连接代码，失败则返回 false 值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
本例只有连上数据库，什么事都没做。<br><br><font color="#0000BB">&lt;?php<br>$conn_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_pconnect</font><font color="#007700">(</font><font color="#DD0000">"mydb@ol_srv1"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"imyself"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"mypassword"</font><font color="#007700">);<br></font><font color="#0000BB">ifx_close</font><font color="#007700">(</font><font color="#0000BB">$conn_id</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> &nbsp;<a href="function.php-ifx_close.php" alt="function.php?ifx_close">ifx_close()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-set_time_limit.php" alt="function.php?set_time_limit">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">下一页</a> 
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
