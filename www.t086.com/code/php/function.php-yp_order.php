<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:yp_order()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:yp_order()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-36.php" alt="group.php?36">NIS ������</a></div><br><h1><font color=0000bb>yp_order</font></h1><p>
���� map ��������<p>
<font color=ff8000>�﷨:</font> <b>int yp_order(string domain, string map);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������ȡ�� map ����������ȡ�� Domain �� map ֮��ʹ�á�����ֵΪ map ��������ʧ���򷵻� false��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$number&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">yp_order</font><font color="#007700">(</font><font color="#0000BB">$domain</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$mapname</font><font color="#007700">);<br>if(!</font><font color="#0000BB">$number</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">yp_errno</font><font color="#007700">()&nbsp;.&nbsp;</font><font color="#DD0000">":&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">yp_err_string</font><font color="#007700">();<br>}<br>echo&nbsp;</font><font color="#DD0000">"Map&nbsp;����Ϊ:&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$order</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-yp_get_default_domain.php" alt="function.php?yp_get_default_domain">yp_get_default_domain()</a> &nbsp;<a href="function.php-yp_errno.php" alt="function.php?yp_errno">yp_errno()</a> &nbsp;<a href="function.php-yp_err_string.php" alt="function.php?yp_err_string">yp_err_string()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-yp_get_default_domain.php" alt="function.php?yp_get_default_domain">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-yp_master.php" alt="function.php?yp_master">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
