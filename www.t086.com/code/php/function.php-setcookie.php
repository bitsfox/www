<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:setcookie()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:setcookie()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-18.php" alt="group.php?18">HTTP 相关函数库</a></div><br><h1><font color=0000bb>setcookie</font></h1><p>
送出 Cookie 信息到浏览器。<p>
<font color=ff8000>语法:</font> <b>int setcookie(string name, string value, int expire, string path, string domain, int secure);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数会跟着标头 Header 送出一段小信息字符串到浏览器。使用本函数要在送出 HTML 资料前，实际上 cookie 也算标头的一部份。本函数的参数除了第一个 name 之外，都是可以省略的。参数 name 表示 cookie 的名称；value 表示这个 cookie 的值，这个参数为空字符串则表示取消浏览器中该 cookie 的资料；expire 表示该 cookie 的有效时间；path 为该 cookie 的相关路径；domain 表示 cookie 的网站；secure 则需在 https 的安全传输时才有效。想得到更多的 cookie 信息可以到 <a href="javascript:if(confirm('http://www.netscape.com/newsref/std/cookie_spec.html  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='../www.netscape.com/newsref/std/cookie_spec.html'" tppabs="/to.asp?url=http://www.netscape.com/newsref/std/cookie_spec.html">http://www.netscape.com/newsref/std/cookie_spec.html</a>，由 cookie 原创者 Netscape 所提供的完整信息。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
dante@mpath.com&nbsp;(27-May-1999)&nbsp;所提供的&nbsp;setcookie()&nbsp;及&nbsp;header()&nbsp;范例。<br><br><font color="#0000BB">&lt;?php<br>$status&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>if&nbsp;(isset(</font><font color="#0000BB">$myTstCky</font><font color="#007700">)&nbsp;&amp;&amp;&nbsp;(</font><font color="#0000BB">$myTstCky&nbsp;</font><font color="#007700">==&nbsp;</font><font color="#DD0000">"ChocChip"</font><font color="#007700">))&nbsp;</font><font color="#0000BB">$status&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>if&nbsp;(!isset(</font><font color="#0000BB">$CCHK</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">setcookie</font><font color="#007700">(</font><font color="#DD0000">"myTstCky"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"ChocChip"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;$PHP_SELF?CCHK=1"</font><font color="#007700">);<br>&nbsp;&nbsp;exit;<br>}<br></font><font color="#0000BB">?&gt;<br></font>&lt;html&gt;<br>&lt;head&gt;&lt;title&gt;Cookie&nbsp;Check&lt;/title&gt;&lt;/head&gt;<br>&lt;body&nbsp;bgcolor="#FFFFFF"&nbsp;text="#000000"&gt;<br>Cookie&nbsp;Check&nbsp;Status:&nbsp;<br><font color="#0000BB">&lt;?php&nbsp;<br>printf&nbsp;</font><font color="#007700">(</font><font color="#DD0000">'&lt;font&nbsp;color="#%s"&gt;%s&lt;/font&gt;&lt;br&gt;;'</font><font color="#007700">,&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">$status&nbsp;</font><font color="#007700">?&nbsp;</font><font color="#DD0000">"00FF00"&nbsp;</font><font color="#007700">:&nbsp;</font><font color="#DD0000">"FF0000"</font><font color="#007700">,<br>&nbsp;&nbsp;</font><font color="#0000BB">$status&nbsp;</font><font color="#007700">?&nbsp;</font><font color="#DD0000">"PASSED!"&nbsp;</font><font color="#007700">:&nbsp;</font><font color="#DD0000">"FAILED!"</font><font color="#007700">);&nbsp;<br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-header.php" alt="function.php?header">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-hw_Children.php" alt="function.php?hw_Children">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
