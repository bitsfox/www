<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - ����:die()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>����:die()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-30.php" alt="group.php?30">�������</a></div><br><h1><font color="0000bb">die</font></h1><p>
�����Ϣ���ж� PHP ����<p>
<font color="ff8000">�﷨:</font> <b>void die(string message);</b><p>
<font color="ff8000">����ֵ:</font> ��<p>
<font color="ff8000">��������:</font> PHP ϵͳ����<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">����˵��</font></td></tr></table><p>���������ͳ��ַ�������������ж� PHP ���� (Script)������ message Ϊ���ͳ����ַ�����<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">ʹ�÷���</font></td></tr></table><p><font color="#000000">
�����У����޷���&nbsp;/etc/shadow&nbsp;ʱ�������������Ǹ���޷���:&nbsp;/etc/shadow��<br><br><font color="#0000BB">&lt;?php<br>$filename&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;/etc/shadow&quot;</font><font color="#007700">;<br></font><font color="#0000BB">$file&nbsp;</font><font color="#007700">=&nbsp;@</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$filename</font><font color="#007700">,&nbsp;</font><font color="#DD0000">'r'</font><font color="#007700">)<br>&nbsp;&nbsp;or&nbsp;die(</font><font color="#DD0000">&quot;��Ǹ���޷�?/font&gt;<font color="#007700">}</font><font color="#DD0000">��:&nbsp;$filename&quot;</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">&quot;���в���ִ��&quot;</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="die.gif" alt="img/die.gif" WIDTH="372" HEIGHT="105"></div>
        <p><hr size="1"><br><p>
</font></td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="function.php-extract.php" alt="function.php?extract">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-exit.php" alt="function.php?exit">��һҳ</a> 
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
