<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:bin2hex()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:bin2hex()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>bin2hex</font></h1><p>
二进位转成十六进位。<p>
<font color=ff8000>语法:</font> <b>string bin2hex(string str);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数让二进位字符串转成十六进位字符串。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
补充:<br>josh@superfork.com&nbsp;(22-Jun-1999)&nbsp;写了一个函数，可将十六进位转成二进位。<br><br><font color="#0000BB">&lt;?<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">hex2bin</font><font color="#007700">(</font><font color="#0000BB">$data</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$len&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">strlen</font><font color="#007700">(</font><font color="#0000BB">$data</font><font color="#007700">);<br>&nbsp;&nbsp;for(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$len</font><font color="#007700">;</font><font color="#0000BB">$i</font><font color="#007700">+=</font><font color="#0000BB">2</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$newdata&nbsp;</font><font color="#007700">.=&nbsp;</font><font color="#0000BB">pack</font><font color="#007700">(</font><font color="#DD0000">"C"</font><font color="#007700">,</font><font color="#0000BB">hexdec</font><font color="#007700">(</font><font color="#0000BB">substr</font><font color="#007700">(</font><font color="#0000BB">$string</font><font color="#007700">,</font><font color="#0000BB">$i</font><font color="#007700">,</font><font color="#0000BB">2</font><font color="#007700">)));<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;return&nbsp;</font><font color="#0000BB">$newdata</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-AddSlashes.php" alt="function.php?AddSlashes">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-Chop.php" alt="function.php?Chop">下一页</a> 
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
