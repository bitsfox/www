<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ͼ�δ�������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>ͼ�δ�������</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 44 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>ʹ�ñ�������Ҫ�ڱ��� PHP ǰ�Ȱ�װ GD library���ɵ� <a href="/to.asp?url=http://www.boutell.com/gd" tppabs="/to.asp?url=http://www.boutell.com/gd">http://www.boutell.com/gd</a> 
              ���ء��� 1.6.2 ����ǰ�� GD library ��֧�� GIF ��ʽ�Ĺ��ܣ�����Ϊ GIF ��ʽʹ�õ� LZW ���㷨ǣ�浽 
              Unisys ��ר��Ȩ������� GD library 1.6.2 ��֮��֧�� GIF �ĸ�ʽ���ڰ�װ 1.6.2 ��ʱϵͳ����Ҫ�� 
              libpng �� zlib ������̬���Ӻ����⡣ǰ�߿��� <a href="/to.asp?url=http://www.cdrom.com/pub/png" tppabs="/to.asp?url=http://www.cdrom.com/pub/png">http://www.cdrom.com/pub/png</a> 
              ���أ����߿��� <a href="/to.asp?url=http://www.cdrom.com/pub/infozip/zlib" tppabs="/to.asp?url=http://www.cdrom.com/pub/infozip/zlib">http://www.cdrom.com/pub/infozip/zlib</a> 
              ���ء��� GD library Ҳ֧�� TrueType ���ͣ����ȵ� <a href="/to.asp?url=http://www.freetype.org/" tppabs="/to.asp?url=http://www.freetype.org/">http://www.freetype.org</a> 
              ���ض�̬���ӳ���⡣ 
              <p>

PHP �� 3.0.13 ��֮������֧���� PNG ��ͼ�͸�ʽ��ʹ�� PNG �Ͳ��»��а�Ȩ�������ˣ������� PHP ����汾�Ժ󣬰�װ����ʱ���� GD library ֧�ֵ��Ǿɵ� GIF ��ʽ�����µ� PNG ��ʽ�������Ƿ�ʹ�� GIF �� PNG ��ר�ú�����<p>

�������Ҫʹ�� GD Library ���й� GIF �Ĳ��ݣ������ҽϾɵ� FreeBSD ���� Linux �汾��������ܻ�����Щ�����������ܻ���Ϊ�ַ��� Unisys ��ר��Ȩ���������������⡣ͬʱ��ע��ɰ�� TTF ������غ������ܲ����á�<p>

�����Ǽ򵥵�����<br>
                <img src="4.20.gif" alt="img/4.20.gif" width=428 height=129 border=0>
              <p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>Header</font><font color="#007700">(</font><font color="#DD0000">"Content-type:&nbsp;image/gif"</font><font color="#007700">);<br></font><font color="#0000BB">$im&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imagecreate</font><font color="#007700">(</font><font color="#0000BB">400</font><font color="#007700">,</font><font color="#0000BB">30</font><font color="#007700">);<br></font><font color="#0000BB">$black&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">$white&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">);<br></font><font color="#0000BB">imageline</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">350</font><font color="#007700">,&nbsp;</font><font color="#0000BB">25</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$black</font><font color="#007700">);<br></font><font color="#0000BB">imagearc</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">200</font><font color="#007700">,&nbsp;</font><font color="#0000BB">15</font><font color="#007700">,&nbsp;</font><font color="#0000BB">20</font><font color="#007700">,&nbsp;</font><font color="#0000BB">20</font><font color="#007700">,&nbsp;</font><font color="#0000BB">35</font><font color="#007700">,&nbsp;</font><font color="#0000BB">190</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$white</font><font color="#007700">);<br></font><font color="#0000BB">imagestring</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">5</font><font color="#007700">,&nbsp;</font><font color="#0000BB">4</font><font color="#007700">,&nbsp;</font><font color="#0000BB">10</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Graph&nbsp;TEST!!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$white</font><font color="#007700">);<br></font><font color="#0000BB">ImageGif</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">);<br></font><font color="#0000BB">ImageDestroy</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-GetImageSize.php" alt="function.php?GetImageSize">GetImageSize</a>:</td><td valign=top>ȡ��ͼƬ�ĳ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageArc.php" alt="function.php?ImageArc">ImageArc</a>:</td><td valign=top>�����ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageChar.php" alt="function.php?ImageChar">ImageChar</a>:</td><td valign=top>д�������ַ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCharUp.php" alt="function.php?ImageCharUp">ImageCharUp</a>:</td><td valign=top>д��ֱʽ�ַ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorAllocate.php" alt="function.php?ImageColorAllocate">ImageColorAllocate</a>:</td><td valign=top>ƥ����ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorTransparent.php" alt="function.php?ImageColorTransparent">ImageColorTransparent</a>:</td><td valign=top>ָ��͸������ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCopyResized.php" alt="function.php?ImageCopyResized">ImageCopyResized</a>:</td><td valign=top>������ͼ��������С��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCreate.php" alt="function.php?ImageCreate">ImageCreate</a>:</td><td valign=top>������ͼ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageDashedLine.php" alt="function.php?ImageDashedLine">ImageDashedLine</a>:</td><td valign=top>�����ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageDestroy.php" alt="function.php?ImageDestroy">ImageDestroy</a>:</td><td valign=top>����ͼ�Ρ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFill.php" alt="function.php?ImageFill">ImageFill</a>:</td><td valign=top>ͼ����ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFilledPolygon.php" alt="function.php?ImageFilledPolygon">ImageFilledPolygon</a>:</td><td valign=top>�����������ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFilledRectangle.php" alt="function.php?ImageFilledRectangle">ImageFilledRectangle</a>:</td><td valign=top>����������ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFillToBorder.php" alt="function.php?ImageFillToBorder">ImageFillToBorder</a>:</td><td valign=top>ָ����ɫ��������ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFontHeight.php" alt="function.php?ImageFontHeight">ImageFontHeight</a>:</td><td valign=top>ȡ�����͵ĸ߶ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageFontWidth.php" alt="function.php?ImageFontWidth">ImageFontWidth</a>:</td><td valign=top>ȡ�����͵Ŀ�ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageInterlace.php" alt="function.php?ImageInterlace">ImageInterlace</a>:</td><td valign=top>ʹ�ý���ʽ��ʾ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageLine.php" alt="function.php?ImageLine">ImageLine</a>:</td><td valign=top>��ʵ�ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageLoadFont.php" alt="function.php?ImageLoadFont">ImageLoadFont</a>:</td><td valign=top>����������͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePolygon.php" alt="function.php?ImagePolygon">ImagePolygon</a>:</td><td valign=top>�����Ρ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageRectangle.php" alt="function.php?ImageRectangle">ImageRectangle</a>:</td><td valign=top>����Ρ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageSetPixel.php" alt="function.php?ImageSetPixel">ImageSetPixel</a>:</td><td valign=top>��㡣</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageString.php" alt="function.php?ImageString">ImageString</a>:</td><td valign=top>���ʽ�ַ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageStringUp.php" alt="function.php?ImageStringUp">ImageStringUp</a>:</td><td valign=top>��ֱʽ�ַ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageSX.php" alt="function.php?ImageSX">ImageSX</a>:</td><td valign=top>ȡ��ͼƬ�Ŀ�ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageSY.php" alt="function.php?ImageSY">ImageSY</a>:</td><td valign=top>ȡ��ͼƬ�ĸ߶ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageTTFBBox.php" alt="function.php?ImageTTFBBox">ImageTTFBBox</a>:</td><td valign=top>���� TTF ������ռ����</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageTTFText.php" alt="function.php?ImageTTFText">ImageTTFText</a>:</td><td valign=top>д TTF ���ֵ�ͼ�С�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorAt.php" alt="function.php?ImageColorAt">ImageColorAt</a>:</td><td valign=top>ȡ��ͼ��ָ������ɫ������ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorClosest.php" alt="function.php?ImageColorClosest">ImageColorClosest</a>:</td><td valign=top>����ɫ������ָ����ɫ��ӽ��ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorExact.php" alt="function.php?ImageColorExact">ImageColorExact</a>:</td><td valign=top>����ɫ����ָ����ɫ����ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorResolve.php" alt="function.php?ImageColorResolve">ImageColorResolve</a>:</td><td valign=top>����ɫ����ָ������ӽ���ɫ������ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorSet.php" alt="function.php?ImageColorSet">ImageColorSet</a>:</td><td valign=top>����ɫ����ָ����������ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorsForIndex.php" alt="function.php?ImageColorsForIndex">ImageColorsForIndex</a>:</td><td valign=top>ȡ��ɫ����ָ����������ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageColorsTotal.php" alt="function.php?ImageColorsTotal">ImageColorsTotal</a>:</td><td valign=top>����ͼ����ɫ����</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSLoadFont.php" alt="function.php?ImagePSLoadFont">ImagePSLoadFont</a>:</td><td valign=top>���� PostScript ���͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSFreeFont.php" alt="function.php?ImagePSFreeFont">ImagePSFreeFont</a>:</td><td valign=top>ж�� PostScript ���͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSEncodeFont.php" alt="function.php?ImagePSEncodeFont">ImagePSEncodeFont</a>:</td><td valign=top>PostScript ����ת�������֡�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSText.php" alt="function.php?ImagePSText">ImagePSText</a>:</td><td valign=top>д PostScript ���ֵ�ͼ�С�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePSBBox.php" alt="function.php?ImagePSBBox">ImagePSBBox</a>:</td><td valign=top>���� PostScript ������ռ����</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCreateFromPNG.php" alt="function.php?ImageCreateFromPNG">ImageCreateFromPNG</a>:</td><td valign=top>ȡ�� PNG ͼ�͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImagePNG.php" alt="function.php?ImagePNG">ImagePNG</a>:</td><td valign=top>���� PNG ͼ�͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageCreateFromGIF.php" alt="function.php?ImageCreateFromGIF">ImageCreateFromGIF</a>:</td><td valign=top>ȡ�� GIF ͼ�͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-ImageGIF.php" alt="function.php?ImageGIF">ImageGIF</a>:</td><td valign=top>���� GIF ͼ�͡�</td></tr>
</table><p><hr size=1><br>����:&nbsp;<a href="mailto:php@videopokercity.com">php</a>&nbsp;(<a href="http://www.videopokercity.com/">video poker guy</a>)<p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-19.php" alt="group.php?19">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-21.php" alt="group.php?21">��һҳ</a> 
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
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
