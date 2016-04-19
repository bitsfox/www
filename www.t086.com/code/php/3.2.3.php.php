<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 变量的使用</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>变量的使用</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

就像大部份的结构化程序，有所谓的全局变量与局部变量，PHP 在这方面也是有相同的处理方式。<p>

在 PHP 的程序执行时，系统会在内存中保留一块全局变量的区域。实际运用时，可以透过 $GLOBALS["变量名称"] 将需要的变量取出。在用户自定的函数或程序中，就可以用 $GLOBALS 数组取出需要的变量。当然别忘了 PHP 的变量有分大小写，搞错了大小写可是叫一百年，变量也不会出来。<p>

$GLOBALS 数组是 PHP 程序中比较特殊的变量，不必定义，系统会自动匹配相关的变量在里面。在函数中，也不必管 $GLOBALS 数组是否已经做全局定义，就可以直接使用了。<p>

和 $GLOBALS 变量类似的还有 $php_errormsg 字符串变量。若 PHP 的配置文件 (php.ini/php3.ini) 中的 track_errors 选项打开的话，会有全局变量 $php_errormsg 可以看到错误的信息。<p>

在 PHP 中，全局变量的有效范围 (scope) 仅限于主要程序中，不会影响到函数中同名的变量，也就是全局变量与局部变量互不侵犯。若要变量能通透到函数中，就要用到 $GLOBALS 数组或是使用 global 定义。<p>

例如，在自行开发的函数中，要取得目前执行 PHP 程序页面的文件名，就可以用 $GLOBALS["PHP_SELF"] 取出 $PHP_SELF 的值。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;本程序使用&nbsp;$GLOBALS&nbsp;数组<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$GLOBALS</font><font color="#007700">[</font><font color="#DD0000">"PHP_SELF"</font><font color="#007700">];<br>}<br></font><font color="#0000BB">myfunc</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

下面是错误的示范，请勿模仿，上面的才是正确的示范。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;这是错误的示范<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">errfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;<br>}<br></font><font color="#0000BB">errfunc</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

但是这个错误的示范要是改成下例就没问题了<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;本程序使用全局定义<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;global&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;<br>}<br></font><font color="#0000BB">myfunc</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

在变量前面加上 global 的名称，就是定义该变量为全局变量。用这种方式，就不需使用 $GLOBALS 数组，也能让变量进入自行开发的函数中。<p>

接下来先看静态变量的例子<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;静态变量的例子<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;static&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">.=</font><font color="#DD0000">"哈"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">.</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;哈<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;哈哈<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;哈哈哈<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

函数在执行时所产生的变量，在函数结束时就消失了，有时因为程序的需要，函数在循环中，当不希望变量在每次执行完函数就消失的话，静态变量 (static variable) 就派上用场了。上例中，使用 $mystr 变量之前，先在变量前面加上 static，即表示变量 $mystr 是静态变量，当每次执行 myfunc() 函数时，$mystr 的值会一直增加，每执行一次就多一个哈字。若将 static 的静态变量定义拿掉，就没办法累加哈字了。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;不是静态变量的例子&nbsp;(错误的)<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">.=</font><font color="#DD0000">"哈"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">.</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;哈<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;哈<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;哈<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

再看一个比较实际的例子，它是处理表格的颜色，让隔行的颜色不同。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">TdBackColor</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;static&nbsp;</font><font color="#0000BB">$ColorStr</font><font color="#007700">;<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$ColorStr</font><font color="#007700">==</font><font color="#DD0000">"808080"</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$ColorStr</font><font color="#007700">=</font><font color="#DD0000">"c0c0c0"</font><font color="#007700">;<br>&nbsp;&nbsp;}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$ColorStr</font><font color="#007700">=</font><font color="#DD0000">"808080"</font><font color="#007700">;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;return(</font><font color="#0000BB">$ColorStr</font><font color="#007700">);<br>}<br>echo&nbsp;</font><font color="#DD0000">"&lt;table&nbsp;border=1&gt;\n"</font><font color="#007700">;<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">10</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$ColorStr</font><font color="#007700">=</font><font color="#0000BB">TdBackColor</font><font color="#007700">();<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;tr&gt;&lt;td&nbsp;bgcolor="</font><font color="#007700">.</font><font color="#0000BB">$ColorStr</font><font color="#007700">.</font><font color="#DD0000">"&gt;这是第"</font><font color="#007700">.</font><font color="#0000BB">$i</font><font color="#007700">.</font><font color="#DD0000">"行&lt;/td&gt;&lt;/tr&gt;\n"</font><font color="#007700">;<br>}<br>echo&nbsp;</font><font color="#DD0000">"&lt;/table&gt;"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

PHP 的变量使用技巧上，最令人觉得不可思议的则是变量的变量 (variable variable)。这是充分利用 PHP 特性玩出的特殊技巧<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$a&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"Hello"</font><font color="#007700">;<br>$</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"world"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"$a,&nbsp;$hello"</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;Hello,&nbsp;world<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"$a,&nbsp;</font><font color="#007700">{</font><font color="#DD0000">$a</font><font color="#007700">}</font><font color="#DD0000">"</font><font color="#007700">;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;也是&nbsp;Hello,&nbsp;world<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

mdean@kcnet.com 举出一个更绝的例子 (24-Apr-1999)，他称为变量的函数 (variable function)<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myCallbackFunction</font><font color="#007700">()<br>{<br>&nbsp;&nbsp;print(</font><font color="#DD0000">"Hello&nbsp;from&nbsp;callback"</font><font color="#007700">);<br>}<br><br>function&nbsp;</font><font color="#0000BB">myFunction</font><font color="#007700">(</font><font color="#0000BB">$callback</font><font color="#007700">)<br>{<br>&nbsp;&nbsp;</font><font color="#0000BB">$callback</font><font color="#007700">();<br>}<br></font><font color="#FF8000">//&nbsp;call&nbsp;to&nbsp;myFunction&nbsp;passing&nbsp;callback<br>//&nbsp;function&nbsp;as&nbsp;parameter<br></font><font color="#0000BB">myFunction</font><font color="#007700">(</font><font color="#DD0000">"myCallbackFunction"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

至于用户在 FORM 中输入的资料，要怎么处理呢？要是在 PHP 的配置文件中，track_vars 设为 On 时，直接使用变量名字就好了。如下例，next.php 在执行时，系统会自动产生两个变量 $username 及 $sex，直接使用就好了，比起传统的 CGI 要自己解析，PHP 实在是太神奇了。<p>

&lt;form action=next.php method=post&gt;<br>
姓名: &lt;input type=text name="username"&gt;&lt;br&gt;<br>
性别: &lt;input type=text name="sex"&gt;&lt;br&gt;<br>
&lt;input type=submit&gt;<br>
&lt;/form&gt;
        <p> 由于 PHP 许多语法都是 C 语言的翻版，故 PHP 在使用变量时，随时都可以使用新的变量，只要在使用前将变量初始化就好了，不必像 
          Pascal 语言那样严谨，所有要使用的变量都要事先定义。这当然有好处与坏处：好处是使用方便、自由；坏处就是常常因这些自由而付出相当大的代价调试。在程序码短的 
          PHP 程序当然不成问题，当程序在数百数千行，甚至 include 或 require 好几层之后，问题就浮现出来了。无论如何，保持良好的写作习惯才是避免浪费青春的方法。 
        <p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.2.2.php.php" alt="3.2.2.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.3.php.php" alt="3.3.php">下一页</a> 
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
