<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:yp_get_default_domain()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:yp_get_default_domain()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-36.php" alt="group.php?36">NIS ������</a></div><br><h1><font color=0000bb>yp_get_default_domain</font></h1><p>
ȡ�û����� Domain��<p>
<font color=ff8000>�﷨:</font> <b>string yp_get_default_domain(void);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������Ѱ�ҷ��������������� Domain��ִ�гɹ��򷵻� Domain �ַ�����ʧ���򷵻� false��������ִ��ʱ����Ҫ�Ӳ�����<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$domain&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">yp_get_default_domain</font><font color="#007700">();<br>if(!</font><font color="#0000BB">$domain</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">yp_errno</font><font color="#007700">()&nbsp;.&nbsp;</font><font color="#DD0000">":&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">yp_err_string</font><font color="#007700">();<br>}<br>echo&nbsp;</font><font color="#DD0000">"NIS&nbsp;��&nbsp;domain&nbsp;Ϊ:&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$domain</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-yp_errno.php" alt="function.php?yp_errno">yp_errno()</a> &nbsp;<a href="function.php-yp_err_string.php" alt="function.php?yp_err_string">yp_err_string()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-debugger_off.php" alt="function.php?debugger_off">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-yp_order.php" alt="function.php?yp_order">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>