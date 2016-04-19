<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ldap_get_values()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ldap_get_values()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP 目录协议函数库</a></div><br><h1><font color=0000bb>ldap_get_values</font></h1><p>
取得全部返回值。<p>
<font color=ff8000>语法:</font> <b>array ldap_get_values(int handle, int result_entry_identifier, string attribute);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来取得 LDAP 的全部返回资料值。参数 handle 为打开 LDAP 的代号。参数 attribute 有 surname 及 mail 二种。返回值为数组资料值，例如<p>

return_value["count"] : 属性值总数<br>
return_value[0]       : 第一个属性值<br>
return_value[i]       : 第 i+1 个属性值<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下例为片段程序<br><br><font color="#0000BB">&lt;?<br>$values&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ldap_get_values</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$entry</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"mail"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$values</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;笔电子邮件地址:&nbsp;&lt;p&gt;\n"</font><font color="#007700">;<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">$values</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">];&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$values</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">].</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_get_entries.php" alt="function.php?ldap_get_entries">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ldap_list.php" alt="function.php?ldap_list">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
