<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:GetImageSize()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:GetImageSize()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-20.php" alt="group.php?20">ͼ�δ�������</a></div><br><h1><font color=0000bb>GetImageSize</font></h1><p>
ȡ��ͼƬ�ĳ���<p>
<font color=ff8000>�﷨:</font> <b>array getimagesize(string filename, array [imageinfo]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ͼ�δ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������������ȡ�� GIF��JPEG �� PNG ���� WWW ��ͼƬ�ĸ��������Ҫ��װ GD library �Ϳ���ʹ�ñ����������ص��������ĸ�Ԫ�ء���������ĵ�һ��Ԫ�� (����ֵ 0) ��ͼƬ�ĸ߶ȣ���λ������ (pixel)���ڶ���Ԫ�� (����ֵ 1) ��ͼƬ�Ŀ�ȡ�������Ԫ�� (����ֵ 2) ��ͼƬ���ļ���ʽ����ֵ 1 Ϊ GIF ��ʽ�� 2 Ϊ JPEG/JPG ��ʽ��3 Ϊ PNG ��ʽ�����ĸ�Ԫ�� (����ֵ 3) ΪͼƬ�ĸ�����ַ�����height=xxx width=yyy����ʡ�ԵĲ��� imageinfo ����ȡ��һЩͼƬ�������Ϣ������ IPTC (<a href="javascript:if(confirm('http://www.xe.net/iptc  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='../www.xe.net/iptc'" tppabs="/to.asp?url=http://www.xe.net/iptc">http://www.xe.net/iptc</a>) �� APP13 ��ǣ��Ϳ��Լ���ͼƬ�У������� <a href="function.php-iptcparse.php" alt="function.php?iptcparse">iptcparse()</a> ��������<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">MyImg</font><font color="#007700">(</font><font color="#0000BB">$imgfile</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$size&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">GetImageSize</font><font color="#007700">(</font><font color="#0000BB">$imgfile</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;img&nbsp;src=</font><font color="#007700">\"</font><font color="#DD0000">$imgfile</font><font color="#007700">\"</font><font color="#DD0000">&nbsp;$size</font><font color="#007700">[</font><font color="#DD0000">3</font><font color="#007700">]</font><font color="#DD0000">&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">MyImg</font><font color="#007700">(</font><font color="#DD0000">"img/img1.gif"</font><font color="#007700">);<br></font><font color="#0000BB">MyImg</font><font color="#007700">(</font><font color="#DD0000">"img/img2.png"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-hw_GetUsername.php" alt="function.php?hw_GetUsername">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ImageArc.php" alt="function.php?ImageArc">��һҳ</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
