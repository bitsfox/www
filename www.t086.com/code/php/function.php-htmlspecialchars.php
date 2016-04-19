<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:htmlspecialchars()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:htmlspecialchars()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>htmlspecialchars</font></h1><p>
将特殊字符转成 HTML 格式。<p>
<font color=ff8000>语法:</font> <b>string htmlspecialchars(string string);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将特殊字符转成 HTML 的字符串格式 ( &amp;....; )。最常用到的场合可能就是处理客户留言的留言版了。<p>

<ul type=disc>
<li>&amp; (和) 转成 &amp;amp;
<li>" (双引号) 转成 &amp;quot;
<li>&lt; (小于) 转成 &amp;lt; 
<li>&gt; (大于) 转成 &amp;gt;
</ul><p>

此函数只转换上面的特殊字符，并不会全部转换成 HTML 所定的 ASCII 转换。
<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
这是&nbsp;aulbach@unter.franken.de&nbsp;(27-Jan-1999)&nbsp;所提供的范例<br><br>&lt;FORM&nbsp;ACTION=bla&gt;<br>&lt;H2&gt;Restaurant&nbsp;Description&lt;H2&gt;<br>Name&nbsp;of&nbsp;restaurant:<br>&lt;INPUT&nbsp;TYPE=text&nbsp;NAME="restname"&nbsp;VALUE="<font color="#0000BB">&lt;?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">HTMLSpecialChars</font><font color="#007700">(</font><font color="#0000BB">$restname</font><font color="#007700">);&nbsp;</font><font color="#0000BB">?&gt;</font>"&gt;&nbsp;<br>&lt;!--&nbsp;变量&nbsp;$restname&nbsp;是酱子的&nbsp;$restname="\"The&nbsp;White&nbsp;Horse\"";&nbsp;--&gt;<br>&lt;BR&gt;<br>输入描述&nbsp;(若您会&nbsp;HTML，可直接使用):&nbsp;&lt;BR&gt;<br>&lt;TEXTAREA&nbsp;NAME="descript"&gt;<font color="#0000BB">&lt;?<br>&nbsp;&nbsp;&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">HTMLSpecialChars</font><font color="#007700">(</font><font color="#0000BB">$descript</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>&lt;/TEXTAREA&gt;<br>&lt;INPUT&nbsp;TYPE=submit&gt;<br>&lt;/FORM&gt;</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-htmlentities.php" alt="function.php?htmlentities">htmlentities()</a> &nbsp;<a href="function.php-nl2br.php" alt="function.php?nl2br">nl2br()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-get_meta_tags.php" alt="function.php?get_meta_tags">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-htmlentities.php" alt="function.php?htmlentities">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
