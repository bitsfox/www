<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:getallheaders()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">

<div align="center"><table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:getallheaders()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-2.php" alt="group.php?2">apache服务器专用函数库</a></div><br><h1><font color="0000bb">getallheaders</font></h1><p>
获得所有 HTTP 变量值。<p>
<font color="ff8000">语法:</font> <b>array getallheaders(void);</b><p>
<font color="ff8000">返回值:</font> 数组<p>
<font color="ff8000">函数种类:</font> PHP 系统功能<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>使用本项功能时不需代入任何参数值，返回的是所有 HTTP 变量值，并使用组合的数组返回。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
下例列出所有的&nbsp;HTTP&nbsp;变量<br><br><font color="#0000BB">&lt;?php<br>$headers&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">getallheaders</font><font color="#007700">();<br>while&nbsp;(list(</font><font color="#0000BB">$header</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$value</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$headers</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;$header:&nbsp;$value&lt;br&gt;</font><font color="#007700">\n</font><font color="#DD0000">&quot;</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font><br><br>备注:&nbsp;&nbsp;这个函数只有&nbsp;PHP&nbsp;以apache服务器的模块&nbsp;(module)&nbsp;方式执行时方有效。</font>
<p>
        <div align="center"><img src="getallheaders.gif" alt="img/getallheaders.gif" WIDTH="495" HEIGHT="243"></div>
        <p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-apache_note.php" alt="function.php?apache_note">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-virtual.php" alt="function.php?virtual">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
