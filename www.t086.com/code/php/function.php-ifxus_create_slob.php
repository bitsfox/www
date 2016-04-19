<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:ifxus_create_slob()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:ifxus_create_slob()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix 数据库函数库</a></div><br><h1><font color=0000bb>ifxus_create_slob</font></h1><p>
建立 slob 类。<p>
<font color=ff8000>语法:</font> <b>int ifxus_create_slob(int mode);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来建立 slob 类。参数 mode 值如下表<p>

<table border=1>
<tr><th>数值</th><th>常量</th></tr>
<tr><td>1</td><td>LO_RDONLY</td></tr>
<tr><td>2</td><td>LO_WRONLY</td></tr>
<tr><td>4</td><td>LO_APPEND</td></tr>
<tr><td>8</td><td>LO_RDWR</td></tr>
<tr><td>16</td><td>LO_BUFFER</td></tr>
<tr><td>32</td><td>LO_NOBUFFER</td></tr>
</table><p>

当然也 mode 可以直接使用常量值，如 IFX_LO_RDONLY。若有需要，可使用数字相加，使 mode 值更有变化。成功则返回 slob 的类代码，失败返回 false 值。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_nullformat.php" alt="function.php?ifx_nullformat">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-ifx_free_slob.php" alt="function.php?ifx_free_slob">下一页</a>  ]</td></tr></table>
</div><p><br><br>
 
</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
