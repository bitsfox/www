<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ifx_query()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ifx_query()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix 数据库函数库</a></div><br><h1><font color=0000bb>ifx_query</font></h1><p>
送出一个 query 字符串。<p>
<font color=ff8000>语法:</font> <b>int ifx_query(string query, int [link_identifier], int [cursor_type], mixed [blobidarray]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数送出 query 字符串供 Informix 做相关的处理步骤。若没有指定 link_identifier 参数，则程序会自动寻找最近打开的 ID。参数 cursor_type 可省略，其值有 IFX_SCROLL 与 IFX_HOLD 二种。若有 BLOB 的字段要加在 query 指令之中，可使用 blobidarray 参数，指定 BLOB 的代码。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
例一:<br><br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;之前的程序省略<br></font><font color="#0000BB">ifx_textasvarchar</font><font color="#007700">(</font><font color="#0000BB">1</font><font color="#007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;使用文字模式&nbsp;(text&nbsp;mode)&nbsp;的&nbsp;blobs<br></font><font color="#0000BB">$res_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_query</font><font color="#007700">(</font><font color="#DD0000">"select&nbsp;*&nbsp;from&nbsp;orders"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$conn_id</font><font color="#007700">);<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">$res_id</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">printf</font><font color="#007700">(</font><font color="#DD0000">"无法取出&nbsp;orders&nbsp;资料表&nbsp;:&nbsp;%s\n&lt;br&gt;%s&lt;br&gt;\n"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">ifx_error</font><font color="#007700">());<br>&nbsp;&nbsp;</font><font color="#0000BB">ifx_errormsg</font><font color="#007700">();<br>&nbsp;&nbsp;die;<br>}<br></font><font color="#0000BB">ifx_htmltbl_result</font><font color="#007700">(</font><font color="#0000BB">$res_id</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"border=\"1\""</font><font color="#007700">);<br></font><font color="#0000BB">ifx_free_result</font><font color="#007700">(</font><font color="#0000BB">$res_id</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;之后的程序省略<br></font><font color="#0000BB">?&gt;<br></font><br><br>例二:<br><br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;之前的程序省略<br>//<br>//&nbsp;为二进位及文字建立&nbsp;BLOB&nbsp;代码<br></font><font color="#0000BB">$textid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_create_blob</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Text&nbsp;column&nbsp;in&nbsp;memory"</font><font color="#007700">);<br></font><font color="#0000BB">$byteid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_create_blob</font><font color="#007700">(</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Byte&nbsp;column&nbsp;in&nbsp;memory"</font><font color="#007700">);<br><br></font><font color="#0000BB">$blobidarray</font><font color="#007700">[]&nbsp;=&nbsp;</font><font color="#0000BB">$textid</font><font color="#007700">;<br></font><font color="#0000BB">$blobidarray</font><font color="#007700">[]&nbsp;=&nbsp;</font><font color="#0000BB">$byteid</font><font color="#007700">;<br><br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"insert&nbsp;into&nbsp;catalog&nbsp;(stock_num,&nbsp;manu_code,&nbsp;"&nbsp;</font><font color="#007700">.</font><font color="#DD0000">"cat_descr,cat_picture)&nbsp;values(1,'HRO',?,?)"</font><font color="#007700">;<br></font><font color="#0000BB">$res_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_query</font><font color="#007700">(</font><font color="#0000BB">$query</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$conn_id</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$blobidarray</font><font color="#007700">);<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">$res_id</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;错误处理<br></font><font color="#007700">}<br></font><font color="#0000BB">ifx_free_result</font><font color="#007700">(</font><font color="#0000BB">$res_id</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;之后程序省略<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_close.php" alt="function.php?ifx_close">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ifx_prepare.php" alt="function.php?ifx_prepare">下一页</a>  ]</td></tr></table>
</div><p><br><br>
 
</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
