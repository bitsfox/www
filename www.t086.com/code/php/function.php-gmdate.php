<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:gmdate()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:gmdate()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-8.php" alt="group.php?8">������ʱ�亯����</a></div><br><h1><font color=0000bb>gmdate</font></h1><p>
ȡ��Ŀǰ�� GMT ����ʱ�䡣<p>
<font color=ff8000>�﷨:</font> <b>string gmdate(string format, int timestamp);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ʱ������<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������� <a href="function.php-date.php" alt="function.php?date">date()</a> �������ƣ���ͬ���Ǳ�����������������α�׼ʱ�� (Greenwich Mean Time, GMT) ʱ�����ʱ�䡣<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(&nbsp;</font><font color="#DD0000">"M&nbsp;d&nbsp;Y&nbsp;H:i:s"</font><font color="#007700">,</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">1998</font><font color="#007700">)&nbsp;);<br>echo&nbsp;</font><font color="#0000BB">gmdate</font><font color="#007700">(&nbsp;</font><font color="#DD0000">"M&nbsp;d&nbsp;Y&nbsp;H:i:s"</font><font color="#007700">,</font><font color="#0000BB">mktime</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">1998</font><font color="#007700">)&nbsp;);<br></font><font color="#0000BB">?&gt;<br></font><br>��ִ�б������Ļ����ڷ���&nbsp;(Finland,&nbsp;GMT&nbsp;+0200)�����صĽ��Ϊ:<br>Jan&nbsp;01&nbsp;1998&nbsp;00:00:00<br>Dec&nbsp;31&nbsp;1997&nbsp;22:00:00<br></font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-date.php" alt="function.php?date">date()</a> &nbsp;<a href="function.php-mktime.php" alt="function.php?mktime">mktime()</a> &nbsp;<a href="function.php-gmmktime.php" alt="function.php?gmmktime">gmmktime()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-gettimeofday.php" alt="function.php?gettimeofday">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-easter_date.php" alt="function.php?easter_date">��һҳ</a> 
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
