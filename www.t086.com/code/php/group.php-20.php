<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 图形处理函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>图形处理函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 44 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>使用本功能需要在编译 PHP 前先安装 GD library，可到 <a href="/to.asp?url=http://www.boutell.com/gd" tppabs="/to.asp?url=http://www.boutell.com/gd">http://www.boutell.com/gd</a> 
              下载。在 1.6.2 版以前的 GD library 有支持 GIF 格式的功能，但因为 GIF 格式使用的 LZW 演算法牵涉到 
              Unisys 的专利权，因此在 GD library 1.6.2 版之后不支持 GIF 的格式。在安装 1.6.2 版时系统必须要有 
              libpng 及 zlib 二个动态链接函数库。前者可在 <a href="/to.asp?url=http://www.cdrom.com/pub/png" tppabs="/to.asp?url=http://www.cdrom.com/pub/png">http://www.cdrom.com/pub/png</a> 
              下载；后者可在 <a href="/to.asp?url=http://www.cdrom.com/pub/infozip/zlib" tppabs="/to.asp?url=http://www.cdrom.com/pub/infozip/zlib">http://www.cdrom.com/pub/infozip/zlib</a> 
              下载。而 GD library 也支持 TrueType 字型，请先到 <a href="/to.asp?url=http://www.freetype.org/" tppabs="/to.asp?url=http://www.freetype.org/">http://www.freetype.org</a> 
              下载动态链接程序库。 
              <p>

PHP 在 3.0.13 版之后，终于支持了 PNG 的图型格式，使用 PNG 就不怕会有版权的问题了，而且在 PHP 这个版本以后，安装编译时会检查 GD library 支持的是旧的 GIF 格式还是新的 PNG 格式来决定是否使用 GIF 或 PNG 的专用函数。<p>

若真的需要使用 GD Library 中有关 GIF 的部份，不妨找较旧的 FreeBSD 或者 Linux 版本，里面可能会有这些函数，但可能会因为侵犯到 Unisys 的专利权，而引发法律问题。同时请注意旧版的 TTF 字型相关函数可能不能用。<p>

以下是简单的例子<br>
                <img src="4.20.gif" alt="img/4.20.gif" width=428 height=129 border=0>
              <p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>Header</font><font color="#007700">(</font><font color="#DD0000">"Content-type:&nbsp;image/gif"</font><font color="#007700">);<br></font><font color="#0000BB">$im&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imagecreate</font><font color="#007700">(</font><font color="#0000BB">400</font><font color="#007700">,</font><font color="#0000BB">30</font><font color="#007700">);<br></font><font color="#0000BB">$black&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">$white&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">);<br></font><font color="#0000BB">imageline</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">350</font><font color="#007700">,&nbsp;</font><font color="#0000BB">25</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$black</font><font color="#007700">);<br></font><font color="#0000BB">imagearc</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">200</font><font color="#007700">,&nbsp;</font><font color="#0000BB">15</font><font color="#007700">,&nbsp;</font><font color="#0000BB">20</font><font color="#007700">,&nbsp;</font><font color="#0000BB">20</font><font color="#007700">,&nbsp;</font><font color="#0000BB">35</font><font color="#007700">,&nbsp;</font><font color="#0000BB">190</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$white</font><font color="#007700">);<br></font><font color="#0000BB">imagestring</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">5</font><font color="#007700">,&nbsp;</font><font color="#0000BB">4</font><font color="#007700">,&nbsp;</font><font color="#0000BB">10</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Graph&nbsp;TEST!!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$white</font><font color="#007700">);<br></font><font color="#0000BB">ImageGif</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">);<br></font><font color="#0000BB">ImageDestroy</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-GetImageSize.php" alt="function.php?GetImageSize">GetImageSize</a>:</td><td valign=top>取得图片的长宽。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageArc.php" alt="function.php?ImageArc">ImageArc</a>:</td><td valign=top>画弧线。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageChar.php" alt="function.php?ImageChar">ImageChar</a>:</td><td valign=top>写出横向字符。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCharUp.php" alt="function.php?ImageCharUp">ImageCharUp</a>:</td><td valign=top>写出直式字符。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorAllocate.php" alt="function.php?ImageColorAllocate">ImageColorAllocate</a>:</td><td valign=top>匹配颜色。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorTransparent.php" alt="function.php?ImageColorTransparent">ImageColorTransparent</a>:</td><td valign=top>指定透明背景色。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCopyResized.php" alt="function.php?ImageCopyResized">ImageCopyResized</a>:</td><td valign=top>复制新图并调整大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCreate.php" alt="function.php?ImageCreate">ImageCreate</a>:</td><td valign=top>建立新图。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageDashedLine.php" alt="function.php?ImageDashedLine">ImageDashedLine</a>:</td><td valign=top>绘虚线。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageDestroy.php" alt="function.php?ImageDestroy">ImageDestroy</a>:</td><td valign=top>结束图形。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFill.php" alt="function.php?ImageFill">ImageFill</a>:</td><td valign=top>图形着色。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFilledPolygon.php" alt="function.php?ImageFilledPolygon">ImageFilledPolygon</a>:</td><td valign=top>多边形区域着色。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFilledRectangle.php" alt="function.php?ImageFilledRectangle">ImageFilledRectangle</a>:</td><td valign=top>矩形区域着色。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFillToBorder.php" alt="function.php?ImageFillToBorder">ImageFillToBorder</a>:</td><td valign=top>指定颜色区域内着色。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFontHeight.php" alt="function.php?ImageFontHeight">ImageFontHeight</a>:</td><td valign=top>取得字型的高度。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFontWidth.php" alt="function.php?ImageFontWidth">ImageFontWidth</a>:</td><td valign=top>取得字型的宽度。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageInterlace.php" alt="function.php?ImageInterlace">ImageInterlace</a>:</td><td valign=top>使用交错式显示与否。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageLine.php" alt="function.php?ImageLine">ImageLine</a>:</td><td valign=top>绘实线。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageLoadFont.php" alt="function.php?ImageLoadFont">ImageLoadFont</a>:</td><td valign=top>载入点阵字型。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePolygon.php" alt="function.php?ImagePolygon">ImagePolygon</a>:</td><td valign=top>绘多边形。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageRectangle.php" alt="function.php?ImageRectangle">ImageRectangle</a>:</td><td valign=top>绘矩形。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageSetPixel.php" alt="function.php?ImageSetPixel">ImageSetPixel</a>:</td><td valign=top>绘点。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageString.php" alt="function.php?ImageString">ImageString</a>:</td><td valign=top>绘横式字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageStringUp.php" alt="function.php?ImageStringUp">ImageStringUp</a>:</td><td valign=top>绘直式字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageSX.php" alt="function.php?ImageSX">ImageSX</a>:</td><td valign=top>取得图片的宽度。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageSY.php" alt="function.php?ImageSY">ImageSY</a>:</td><td valign=top>取得图片的高度。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageTTFBBox.php" alt="function.php?ImageTTFBBox">ImageTTFBBox</a>:</td><td valign=top>计算 TTF 文字所占区域。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageTTFText.php" alt="function.php?ImageTTFText">ImageTTFText</a>:</td><td valign=top>写 TTF 文字到图中。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorAt.php" alt="function.php?ImageColorAt">ImageColorAt</a>:</td><td valign=top>取得图中指定点颜色的索引值。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorClosest.php" alt="function.php?ImageColorClosest">ImageColorClosest</a>:</td><td valign=top>计算色表中与指定颜色最接近者。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorExact.php" alt="function.php?ImageColorExact">ImageColorExact</a>:</td><td valign=top>计算色表上指定颜色索引值。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorResolve.php" alt="function.php?ImageColorResolve">ImageColorResolve</a>:</td><td valign=top>计算色表上指定或最接近颜色的索引值。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorSet.php" alt="function.php?ImageColorSet">ImageColorSet</a>:</td><td valign=top>配置色表上指定索引的颜色。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorsForIndex.php" alt="function.php?ImageColorsForIndex">ImageColorsForIndex</a>:</td><td valign=top>取得色表上指定索引的颜色。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorsTotal.php" alt="function.php?ImageColorsTotal">ImageColorsTotal</a>:</td><td valign=top>计算图的颜色数。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSLoadFont.php" alt="function.php?ImagePSLoadFont">ImagePSLoadFont</a>:</td><td valign=top>载入 PostScript 字型。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSFreeFont.php" alt="function.php?ImagePSFreeFont">ImagePSFreeFont</a>:</td><td valign=top>卸下 PostScript 字型。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSEncodeFont.php" alt="function.php?ImagePSEncodeFont">ImagePSEncodeFont</a>:</td><td valign=top>PostScript 字型转成向量字。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSText.php" alt="function.php?ImagePSText">ImagePSText</a>:</td><td valign=top>写 PostScript 文字到图中。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSBBox.php" alt="function.php?ImagePSBBox">ImagePSBBox</a>:</td><td valign=top>计算 PostScript 文字所占区域。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCreateFromPNG.php" alt="function.php?ImageCreateFromPNG">ImageCreateFromPNG</a>:</td><td valign=top>取出 PNG 图型。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePNG.php" alt="function.php?ImagePNG">ImagePNG</a>:</td><td valign=top>建立 PNG 图型。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCreateFromGIF.php" alt="function.php?ImageCreateFromGIF">ImageCreateFromGIF</a>:</td><td valign=top>取出 GIF 图型。</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageGIF.php" alt="function.php?ImageGIF">ImageGIF</a>:</td><td valign=top>建立 GIF 图型。</td></tr>
</table><p><hr size=1><br>整理:&nbsp;<a href="mailto:php@videopokercity.com">php</a>&nbsp;(<a href="http://www.videopokercity.com/">video poker guy</a>)<p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-19.php" alt="group.php?19">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-21.php" alt="group.php?21">下一页</a> 
        ]</td>
    </tr>
  </table>
</div><p><br><br>
  sponsor: <a href="http://www.gamblinggala.com/">online gambling</a>
  <a href="http://www.onlinecasinoage.com/">online casino</a>,
  <a href="sponsor.php">click to be a sponsor.</a>
  <br>
</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
