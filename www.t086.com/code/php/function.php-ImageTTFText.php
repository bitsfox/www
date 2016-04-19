<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ImageTTFText()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ImageTTFText()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-20.php" alt="group.php?20">图形处理函数库</a></div><br><h1><font color=0000bb>ImageTTFText</font></h1><p>
写 TTF 文字到图中。<p>
<font color=ff8000>语法:</font> <b>array ImageTTFText(int im, int size, int angle, int x, int y, int col, string fontfile, string text);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 图形处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将 TTF (TrueType Fonts) 字型文字写入图片。参数 size 为字形的尺寸；angle 为字型的角度，顺时针计算，0 度为水平，也就是三点钟的方向 (由左到右)，90 度则为由下到上的文字；x,y 二参数为文字的坐标值 (原点为左上角)；参数 col 为字的颜色；fontfile 为字型文件名称，亦可是远端的文件；text 当然就是字符串内容了。返回值为数组，包括了八个元素，头二个分别为左下的 x、y 坐标，第三、四个为右下角的 x、y 坐标，第五、六及七、八二组分别为右上及左上的 x、y 坐标。治募注意的是欲使用本函数，系统要装妥 GD 及 Freetype 二个函数库。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
本例建立一个&nbsp;400x30&nbsp;pixel&nbsp;大小的黑底图，并用&nbsp;Arial&nbsp;向量字体写出&nbsp;I&nbsp;am&nbsp;NUMBER&nbsp;ONE&nbsp;!!&nbsp;的白字。<br><br><font color="#0000BB">&lt;?php<br>Header</font><font color="#007700">(</font><font color="#DD0000">"Content-type:&nbsp;image/gif"</font><font color="#007700">);<br></font><font color="#0000BB">$im&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imagecreate</font><font color="#007700">(</font><font color="#0000BB">400</font><font color="#007700">,</font><font color="#0000BB">30</font><font color="#007700">);<br></font><font color="#0000BB">$black&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">$white&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">);<br></font><font color="#0000BB">ImageTTFText</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">20</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">10</font><font color="#007700">,&nbsp;</font><font color="#0000BB">20</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$white</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"/somewhere/arial.ttf"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"I&nbsp;am&nbsp;NUMBER&nbsp;ONE&nbsp;!!"</font><font color="#007700">);<br></font><font color="#0000BB">ImageGif</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">);<br></font><font color="#0000BB">ImageDestroy</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-ImageTTFBBox.php" alt="function.php?ImageTTFBBox">ImageTTFBBox()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ImageTTFBBox.php" alt="function.php?ImageTTFBBox">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ImageColorAt.php" alt="function.php?ImageColorAt">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
