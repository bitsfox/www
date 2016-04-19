<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:exec()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:exec()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-14.php" alt="group.php?14">程序执行功能函数库</a></div><br><h1><font color=0000bb>exec</font></h1><p>
执行外部程序。<p>
<font color=ff8000>语法:</font> <b>string exec(string command, string [array], int [return_var]);</b><p>
<font color=ff8000>返回值:</font> 字符串<p>
<font color=ff8000>函数种类:</font> 操作系统与环境<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数执行输入 command 的外部程序或外部指令。它的返回字符串只是外部程序执行后返回的最后一行；若需要完整的返回字符串，可以使用 <a href="function.php-PassThru.php" alt="function.php?PassThru">PassThru()</a> 这个函数。<p>
要是参数 array 存在，command 会将 array 加到参数中执行，若不欲 array 被处理，可以在执行 exec() 之前呼叫 <a href="function.php-unset.php" alt="function.php?unset">unset()</a>。若是 return_var 跟 array 二个参数都存在，则执行 command 之后的状态会填入 return_var 中。<p>
值的注意的是若需要处理使用者输入的资料，而又要防止使用者耍花招破解系统，则可以使用 <a href="function.php-EscapeShellCmd.php" alt="function.php?EscapeShellCmd">EscapeShellCmd()</a>。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-system.php" alt="function.php?system">system()</a> &nbsp;<a href="function.php-PassThru.php" alt="function.php?PassThru">PassThru()</a> &nbsp;<a href="function.php-popen.php" alt="function.php?popen">popen()</a> &nbsp;<a href="function.php-EscapeShellCmd.php" alt="function.php?EscapeShellCmd">EscapeShellCmd()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-escapeshellcmd.php" alt="function.php?escapeshellcmd">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-system.php" alt="function.php?system">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
