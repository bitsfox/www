<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:getrusage()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:getrusage()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-22.php" alt="group.php?22">PHP ѡ������Ϣ������</a></div><br><h1><font color=0000bb>getrusage</font></h1><p>
����ϵͳ��Դʹ���ʡ�<p>
<font color=ff8000>�﷨:</font> <b>array getrusage(int [who]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> PHP ϵͳ����<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������ʹ�� UNIX ��ϵͳ���� getrusage(2)�����ص���Ϣ������ķ�ʽ���ء������� who Ϊ 1������������� RUSAGE_CHILDREN������һ������Ϣ���Բο� UNIX �����ⷽ����ļ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$dat&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">getrusage</font><font color="#007700">();<br>echo&nbsp;</font><font color="#0000BB">$dat</font><font color="#007700">[</font><font color="#DD0000">"ru_nswap"</font><font color="#007700">];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;Swaps&nbsp;��<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$dat</font><font color="#007700">[</font><font color="#DD0000">"ru_majflt"</font><font color="#007700">];&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��ҳ��<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$dat</font><font color="#007700">[</font><font color="#DD0000">"ru_utime.tv_sec"</font><font color="#007700">];&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;ʹ��ʱ��&nbsp;(��)<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$dat</font><font color="#007700">[</font><font color="#DD0000">"ru_utime.tv_usec"</font><font color="#007700">];&nbsp;</font><font color="#FF8000">//&nbsp;ʹ��ʱ��&nbsp;(����)<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-getmyuid.php" alt="function.php?getmyuid">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-phpinfo.php" alt="function.php?phpinfo">��һҳ</a> 
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
