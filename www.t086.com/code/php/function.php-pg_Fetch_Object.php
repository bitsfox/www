<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:pg_Fetch_Object()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:pg_Fetch_Object()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-42.php" alt="group.php?42">PostgreSQL 数据库函数库</a></div><br><h1><font color=0000bb>pg_Fetch_Object</font></h1><p>
返回类资料。<p>
<font color=ff8000>语法:</font> <b>object pg_fetch_object(int result, int row);</b><p>
<font color=ff8000>返回值:</font> 类<p>
<font color=ff8000>函数种类:</font> 数据库功能<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来将查询结果 result 拆到类变量中。若 result 没有资料，则返回 false 值。参数 result 为使用 <a href="function.php-pg_Exec.php" alt="function.php?pg_Exec">pg_Exec()</a> 所返回的代码值。参数 row 为列数。<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>使用范例</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$database&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"verlag"</font><font color="#007700">;<br></font><font color="#0000BB">$db_conn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_connect</font><font color="#007700">(</font><font color="#DD0000">"localhost"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"5432"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$database</font><font color="#007700">);<br>if&nbsp;(!</font><font color="#0000BB">$db_conn</font><font color="#007700">):&nbsp;</font><font color="#0000BB">?&gt;<br></font>&nbsp;&nbsp;&lt;b&gt;无法连上&nbsp;<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$database&nbsp;?&gt;</font>&nbsp;数据库&lt;/b&gt;<font color="#0000BB">&lt;?php<br>&nbsp;&nbsp;</font><font color="#007700">exit;<br>endif;<br><br></font><font color="#0000BB">$qu&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_exec&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$db_conn</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;verlag&nbsp;ORDER&nbsp;BY&nbsp;autor"</font><font color="#007700">);<br></font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br><br>while&nbsp;(</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_fetch_object&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$qu</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">)):<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$data</font><font color="#007700">-&gt;</font><font color="#0000BB">autor</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;("</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$data</font><font color="#007700">-&gt;</font><font color="#0000BB">jahr&nbsp;</font><font color="#007700">.</font><font color="#DD0000">"):&nbsp;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$data</font><font color="#007700">-&gt;</font><font color="#0000BB">titel</font><font color="#007700">.</font><font color="#DD0000">"&lt;BR&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">++;<br>endwhile;&nbsp;</font><font color="#0000BB">?&gt;<br></font><br>&lt;pre&gt;<font color="#0000BB">&lt;?php<br>$fields</font><font color="#007700">[]&nbsp;=&nbsp;Array(</font><font color="#DD0000">"autor"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Author"</font><font color="#007700">);<br></font><font color="#0000BB">$fields</font><font color="#007700">[]&nbsp;=&nbsp;Array(</font><font color="#DD0000">"jahr"</font><font color="#007700">,&nbsp;&nbsp;</font><font color="#DD0000">"&nbsp;&nbsp;Year"</font><font color="#007700">);<br></font><font color="#0000BB">$fields</font><font color="#007700">[]&nbsp;=&nbsp;Array(</font><font color="#DD0000">"titel"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"&nbsp;Title"</font><font color="#007700">);<br></font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_fetch_object</font><font color="#007700">(</font><font color="#0000BB">$qu</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">)):<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;hr&gt;&lt;p&gt;\n"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">reset&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$fields</font><font color="#007700">);<br>&nbsp;&nbsp;while&nbsp;(list&nbsp;(,</font><font color="#0000BB">$item</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$fields</font><font color="#007700">)):<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$item</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">":&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$data</font><font color="#007700">-&gt;</font><font color="#0000BB">$item</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>&nbsp;&nbsp;endwhile;<br>&nbsp;&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">++;<br>endwhile;<br>echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;&lt;hr&gt;"</font><font color="#007700">;&nbsp;</font><font color="#0000BB">?&gt;<br></font>&lt;/pre&gt;<font color="#0000BB">&lt;?php<br>pg_freeResult</font><font color="#007700">(</font><font color="#0000BB">$qu</font><font color="#007700">);<br></font><font color="#0000BB">pg_close</font><font color="#007700">(</font><font color="#0000BB">$db_conn</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-pg_Fetch_Array.php" alt="function.php?pg_Fetch_Array">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-pg_Fetch_Row.php" alt="function.php?pg_Fetch_Row">下一页</a>  ]</td></tr></table>
</div><p><br><br>
 
</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
