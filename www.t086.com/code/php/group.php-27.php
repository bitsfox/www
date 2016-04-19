<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 数学运算函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>数学运算函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 33 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>本函数库能处理的数值范围只到长整数与倍浮点数的范围。若要处理超过上述范围的数值，要使用 <a href="group.php-5.php" alt="group.php?5">BC 高精确度函数库</a>。本函数库定义了圆周率的常量 M_PI 值为 3.14159265358979323846。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-Abs.php" alt="function.php?Abs">Abs</a>:</td><td valign=top>取得绝对值。</td></tr>
<tr><td align=right valign=top><a href="function.php-Acos.php" alt="function.php?Acos">Acos</a>:</td><td valign=top>取得反余弦值。</td></tr>
<tr><td align=right valign=top><a href="function.php-Asin.php" alt="function.php?Asin">Asin</a>:</td><td valign=top>取得反正弦值。</td></tr>
<tr><td align=right valign=top><a href="function.php-Atan.php" alt="function.php?Atan">Atan</a>:</td><td valign=top>取得反正切值。</td></tr>
<tr><td align=right valign=top><a href="function.php-Atan2.php" alt="function.php?Atan2">Atan2</a>:</td><td valign=top>计算二数的反正切值。</td></tr>
<tr><td align=right valign=top><a href="function.php-base_convert.php" alt="function.php?base_convert">base_convert</a>:</td><td valign=top>转换数字的进位方式。</td></tr>
<tr><td align=right valign=top><a href="function.php-BinDec.php" alt="function.php?BinDec">BinDec</a>:</td><td valign=top>二进位转成十进位。</td></tr>
<tr><td align=right valign=top><a href="function.php-Ceil.php" alt="function.php?Ceil">Ceil</a>:</td><td valign=top>计算大于指定数的最小整数。</td></tr>
<tr><td align=right valign=top><a href="function.php-Cos.php" alt="function.php?Cos">Cos</a>:</td><td valign=top>余弦计算。</td></tr>
<tr><td align=right valign=top><a href="function.php-DecBin.php" alt="function.php?DecBin">DecBin</a>:</td><td valign=top>十进位转二进位。</td></tr>
<tr><td align=right valign=top><a href="function.php-DecHex.php" alt="function.php?DecHex">DecHex</a>:</td><td valign=top>十进位转十六进位。</td></tr>
<tr><td align=right valign=top><a href="function.php-DecOct.php" alt="function.php?DecOct">DecOct</a>:</td><td valign=top>十进位转八进位。</td></tr>
<tr><td align=right valign=top><a href="function.php-Exp.php" alt="function.php?Exp">Exp</a>:</td><td valign=top>自然对数 e 的次方值。</td></tr>
<tr><td align=right valign=top><a href="function.php-Floor.php" alt="function.php?Floor">Floor</a>:</td><td valign=top>计算小于指定数的最大整数。</td></tr>
<tr><td align=right valign=top><a href="function.php-getrandmax.php" alt="function.php?getrandmax">getrandmax</a>:</td><td valign=top>随机数的最大值。</td></tr>
<tr><td align=right valign=top><a href="function.php-HexDec.php" alt="function.php?HexDec">HexDec</a>:</td><td valign=top>十六进位转十进位。</td></tr>
<tr><td align=right valign=top><a href="function.php-Log.php" alt="function.php?Log">Log</a>:</td><td valign=top>自然对数值。</td></tr>
<tr><td align=right valign=top><a href="function.php-Log10.php" alt="function.php?Log10">Log10</a>:</td><td valign=top>10 基底的对数值。</td></tr>
<tr><td align=right valign=top><a href="function.php-max.php" alt="function.php?max">max</a>:</td><td valign=top>取得最大值。</td></tr>
<tr><td align=right valign=top><a href="function.php-min.php" alt="function.php?min">min</a>:</td><td valign=top>取得最小值。</td></tr>
<tr><td align=right valign=top><a href="function.php-mt_rand.php" alt="function.php?mt_rand">mt_rand</a>:</td><td valign=top>取得随机数值。</td></tr>
<tr><td align=right valign=top><a href="function.php-mt_srand.php" alt="function.php?mt_srand">mt_srand</a>:</td><td valign=top>配置随机数种子。</td></tr>
<tr><td align=right valign=top><a href="function.php-mt_getrandmax.php" alt="function.php?mt_getrandmax">mt_getrandmax</a>:</td><td valign=top>随机数的最大值。</td></tr>
<tr><td align=right valign=top><a href="function.php-number_format.php" alt="function.php?number_format">number_format</a>:</td><td valign=top>格式化数字字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-OctDec.php" alt="function.php?OctDec">OctDec</a>:</td><td valign=top>八进位转十进位。</td></tr>
<tr><td align=right valign=top><a href="function.php-pi.php" alt="function.php?pi">pi</a>:</td><td valign=top>圆周率。</td></tr>
<tr><td align=right valign=top><a href="function.php-pow.php" alt="function.php?pow">pow</a>:</td><td valign=top>次方。</td></tr>
<tr><td align=right valign=top><a href="function.php-rand.php" alt="function.php?rand">rand</a>:</td><td valign=top>取得随机数值。</td></tr>
<tr><td align=right valign=top><a href="function.php-round.php" alt="function.php?round">round</a>:</td><td valign=top>四舍五入。</td></tr>
<tr><td align=right valign=top><a href="function.php-Sin.php" alt="function.php?Sin">Sin</a>:</td><td valign=top>正弦计算。</td></tr>
<tr><td align=right valign=top><a href="function.php-Sqrt.php" alt="function.php?Sqrt">Sqrt</a>:</td><td valign=top>开平方根。</td></tr>
<tr><td align=right valign=top><a href="function.php-srand.php" alt="function.php?srand">srand</a>:</td><td valign=top>配置随机数种子。</td></tr>
<tr><td align=right valign=top><a href="function.php-Tan.php" alt="function.php?Tan">Tan</a>:</td><td valign=top>正切计算。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-26.php" alt="group.php?26">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-28.php" alt="group.php?28">下一页</a> 
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
