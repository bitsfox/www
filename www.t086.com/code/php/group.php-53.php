<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - XML ����������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>XML ����������</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 20 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>XML (eXtensible Markup Language) ��һ�������ļ�ת���ı�׼��������ο� 
              <a href="http://www.w3c.org/XML/" tppabs="http://www.w3c.org/XML/">http://www.w3.org/XML</a>��
              <p> Ҫʹ�ñ������⣬���ȵ� <a href="/to.asp?url=http://www.jclark.com/xml/" tppabs="/to.asp?url=http://www.jclark.com/xml/">http://www.jclark.com/xml</a> 
                ȡ�� XML �ĺ����⣬���ұ����װ���� RedHat Linux ���û����Ե� <a href="/to.asp?url=http://www.guardian.no/%7Essb/phpxml.html" tppabs="/to.asp?url=http://www.guardian.no/~ssb/phpxml.html">http://www.guardian.no/~ssb/phpxml.html</a> 
                ȡ�� RPM �ĸ�ʽ����֮��Ҫ�ڱ��� PHP ǰ���� --with-xml ������ѡ�tommy@nashville.net 
                ָ�� (12-Jan-1999) �������⣬������ /usr/local/include ���� xmltok.h �� xmlparse.h 
                ���� C ���Եı�ͷ����������û���������
              <p>

Ŀǰ�İ汾֧�������ַ�����US-ASCII��ISO-8859-1 �� UTF-8������ UTF-16 �ַ��� PHP ��δ֧�֡�<p>

XML ����������룬����
<ul type=disc>
<li>XML_ERROR_NONE
<li>XML_ERROR_NO_MEMORY
<li>XML_ERROR_SYNTAX
<li>XML_ERROR_NO_ELEMENTS
<li>XML_ERROR_INVALID_TOKEN
<li>XML_ERROR_UNCLOSED_TOKEN
<li>XML_ERROR_PARTIAL_CHAR
<li>XML_ERROR_TAG_MISMATCH
<li>XML_ERROR_DUPLICATE_ATTRIBUTE
<li>XML_ERROR_JUNK_AFTER_DOC_ELEMENT
<li>XML_ERROR_PARAM_ENTITY_REF
<li>XML_ERROR_UNDEFINED_ENTITY
<li>XML_ERROR_RECURSIVE_ENTITY_REF
<li>XML_ERROR_ASYNC_ENTITY
<li>XML_ERROR_BAD_CHAR_REF
<li>XML_ERROR_BINARY_ENTITY_REF
<li>XML_ERROR_ATTRIBUTE_EXTERNAL_ENTITY_REF
<li>XML_ERROR_MISPLACED_XML_PI
<li>XML_ERROR_UNKNOWN_ENCODING
<li>XML_ERROR_INCORRECT_ENCODING
<li>XML_ERROR_UNCLOSED_CDATA_SECTION
<li>XML_ERROR_EXTERNAL_ENTITY_HANDLING
</ul>

�������йص���Ϣ���������о�Ժ�� <a href="/to.asp?url=http://www.ascc.net/xml/zh/big5/index.html">Chinese XML Now</a> ��վ���������� XML �йص�������ʹ����ʿ����������� <a href="/to.asp?url=http://www.ascc.net/xml/zh/big5/gloss.html">SGML ����Ӣ�������</a>��
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-xml_parser_create.php" alt="function.php?xml_parser_create">xml_parser_create</a>:</td><td valign=top>��ʼ XML ��������</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_object.php" alt="function.php?xml_set_object">xml_set_object</a>:</td><td valign=top>ʹ XML ���������ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_element_handler.php" alt="function.php?xml_set_element_handler">xml_set_element_handler</a>:</td><td valign=top>����Ԫ�صı�ͷ��</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_character_data_handler.php" alt="function.php?xml_set_character_data_handler">xml_set_character_data_handler</a>:</td><td valign=top>�����ַ����ϱ�ͷ��</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_processing_instruction_handler.php" alt="function.php?xml_set_processing_instruction_handler">xml_set_processing_instruction_handler</a>:</td><td valign=top>��������ָ���ͷ��</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_default_handler.php" alt="function.php?xml_set_default_handler">xml_set_default_handler</a>:</td><td valign=top>����Ĭ�ϱ�ͷ��</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_unparsed_entity_decl_handler.php" alt="function.php?xml_set_unparsed_entity_decl_handler">xml_set_unparsed_entity_decl_handler</a>:</td><td valign=top>����δ����ʵ������ı�ͷ��</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_notation_decl_handler.php" alt="function.php?xml_set_notation_decl_handler">xml_set_notation_decl_handler</a>:</td><td valign=top>���üǷ�����ı�ͷ��</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_external_entity_ref_handler.php" alt="function.php?xml_set_external_entity_ref_handler">xml_set_external_entity_ref_handler</a>:</td><td valign=top>�����ⲿʵ������ı�ͷ��</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_parse.php" alt="function.php?xml_parse">xml_parse</a>:</td><td valign=top>���� XML �ļ���</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_get_error_code.php" alt="function.php?xml_get_error_code">xml_get_error_code</a>:</td><td valign=top>ȡ�� XML �����롣</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_error_string.php" alt="function.php?xml_error_string">xml_error_string</a>:</td><td valign=top>ȡ�� XML �����ַ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_get_current_line_number.php" alt="function.php?xml_get_current_line_number">xml_get_current_line_number</a>:</td><td valign=top>ȡ��Ŀǰ�������кš�</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_get_current_column_number.php" alt="function.php?xml_get_current_column_number">xml_get_current_column_number</a>:</td><td valign=top>��֪Ŀǰ�����ĵڼ��ֶΡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_get_current_byte_index.php" alt="function.php?xml_get_current_byte_index">xml_get_current_byte_index</a>:</td><td valign=top>ȡ��Ŀǰ����Ϊ�ڼ���λ�顣</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_parser_free.php" alt="function.php?xml_parser_free">xml_parser_free</a>:</td><td valign=top>�ͷŽ���ռ�õ��ڴ档</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_parser_set_option.php" alt="function.php?xml_parser_set_option">xml_parser_set_option</a>:</td><td valign=top>���ý���ʹ�õ�ѡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_parser_get_option.php" alt="function.php?xml_parser_get_option">xml_parser_get_option</a>:</td><td valign=top>ȡ�ý���ʹ�õ�ѡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-utf8_decode.php" alt="function.php?utf8_decode">utf8_decode</a>:</td><td valign=top>�� UTF-8 ��ת�� ISO-8859-1 �롣</td></tr>
<tr><td align=right valign=top><a href="function.php-utf8_encode.php" alt="function.php?utf8_encode">utf8_encode</a>:</td><td valign=top>�� ISO-8859-1 ��ת�� UTF-8 �롣</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-52.php" alt="group.php?52">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-54.php" alt="group.php?54">��һҳ</a> 
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
