<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:yp_next()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:yp_next()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-36.php" alt="group.php?36">NIS 函数库</a></div><br><h1><font color=0000bb>yp_next</font></h1><p>
指定 map 的下笔资料。<p>
<font color=ff8000>语法:</font> <b>array yp_next(string domain, string map, string key);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来取得 map 上指定资料的下笔返回资料的索引和其值。返回资料为数组，若失败则返回 false。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$entry&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">yp_next</font><font color="#007700">(</font><font color="#0000BB">$domain</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"passwd.byname"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"wilson"</font><font color="#007700">);<br>if(!</font><font color="#0000BB">$entry</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">yp_errno</font><font color="#007700">()&nbsp;.&nbsp;</font><font color="#DD0000">":&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">yp_err_string</font><font color="#007700">();<br>}<br></font><font color="#0000BB">$key&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">key</font><font color="#007700">(</font><font color="#0000BB">$entry</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"Wilson&nbsp;后的索引为:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$key</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"其值为:&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$entry</font><font color="#007700">[</font><font color="#0000BB">$key</font><font color="#007700">];<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-yp_get_default_domain.php" alt="function.php?yp_get_default_domain">yp_get_default_domain()</a> &nbsp;<a href="function.php-yp_errno.php" alt="function.php?yp_errno">yp_errno()</a> &nbsp;<a href="function.php-yp_err_string.php" alt="function.php?yp_err_string">yp_err_string()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-yp_first.php" alt="function.php?yp_first">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-yp_errno.php" alt="function.php?yp_errno">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
