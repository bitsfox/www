<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:snmp_set_quick_print()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:snmp_set_quick_print()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-46.php" alt="group.php?46">SNMP 网管函数库</a></div><br><h1><font color=0000bb>snmp_set_quick_print</font></h1><p>
配置 UCD 函数库中的 quick_print 值。<p>
<font color=ff8000>语法:</font> <b>void snmp_set_quick_print(boolean quick_print);</b><p>
<font color=ff8000>返回值:</font> 无<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数配置 UCD SNMP 函数库中的 quick_print 值，在 Windows NT 系统上本函数无法作用。参数 quick_print 值为 0 表示 quick_print 关闭，1 表示打开。本函数无返回值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>snmp_set_quick_print</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">$a&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">snmpget</font><font color="#007700">(</font><font color="#DD0000">"127.0.0.1"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"public"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">".1.3.6.1.2.1.2.2.1.9.1"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$a</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">;<br></font><font color="#0000BB">snmp_set_quick_print</font><font color="#007700">(</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">$a&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">snmpget</font><font color="#007700">(</font><font color="#DD0000">"127.0.0.1"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"public"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">".1.3.6.1.2.1.2.2.1.9.1"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$a</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font><br>返回值为<br>Timeticks:&nbsp;(0)&nbsp;0:00:00.00<br>0:00:00.00</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-snmp_get_quick_print.php" alt="function.php?snmp_get_quick_print">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-AddSlashes.php" alt="function.php?AddSlashes">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
