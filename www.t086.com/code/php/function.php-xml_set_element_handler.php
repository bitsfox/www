<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:xml_set_element_handler()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:xml_set_element_handler()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-53.php" alt="group.php?53">XML 解析函数库</a></div><br><h1><font color=0000bb>xml_set_element_handler</font></h1><p>
配置元素的标头。<p>
<font color=ff8000>语法:</font> <b>boolean xml_set_element_handler(int parser, string startElementHandler, string endElementHandler);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数配置元素的标头供 <a href="function.php-xml_parse.php" alt="function.php?xml_parse">xml_parse()</a> 函数使用。参数 parser 为解析代码。参数 startElementHandler 及 endElementHandler 分别为元素开始与结束的标头，其中的 startElementHandler 必须包括解析代码、名称、与属性，而 endElementHandler 参数包括了解析代码及名称二个参数。若无错误则返回 true 值。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下列用来显示&nbsp;XML&nbsp;元素结构&nbsp;(Element&nbsp;Structure)<br><br><font color="#0000BB">&lt;?php<br>$file&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"data.xml"</font><font color="#007700">;<br></font><font color="#0000BB">$depth&nbsp;</font><font color="#007700">=&nbsp;array();<br><br>function&nbsp;</font><font color="#0000BB">startElement</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$name</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$attrs</font><font color="#007700">)<br>{<br>&nbsp;&nbsp;&nbsp;&nbsp;global&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">[</font><font color="#0000BB">$parser</font><font color="#007700">];&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print&nbsp;</font><font color="#DD0000">"&nbsp;&nbsp;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;print&nbsp;</font><font color="#DD0000">"$name</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">[</font><font color="#0000BB">$parser</font><font color="#007700">]++;<br>}<br><br>function&nbsp;</font><font color="#0000BB">endElement</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$name</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$attrs</font><font color="#007700">)<br>{<br>&nbsp;&nbsp;&nbsp;&nbsp;global&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$depth</font><font color="#007700">[</font><font color="#0000BB">$parser</font><font color="#007700">]--;<br>}<br><br></font><font color="#0000BB">$xml_parser&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">xml_parser_create</font><font color="#007700">();<br></font><font color="#0000BB">xml_set_element_handler</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"startElement"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"endElement"</font><font color="#007700">);<br>if&nbsp;(!(</font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$file</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">)))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;die(</font><font color="#DD0000">"could&nbsp;not&nbsp;open&nbsp;XML&nbsp;input"</font><font color="#007700">);<br>}<br>while&nbsp;(</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fread</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#0000BB">4096</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</font><font color="#0000BB">xml_parse</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$data</font><font color="#007700">,&nbsp;</font><font color="#0000BB">feof</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">)))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;die(</font><font color="#0000BB">sprintf</font><font color="#007700">(</font><font color="#DD0000">"XML&nbsp;error:&nbsp;%s&nbsp;at&nbsp;line&nbsp;%d"</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">xml_error_string</font><font color="#007700">(</font><font color="#0000BB">xml_get_error_code</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">)),<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">xml_get_current_line_number</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">)));<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">xml_parser_free</font><font color="#007700">(</font><font color="#0000BB">$xml_parser</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-xml_set_object.php" alt="function.php?xml_set_object">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-xml_set_character_data_handler.php" alt="function.php?xml_set_character_data_handler">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
