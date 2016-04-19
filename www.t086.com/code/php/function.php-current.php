<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:current()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:current()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">数组处理函数库</a></div><br><h1><font color=0000bb>current</font></h1><p>
返回数组中目前的元素。<p>
<font color=ff8000>语法:</font> <b>mixed current(array array);</b><p>
<font color=ff8000>返回值:</font> 混合类型资料<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>说明:  每一个数组变量都有一个内部指针，指到它的每一个元素。此外，为了交互参考，数组有份所有元素的双向链结表。数组的内部指针指到原先插入的元素上，直到程序执行到有改动数组指针的函数。函数 current() 简单地返回数组元素中目前指到的数组内部指针。它不会改变指针的值，若数组指针指到内部指针表外，则返回 false 的值。<p><b>注意</b>:  若数组中包含空的元素 (0 或者 "" 空字符串)，则本函数会返回 false 值。要是目前元素是个零值的空元素或者是超出数组指针，结果当然是未定的 false 值。遇到这种情形，可以使用 <a href="function.php-each.php" alt="function.php?each">each()</a> 函数会更适合。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-end.php" alt="function.php?end">end()</a> &nbsp;<a href="function.php-next.php" alt="function.php?next">next()</a> &nbsp;<a href="function.php-prev.php" alt="function.php?prev">prev()</a> &nbsp;<a href="function.php-reset.php" alt="function.php?reset">reset()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-count.php" alt="function.php?count">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-each.php" alt="function.php?each">下一页</a> 
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
