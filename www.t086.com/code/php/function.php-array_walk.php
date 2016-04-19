<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:array_walk()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:array_walk()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">数组处理函数库</a></div><br><h1><font color=0000bb>array_walk</font></h1><p>
让使用者自订函数能处理数组中的每一个元素。<p>
<font color=ff8000>语法:</font> <b>int array_walk(array arr, string func);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>此函数使每个数组元素 arr 依序与函数名称 func 相对应。元素传送到函数 func 的第一个参数，若参数超过一个，则每次都会有警告信息。要处理警告信息，可在本函数前面加上 '@' 字符 (变成 @array_walk)；或是使用 <a href="function.php-error_reporting.php" alt="function.php?error_reporting">error_reporting</a> 函数。<p><b>注意</b>:  使用者自订函数 func 真的会将数组元素 arr 依序代入，所以任何对元素所做的改变都会影响到数组本身。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$fruits&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"d"</font><font color="#007700">=&gt;</font><font color="#DD0000">"lemon"</font><font color="#007700">,</font><font color="#DD0000">"a"</font><font color="#007700">=&gt;</font><font color="#DD0000">"orange"</font><font color="#007700">,</font><font color="#DD0000">"b"</font><font color="#007700">=&gt;</font><font color="#DD0000">"banana"</font><font color="#007700">,</font><font color="#DD0000">"c"</font><font color="#007700">=&gt;</font><font color="#DD0000">"apple"</font><font color="#007700">);<br><br>function&nbsp;</font><font color="#0000BB">test_alter</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$item1&nbsp;</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$item1&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">'bogus'</font><font color="#007700">;<br>}<br><br>function&nbsp;</font><font color="#0000BB">test_print</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$item2&nbsp;</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$item2&lt;br&gt;</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>}<br><br></font><font color="#0000BB">array_walk</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$fruits</font><font color="#007700">,&nbsp;</font><font color="#DD0000">'test_print'&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">array_walk</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$fruits</font><font color="#007700">,&nbsp;</font><font color="#DD0000">'test_alter'&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">array_walk</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$fruits</font><font color="#007700">,&nbsp;</font><font color="#DD0000">'test_print'&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-each.php" alt="function.php?each">each()</a> &nbsp;<a href="function.php-list.php" alt="function.php?list">list()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-array.php" alt="function.php?array">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-arsort.php" alt="function.php?arsort">下一页</a> 
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
