<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:session_name()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:session_name()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-54.php" alt="group.php?54">Session 函数库</a></div><br><h1><font color=0000bb>session_name</font></h1><p>
存取目前 session 名称。<p>
<font color=ff8000>语法:</font> <b>string session_name(string [name]);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可取得或者重新配置目前 Session 的名称。若无参数 name 则表示单单获取目前 Session 名称，加上参数则表示将 Session 名称设为参数 name。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下面的范例为&nbsp;Session&nbsp;片段程序<br><br><font color="#0000BB">&lt;?php<br>$username</font><font color="#007700">=</font><font color="#DD0000">"guest1"</font><font color="#007700">;<br>if(isset(</font><font color="#0000BB">$username</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">session_name</font><font color="#007700">(</font><font color="#0000BB">$username</font><font color="#007700">);<br>}<br>echo&nbsp;</font><font color="#DD0000">"您是&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">session_name</font><font color="#007700">().</font><font color="#DD0000">"\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-session_destroy.php" alt="function.php?session_destroy">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-session_module_name.php" alt="function.php?session_module_name">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
