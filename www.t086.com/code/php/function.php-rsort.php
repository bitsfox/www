<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - ����:rsort()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>����:rsort()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-3.php" alt="group.php?3">���鴦��������</a></div><br><h1><font color="0000bb">rsort</font></h1><p>
�������ֵ�ɴ�С����<p>
<font color="ff8000">�﷨:</font> <b>void rsort(array array);</b><p>
<font color="ff8000">����ֵ:</font> ��<p>
<font color="ff8000">��������:</font> ���ϴ���<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">����˵��</font></td></tr></table><p>���������������ɴ�С�ķ�ʽ���š�<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$fruits&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">&quot;lemon&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;orange&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;banana&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;apple&quot;</font><font color="#007700">);<br></font><font color="#0000BB">rsort</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">);<br>for(</font><font color="#0000BB">reset</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">);&nbsp;list(</font><font color="#0000BB">$key</font><font color="#007700">,</font><font color="#0000BB">$value</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$fruits</font><font color="#007700">);&nbsp;)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;fruits</font><font color="#007700">[</font><font color="#DD0000">$key</font><font color="#007700">]</font><font color="#DD0000">&nbsp;=&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$value</font><font color="#007700">.</font><font color="#DD0000">&quot;\n&quot;</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font>������Ľ��Ϊ<br>fruits[0]&nbsp;=&nbsp;orange<br>fruits[1]&nbsp;=&nbsp;lemon<br>fruits[2]&nbsp;=&nbsp;banana<br>fruits[3]&nbsp;=&nbsp;apple<br></font>
<p>
        <div align="center"><img src="rsort.gif" alt="img/rsort.gif" WIDTH="356" HEIGHT="137"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">�ο�</font></td></tr></table><p><a href="function.php-arsort.php" alt="function.php?arsort">arsort()</a> &nbsp;<a href="function.php-asort.php" alt="function.php?asort">asort()</a> &nbsp;<a href="function.php-ksort.php" alt="function.php?ksort">ksort()</a> &nbsp;<a href="function.php-sort.php" alt="function.php?sort">sort()</a> &nbsp;<a href="function.php-usort.php" alt="function.php?usort">usort()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-reset.php" alt="function.php?reset">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-shuffle.php" alt="function.php?shuffle">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>