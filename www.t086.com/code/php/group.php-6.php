<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 历法函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>历法函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 10 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>想要使用历法函数库，需要先编译好 dl/calendar 函数库。PHP 中的历法函数库提供不同的公元历法转换。转换的基准是凯撒日计数 
              (Julian Day Count)。所有的历法计算都必需先转换成凯撒日计数，再转成您所需要的历法，更多的资料可以参考这个网址找到 
              <a href="http://genealogy.org/%7Escottlee/cal-overview.html" tppabs="/to.asp?url=http://genealogy.org/~scottlee/cal-overview.html">http://genealogy.org/~scottlee/cal-overview.html</a> 
              。不过对于使用黄帝纪元的中国，这个函数库就还需要扩充才适合了。 </td>
          </tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-JDToGregorian.php" alt="function.php?JDToGregorian">JDToGregorian</a>:</td><td valign=top>将凯撒日计数 (Julian Day Count) 转换成为格里高里历法 (Gregorian date)。</td></tr>
<tr><td align=right valign=top><a href="function.php-GregorianToJD.php" alt="function.php?GregorianToJD">GregorianToJD</a>:</td><td valign=top>将格里高里历法转换成为凯撒日计数。</td></tr>
<tr><td align=right valign=top><a href="function.php-JDToJulian.php" alt="function.php?JDToJulian">JDToJulian</a>:</td><td valign=top>将凯撒日计数转换成为凯撒历法。</td></tr>
<tr><td align=right valign=top><a href="function.php-JulianToJD.php" alt="function.php?JulianToJD">JulianToJD</a>:</td><td valign=top>将凯撒历法转换成为凯撒日计数。</td></tr>
<tr><td align=right valign=top><a href="function.php-JDToJewish.php" alt="function.php?JDToJewish">JDToJewish</a>:</td><td valign=top>将凯撒日计数转换成为犹太历法。</td></tr>
<tr><td align=right valign=top><a href="function.php-JewishToJD.php" alt="function.php?JewishToJD">JewishToJD</a>:</td><td valign=top>将犹太历法转换成为凯撒日计数。</td></tr>
<tr><td align=right valign=top><a href="function.php-JDToFrench.php" alt="function.php?JDToFrench">JDToFrench</a>:</td><td valign=top>将凯撒日计数转换成为法国共和历法。</td></tr>
<tr><td align=right valign=top><a href="function.php-FrenchToJD.php" alt="function.php?FrenchToJD">FrenchToJD</a>:</td><td valign=top>将法国共和历法转换成为凯撒日计数。</td></tr>
<tr><td align=right valign=top><a href="function.php-JDMonthName.php" alt="function.php?JDMonthName">JDMonthName</a>:</td><td valign=top>返回月份名。</td></tr>
<tr><td align=right valign=top><a href="function.php-JDDayOfWeek.php" alt="function.php?JDDayOfWeek">JDDayOfWeek</a>:</td><td valign=top>返回日期在周几。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-5.php" alt="group.php?5">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-7.php" alt="group.php?7">下一页</a> 
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
