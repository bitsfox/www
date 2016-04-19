<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - Vmailmgr 邮件处理函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>Vmailmgr 邮件处理函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 5 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>本函数需要 qmail 及 vmailmgr，可以到 <a href="/to.asp?url=http://www.qmail.org/" tppabs="/to.asp?url=http://www.qmail.org/">http://www.qmail.org</a> 
              及 <a href="/to.asp?url=http://www.qcc.sk.ca/%7Ebguenter/distrib/vmailmgr/" tppabs="/to.asp?url=http://www.qcc.sk.ca/~bguenter/distrib/vmailmgr/">http://www.qcc.sk.ca/~bguenter/distrib/vmailmgr/</a> 
              取得相关的资料及程序。 
              <p>

在使用时需要二个变量，分别为 domain 名字及密码，密码只有前八位数有效。例如<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>dl</font><font color="#007700">(</font><font color="#DD0000">"php3_vmailmgr.so"</font><font color="#007700">);&nbsp;</font><font color="#FF8000">//载入动态函数库<br></font><font color="#0000BB">$vdomain</font><font color="#007700">=</font><font color="#DD0000">"vdomain.com"</font><font color="#007700">;<br></font><font color="#0000BB">$basepwd</font><font color="#007700">=</font><font color="#DD0000">"password"</font><font color="#007700">;<br></font><font color="#FF8000">//&nbsp;以下为欲使用的&nbsp;Vmailmgr&nbsp;函数<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-vm_adduser.php" alt="function.php?vm_adduser">vm_adduser</a>:</td><td valign=top>加入新用户。</td></tr>
<tr><td align=right valign=top><a href="function.php-vm_addalias.php" alt="function.php?vm_addalias">vm_addalias</a>:</td><td valign=top>加入新别名。</td></tr>
<tr><td align=right valign=top><a href="function.php-vm_passwd.php" alt="function.php?vm_passwd">vm_passwd</a>:</td><td valign=top>改变用户密码。</td></tr>
<tr><td align=right valign=top><a href="function.php-vm_delalias.php" alt="function.php?vm_delalias">vm_delalias</a>:</td><td valign=top>删除别名。</td></tr>
<tr><td align=right valign=top><a href="function.php-vm_deluser.php" alt="function.php?vm_deluser">vm_deluser</a>:</td><td valign=top>删除用户。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-49.php" alt="group.php?49">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-51.php" alt="group.php?51">下一页</a> 
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
