<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - switch 循环</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center><table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>switch 循环</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

switch 循环，通常处理复合式的条件判断，每个子条件，都是 case 指令部分。在实作上若使用许多类似的 if 指令，可以将它综合成 switch 循环。<p>

语法如下<p>

<pre>
switch (expr) {
  case expr1:
    statement1;
    break;
  case expr2:
    statement2;
    break;
    :
    :
  default:
    statementN;
    break;
}
</pre><p>

其中的 expr 条件，通常为变量名称。而 case 后的 exprN，通常表示变量值。冒号后则为符合该条件要执行的部分。注意要用 break 跳离循环。<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">switch&nbsp;(</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"D"</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Mon"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"今天星期一"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Tue"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"今天星期二"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Wed"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"今天星期三"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Thu"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"今天星期四"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Fri"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"今天星期五"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;default:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"今天放假"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

很明显的，上述的例子用 if 循环就很麻烦了。当然在设计时，要将出现机率最大的条件放在最前面，最少出现的条件放在最后面，可以增加程序的执行效率。上例由于每天出现的机率相同，所以不用注意条件的顺序。

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.3.php.php" alt="3.4.3.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.4.5.php.php" alt="3.4.5.php">下一页</a> 
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
