<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:gzread()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:gzread()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-52.php" alt="group.php?52">ѹ���ļ�������</a></div><br><h1><font color=0000bb>gzread</font></h1><p>
ѹ���ļ�����ָ�������ַ�����<p>
<font color=ff8000>�﷨:</font> <b>string gzread(int zp, int length);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> �����ļ���ʽ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������������ȡָ�����ȵ��ַ��������� gz Ϊ���ļ��Ĵ��롣���� length Ϊָ�����ȡ�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$filename&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"/temp/sosofile.txt.gz"</font><font color="#007700">;<br></font><font color="#0000BB">$zd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">gzopen</font><font color="#007700">(</font><font color="#0000BB">$filename</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">$contents&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">gzread</font><font color="#007700">(</font><font color="#0000BB">$zd</font><font color="#007700">,&nbsp;</font><font color="#0000BB">10000</font><font color="#007700">);<br></font><font color="#0000BB">gzclose</font><font color="#007700">(</font><font color="#0000BB">$zd</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-gzputs.php" alt="function.php?gzputs">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-gzrewind.php" alt="function.php?gzrewind">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
