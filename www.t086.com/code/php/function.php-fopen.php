<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:fopen()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:fopen()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-17.php" alt="group.php?17">�ļ�ϵͳ������</a></div><br><h1><font color=0000bb>fopen</font></h1><p>
���ļ����� URL��<p>
<font color=ff8000>�﷨:</font> <b>int fopen(string filename, string mode);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> �ļ���ȡ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>˵��:  �������������򿪱��ػ���Զ�˵��ļ��������� filename Ϊ "http://......" �򱾺������� HTTP 1.0 Э������������ӣ��ļ�ָ����ָ�������������ļ�����ʼ���������� filename Ϊ "ftp://......." �򱾺���������������ӣ��ļ�ָ��ָ��ָ�����ļ������� FTP ������û��֧�ֱ���ģʽ (passive mode ftp) �򷵻�ʧ��ֵ���򿪵� FTP �ļ������Ƕ�ȡ��д������֮һ�������ܶ���д����ͬʱʹ�á����������Σ��������򿪱��ص��ļ����ļ���ָ����ָ��򿪵��ļ��������ļ�ʧ�ܣ��򷵻� false ֵ��<p>
�ַ������� mode ���������е����Σ�<p><ul type=disc>
<li>'r' ���ļ���ʽΪֻ�����ļ�ָ��ָ����ʼ����
<li>'r+' ���ļ���ʽΪ�ɶ�д���ļ�ָ��ָ����ʼ����
<li>'w' ���ļ���ʽΪд�룬�ļ�ָ��ָ����ʼ��������ԭ�ļ��ĳ�����Ϊ 0�����ļ������ڣ��������ļ���
<li>'w+' ���ļ���ʽΪ�ɶ�д���ļ�ָ��ָ����ʼ��������ԭ�ļ��ĳ�����Ϊ 0�����ļ������ڣ��������ļ���
<li>'a' ���ļ���ʽΪд�룬�ļ�ָ��ָ���ļ�������ļ������ڣ��������ļ���
<li>'a+' ���ļ���ʽΪ�ɶ�д���ļ�ָ��ָ���ļ�������ļ������ڣ��������ļ���
<li>'b' ������ϵͳ�����ּ�����λ�ļ���ͬ��������ô˲�����UNIX ϵͳ����Ҫʹ�ñ�������
</ul><p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
��һ��Ϊ&nbsp;UNIX&nbsp;ϵͳʹ�ã��ڶ�����&nbsp;Windows&nbsp;ϵ��ϵͳ���÷���������������Ϊ&nbsp;URL&nbsp;��ʹ�÷�����<br><br><font color="#0000BB">&lt;?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"/home/rasmus/file.txt"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"c:\\mydata\\info.txt"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"http://www.php.net/"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"r"</font><font color="#007700">);<br></font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#DD0000">"ftp://user:password@my.com/"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-fclose.php" alt="function.php?fclose">fclose()</a> &nbsp;<a href="function.php-popen.php" alt="function.php?popen">popen()</a> &nbsp;<a href="function.php-fsockopen.php" alt="function.php?fsockopen">fsockopen()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-flock.php" alt="function.php?flock">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-fpassthru.php" alt="function.php?fpassthru">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
