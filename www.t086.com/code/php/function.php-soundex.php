<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:soundex()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:soundex()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>soundex</font></h1><p>
计算字符串的读音值<p>
<font color=ff8000>语法:</font> <b>string soundex(string str);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>Soundex 值是利用英文字的读音近似值所求得的值，值由四个字符构成，第一个字符为英文字母，后三个为数字。在拼音文字中有时会有会念但不能拼出正确字的情形，特别是在做搜寻引擎时面对用户传入的英文字符串，可用本函数做类似模糊比对的效果。例如 Knuth 和 Kant 二个字符串，它们的 soundex 值都是 H416。更详细的说明参考 Donald Knuth 大师的名著：电脑程序设计的艺术 (The Art Of Computer Programming) 第三卷排序和搜寻。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$str1</font><font color="#007700">=</font><font color="#0000BB">soundex</font><font color="#007700">(</font><font color="#DD0000">"Wilson"</font><font color="#007700">);<br></font><font color="#0000BB">$str2</font><font color="#007700">=</font><font color="#0000BB">soundex</font><font color="#007700">(</font><font color="#DD0000">"Waillsume"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"soundex(</font><font color="#007700">\"</font><font color="#DD0000">Wilson</font><font color="#007700">\"</font><font color="#DD0000">)=$str1&nbsp;等于</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"soundex(</font><font color="#007700">\"</font><font color="#DD0000">Waillsume</font><font color="#007700">\"</font><font color="#DD0000">)=$str2</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"值均为&nbsp;$str1"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font><br>上例返回的字符串为<br>soundex("Wilson")=W425&nbsp;等于<br>soundex("Waillsume")=W425<br>值均为&nbsp;W425</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-similar_text.php" alt="function.php?similar_text">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-sprintf.php" alt="function.php?sprintf">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
