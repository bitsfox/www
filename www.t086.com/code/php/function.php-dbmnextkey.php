<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:dbmnextkey()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:dbmnextkey()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-11.php" alt="group.php?11">dbm 类数据库函数库</a></div><br><h1><font color=0000bb>dbmnextkey</font></h1><p>
取回下笔键值。<p>
<font color=ff8000>语法:</font> <b>string dbmnextkey(int handle, string key);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数取得数据库的下一笔键值 (key)。参数 handle 为打开数据库时所返回来的代号 ID。返回值即为键值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;之前已经打开&nbsp;DBM&nbsp;数据库。<br></font><font color="#0000BB">$key&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">dbmfirstkey</font><font color="#007700">(</font><font color="#0000BB">$dbm_id</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">$key</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$key&nbsp;=&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">dbmfetch</font><font color="#007700">(</font><font color="#0000BB">$dbm_id</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$key</font><font color="#007700">)&nbsp;.&nbsp;</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$key&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">dbmnextkey</font><font color="#007700">(</font><font color="#0000BB">$dbm_id</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$key</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-dbmfirstkey.php" alt="function.php?dbmfirstkey">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-dblist.php" alt="function.php?dblist">下一页</a> 
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
