<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - dbm 类数据库函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>dbm 类数据库函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 10 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>dbm 为柏克莱大学所发展的文件型数据库。欲使用本函数可能需要先安装相关的 DBM 函数馆，当然在 BSD 系列的操作系统中已经装好的就不用自行动手了。<p>

dbm 在资料存取没有很复杂的字段，它只有单纯的键/值 (key/value) 的字段。<p>

下例为简单的 dbm 使用范例<p>

<font color="#000000">
<font color="#0000BB">&lt;?<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">do_stuff</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;略去复杂的资料处理流程<br></font><font color="#007700">}<br></font><font color="#0000BB">$dbm&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">dbmopen</font><font color="#007700">(</font><font color="#DD0000">"lastseen"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br>if&nbsp;(</font><font color="#0000BB">dbmexists</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$last_seen&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">dbmfetch</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">);<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">dbminsert</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">time</font><font color="#007700">());<br>}<br></font><font color="#0000BB">do_stuff</font><font color="#007700">();<br></font><font color="#0000BB">dbmreplace</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">time</font><font color="#007700">());<br></font><font color="#0000BB">dbmclose</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-dbmopen.php" alt="function.php?dbmopen">dbmopen</a>:</td><td valign=top>打开 DBM 数据库链接。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmclose.php" alt="function.php?dbmclose">dbmclose</a>:</td><td valign=top>关闭 DBM 数据库。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmexists.php" alt="function.php?dbmexists">dbmexists</a>:</td><td valign=top>检查键是否存在。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmfetch.php" alt="function.php?dbmfetch">dbmfetch</a>:</td><td valign=top>取回指定资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbminsert.php" alt="function.php?dbminsert">dbminsert</a>:</td><td valign=top>加入资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmreplace.php" alt="function.php?dbmreplace">dbmreplace</a>:</td><td valign=top>改动或加入资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmdelete.php" alt="function.php?dbmdelete">dbmdelete</a>:</td><td valign=top>删除指定资料。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmfirstkey.php" alt="function.php?dbmfirstkey">dbmfirstkey</a>:</td><td valign=top>取回首笔键名。</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmnextkey.php" alt="function.php?dbmnextkey">dbmnextkey</a>:</td><td valign=top>取回下笔键值。</td></tr>
<tr><td align=right valign=top><a href="function.php-dblist.php" alt="function.php?dblist">dblist</a>:</td><td valign=top>取得 DBM 的信息。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-10.php" alt="group.php?10">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-12.php" alt="group.php?12">下一页</a> 
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
