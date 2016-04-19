<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:header()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:header()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-18.php" alt="group.php?18">HTTP 相关函数库</a></div><br><h1><font color=0000bb>header</font></h1><p>
送出 HTTP 协议的标头到浏览器<p>
<font color=ff8000>语法:</font> <b>int header(string string);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table>
        <p>标头 (header) 是服务器以 HTTP 协议传 HTML 资料到浏览器前所送出的字符串，在标头与 HTML 文件之间尚需空一行分隔。有关 
          HTTP 的详细说明，可以参考坊间的相关书籍或更详细的 RFC 2068 官方文件(<a href="../www.w3c.org/Protocols/rfc2068/rfc2068" tppabs="http://www.w3c.org/Protocols/rfc2068/rfc2068">http://www.w3.org/Protocols/rfc2068/rfc2068</a>)。在 
          PHP 中送回 HTML 资料前，需先传完所有的标头。
        <p>注意:  传统的标头一定包含下面三种标头之一，并只能出现一次。<ul type=disc><li>Content-Type: xxxx/yyyy<li>Location: xxxx:yyyy/zzzz<li>Status: nnn xxxxxx</ul><p>在新的多型标头规格 (Multipart MIME) 方可以出现二次以上。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
范例一:&nbsp;本例用来重导用户到&nbsp;PHP&nbsp;的官方网站。<br><font color="#0000BB">&lt;?php<br>Header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;http://www.php.net"</font><font color="#007700">);&nbsp;&nbsp;<br>exit;<br></font><font color="#0000BB">?&gt;<br></font><br>范例二:&nbsp;欲让用户每次都能得到最新的资料，而不是&nbsp;Proxy&nbsp;或&nbsp;cache&nbsp;中的资料，可以使用下列的标头<br>header("Expires:&nbsp;Mon,&nbsp;26&nbsp;Jul&nbsp;1997&nbsp;05:00:00&nbsp;GMT");<br>header("Last-Modified:&nbsp;"&nbsp;.&nbsp;gmdate("D,&nbsp;d&nbsp;M&nbsp;Y&nbsp;H:i:s")&nbsp;.&nbsp;"GMT");<br>header("Cache-Control:&nbsp;no-cache,&nbsp;must-revalidate");<br>header("Pragma:&nbsp;no-cache");<br><br>范例三:&nbsp;让用户的浏览器出现找不到文件的信息。<br><font color="#0000BB">&lt;?php<br>header</font><font color="#007700">(</font><font color="#DD0000">"Status:&nbsp;404&nbsp;Not&nbsp;Found"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font><br>范例四:&nbsp;bill@evil.inetarena.com&nbsp;(28-Apr-1999)&nbsp;提供让用户下载文件的范例。<br>header("Content-type:&nbsp;application/x-gzip");<br>header("Content-Disposition:&nbsp;attachment;&nbsp;filename=some-file.tar.gz");<br>header("Content-Description:&nbsp;PHP3&nbsp;Generated&nbsp;Data");<br></font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-unlink.php" alt="function.php?unlink">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-setcookie.php" alt="function.php?setcookie">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
