<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ldap_search()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ldap_search()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-25.php" alt="group.php?25">LDAP 目录协议函数库</a></div><br><h1><font color=0000bb>ldap_search</font></h1><p>
列出树状简表。<p>
<font color=ff8000>语法:</font> <b>int ldap_search(int handle, string base_dn, string filter, array [attributes]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来列出树状资料，它的值域条件是 LDAP_SCOPE_SUBTREE。参数 handle 为打开 LDAP 的代号。参数 base_dn 为最基本的 dn 条件值，例如包括 o 和 c 二字段。参数 filter 为布尔条件，它的语法可以在 Netscape 站上找一份 dirsdkpg.pdf 文件，其中的 Search Syntax 一部份有详细的说明。参数 attributes 可省略，用来配置更细的列出属性。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下面范例为片段程序<br><br><font color="#0000BB">&lt;?php<br>$dn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"o=SuperLDAP&nbsp;Company,&nbsp;c=TW"</font><font color="#007700">;<br></font><font color="#0000BB">$filter</font><font color="#007700">=</font><font color="#DD0000">"(|(sn=$person*)(givenname=$person*))"</font><font color="#007700">;<br></font><font color="#0000BB">$justthese&nbsp;</font><font color="#007700">=&nbsp;array(&nbsp;</font><font color="#DD0000">"ou"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"sn"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"givenname"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"mail"</font><font color="#007700">);<br></font><font color="#0000BB">$sr</font><font color="#007700">=</font><font color="#0000BB">ldap_search</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$dn</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$filter</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$justthese</font><font color="#007700">);<br></font><font color="#0000BB">$info&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ldap_get_entries</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$sr</font><font color="#007700">);<br>print&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;entries&nbsp;returned&lt;p&gt;"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-ldap_list.php" alt="function.php?ldap_list">ldap_list()</a> &nbsp;<a href="function.php-ldap_read.php" alt="function.php?ldap_read">ldap_read()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ldap_read.php" alt="function.php?ldap_read">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ldap_unbind.php" alt="function.php?ldap_unbind">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
