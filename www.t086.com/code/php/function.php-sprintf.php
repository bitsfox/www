<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:sprintf()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:sprintf()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">�ַ�����������</a></div><br><h1><font color=0000bb>sprintf</font></h1><p>
���ַ�����ʽ����<p>
<font color=ff8000>�﷨:</font> <b>string sprintf(string format, mixed [args]...);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������������ַ�����ʽ�������� format ��ת���ĸ�ʽ���԰ٷֱȷ��� % ��ʼ��ת���ַ�Ϊֹ������ת���ĸ�ʽ�����������<p>
<ol type=1>
<li>����ַ���0 �Ļ���ʾ�ո��� 0���ո���Ĭ��ֵ����ʾ�ո�ͷ��š�
<li>���뷽ʽ��Ĭ��ֵΪ���Ҷ��룬���ű�������롣
<li>�ֶο�ȡ�Ϊ��С��ȡ�
<li>��ȷ�ȡ�ָ��С�����ĸ�����λ����
<li>���ͣ����±�
<table border=1>
<tr><td>%</td><td>ӡ���ٷֱȷ��ţ���ת����</td></tr>
<tr><td>b</td><td>����ת�ɶ���λ��</td></tr>
<tr><td>c</td><td>����ת�ɶ�Ӧ�� ASCII �ַ���</td></tr>
<tr><td>d</td><td>����ת��ʮ��λ��</td></tr>
<tr><td>f</td><td>����ȷ������ת�ɸ�������</td></tr>
<tr><td>o</td><td>����ת�ɰ˽�λ��</td></tr>
<tr><td>s</td><td>����ת���ַ�����</td></tr>
<tr><td>x</td><td>����ת��Сдʮ����λ��</td></tr>
<tr><td>X</td><td>����ת�ɴ�дʮ����λ��</td></tr>
</table>
</ol><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$money1&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">68.75</font><font color="#007700">;<br></font><font color="#0000BB">$money2&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">54.35</font><font color="#007700">;<br></font><font color="#0000BB">$money&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$money1&nbsp;</font><font color="#007700">+&nbsp;</font><font color="#0000BB">$money2</font><font color="#007700">;<br></font><font color="#FF8000">//&nbsp;��ʱ����&nbsp;$money&nbsp;ֵΪ&nbsp;"123.1";<br></font><font color="#0000BB">$formatted&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">sprintf&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"%01.2f"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$money</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;��ʱ����&nbsp;$&nbsp;formatted&nbsp;ֵΪ&nbsp;"123.10"<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-soundex.php" alt="function.php?soundex">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-strchr.php" alt="function.php?strchr">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
