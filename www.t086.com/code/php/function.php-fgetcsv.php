<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:fgetcsv()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:fgetcsv()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">�ļ�ϵͳ������</a></div><br><h1><font color=0000bb>fgetcsv</font></h1><p>
ȡ���ļ�ָ����ָ�У������� CSV �ֶΡ�<p>
<font color=ff8000>�﷨:</font> <b>array fgetcsv(int fp, int length, string [delimiter]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> �ļ���ȡ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������� fgets() �Ĺ������ƣ���ͬ�ĵط����ڱ���������������ȡ�е� CSV �ֶ����ϣ�����������������֮�С����еĵ��������� delimiter ��δָ������ʹ���ڶ�ֵ�����š����е��ļ�ָ�� fp ��������Ч�ģ��ұ������Ѿ��� <a href="function.php-fopen.php" alt="function.php?fopen">fopen()</a>��<a href="function.php-popen.php" alt="function.php?popen">popen()</a> �� <a href="function.php-fsockopen.php" alt="function.php?fsockopen">fsockopen()</a> �ɹ����ļ���ָ�롣���ڶ������� length ��ֵ����Ҫ�� CSV �ļ��һ�е��ַ������󡣱�����������������ߵ��ļ�β (EOF, end of file)����᷵�� false ֵ�����������У��򴫵�����ṹ���ַ�Ϊ���ַ��ֶ� (null)�������ǵ���������������Ρ�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$row</font><font color="#007700">=</font><font color="#0000BB">1</font><font color="#007700">;<br></font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"mycsv.csv"</font><font color="#007700">,</font><font color="#DD0000">"r"</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fgetcsv</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#0000BB">1000</font><font color="#007700">,&nbsp;</font><font color="#DD0000">","</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$data</font><font color="#007700">);<br>&nbsp;&nbsp;print&nbsp;</font><font color="#DD0000">"&lt;p&gt;�ֶ�&nbsp;$num&nbsp;�ڵ�&nbsp;$row&nbsp;��:&nbsp;&lt;br&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">++;<br>&nbsp;&nbsp;for&nbsp;(&nbsp;</font><font color="#0000BB">$c</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$c</font><font color="#007700">&lt;</font><font color="#0000BB">$num</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$c</font><font color="#007700">++&nbsp;)&nbsp;print&nbsp;</font><font color="#0000BB">$data</font><font color="#007700">[</font><font color="#0000BB">$c</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-fgetc.php" alt="function.php?fgetc">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-fgets.php" alt="function.php?fgets">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
