<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:error_reporting()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:error_reporting()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-22.php" alt="group.php?22">PHP 选项及相关信息函数库</a></div><br><h1><font color=0000bb>error_reporting</font></h1><p>
配置错误信息回报的等级。<p>
<font color=ff8000>语法:</font> <b>int error_reporting(int [level]);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> PHP 系统功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来配置错误信息回报的等级，参数 level 是一个整数的位遮罩 (bitmask)，见下表。<p>

<table border=1>
<tr><th>遮罩值</th><th>表示名称</th></tr>
<tr><td>1</td><td>E_ERROR</td></tr>
<tr><td>2</td><td>E_WARNING</td></tr>
<tr><td>4</td><td>E_PARSE</td></tr>
<tr><td>8</td><td>E_NOTICE</td></tr>
<tr><td>16</td><td>E_CORE_ERROR</td></tr>
<tr><td>32</td><td>E_CORE_WARNING</td></tr>
</table><p>

<ul type=disc>
<li>E_NOTICE 表示一般情形不记录，只有程序有错误情形时才用到，例如企图存取一个不存在的变量，或是呼叫 <a href="function.php-stat.php" alt="function.php?stat">stat()</a> 函数检视不存在的文件。
<li>E_WARNING 通常都会显示出来，但不会中断程序的执行。这对除错很有效。例如：用有问题的正则表达式呼叫 <a href="function.php-ereg.php" alt="function.php?ereg">ereg()</a>。
<li>E_ERROR 通常会显示出来，亦会中断程序执行。意即用这个遮罩无法追查到内存配置或其它的错误。
<li>E_PARSE 从语法中解析错误。
<li>E_CORE_ERROR 类似 E_ERROR，但不包括 PHP 核心造成的错误。
<li>E_CORE_WARNING 类似 E_WARNING，但不包括 PHP 核心错误警告。
</ul><p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-error_log.php" alt="function.php?error_log">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-getenv.php" alt="function.php?getenv">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
