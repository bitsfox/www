<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:gztell()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:gztell()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-52.php" alt="group.php?52">ѹ���ļ�������</a></div><br><h1><font color=0000bb>gztell</font></h1><p>
ȡ��ѹ���ļ�ָ�봦��<p>
<font color=ff8000>�﷨:</font> <b>int gztell(int zp);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> �����ļ���ʽ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������ȡ��ѹ���ļ����ļ�����ָ����ĳλ�������� zp Ϊ���ļ����롣<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$exfile</font><font color="#007700">=</font><font color="#0000BB">gzopen</font><font color="#007700">(</font><font color="#DD0000">"/tmp/haha.gz"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">$aline</font><font color="#007700">=</font><font color="#0000BB">gzgets</font><font color="#007700">(</font><font color="#0000BB">$exfile</font><font color="#007700">,&nbsp;</font><font color="#0000BB">80</font><font color="#007700">);<br>print(</font><font color="#DD0000">"�����ļ�ָ���ڵ�"</font><font color="#007700">.</font><font color="#0000BB">gztell</font><font color="#007700">(</font><font color="#0000BB">$exfile</font><font color="#007700">).</font><font color="#DD0000">"��λ"</font><font color="#007700">);<br></font><font color="#0000BB">gzclose</font><font color="#007700">(</font><font color="#0000BB">$exfile</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-gzseek.php" alt="function.php?gzseek">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-readgzfile.php" alt="function.php?readgzfile">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>