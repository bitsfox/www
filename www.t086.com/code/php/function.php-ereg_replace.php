<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - ����:ereg_replace()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>����:ereg_replace()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-43.php" alt="group.php?43">������ʽ������</a></div><br><h1><font color="0000bb">ereg_replace</font></h1><p>
�ַ����ȶԽ�����ȡ����<p>
<font color="ff8000">�﷨:</font> <b>string ereg_replace(string pattern, string replacement, string string);</b><p>
<font color="ff8000">����ֵ:</font> �ַ���<p>
<font color="ff8000">��������:</font> ���ϴ���<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">����˵��</font></td></tr></table><p>�������� pattern �Ĺ����������ȶ��ַ��� string����ȡ����֮���ַ���Ϊ���� replacement������ֵΪ�ַ������ͣ�Ϊȡ������ַ��������<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">ʹ�÷���</font></td></tr></table><p><font color="#000000">
ken@freebsdrocks.com&nbsp;��&nbsp;16-Mar-1999&nbsp;��������ӡ�<br><br><font color="#0000BB">&lt;?php<br>$text&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">'This&nbsp;is&nbsp;a&nbsp;{1}&nbsp;day,&nbsp;not&nbsp;{2}&nbsp;and&nbsp;{3}.'</font><font color="#007700">;<br></font><font color="#0000BB">$daytype&nbsp;</font><font color="#007700">=&nbsp;array(&nbsp;</font><font color="#0000BB">1&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">'fine'</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">2&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">'overcast'</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">3&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">'rainy'&nbsp;</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">ereg&nbsp;</font><font color="#007700">(</font><font color="#DD0000">'{([0-9]+)}'</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$text</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$regs</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$found&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$regs</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">$text&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ereg_replace</font><font color="#007700">(</font><font color="#DD0000">&quot;\{&quot;</font><font color="#007700">.</font><font color="#0000BB">$found</font><font color="#007700">.</font><font color="#DD0000">&quot;\}&quot;</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$daytype</font><font color="#007700">[</font><font color="#0000BB">$found</font><font color="#007700">],&nbsp;</font><font color="#0000BB">$text</font><font color="#007700">);<br>}<br>echo&nbsp;</font><font color="#DD0000">&quot;$text</font><font color="#007700">\n</font><font color="#DD0000">&quot;</font><font color="#007700">;<br></font><font color="#FF8000">//&nbsp;This&nbsp;is&nbsp;a&nbsp;fine&nbsp;day,&nbsp;not&nbsp;overcast&nbsp;and&nbsp;rainy.&nbsp;<br></font><font color="#0000BB">?&gt;<br></font><br>ken@freebsdrocks.com&nbsp;��ͬʱ���������ͬ���ܵ�perl&nbsp;���������£�<br><br>$text&nbsp;=&nbsp;'This&nbsp;is&nbsp;a&nbsp;{1}&nbsp;day,&nbsp;not&nbsp;{2}&nbsp;and&nbsp;{3}.';<br>%daytype&nbsp;=&nbsp;(&nbsp;1&nbsp;=&gt;&nbsp;'fine',<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;=&gt;&nbsp;'overcast',<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;=&gt;&nbsp;'rainy'&nbsp;);<br>$text&nbsp;=~&nbsp;s/{(\d+)}/$daytype{$1}/eg;<br>print&nbsp;&quot;$text\n&quot;;</font>
<p>
        <div align="center"><img src="ereg_replace.gif" alt="img/ereg_replace.gif" WIDTH="385" HEIGHT="103"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">�ο�</font></td></tr></table><p><a href="function.php-ereg.php" alt="function.php?ereg">ereg()</a> &nbsp;<a href="function.php-eregi.php" alt="function.php?eregi">eregi()</a> &nbsp;<a href="function.php-eregi_replace.php" alt="function.php?eregi_replace">eregi_replace()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-ereg.php" alt="function.php?ereg">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-eregi.php" alt="function.php?eregi">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
