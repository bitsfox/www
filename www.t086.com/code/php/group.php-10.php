<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - dBase 格式资料表函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>dBase 格式资料表函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 9 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>本函数库可供 Web 服务器存取 dBase 的 dbf 资料表。目前本函数库无法存取 dBase 中的 indexes 或 memo 的字段，亦无法将资料表锁上。在使用上特别需要小心使用，因为它不是真正的数据库系统，仅是储存资料的资料表而已，二个以上的用户同时存取同一个资料表时甚至可能会发生 dbf 资料表崩毁的情形。如果可能话，最好是用真正的数据库系统，如 MySQL 或 Oracle 等，就不会有多人使用时导至资料损毁的困扰。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-dbase_create.php" alt="function.php?dbase_create">dbase_create</a>:</td><td valign=top>建立 dBase 资料表。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbase_open.php" alt="function.php?dbase_open">dbase_open</a>:</td><td valign=top>打开 dBase 资料表。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbase_close.php" alt="function.php?dbase_close">dbase_close</a>:</td><td valign=top>关闭 dBase 资料表。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbase_pack.php" alt="function.php?dbase_pack">dbase_pack</a>:</td><td valign=top>清理 dBase 资料表。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbase_add_record.php" alt="function.php?dbase_add_record">dbase_add_record</a>:</td><td valign=top>加入资料到 dBase 资料表。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbase_delete_record.php" alt="function.php?dbase_delete_record">dbase_delete_record</a>:</td><td valign=top>删除 dBase 资料表的资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbase_get_record.php" alt="function.php?dbase_get_record">dbase_get_record</a>:</td><td valign=top>取得 dBase 资料表的资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbase_numfields.php" alt="function.php?dbase_numfields">dbase_numfields</a>:</td><td valign=top>取得 dBase 资料表的字段数。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbase_numrecords.php" alt="function.php?dbase_numrecords">dbase_numrecords</a>:</td><td valign=top>取得 dBase 资料表的列数。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-9.php" alt="group.php?9">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-11.php" alt="group.php?11">下一页</a> 
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
