<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:strftime()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:strftime()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-8.php" alt="group.php?8">������ʱ�亯����</a></div><br><h1><font color=0000bb>strftime</font></h1><p>
����������ʱ�䱾�ظ�ʽ����<p>
<font color=ff8000>�﷨:</font> <b>string strftime(string format, int [timestamp]);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ʱ������<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����ֵ���ַ��������õĸ�ʽ�����������д���ʱ�����ֵ����ʱ����Ǹ�ʽ�����أ����޴���ʱ�����ֵ����Ŀǰ��������ʱ�䱾�ظ�ʽ�����ء��·ݻ��������������ű�����ϵ���� <a href="function.php-setlocale.php" alt="function.php?setlocale">setlocale()</a> �Ĳ�ͬ���ı䡣<p>
���ص��ַ������������еĸ�ʽ������<p>
<ul type=disc>
<li>%a  ���ڼ�����д��
<li>%A  ���ڼ���ȫ����
<li>%b  �·����Ƶ���д��
<li>%B  �·����Ƶ�ȫ����
<li>%c  ���ض�����ʱ��ϼѱ�ʾ�ַ�����
<li>%d  �����ֱ�ʾ���µĵڼ��� (��ΧΪ 00 �� 31)��
<li>%H  �� 24 Сʱ�����ֱ�ʾСʱ�� (��ΧΪ 00 �� 23)��
<li>%I  �� 12 Сʱ�����ֱ�ʾСʱ�� (��ΧΪ 01 �� 12)��
<li>%j  �����ֱ�ʾ����ȵĵڼ��� (��ΧΪ 001 �� 366)��
<li>%m  �·ݵ����� (��Χ�� 1 �� 12)��
<li>%M  ���ӡ�
<li>%p  �� 'AM' �� 'PM' ��ʾ���ض�ʱ�䡣
<li>%S  ������
<li>%U  ���ֱ�ʾΪ����ȵĵڼ��ܣ���һ�������ɵ�һ�����տ�ʼ��
<li>%W  ���ֱ�ʾΪ����ȵĵڼ��ܣ���һ�������ɵ�һ����һ��ʼ��
<li>%w  �����ֱ�ʾ���ܵĵڼ��� ( 0 Ϊ����)��
<li>%x  ����ʱ������ڱ�ʾ����
<li>%X  �������ڵ�ʱ���ʾ����
<li>%y  ��λ���ֱ�ʾ��� (��Χ�� 00 �� 99)��
<li>%Y  ������������ֱ�ʾ������λ����
<li>%Z  ʱ����������д��
<li>%%  % �ַ���
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>setlocale&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"LC_TIME"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"C"</font><font color="#007700">);<br>print(</font><font color="#0000BB">strftime</font><font color="#007700">(</font><font color="#DD0000">"%A&nbsp;in&nbsp;Finnish&nbsp;is&nbsp;"</font><font color="#007700">));<br></font><font color="#0000BB">setlocale&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"LC_TIME"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"fi"</font><font color="#007700">);<br>print(</font><font color="#0000BB">strftime</font><font color="#007700">(</font><font color="#DD0000">"%A,&nbsp;in&nbsp;French&nbsp;"</font><font color="#007700">));<br></font><font color="#0000BB">setlocale&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"LC_TIME"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"fr"</font><font color="#007700">);<br>print(</font><font color="#0000BB">strftime</font><font color="#007700">(</font><font color="#DD0000">"%A&nbsp;and&nbsp;in&nbsp;German&nbsp;"</font><font color="#007700">));<br></font><font color="#0000BB">setlocale&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"LC_TIME"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"de"</font><font color="#007700">);<br>print(</font><font color="#0000BB">strftime</font><font color="#007700">(</font><font color="#DD0000">"%A.\n"</font><font color="#007700">));<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-setlocale.php" alt="function.php?setlocale">setlocale()</a> &nbsp;<a href="function.php-mktime.php" alt="function.php?mktime">mktime()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-date.php" alt="function.php?date">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-getdate.php" alt="function.php?getdate">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
