<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 赋值运算</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body bgcolor="ffffff" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
 
<div align="center"><table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>赋值运算</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>

赋值运算 (assignment operator) 有时会让人搞得一头雾水，不过它可以让程序更精简，增加程序的执行效率。<p>

<table border="1">
<tr><th>符号</th><th>意义</th></tr>
<tr><td>=</td><td>将右边的值连到左边</td></tr>
<tr><td>+=</td><td>将右边的值加到左边</td></tr>
<tr><td>-=</td><td>将右边的值减到左边</td></tr>
<tr><td>*=</td><td>将左边的值乘以右边</td></tr>
<tr><td>/=</td><td>将左边的值除以右边</td></tr>
<tr><td>%=</td><td>将左边的值对右边取余数</td></tr>
<tr><td>.=</td><td>将右边的字符串加到左边</td></tr>
</table>
        <p> <img src="3.3.3.gif" alt="img/3.3.3.gif" WIDTH="369" HEIGHT="117">
        <p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$a&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">5</font><font color="#007700">;<br></font><font color="#0000BB">$a&nbsp;</font><font color="#007700">+=&nbsp;</font><font color="#0000BB">2</font><font color="#007700">;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;即&nbsp;$a&nbsp;=&nbsp;$a&nbsp;+&nbsp;2;<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$a</font><font color="#007700">.</font><font color="#DD0000">&quot;&lt;br&gt;\n&quot;</font><font color="#007700">;<br></font><font color="#0000BB">$b&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;哇&quot;</font><font color="#007700">;<br></font><font color="#0000BB">$b&nbsp;</font><font color="#007700">.=&nbsp;</font><font color="#DD0000">&quot;哈&quot;</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;$b&nbsp;=&nbsp;&quot;哇哈&quot;;<br></font><font color="#0000BB">$b&nbsp;</font><font color="#007700">.=&nbsp;</font><font color="#DD0000">&quot;哈&quot;</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;$b&nbsp;=&nbsp;&quot;哇哈哈&quot;;<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">&quot;$b&lt;br&gt;</font><font color="#007700">\n</font><font color="#DD0000">&quot;</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="3.3.2.php.php" alt="3.3.2.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.3.4.php.php" alt="3.3.4.php">下一页</a> 
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
