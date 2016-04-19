<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:wddx_serialize_vars()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:wddx_serialize_vars()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-51.php" alt="group.php?51">WDDX 函数库</a></div><br><h1><font color=0000bb>wddx_serialize_vars</font></h1><p>
将多值连续化。<p>
<font color=ff8000>语法:</font> <b>string wddx_serialize_vars(string var_name | array var_names [, ... ] );</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将多数值连续化，并将它送到 WDDX 封包中。参数依次为值的内容，可以是字符串或是数组。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$a&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br></font><font color="#0000BB">$b&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">5.5</font><font color="#007700">;<br></font><font color="#0000BB">$c&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"blue"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"orange"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"violet"</font><font color="#007700">);<br></font><font color="#0000BB">$d&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"colors"</font><font color="#007700">;<br></font><font color="#0000BB">$clvars&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"c"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"d"</font><font color="#007700">);<br>print&nbsp;</font><font color="#0000BB">wddx_serialize_vars</font><font color="#007700">(</font><font color="#DD0000">"a"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"b"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$clvars</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font><br>返回浏览器的资料为<br><br>&lt;wddxPacket&nbsp;version='0.9'&gt;&lt;header/&gt;&lt;data&gt;&lt;struct&gt;&lt;var&nbsp;name='a'&gt;&lt;number&gt;1&lt;/number&gt;&lt;/var&gt;<br>&lt;var&nbsp;name='b'&gt;&lt;number&gt;5.5&lt;/number&gt;&lt;/var&gt;&lt;var&nbsp;name='c'&gt;&lt;array&nbsp;length='3'&gt;<br>&lt;string&gt;blue&lt;/string&gt;&lt;string&gt;orange&lt;/string&gt;&lt;string&gt;violet&lt;/string&gt;&lt;/array&gt;&lt;/var&gt;<br>&lt;var&nbsp;name='d'&gt;&lt;string&gt;colors&lt;/string&gt;&lt;/var&gt;&lt;/struct&gt;&lt;/data&gt;&lt;/wddxPacket&gt;</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-wddx_serialize_value.php" alt="function.php?wddx_serialize_value">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-wddx_packet_start.php" alt="function.php?wddx_packet_start">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
