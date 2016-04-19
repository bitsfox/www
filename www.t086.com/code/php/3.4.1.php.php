<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - if..else 循环</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>if..else 循环</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

if..else 循环有三种结构<p>

第一种是只有用到 if 条件，当作单纯的判断。解释成 "若发生了某事则怎样处理"。语法如下：<p>

<pre>
if (expr) {
  statement
}
</pre><p>

其中的 expr 为判断的条件，通常都是用逻辑运算符号 (logical operators) 当判断的条件。而 statement 为符合条件的执行部分程序，若程序只有一行，可以省略大括号 {}。<p>

范例：本例省略大括号。<p>

<font color="#0000BB">&lt;?php</font><br>
<font color="#007700">if&nbsp;(</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"D"</font><font color="#007700">)&nbsp;==&nbsp;</font><font color="#DD0000">"Sat"</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"周末了，狂欢去"</font><font color="#007700">;</font><br>
<font color="#0000BB">?&gt;</font><p>

范例：本例的执行部分有三行，不可省略大括号。<p>

<font color="#0000BB">&lt;?php</font><br>
<font color="#007700">if&nbsp;(</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#DD0000">"/usr/local/lib/php3.ini"</font><font color="#007700">))&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"以下是&nbsp;PHP3&nbsp;的配置文件&lt;p&gt;&lt;pre&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;</font><font color="#0000BB">readfile</font><font color="#007700">(</font><font color="#DD0000">"/usr/local/lib/php3.ini"</font><font color="#007700">);<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/pre&gt;\n"</font><font color="#007700">;<br>
}<br>
</font><font color="#0000BB">?&gt;</font>

<p><hr size=1 width=100%><p>

第两种是除了 if 之外，加上了 else 的条件，可解释成 "若发生了某事则怎样处理，否则该如何解决"。语法如下<p>

<pre>
if (expr) {
  statement1
} else {
  statement2
}
</pre>

范例：上面的例子来修改成更完整的处理。其中的 else 由于只有一行执行的指令，因此不用加上大括号。<p>

<font color="#0000BB">&lt;?php<br>
$f</font><font color="#007700">=</font><font color="#DD0000">"/usr/local/lib/php3.ini"</font><font color="#007700">;<br>
if&nbsp;(</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$f</font><font color="#007700">))&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"以下是&nbsp;PHP3&nbsp;的配置文件&lt;p&gt;&lt;pre&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;</font><font color="#0000BB">readfile</font><font color="#007700">(</font><font color="#0000BB">$f</font><font color="#007700">);<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/pre&gt;\n"</font><font color="#007700">;<br>
}&nbsp;else&nbsp;echo&nbsp;</font><font color="#DD0000">"很抱歉，找不到&nbsp;$f"</font><font color="#007700">;</font><br>
<font color="#0000BB">?&gt;</font>

<p><hr size=1 width=100%><p>

第三种就是递归的 if..else 循环，通常用在多种决策判断时。它将数个 if..else 拿来合并运用处理。<p>

直接看下面的例子<p>

<font color="#0000BB">&lt;?php<br>
</font><font color="#007700">if&nbsp;(</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">&gt;&nbsp;</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"a&nbsp;比&nbsp;b&nbsp;大"</font><font color="#007700">;<br>
}&nbsp;elseif&nbsp;(</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">==&nbsp;</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;&nbsp;</font><font color="#DD0000">"a&nbsp;等于&nbsp;b"</font><font color="#007700">;<br>
}&nbsp;else&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"a&nbsp;比&nbsp;b&nbsp;小"</font><font color="#007700">;<br>
}</font><br>
<font color="#0000BB">?&gt;</font><p>

上例只用二层的 if..else 循环，用来比较 a 和 b 两个变量。实际要使用这种递归 if..else 循环时，请小心使用，因为太多层的循环容易使设计的逻辑出问题，或者少打了大括号等，都会造成程序出现莫名其妙的问题。

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.php.php" alt="3.4.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.4.2.php.php" alt="3.4.2.php">下一页</a> 
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
