<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:filemtime()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:filemtime()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">�ļ�ϵͳ������</a></div><br><h1><font color=0000bb>filemtime</font></h1><p>
ȡ���ļ������޸�ʱ�䡣<p>
<font color=ff8000>�﷨:</font> <b>int filemtime(string filename);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> �ļ���ȡ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������ָ���ļ� filename ������޸�ʱ�䡣���� false ��ʾ�������󡣷���ֵ���ڿ�ȡ�������У����Բο� <a href="function.php-clearstatcache.php" alt="function.php?clearstatcache">clearstatcache()</a>��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
������&nbsp;benbatten@home.com&nbsp;(29-Apr-1999)&nbsp;��&nbsp;Win95&nbsp;�ϵ�ʵ�����������з��ص�ҳ&nbsp;Homepage&nbsp;������޸�ʱ�䲢��&nbsp;filemtime()&nbsp;���ص�&nbsp;UNIX&nbsp;��ʽ��ʱ���ַ���ת����&nbsp;12&nbsp;Сʱ�Ƶ��ַ�����<br><br>(ע�����ڱ������ļ�Ϊ&nbsp;__FILE__&nbsp;��ʾĿǰ���ļ�����ʵ��ʹ��&nbsp;getlastmod()&nbsp;��������ͬ��Ч����)<br><br><font color="#0000BB">&lt;?php<br>$filemod&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">filemtime</font><font color="#007700">(</font><font color="#0000BB">__FILE__</font><font color="#007700">);<br></font><font color="#0000BB">$filemodtime&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"F&nbsp;j&nbsp;Y&nbsp;h:i:s&nbsp;A"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$filemod</font><font color="#007700">);<br>print(</font><font color="#DD0000">"��ҳ����޸�ʱ��:&nbsp;$filemodtime"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-fileinode.php" alt="function.php?fileinode">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-fileowner.php" alt="function.php?fileowner">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
