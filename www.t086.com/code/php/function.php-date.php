<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:date()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:date()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-8.php" alt="group.php?8">������ʱ�亯����</a></div><br><h1><font color=0000bb>date</font></h1><p>
����������ʱ���ʽ����<p>
<font color=ff8000>�﷨:</font> <b>string date(string format, int [timestamp]);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ʱ������<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����ֵ�����ַ��������õĸ�ʽ�����������д���ʱ�����ֵ����ʱ����Ǹ�ʽ�����أ����޴���ʱ�����ֵ����Ŀǰ��������ʱ���ʽ�����ء�Ҫ������תΪ��������ϵ��ʽ��Ӧʹ��<a href="function.php-setlocale.php" alt="function.php?setlocale">setlocale()</a> �� <a href="function.php-strftime.php" alt="function.php?strftime">strftime()</a> �����������ַ�����ʽ����ѡ�����£�<p>
<ul type=disc>
<li>a - "am" ���� "pm"
<li>A - "AM" ���� "PM"
<li>d - ���գ���λ���֣��������λ��ǰ�油��; ��:  "01" �� "31"
<li>D - ���ڼ�������Ӣ����ĸ; ��: "Fri"
<li>F - �·ݣ�Ӣ��ȫ��; ��: "January"
<li>h - 12 Сʱ�Ƶ�Сʱ; ��: "01" �� "12"
<li>H - 24 Сʱ�Ƶ�Сʱ; ��: "00" �� "23"
<li>g - 12 Сʱ�Ƶ�Сʱ�������λ������; ��: "1" �� 12"
<li>G - 24 Сʱ�Ƶ�Сʱ�������λ������; ��: "0" �� "23"
<li>i - ����; ��: "00" �� "59"
<li>j - ���գ���λ���֣��������λ������; ��: "1" �� "31"
<li>l - ���ڼ���Ӣ��ȫ��; ��: "Friday"
<li>m - �·ݣ���λ���֣��������λ����ǰ�油��; ��: "01" �� "12"
<li>n - �·ݣ���λ���֣��������λ�򲻲���; ��: "1" �� "12"
<li>M - �·ݣ�����Ӣ����ĸ; ��: "Jan"
<li>s - ��; ��: "00" �� "59"
<li>S - ��β��Ӣ������������Ӣ����ĸ; ��: "th"��"nd"
<li>t - ָ���·ݵ�����; ��: "28" �� "31"
<li>U - ������
<li>w - �����͵����ڼ�����: "0" (������) �� "6" (������)
<li>Y - �꣬��λ����; ��: "1999"
<li>y - �꣬��λ����; ��: "99"
<li>z - һ���еĵڼ���; ��: "0" �� "365"
</ul><p>
�����������е��ַ���ֱ���г����ַ���
<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����һ:<br><font color="#0000BB">&lt;?<br></font><font color="#007700">print(</font><font color="#0000BB">date</font><font color="#007700">(&nbsp;</font><font color="#DD0000">"l&nbsp;dS&nbsp;of&nbsp;F&nbsp;Y&nbsp;h:i:s&nbsp;A"&nbsp;</font><font color="#007700">));<br>print(</font><font color="#DD0000">"July&nbsp;1,&nbsp;2000&nbsp;is&nbsp;on&nbsp;a&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"l"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">7</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">2000</font><font color="#007700">)));<br></font><font color="#0000BB">?&gt;<br></font><br>������:<br><font color="#0000BB">&lt;?<br>$tomorrow&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"m"</font><font color="#007700">)&nbsp;&nbsp;,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"d"</font><font color="#007700">)+</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"Y"</font><font color="#007700">));<br></font><font color="#0000BB">$lastmonth&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"m"</font><font color="#007700">)-</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"d"</font><font color="#007700">),&nbsp;&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"Y"</font><font color="#007700">));<br></font><font color="#0000BB">$nextyear&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"m"</font><font color="#007700">),&nbsp;&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"d"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"Y"</font><font color="#007700">)+</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-gmdate.php" alt="function.php?gmdate">gmdate()</a> &nbsp;<a href="function.php-mktime.php" alt="function.php?mktime">mktime()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-checkdate.php" alt="function.php?checkdate">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-strftime.php" alt="function.php?strftime">��һҳ</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
