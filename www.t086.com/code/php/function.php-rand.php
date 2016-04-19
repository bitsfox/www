<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:rand()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:rand()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-27.php" alt="group.php?27">数学运算函数库</a></div><br><h1><font color=0000bb>rand</font></h1><p>
取得随机数值。<p>
<font color=ff8000>语法:</font> <b>int rand([int min], [int max]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数学运算<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来取得随机数值。若没有指定随机数的最大及最小范围，本函数会自动的从 0 到 RAND_MAX 中取一个随机数。若有指定 min 及 max 的参数，则从指定参数中取一个数字。例如 rand(38, 49) 则会从 38 到 49 之间取一个随机数值，UNIX 系统包含 49、Win32 系统不包含 49 (zkimmel@earthlink.net 10-May-1999)。值得注意的是为使随机数的乱度最大，每次在取随机数之前最好使用 <a href="function.php-srand.php" alt="function.php?srand">srand()</a> 以配置新的随机数种子。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-srand.php" alt="function.php?srand">srand()</a> &nbsp;<a href="function.php-getrandmax.php" alt="function.php?getrandmax">getrandmax()</a> &nbsp;<a href="function.php-mt_rand.php" alt="function.php?mt_rand">mt_rand()</a> &nbsp;<a href="function.php-mt_srand.php" alt="function.php?mt_srand">mt_srand()</a> &nbsp;<a href="function.php-mt_getrandmax.php" alt="function.php?mt_getrandmax">mt_getrandmax()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-pow.php" alt="function.php?pow">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-round.php" alt="function.php?round">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
