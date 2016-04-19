<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:preg_match_all()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:preg_match_all()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-40.php" alt="group.php?40">Perl 相容语法函数库</a></div><br><h1><font color=0000bb>preg_match_all</font></h1><p>
字符串整体比对解析。<p>
<font color=ff8000>语法:</font> <b>int preg_match_all(string pattern, string subject, array matches, int [order]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数以 pattern 的规则来整体解析比对字符串 subject。比对结果返回的值放在数组参数 matches 之中，并依顺序值 order 排序。参数 order 的值有 PREG_PATTERN_ORDER 及 PREG_SET_ORDER 二种。若没有 order 值，则系统自动以 PREG_PATTERN_ORDER 代入 order 值中。返回值为合乎比对结果的数目，若没有或错误则返回 false 值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
PREG_PATTERN_ORDER&nbsp;的例子<br><br><font color="#0000BB">&lt;?php<br>preg_match_all</font><font color="#007700">(</font><font color="#DD0000">"|&lt;[^&gt;]+&gt;(.*)&lt;/[^&gt;]+&gt;|U"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"&lt;div&nbsp;align=left&gt;a&nbsp;test&lt;/div&gt;"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">,&nbsp;</font><font color="#0000BB">PREG_PATTERN_ORDER</font><font color="#007700">);<br>print&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">",&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>print&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">",&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"\n"<br></font><font color="#0000BB">?&gt;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>返回值为<br><br>&lt;b&gt;example:&nbsp;&lt;/b&gt;,&nbsp;&lt;div&nbsp;align=left&gt;this&nbsp;is&nbsp;a&nbsp;test&lt;/div&gt;<br>example:&nbsp;,&nbsp;this&nbsp;is&nbsp;a&nbsp;test<br><br><br><br><br>PREG_SET_ORDER&nbsp;的例子<br><br><font color="#0000BB">&lt;?php<br>preg_match_all</font><font color="#007700">(</font><font color="#DD0000">"|&lt;[^&gt;]+&gt;(.*)&lt;/[^&gt;]+&gt;|U"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"&lt;div&nbsp;align=left&gt;a&nbsp;test&lt;/div&gt;"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">,&nbsp;</font><font color="#0000BB">PREG_SET_ORDER</font><font color="#007700">);<br>print&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">",&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>print&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">",&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"\n"<br></font><font color="#0000BB">?&gt;<br></font><br>返回值为&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>&lt;b&gt;example:&nbsp;&lt;/b&gt;,&nbsp;example:&nbsp;<br>&lt;div&nbsp;align=left&gt;this&nbsp;is&nbsp;a&nbsp;test&lt;/div&gt;,&nbsp;this&nbsp;is&nbsp;a&nbsp;test</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-preg_match.php" alt="function.php?preg_match">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-preg_replace.php" alt="function.php?preg_replace">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
