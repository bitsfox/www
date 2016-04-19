<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ldap_mod_replace()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ldap_mod_replace()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP 目录协议函数库</a></div><br><h1><font color=0000bb>ldap_mod_replace</font></h1><p>
新的 LDAP 名录取代旧属性。<p>
<font color=ff8000>语法:</font> <b>boolean ldap_mod_replace(int handle, string dn, array entry);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来用新的指定属性取代 LDAP 名录之中的属性。参数 handle 为打开 LDAP 的代号。参数 dn 为要加入条目的具体 dn 字符串。参数 entry 为数组，为个体所有的属性，数组的内容是名录属性的相关信息。若无错误则返回 true 值。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_mod_del.php" alt="function.php?ldap_mod_del">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ldap_bind.php" alt="function.php?ldap_bind">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
