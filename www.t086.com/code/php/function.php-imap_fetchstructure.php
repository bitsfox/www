<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:imap_fetchstructure()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:imap_fetchstructure()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP 电子邮件系统函数库</a></div><br><h1><font color=0000bb>imap_fetchstructure</font></h1><p>
获取某信件的结构信息。<p>
<font color=ff8000>语法:</font> <b>array imap_fetchstructure(int imap_stream, int msg_number);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可读取指定信件的相关信息。参数 imap_stream 为 IMAP 的代号。参数 msg_number 为信件的序号。返回的信息为数组的方式，各元素的内容见下表<p>

<table border=1>
<tr><th>元素名称</th><th>类型</th></tr>
<tr><td>type</td><td>整数 (Integer)</td></tr>
<tr><td>encoding</td><td>整数 (Integer)</td></tr>
<tr><td>ifsubtype</td><td>布尔 (Boolean)</td></tr>
<tr><td>subtype</td><td>字符串 (String)</td></tr>
<tr><td>ifdescription</td><td>布尔 (Boolean)</td></tr>
<tr><td>description</td><td>字符串 (String)</td></tr>
<tr><td>ifid</td><td>布尔 (Boolean)</td></tr>
<tr><td>id</td><td>字符串 (String)</td></tr>
<tr><td>lines</td><td>整数 (Integer)</td></tr>
<tr><td>bytes</td><td>整数 (Integer)</td></tr>
<tr><td>ifparameters</td><td>布尔 (Boolean)</td></tr>
</table><p>

其中 type 元素的值代表的意义如下<p>
<table border=1>
<tr><th>值</th><th>代表意义</th></tr>
<tr><td>0</td><td>文字 text</td></tr>
<tr><td>1</td><td>复合 multipart</td></tr>
<tr><td>2</td><td>信息 message</td></tr>
<tr><td>3</td><td>程序 application</td></tr>
<tr><td>4</td><td>声音 audio</td></tr>
<tr><td>5</td><td>图形 image</td></tr>
<tr><td>6</td><td>影像 video</td></tr>
<tr><td>7</td><td>其它 other</td></tr>
</table><p>

而 encoding 值代表的意义如下<p>

<table border=1>
<tr><th>值</th><th>代表意义</th></tr>
<tr><td>0</td><td>七位 (7 bit)</td></tr>
<tr><td>1</td><td>八位 (8 bit)</td></tr>
<tr><td>2</td><td>二进位 (binary)</td></tr>
<tr><td>3</td><td>BASE64 编码</td></tr>
<tr><td>4</td><td>QP 编码 (QuotedPrintable)</td></tr>
<tr><td>5</td><td>其它</td></tr>
</table><p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_fetchbody.php" alt="function.php?imap_fetchbody">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-imap_header.php" alt="function.php?imap_header">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
