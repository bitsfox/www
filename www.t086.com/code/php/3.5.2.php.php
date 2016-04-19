<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 类</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>类</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

用户定义的类，也是学好 PHP 所必备的条件之一。而 PHP 的类，和其它的面向对象语言比较起来，还算蛮单纯的。PHP 只有类别 (class)、方法 (method)、属性、以及单一继承 (extensions) 等。对不习惯使用 C++、Java、Delphi 等面向对象语言来开发程序的用户，不妨先阅读一下有关面向对象概念的书，相信可以带来许多的收获。<p>

下面的范例是手推车类。可以看到，使用 class 表示它是一个类类别。在类别中的 function，例如 add_item 则表示该类的一个方法。方法可以封装类的实际处理情形，让该类自己能依封装好的方法来执行一些步骤。<p>

程序中的 $this 类变量也和 $GLOBALS 及 $php_errormsg 两个变量一样，在 PHP 中属于特殊的变量。$this 变量只用在类类别中，表示类的本身。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;程序名:&nbsp;cart.inc<br></font><font color="#007700">class&nbsp;</font><font color="#0000BB">Cart&nbsp;</font><font color="#007700">{<br>&nbsp;&nbsp;var&nbsp;</font><font color="#0000BB">$items</font><font color="#007700">;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;手推车类<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;//&nbsp;本方法加入&nbsp;$num&nbsp;件物品到手推车中&nbsp;(加到&nbsp;$artnr&nbsp;变量)<br>&nbsp;&nbsp;</font><font color="#007700">function&nbsp;</font><font color="#0000BB">add_item&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$artnr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">items</font><font color="#007700">[</font><font color="#0000BB">$artnr</font><font color="#007700">]&nbsp;+=&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;本方法从手推车减少&nbsp;$num&nbsp;件物品&nbsp;(从&nbsp;$artnr&nbsp;变量减掉)<br>&nbsp;&nbsp;</font><font color="#007700">function&nbsp;</font><font color="#0000BB">remove_item&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$artnr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">items</font><font color="#007700">[</font><font color="#0000BB">$artnr</font><font color="#007700">]&nbsp;&gt;&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">items</font><font color="#007700">[</font><font color="#0000BB">$artnr</font><font color="#007700">]&nbsp;-=&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</font><font color="#0000BB">true</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</font><font color="#0000BB">false</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

要使用手推车可以用类似下例的方式。可以先将每个类存成 Include 文件，再将它 require 或 include 进来。在定义变量 $cart 时，要使用 new 的保留字，表示 $cart 使用 Cart 类。使用 -&gt; 符号，表示执行类的方法。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">require(</font><font color="#DD0000">"cart.inc"</font><font color="#007700">);<br></font><font color="#0000BB">$cart&nbsp;</font><font color="#007700">=&nbsp;new&nbsp;</font><font color="#0000BB">Cart</font><font color="#007700">;<br></font><font color="#0000BB">$cart</font><font color="#007700">-&gt;</font><font color="#0000BB">add_item</font><font color="#007700">(</font><font color="#DD0000">"10"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

之后再设计有记名的手推车。记名手推车从手推车遗传下来，因此手推车拥有的方法及属性，记名手推车也有，而记名手推车比手推车增加了名字的方法 (或许该称属性较恰当)。<p>

从下例中可以看到，子类 Named_Cart 使用 extends 来继承其父类 Cart。虽然 Named_Cart 类中没有增加物品及减少物品的方法，不过由于遗传的特性，父类有的东西它都有。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;程序名:&nbsp;named_cart.inc<br></font><font color="#007700">require(</font><font color="#DD0000">"cart.inc"</font><font color="#007700">);<br>class&nbsp;</font><font color="#0000BB">Named_Cart&nbsp;</font><font color="#007700">extends&nbsp;</font><font color="#0000BB">Cart&nbsp;</font><font color="#007700">{<br>&nbsp;&nbsp;var&nbsp;</font><font color="#0000BB">$owner</font><font color="#007700">;<br>&nbsp;&nbsp;function&nbsp;</font><font color="#0000BB">set_owner&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$name</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">owner&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$name</font><font color="#007700">;<br>&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

要使用记名手推车类，请看下面的范例。当然这不算太好的设计，每个子类都一直 require 它的父类，会造成服务器在 I/O 上面的负担。在实作时，可以将整个系列的类在同一个程序文件中，从最早的袓先类到最后的子孙类，也方便日后修正。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">require(</font><font color="#DD0000">"named_cart.inc"</font><font color="#007700">);<br></font><font color="#0000BB">$ncart&nbsp;</font><font color="#007700">=&nbsp;new&nbsp;</font><font color="#0000BB">Named_Cart</font><font color="#007700">;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;建立类变量<br></font><font color="#0000BB">$ncart</font><font color="#007700">-&gt;</font><font color="#0000BB">set_owner&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"CyberRidder"</font><font color="#007700">);&nbsp;</font><font color="#FF8000">//&nbsp;配置类的记名属性<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$ncart</font><font color="#007700">-&gt;</font><font color="#0000BB">owner</font><font color="#007700">;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;显示类的记名属性<br></font><font color="#0000BB">$ncart</font><font color="#007700">-&gt;</font><font color="#0000BB">add_item&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"10"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;从父类遗传的方法也可使用<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

因此，在 PHP 中使用了 extends 保留字，加上良好的系统分析与完整的 CRC 卡片 (详见面向对象相关书籍) 设计之后，PHP 可变成拥有强大类能力的 CGI 语言。<p>

PHP 由于是脚本语言 (Script)，因此程序源代码可见，在软件工程中的元件黑箱并不会在目前的 PHP 版本中出现，也就是说，全部的类其实没有隐藏起它的内容。对于软件业者而言，没有办法保护所谓的软件 IC，站在开放团体而言，反而有源代码是件好事，至于孰是孰非，就很难判定了，不过目前 PHP 还是 Open Source 团体的一份子，或许日后 Zend 引擎可以做到类封装的功能也不一定。

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.5.1.php.php" alt="3.5.1.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="4.php.php" alt="4.php">下一页</a> 
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
