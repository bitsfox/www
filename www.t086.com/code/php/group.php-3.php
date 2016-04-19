<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 数组处理函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>数组处理函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 23 个函数</div><p><table border=0 width=100%><tr><td align=right valign=top><a href="function.php-array.php" alt="function.php?array">array</a>:</td><td valign=top>建立一个新的数组。</td></tr>
<tr><td align=right valign=top><a href="function.php-array_walk.php" alt="function.php?array_walk">array_walk</a>:</td><td valign=top>让用户自订函数能处理数组中的每一个元素。</td></tr>
<tr><td align=right valign=top><a href="function.php-arsort.php" alt="function.php?arsort">arsort</a>:</td><td valign=top>将数组的值由大到小排序。</td></tr>
<tr><td align=right valign=top><a href="function.php-asort.php" alt="function.php?asort">asort</a>:</td><td valign=top>将数组的值由小到大排序。</td></tr>
<tr><td align=right valign=top><a href="function.php-count.php" alt="function.php?count">count</a>:</td><td valign=top>计算变量或数组中的元素个数。</td></tr>
<tr><td align=right valign=top><a href="function.php-current.php" alt="function.php?current">current</a>:</td><td valign=top>返回数组中目前的元素。</td></tr>
<tr><td align=right valign=top><a href="function.php-each.php" alt="function.php?each">each</a>:</td><td valign=top>返回数组中下一个元素的索引及值。</td></tr>
<tr><td align=right valign=top><a href="function.php-end.php" alt="function.php?end">end</a>:</td><td valign=top>将数组的内部指针指到最后的元素。</td></tr>
<tr><td align=right valign=top><a href="function.php-key.php" alt="function.php?key">key</a>:</td><td valign=top>取得数组中的索引资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-ksort.php" alt="function.php?ksort">ksort</a>:</td><td valign=top>将数组的元素依索引排序。</td></tr>
<tr><td align=right valign=top><a href="function.php-list.php" alt="function.php?list">list</a>:</td><td valign=top>列出数组中元素的值。</td></tr>
<tr><td align=right valign=top><a href="function.php-next.php" alt="function.php?next">next</a>:</td><td valign=top>将数组的内部指针向后移动。</td></tr>
<tr><td align=right valign=top><a href="function.php-pos.php" alt="function.php?pos">pos</a>:</td><td valign=top>返回数组目前的元素。</td></tr>
<tr><td align=right valign=top><a href="function.php-prev.php" alt="function.php?prev">prev</a>:</td><td valign=top>将数组的内部指针往前移动。</td></tr>
<tr><td align=right valign=top><a href="function.php-range.php" alt="function.php?range">range</a>:</td><td valign=top>建立一个整数范围的数组。</td></tr>
<tr><td align=right valign=top><a href="function.php-reset.php" alt="function.php?reset">reset</a>:</td><td valign=top>将数组的指针指到数组第一个元素。</td></tr>
<tr><td align=right valign=top><a href="function.php-rsort.php" alt="function.php?rsort">rsort</a>:</td><td valign=top>将数组的值由大到小排序。</td></tr>
<tr><td align=right valign=top><a href="function.php-shuffle.php" alt="function.php?shuffle">shuffle</a>:</td><td valign=top>将数组的顺序弄混。</td></tr>
<tr><td align=right valign=top><a href="function.php-sizeof.php" alt="function.php?sizeof">sizeof</a>:</td><td valign=top>获知数组的大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-sort.php" alt="function.php?sort">sort</a>:</td><td valign=top>将数组排序。</td></tr>
<tr><td align=right valign=top><a href="function.php-uasort.php" alt="function.php?uasort">uasort</a>:</td><td valign=top>将数组依用户自定的函数排序。</td></tr>
<tr><td align=right valign=top><a href="function.php-uksort.php" alt="function.php?uksort">uksort</a>:</td><td valign=top>将数组的索引依用户自定的函数排序。</td></tr>
<tr><td align=right valign=top><a href="function.php-usort.php" alt="function.php?usort">usort</a>:</td><td valign=top>将数组的值依用户自定的函数排序。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-2.php" alt="group.php?2">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-4.php" alt="group.php?4">下一页</a> 
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
