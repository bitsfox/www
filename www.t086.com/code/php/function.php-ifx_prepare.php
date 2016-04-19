<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ifx_prepare()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor=ffffff leftmargin=0 topmargin=0 marginheight=0 marginwidth=0>
<table border=0 width=100% height=60 cellpadding=0 cellspacing=0 background="img/6a.gif" tppabs="/to.asp?url=http://php.wilson.gs/img/6a.gif">
<tr><td width=100% height=60 valign=top>
<form action="http://php.wilson.gs/funcsearch.php" method=post><table border=0 align=right><tr><td><font size=-1>输入待寻字符串</font><br><input type=text name="SearchStr" size=6 maxlength=100></td></tr></table></form>
&nbsp; <font color=0000bb>&lt;?php</font><br>
&nbsp; <font color=007700>require(</font><a href="javascript:if(confirm('http://php.wilson.gs/  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='../php.wilson.gs/default.htm'" tppabs="/to.asp?url=http://php.wilson.gs/"><font color=dd0000>"http://php.wilson.gs"</font><font color=007700>);</font>&nbsp;&nbsp;<font color=ff8000>// 回首页</font></a><br>
&nbsp; <font color=007700>echo</font> <font color=dd0000>"http://php.wilson.gs/bible/function.php : 函数:ifx_prepare()"</font><font color=007700">;</font><br>
</td></tr>
</table><p>
<div align=center><table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ifx_prepare()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix 数据库函数库</a></div><br><h1><font color=0000bb>ifx_prepare</font></h1><p>
准备 query 字符串。<p>
<font color=ff8000>语法:</font> <b>int ifx_prepare(string query, int link_identifier, int [cursor_type], mixed blobidarray);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数准备 query 字符串供 Informix 接着做相关的处理。若没有指定 link_identifier 参数，则程序会自动寻找最近打开的 ID。参数 cursor_type 可省略，其值有 IFX_SCROLL 与 IFX_HOLD 二种。若有 BLOB 的字段要加在 query 指令之中，可使用 blobidarray 参数，指定 BLOB 的代码。返回值可供 <a href="function.php-ifx_do.php" alt="function.php?ifx_do">ifx_do()</a> 使用。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_query.php" alt="function.php?ifx_query">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ifx_do.php" alt="function.php?ifx_do">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
