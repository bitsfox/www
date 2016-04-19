<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ImageGIF()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ImageGIF()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-20.php" alt="group.php?20">图形处理函数库</a></div><br><h1><font color=0000bb>ImageGIF</font></h1><p>
建立 GIF 图型。<p>
<font color=ff8000>语法:</font> <b>int imagegif(int im, string [filename]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 图形处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来建立一张 GIF 格式图形。参数 im 为使用 <a href="function.php-ImageCreate.php" alt="function.php?ImageCreate">ImageCreate()</a> 所建立的图片代码。参数 filename 可省略，若无本参数 filename，则会将图片指接送到浏览器端，记得在送出图片之前要先送出使用 Content-type: image/gif 的标头字符串 (header) 到浏览器端，以顺利传输图片。若要使用透明背景的 GIF 图，也就是 GIF89a 的格式，需要先使用 <a href="function.php-ImageColorTransparent.php" alt="function.php?ImageColorTransparent">ImageColorTransparent()</a> 配置透明背景。本函数产生的 GIF 图，由于有版权的问题，因此在商业上的使用还要多加考量。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ImageCreateFromGIF.php" alt="function.php?ImageCreateFromGIF">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-imap_append.php" alt="function.php?imap_append">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
