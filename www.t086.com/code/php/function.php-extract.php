<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:extract()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:extract()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-30.php" alt="group.php?30">杂项函数库</a></div><br><h1><font color="0000bb">extract</font></h1><p>
汇入数组到符号表。<p>
<font color="ff8000">语法:</font> <b>void extract(array var_array, int [extract_type], string [prefix]);</b><p>
<font color="ff8000">返回值:</font> 无<p>
<font color="ff8000">函数种类:</font> 资料处理<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>本函数用来汇入数组变量到目前使用的符号表之中。参数 var_array 为待汇入的数组变量。参数 extract_type 为输出的类型，内定值为 EXTR_OVERWRITE，见下表<p>

<table border="1">
<tr><td>EXTR_OVERWRITE</td><td>遇相同的变量名则取而代之。</td></tr>
<tr><td>EXTR_SKIP</td><td>遇相同的变量名则略过不取代。</td></tr>
<tr><td>EXTR_PREFIX_SAME</td><td>遇相同的变量名则取新变量名称。</td></tr>
<tr><td>EXTR_PREFIX_ALL</td><td>全部取新的变量名称。</td></tr>
</table><p>

参数 prefix 为参数 extract_type 值为 EXTR_PREFIX_SAME 或者 EXTR_PREFIX_ALL 时，用来加在变量名称前的字符串。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
本例返回值为&nbsp;红色,&nbsp;大号,&nbsp;弧型,&nbsp;中号，其中的&nbsp;size&nbsp;变量不变。<br><br><font color="#0000BB">&lt;?<br>$size&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;大号&quot;</font><font color="#007700">;<br></font><font color="#0000BB">$var_array&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">&quot;color&quot;&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">&quot;红色&quot;</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">&quot;size&quot;&nbsp;&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">&quot;中号&quot;</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">&quot;shape&quot;&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">&quot;弧型&quot;</font><font color="#007700">);<br></font><font color="#0000BB">extract</font><font color="#007700">(</font><font color="#0000BB">$var_array</font><font color="#007700">,&nbsp;</font><font color="#0000BB">EXTR_PREFIX_SAME</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;new&quot;</font><font color="#007700">);<br>print&nbsp;</font><font color="#DD0000">&quot;$color,&nbsp;$size,&nbsp;$shape,&nbsp;$new_size</font><font color="#007700">\n</font><font color="#DD0000">&quot;</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="extract.gif" alt="img/extract.gif" WIDTH="360" HEIGHT="102"></div>
        <p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-eval.php" alt="function.php?eval">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-die.php" alt="function.php?die">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
