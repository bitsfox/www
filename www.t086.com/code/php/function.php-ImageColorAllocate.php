<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ImageColorAllocate()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ImageColorAllocate()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-20.php" alt="group.php?20">图形处理函数库</a></div><br><h1><font color=0000bb>ImageColorAllocate</font></h1><p>
匹配颜色。<p>
<font color=ff8000>语法:</font> <b>int imagecolorallocate(int im, int red, int green, int blue);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 图形处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来匹配图形的颜色，供其它绘图函数使用。参数 im 表示图形的 handle。参数 red、green、blue 是色彩三原色，其值从 0 至 255。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$white&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">);<br></font><font color="#0000BB">$black&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ImageCharUp.php" alt="function.php?ImageCharUp">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ImageColorTransparent.php" alt="function.php?ImageColorTransparent">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
