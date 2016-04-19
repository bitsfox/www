<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - LDAP 目录协议函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>LDAP 目录协议函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 25 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>LDAP (Lightweight Directory Access Protocol) 是一种轻量的目录存取协议，提供客户从各个角落连接到目录服务器中。在 RFC 1777 及 RFC 1778 中对 LDAP 有较深入的描述，亦可参考 Netscape 站上有关 LDAP 方面的资料。<p>

在 LDAP 的协议之中，很像硬盘目录结构或倒过来的树状结构。LDAP 的根就是全世界，第一级是属于国别 (countries) 性质的层级，之后可能会有公司 (organization) 的层级，接着是部门 (organizationalUnit)，再来为个人。而就像文件，每个人都会有所谓的显名 (distinguished name, 简称 dn)，dn 可能像酱子 cn=John Smith,ou=Accounts,o=My Company,c=US。

<p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;本例使用到&nbsp;connect,&nbsp;bind,&nbsp;search,&nbsp;interpret&nbsp;search<br>//&nbsp;result,&nbsp;close&nbsp;connection&nbsp;等等&nbsp;LDAP&nbsp;的功能。<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"&lt;h3&gt;LDAP&nbsp;搜寻测试&lt;/h3&gt;"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"连接中&nbsp;..."</font><font color="#007700">;<br></font><font color="#0000BB">$ds</font><font color="#007700">=</font><font color="#0000BB">ldap_connect</font><font color="#007700">(</font><font color="#DD0000">"localhost"</font><font color="#007700">);&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;先连上有效的&nbsp;LDAP&nbsp;服务器<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"连上&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$ds</font><font color="#007700">.</font><font color="#DD0000">"&lt;p&gt;"</font><font color="#007700">;<br><br>if&nbsp;(</font><font color="#0000BB">$ds</font><font color="#007700">)&nbsp;{&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"Binding&nbsp;..."</font><font color="#007700">;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$r</font><font color="#007700">=</font><font color="#0000BB">ldap_bind</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;匿名的&nbsp;bind，为只读属性<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"Bind&nbsp;返回&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$r</font><font color="#007700">.</font><font color="#DD0000">"&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"Searching&nbsp;for&nbsp;(sn=S*)&nbsp;..."</font><font color="#007700">;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;找寻&nbsp;S&nbsp;开头的姓氏<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$sr</font><font color="#007700">=</font><font color="#0000BB">ldap_search</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,</font><font color="#DD0000">"o=My&nbsp;Company,&nbsp;c=US"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"sn=S*"</font><font color="#007700">);&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"Search&nbsp;返回&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$sr</font><font color="#007700">.</font><font color="#DD0000">"&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"S&nbsp;开头的姓氏有&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">ldap_count_entries</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,</font><font color="#0000BB">$sr</font><font color="#007700">).</font><font color="#DD0000">"&nbsp;个&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"取回姓氏资料&nbsp;...&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$info&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ldap_get_entries</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$sr</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"资料返回&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;笔:&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"count"</font><font color="#007700">];&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"dn&nbsp;为:&nbsp;"</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#DD0000">"dn"</font><font color="#007700">]&nbsp;.</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"cn&nbsp;为:&nbsp;"</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#DD0000">"cn"</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;.</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"email&nbsp;为:&nbsp;"</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#DD0000">"mail"</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;.</font><font color="#DD0000">"&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"关闭链接"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">ldap_close</font><font color="#007700">(</font><font color="#0000BB">$ds</font><font color="#007700">);<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;h4&gt;无法连接到&nbsp;LDAP&nbsp;服务器&lt;/h4&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

欲使用 LDAP 服务器功能要先在 Web 服务器安装 LDAP 客户端程序，较着名的有美国密西根大学的 ldap-3.3 套件或者是 Netscape 的 Directory SDK。可到下列网址找回来安装<p>

<ul type=disc>
                <li>Netscape <a href="http://developer.netscape.com/tech/directory/" tppabs="/to.asp?url=http://developer.netscape.com/tech/directory/">http://developer.netscape.com/tech/directory/</a> 
                <li>密西根大学 <a href="/to.asp?url=http://www.umich.edu/%7Edirsvcs/ldap/index.html" tppabs="/to.asp?url=http://www.umich.edu/~dirsvcs/ldap/index.html">http://www.umich.edu/~dirsvcs/ldap/index.html</a> 
                <li>OpenLDAP 计划 <a href="/to.asp?url=http://www.openldap.com/" tppabs="/to.asp?url=http://www.openldap.com/">http://www.openldap.com</a> 
                <li>LDAP World <a href="http://elvira.innosoft.com/ldapworld" tppabs="/to.asp?url=http://elvira.innosoft.com/ldapworld">http://elvira.innosoft.com/ldapworld</a> 
              </ul>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-ldap_add.php" alt="function.php?ldap_add">ldap_add</a>:</td><td valign=top>增加 LDAP 名录的条目。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_mod_add.php" alt="function.php?ldap_mod_add">ldap_mod_add</a>:</td><td valign=top>增加 LDAP 名录的属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_mod_del.php" alt="function.php?ldap_mod_del">ldap_mod_del</a>:</td><td valign=top>删除 LDAP 名录的属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_mod_replace.php" alt="function.php?ldap_mod_replace">ldap_mod_replace</a>:</td><td valign=top>新的 LDAP 名录取代旧属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_bind.php" alt="function.php?ldap_bind">ldap_bind</a>:</td><td valign=top>系住 LDAP 目录。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_close.php" alt="function.php?ldap_close">ldap_close</a>:</td><td valign=top>结束 LDAP 链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_connect.php" alt="function.php?ldap_connect">ldap_connect</a>:</td><td valign=top>连上 LDAP 服务器。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_count_entries.php" alt="function.php?ldap_count_entries">ldap_count_entries</a>:</td><td valign=top>搜寻结果的数目。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_delete.php" alt="function.php?ldap_delete">ldap_delete</a>:</td><td valign=top>删除指定资源。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_dn2ufn.php" alt="function.php?ldap_dn2ufn">ldap_dn2ufn</a>:</td><td valign=top>将 dn 转成易读的名字。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_explode_dn.php" alt="function.php?ldap_explode_dn">ldap_explode_dn</a>:</td><td valign=top>切开 dn 的字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_first_attribute.php" alt="function.php?ldap_first_attribute">ldap_first_attribute</a>:</td><td valign=top>取得第一笔资源的属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_first_entry.php" alt="function.php?ldap_first_entry">ldap_first_entry</a>:</td><td valign=top>取得第一笔结果代号。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_free_result.php" alt="function.php?ldap_free_result">ldap_free_result</a>:</td><td valign=top>释放返回资料内存。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_get_attributes.php" alt="function.php?ldap_get_attributes">ldap_get_attributes</a>:</td><td valign=top>取得返回资料的属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_get_dn.php" alt="function.php?ldap_get_dn">ldap_get_dn</a>:</td><td valign=top>取得 DN 值。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_get_entries.php" alt="function.php?ldap_get_entries">ldap_get_entries</a>:</td><td valign=top>取得全部返回资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_get_values.php" alt="function.php?ldap_get_values">ldap_get_values</a>:</td><td valign=top>取得全部返回值。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_list.php" alt="function.php?ldap_list">ldap_list</a>:</td><td valign=top>列出简表。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_modify.php" alt="function.php?ldap_modify">ldap_modify</a>:</td><td valign=top>改变 LDAP 名录的属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_next_attribute.php" alt="function.php?ldap_next_attribute">ldap_next_attribute</a>:</td><td valign=top>取得返回资料的下笔属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_next_entry.php" alt="function.php?ldap_next_entry">ldap_next_entry</a>:</td><td valign=top>取得下一笔结果代号。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_read.php" alt="function.php?ldap_read">ldap_read</a>:</td><td valign=top>取得目前的资料属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_search.php" alt="function.php?ldap_search">ldap_search</a>:</td><td valign=top>列出树状简表。</td></tr>
<tr><td align=right valign=top><a href="function.php-ldap_unbind.php" alt="function.php?ldap_unbind">ldap_unbind</a>:</td><td valign=top>结束 LDAP 链接。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-24.php" alt="group.php?24">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-26.php" alt="group.php?26">下一页</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
