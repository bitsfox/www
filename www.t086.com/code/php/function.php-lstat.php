<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:lstat()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:lstat()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">文件系统函数库</a></div><br><h1><font color=0000bb>lstat</font></h1><p>
取得链接文件相关信息。<p>
<font color=ff8000>语法:</font> <b>array lstat(string filename);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 文件存取<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数可蒐集链接文件的相关信息，并返回数组。数组的元素依序如下：<p>
<ol type=1>
<li>装置名称 (device)
<li>inode 值
<li>链接 (link) 到该文件的总数。
<li>拥有者的 UID
<li>拥有者的 GID
<li>若为字符或装置设备则为装置类型 (限系统支持 st_blksize 方有效，Windows 系列返回 -1)
<li>位组为单位的文件长度
<li>最后存取时间
<li>最后修改时间
<li>最后改动时间
<li>文件系统的区块大小 (限系统支持 st_blksize 方有效，Windows 系列返回 -1)
<li>匹配的区块数
</ol>
返回值放在快取缓冲区中，参考 <a href="function.php-clearstatcache.php" alt="function.php?clearstatcache">clearstatcache()</a>。
<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-stat.php" alt="function.php?stat">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-symlink.php" alt="function.php?symlink">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
