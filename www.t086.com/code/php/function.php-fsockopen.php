<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - ����:fsockopen()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>����:fsockopen()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-35.php" alt="group.php?35">���纯����</a></div><br><h1><font color="0000bb">fsockopen</font></h1><p>
������� Socket ���ӡ�<p>
<font color="ff8000">�﷨:</font> <b>int fsockopen(string hostname, int port, int [errno], string [errstr], int [timeout]);</b><p>
<font color="ff8000">����ֵ:</font> ����<p>
<font color="ff8000">��������:</font> ����ϵͳ<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">����˵��</font></td></tr></table><p>Ŀǰ��������ṩ���� Socket ���������棬�ֱ�Ϊ Internet �õ� AF_INET �� Unix �õ� AF_UNIX������ Internet ������ʹ��ʱ������ hostname �� port �ֱ������ַ�����š��� UNIX ���ο��� IPC��hostname ������ʾ�� socket ��·����port ����Ϊ 0����ʡ�Ե� timeout ѡ���ʾ���û�����Ͼ��жϡ���ʹ�ñ�����֮��᷵���ļ�ָ�룬���ļ�����ʹ�ã����� <a href="function.php-fgets.php" alt="function.php?fgets">fgets()</a>��<a href="function.php-fgetss.php" alt="function.php?fgetss">fgetss()</a>��<a href="function.php-fputs.php" alt="function.php?fputs">fputs()</a>��<a href="function.php-fclose.php" alt="function.php?fclose">fclose()</a> �� <a href="function.php-feof.php" alt="function.php?feof">feof()</a>������ errno �� errstr Ҳ�ǿ�ʡ�Եģ���Ҫ����������ʹ�á�ʹ�ñ���������ʹ�ø���ģʽ (blocking mode) �������� <a href="function.php-set_socket_blocking.php" alt="function.php?set_socket_blocking">set_socket_blocking()</a> ת�����޸���ģʽ��<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">ʹ�÷���</font></td></tr></table><p><font color="#000000">
��������ģ���&nbsp;HTTP&nbsp;���ӡ�<br><font color="#0000BB">&lt;?php<br>$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fsockopen</font><font color="#007700">(</font><font color="#DD0000">&quot;php.wilson.gs&quot;</font><font color="#007700">,&nbsp;</font><font color="#0000BB">80</font><font color="#007700">,&nbsp;&amp;</font><font color="#0000BB">$errno</font><font color="#007700">,&nbsp;&amp;</font><font color="#0000BB">$errstr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">10</font><font color="#007700">);<br>if(!</font><font color="#0000BB">$fp</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;$errstr&nbsp;($errno)&lt;br&gt;</font><font color="#007700">\n</font><font color="#DD0000">&quot;</font><font color="#007700">;<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">fputs</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#DD0000">&quot;GET&nbsp;/&nbsp;HTTP/1.0\nHost:&nbsp;php.wilson.gs\n\n&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(!</font><font color="#0000BB">feof</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">fgets</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#0000BB">128</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="fsockopen.gif" alt="img/fsockopen.gif" WIDTH="439" HEIGHT="452"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">�ο�</font></td></tr></table><p><a href="function.php-pfsockopen.php" alt="function.php?pfsockopen">pfsockopen()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-sybase_select_db.php" alt="function.php?sybase_select_db">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-pfsockopen.php" alt="function.php?pfsockopen">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
