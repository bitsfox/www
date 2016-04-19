<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 常量类型</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>常量类型</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

PHP 在常量中定义了以下一些常量。<p>

<font color="#007700">__FILE__</font><br>这个默认常量是 PHP 程序文件名。若引用文件 (include 或 require)则在引用文件内的该常量为引用文件名，而不是引用它的文件名。<p>

<font color="#007700">__LINE__</font><br>这个默认常量是 PHP 程序行数。若引用文件 (include 或 require)则在引用文件内的该常量为引用文件的行，而不是引用它的文件行。<p>

<font color="#007700">PHP_VERSION</font><br>这个内建常量是 PHP 程序的版本，如 '3.0.8-dev'。<p>

<font color="#007700">PHP_OS</font><br>这个内建常量指执行 PHP 解析器的操作系统名称，如 'Linux'。<p>

<font color="#007700">TRUE</font><br>这个常量就是真值 (true)。<p>

<font color="#007700">FALSE</font><br>这个常量就是伪值 (false)。<p>

<font color="#007700">E_ERROR</font><br>这个常量指到最近的错误处。<p>

<font color="#007700">E_WARNING</font><br>这个常量指到最近的警告处。<p>

<font color="#007700">E_PARSE</font><br>本常式为解析语法有潜在问题处。<p>

<font color="#007700">E_NOTICE</font><br>这个常式为发生不寻常但不一定是错误处。例如存取一个不存在的变量。<p>

这些 E_ 开头形式的常量，可以参考 error_reporting() 函数，有更多的相关说明。<p>

当然在程序写作时，以上的默认常量是不够用。define() 的功能可以让我们自行定义所需要的常量。见下例<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>
          define</font><font color="#007700">(</font><font color="#DD0000">"COPYRIGHT"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Copyright&nbsp;&amp;copy;&nbsp;2000,&nbsp;netleader.126.com"</font><font color="#007700">);<br>
          echo&nbsp;</font><font color="#0000BB">COPYRIGHT</font><font color="#007700">;&nbsp;&nbsp;</font><font color="#FF8000"><br>
          </font><font color="#0000BB">?&gt;<br></font>
</font>

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.1.4.php.php" alt="3.1.4.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.2.2.php.php" alt="3.2.2.php">下一页</a> 
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
