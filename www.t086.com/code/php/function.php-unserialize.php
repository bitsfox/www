<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:unserialize()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:unserialize()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-30.php" alt="group.php?30">�������</a></div><br><h1><font color=0000bb>unserialize</font></h1><p>
ȡ��ϵͳ���ϡ�<p>
<font color=ff8000>�﷨:</font> <b>mixed unserialize(string str);</b><p>
<font color=ff8000>����ֵ:</font> �����������<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������ȡ��ϵͳ���ϡ������������ byte-stream ��ʽ��š�����ֵΪ������ͣ���������������ȷ�������ַ����������Լ�������� (��ķ����޷�����)��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>$conn&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_connect</font><font color="#007700">(</font><font color="#DD0000">"webdb"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"php"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"chicken"</font><font color="#007700">);<br></font><font color="#0000BB">$stmt&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">odbc_prepare</font><font color="#007700">(</font><font color="#0000BB">$conn</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"SELECT&nbsp;data&nbsp;FROM&nbsp;sessions&nbsp;WHERE&nbsp;id&nbsp;=&nbsp;?"</font><font color="#007700">);<br></font><font color="#0000BB">$sqldata&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#0000BB">$PHP_AUTH_USER</font><font color="#007700">);<br>if&nbsp;(!</font><font color="#0000BB">odbc_execute</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">,&nbsp;&amp;</font><font color="#0000BB">$sqldata</font><font color="#007700">)&nbsp;||&nbsp;!</font><font color="#0000BB">odbc_fetch_into</font><font color="#007700">(</font><font color="#0000BB">$stmt</font><font color="#007700">,&nbsp;&amp;</font><font color="#0000BB">$tmp</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��ִ����&nbsp;$session_data&nbsp;��Ϊ��ֵ<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$session_data&nbsp;</font><font color="#007700">=&nbsp;array();<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;ȡ��&nbsp;$tmp[0]&nbsp;ֵ<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$session_data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">unserialize</font><font color="#007700">(</font><font color="#0000BB">$tmp</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">]);<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</font><font color="#0000BB">is_array</font><font color="#007700">(</font><font color="#0000BB">$session_data</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;���ִ�����&nbsp;$session_data&nbsp;���<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$session_data&nbsp;</font><font color="#007700">=&nbsp;array();<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-serialize.php" alt="function.php?serialize">serialize()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-unpack.php" alt="function.php?unpack">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-uniqid.php" alt="function.php?uniqid">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
