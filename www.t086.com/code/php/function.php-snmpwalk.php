<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:snmpwalk()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:snmpwalk()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-46.php" alt="group.php?46">SNMP 网管函数库</a></div><br><h1><font color=0000bb>snmpwalk</font></h1><p>
取得所有类。<p>
<font color=ff8000>语法:</font> <b>array snmpwalk(string hostname, string community, string object_id, int [timeout], int [retries]);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可用来取得所有类识别代码 (OID, Object Identifier)，取得类为从根类 (root) 开始的全部 MIB 类。参数 hostname 为指定的机器。参数 community 为社群名称，有 public 或 private 等。参数 object_id 即为 OID 类，为 MIB 所定义的类，只要输入空字符串即可。返回值为 OID 数组，若失败则返回 false。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下面为部份范例<br><br><font color="#0000BB">&lt;?php<br>$a&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">snmpwalk</font><font color="#007700">(</font><font color="#DD0000">"127.0.0.1"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"public"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">);&nbsp;<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$a</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$a</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">].</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-snmpget.php" alt="function.php?snmpget">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-snmpwalkoid.php" alt="function.php?snmpwalkoid">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
