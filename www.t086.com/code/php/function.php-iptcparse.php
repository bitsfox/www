<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:iptcparse()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:iptcparse()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-30.php" alt="group.php?30">杂项函数库</a></div><br><h1><font color=0000bb>iptcparse</font></h1><p>
使用 IPTC 模块解析位资料。<p>
<font color=ff8000>语法:</font> <b>array iptcparse(string iptcblock);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 图形处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数利用 IPTC 模块解析图形的位资料中的 APP13 信息。IPTC 模块可到 <a href="javascript:if(confirm('http://www.xe.net/iptc  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='../www.xe.net/iptc'" tppabs="/to.asp?url=http://www.xe.net/iptc">http://www.xe.net/iptc</a> 下载。若执行失败或者没有 APP13 的 IPTC 资料时返回 false。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php&nbsp;<br>$size&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">GetImageSize</font><font color="#007700">(</font><font color="#DD0000">"testimg.jpg"</font><font color="#007700">,&amp;</font><font color="#0000BB">$info</font><font color="#007700">);<br>if&nbsp;(isset(</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"APP13"</font><font color="#007700">]))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$iptc&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">iptcparse</font><font color="#007700">(</font><font color="#0000BB">$info</font><font color="#007700">[</font><font color="#DD0000">"APP13"</font><font color="#007700">]);<br>&nbsp;&nbsp;</font><font color="#0000BB">var_dump</font><font color="#007700">(</font><font color="#0000BB">$iptc</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ignore_user_abort.php" alt="function.php?ignore_user_abort">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-leak.php" alt="function.php?leak">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
