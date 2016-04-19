<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ereg()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ereg()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-43.php" alt="group.php?43">正则表达式函数库</a></div><br><h1><font color=0000bb>ereg</font></h1><p>
字符串比对解析。<p>
<font color=ff8000>语法:</font> <b>int ereg(string pattern, string string, array [regs]);</b><p>
<font color=ff8000>返回值:</font> 整数/数组<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数以 pattern 的规则来解析比对字符串 string。比对结果返回的值放在数组参数 regs 之中，regs[0] 内容就是原字符串 string、regs[1] 为第一个合乎规则的字符串、regs[2] 就是第二个合乎规则的字符串，余类推。若省略参数 regs，则只是单纯地比对，找到则返回值为 true。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
这个例子是&nbsp;markus@dnet.it&nbsp;在&nbsp;14-Jun-1999&nbsp;所提出的，可对使用者输入的&nbsp;E-Mail&nbsp;作简单的检查，检查使用者的&nbsp;E-Mail&nbsp;字符串是否有&nbsp;@&nbsp;字符，在&nbsp;@&nbsp;字符前有英文字母或数字，在之后有数节字符串，最后的小数点后只能有二个或三个英文字母。super@mail.wilson.gs&nbsp;就可以通过检查，super@mail.wilson&nbsp;就不能通过检查。<br><br><font color="#0000BB">&lt;?php<br></font><font color="#007700">if&nbsp;(</font><font color="#0000BB">eregi</font><font color="#007700">(</font><font color="#DD0000">"^</font><font color="#007700">[</font><font color="#DD0000">_\.0-9a-z-</font><font color="#007700">]</font><font color="#DD0000">+@(</font><font color="#007700">[</font><font color="#DD0000">0-9a-z</font><font color="#007700">][</font><font color="#DD0000">0-9a-z-</font><font color="#007700">]</font><font color="#DD0000">+\.)+</font><font color="#007700">[</font><font color="#DD0000">a-z</font><font color="#007700">]{</font><font color="#DD0000">2,3</font><font color="#007700">}$</font><font color="#DD0000">"</font><font color="#007700">,</font><font color="#0000BB">$email</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"您的&nbsp;E-Mail&nbsp;通过初步检查"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-ereg_replace.php" alt="function.php?ereg_replace">ereg_replace()</a> &nbsp;<a href="function.php-eregi.php" alt="function.php?eregi">eregi()</a> &nbsp;<a href="function.php-eregi_replace.php" alt="function.php?eregi_replace">eregi_replace()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[ </td> <td> <a href="function.php-ereg_replace.php" alt="function.php?ereg_replace">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
