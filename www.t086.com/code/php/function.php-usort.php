<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:usort()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:usort()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">���鴦��������</a></div><br><h1><font color=0000bb>usort</font></h1><p>
�������ֵ���û��Զ��ĺ�������<p>
<font color=ff8000>�﷨:</font> <b>void usort(array array, function cmp_function);</b><p>
<font color=ff8000>����ֵ:</font> ��<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������������ֵ���û��Զ��ķ�ʽ���š�����������Ҫʹ�����������ʽ�������ʹ�����������<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">cmp</font><font color="#007700">(</font><font color="#0000BB">$a</font><font color="#007700">,</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">==&nbsp;</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;return&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">&gt;&nbsp;</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;?&nbsp;-</font><font color="#0000BB">1&nbsp;</font><font color="#007700">:&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>}<br></font><font color="#0000BB">$a&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#0000BB">3</font><font color="#007700">,</font><font color="#0000BB">2</font><font color="#007700">,</font><font color="#0000BB">5</font><font color="#007700">,</font><font color="#0000BB">6</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">usort</font><font color="#007700">(</font><font color="#0000BB">$a</font><font color="#007700">,&nbsp;</font><font color="#0000BB">cmp</font><font color="#007700">);<br>while(list(</font><font color="#0000BB">$key</font><font color="#007700">,</font><font color="#0000BB">$value</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$a</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$key:&nbsp;$value</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font><br>�����ķ���ֵΪ<br>0:&nbsp;6<br>1:&nbsp;5<br>2:&nbsp;3<br>3:&nbsp;2<br>4:&nbsp;1</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-arsort.php" alt="function.php?arsort">arsort()</a> &nbsp;<a href="function.php-asort.php" alt="function.php?asort">asort()</a> &nbsp;<a href="function.php-ksort.php" alt="function.php?ksort">ksort()</a> &nbsp;<a href="function.php-rsort.php" alt="function.php?rsort">rsort()</a> &nbsp;<a href="function.php-sort.php" alt="function.php?sort">sort()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-uksort.php" alt="function.php?uksort">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-aspell_new.php" alt="function.php?aspell_new">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>