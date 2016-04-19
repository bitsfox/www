<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ImagePSText()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ImagePSText()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-20.php" alt="group.php?20">图形处理函数库</a></div><br><h1><font color=0000bb>ImagePSText</font></h1><p>
写 PostScript 文字到图中。<p>
<font color=ff8000>语法:</font> <b>array imagepstext(int image, string text, int font, int size, int foreground, int background, int x, int y, int space, int tightness, float angle, int antialias_steps);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 图形处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将 PostScript Type1 字型文字写入图片。参数 image 为图形。text 参数为要写入的字符串。参数 font 则为指定的字型。参数 size 为字的大小，单位为像素 (pixel)。参数 foreground 及 background 分别为前景及背景色，程序会依这二色来修正文字边晕募锯齿。参数 x,y 为文字的坐标，以左下角开始计算。space 参数为文字间的空隔大小。参数 tightness 为单字间的紧密度。angle 为角度。最后一个参数 antialias_steps 为边缘锯齿状修正的等级，范围为 4 至 16。返回数组有四个元素，第一、二个分别为左下角的 x,y 值，第三、四个元素为右上角的 x,y 值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-ImagePSBBox.php" alt="function.php?ImagePSBBox">ImagePSBBox()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ImagePSEncodeFont.php" alt="function.php?ImagePSEncodeFont">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ImagePSBBox.php" alt="function.php?ImagePSBBox">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
