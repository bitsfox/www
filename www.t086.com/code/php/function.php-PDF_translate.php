<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:PDF_translate()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:PDF_translate()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-41.php" alt="group.php?41">PDF ��ʽ�ļ�������</a></div><br><h1><font color=0000bb>PDF_translate</font></h1><p>
�ƶ�ԭ�㡣<p>
<font color=ff8000>�﷨:</font> <b>boolean pdf_translate(int pdfid, double x-koor, double y-koor);</b><p>
<font color=ff8000>����ֵ:</font> ����ֵ<p>
<font color=ff8000>��������:</font> �����ļ���ʽ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�����������ƶ�ԭ�㡣���� pdfid Ϊ PDF �ļ����롣���� x-koor �� y-koor ��Ϊ���������ֱ�Ϊ X��Y ���ƶ����롣<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
�����ȴ�&nbsp;(0,0)&nbsp;�����ߵ�&nbsp;(100,&nbsp;100)���ٽ�ԭ����&nbsp;X��Y&nbsp;�ƶ�&nbsp;(100,&nbsp;100),&nbsp;�ٻ���&nbsp;(0,&nbsp;0)&nbsp;��&nbsp;(100,&nbsp;100)&nbsp;���ߣ��γ�&nbsp;(-100,&nbsp;-100)&nbsp;��&nbsp;(100,&nbsp;100)&nbsp;���ߡ������ǰ��ʡ�ԡ�<br><br><font color="#0000BB">&lt;?php<br>PDF_moveto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">PDF_lineto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">);<br></font><font color="#0000BB">PDF_stroke</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">PDF_translate</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">);<br></font><font color="#0000BB">PDF_moveto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">PDF_lineto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">);<br></font><font color="#0000BB">PDF_stroke</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-PDF_restore.php" alt="function.php?PDF_restore">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-PDF_scale.php" alt="function.php?PDF_scale">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
