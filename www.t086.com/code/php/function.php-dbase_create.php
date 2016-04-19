<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:dbase_create()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:dbase_create()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-10.php" alt="group.php?10">dBase 格式资料表函数库</a></div><br><h1><font color=0000bb>dbase_create</font></h1><p>
建立 dBase 资料表。<p>
<font color=ff8000>语法:</font> <b>int dbase_create(string filename, array fields);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来建立新的 dBase 资料表。参数 filename 为资料表的名字及路径。参数 fields 为数组，其中定义各字段的信息，包含字段名称、字段类型、及字段长度等。下表为 fields 的值<p>

<table border=1>
<tr><th>类型</th><th>说明</th></tr>
<tr><td>L</td><td>布尔值 (Boolean)。不需定义资料长度。</td></tr>
<tr><td>M</td><td>备忘资料 (Memo)。PHP 目前不支持本类型。</td></tr>
<tr><td>D</td><td>日期 (Date)。储存格式为 YYYYMMDD。</td></tr>
<tr><td>N</td><td>数字类型 (Number)。需定义小数前后的位数。</td></tr>
<tr><td>C</td><td>字符串 (String)。需定义字符串长度。 </td></tr>
</table><p>

若无法建立则返回 false，成功则返回资料表的 ID。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
下例为建立资料表的例子<br><br><font color="#0000BB">&lt;?php<br>$dbname&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"/mypath/user.dbf"</font><font color="#007700">;<br></font><font color="#FF8000">//&nbsp;定义资料表字段<br></font><font color="#0000BB">$user&nbsp;</font><font color="#007700">=&nbsp;array(<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"name"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"C"</font><font color="#007700">,&nbsp;&nbsp;</font><font color="#0000BB">10</font><font color="#007700">),<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"age"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"N"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">3</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">),<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"address"</font><font color="#007700">,&nbsp;&nbsp;</font><font color="#DD0000">"C"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">256</font><font color="#007700">),<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"birthday"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"D"</font><font color="#007700">),<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"sex"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"L"</font><font color="#007700">)<br>);<br>if&nbsp;(!</font><font color="#0000BB">dbase_create</font><font color="#007700">(</font><font color="#0000BB">$dbname</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$user</font><font color="#007700">))<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"无法建立使用者资料表"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-dba_sync.php" alt="function.php?dba_sync">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-dbase_open.php" alt="function.php?dbase_open">下一页</a> 
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
