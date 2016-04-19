<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - do..while 循环</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>do..while 循环</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

do..while 是重复叙述的循环，可以分成两种模式。<p>

最单纯的就是只有 while 的循环。用来在指定的条件内，不断地重覆指定的步骤。语法如下<p>

<pre>
while (expr) {
  statement
}
</pre><p>

其中的 expr 为判断的条件，通常都是用逻辑运算符号 (logical operators) 当判断的条件。而 statement 为符合条件的执行部分程序，若程序只有一行，可以省略大括号 {}。<p>

下例很有趣，要电脑的浏览器出现十次 "以后不敢了" 的字符串，前面并加上数字，表示说了第几次不敢了。(感觉好像是 Web Server 做错事被处罚)<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;=&nbsp;</font><font color="#0000BB">10</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;print&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">".&nbsp;以后不敢了&lt;br&gt;\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

while 可以不用大括号来包住执行部分，而使用冒号加上 endwhile。见下例<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;=&nbsp;</font><font color="#0000BB">10</font><font color="#007700">):<br>&nbsp;&nbsp;print&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">".&nbsp;以后不敢了&lt;br&gt;\n"</font><font color="#007700">;<br>endwhile;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

另外一种 do..while 循环则先执行，再判断是否要继续执行，也就是说循环至少执行一次，有点像是先斩后奏的方法。这种的循环，和单用 while 是不同的 (单用 while 是先判断再处理)。若读者熟 Pascal 语言的话，会发现 do..while 循环像是 Pascal 的 repeat..until 循环。<p>

do..whilte 的语法如下<p>

<pre>
do {
  statement
} while (expr);
</pre>

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.1.php.php" alt="3.4.1.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.4.3.php.php" alt="3.4.3.php">下一页</a> 
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
