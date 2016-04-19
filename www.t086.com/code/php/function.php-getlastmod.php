<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:getlastmod()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:getlastmod()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-22.php" alt="group.php?22">PHP 选项及相关信息函数库</a></div><br><h1><font color=0000bb>getlastmod</font></h1><p>
返回该网页的最后修改时间。<p>
<font color=ff8000>语法:</font> <b>int getlastmod(void);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> PHP 系统功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数返回让该函数所网页的最后修改时间，返回的是 UNIX 的时间戳记 (timestamp) 格式，可用 4.7.2 date() 函数将返回值格式化。若执行失败则返回 false 值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下例返回值类似&nbsp;'本页最后修改时间:&nbsp;June&nbsp;19&nbsp;1999&nbsp;20:43:59.'<br><br><font color="#0000BB">&lt;?php<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"本页最后修改时间:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"F&nbsp;d&nbsp;Y&nbsp;H:i:s."</font><font color="#007700">,&nbsp;</font><font color="#0000BB">getlastmod</font><font color="#007700">());<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-date.php" alt="function.php?date">date()</a> &nbsp;<a href="function.php-getmyuid.php" alt="function.php?getmyuid">getmyuid()</a> &nbsp;<a href="function.php-get_current_user.php" alt="function.php?get_current_user">get_current_user()</a> &nbsp;<a href="function.php-getmyinode.php" alt="function.php?getmyinode">getmyinode()</a> &nbsp;<a href="function.php-getmypid.php" alt="function.php?getmypid">getmypid()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-get_magic_quotes_runtime.php" alt="function.php?get_magic_quotes_runtime">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-getmyinode.php" alt="function.php?getmyinode">下一页</a> 
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
