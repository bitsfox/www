<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:mysql_connect()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mysql_connect()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-33.php" alt="group.php?33">MySQL 数据库函数库</a></div><br><h1><font color=0000bb>mysql_connect</font></h1><p>
打开 MySQL 服务器连接。<p>
<font color=ff8000>语法:</font> <b>int mysql_connect(string [hostname] [:port], string [username], string [password]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数建立与 MySQL 服务器的连接。其中所有的参数都可省略。当使用本函数却不加任何参数时，参数 hostname 的默认值为 localhost、参数 username 的默认值为 PHP 执行行程的拥有者、参数 password 则为空字符串 (即没有密码)。而参数 hostname 后面可以加冒号与埠号，代表使用那个埠与 MySQL 连接。当然在使用数据库时，早点使用 <a href="function.php-mysql_close.php" alt="function.php?mysql_close">mysql_close()</a> 将连接关掉可以节省资源。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
这是一位未具名网友提供的范例&nbsp;(18-Feb-1999)
<br><font color="#0000BB">&lt;?php
<br>$dbh&nbsp;</font><font color="#007700">=&nbsp;&nbsp;</font><font color="#0000BB">mysql_connect</font><font color="#007700">(</font><font color="#DD0000">'localhost:3306'</font><font color="#007700">,</font><font color="#DD0000">'mcclain'</font><font color="#007700">,</font><font color="#DD0000">'standard'</font><font color="#007700">);
<br></font><font color="#0000BB">mysql_select_db</font><font color="#007700">(</font><font color="#DD0000">'admreqs'</font><font color="#007700">);
<br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"insert&nbsp;into&nbsp;requests(date,&nbsp;request,&nbsp;email,&nbsp;priority,status)&nbsp;values&nbsp;(NOW(),'$description',&nbsp;'$email',&nbsp;'$priority',&nbsp;'NEW')"</font><font color="#007700">;
<br></font><font color="#0000BB">$res&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_query</font><font color="#007700">(</font><font color="#0000BB">$query</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$dbh</font><font color="#007700">);
<br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"select&nbsp;max(id)&nbsp;from&nbsp;requests"</font><font color="#007700">;
<br></font><font color="#0000BB">$res&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_query</font><font color="#007700">(</font><font color="#0000BB">$query</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$dbh</font><font color="#007700">);
<br></font><font color="#0000BB">$err&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_error</font><font color="#007700">();
<br>if(</font><font color="#0000BB">$err</font><font color="#007700">){
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"发生错误，请通知&lt;a&nbsp;href=mailto:webmaster@my.site&gt;站长&lt;/a&gt;"</font><font color="#007700">;
<br>}
<br>&nbsp;&nbsp;</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_row</font><font color="#007700">(</font><font color="#0000BB">$res</font><font color="#007700">);
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"未来您使用的号码为:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];
<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-mysql_close.php" alt="function.php?mysql_close">mysql_close()</a> &nbsp;<a href="function.php-mysql_pconnect.php" alt="function.php?mysql_pconnect">mysql_pconnect()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mysql_close.php" alt="function.php?mysql_close">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-mysql_create_db.php" alt="function.php?mysql_create_db">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
