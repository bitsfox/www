<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:parse_str()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:parse_str()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">�ַ�����������</a></div><br><h1><font color=0000bb>parse_str</font></h1><p>
���� query �ַ����ɱ�����<p>
<font color=ff8000>�﷨:</font> <b>void parse_str(string str);</b><p>
<font color=ff8000>����ֵ:</font> ��<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������ɽ���������ص� GET ������ QUERY_STRING �ַ������������صı�������ֵ���� QUERY_STRING �����Ƽ�ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$str&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"first=value&amp;second[]=this+works&amp;second[]=another"</font><font color="#007700">;<br></font><font color="#0000BB">parse_str</font><font color="#007700">(</font><font color="#0000BB">$str</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$first</font><font color="#007700">;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��ʾ��&nbsp;"value"&nbsp;�ַ���<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$second</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��ʾ&nbsp;"this&nbsp;works"&nbsp;�ַ���<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$second</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">];&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��ʾ&nbsp;"another"&nbsp;�ַ���<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-Ord.php" alt="function.php?Ord">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-print.php" alt="function.php?print">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
