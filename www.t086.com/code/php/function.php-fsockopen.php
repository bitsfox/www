<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:fsockopen()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:fsockopen()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-35.php" alt="group.php?35">网络函数库</a></div><br><h1><font color="0000bb">fsockopen</font></h1><p>
打开网络的 Socket 链接。<p>
<font color="ff8000">语法:</font> <b>int fsockopen(string hostname, int port, int [errno], string [errstr], int [timeout]);</b><p>
<font color="ff8000">返回值:</font> 整数<p>
<font color="ff8000">函数种类:</font> 网络系统<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>目前这个函数提供二个 Socket 资料流界面，分别为 Internet 用的 AF_INET 及 Unix 用的 AF_UNIX。当在 Internet 情形下使用时，参数 hostname 及 port 分别代表网址及埠号。在 UNIX 情形可做 IPC，hostname 参数表示到 socket 的路径，port 配置为 0。可省略的 timeout 选项表示多久没有连上就中断。在使用本函数之后会返回文件指针，供文件函数使用，包括 <a href="function.php-fgets.php" alt="function.php?fgets">fgets()</a>、<a href="function.php-fgetss.php" alt="function.php?fgetss">fgetss()</a>、<a href="function.php-fputs.php" alt="function.php?fputs">fputs()</a>、<a href="function.php-fclose.php" alt="function.php?fclose">fclose()</a> 与 <a href="function.php-feof.php" alt="function.php?feof">feof()</a>。参数 errno 及 errstr 也是可省略的，主要当做错误处理使用。使用本函数，会使用搁置模式 (blocking mode) 处理，可用 <a href="function.php-set_socket_blocking.php" alt="function.php?set_socket_blocking">set_socket_blocking()</a> 转换成无搁置模式。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
本例用来模拟成&nbsp;HTTP&nbsp;连接。<br><font color="#0000BB">&lt;?php<br>$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fsockopen</font><font color="#007700">(</font><font color="#DD0000">&quot;php.wilson.gs&quot;</font><font color="#007700">,&nbsp;</font><font color="#0000BB">80</font><font color="#007700">,&nbsp;&amp;</font><font color="#0000BB">$errno</font><font color="#007700">,&nbsp;&amp;</font><font color="#0000BB">$errstr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">10</font><font color="#007700">);<br>if(!</font><font color="#0000BB">$fp</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;$errstr&nbsp;($errno)&lt;br&gt;</font><font color="#007700">\n</font><font color="#DD0000">&quot;</font><font color="#007700">;<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">fputs</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#DD0000">&quot;GET&nbsp;/&nbsp;HTTP/1.0\nHost:&nbsp;php.wilson.gs\n\n&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(!</font><font color="#0000BB">feof</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">fgets</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#0000BB">128</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="fsockopen.gif" alt="img/fsockopen.gif" WIDTH="439" HEIGHT="452"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">参考</font></td></tr></table><p><a href="function.php-pfsockopen.php" alt="function.php?pfsockopen">pfsockopen()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-sybase_select_db.php" alt="function.php?sybase_select_db">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-pfsockopen.php" alt="function.php?pfsockopen">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
