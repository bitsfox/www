<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:PDF_translate()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:PDF_translate()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-41.php" alt="group.php?41">PDF 格式文件函数库</a></div><br><h1><font color=0000bb>PDF_translate</font></h1><p>
移动原点。<p>
<font color=ff8000>语法:</font> <b>boolean pdf_translate(int pdfid, double x-koor, double y-koor);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 特殊文件格式<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来移动原点。参数 pdfid 为 PDF 文件代码。参数 x-koor 与 y-koor 均为浮点数，分别为 X、Y 的移动距离。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下例先从&nbsp;(0,0)&nbsp;画条线到&nbsp;(100,&nbsp;100)，再将原点向&nbsp;X、Y&nbsp;移动&nbsp;(100,&nbsp;100),&nbsp;再画条&nbsp;(0,&nbsp;0)&nbsp;至&nbsp;(100,&nbsp;100)&nbsp;的线，形成&nbsp;(-100,&nbsp;-100)&nbsp;到&nbsp;(100,&nbsp;100)&nbsp;的线。程序的前后省略。<br><br><font color="#0000BB">&lt;?php<br>PDF_moveto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">PDF_lineto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">);<br></font><font color="#0000BB">PDF_stroke</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">PDF_translate</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">);<br></font><font color="#0000BB">PDF_moveto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">PDF_lineto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">,&nbsp;</font><font color="#0000BB">100</font><font color="#007700">);<br></font><font color="#0000BB">PDF_stroke</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-PDF_restore.php" alt="function.php?PDF_restore">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-PDF_scale.php" alt="function.php?PDF_scale">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
