<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - ����:gethostbynamel()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>����:gethostbynamel()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-35.php" alt="group.php?35">���纯����</a></div><br><h1><font color="0000bb">gethostbynamel</font></h1><p>
���ػ������Ƶ����� IP��<p>
<font color="ff8000">�﷨:</font> <b>array gethostbynamel(string hostname);</b><p>
<font color="ff8000">����ֵ:</font> ����<p>
<font color="ff8000">��������:</font> ����ϵͳ<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">����˵��</font></td></tr></table><p>��һ�����������кܶ�� IP λַ (����һЩ FTP ���� WWW ��վ)��ʹ�ñ���������ȡ��ȫ���� IP λַ�����ص���������С�<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">ʹ�÷���</font></td></tr></table><p><font color="#000000">
�������г���������&nbsp;FTP&nbsp;վ��&nbsp;IP��(ע��������&nbsp;FTP&nbsp;վ��һ��&nbsp;Domain&nbsp;Name&nbsp;ȴ��ӳ�����&nbsp;IP&nbsp;Address&nbsp;����վ��)<br><br><font color="#0000BB">&lt;?php<br>$netscapeftp</font><font color="#007700">=</font><font color="#0000BB">gethostbynamel</font><font color="#007700">(</font><font color="#DD0000">&quot;ftp.netscape.com&quot;</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">&quot;Netscape&nbsp;FTP&nbsp;��վ&nbsp;IP&nbsp;Address:&lt;ol&nbsp;type=1&gt;&quot;</font><font color="#007700">;<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$netscapeftp</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;&lt;li&gt;&quot;</font><font color="#007700">.</font><font color="#0000BB">$netscapeftp</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">];<br>}<br>echo&nbsp;</font><font color="#DD0000">&quot;&lt;/ol&gt;&quot;</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="gethostbynamel.gif" alt="img/gethostbynamel.gif" WIDTH="338" HEIGHT="233"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">�ο�</font></td></tr></table><p><a href="function.php-gethostbyaddr.php" alt="function.php?gethostbyaddr">gethostbyaddr()</a> &nbsp;<a href="function.php-gethostbyname.php" alt="function.php?gethostbyname">gethostbyname()</a> &nbsp;<a href="function.php-checkdnsrr.php" alt="function.php?checkdnsrr">checkdnsrr()</a> &nbsp;<a href="function.php-getmxrr.php" alt="function.php?getmxrr">getmxrr()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="function.php-gethostbyname.php" alt="function.php?gethostbyname">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-checkdnsrr.php" alt="function.php?checkdnsrr">��һҳ</a> 
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
