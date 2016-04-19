<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:xml_parser_set_option()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:xml_parser_set_option()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-53.php" alt="group.php?53">XML 解析函数库</a></div><br><h1><font color=0000bb>xml_parser_set_option</font></h1><p>
配置解析使用的选项。<p>
<font color=ff8000>语法:</font> <b>boolean xml_parser_set_option(int parser, int option, mixed value);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来配置 XML 解析所选用的选项。参数 parser 为解析代码。参数 option 即为欲配置的选项常量名称，见下表 (如: XML_OPTION_CASE_FOLDING)。参数 value 则为欲配置的值。若没有错误则返回 true 值，否则返回 false 值。<p>

<table border=1>
<tr><th>选项常量名称</th><th>类型</th><th>说明</th></tr>
<tr><td>XML_OPTION_CASE_FOLDING</td><td>整数</td><td>配置是否允许 case-folding，默认值为允许</td></tr>
<tr><td>XML_OPTION_TARGET_ENCODING</td><td>字符串</td><td>配置目地的编码类型，有 ISO-8859-1、US-ASCII 及 UTF-8 等</td></tr>
</table><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-xml_parser_get_option.php" alt="function.php?xml_parser_get_option">xml_parser_get_option()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-xml_parser_free.php" alt="function.php?xml_parser_free">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-xml_parser_get_option.php" alt="function.php?xml_parser_get_option">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
