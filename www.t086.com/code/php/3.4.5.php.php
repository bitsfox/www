<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 其它的流程控制</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>其它的流程控制</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

除了上面的流程控制指令之外，尚有 break 及 continue 两个流程控制指令。<p>

break 用来跳出目前执行的循环，如下例<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">10</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$arr</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">]&nbsp;==&nbsp;</font><font color="#DD0000">"stop"</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>

<p><hr size=1 width=100%><p>

continue 立即停止目前执行循环，并回到循环的条件判断处，见下例<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">while&nbsp;(list(</font><font color="#0000BB">$key</font><font color="#007700">,</font><font color="#0000BB">$value</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$arr</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$key&nbsp;</font><font color="#007700">%&nbsp;</font><font color="#0000BB">2</font><font color="#007700">)&nbsp;{&nbsp;</font><font color="#FF8000">//&nbsp;略过偶数<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">continue;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;</font><font color="#0000BB">do_something_odd&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$value</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

而 BASIC 常用的 goto 在 C 及 Borland Pascal 中或许可以使用。但在 PHP 中，由于它的 Web Server Script 特性以及结构化的组成，并不能在 PHP 中使用 goto 循环指令?

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.4.php.php" alt="3.4.4.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.5.1.php.php" alt="3.5.1.php">下一页</a> 
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
