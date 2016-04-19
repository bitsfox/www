<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:chmod()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:chmod()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">文件系统函数库</a></div><br><h1><font color=0000bb>chmod</font></h1><p>
改变文件的属性。<p>
<font color=ff8000>语法:</font> <b>int chmod(string filename, int mode);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 文件存取<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来改变文件的属性。成功则返回 true、失败返回 false。在 mode 值中，系统不会自动将它加入 0 以获得正确的八进位演算，若要正确的使用，可以用下例第二行的方式。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下二行都是将文件属性设为&nbsp;rwxr-xr-x，但以第二行较好。<br><br><font color="#0000BB">&lt;?<br>chmod</font><font color="#007700">(</font><font color="#DD0000">"/mydir/myfile"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">755&nbsp;</font><font color="#007700">);&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;mode&nbsp;为十进位，可能有潜在错误<br></font><font color="#0000BB">chmod</font><font color="#007700">(</font><font color="#DD0000">"/mydir/myfile"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0755&nbsp;</font><font color="#007700">);&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;mode&nbsp;为八进位，确定的属性值<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>参考</font></td></tr></table><p><a href="function.php-chown.php" alt="function.php?chown">chown()</a> &nbsp;<a href="function.php-chgrp.php" alt="function.php?chgrp">chgrp()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-chgrp.php" alt="function.php?chgrp">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-chown.php" alt="function.php?chown">下一页</a> 
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
