<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:ereg_replace()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:ereg_replace()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-43.php" alt="group.php?43">正则表达式函数库</a></div><br><h1><font color="0000bb">ereg_replace</font></h1><p>
字符串比对解析并取代。<p>
<font color="ff8000">语法:</font> <b>string ereg_replace(string pattern, string replacement, string string);</b><p>
<font color="ff8000">返回值:</font> 字符串<p>
<font color="ff8000">函数种类:</font> 资料处理<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>本函数以 pattern 的规则来解析比对字符串 string，欲取而代之的字符串为参数 replacement。返回值为字符串类型，为取代后的字符串结果。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
ken@freebsdrocks.com&nbsp;在&nbsp;16-Mar-1999&nbsp;提出的例子。<br><br><font color="#0000BB">&lt;?php<br>$text&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">'This&nbsp;is&nbsp;a&nbsp;{1}&nbsp;day,&nbsp;not&nbsp;{2}&nbsp;and&nbsp;{3}.'</font><font color="#007700">;<br></font><font color="#0000BB">$daytype&nbsp;</font><font color="#007700">=&nbsp;array(&nbsp;</font><font color="#0000BB">1&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">'fine'</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">2&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">'overcast'</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">3&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">'rainy'&nbsp;</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">ereg&nbsp;</font><font color="#007700">(</font><font color="#DD0000">'{([0-9]+)}'</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$text</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$regs</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$found&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$regs</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">$text&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ereg_replace</font><font color="#007700">(</font><font color="#DD0000">&quot;\{&quot;</font><font color="#007700">.</font><font color="#0000BB">$found</font><font color="#007700">.</font><font color="#DD0000">&quot;\}&quot;</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$daytype</font><font color="#007700">[</font><font color="#0000BB">$found</font><font color="#007700">],&nbsp;</font><font color="#0000BB">$text</font><font color="#007700">);<br>}<br>echo&nbsp;</font><font color="#DD0000">&quot;$text</font><font color="#007700">\n</font><font color="#DD0000">&quot;</font><font color="#007700">;<br></font><font color="#FF8000">//&nbsp;This&nbsp;is&nbsp;a&nbsp;fine&nbsp;day,&nbsp;not&nbsp;overcast&nbsp;and&nbsp;rainy.&nbsp;<br></font><font color="#0000BB">?&gt;<br></font><br>ken@freebsdrocks.com&nbsp;并同时提出具有相同功能的perl&nbsp;程序范例如下：<br><br>$text&nbsp;=&nbsp;'This&nbsp;is&nbsp;a&nbsp;{1}&nbsp;day,&nbsp;not&nbsp;{2}&nbsp;and&nbsp;{3}.';<br>%daytype&nbsp;=&nbsp;(&nbsp;1&nbsp;=&gt;&nbsp;'fine',<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;=&gt;&nbsp;'overcast',<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;=&gt;&nbsp;'rainy'&nbsp;);<br>$text&nbsp;=~&nbsp;s/{(\d+)}/$daytype{$1}/eg;<br>print&nbsp;&quot;$text\n&quot;;</font>
<p>
        <div align="center"><img src="ereg_replace.gif" alt="img/ereg_replace.gif" WIDTH="385" HEIGHT="103"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">参考</font></td></tr></table><p><a href="function.php-ereg.php" alt="function.php?ereg">ereg()</a> &nbsp;<a href="function.php-eregi.php" alt="function.php?eregi">eregi()</a> &nbsp;<a href="function.php-eregi_replace.php" alt="function.php?eregi_replace">eregi_replace()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-ereg.php" alt="function.php?ereg">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-eregi.php" alt="function.php?eregi">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
