<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:asort()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:asort()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-3.php" alt="group.php?3">数组处理函数库</a></div><br><h1><font color="0000bb">asort</font></h1><p>
将数组的值由小到大排序。<p>
<font color="ff8000">语法:</font> <b>void asort(array array);</b><p>
<font color="ff8000">返回值:</font> 无<p>
<font color="ff8000">函数种类:</font> 资料处理<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>这个函数将数组的值重新排序，由小至大排列。数组的索引亦跟着值的顺序而变动。当您在程序中需要重新整理数组值的顺序时，就可以使用这个函数。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
底下的范例返回的结果为<br>fruits[c]&nbsp;=&nbsp;apple<br>fruits[b]&nbsp;=&nbsp;banana<br>fruits[d]&nbsp;=&nbsp;lemon<br>fruits[a]&nbsp;=&nbsp;orange<br>我们可以看到水果名&nbsp;(数组值)&nbsp;已按英<br>文字母的顺序由&nbsp;a&nbsp;往&nbsp;z&nbsp;排序，而索引亦跟着值变动。<br><br><font color="#0000BB">&lt;?<br>$fruits&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">&quot;d&quot;</font><font color="#007700">=&gt;</font><font color="#DD0000">&quot;lemon&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;a&quot;</font><font color="#007700">=&gt;</font><font color="#DD0000">&quot;orange&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;b&quot;</font><font color="#007700">=&gt;</font><font color="#DD0000">&quot;banana&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;c&quot;</font><font color="#007700">=&gt;</font><font color="#DD0000">&quot;apple&quot;</font><font color="#007700">);<br></font><font color="#0000BB">asort</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">);<br>for(</font><font color="#0000BB">reset</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$key&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">key</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">);&nbsp;</font><font color="#0000BB">next</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;fruits</font><font color="#007700">[</font><font color="#DD0000">$key</font><font color="#007700">]</font><font color="#DD0000">&nbsp;=&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$fruits</font><font color="#007700">[</font><font color="#0000BB">$key</font><font color="#007700">].</font><font color="#DD0000">&quot;\n&quot;</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="asort.gif" alt="img/asort.gif" WIDTH="356" HEIGHT="137"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">参考</font></td></tr></table><p><a href="function.php-arsort.php" alt="function.php?arsort">arsort()</a> &nbsp;<a href="function.php-rsort.php" alt="function.php?rsort">rsort()</a> &nbsp;<a href="function.php-ksort.php" alt="function.php?ksort">ksort()</a> &nbsp;<a href="function.php-sort.php" alt="function.php?sort">sort()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="function.php-arsort.php" alt="function.php?arsort">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-count.php" alt="function.php?count">下一页</a> 
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
