<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ifx_fieldproperties()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ifx_fieldproperties()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix ���ݿ⺯����</a></div><br><h1><font color=0000bb>ifx_fieldproperties</font></h1><p>
�г� Informix �� SQL �ֶ����ԡ�<p>
<font color=ff8000>�﷨:</font> <b>array ifx_fieldproperties(int result_id);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>���������Ի�� Informix �� SQL ָ����ֶε����ԡ����� result_id �Ǿ��� <a href="function.php-ifx_query.php" alt="function.php?ifx_query">ifx_query()</a> �� <a href="function.php-ifx_prepare.php" alt="function.php?ifx_prepare">ifx_prepare()</a> �ķ��ش��š�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����Ϊ�����һ����<br><br><font color="#0000BB">&lt;?php<br>$properties&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_fieldtypes</font><font color="#007700">(</font><font color="#0000BB">$resultid</font><font color="#007700">);<br>if&nbsp;(!&nbsp;isset(</font><font color="#0000BB">$properties</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������<br></font><font color="#007700">}<br>for&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$properties</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$fname&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">key</font><font color="#007700">(</font><font color="#0000BB">$properties</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">printf</font><font color="#007700">(</font><font color="#DD0000">"%s:\t&nbsp;type&nbsp;=&nbsp;&nbsp;%s\n"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$fname</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$properties</font><font color="#007700">[</font><font color="#0000BB">$fname</font><font color="#007700">]);<br>&nbsp;&nbsp;</font><font color="#0000BB">next</font><font color="#007700">(</font><font color="#0000BB">$properties</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_fieldtypes.php" alt="function.php?ifx_fieldtypes">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ifx_num_fields.php" alt="function.php?ifx_num_fields">��һҳ</a>  ]</td></tr></table>
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
