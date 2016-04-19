<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:eval()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:eval()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-30.php" alt="group.php?30">杂项函数库</a></div><br><h1><font color="0000bb">eval</font></h1><p>
将值代入字符串之中。<p>
<font color="ff8000">语法:</font> <b>void eval(string code_str);</b><p>
<font color="ff8000">返回值:</font> 无<p>
<font color="ff8000">函数种类:</font> 资料处理<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>本函数可将字符串之中的变量值代入，通常用在处理数据库的资料上。参数 code_str 为欲处理的字符串。值的注意的是待处理的字符串要符合 PHP 的字符串格式，同时在结尾处要有分号。使用本函数处理后的字符串会沿续到 PHP 程序结束。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$string&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">'杯子'</font><font color="#007700">;<br></font><font color="#0000BB">$name&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">'咖啡'</font><font color="#007700">;<br></font><font color="#0000BB">$str&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">'这个&nbsp;$string&nbsp;中装有&nbsp;$name.&lt;br&gt;'</font><font color="#007700">;<br>echo&nbsp;</font><font color="#0000BB">$str</font><font color="#007700">;<br>eval(&nbsp;</font><font color="#DD0000">&quot;</font><font color="#007700">\$</font><font color="#DD0000">str&nbsp;=&nbsp;</font><font color="#007700">\&quot;</font><font color="#DD0000">$str</font><font color="#007700">\&quot;</font><font color="#DD0000">;&quot;&nbsp;</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$str</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font><br>本例的返回值为<br><br>这个&nbsp;$string&nbsp;中装有&nbsp;$name.<br>这个&nbsp;杯子&nbsp;中装有&nbsp;咖啡.</font>
<p>
        <div align="center"><img src="eval.gif" alt="img/eval.gif" WIDTH="360" HEIGHT="125"></div>
        <p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-connection_timeout.php" alt="function.php?connection_timeout">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-extract.php" alt="function.php?extract">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
