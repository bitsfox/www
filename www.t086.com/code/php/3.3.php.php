<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 运算符号</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>运算符号</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

运算符号可以用来处理数字、字符串及其它需要比较运算的条件。PHP 的运算符号和 C 语言的运算符号与很类似，对于有经验的程序设计人员，应可以很顺利的掌握 PHP 的运算符号。<p>

不同的运算符号，其实还是有优先顺序，就像小时候在学数学时，老师会教：先乘除、后加减。在 PHP 的运算优先顺序可以参考下面的表格，在混合式的情形下，愈往下表示优先权愈高。至于符号代表的意义，散见于以下的章节中。<p>

<table border=1>
<tr><th>运算符号</th><th>结合规则</th></tr>
<tr><td>,</td><td>左至右</td></tr>
<tr><td>or</td><td>左至右</td></tr>
<tr><td>xor</td><td>左至右</td></tr>
<tr><td>and</td><td>左至右</td></tr>
<tr><td>.= &nbsp;&nbsp;&nbsp; &amp;= &nbsp;&nbsp;&nbsp; |= &nbsp;&nbsp;&nbsp; /= &nbsp;&nbsp;&nbsp; %= &nbsp;&nbsp;&nbsp; ^= &nbsp;&nbsp;&nbsp; = &nbsp;&nbsp;&nbsp; += &nbsp;&nbsp;&nbsp; -= &nbsp;&nbsp;&nbsp; *=</td><td>左至右</td></tr>
<tr><td>? &nbsp;&nbsp; :</td><td>左至右</td></tr>
<tr><td>||</td><td>左至右</td></tr>
<tr><td>&amp;&amp;</td><td>左至右</td></tr>
<tr><td>|</td><td>左至右</td></tr>
<tr><td>^</td><td>左至右</td></tr>
<tr><td>&amp;</td><td>左至右</td></tr>
<tr><td>== &nbsp;&nbsp;&nbsp; !=</td><td>不限</td></tr>
<tr><td>&lt; &nbsp;&nbsp;&nbsp; &lt;= &nbsp;&nbsp;&nbsp; &gt;= &nbsp;&nbsp;&nbsp; &gt;</td><td>不限</td></tr>
<tr><td>&lt;&lt; &nbsp;&nbsp;&nbsp; &gt;&gt;</td><td>左至右</td></tr>
<tr><td>+ &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp; .</td><td>左至右</td></tr>
<tr><td>* &nbsp;&nbsp;&nbsp; / &nbsp;&nbsp;&nbsp; %</td><td>左至右</td></tr>
<tr><td>! &nbsp;&nbsp;&nbsp; ~ &nbsp;&nbsp;&nbsp; ++ &nbsp;&nbsp;&nbsp; -- &nbsp;&nbsp;&nbsp; @</td><td>右至左</td></tr>
<tr><td>[]</td><td>右至左</td></tr>
</table><p>

就像先哲说的：物有本末、事有终始，知所先后，则近道矣，在运算时只要照着运算优先顺序写出来的程序，应该不会发生结果和预期不同的情形。在写作时多注意细节，可以减少调试的痛苦！

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.2.3.php.php" alt="3.2.3.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.3.1.php.php" alt="3.3.1.php">下一页</a> 
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
