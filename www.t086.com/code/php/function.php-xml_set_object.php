<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:xml_set_object()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:xml_set_object()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-53.php" alt="group.php?53">XML ����������</a></div><br><h1><font color=0000bb>xml_set_object</font></h1><p>
ʹ XML ���������ࡣ<p>
<font color=ff8000>�﷨:</font> <b>void xml_set_object(int parser, object &object);</b><p>
<font color=ff8000>����ֵ:</font> ��<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������ý�������ʹ����ķ�ʽ��ֵ��ע�������������� PHP 4.0 ���ϵİ汾�ſ�ʹ�á����� parser Ϊ <a href="function.php-xml_parser_create.php" alt="function.php?xml_parser_create">xml_parser_create()</a> �����صĽ������롣���� &object ���౾���ָ�롣<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">class&nbsp;</font><font color="#0000BB">xml&nbsp;&nbsp;</font><font color="#007700">{<br>var&nbsp;</font><font color="#0000BB">$parser</font><font color="#007700">;<br><br>function&nbsp;</font><font color="#0000BB">xml</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">parser&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">xml_parser_create</font><font color="#007700">();<br>&nbsp;&nbsp;</font><font color="#0000BB">xml_set_object</font><font color="#007700">(</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">parser</font><font color="#007700">,&amp;</font><font color="#0000BB">$this</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">xml_set_element_handler</font><font color="#007700">(</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">parser</font><font color="#007700">,</font><font color="#DD0000">"tag_open"</font><font color="#007700">,</font><font color="#DD0000">"tag_close"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">xml_set_character_data_handler</font><font color="#007700">(</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">parser</font><font color="#007700">,</font><font color="#DD0000">"cdata"</font><font color="#007700">);<br>}<br><br>function&nbsp;</font><font color="#0000BB">parse</font><font color="#007700">(</font><font color="#0000BB">$data</font><font color="#007700">)&nbsp;{&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">xml_parse</font><font color="#007700">(</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">parser</font><font color="#007700">,</font><font color="#0000BB">$data</font><font color="#007700">);<br>}<br><br>function&nbsp;</font><font color="#0000BB">tag_open</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,</font><font color="#0000BB">$tag</font><font color="#007700">,</font><font color="#0000BB">$attributes</font><font color="#007700">)&nbsp;{&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">var_dump</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,</font><font color="#0000BB">$tag</font><font color="#007700">,</font><font color="#0000BB">$attributes</font><font color="#007700">);&nbsp;<br>}<br><br>function&nbsp;</font><font color="#0000BB">cdata</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,</font><font color="#0000BB">$cdata</font><font color="#007700">)&nbsp;{&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">var_dump</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,</font><font color="#0000BB">$cdata</font><font color="#007700">);<br>}<br><br>function&nbsp;</font><font color="#0000BB">tag_close</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,</font><font color="#0000BB">$tag</font><font color="#007700">)&nbsp;{&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">var_dump</font><font color="#007700">(</font><font color="#0000BB">$parser</font><font color="#007700">,</font><font color="#0000BB">$tag</font><font color="#007700">);&nbsp;<br>}<br><br>}&nbsp;</font><font color="#FF8000">//&nbsp;end&nbsp;of&nbsp;class&nbsp;xml<br><br></font><font color="#0000BB">$xml_parser&nbsp;</font><font color="#007700">=&nbsp;new&nbsp;</font><font color="#0000BB">xml</font><font color="#007700">();<br></font><font color="#0000BB">$xml_parser</font><font color="#007700">-&gt;</font><font color="#0000BB">parse</font><font color="#007700">(</font><font color="#DD0000">"&lt;A&nbsp;ID=\"hallo\"&gt;PHP&lt;/A&gt;"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-xml_parser_create.php" alt="function.php?xml_parser_create">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-xml_set_element_handler.php" alt="function.php?xml_set_element_handler">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
