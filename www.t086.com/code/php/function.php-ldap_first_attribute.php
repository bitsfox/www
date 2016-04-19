<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ldap_first_attribute()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ldap_first_attribute()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP 目录协议函数库</a></div><br><h1><font color=0000bb>ldap_first_attribute</font></h1><p>
取得第一笔资源的属性。<p>
<font color=ff8000>语法:</font> <b>string ldap_first_attribute(int handle, int result_entry_identifier, int ber_identifier);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来取得 LDAP 中第一笔资源的属性。参数 handle 为打开 LDAP 的代号。参数 result_entry_identifier 将由 <a href="function.php-ldap_next_attribute.php" alt="function.php?ldap_next_attribute">ldap_next_attribute()</a> 沿用。参数 ber_identifier 为指针，意即需在前面加上 &amp; 符号。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-ldap_get_attributes.php" alt="function.php?ldap_get_attributes">ldap_get_attributes()</a> &nbsp;<a href="function.php-ldap_next_attribute.php" alt="function.php?ldap_next_attribute">ldap_next_attribute()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_explode_dn.php" alt="function.php?ldap_explode_dn">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ldap_first_entry.php" alt="function.php?ldap_first_entry">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
