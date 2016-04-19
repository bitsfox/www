<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:preg_replace()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:preg_replace()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-40.php" alt="group.php?40">Perl 相容语法函数库</a></div><br><h1><font color=0000bb>preg_replace</font></h1><p>
字符串比对解析并取代。<p>
<font color=ff8000>语法:</font> <b>mixed preg_replace(mixed pattern, mixed replacement, mixed subject);</b><p>
<font color=ff8000>返回值:</font> 混合类型资料<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数以 pattern 的规则来解析比对字符串 subject，欲取而代之的字符串为参数 replacement。返回值为混合类型资料，为取代后的字符串结果。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下例返回值为&nbsp;$startDate&nbsp;=&nbsp;6/19/1969<br><br><font color="#0000BB">&lt;?php<br>$patterns&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"/(19|20\d{2})-(\d{1,2})-(\d{1,2})/"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"/^\s*{(\w+)}\s*=/"</font><font color="#007700">);<br></font><font color="#0000BB">$replace&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"\\3/\\4/\\1"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"</font><font color="#007700">$\\</font><font color="#DD0000">1&nbsp;="</font><font color="#007700">);<br>print&nbsp;</font><font color="#0000BB">preg_replace</font><font color="#007700">(</font><font color="#0000BB">$patterns</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$replace</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"{startDate}&nbsp;=&nbsp;1969-6-19"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-preg_match_all.php" alt="function.php?preg_match_all">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-preg_split.php" alt="function.php?preg_split">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
