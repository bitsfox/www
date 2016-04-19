<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - for 循环</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>for 循环</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

for 循环就单纯只有一种，没有变化，它的语法如下<p>

<pre>
for (expr1; expr2; expr3) {
  statement
}
</pre><p>

其中的 expr1 为条件的初始值。expr2 为判断的条件，通常都是用逻辑运算符号 (logical operators) 当判断的条件。expr3 为执行 statement 后要执行的部份，用来改变条件，供下次的循环判断，如加一..等等。而 statement 为符合条件的执行部分程序，若程序只有一行，可以省略大括号 {}。<p>

下例是用 for 循环写的 "以后不敢了" 的例子，可以拿来和用 while 循环的比较。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">1</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;=</font><font color="#0000BB">10</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$i.&nbsp;以后不敢了&lt;br&gt;</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

从上例中，可以很明显的看到，用 for 和用 while 的不同。实际应用上，若循环有初始值，且都要累加(或累减)，则使用 for 循环比用 while 循环好。例如将资料从数据库取出，可能用 for 循环会比用 while 循环适合?

<p><hr size=1><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.2.php.php" alt="3.4.2.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.4.4.php.php" alt="3.4.4.php">下一页</a> 
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
