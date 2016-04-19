<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:Ora_Bind()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:Ora_Bind()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-39.php" alt="group.php?39">Oracle ���ݿ⺯����</a></div><br><h1><font color=0000bb>Ora_Bind</font></h1><p>
���� PHP ������ Oracle ������<p>
<font color=ff8000>�﷨:</font> <b>int ora_bind(int cursor, string PHP variable name, string SQL parameter name, int length, int [type]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������� PHP ������ SQL ����ϵ����һ��SQL ���� (SQL parameter) ���������� ":name" ����ʽ���﷨�е� type Ϊ��ʡ�ԵĲ���ѡ��������������������֮һ��0 ΪĬ��ֵ��������/��� (in/out)��1 ������ (in)��2 ����� (out)���� PHP 3.0.1 ��֮�������ʹ�����г������� type ����������ֵ��ORA_BIND_INOUT��ORA_BIND_IN �� ORA_BIND_OUT����Ҫ���Ǳ�����Ӧ���� <a href="function.php-ora_parse.php" alt="function.php?ora_parse">ora_parse()</a> ֮���� <a href="function.php-ora_exec.php" alt="function.php?ora_exec">ora_exec()</a> ֮ǰ����ʹ�á����ɹ��򷵻� true����֮���� false��Ҫ������ϸ�Ĵ�����Ϣ��ʹ�� <a href="function.php-ora_error.php" alt="function.php?ora_error">ora_error()</a> �� <a href="function.php-ora_errorcode.php" alt="function.php?ora_errorcode">ora_errorcode()</a>��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br>ora_parse</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"declare&nbsp;tmp&nbsp;INTEGER;&nbsp;begin&nbsp;tmp&nbsp;:=&nbsp;:in;&nbsp;:out&nbsp;:=&nbsp;tmp;&nbsp;:x&nbsp;:=&nbsp;7.77;&nbsp;end;"</font><font color="#007700">);<br></font><font color="#0000BB">ora_bind</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"result"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">":x"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$len</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">);<br></font><font color="#0000BB">ora_bind</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"input"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">":in"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">5</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">ora_bind</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"output"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">":out"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">5</font><font color="#007700">,&nbsp;</font><font color="#0000BB">2</font><font color="#007700">);<br></font><font color="#0000BB">$input&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">765</font><font color="#007700">;<br></font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$curs</font><font color="#007700">);<br>echo&nbsp;</font><font color="#DD0000">"Result:&nbsp;$result&lt;BR&gt;Out:&nbsp;$output&lt;BR&gt;In:&nbsp;$input"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[ </td> <td> <a href="function.php-Ora_Close.php" alt="function.php?Ora_Close">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
