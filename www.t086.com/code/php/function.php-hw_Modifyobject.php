<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:hw_Modifyobject()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:hw_Modifyobject()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-19.php" alt="group.php?19">Hyperwave 服务器函数库</a></div><br><h1><font color=0000bb>hw_Modifyobject</font></h1><p>
修改类记录。<p>
<font color=ff8000>语法:</font> <b>boolean hw_modifyobject(int connection, int object_to_change, array remove, array add, int [mode]);</b><p>
<font color=ff8000>返回值:</font> 布尔值<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可用来移除、增加及修改类。参数 connection 为和 Hyperwave 服务器的连接代码。参数 object_to_change 为待修改的类。参数 remove 及 add 分别为要移除及加入的属性列示。参数 mode 通常省略，若要递回修改，则该参数设为 1。成功则返回 true。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
例一:&nbsp;修改属性<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;之前的程序省略<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Name"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"books"</font><font color="#007700">);<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Name"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"articles"</font><font color="#007700">);<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;之后的程序省略<br></font><font color="#0000BB">?&gt;<br></font><br><br>例二:&nbsp;新增属性<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;之前的程序省略<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Name"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Name"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"articles"</font><font color="#007700">);<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;之后的程序省略<br></font><font color="#0000BB">?&gt;<br></font><br><br>例三:&nbsp;修改&nbsp;title&nbsp;属性<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;之前的程序省略<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"en:Books"</font><font color="#007700">);<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"en:Articles"</font><font color="#007700">);<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;之后的程序省略<br></font><font color="#0000BB">?&gt;<br></font><br><br>例四:&nbsp;修改&nbsp;title&nbsp;属性<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;之前的程序省略<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;array(</font><font color="#DD0000">"en"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"Books"</font><font color="#007700">));<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;array(</font><font color="#DD0000">"en"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"Articles"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"ge"</font><font color="#007700">=&gt;</font><font color="#DD0000">"Artikel"</font><font color="#007700">));<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;之后的程序省略<br></font><font color="#0000BB">?&gt;<br></font><br><br>例五:&nbsp;移除属性<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;之前的程序省略<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">""</font><font color="#007700">);<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"en:Articles"</font><font color="#007700">);<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;之后的程序省略<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-hw_InsertObject.php" alt="function.php?hw_InsertObject">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-hw_New_Document.php" alt="function.php?hw_New_Document">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
