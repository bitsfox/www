<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:clearstatcache()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:clearstatcache()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">文件系统函数库</a></div><br><h1><font color=0000bb>clearstatcache</font></h1><p>
清除文件状态快取。<p>
<font color=ff8000>语法:</font> <b>void clearstatcache(void);</b><p>
<font color=ff8000>返回值:</font> 无<p>
<font color=ff8000>函数种类:</font> 文件存取<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>对操作系统而言，使用 stat() 或 lstat() 二个函数是很耗资源的，尤其是当每次都要重新呼叫 stat() 及 lstat() 二个函数时，更是不经济的方式。因此为节省资源，PHP 系统会将文件状态放在快取内存中，以便随时使用。而本函数就是提供清除快取内存中文件信息的函数。受本函数影响的函数有 stat()、lstat()、file_exists()、is_writeable()、is_readable()、is_executable()、is_file()、is_dir()、is_link()、filectime()、fileatime()、filemtime()、fileinode()、filegroup()、fileowner()、filesize()、filetype() 及 fileperms() 等十八个。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-stat.php" alt="function.php?stat">stat()</a> &nbsp;<a href="function.php-lstat.php" alt="function.php?lstat">lstat()</a> &nbsp;<a href="function.php-file_exists.php" alt="function.php?file_exists">file_exists()</a> &nbsp;<a href="function.php-is_writeable.php" alt="function.php?is_writeable">is_writeable()</a> &nbsp;<a href="function.php-is_readable.php" alt="function.php?is_readable">is_readable()</a> &nbsp;<a href="function.php-is_executable.php" alt="function.php?is_executable">is_executable()</a> &nbsp;<a href="function.php-is_file.php" alt="function.php?is_file">is_file()</a> &nbsp;<a href="function.php-is_dir.php" alt="function.php?is_dir">is_dir()</a> &nbsp;<a href="function.php-is_link.php" alt="function.php?is_link">is_link()</a> &nbsp;<a href="function.php-filectime.php" alt="function.php?filectime">filectime()</a> &nbsp;<a href="function.php-fileatime.php" alt="function.php?fileatime">fileatime()</a> &nbsp;<a href="function.php-filemtime.php" alt="function.php?filemtime">filemtime()</a> &nbsp;<a href="function.php-fileinode.php" alt="function.php?fileinode">fileinode()</a> &nbsp;<a href="function.php-filegroup.php" alt="function.php?filegroup">filegroup()</a> &nbsp;<a href="function.php-fileowner.php" alt="function.php?fileowner">fileowner()</a> &nbsp;<a href="function.php-filesize.php" alt="function.php?filesize">filesize()</a> &nbsp;<a href="function.php-filetype.php" alt="function.php?filetype">filetype()</a> &nbsp;<a href="function.php-fileperms.php" alt="function.php?fileperms">fileperms()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-chown.php" alt="function.php?chown">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-copy.php" alt="function.php?copy">下一页</a> 
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
