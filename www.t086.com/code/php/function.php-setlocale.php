<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:setlocale()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:setlocale()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">�ַ�����������</a></div><br><h1><font color=0000bb>setlocale</font></h1><p>
���õ�����Ϣ��<p>
<font color=ff8000>�﷨:</font> <b>string setlocale(string category, string locale);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ����ϵͳ�뻷��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������������õ������Ϣ������ category �����е�ѡ��<p>
<ul type=disc>
<li>LC_ALL ���������ȫ��ѡ�Ҫ��
<li>LC_COLLATE �����ַ����Ƚϣ�PHP Ŀǰ��δʵ���������
<li>LC_CTYPE �����ַ����ת��������ȫ���д <a href="function.php-strtoupper.php" alt="function.php?strtoupper">strtoupper()</a>��
<li>LC_MONETARY ���ý��ڻ��ң�PHP Ŀǰ��δʵ����
<li>LC_NUMERIC ����С������λ����
<li>LC_TIME ����ʱ�����ڸ�ʽ���� <a href="function.php-strftime.php" alt="function.php?strftime">strftime()</a> ���á�
</ul><p>
������ locate ���ǿ��ַ��� ""�����ʹ��ϵͳ���������� locate ���� LANG ��ֵ���� locate Ϊ�㣬�򲻻�ı�������á������µĵ�����ϵͳ��δʵ���򷵻� false��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
Michal&nbsp;Fita&nbsp;&lt;manveru@witrynka.pl&gt;&nbsp;��&nbsp;11-Jan-1999&nbsp;11:01&nbsp;�������Բ��������򻯵����ӡ�<br><br><font color="#0000BB">&lt;?<br>setlocale</font><font color="#007700">(</font><font color="#DD0000">"LC_ALL"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"pl"</font><font color="#007700">);<br></font><font color="#0000BB">$net&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"1234,56"</font><font color="#007700">;<br></font><font color="#0000BB">$gross&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"1,22"&nbsp;</font><font color="#007700">*&nbsp;</font><font color="#0000BB">$net</font><font color="#007700">;<br></font><font color="#0000BB">printf</font><font color="#007700">(</font><font color="#DD0000">"ë��:&nbsp;%s,&nbsp;����:&nbsp;%s"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$gross</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$net</font><font color="#DD0000">");<br>/*&nbsp;������?/font><font color="#007700">[</font><font color="#DD0000">ֵ˰Ϊ&nbsp;22%&nbsp;*/<br>?&gt;<br><br>����ֵ��Ϊ<br>ë��:&nbsp;1234,56,&nbsp;����:&nbsp;1506,1632</font>
</font>
<p><hr size=1><br><p>
</font></td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-rawurlencode.php" alt="function.php?rawurlencode">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-similar_text.php" alt="function.php?similar_text">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
