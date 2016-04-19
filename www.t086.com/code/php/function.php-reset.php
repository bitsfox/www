<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:reset()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:reset()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">数组处理函数库</a></div><br><h1><font color=0000bb>reset</font></h1><p>
将数组的指针指到数组第一个元素。<p>
<font color=ff8000>语法:</font> <b>mixed reset(array array);</b><p>
<font color=ff8000>返回值:</font> 混合类型资料<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将数组的指针重设，将指针改指到数组的第一个元素。返回值的内容也是数组的第一个元素。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
技巧:&nbsp;&nbsp;<br>kk@shonline.de&nbsp;指出&nbsp;(30-Jul-1998)，当数组的资料不够稳定时，使用&nbsp;reset()&nbsp;会有警告信息。最常发生的时候是处理&nbsp;HTML&nbsp;表单(form)的输入资料时，若用户输入的资料不够充份，或用户故意增删输入&nbsp;(input)&nbsp;字段，就有可能会有警告信息。用&nbsp;@reset()&nbsp;的方式可使警告信息不出现&nbsp;(在&nbsp;reset()&nbsp;前加&nbsp;@)，不过这只是掩耳盗铃的方式；要斧底抽薪的方法是使用&nbsp;if&nbsp;(isset())&nbsp;的方式&nbsp;(参见&nbsp;4.48.14&nbsp;isset()&nbsp;函数)，如下例<br><br><font color="#0000BB">&lt;?<br></font><font color="#007700">if&nbsp;(isset(</font><font color="#0000BB">$form_array</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">reset</font><font color="#007700">(</font><font color="#0000BB">$form_array</font><font color="#007700">);<br>&nbsp;&nbsp;while&nbsp;(list(</font><font color="#0000BB">$k</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$v</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$form_array</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">do_something</font><font color="#007700">(</font><font color="#0000BB">$k</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$v</font><font color="#007700">);<br>&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-current.php" alt="function.php?current">current()</a> &nbsp;<a href="function.php-each.php" alt="function.php?each">each()</a> &nbsp;<a href="function.php-next.php" alt="function.php?next">next()</a> &nbsp;<a href="function.php-prev.php" alt="function.php?prev">prev()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-range.php" alt="function.php?range">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-rsort.php" alt="function.php?rsort">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
