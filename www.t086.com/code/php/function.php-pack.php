<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:pack()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:pack()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-30.php" alt="group.php?30">杂项函数库</a></div><br><h1><font color="0000bb">pack</font></h1><p>
压缩资料到位字符串之中。<p>
<font color="ff8000">语法:</font> <b>string pack(string format, mixed [args]...);</b><p>
<font color="ff8000">返回值:</font> 字符串<p>
<font color="ff8000">函数种类:</font> 资料处理<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>本函数用来将资料压缩打包到位的字符串之中。本函数和 Perl 的同名函数功能用法完全相同。参数 format 为压缩的格式，见下表<p>

<table border="1">
<tr><td>a</td><td>将字符串空白以 NULL 字符填满</td></tr>
<tr><td>A</td><td>将字符串空白以 SPACE 字符 (空格) 填满</td></tr>
<tr><td>h</td><td>十六进位字符串，低位在前</td></tr>
<tr><td>H</td><td>十六进位字符串，高位在前</td></tr>
<tr><td>c</td><td>有号字符</td></tr>
<tr><td>C</td><td>无号字符</td></tr>
<tr><td>s</td><td>有号短整数 (十六位，依计算机的位顺序)</td></tr>
<tr><td>S</td><td>无号短整数 (十六位，依计算机的位顺序)</td></tr>
<tr><td>n</td><td>无号短整数 (十六位, 高位在后的顺序)</td></tr>
<tr><td>v</td><td>无号短整数 (十六位, 低位在后的顺序)</td></tr>
<tr><td>i</td><td>有号整数 (依计算机的顺序及范围)</td></tr>
<tr><td>I</td><td>无号整数 (依计算机的顺序及范围)</td></tr>
<tr><td>l</td><td>有号长整数 (卅二位，依计算机的位顺序)</td></tr>
<tr><td>L</td><td>无号长整数 (卅二位，依计算机的位顺序)</td></tr>
<tr><td>N</td><td>无号短整数 (卅二位, 高位在后的顺序)</td></tr>
<tr><td>V</td><td>无号短整数 (卅二位, 低位在后的顺序)</td></tr>
<tr><td>f</td><td>单精确浮点数 (依计算机的范围)</td></tr>
<tr><td>d</td><td>倍精确浮点数 (依计算机的范围)</td></tr>
<tr><td>x</td><td>空位</td></tr>
<tr><td>X</td><td>倒回一位</td></tr>
<tr><td>@</td><td>填入 NULL 字符到绝对位置</td></tr>
</table><p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">print(</font><font color="#0000BB">pack</font><font color="#007700">(</font><font color="#DD0000">&quot;cccc&quot;</font><font color="#007700">,&nbsp;</font><font color="#0000BB">65</font><font color="#007700">,&nbsp;</font><font color="#0000BB">66</font><font color="#007700">,&nbsp;</font><font color="#0000BB">67</font><font color="#007700">,&nbsp;</font><font color="#0000BB">68</font><font color="#007700">));<br>echo&nbsp;</font><font color="#DD0000">&quot;&lt;br&gt;\n&quot;</font><font color="#007700">;<br>print(</font><font color="#0000BB">pack</font><font color="#007700">(</font><font color="#DD0000">&quot;h10&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;778899aabb&quot;</font><font color="#007700">));<br>echo&nbsp;</font><font color="#DD0000">&quot;&lt;br&gt;\n&quot;</font><font color="#007700">;<br>print(</font><font color="#0000BB">pack</font><font color="#007700">(</font><font color="#DD0000">&quot;H10&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;778899aabb&quot;</font><font color="#007700">));<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="pack.gif" alt="img/pack.gif" WIDTH="355" HEIGHT="144"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">参考</font></td></tr></table><p><a href="function.php-unpack.php" alt="function.php?unpack">unpack()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-leak.php" alt="function.php?leak">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-register_shutdown_function.php" alt="function.php?register_shutdown_function">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
