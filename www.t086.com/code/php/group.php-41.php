<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - PDF ��ʽ�ļ�������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>PDF ��ʽ�ļ�������</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 65 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>PDF �� Adobe ����չ�Ŀ�Яʽ�ļ���ʽ�������ļ������������ϴ��䡢���������ʹ��ӡ���ӡ������ʹ���������װ������������Ա���ԭ�������ּ�ͼƬ�ı��š���ϸ����Ϣ���Բο� 
              <a href="/to.asp?url=http://www.adobe.com/" tppabs="/to.asp?url=http://www.adobe.com/">Adobe 
              ����վ</a>���ο������й� PDF �� Acrobat �Ĳ��ݡ�
              <p> �� UNIX ϵͳ�У�����ʹ�� Thomas Merz ������ <a href="/to.asp?url=http://www.pdflib.com/pdflib/index.html" tppabs="/to.asp?url=http://www.pdflib.com/pdflib/index.html">PDF 
                ������</a>���������밲װ��ɺ��ٱ��� PHP ���򷽿ɹ� PHP ʹ�� pdflib������ʱ����Ҫ <a href="/to.asp?url=ftp://ftp.uu.net/graphics/jpeg/" tppabs="/to.asp?url=ftp://ftp.uu.net/graphics/jpeg/">JPEG 
                library</a> �� <a href="/to.asp?url=http://www.libtiff.org/" tppabs="/to.asp?url=http://www.libtiff.org/">TIFF 
                library</a>��
              <p> �����������������Խ��� PDF �ļ��⣬<a href="/to.asp?url=http://www.fastio.com/" tppabs="/to.asp?url=http://www.fastio.com/">FastIO 
                ��˾</a>��չ�Ĳ�Ʒ ClibPDF Ҳ���Դ��� PDF �ļ���
              <p>

����Ϊ���� PDF �ļ��ķ����������� test.pdf �ӹ���ȴ��û���ȡ��<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"test.pdf"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br></font><font color="#0000BB">$pdf&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">PDF_open</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_info_author</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Uwe&nbsp;Steinmann"</font><font color="#007700">);<br></font><font color="#0000BB">PDF_set_info_title</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Test&nbsp;for&nbsp;PHP&nbsp;wrapper&nbsp;of&nbsp;PDFlib&nbsp;2.0"</font><font color="#007700">);<br></font><font color="#0000BB">PDF_set_info_author</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Name&nbsp;of&nbsp;Author"</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_info_creator</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"See&nbsp;Author"</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_info_subject</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Testing"</font><font color="#007700">);<br></font><font color="#0000BB">PDF_begin_page</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">595</font><font color="#007700">,&nbsp;</font><font color="#0000BB">842</font><font color="#007700">);<br></font><font color="#0000BB">PDF_add_outline</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Page&nbsp;1"</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_font</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Times-Roman"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">30</font><font color="#007700">,&nbsp;</font><font color="#0000BB">4</font><font color="#007700">);<br></font><font color="#0000BB">pdf_set_text_rendering</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">PDF_show_xy</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Times&nbsp;Roman&nbsp;outlined"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">50</font><font color="#007700">,&nbsp;</font><font color="#0000BB">750</font><font color="#007700">);<br></font><font color="#0000BB">pdf_moveto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">50</font><font color="#007700">,&nbsp;</font><font color="#0000BB">740</font><font color="#007700">);<br></font><font color="#0000BB">pdf_lineto</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">,&nbsp;</font><font color="#0000BB">330</font><font color="#007700">,&nbsp;</font><font color="#0000BB">740</font><font color="#007700">);<br></font><font color="#0000BB">pdf_stroke</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">PDF_end_page</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">PDF_close</font><font color="#007700">(</font><font color="#0000BB">$pdf</font><font color="#007700">);<br></font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"&lt;A&nbsp;HREF=getpdf.php3&gt;finished&lt;/A&gt;"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>&nbsp;&nbsp;&nbsp;&nbsp;<br></font>
<p>

�����е� gettest.php3 ���������������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"test.pdf"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">header</font><font color="#007700">(</font><font color="#DD0000">"Content-type:&nbsp;application/pdf"</font><font color="#007700">);<br></font><font color="#0000BB">fpassthru</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br></font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-PDF_get_info.php" alt="function.php?PDF_get_info">PDF_get_info</a>:</td><td valign=top>�����ļ���Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_creator.php" alt="function.php?PDF_set_info_creator">PDF_set_info_creator</a>:</td><td valign=top>���ý������ַ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_title.php" alt="function.php?PDF_set_info_title">PDF_set_info_title</a>:</td><td valign=top>�����ļ����⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_subject.php" alt="function.php?PDF_set_info_subject">PDF_set_info_subject</a>:</td><td valign=top>�����ļ����⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_keywords.php" alt="function.php?PDF_set_info_keywords">PDF_set_info_keywords</a>:</td><td valign=top>�����ļ��Ĺؼ��֡�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_info_author.php" alt="function.php?PDF_set_info_author">PDF_set_info_author</a>:</td><td valign=top>�����ļ����ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_open.php" alt="function.php?PDF_open">PDF_open</a>:</td><td valign=top>�����µ� PDF ����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_close.php" alt="function.php?PDF_close">PDF_close</a>:</td><td valign=top>�ر� PDF ����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_begin_page.php" alt="function.php?PDF_begin_page">PDF_begin_page</a>:</td><td valign=top>��ʼ PDF �ļ�ҳ�档</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_end_page.php" alt="function.php?PDF_end_page">PDF_end_page</a>:</td><td valign=top>�ر� PDF �ļ�ҳ�档</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_show.php" alt="function.php?PDF_show">PDF_show</a>:</td><td valign=top>����ַ����� PDF �ļ���</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_show_xy.php" alt="function.php?PDF_show_xy">PDF_show_xy</a>:</td><td valign=top>����ַ�����ָ�����ꡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_font.php" alt="function.php?PDF_set_font">PDF_set_font</a>:</td><td valign=top>����ʹ�õ����ͼ���С��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_leading.php" alt="function.php?PDF_set_leading">PDF_set_leading</a>:</td><td valign=top>�����оࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_text_rendering.php" alt="function.php?PDF_set_text_rendering">PDF_set_text_rendering</a>:</td><td valign=top>�������ֱ��ַ�ʽ��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_horiz_scaling.php" alt="function.php?PDF_set_horiz_scaling">PDF_set_horiz_scaling</a>:</td><td valign=top>��������ˮƽ��ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_text_rise.php" alt="function.php?PDF_set_text_rise">PDF_set_text_rise</a>:</td><td valign=top>�������ָ߶ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_text_matrix.php" alt="function.php?PDF_set_text_matrix">PDF_set_text_matrix</a>:</td><td valign=top>�������־���</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_text_pos.php" alt="function.php?PDF_set_text_pos">PDF_set_text_pos</a>:</td><td valign=top>��������λ�á�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_char_spacing.php" alt="function.php?PDF_set_char_spacing">PDF_set_char_spacing</a>:</td><td valign=top>�����ַ���ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_word_spacing.php" alt="function.php?PDF_set_word_spacing">PDF_set_word_spacing</a>:</td><td valign=top>�����ּ�ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_continue_text.php" alt="function.php?PDF_continue_text">PDF_continue_text</a>:</td><td valign=top>������֡�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_stringwidth.php" alt="function.php?PDF_stringwidth">PDF_stringwidth</a>:</td><td valign=top>�����ַ����Ŀ�ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_save.php" alt="function.php?PDF_save">PDF_save</a>:</td><td valign=top>���滷��������</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_restore.php" alt="function.php?PDF_restore">PDF_restore</a>:</td><td valign=top>��ԭ����������</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_translate.php" alt="function.php?PDF_translate">PDF_translate</a>:</td><td valign=top>�ƶ�ԭ�㡣</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_scale.php" alt="function.php?PDF_scale">PDF_scale</a>:</td><td valign=top>�����ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_rotate.php" alt="function.php?PDF_rotate">PDF_rotate</a>:</td><td valign=top>��ת�ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setflat.php" alt="function.php?PDF_setflat">PDF_setflat</a>:</td><td valign=top>����ƽ��ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setlinejoin.php" alt="function.php?PDF_setlinejoin">PDF_setlinejoin</a>:</td><td valign=top>�������Ӳ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setlinecap.php" alt="function.php?PDF_setlinecap">PDF_setlinecap</a>:</td><td valign=top>���� linecap ������</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setmiterlimit.php" alt="function.php?PDF_setmiterlimit">PDF_setmiterlimit</a>:</td><td valign=top>����б�߽��ޡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setlinewidth.php" alt="function.php?PDF_setlinewidth">PDF_setlinewidth</a>:</td><td valign=top>�����߿�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setdash.php" alt="function.php?PDF_setdash">PDF_setdash</a>:</td><td valign=top>����������ʽ��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_moveto.php" alt="function.php?PDF_moveto">PDF_moveto</a>:</td><td valign=top>���ô��������㡣</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_curveto.php" alt="function.php?PDF_curveto">PDF_curveto</a>:</td><td valign=top>�汴�����ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_lineto.php" alt="function.php?PDF_lineto">PDF_lineto</a>:</td><td valign=top>��ֱ�ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_circle.php" alt="function.php?PDF_circle">PDF_circle</a>:</td><td valign=top>��Բ��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_arc.php" alt="function.php?PDF_arc">PDF_arc</a>:</td><td valign=top>�满��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_rect.php" alt="function.php?PDF_rect">PDF_rect</a>:</td><td valign=top>�泤���Ρ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_closepath.php" alt="function.php?PDF_closepath">PDF_closepath</a>:</td><td valign=top>�γɷ�յ�������״��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_stroke.php" alt="function.php?PDF_stroke">PDF_stroke</a>:</td><td valign=top>���������ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_closepath_stroke.php" alt="function.php?PDF_closepath_stroke">PDF_closepath_stroke</a>:</td><td valign=top>�γɷ�յ�������״�����������ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_fill.php" alt="function.php?PDF_fill">PDF_fill</a>:</td><td valign=top>����Ŀǰ��������</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_fill_stroke.php" alt="function.php?PDF_fill_stroke">PDF_fill_stroke</a>:</td><td valign=top>����Ŀǰ�����������������ߡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_closepath_fill_stroke.php" alt="function.php?PDF_closepath_fill_stroke">PDF_closepath_fill_stroke</a>:</td><td valign=top>�γɷ�յ�������״���������߲�������</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_endpath.php" alt="function.php?PDF_endpath">PDF_endpath</a>:</td><td valign=top>�ر�Ŀǰ������</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_clip.php" alt="function.php?PDF_clip">PDF_clip</a>:</td><td valign=top>�������������</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setgray_fill.php" alt="function.php?PDF_setgray_fill">PDF_setgray_fill</a>:</td><td valign=top>ָ���������ɫΪ�ҽס�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setgray_stroke.php" alt="function.php?PDF_setgray_stroke">PDF_setgray_stroke</a>:</td><td valign=top>ָ����ͼ����ɫΪ�ҽס�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setgray.php" alt="function.php?PDF_setgray">PDF_setgray</a>:</td><td valign=top>ָ����ͼ����ɫΪ�ҽײ����롣</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setrgbcolor_fill.php" alt="function.php?PDF_setrgbcolor_fill">PDF_setrgbcolor_fill</a>:</td><td valign=top>ָ���������ɫΪ��ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setrgbcolor_stroke.php" alt="function.php?PDF_setrgbcolor_stroke">PDF_setrgbcolor_stroke</a>:</td><td valign=top>ָ����ͼ����ɫΪ��ɫ��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_setrgbcolor.php" alt="function.php?PDF_setrgbcolor">PDF_setrgbcolor</a>:</td><td valign=top>ָ����ͼ����ɫΪ��ɫ�����롣</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_add_outline.php" alt="function.php?PDF_add_outline">PDF_add_outline</a>:</td><td valign=top>Ŀǰҳ�������ǩ��</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_transition.php" alt="function.php?PDF_set_transition">PDF_set_transition</a>:</td><td valign=top>����ҳ��ת����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_set_duration.php" alt="function.php?PDF_set_duration">PDF_set_duration</a>:</td><td valign=top>���ö�ҳ���л�ʱ�䡣</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_open_gif.php" alt="function.php?PDF_open_gif">PDF_open_gif</a>:</td><td valign=top>�� GIF ͼ����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_open_memory_image.php" alt="function.php?PDF_open_memory_image">PDF_open_memory_image</a>:</td><td valign=top>���ڴ�ͼ����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_open_jpeg.php" alt="function.php?PDF_open_jpeg">PDF_open_jpeg</a>:</td><td valign=top>�� JPEG ͼ����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_close_image.php" alt="function.php?PDF_close_image">PDF_close_image</a>:</td><td valign=top>�ر�ͼ����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_place_image.php" alt="function.php?PDF_place_image">PDF_place_image</a>:</td><td valign=top>����ͼƬ�� PDF ��ָ��λ�á�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_put_image.php" alt="function.php?PDF_put_image">PDF_put_image</a>:</td><td valign=top>����ͼƬ�� PDF ����</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_execute_image.php" alt="function.php?PDF_execute_image">PDF_execute_image</a>:</td><td valign=top>���� PDF ����ͼƬ��ָ��λ�á�</td></tr>
<tr><td align=right valign=top><a href="function.php-PDF_add_annotation.php" alt="function.php?PDF_add_annotation">PDF_add_annotation</a>:</td><td valign=top>����ע�͡�</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-40.php" alt="group.php?40">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-42.php" alt="group.php?42">��һҳ</a> 
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
