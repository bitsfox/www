<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:passthru()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:passthru()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-14.php" alt="group.php?14">程序执行功能函数库</a></div><br><h1><font color=0000bb>passthru</font></h1><p>
执行外部程序并不加处理输出资料。<p>
<font color=ff8000>语法:</font> <b>string passthru(string command, int [return_var]);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 操作系统与环境<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数类似 <a href="function.php-Exec.php" alt="function.php?Exec">Exec()</a> 用来执行 command 指令，并输出结果。若是 return_var 参数存在，则执行 command 之后的状态会填入 return_var 中。若输出的资料是二进位的资料，并且需要输出到浏览器中的话，使用本函数就相当合适了。例如使用 pbmplus 工具来执行指令，并返回二进位的图形资料。可以先配置返回资料的标头 (header) 为 Content-type: image/gif，然后呼叫 pbmplus 程序处理图形资料，并将二进位的图形资料直接返回浏览器。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-PassThru.php" alt="function.php?PassThru">PassThru()</a> &nbsp;<a href="function.php-Exec.php" alt="function.php?Exec">Exec()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-system.php" alt="function.php?system">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-FDF_open.php" alt="function.php?FDF_open">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
