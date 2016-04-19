<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:uniqid()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:uniqid()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-30.php" alt="group.php?30">杂项函数库</a></div><br><h1><font color="0000bb">uniqid</font></h1><p>
产生只一的值。<p>
<font color="ff8000">语法:</font> <b>string uniqid(string prefix);</b><p>
<font color="ff8000">返回值:</font> 字符串<p>
<font color="ff8000">函数种类:</font> 编码处理<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>本函数会依据当时的毫秒以及指定的前置字符串产生一个独一无二的字符串。参数 prefix 为前置的字符串，最多可达 114 字符。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
本例产生&nbsp;32&nbsp;个字符的独一无二字符串。<br><br><font color="#0000BB">&lt;?php<br>$token&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">md5</font><font color="#007700">(</font><font color="#0000BB">uniqid</font><font color="#007700">(</font><font color="#0000BB">rand</font><font color="#007700">()));<br>echo&nbsp;</font><font color="#0000BB">$token</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="uniqid.gif" alt="img/uniqid.gif" WIDTH="355" HEIGHT="105"></div>
        <p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-unserialize.php" alt="function.php?unserialize">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-usleep.php" alt="function.php?usleep">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
