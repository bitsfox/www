<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:dir()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:dir()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-12.php" alt="group.php?12">Ŀ¼��������</a></div><br><h1><font color=0000bb>dir</font></h1><p>
Ŀ¼����ࡣ<p>
<font color=ff8000>�﷨:</font> <b>new dir(string directory);</b><p>
<font color=ff8000>����ֵ:</font> ��<p>
<font color=ff8000>��������:</font> �ļ���ȡ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����һ������������������࣬������ȡĿ¼����Ŀ¼���� directory ��֮���ж������Կ��ã�handle ���Ծ�����������ĺ������õ� readdir()��rewinddir() �� closedir()��path ���������ô�Ŀ¼���·���������������������� (method)��read��rewind �� close��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$d&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">dir</font><font color="#007700">(</font><font color="#DD0000">"/etc"</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"Handle:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$d</font><font color="#007700">-&gt;</font><font color="#0000BB">handle</font><font color="#007700">.</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"Path:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$d</font><font color="#007700">-&gt;</font><font color="#0000BB">path</font><font color="#007700">.</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>while(</font><font color="#0000BB">$entry</font><font color="#007700">=</font><font color="#0000BB">$d</font><font color="#007700">-&gt;</font><font color="#0000BB">read</font><font color="#007700">())&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$entry</font><font color="#007700">.</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">$d</font><font color="#007700">-&gt;</font><font color="#0000BB">close</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-chdir.php" alt="function.php?chdir">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-closedir.php" alt="function.php?closedir">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
