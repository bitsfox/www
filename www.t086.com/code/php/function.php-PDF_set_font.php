<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:PDF_set_font()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:PDF_set_font()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-41.php" alt="group.php?41">PDF 格式文件函数库</a></div><br><h1><font color=0000bb>PDF_set_font</font></h1><p>
配置使用的字型及大小。<p>
<font color=ff8000>语法:</font> <b>boolean pdf_set_font(int pdfid, string fontname, double size, int encoding);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 特殊文件格式<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来配置指定的字型及字型大小，供程序有关字符串输出使用。参数 pdfid 为 PDF 文件代码。参数 fontname 为字型名称。参数 size 为字型大小。参数 encoding 的默认值为 4，其数字如下 0 表 builtin、1 为 pdfdoc、2 为 macroman、3 表 macexpert 与 4 为 winansi。成功则返回 true 值。本函数需要 pdflib 2.0 以上方可支持。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-PDF_show_xy.php" alt="function.php?PDF_show_xy">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-PDF_set_leading.php" alt="function.php?PDF_set_leading">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
