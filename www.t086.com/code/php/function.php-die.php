<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:die()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:die()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-30.php" alt="group.php?30">杂项函数库</a></div><br><h1><font color="0000bb">die</font></h1><p>
输出信息并中断 PHP 程序。<p>
<font color="ff8000">语法:</font> <b>void die(string message);</b><p>
<font color="ff8000">返回值:</font> 无<p>
<font color="ff8000">函数种类:</font> PHP 系统功能<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>本函数将送出字符串到浏览器并中断 PHP 程序 (Script)。参数 message 为欲送出的字符串。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
下例中，若无法打开&nbsp;/etc/shadow&nbsp;时，传给浏览器抱歉，无法打开:&nbsp;/etc/shadow。<br><br><font color="#0000BB">&lt;?php<br>$filename&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;/etc/shadow&quot;</font><font color="#007700">;<br></font><font color="#0000BB">$file&nbsp;</font><font color="#007700">=&nbsp;@</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$filename</font><font color="#007700">,&nbsp;</font><font color="#DD0000">'r'</font><font color="#007700">)<br>&nbsp;&nbsp;or&nbsp;die(</font><font color="#DD0000">&quot;抱歉，无法?/font&gt;<font color="#007700">}</font><font color="#DD0000">启:&nbsp;$filename&quot;</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">&quot;本行不会执行&quot;</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="die.gif" alt="img/die.gif" WIDTH="372" HEIGHT="105"></div>
        <p><hr size="1"><br><p>
</font></td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="function.php-extract.php" alt="function.php?extract">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-exit.php" alt="function.php?exit">下一页</a> 
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
