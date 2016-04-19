<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:setlocale()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:setlocale()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>setlocale</font></h1><p>
配置地域化信息。<p>
<font color=ff8000>语法:</font> <b>string setlocale(string category, string locale);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 操作系统与环境<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来配置地域的信息。参数 category 有下列的选择：<p>
<ul type=disc>
<li>LC_ALL 包括下面的全项选项都要。
<li>LC_COLLATE 配置字符串比较，PHP 目前尚未实作出来本项。
<li>LC_CTYPE 配置字符类别及转换。例如全变大写 <a href="function.php-strtoupper.php" alt="function.php?strtoupper">strtoupper()</a>。
<li>LC_MONETARY 配置金融货币，PHP 目前尚未实作。
<li>LC_NUMERIC 配置小数点后的位数。
<li>LC_TIME 配置时间日期格式，与 <a href="function.php-strftime.php" alt="function.php?strftime">strftime()</a> 合用。
</ul><p>
而参数 locate 若是空字符串 ""，则会使用系统环境变量的 locate 或是 LANG 的值。若 locate 为零，则不会改变地域化配置。返回新的地域，若系统尚未实作则返回 false。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
Michal&nbsp;Fita&nbsp;&lt;manveru@witrynka.pl&gt;&nbsp;于&nbsp;11-Jan-1999&nbsp;11:01&nbsp;提出这个以波兰作地域化的例子。<br><br><font color="#0000BB">&lt;?<br>setlocale</font><font color="#007700">(</font><font color="#DD0000">"LC_ALL"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"pl"</font><font color="#007700">);<br></font><font color="#0000BB">$net&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"1234,56"</font><font color="#007700">;<br></font><font color="#0000BB">$gross&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"1,22"&nbsp;</font><font color="#007700">*&nbsp;</font><font color="#0000BB">$net</font><font color="#007700">;<br></font><font color="#0000BB">printf</font><font color="#007700">(</font><font color="#DD0000">"毛利:&nbsp;%s,&nbsp;净利:&nbsp;%s"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$gross</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$net</font><font color="#DD0000">");<br>/*&nbsp;波兰总?/font><font color="#007700">[</font><font color="#DD0000">值税为&nbsp;22%&nbsp;*/<br>?&gt;<br><br>返回值则为<br>毛利:&nbsp;1234,56,&nbsp;净利:&nbsp;1506,1632</font>
</font>
<p><hr size=1><br><p>
</font></td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-rawurlencode.php" alt="function.php?rawurlencode">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-similar_text.php" alt="function.php?similar_text">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
