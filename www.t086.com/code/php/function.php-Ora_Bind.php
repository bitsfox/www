<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:Ora_Bind()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:Ora_Bind()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-39.php" alt="group.php?39">Oracle 数据库函数库</a></div><br><h1><font color=0000bb>Ora_Bind</font></h1><p>
链接 PHP 变量到 Oracle 参数。<p>
<font color=ff8000>语法:</font> <b>int ora_bind(int cursor, string PHP variable name, string SQL parameter name, int length, int [type]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将 PHP 变量与 SQL 参数系结在一起。SQL 参数 (SQL parameter) 必须是类似 ":name" 的型式。语法中的 type 为可省略的参数选项，可以设成下面三种数字之一：0 为默认值，表输入/输出 (in/out)；1 表输入 (in)；2 表输出 (out)。在 PHP 3.0.1 版之后，亦可以使用下列常量代替 type 的三种数字值：ORA_BIND_INOUT、ORA_BIND_IN 或 ORA_BIND_OUT。重要的是本函数应是在 <a href="function.php-ora_parse.php" alt="function.php?ora_parse">ora_parse()</a> 之后与 <a href="function.php-ora_exec.php" alt="function.php?ora_exec">ora_exec()</a> 之前呼叫使用。若成功则返回 true，反之返回 false。要处理详细的错误信息可使用 <a href="function.php-ora_error.php" alt="function.php?ora_error">ora_error()</a> 及 <a href="function.php-ora_errorcode.php" alt="function.php?ora_errorcode">ora_errorcode()</a>。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>ora_parse</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"declare&nbsp;tmp&nbsp;INTEGER;&nbsp;begin&nbsp;tmp&nbsp;:=&nbsp;:in;&nbsp;:out&nbsp;:=&nbsp;tmp;&nbsp;:x&nbsp;:=&nbsp;7.77;&nbsp;end;"</font><font color="#007700">);<br></font><font color="#0000BB">ora_bind</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"result"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">":x"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$len</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">);<br></font><font color="#0000BB">ora_bind</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"input"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">":in"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">5</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">ora_bind</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"output"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">":out"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">5</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">);<br></font><font color="#0000BB">$input&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">765</font><font color="#007700">;<br></font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"Result:&nbsp;$result&lt;BR&gt;Out:&nbsp;$output&lt;BR&gt;In:&nbsp;$input"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[ </td> <td> <a href="function.php-Ora_Close.php" alt="function.php?Ora_Close">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
