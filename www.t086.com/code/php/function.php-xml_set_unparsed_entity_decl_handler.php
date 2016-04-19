<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:xml_set_unparsed_entity_decl_handler()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:xml_set_unparsed_entity_decl_handler()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-53.php" alt="group.php?53">XML 解析函数库</a></div><br><h1><font color=0000bb>xml_set_unparsed_entity_decl_handler</font></h1><p>
配置未解析实体宣告的标头。<p>
<font color=ff8000>语法:</font> <b>boolean xml_set_unparsed_entity_decl_handler(int parser, string handler);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数配置尚未经过解析的实体宣告标头。参数 parser 为解析代码。参数 handler 包括解析代码、实体名称、基底、系统识别符、公用识别符、与记法名称等六个元素。看起来应是类似如下的字符串<p><code>&lt;!ENTITY name {publicId | systemId} NDATA notationName&gt;</code><p>更多的细节可以参考 XML 1.0 的规格书，有关<a href="javascript:if(confirm('http://www.w3.org/TR/1998/REC-xml-19980210  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='../www.w3.org/TR/1998/REC-xml-19980210#sec-external-ent'" tppabs="http://www.w3c.org/TR/1998/REC-xml-19980210#sec-external-ent">实体宣告的部份</a>。若无错误则返回 true 值。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-xml_set_default_handler.php" alt="function.php?xml_set_default_handler">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-xml_set_notation_decl_handler.php" alt="function.php?xml_set_notation_decl_handler">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
