<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:session_name()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:session_name()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-54.php" alt="group.php?54">Session ������</a></div><br><h1><font color=0000bb>session_name</font></h1><p>
��ȡĿǰ session ���ơ�<p>
<font color=ff8000>�﷨:</font> <b>string session_name(string [name]);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������ȡ�û�����������Ŀǰ Session �����ơ����޲��� name ���ʾ������ȡĿǰ Session ���ƣ����ϲ������ʾ�� Session ������Ϊ���� name��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����ķ���Ϊ&nbsp;Session&nbsp;Ƭ�γ���<br><br><font color="#0000BB">&lt;?php<br>$username</font><font color="#007700">=</font><font color="#DD0000">"guest1"</font><font color="#007700">;<br>if(isset(</font><font color="#0000BB">$username</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">session_name</font><font color="#007700">(</font><font color="#0000BB">$username</font><font color="#007700">);<br>}<br>echo&nbsp;</font><font color="#DD0000">"����&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">session_name</font><font color="#007700">().</font><font color="#DD0000">"\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-session_destroy.php" alt="function.php?session_destroy">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-session_module_name.php" alt="function.php?session_module_name">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
