<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:readdir()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:readdir()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-12.php" alt="group.php?12">目录管理函数库</a></div><br><h1><font color=0000bb>readdir</font></h1><p>
读取目录 handle。<p>
<font color=ff8000>语法:</font> <b>string readdir(int dir_handle);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 文件存取<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来读取目录。返回目录中的文件名称，读取不照任何特殊的顺序。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
本例列出目前目录的所有文件<br><br><font color="#0000BB">&lt;?php<br>$handle</font><font color="#007700">=</font><font color="#0000BB">opendir</font><font color="#007700">(</font><font color="#DD0000">'.'</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"目录&nbsp;handle:&nbsp;$handle</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"文件:\n"</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$file&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">readdir</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$file</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">closedir</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);&nbsp;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-opendir.php" alt="function.php?opendir">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-rewinddir.php" alt="function.php?rewinddir">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
