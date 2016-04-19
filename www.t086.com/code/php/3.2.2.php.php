<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 变量类型</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>变量类型</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

PHP 的变量类型不多，有以下五种：<p>

<ul type=disc>
<li>string
<li>integer
<li>double  
<li>array
<li>object
</ul>

string 即为字符串变量，无论是单一字符或数千字的字符串都是使用这个变量类型。值得注意的是要指定字符串给字符串变量，要在头尾加上双引号 (例如: "这是字符串")。在要让字符串换行时，可使用溢出字符，也就是反斜线加上指定的符号，若是 \x 加上二位数字，如 \xFE 即表十六进位字符，详见下表：<p>

<table border=1>
<tr><th>符号</th><th>意义</th></tr>
<tr><td>\&quot;</td><td>双引号</td></tr>
<tr><td>\\</td><td>反斜线</td></tr>
<tr><td>\n</td><td>换行</td></tr>
<tr><td>\r</td><td>送出 CR</td></tr>
<tr><td>\t</td><td>跳位 (TAB)</td></tr>
</table><p>  

integer 为整数型别。在 32 位的操作系统中，它的有效范围是 -2,147,483,648 到 +2,147,483,647。要使用 16 进位整数可以在面加 0x。<p>

double 为浮点数型别。在 32 位的操作系统中，它的有效范围是 1.7E-308 到 1.7E+308。<p>

array 为数组变量，可以是二维、三维或者多维数组，其中的元素也很自由，可以是 string、integer 或者 double，甚至是 array。<p>

object 为类变量，目前在 PHP 中的类不多，若论及类，Microsoft 的 ASP 类仍然较 PHP 的默认类多，相信这有赖大家的努力。不过话又说回来，Web CGI 程序要求的是效率，以完全面向对象的方式，恐怕用户在浏览时也会因为程序执行速度慢而很不耐烦吧。<p>

要使用变量，只要在英文字符串前面加个美元号 $ 即可，目前变量名称仍不能使用中文。至于变量的大小写是不一样的，对开发 PHP 程序的 TEAM 来说，最好使用相同的变量使用风格，以免届时因为变量大小的问题，花许多无谓的时间去找寻问题点，那就麻烦了。<p>

以下为变量的使用范例：<p>

<font color=#0000BB>$mystring&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#DD0000>"我是字符串"</font><font color=#007700>;<br></font><font color=#0000BB>$WilsonPeng&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#DD0000>"真是认真的作者"</font><font color=#007700>;<br></font><font color=#0000BB>$NewLine&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#DD0000>"换行了\n"</font><font color=#007700>;</font><p><font color=#007700></font>
<font color=#0000BB>$int1&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>38</font><font color=#007700>;<br></font><font color=#0000BB>$int2&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>49</font><font color=#007700>;<br></font><font color=#0000BB>$hexint&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>0x10</font><font color=#007700>;</font><p><font color=#007700></font>
<font color=#0000BB>$float1&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>1.732</font><font color=#007700>;<br></font><font color=#0000BB>$float2&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>1.4E+2</font><font color=#007700>;</font><p><font color=#007700></font>
<font color=#0000BB>$MyArray1&nbsp;</font><font color=#007700>=&nbsp;array(</font><font color=#DD0000>"子"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"丑"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"寅"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"卯"</font><font color=#007700>);<br></font><font color=#0000BB>$MyArray2&nbsp;</font><font color=#007700>=&nbsp;array(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color=#DD0000>"地支"&nbsp;</font><font color=#007700>=&gt;&nbsp;array(</font><font color=#DD0000>"子"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"丑"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"寅"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"卯"</font><font color=#007700>),<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color=#DD0000>"生肖"&nbsp;</font><font color=#007700>=&gt;&nbsp;array(</font><font color=#DD0000>"鼠"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"牛"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"虎"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"兔"</font><font color=#007700>),<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color=#DD0000>"数字"&nbsp;</font><font color=#007700>=&gt;&nbsp;array(</font><font color=#0000BB>1</font><font color=#007700>,&nbsp;</font><font color=#0000BB>2</font><font color=#007700>,&nbsp;</font><font color=#0000BB>3</font><font color=#007700>,&nbsp;</font><font color=#0000BB>4</font><font color=#007700>)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</font><p>

类的使用上就比较麻烦了，要先定义类别，甚至必须先要方法，才能使用类，如下例：<p>

<font color=#007700>class&nbsp;</font><font color=#0000BB>foo&nbsp;</font><font color=#007700>{<br>&nbsp;&nbsp;function&nbsp;</font><font color=#0000BB>do_foo&nbsp;</font><font color=#007700>()&nbsp;{&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color=#DD0000>"Doing&nbsp;foo."</font><font color=#007700>;&nbsp;<br>&nbsp;&nbsp;}<br>}</font><p><font color=#007700></font>
<font color=#0000BB>$bar&nbsp;</font><font color=#007700>=&nbsp;new&nbsp;</font><font color=#0000BB>foo</font><font color=#007700>;<br></font><font color=#0000BB>$bar&nbsp;</font><font color=#007700>-&gt;&nbsp;</font><font color=#0000BB>do_foo&nbsp;</font><font color=#007700>();</font><p>

更多有关类的讨论，参考 <a href="3.5.2.php.php" alt="3.5.2.php">类</a><p>

此外，还有布尔值 (boolean)，通常 1 即为 true，0 为 false。<p>

在变量之间，若要转换类型，在 PHP 程序中是很自由的，直接就拿来用了，不必经过特殊的转换函数。当然，浮点数转成整数就有点牵强了，不过可以将浮点数转成字符串，也是很好处理。

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.2.1.php.php" alt="3.2.1.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.2.3.php.php" alt="3.2.3.php">下一页</a> 
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
