<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:readdir()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:readdir()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-12.php" alt="group.php?12">Ŀ¼��������</a></div><br><h1><font color=0000bb>readdir</font></h1><p>
��ȡĿ¼ handle��<p>
<font color=ff8000>�﷨:</font> <b>string readdir(int dir_handle);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> �ļ���ȡ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������������ȡĿ¼������Ŀ¼�е��ļ����ƣ���ȡ�����κ������˳��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
�����г�ĿǰĿ¼�������ļ�<br><br><font color="#0000BB">&lt;?php<br>$handle</font><font color="#007700">=</font><font color="#0000BB">opendir</font><font color="#007700">(</font><font color="#DD0000">'.'</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"Ŀ¼&nbsp;handle:&nbsp;$handle</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"�ļ�:\n"</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$file&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">readdir</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"$file</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">closedir</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);&nbsp;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-opendir.php" alt="function.php?opendir">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-rewinddir.php" alt="function.php?rewinddir">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
