<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:mhash_count()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:mhash_count()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-29.php" alt="group.php?29">mhash 哈稀函数库</a></div><br><h1><font color=0000bb>mhash_count</font></h1><p>
取得哈稀 ID 的最大值。<p>
<font color=ff8000>语法:</font> <b>int mhash_count(void);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 编码处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来取得哈稀演算的最大 ID 值。在使用哈稀计算时，会从 0 开始计数到使用的数值。本函数不用输入参数。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$nr&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mhash_count</font><font color="#007700">();<br>for(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;=&nbsp;</font><font color="#0000BB">$nr</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">sprintf</font><font color="#007700">(</font><font color="#DD0000">"哈稀&nbsp;%s&nbsp;的区块大小为&nbsp;%d\n"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">mhash_get_hash_name</font><font color="#007700">(</font><font color="#0000BB">$i</font><font color="#007700">),&nbsp;</font><font color="#0000BB">mhash_get_block_size</font><font color="#007700">(</font><font color="#0000BB">$i</font><font color="#007700">));<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-mhash_get_block_size.php" alt="function.php?mhash_get_block_size">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-mhash.php" alt="function.php?mhash">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
