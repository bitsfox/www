<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ImageLoadFont()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ImageLoadFont()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-20.php" alt="group.php?20">图形处理函数库</a></div><br><h1><font color=0000bb>ImageLoadFont</font></h1><p>
载入点阵字型。<p>
<font color=ff8000>语法:</font> <b>int imageloadfont(string file);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 图形处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来载入用户自订的点阵字型。返回值为字型的代号，此值为大于 5 的整数。字型文件的格式如表<p>
<table border=1>
<tr><th>byte偏移</th><th>类型</th><th>说明</th></tr>
<tr><td>0-3</td><td>int</td><td>文件中字符的数目</td></tr>
<tr><td>4-7</td><td>int</td><td>字型的启始 ASCII 字符，例如从 ASCII 32 的空白开始</td></tr>
<tr><td>8-11</td><td>int</td><td>字符的宽度</td></tr>
<tr><td>12-15</td><td>int</td><td>字符的高度</td></tr>
<tr><td>16以后</td><td>char</td><td>字符的位值，也就是点阵的内容</td></tr>
</table><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-ImageFontHeight.php" alt="function.php?ImageFontHeight">ImageFontHeight()</a> &nbsp;<a href="function.php-ImageFontWidth.php" alt="function.php?ImageFontWidth">ImageFontWidth()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ImageLine.php" alt="function.php?ImageLine">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ImagePolygon.php" alt="function.php?ImagePolygon">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
