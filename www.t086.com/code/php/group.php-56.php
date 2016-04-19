<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - FTP 文件传输函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>FTP 文件传输函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 20 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>FTP 的全为 File Transfer Protocol，也就是文件传输协议。利用本函数库可以让 PHP 也能处理 FTP 的相关功能。本函数库需要 PHP 3.0.13 版之后才支持。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-ftp_connect.php" alt="function.php?ftp_connect">ftp_connect</a>:</td><td valign=top>打开 FTP 链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_login.php" alt="function.php?ftp_login">ftp_login</a>:</td><td valign=top>登入 FTP 服务器。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_pwd.php" alt="function.php?ftp_pwd">ftp_pwd</a>:</td><td valign=top>取得目前所在路径。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_cdup.php" alt="function.php?ftp_cdup">ftp_cdup</a>:</td><td valign=top>回上层目录。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_chdir.php" alt="function.php?ftp_chdir">ftp_chdir</a>:</td><td valign=top>改变路径。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_mkdir.php" alt="function.php?ftp_mkdir">ftp_mkdir</a>:</td><td valign=top>建新目录。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_rmdir.php" alt="function.php?ftp_rmdir">ftp_rmdir</a>:</td><td valign=top>删除目录。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_nlist.php" alt="function.php?ftp_nlist">ftp_nlist</a>:</td><td valign=top>列出指定目录中所有文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_rawlist.php" alt="function.php?ftp_rawlist">ftp_rawlist</a>:</td><td valign=top>详细列出指定目录中所有文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_systype.php" alt="function.php?ftp_systype">ftp_systype</a>:</td><td valign=top>显示服务器系统。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_pasv.php" alt="function.php?ftp_pasv">ftp_pasv</a>:</td><td valign=top>切换主被动传输模式。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_get.php" alt="function.php?ftp_get">ftp_get</a>:</td><td valign=top>下载文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_fget.php" alt="function.php?ftp_fget">ftp_fget</a>:</td><td valign=top>下载文件，并存在已开的档中。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_put.php" alt="function.php?ftp_put">ftp_put</a>:</td><td valign=top>上传文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_fput.php" alt="function.php?ftp_fput">ftp_fput</a>:</td><td valign=top>上传已打开文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_size.php" alt="function.php?ftp_size">ftp_size</a>:</td><td valign=top>获得指定文件的大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_mdtm.php" alt="function.php?ftp_mdtm">ftp_mdtm</a>:</td><td valign=top>获得指定文件的最后修改时间。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_rename.php" alt="function.php?ftp_rename">ftp_rename</a>:</td><td valign=top>将文件改名。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_delete.php" alt="function.php?ftp_delete">ftp_delete</a>:</td><td valign=top>将文件删除。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_quit.php" alt="function.php?ftp_quit">ftp_quit</a>:</td><td valign=top>关闭 FTP 连接。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-55.php" alt="group.php?55">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-57.php" alt="group.php?57">下一页</a> 
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
