<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>函数:Ora_Logon()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>
<div align=center><table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:Ora_Logon()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-39.php" alt="39">Oracle 数据库函数库</a></div><br><h1><font color=0000bb>Ora_Logon</font></h1><p>
打开与 Oracle 的链接。<p>
<font color=ff8000>语法:</font> <b>int ora_logon(string user, string password);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数使 PHP 与 Oracle 建立链接。亦可以利用 SQL*Net 提供的 TNS name 链接到远端的数据库，方法如下：<p><code>$conn = Ora_Logon("user@TNSNAME", "pass");</code><p>连接成功会返回整数的索引值，返回 false 表示发生错误。详细的错误纠错可以使用 <a href="function.php-ora_error.php" alt="ora_error">ora_error()</a> 及 <a href="function.php-ora_errorcode.php" alt="ora_errorcode">ora_errorcode()</a>。对美国以外的国家，数据库中可能会有非 ASCII 字符的情形，这时需要在环境变量中加入 NLS_LANG 的变量。例如：若查询返回资料中有中文 BIG5 码的资料，在 ora_logon() 之前加入以下的程序码<p><code>putenv("NLS_LANG=american_taiwan.zht16big5");</code><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
pwalker@pwccanada.com&nbsp;(21-Sep-1998)&nbsp;提供了这二个范例<br><br>1.&nbsp;连接到与&nbsp;Web&nbsp;服务器同一台的&nbsp;Oracle&nbsp;数据库可用<br>&nbsp;&nbsp;&nbsp;<font color="#0000BB">&lt;?<br>&nbsp;&nbsp;&nbsp;Ora_Logon</font><font color="#007700">(</font><font color="#DD0000">"system"&nbsp;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"manager"</font><font color="#007700">);&nbsp;</font><font color="#0000BB">或<br>&nbsp;&nbsp;&nbsp;Ora_Logon</font><font color="#007700">(</font><font color="#DD0000">"system/manager"&nbsp;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">?&gt;<br></font><br>2.&nbsp;连接到远端&nbsp;Oracle&nbsp;服务器要利用&nbsp;SQL*Net&nbsp;或&nbsp;Net8<br>&nbsp;&nbsp;&nbsp;<font color="#0000BB">&lt;?<br>&nbsp;&nbsp;&nbsp;Ora_Logon</font><font color="#007700">(</font><font color="#DD0000">"system/manager@host"&nbsp;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">?&gt;<br></font>
</font>
<p><hr size=1><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-Ora_Logoff.php" alt="Ora_Logoff">上一页</a> 
      </td>
      <td> <a href="default.htm" alt="PHP"> PHP 手册 </a>  
	  </td>
      <td> <a href="function.php-Ora_Open.php" alt="Ora_Open">下一页</a> 
        ]</td>
    </tr>
  </table>
</div>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
