<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 函数:gethostbynamel()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>函数:gethostbynamel()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-35.php" alt="group.php?35">网络函数库</a></div><br><h1><font color="0000bb">gethostbynamel</font></h1><p>
返回机器名称的所有 IP。<p>
<font color="ff8000">语法:</font> <b>array gethostbynamel(string hostname);</b><p>
<font color="ff8000">返回值:</font> 数组<p>
<font color="ff8000">函数种类:</font> 网络系统<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">内容说明</font></td></tr></table><p>若一个机器名称有很多个 IP 位址 (例如一些 FTP 或是 WWW 网站)，使用本函数可以取得全部的 IP 位址，返回到数组变量中。<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">使用范例</font></td></tr></table><p><font color="#000000">
本范例列出所有网景&nbsp;FTP&nbsp;站的&nbsp;IP。(注：网景的&nbsp;FTP&nbsp;站是一个&nbsp;Domain&nbsp;Name&nbsp;却对映到许多&nbsp;IP&nbsp;Address&nbsp;的网站。)<br><br><font color="#0000BB">&lt;?php<br>$netscapeftp</font><font color="#007700">=</font><font color="#0000BB">gethostbynamel</font><font color="#007700">(</font><font color="#DD0000">&quot;ftp.netscape.com&quot;</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">&quot;Netscape&nbsp;FTP&nbsp;网站&nbsp;IP&nbsp;Address:&lt;ol&nbsp;type=1&gt;&quot;</font><font color="#007700">;<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$netscapeftp</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;&lt;li&gt;&quot;</font><font color="#007700">.</font><font color="#0000BB">$netscapeftp</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">];<br>}<br>echo&nbsp;</font><font color="#DD0000">&quot;&lt;/ol&gt;&quot;</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="gethostbynamel.gif" alt="img/gethostbynamel.gif" WIDTH="338" HEIGHT="233"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">参考</font></td></tr></table><p><a href="function.php-gethostbyaddr.php" alt="function.php?gethostbyaddr">gethostbyaddr()</a> &nbsp;<a href="function.php-gethostbyname.php" alt="function.php?gethostbyname">gethostbyname()</a> &nbsp;<a href="function.php-checkdnsrr.php" alt="function.php?checkdnsrr">checkdnsrr()</a> &nbsp;<a href="function.php-getmxrr.php" alt="function.php?getmxrr">getmxrr()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="function.php-gethostbyname.php" alt="function.php?gethostbyname">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-checkdnsrr.php" alt="function.php?checkdnsrr">下一页</a> 
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
