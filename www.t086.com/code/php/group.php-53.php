<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - XML 解析函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>XML 解析函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 20 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>XML (eXtensible Markup Language) 是一种资料文件转换的标准。详情请参考 
              <a href="http://www.w3c.org/XML/" tppabs="http://www.w3c.org/XML/">http://www.w3.org/XML</a>。
              <p> 要使用本函数库，需先到 <a href="/to.asp?url=http://www.jclark.com/xml/" tppabs="/to.asp?url=http://www.jclark.com/xml/">http://www.jclark.com/xml</a> 
                取回 XML 的函数库，并且编译或安装。用 RedHat Linux 的用户可以到 <a href="/to.asp?url=http://www.guardian.no/%7Essb/phpxml.html" tppabs="/to.asp?url=http://www.guardian.no/~ssb/phpxml.html">http://www.guardian.no/~ssb/phpxml.html</a> 
                取得 RPM 的格式档。之后要在编译 PHP 前加入 --with-xml 的配置选项。tommy@nashville.net 
                指出 (12-Jan-1999) 若有问题，尚需在 /usr/local/include 放入 xmltok.h 及 xmlparse.h 
                二个 C 语言的标头档，或是设好环境变量。
              <p>

目前的版本支持三种字符集：US-ASCII、ISO-8859-1 与 UTF-8。至于 UTF-16 字符集 PHP 尚未支持。<p>

XML 有许多错误代码，如下
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

和中文有关的信息可在中央研究院的 <a href="/to.asp?url=http://www.ascc.net/xml/zh/big5/index.html">Chinese XML Now</a> 网站看到。而和 XML 有关的术语则使用曾士熊先生所译的 <a href="/to.asp?url=http://www.ascc.net/xml/zh/big5/gloss.html">SGML 名词英汉翻译表</a>。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-xml_parser_create.php" alt="function.php?xml_parser_create">xml_parser_create</a>:</td><td valign=top>初始 XML 解析器。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_object.php" alt="function.php?xml_set_object">xml_set_object</a>:</td><td valign=top>使 XML 解析器用类。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_element_handler.php" alt="function.php?xml_set_element_handler">xml_set_element_handler</a>:</td><td valign=top>配置元素的标头。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_character_data_handler.php" alt="function.php?xml_set_character_data_handler">xml_set_character_data_handler</a>:</td><td valign=top>建立字符资料标头。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_processing_instruction_handler.php" alt="function.php?xml_set_processing_instruction_handler">xml_set_processing_instruction_handler</a>:</td><td valign=top>建立处理指令标头。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_default_handler.php" alt="function.php?xml_set_default_handler">xml_set_default_handler</a>:</td><td valign=top>建立默认标头。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_unparsed_entity_decl_handler.php" alt="function.php?xml_set_unparsed_entity_decl_handler">xml_set_unparsed_entity_decl_handler</a>:</td><td valign=top>配置未解析实体宣告的标头。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_notation_decl_handler.php" alt="function.php?xml_set_notation_decl_handler">xml_set_notation_decl_handler</a>:</td><td valign=top>配置记法宣告的标头。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_set_external_entity_ref_handler.php" alt="function.php?xml_set_external_entity_ref_handler">xml_set_external_entity_ref_handler</a>:</td><td valign=top>配置外部实体参引的标头。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_parse.php" alt="function.php?xml_parse">xml_parse</a>:</td><td valign=top>解析 XML 文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_get_error_code.php" alt="function.php?xml_get_error_code">xml_get_error_code</a>:</td><td valign=top>取得 XML 错误码。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_error_string.php" alt="function.php?xml_error_string">xml_error_string</a>:</td><td valign=top>取得 XML 错误字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_get_current_line_number.php" alt="function.php?xml_get_current_line_number">xml_get_current_line_number</a>:</td><td valign=top>取得目前解析的行号。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_get_current_column_number.php" alt="function.php?xml_get_current_column_number">xml_get_current_column_number</a>:</td><td valign=top>获知目前解析的第几字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_get_current_byte_index.php" alt="function.php?xml_get_current_byte_index">xml_get_current_byte_index</a>:</td><td valign=top>取得目前解析为第几个位组。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_parser_free.php" alt="function.php?xml_parser_free">xml_parser_free</a>:</td><td valign=top>释放解析占用的内存。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_parser_set_option.php" alt="function.php?xml_parser_set_option">xml_parser_set_option</a>:</td><td valign=top>配置解析使用的选项。</td></tr>
<tr><td align=right valign=top><a href="function.php-xml_parser_get_option.php" alt="function.php?xml_parser_get_option">xml_parser_get_option</a>:</td><td valign=top>取得解析使用的选项。</td></tr>
<tr><td align=right valign=top><a href="function.php-utf8_decode.php" alt="function.php?utf8_decode">utf8_decode</a>:</td><td valign=top>将 UTF-8 码转成 ISO-8859-1 码。</td></tr>
<tr><td align=right valign=top><a href="function.php-utf8_encode.php" alt="function.php?utf8_encode">utf8_encode</a>:</td><td valign=top>将 ISO-8859-1 码转成 UTF-8 码。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-52.php" alt="group.php?52">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-54.php" alt="group.php?54">下一页</a> 
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
