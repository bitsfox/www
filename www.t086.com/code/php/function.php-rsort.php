<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:rsort()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:rsort()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-3.php" alt="group.php?3">数组处理函数库</a></div><br><h1><font color="0000bb">rsort</font></h1><p>
将数组的值由大到小排序。<p>
<font color="ff8000">语法:</font> <b>void rsort(array array);</b><p>
<font color="ff8000">返回值:</font> 无<p>
<font color="ff8000">函数种类:</font> 资料处理<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>本函数将数组依由大到小的方式重排。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$fruits&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">&quot;lemon&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;orange&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;banana&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;apple&quot;</font><font color="#007700">);<br></font><font color="#0000BB">rsort</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">);<br>for(</font><font color="#0000BB">reset</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">);&nbsp;list(</font><font color="#0000BB">$key</font><font color="#007700">,</font><font color="#0000BB">$value</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">);&nbsp;)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;fruits</font><font color="#007700">[</font><font color="#DD0000">$key</font><font color="#007700">]</font><font color="#DD0000">&nbsp;=&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$value</font><font color="#007700">.</font><font color="#DD0000">&quot;\n&quot;</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font>处理后的结果为<br>fruits[0]&nbsp;=&nbsp;orange<br>fruits[1]&nbsp;=&nbsp;lemon<br>fruits[2]&nbsp;=&nbsp;banana<br>fruits[3]&nbsp;=&nbsp;apple<br></font>
<p>
        <div align="center"><img src="rsort.gif" alt="img/rsort.gif" WIDTH="356" HEIGHT="137"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">参考</font></td></tr></table><p><a href="function.php-arsort.php" alt="function.php?arsort">arsort()</a> &nbsp;<a href="function.php-asort.php" alt="function.php?asort">asort()</a> &nbsp;<a href="function.php-ksort.php" alt="function.php?ksort">ksort()</a> &nbsp;<a href="function.php-sort.php" alt="function.php?sort">sort()</a> &nbsp;<a href="function.php-usort.php" alt="function.php?usort">usort()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-reset.php" alt="function.php?reset">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-shuffle.php" alt="function.php?shuffle">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
