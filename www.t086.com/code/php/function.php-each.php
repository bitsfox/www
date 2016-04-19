<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:each()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:each()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">数组处理函数库</a></div><br><h1><font color=0000bb>each</font></h1><p>
返回数组中下一个元素的索引及值。<p>
<font color=ff8000>语法:</font> <b>array each(array array);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>返回数组为目前数组指针的 索引/值 对。返回的数组有四个元素，依序为 0, 1, 索引, 及值。前述的 0 与 索引 为数组的索引，1 与 值则为数组元素的值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
范例一:<br><font color="#0000BB">&lt;?<br>$foo&nbsp;</font><font color="#007700">=&nbsp;array(&nbsp;</font><font color="#DD0000">"bob"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"fred"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"jussi"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"jouni"&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">$bar&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$foo&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>上面的例子，返回数组&nbsp;$bar&nbsp;的&nbsp;索引/值&nbsp;为<br>0&nbsp;=&gt;&nbsp;0<br>1&nbsp;=&gt;&nbsp;'bob'<br>key&nbsp;=&gt;&nbsp;0<br>value&nbsp;=&gt;&nbsp;'bob'<br><br>范例二:<br><font color="#0000BB">&lt;?<br>$foo&nbsp;</font><font color="#007700">=&nbsp;array(&nbsp;</font><font color="#DD0000">"Robert"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"Bob"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Seppo"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"Sepi"&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">$bar&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$foo&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>这个的例子，返回数组&nbsp;$bar&nbsp;的&nbsp;索引/值&nbsp;为<br>0&nbsp;=&gt;&nbsp;'Robert'<br>1&nbsp;=&gt;&nbsp;'Bob'<br>key&nbsp;=&gt;&nbsp;'Robert'<br>value&nbsp;=&gt;&nbsp;'Bob'<br><br>范例三:&nbsp;&nbsp;<br>each()&nbsp;函数最典型的例子是拿来与&nbsp;list()&nbsp;函数合用，如下例的&nbsp;$HTTP_POST_VARS&nbsp;变量。<br><font color="#0000BB">&lt;?<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"POST&nbsp;所送出的值为:&lt;br&gt;"</font><font color="#007700">;<br>while&nbsp;(&nbsp;list(&nbsp;</font><font color="#0000BB">$key</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$val&nbsp;</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$HTTP_POST_VARS&nbsp;</font><font color="#007700">)&nbsp;)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$key&nbsp;=&gt;&nbsp;$val&lt;br&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-current.php" alt="function.php?current">current()</a> &nbsp;<a href="function.php-key.php" alt="function.php?key">key()</a> &nbsp;<a href="function.php-list.php" alt="function.php?list">list()</a> &nbsp;<a href="function.php-next.php" alt="function.php?next">next()</a> &nbsp;<a href="function.php-prev.php" alt="function.php?prev">prev()</a> &nbsp;<a href="function.php-reset.php" alt="function.php?reset">reset()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-current.php" alt="function.php?current">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-end.php" alt="function.php?end">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
