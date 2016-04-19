<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:hw_InsDoc()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:hw_InsDoc()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-19.php" alt="group.php?19">Hyperwave 服务器函数库</a></div><br><h1><font color=0000bb>hw_InsDoc</font></h1><p>
插入文件。<p>
<font color=ff8000>语法:</font> <b>int hw_insdoc(int connection, int parentID, string object_record, string [text]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来插入新文件。参数 connection 为和 Hyperwave 服务器的连接代码。参数 parentID 为指定的父类 ID 值。参数 object_record 为欲插入的类记录。参数 text 可省略，若配置为 text 则表示纯 (ASCII) 文字。返回值为新文件的代码。治募注意的是本函数通常只用来插入纯文字文件或类记录，要插入任何格式的文件应用 <a href="function.php-hw_InsertDocument.php" alt="function.php?hw_InsertDocument">hw_InsertDocument()</a><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-hw_InsertDocument.php" alt="function.php?hw_InsertDocument">hw_InsertDocument()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-hw_InsColl.php" alt="function.php?hw_InsColl">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-hw_InsertDocument.php" alt="function.php?hw_InsertDocument">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
