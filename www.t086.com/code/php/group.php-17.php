<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 文件系统函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>文件系统函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 58 个函数</div><p><table border=0 width=100%><tr><td align=right valign=top><a href="function.php-basename.php" alt="function.php?basename">basename</a>:</td><td valign=top>返回不含路径的文件字符串。</td></tr>
<tr><td align=right valign=top><a href="function.php-chgrp.php" alt="function.php?chgrp">chgrp</a>:</td><td valign=top>改变文件所属的群组。</td></tr>
<tr><td align=right valign=top><a href="function.php-chmod.php" alt="function.php?chmod">chmod</a>:</td><td valign=top>改变文件的属性。</td></tr>
<tr><td align=right valign=top><a href="function.php-chown.php" alt="function.php?chown">chown</a>:</td><td valign=top>改变文件的拥有者。</td></tr>
<tr><td align=right valign=top><a href="function.php-clearstatcache.php" alt="function.php?clearstatcache">clearstatcache</a>:</td><td valign=top>清除文件状态快取。</td></tr>
<tr><td align=right valign=top><a href="function.php-copy.php" alt="function.php?copy">copy</a>:</td><td valign=top>复制文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-delete.php" alt="function.php?delete">delete</a>:</td><td valign=top>无用的项目。</td></tr>
<tr><td align=right valign=top><a href="function.php-dirname.php" alt="function.php?dirname">dirname</a>:</td><td valign=top>取得路径中的目录名。</td></tr>
<tr><td align=right valign=top><a href="function.php-diskfreespace.php" alt="function.php?diskfreespace">diskfreespace</a>:</td><td valign=top>取得目录所在的剩余可用空间。</td></tr>
<tr><td align=right valign=top><a href="function.php-fclose.php" alt="function.php?fclose">fclose</a>:</td><td valign=top>关闭已打开的文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-feof.php" alt="function.php?feof">feof</a>:</td><td valign=top>测试文件指针是否指到档尾。</td></tr>
<tr><td align=right valign=top><a href="function.php-fgetc.php" alt="function.php?fgetc">fgetc</a>:</td><td valign=top>取得文件指针所指的字符。</td></tr>
<tr><td align=right valign=top><a href="function.php-fgetcsv.php" alt="function.php?fgetcsv">fgetcsv</a>:</td><td valign=top>取得文件指针所指行，并解析 CSV 字段。</td></tr>
<tr><td align=right valign=top><a href="function.php-fgets.php" alt="function.php?fgets">fgets</a>:</td><td valign=top>取得文件指针所指的行。</td></tr>
<tr><td align=right valign=top><a href="function.php-fgetss.php" alt="function.php?fgetss">fgetss</a>:</td><td valign=top>取得文件指针所指的行，并去掉 HTML 语言标记。</td></tr>
<tr><td align=right valign=top><a href="function.php-file.php" alt="function.php?file">file</a>:</td><td valign=top>将文件全部读入数组变量中。</td></tr>
<tr><td align=right valign=top><a href="function.php-file_exists.php" alt="function.php?file_exists">file_exists</a>:</td><td valign=top>检查文件是否存在。</td></tr>
<tr><td align=right valign=top><a href="function.php-fileatime.php" alt="function.php?fileatime">fileatime</a>:</td><td valign=top>取得文件最后的存取时间。</td></tr>
<tr><td align=right valign=top><a href="function.php-filectime.php" alt="function.php?filectime">filectime</a>:</td><td valign=top>取得文件最后的改变时间。</td></tr>
<tr><td align=right valign=top><a href="function.php-filegroup.php" alt="function.php?filegroup">filegroup</a>:</td><td valign=top>取得文件所属的群组。</td></tr>
<tr><td align=right valign=top><a href="function.php-fileinode.php" alt="function.php?fileinode">fileinode</a>:</td><td valign=top>取得文件的 inode 值。</td></tr>
<tr><td align=right valign=top><a href="function.php-filemtime.php" alt="function.php?filemtime">filemtime</a>:</td><td valign=top>取得文件最后的修改时间。</td></tr>
<tr><td align=right valign=top><a href="function.php-fileowner.php" alt="function.php?fileowner">fileowner</a>:</td><td valign=top>取得文件的拥有者。</td></tr>
<tr><td align=right valign=top><a href="function.php-fileperms.php" alt="function.php?fileperms">fileperms</a>:</td><td valign=top>取得文件的权限配置。</td></tr>
<tr><td align=right valign=top><a href="function.php-filesize.php" alt="function.php?filesize">filesize</a>:</td><td valign=top>获得文件的大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-filetype.php" alt="function.php?filetype">filetype</a>:</td><td valign=top>获得文件的类型。</td></tr>
<tr><td align=right valign=top><a href="function.php-flock.php" alt="function.php?flock">flock</a>:</td><td valign=top>锁住文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-fopen.php" alt="function.php?fopen">fopen</a>:</td><td valign=top>打开文件或者 URL。</td></tr>
<tr><td align=right valign=top><a href="function.php-fpassthru.php" alt="function.php?fpassthru">fpassthru</a>:</td><td valign=top>输出所有剩余资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-fputs.php" alt="function.php?fputs">fputs</a>:</td><td valign=top>写到文件指针。</td></tr>
<tr><td align=right valign=top><a href="function.php-fread.php" alt="function.php?fread">fread</a>:</td><td valign=top>位组的方式读取文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-fseek.php" alt="function.php?fseek">fseek</a>:</td><td valign=top>移动文件指针。</td></tr>
<tr><td align=right valign=top><a href="function.php-ftell.php" alt="function.php?ftell">ftell</a>:</td><td valign=top>取得文件读写指针位置。</td></tr>
<tr><td align=right valign=top><a href="function.php-fwrite.php" alt="function.php?fwrite">fwrite</a>:</td><td valign=top>二进位位方式写入文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-set_file_buffer.php" alt="function.php?set_file_buffer">set_file_buffer</a>:</td><td valign=top>配置文件缓冲区大小。</td></tr>
<tr><td align=right valign=top><a href="function.php-is_dir.php" alt="function.php?is_dir">is_dir</a>:</td><td valign=top>测试文件是否为目录。</td></tr>
<tr><td align=right valign=top><a href="function.php-is_executable.php" alt="function.php?is_executable">is_executable</a>:</td><td valign=top>测试文件是否为可执行档。</td></tr>
<tr><td align=right valign=top><a href="function.php-is_file.php" alt="function.php?is_file">is_file</a>:</td><td valign=top>测试文件是否为正常文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-is_link.php" alt="function.php?is_link">is_link</a>:</td><td valign=top>测试文件是否为链接档。</td></tr>
<tr><td align=right valign=top><a href="function.php-is_readable.php" alt="function.php?is_readable">is_readable</a>:</td><td valign=top>测试文件是否可读取。</td></tr>
<tr><td align=right valign=top><a href="function.php-is_writeable.php" alt="function.php?is_writeable">is_writeable</a>:</td><td valign=top>测试文件是否可写入。</td></tr>
<tr><td align=right valign=top><a href="function.php-link.php" alt="function.php?link">link</a>:</td><td valign=top>建立硬式链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-linkinfo.php" alt="function.php?linkinfo">linkinfo</a>:</td><td valign=top>取得链接信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-mkdir.php" alt="function.php?mkdir">mkdir</a>:</td><td valign=top>建立目录。</td></tr>
<tr><td align=right valign=top><a href="function.php-pclose.php" alt="function.php?pclose">pclose</a>:</td><td valign=top>关闭文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-popen.php" alt="function.php?popen">popen</a>:</td><td valign=top>打开文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-readfile.php" alt="function.php?readfile">readfile</a>:</td><td valign=top>输出文件。</td></tr>
<tr><td align=right valign=top><a href="function.php-readlink.php" alt="function.php?readlink">readlink</a>:</td><td valign=top>返回符号链接 (symbolic link) 目标档。</td></tr>
<tr><td align=right valign=top><a href="function.php-rename.php" alt="function.php?rename">rename</a>:</td><td valign=top>更改档名。</td></tr>
<tr><td align=right valign=top><a href="function.php-rewind.php" alt="function.php?rewind">rewind</a>:</td><td valign=top>重置开档的读写位置指针。</td></tr>
<tr><td align=right valign=top><a href="function.php-rmdir.php" alt="function.php?rmdir">rmdir</a>:</td><td valign=top>删除目录。</td></tr>
<tr><td align=right valign=top><a href="function.php-stat.php" alt="function.php?stat">stat</a>:</td><td valign=top>取得文件相关信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-lstat.php" alt="function.php?lstat">lstat</a>:</td><td valign=top>取得链接档相关信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-symlink.php" alt="function.php?symlink">symlink</a>:</td><td valign=top>建立符号链接 (symbolic link)。</td></tr>
<tr><td align=right valign=top><a href="function.php-tempnam.php" alt="function.php?tempnam">tempnam</a>:</td><td valign=top>建立只一的临时档。</td></tr>
<tr><td align=right valign=top><a href="function.php-touch.php" alt="function.php?touch">touch</a>:</td><td valign=top>配置最后修改时间。</td></tr>
<tr><td align=right valign=top><a href="function.php-umask.php" alt="function.php?umask">umask</a>:</td><td valign=top>改变目前的文件属性遮罩 umask。</td></tr>
<tr><td align=right valign=top><a href="function.php-unlink.php" alt="function.php?unlink">unlink</a>:</td><td valign=top>删除文件。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-16.php" alt="group.php?16">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-18.php" alt="group.php?18">下一页</a> 
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
