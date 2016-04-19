<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

在 PHP 中，允许程序设计者将常用的流程或者变量等元件，组织成一个固定的格式。也就是说用户可以自行组合函数或者是类。<p>

PHP 中的函数 (function) 和 C 语言一样，包括有返回值及无返回值，不像 Pascal 分成函数 (function) 和程序 (procedure) 那么复杂。<p>

在函数的名称上，PHP 对于大小写的管制很松散。可以在定义函数时写成大写的名字，而在使用时使用小写的名字。总之，对函数而言，不用管大小写，只要注意名称没有重复就好了。<p>

以下就是函数的使用语法<p>

<pre>
function myfunc($arg_1, $arg_2, ..., $arg_n) {
  // 执行一些步骤
  return $retval;
}
</pre><p>

在使用时，在自定的函数名称前要加入 function 的保留字，表示这是定义用户自定函数。之后的 myfunc 可以是任何的英文字母开头的字符串，字符串除了开头不能是数字或是下划线，在第一个字母后可以是阿拉伯数字或者是下划线，当然其它的符号或是中文字不能当函数名。<p>

$arg_1 到 $arg_n 为函数使用的参数，参数之间使用逗号隔开。在参数后的大括号 {}，即为整个函数的部分。函数如果返回值，使用 return 可将值返回。而参数可以事先定义初始值或默认值。有定义默认值参数在使用函数时可以省略，但一定要放在没有配置默认值参数的后面，否则 PHP 在解析函数时，会出现错误。<p>

另外就是参数的类型，只要参数是 PHP 支持的变量类型都可以使用，无论是数组、字符串、或是整数....等等。返回值也是一样。<p>

下面即为使用默认值及不用默认值例子<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc1</font><font color="#007700">(</font><font color="#0000BB">$arg_1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$arg_2</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$arg_3</font><font color="#007700">=</font><font color="#DD0000">"我是默认字符串"</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$arg_1</font><font color="#007700">+</font><font color="#0000BB">$arg_2</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$arg_3</font><font color="#007700">.</font><font color="#DD0000">"&lt;p&gt;\n"</font><font color="#007700">;<br>}<br><br></font><font color="#0000BB">myfunc</font><font color="#007700">(</font><font color="#0000BB">3</font><font color="#007700">,&nbsp;</font><font color="#0000BB">4</font><font color="#007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;参数&nbsp;$arg_3&nbsp;省略。<br></font><font color="#0000BB">myfunc</font><font color="#007700">(</font><font color="#0000BB">6</font><font color="#007700">,&nbsp;</font><font color="#0000BB">6</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"不用默认值"</font><font color="#007700">)&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;输入参数&nbsp;$arg_3。<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

参数的值，通常使用传值方式输入，有时在值得的需求时，可以使用传址的方式，传入参数的指针。方法就是在参数的前面加上 & 符号即可。如下例<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc2</font><font color="#007700">(&amp;</font><font color="#0000BB">$argstr</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$argstr</font><font color="#007700">=</font><font color="#0000BB">ereg_replace</font><font color="#007700">(</font><font color="#DD0000">"/"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"-"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$argstr</font><font color="#007700">);<br>}<br><br></font><font color="#0000BB">$today</font><font color="#007700">=</font><font color="#DD0000">"2000/01/01"</font><font color="#007700">;<br></font><font color="#0000BB">myfunc2</font><font color="#007700">(</font><font color="#0000BB">$today</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$today</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;2000-01-01;<br></font><font color="#0000BB">?&gt;<br></font>
</font>

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.5.php.php" alt="3.4.5.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.5.2.php.php" alt="3.5.2.php">下一页</a> 
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
