<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:each()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:each()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-3.php" alt="group.php?3">���鴦������</a></div><br><h1><font color=0000bb>each</font></h1><p>
������������һ��Ԫ�ص�������ֵ��<p>
<font color=ff8000>�﷨:</font> <b>array each(array array);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������ΪĿǰ����ָ��� ����/ֵ �ԡ����ص��������ĸ�Ԫ�أ�����Ϊ 0, 1, ����, ��ֵ��ǰ���� 0 �� ���� Ϊ�����������1 �� ֵ��Ϊ����Ԫ�ص�ֵ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����һ:<br><font color="#0000BB">&lt;?<br>$foo&nbsp;</font><font color="#007700">=&nbsp;array(&nbsp;</font><font color="#DD0000">"bob"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"fred"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"jussi"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"jouni"&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">$bar&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$foo&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>��������ӣ���������&nbsp;$bar&nbsp;��&nbsp;����/ֵ&nbsp;Ϊ<br>0&nbsp;=&gt;&nbsp;0<br>1&nbsp;=&gt;&nbsp;'bob'<br>key&nbsp;=&gt;&nbsp;0<br>value&nbsp;=&gt;&nbsp;'bob'<br><br>������:<br><font color="#0000BB">&lt;?<br>$foo&nbsp;</font><font color="#007700">=&nbsp;array(&nbsp;</font><font color="#DD0000">"Robert"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"Bob"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Seppo"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"Sepi"&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">$bar&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$foo&nbsp;</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>��������ӣ���������&nbsp;$bar&nbsp;��&nbsp;����/ֵ&nbsp;Ϊ<br>0&nbsp;=&gt;&nbsp;'Robert'<br>1&nbsp;=&gt;&nbsp;'Bob'<br>key&nbsp;=&gt;&nbsp;'Robert'<br>value&nbsp;=&gt;&nbsp;'Bob'<br><br>������:&nbsp;&nbsp;<br>each()&nbsp;��������͵�������������&nbsp;list()&nbsp;�������ã���������&nbsp;$HTTP_POST_VARS&nbsp;������<br><font color="#0000BB">&lt;?<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"POST&nbsp;���ͳ���ֵΪ:&lt;br&gt;"</font><font color="#007700">;<br>while&nbsp;(&nbsp;list(&nbsp;</font><font color="#0000BB">$key</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$val&nbsp;</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(&nbsp;</font><font color="#0000BB">$HTTP_POST_VARS&nbsp;</font><font color="#007700">)&nbsp;)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$key&nbsp;=&gt;&nbsp;$val&lt;br&gt;"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-current.php" alt="function.php?current">current()</a> &nbsp;<a href="function.php-key.php" alt="function.php?key">key()</a> &nbsp;<a href="function.php-list.php" alt="function.php?list">list()</a> &nbsp;<a href="function.php-next.php" alt="function.php?next">next()</a> &nbsp;<a href="function.php-prev.php" alt="function.php?prev">prev()</a> &nbsp;<a href="function.php-reset.php" alt="function.php?reset">reset()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-current.php" alt="function.php?current">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-end.php" alt="function.php?end">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
