<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:GetImageSize()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:GetImageSize()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-20.php" alt="group.php?20">图形处理函数库</a></div><br><h1><font color=0000bb>GetImageSize</font></h1><p>
取得图片的长宽。<p>
<font color=ff8000>语法:</font> <b>array getimagesize(string filename, array [imageinfo]);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 图形处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可用来取得 GIF、JPEG 及 PNG 三种 WWW 上图片的高与宽，不需要安装 GD library 就可以使用本函数。返回的数组有四个元素。返回数组的第一个元素 (索引值 0) 是图片的高度，单位是像素 (pixel)。第二个元素 (索引值 1) 是图片的宽度。第三个元素 (索引值 2) 是图片的文件格式，其值 1 为 GIF 格式、 2 为 JPEG/JPG 格式、3 为 PNG 格式。第四个元素 (索引值 3) 为图片的高与宽字符串，height=xxx width=yyy。可省略的参数 imageinfo 用来取得一些图片的相关信息，例如 IPTC (<a href="javascript:if(confirm('http://www.xe.net/iptc  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='../www.xe.net/iptc'" tppabs="/to.asp?url=http://www.xe.net/iptc">http://www.xe.net/iptc</a>) 的 APP13 标记，就可以加在图片中，可利用 <a href="function.php-iptcparse.php" alt="function.php?iptcparse">iptcparse()</a> 来解析。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">MyImg</font><font color="#007700">(</font><font color="#0000BB">$imgfile</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$size&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">GetImageSize</font><font color="#007700">(</font><font color="#0000BB">$imgfile</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;img&nbsp;src=</font><font color="#007700">\"</font><font color="#DD0000">$imgfile</font><font color="#007700">\"</font><font color="#DD0000">&nbsp;$size</font><font color="#007700">[</font><font color="#DD0000">3</font><font color="#007700">]</font><font color="#DD0000">&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">MyImg</font><font color="#007700">(</font><font color="#DD0000">"img/img1.gif"</font><font color="#007700">);<br></font><font color="#0000BB">MyImg</font><font color="#007700">(</font><font color="#DD0000">"img/img2.png"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-hw_GetUsername.php" alt="function.php?hw_GetUsername">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ImageArc.php" alt="function.php?ImageArc">下一页</a> 
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
