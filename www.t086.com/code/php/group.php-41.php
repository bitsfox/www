<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - PDF 格式文件函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>PDF 格式文件函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 65 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>PDF 是 Adobe 所发展的可携式文件格式，它的文件可以在网络上传输、浏览，甚至使用印表机印出，或使用其它输出装置输出，都可以保存原来的文字及图片的编排。详细的信息可以参考 
              <a href="/to.asp?url=http://www.adobe.com/" tppabs="/to.asp?url=http://www.adobe.com/">Adobe 
              的网站</a>。参考其中有关 PDF 或 Acrobat 的部份。
              <p> 在 UNIX 系统中，可以使用 Thomas Merz 开发的 <a href="/to.asp?url=http://www.pdflib.com/pdflib/index.html" tppabs="/to.asp?url=http://www.pdflib.com/pdflib/index.html">PDF 
                函数库</a>。将它编译安装完成后，再编译 PHP 程序方可供 PHP 使用 pdflib。编译时可能要 <a href="/to.asp?url=ftp://ftp.uu.net/graphics/jpeg/" tppabs="/to.asp?url=ftp://ftp.uu.net/graphics/jpeg/">JPEG 
                library</a> 及 <a href="/to.asp?url=http://www.libtiff.org/" tppabs="/to.asp?url=http://www.libtiff.org/">TIFF 
                library</a>。
              <p> 除了用这个函数库可以建立 PDF 文件外，<a href="/to.asp?url=http://www.fastio.com/" tppabs="/to.asp?url=http://www.fastio.com/">FastIO 
                公司</a>发展的产品 ClibPDF 也可以处理 PDF 文件。
              <p>

以下为处理 PDF 文件的范例，本例对 test.pdf 加工后等待用户读取。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"test.pdf"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br></font><font color="#0000BB">$pdf&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">PDF_open</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_info_author</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Uwe&nbsp;Steinmann"</font><font color="#007700">);<br></font><font color="#0000BB">PDF_set_info_title</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Test&nbsp;for&nbsp;PHP&nbsp;wrapper&nbsp;of&nbsp;PDFlib&nbsp;2.0"</font><font color="#007700">);<br></font><font color="#0000BB">PDF_set_info_author</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Name&nbsp;of&nbsp;Author"</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_info_creator</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"See&nbsp;Author"</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_info_subject</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Testing"</font><font color="#007700">);<br></font><font color="#0000BB">PDF_begin_page</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">595</font><font color="#007700">,&nbsp;</font><font color="#0000BB">842</font><font color="#007700">);<br></font><font color="#0000BB">PDF_add_outline</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Page&nbsp;1"</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_font</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Times-Roman"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">30</font><font color="#007700">,&nbsp;</font><font color="#0000BB">4</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_text_rendering</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">PDF_show_xy</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Times&nbsp;Roman&nbsp;outlined"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">50</font><font color="#007700">,&nbsp;</font><font color="#0000BB">750</font><font color="#007700">);<br></font><font color="#0000BB">pdf_moveto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">50</font><font color="#007700">,&nbsp;</font><font color="#0000BB">740</font><font color="#007700">);<br></font><font color="#0000BB">pdf_lineto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">330</font><font color="#007700">,&nbsp;</font><font color="#0000BB">740</font><font color="#007700">);<br></font><font color="#0000BB">pdf_stroke</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">PDF_end_page</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">PDF_close</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"&lt;A&nbsp;HREF=getpdf.php3&gt;finished&lt;/A&gt;"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>&nbsp;&nbsp;&nbsp;&nbsp;<br></font>
<p>

上例中的 gettest.php3 可能像下面的样子<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"test.pdf"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">header</font><font color="#007700">(</font><font color="#DD0000">"Content-type:&nbsp;application/pdf"</font><font color="#007700">);<br></font><font color="#0000BB">fpassthru</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br></font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-PDF_get_info.php" alt="function.php?PDF_get_info">PDF_get_info</a>:</td><td valign=top>返回文件信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_creator.php" alt="function.php?PDF_set_info_creator">PDF_set_info_creator</a>:</td><td valign=top>配置建档者字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_title.php" alt="function.php?PDF_set_info_title">PDF_set_info_title</a>:</td><td valign=top>配置文件标题。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_subject.php" alt="function.php?PDF_set_info_subject">PDF_set_info_subject</a>:</td><td valign=top>配置文件主题。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_keywords.php" alt="function.php?PDF_set_info_keywords">PDF_set_info_keywords</a>:</td><td valign=top>配置文件的关键字。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_author.php" alt="function.php?PDF_set_info_author">PDF_set_info_author</a>:</td><td valign=top>配置文件作者。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_open.php" alt="function.php?PDF_open">PDF_open</a>:</td><td valign=top>建立新的 PDF 档。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_close.php" alt="function.php?PDF_close">PDF_close</a>:</td><td valign=top>关闭 PDF 档。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_begin_page.php" alt="function.php?PDF_begin_page">PDF_begin_page</a>:</td><td valign=top>启始 PDF 文件页面。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_end_page.php" alt="function.php?PDF_end_page">PDF_end_page</a>:</td><td valign=top>关闭 PDF 文件页面。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_show.php" alt="function.php?PDF_show">PDF_show</a>:</td><td valign=top>输出字符串到 PDF 文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_show_xy.php" alt="function.php?PDF_show_xy">PDF_show_xy</a>:</td><td valign=top>输出字符串到指定坐标。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_font.php" alt="function.php?PDF_set_font">PDF_set_font</a>:</td><td valign=top>配置使用的字型及大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_leading.php" alt="function.php?PDF_set_leading">PDF_set_leading</a>:</td><td valign=top>配置行距。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_text_rendering.php" alt="function.php?PDF_set_text_rendering">PDF_set_text_rendering</a>:</td><td valign=top>配置文字表现方式。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_horiz_scaling.php" alt="function.php?PDF_set_horiz_scaling">PDF_set_horiz_scaling</a>:</td><td valign=top>配置文字水平间距。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_text_rise.php" alt="function.php?PDF_set_text_rise">PDF_set_text_rise</a>:</td><td valign=top>配置文字高度。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_text_matrix.php" alt="function.php?PDF_set_text_matrix">PDF_set_text_matrix</a>:</td><td valign=top>配置文字矩阵。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_text_pos.php" alt="function.php?PDF_set_text_pos">PDF_set_text_pos</a>:</td><td valign=top>配置文字位置。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_char_spacing.php" alt="function.php?PDF_set_char_spacing">PDF_set_char_spacing</a>:</td><td valign=top>配置字符间距。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_word_spacing.php" alt="function.php?PDF_set_word_spacing">PDF_set_word_spacing</a>:</td><td valign=top>配置字间距。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_continue_text.php" alt="function.php?PDF_continue_text">PDF_continue_text</a>:</td><td valign=top>输出文字。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_stringwidth.php" alt="function.php?PDF_stringwidth">PDF_stringwidth</a>:</td><td valign=top>计算字符串的宽度。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_save.php" alt="function.php?PDF_save">PDF_save</a>:</td><td valign=top>储存环境变量。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_restore.php" alt="function.php?PDF_restore">PDF_restore</a>:</td><td valign=top>还原环境变量。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_translate.php" alt="function.php?PDF_translate">PDF_translate</a>:</td><td valign=top>移动原点。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_scale.php" alt="function.php?PDF_scale">PDF_scale</a>:</td><td valign=top>缩放类。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_rotate.php" alt="function.php?PDF_rotate">PDF_rotate</a>:</td><td valign=top>旋转类。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setflat.php" alt="function.php?PDF_setflat">PDF_setflat</a>:</td><td valign=top>配置平滑值。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setlinejoin.php" alt="function.php?PDF_setlinejoin">PDF_setlinejoin</a>:</td><td valign=top>配置连接参数。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setlinecap.php" alt="function.php?PDF_setlinecap">PDF_setlinecap</a>:</td><td valign=top>配置 linecap 参数。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setmiterlimit.php" alt="function.php?PDF_setmiterlimit">PDF_setmiterlimit</a>:</td><td valign=top>配置斜边界限。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setlinewidth.php" alt="function.php?PDF_setlinewidth">PDF_setlinewidth</a>:</td><td valign=top>配置线宽。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setdash.php" alt="function.php?PDF_setdash">PDF_setdash</a>:</td><td valign=top>配置虚线样式。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_moveto.php" alt="function.php?PDF_moveto">PDF_moveto</a>:</td><td valign=top>配置处理的坐标点。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_curveto.php" alt="function.php?PDF_curveto">PDF_curveto</a>:</td><td valign=top>绘贝氏曲线。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_lineto.php" alt="function.php?PDF_lineto">PDF_lineto</a>:</td><td valign=top>绘直线。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_circle.php" alt="function.php?PDF_circle">PDF_circle</a>:</td><td valign=top>绘圆。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_arc.php" alt="function.php?PDF_arc">PDF_arc</a>:</td><td valign=top>绘弧。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_rect.php" alt="function.php?PDF_rect">PDF_rect</a>:</td><td valign=top>绘长方形。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_closepath.php" alt="function.php?PDF_closepath">PDF_closepath</a>:</td><td valign=top>形成封闭的向量形状。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_stroke.php" alt="function.php?PDF_stroke">PDF_stroke</a>:</td><td valign=top>沿向量绘线。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_closepath_stroke.php" alt="function.php?PDF_closepath_stroke">PDF_closepath_stroke</a>:</td><td valign=top>形成封闭的向量形状并沿向量绘线。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_fill.php" alt="function.php?PDF_fill">PDF_fill</a>:</td><td valign=top>填满目前的向量。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_fill_stroke.php" alt="function.php?PDF_fill_stroke">PDF_fill_stroke</a>:</td><td valign=top>填满目前的向量并沿向量绘线。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_closepath_fill_stroke.php" alt="function.php?PDF_closepath_fill_stroke">PDF_closepath_fill_stroke</a>:</td><td valign=top>形成封闭的向量形状沿向量绘线并填满。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_endpath.php" alt="function.php?PDF_endpath">PDF_endpath</a>:</td><td valign=top>关闭目前向量。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_clip.php" alt="function.php?PDF_clip">PDF_clip</a>:</td><td valign=top>组合所有向量。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setgray_fill.php" alt="function.php?PDF_setgray_fill">PDF_setgray_fill</a>:</td><td valign=top>指定填入的颜色为灰阶。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setgray_stroke.php" alt="function.php?PDF_setgray_stroke">PDF_setgray_stroke</a>:</td><td valign=top>指定绘图的颜色为灰阶。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setgray.php" alt="function.php?PDF_setgray">PDF_setgray</a>:</td><td valign=top>指定绘图的颜色为灰阶并填入。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setrgbcolor_fill.php" alt="function.php?PDF_setrgbcolor_fill">PDF_setrgbcolor_fill</a>:</td><td valign=top>指定填入的颜色为彩色。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setrgbcolor_stroke.php" alt="function.php?PDF_setrgbcolor_stroke">PDF_setrgbcolor_stroke</a>:</td><td valign=top>指定绘图的颜色为彩色。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setrgbcolor.php" alt="function.php?PDF_setrgbcolor">PDF_setrgbcolor</a>:</td><td valign=top>指定绘图的颜色为彩色并填入。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_add_outline.php" alt="function.php?PDF_add_outline">PDF_add_outline</a>:</td><td valign=top>目前页面加入书签。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_transition.php" alt="function.php?PDF_set_transition">PDF_set_transition</a>:</td><td valign=top>配置页的转换。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_duration.php" alt="function.php?PDF_set_duration">PDF_set_duration</a>:</td><td valign=top>配置二页的切换时间。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_open_gif.php" alt="function.php?PDF_open_gif">PDF_open_gif</a>:</td><td valign=top>打开 GIF 图档。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_open_memory_image.php" alt="function.php?PDF_open_memory_image">PDF_open_memory_image</a>:</td><td valign=top>打开内存图档。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_open_jpeg.php" alt="function.php?PDF_open_jpeg">PDF_open_jpeg</a>:</td><td valign=top>打开 JPEG 图档。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_close_image.php" alt="function.php?PDF_close_image">PDF_close_image</a>:</td><td valign=top>关闭图档。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_place_image.php" alt="function.php?PDF_place_image">PDF_place_image</a>:</td><td valign=top>放置图片到 PDF 档指定位置。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_put_image.php" alt="function.php?PDF_put_image">PDF_put_image</a>:</td><td valign=top>放置图片到 PDF 档。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_execute_image.php" alt="function.php?PDF_execute_image">PDF_execute_image</a>:</td><td valign=top>放置 PDF 档中图片到指定位置。</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_add_annotation.php" alt="function.php?PDF_add_annotation">PDF_add_annotation</a>:</td><td valign=top>加入注释。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-40.php" alt="group.php?40">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-42.php" alt="group.php?42">下一页</a> 
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
