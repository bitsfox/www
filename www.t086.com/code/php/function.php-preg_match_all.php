<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:preg_match_all()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:preg_match_all()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-40.php" alt="group.php?40">Perl �����﷨������</a></div><br><h1><font color=0000bb>preg_match_all</font></h1><p>
�ַ�������ȶԽ�����<p>
<font color=ff8000>�﷨:</font> <b>int preg_match_all(string pattern, string subject, array matches, int [order]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������� pattern �Ĺ�������������ȶ��ַ��� subject���ȶԽ�����ص�ֵ����������� matches ֮�У�����˳��ֵ order ���򡣲��� order ��ֵ�� PREG_PATTERN_ORDER �� PREG_SET_ORDER ���֡���û�� order ֵ����ϵͳ�Զ��� PREG_PATTERN_ORDER ���� order ֵ�С�����ֵΪ�Ϻ��ȶԽ������Ŀ����û�л�����򷵻� false ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
PREG_PATTERN_ORDER&nbsp;������<br><br><font color="#0000BB">&lt;?php<br>preg_match_all</font><font color="#007700">(</font><font color="#DD0000">"|&lt;[^&gt;]+&gt;(.*)&lt;/[^&gt;]+&gt;|U"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"&lt;div&nbsp;align=left&gt;a&nbsp;test&lt;/div&gt;"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">,&nbsp;</font><font color="#0000BB">PREG_PATTERN_ORDER</font><font color="#007700">);<br>print&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">",&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>print&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">",&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"\n"<br></font><font color="#0000BB">?&gt;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>����ֵΪ<br><br>&lt;b&gt;example:&nbsp;&lt;/b&gt;,&nbsp;&lt;div&nbsp;align=left&gt;this&nbsp;is&nbsp;a&nbsp;test&lt;/div&gt;<br>example:&nbsp;,&nbsp;this&nbsp;is&nbsp;a&nbsp;test<br><br><br><br><br>PREG_SET_ORDER&nbsp;������<br><br><font color="#0000BB">&lt;?php<br>preg_match_all</font><font color="#007700">(</font><font color="#DD0000">"|&lt;[^&gt;]+&gt;(.*)&lt;/[^&gt;]+&gt;|U"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"&lt;div&nbsp;align=left&gt;a&nbsp;test&lt;/div&gt;"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">,&nbsp;</font><font color="#0000BB">PREG_SET_ORDER</font><font color="#007700">);<br>print&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">",&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>print&nbsp;</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">",&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$out</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"\n"<br></font><font color="#0000BB">?&gt;<br></font><br>����ֵΪ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>&lt;b&gt;example:&nbsp;&lt;/b&gt;,&nbsp;example:&nbsp;<br>&lt;div&nbsp;align=left&gt;this&nbsp;is&nbsp;a&nbsp;test&lt;/div&gt;,&nbsp;this&nbsp;is&nbsp;a&nbsp;test</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-preg_match.php" alt="function.php?preg_match">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-preg_replace.php" alt="function.php?preg_replace">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
