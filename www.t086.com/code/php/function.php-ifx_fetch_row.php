<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ifx_fetch_row()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ifx_fetch_row()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix ���ݿ⺯����</a></div><br><h1><font color=0000bb>ifx_fetch_row</font></h1><p>
���ص��еĸ��ֶΡ�<p>
<font color=ff8000>�﷨:</font> <b>array ifx_fetch_row(int result_id, mixed [position]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������������ѯ��� result ֮���в���������С������������������������һ��������ֵ�� 0���� result û�����ϣ��򷵻� false ֵ������ position ��ʡ�ԣ�����ν�ľ��α� (scroll cursor)������ֵΪ��NEXT��PREVIOUS��CURRENT��FIRST ���� LAST�������Ϊ���֣���ʾָ��Ϊ�ڼ��С�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
���µķ���Ϊ����&nbsp;Informix&nbsp;���ݿ��Ĳ���<br><br><font color="#0000BB">&lt;?php<br>$rid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_prepare</font><font color="#007700">(</font><font color="#DD0000">"select&nbsp;*&nbsp;from&nbsp;emp&nbsp;where&nbsp;name&nbsp;like&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$name</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$connid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">IFX_SCROLL</font><font color="#007700">);<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">$rid</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������<br></font><font color="#007700">}<br></font><font color="#0000BB">$rowcount&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_affected_rows</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">);<br>if&nbsp;(</font><font color="#0000BB">$rowcount&nbsp;</font><font color="#007700">&gt;&nbsp;</font><font color="#0000BB">1000</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">printf&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"��������̫�࣬��&nbsp;%d&nbsp;��\n&lt;br&gt;"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$rowcount</font><font color="#007700">);<br>&nbsp;&nbsp;die&nbsp;(</font><font color="#DD0000">"������ִ��&nbsp;SQL&nbsp;ָ��&lt;br&gt;\n"</font><font color="#007700">);<br>}<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">ifx_do&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������<br></font><font color="#007700">}<br></font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_fetch_row</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"NEXT"</font><font color="#007700">);<br>while&nbsp;(</font><font color="#0000BB">is_array</font><font color="#007700">(</font><font color="#0000BB">$row</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;for(</font><font color="#0000BB">reset</font><font color="#007700">(</font><font color="#0000BB">$row</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$fieldname</font><font color="#007700">=</font><font color="#0000BB">key</font><font color="#007700">(</font><font color="#0000BB">$row</font><font color="#007700">);&nbsp;</font><font color="#0000BB">next</font><font color="#007700">(</font><font color="#0000BB">$row</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$fieldvalue&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">$fieldname</font><font color="#007700">];<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">printf</font><font color="#007700">(</font><font color="#DD0000">"%s&nbsp;=&nbsp;%s,"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$fieldname</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$fieldvalue</font><font color="#007700">);<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;</font><font color="#0000BB">printf</font><font color="#007700">(</font><font color="#DD0000">"\n&lt;br&gt;"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_fetch_row</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"NEXT"</font><font color="#007700">);<br>}<br></font><font color="#0000BB">ifx_free_result</font><font color="#007700">(</font><font color="#0000BB">$rid</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_getsqlca.php" alt="function.php?ifx_getsqlca">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ifx_htmltbl_result.php" alt="function.php?ifx_htmltbl_result">��һҳ</a>  ]</td></tr></table>
</div><p><br><br>
 
</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
