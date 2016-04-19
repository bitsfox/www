<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 程序注释</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>程序注释</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

在 PHP 的程序中，加入注释的方法很灵活。可以使用 C 语言、C++ 语言或者是 UNIX 的 Shell 语言的注释方式，而且也可以混合使用。这可以让每个写 PHP 网页程序的 Webmaster 或 Programmer 发展出属于自己的写作风格。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>&nbsp;&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"这是第一种例子。\n"</font><font color="#007700">;&nbsp;</font><font color="#FF8000">//&nbsp;本例是&nbsp;C++&nbsp;语法的注释<br>&nbsp;&nbsp;/*&nbsp;本例采用多行的<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注释方式&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br>&nbsp;&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"这是第两种例子。\n"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"这是第三种例子。\n"</font><font color="#007700">;&nbsp;</font><font color="#FF8000">#&nbsp;本例使用&nbsp;UNIX&nbsp;Shell&nbsp;语法注释<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

不过在使用多行注释时请注意，不能让注释陷入递归循环当中，否则会引起错误。<p>

<pre>
&lt;?php
  /* 
  echo "这是错误的示范。\n"; /* 递归注释会引起问题 */
  */
?&gt;
</pre>

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.1.3.php.php" alt="3.1.3.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.2.1.php.php" alt="3.2.1.php">下一页</a> 
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
