<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:shuffle()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:shuffle()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">数组处理函数库</a></div><br><h1><font color=0000bb>shuffle</font></h1><p>
将数组的顺序弄混。<p>
<font color=ff8000>语法:</font> <b>void shuffle(array array);</b><p>
<font color=ff8000>返回值:</font> 无<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将数组以随机的方式使全部元素重新乱排。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$numbers&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">range</font><font color="#007700">(</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">20</font><font color="#007700">);<br></font><font color="#0000BB">srand</font><font color="#007700">(</font><font color="#0000BB">time</font><font color="#007700">());<br></font><font color="#0000BB">shuffle</font><font color="#007700">(</font><font color="#0000BB">$numbers</font><font color="#007700">);<br>while&nbsp;(list(,</font><font color="#0000BB">$number</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$numbers</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$number&nbsp;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font><br>注意:&nbsp;&nbsp;<br>ccunning@math.ohio-state.edu&nbsp;指出&nbsp;(31-May-1999)，在&nbsp;Solaris&nbsp;上由于受了&nbsp;libc&nbsp;函数库的影响，会使本函数出现问题。目前解决的方式如下面的例子。(注:&nbsp;或许之后新的&nbsp;PHP&nbsp;版本会修正这个问题。)<br><font color="#0000BB">&lt;?<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myshuffle</font><font color="#007700">(</font><font color="#0000BB">$array</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">mt_srand</font><font color="#007700">((double)&nbsp;</font><font color="#0000BB">microtime</font><font color="#007700">()*</font><font color="#0000BB">1000000</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$array</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$num</font><font color="#007700">-</font><font color="#0000BB">1</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$n&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mt_rand</font><font color="#007700">(</font><font color="#0000BB">$i</font><font color="#007700">+</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">$num</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$temp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$array</font><font color="#007700">[</font><font color="#0000BB">$n</font><font color="#007700">];<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$array</font><font color="#007700">[</font><font color="#0000BB">$n</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">$array</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">];<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$array</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">$temp</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">$array&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">2</font><font color="#007700">,</font><font color="#0000BB">3</font><font color="#007700">,</font><font color="#0000BB">4</font><font color="#007700">,</font><font color="#0000BB">5</font><font color="#007700">,</font><font color="#0000BB">6</font><font color="#007700">,</font><font color="#0000BB">7</font><font color="#007700">,</font><font color="#0000BB">8</font><font color="#007700">,</font><font color="#0000BB">9</font><font color="#007700">,</font><font color="#0000BB">10</font><font color="#007700">);<br></font><font color="#0000BB">myshuffle</font><font color="#007700">(&amp;</font><font color="#0000BB">$array</font><font color="#007700">);<br>while&nbsp;(list(,</font><font color="#0000BB">$var</font><font color="#007700">)=</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$array</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$var&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#DD0000">"&nbsp;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-arsort.php" alt="function.php?arsort">arsort()</a> &nbsp;<a href="function.php-asort.php" alt="function.php?asort">asort()</a> &nbsp;<a href="function.php-ksort.php" alt="function.php?ksort">ksort()</a> &nbsp;<a href="function.php-rsort.php" alt="function.php?rsort">rsort()</a> &nbsp;<a href="function.php-sort.php" alt="function.php?sort">sort()</a> &nbsp;<a href="function.php-usort.php" alt="function.php?usort">usort()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-rsort.php" alt="function.php?rsort">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-sizeof.php" alt="function.php?sizeof">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
