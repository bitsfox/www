<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:xml_set_element_handler()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:xml_set_element_handler()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-53.php" alt="group.php?53">XML ����������</a></div><br><h1><font color=0000bb>xml_set_element_handler</font></h1><p>
����Ԫ�صı�ͷ��<p>
<font color=ff8000>�﷨:</font> <b>boolean xml_set_element_handler(int parser, string startElementHandler, string endElementHandler);</b><p>
<font color=ff8000>����ֵ:</font> ����ֵ<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������Ԫ�صı�ͷ�� <a href="function.php-xml_parse.php" alt="function.php?xml_parse">xml_parse()</a> ����ʹ�á����� parser Ϊ�������롣���� startElementHandler �� endElementHandler �ֱ�ΪԪ�ؿ�ʼ������ı�ͷ�����е� startElementHandler ��������������롢���ơ������ԣ��� endElementHandler ���������˽������뼰���ƶ������������޴����򷵻� true ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����������ʾ&nbsp;XML&nbsp;Ԫ�ؽṹ&nbsp;(Element&nbsp;Structure)<br><br><font color="#0000BB">&lt;?php<br>$file&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"data.xml"</font><font color="#007700">;<br></font><font color="#0000BB">$depth&nbsp;</font><font color="#007700">=&nbsp;array();<br><br>function&nbsp;</font><font color="#0000BB">startElement</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$name</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$attrs</font><font color="#007700">)<br>{<br>&nbsp;&nbsp;&nbsp;&nbsp;global&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">[</font><font color="#0000BB">$parser</font><font color="#007700">];&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print&nbsp;</font><font color="#DD0000">"&nbsp;&nbsp;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;print&nbsp;</font><font color="#DD0000">"$name</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">[</font><font color="#0000BB">$parser</font><font color="#007700">]++;<br>}<br><br>function&nbsp;</font><font color="#0000BB">endElement</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$name</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$attrs</font><font color="#007700">)<br>{<br>&nbsp;&nbsp;&nbsp;&nbsp;global&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">[</font><font color="#0000BB">$parser</font><font color="#007700">]--;<br>}<br><br></font><font color="#0000BB">$xml_parser&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">xml_parser_create</font><font color="#007700">();<br></font><font color="#0000BB">xml_set_element_handler</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"startElement"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"endElement"</font><font color="#007700">);<br>if&nbsp;(!(</font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$file</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">)))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;die(</font><font color="#DD0000">"could&nbsp;not&nbsp;open&nbsp;XML&nbsp;input"</font><font color="#007700">);<br>}<br>while&nbsp;(</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fread</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#0000BB">4096</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</font><font color="#0000BB">xml_parse</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$data</font><font color="#007700">,&nbsp;</font><font color="#0000BB">feof</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">)))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die(</font><font color="#0000BB">sprintf</font><font color="#007700">(</font><font color="#DD0000">"XML&nbsp;error:&nbsp;%s&nbsp;at&nbsp;line&nbsp;%d"</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">xml_error_string</font><font color="#007700">(</font><font color="#0000BB">xml_get_error_code</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">)),<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">xml_get_current_line_number</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">)));<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">xml_parser_free</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-xml_set_object.php" alt="function.php?xml_set_object">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-xml_set_character_data_handler.php" alt="function.php?xml_set_character_data_handler">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
