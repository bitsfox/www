<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:PDF_scale()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:PDF_scale()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-41.php" alt="group.php?41">PDF ��ʽ�ļ�������</a></div><br><h1><font color=0000bb>PDF_scale</font></h1><p>
����λ��<p>
<font color=ff8000>�﷨:</font> <b>boolean PDF_scale(int pdfid, double x-koor, double y-koor);</b><p>
<font color=ff8000>����ֵ:</font> ����ֵ<p>
<font color=ff8000>��������:</font> �����ļ���ʽ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������������λ�Ŵ����С������ pdfid Ϊ PDF �ļ����롣���� x-koor �� y-koor ��Ϊ���������ֱ�Ϊ X��Y �����ű�����<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����������&nbsp;X,&nbsp;Y&nbsp;���Ŵ�&nbsp;72&nbsp;�����ٴ�&nbsp;(0,0)&nbsp;�����ߵ�&nbsp;(1,&nbsp;1)���γ���&nbsp;(0,&nbsp;0)&nbsp;��&nbsp;(72,&nbsp;72)&nbsp;���ߡ�<br><br><font color="#0000BB">&lt;?php<br>PDF_scale</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">72.0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">72.0</font><font color="#007700">);<br></font><font color="#0000BB">PDF_lineto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">PDF_stroke</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-PDF_translate.php" alt="function.php?PDF_translate">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-PDF_rotate.php" alt="function.php?PDF_rotate">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
