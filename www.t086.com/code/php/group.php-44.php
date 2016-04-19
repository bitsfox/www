<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 信号与共享内存函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>信号与共享内存函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 9 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>本函数库提供 System V 的信号处理机制。这个机制可以让系统限制同时使用行程所存取的资源。本函数库亦提供了内存共享的机制，可让不同的程序存取相同的变量，方便交换程序信息。<p>

下表为系统的共享内存的限制值<p>

<table border=1>
<tr><td>SHMMAX</td><td>共享内存的最大值，一般为 131072 bytes</td></tr>
<tr><td>SHMMIN</td><td>共享内存的最小值，一般为 1 byte</td></tr>
<tr><td>SHMMNI</td><td>内存共享部分的最大值，一般为 100</td></tr>
<tr><td>SHMSEG</td><td>每个行程所能共享的最大内存空间，一般为 6</td></tr>
</table>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-sem_get.php" alt="function.php?sem_get">sem_get</a>:</td><td valign=top>取得信号代码。</td></tr>
<tr><td align=right valign=top><a href="function.php-sem_acquire.php" alt="function.php?sem_acquire">sem_acquire</a>:</td><td valign=top>捕获信号。</td></tr>
<tr><td align=right valign=top><a href="function.php-sem_release.php" alt="function.php?sem_release">sem_release</a>:</td><td valign=top>释出信号。</td></tr>
<tr><td align=right valign=top><a href="function.php-shm_attach.php" alt="function.php?shm_attach">shm_attach</a>:</td><td valign=top>打开建立共享内存空间。</td></tr>
<tr><td align=right valign=top><a href="function.php-shm_detach.php" alt="function.php?shm_detach">shm_detach</a>:</td><td valign=top>中止共享内存空间链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-shm_remove.php" alt="function.php?shm_remove">shm_remove</a>:</td><td valign=top>清除内存空间。</td></tr>
<tr><td align=right valign=top><a href="function.php-shm_put_var.php" alt="function.php?shm_put_var">shm_put_var</a>:</td><td valign=top>加入或更新内存空间中的变量。</td></tr>
<tr><td align=right valign=top><a href="function.php-shm_get_var.php" alt="function.php?shm_get_var">shm_get_var</a>:</td><td valign=top>取得内存空间中指定的变量。</td></tr>
<tr><td align=right valign=top><a href="function.php-shm_remove_var.php" alt="function.php?shm_remove_var">shm_remove_var</a>:</td><td valign=top>删除内存空间中指定的变量。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-43.php" alt="group.php?43">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-45.php" alt="group.php?45">下一页</a> 
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
