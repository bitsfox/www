<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:srand()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:srand()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-27.php" alt="group.php?27">数学运算函数库</a></div><br><h1><font color=0000bb>srand</font></h1><p>
配置随机数种子。<p>
<font color=ff8000>语法:</font> <b>void srand(int seed);</b><p>
<font color=ff8000>返回值:</font> 无<p>
<font color=ff8000>函数种类:</font> 数学运算<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数传入参数 seed 后，配置随机数的种子。值得注意的是参数 seed 值最好也是随机出现的数字，例如利用加入时间做为变量的来源就是不错的方法，或者开发其它的硬体周边界面可取得更好的随机数。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
本例加入时间的因素，以执行时的百万分之一秒当随机数种子<br><br><font color="#0000BB">&lt;?php<br>srand</font><font color="#007700">((double)</font><font color="#0000BB">microtime</font><font color="#007700">()*</font><font color="#0000BB">1000000</font><font color="#007700">);<br></font><font color="#0000BB">$randval&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">rand</font><font color="#007700">();<br>echo&nbsp;</font><font color="#0000BB">$randval</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-rand.php" alt="function.php?rand">rand()</a> &nbsp;<a href="function.php-getrandmax.php" alt="function.php?getrandmax">getrandmax()</a> &nbsp;<a href="function.php-mt_srand.php" alt="function.php?mt_srand">mt_srand()</a> &nbsp;<a href="function.php-mt_rand.php" alt="function.php?mt_rand">mt_rand()</a> &nbsp;<a href="function.php-mt_getrandmax.php" alt="function.php?mt_getrandmax">mt_getrandmax()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-Sqrt.php" alt="function.php?Sqrt">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-Tan.php" alt="function.php?Tan">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
