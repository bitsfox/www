<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - WDDX ������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>WDDX ������</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 6 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>WDDX Ϊȫ����Ϣ����ɢʽ�ļ�������ȫ��Ϊ Web Distributed Data Exchange����ʵ 
              WDDX �������� XML ��һ����֧�������й� WDDX ����Ϣ���Բο� <a href="/to.asp?url=http://www.wddx.org/" tppabs="/to.asp?url=http://www.wddx.org/">http://www.wddx.org</a>��
<p>

��һ: ��������һֵ������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">print&nbsp;</font><font color="#0000BB">wddx_serialize_value</font><font color="#007700">(</font><font color="#DD0000">"PHP&nbsp;to&nbsp;WDDX&nbsp;packet&nbsp;example"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"PHP&nbsp;packet"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

���ص������������Ϊ<p>

&lt;wddxPacket version='0.9'&gt;&lt;header comment='PHP packet'/&gt;&lt;data&gt;<br>
&lt;string&gt;PHP to WDDX packet example&lt;/string&gt;&lt;/data&gt;&lt;/wddxPacket&gt;<p>

����: ������ WDDX �����������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$pi&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">3.1415926</font><font color="#007700">;<br></font><font color="#0000BB">$packet_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">wddx_packet_start</font><font color="#007700">(</font><font color="#DD0000">"PHP"</font><font color="#007700">);<br></font><font color="#0000BB">wddx_add_vars</font><font color="#007700">(</font><font color="#0000BB">$packet_id</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"pi"</font><font color="#007700">);<br><br></font><font color="#FF8000">/*&nbsp;Suppose&nbsp;$cities&nbsp;came&nbsp;from&nbsp;database&nbsp;*/<br></font><font color="#0000BB">$cities&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Austin"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Novato"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Seattle"</font><font color="#007700">);<br></font><font color="#0000BB">wddx_add_vars</font><font color="#007700">(</font><font color="#0000BB">$packet_id</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"cities"</font><font color="#007700">);<br><br></font><font color="#0000BB">$packet&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">wddx_packet_end</font><font color="#007700">(</font><font color="#0000BB">$packet_id</font><font color="#007700">);<br>print&nbsp;</font><font color="#0000BB">htmlentities</font><font color="#007700">(</font><font color="#0000BB">$packet</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

���ص������������Ϊ<p>

&lt;wddxPacket version='0.9'&gt;&lt;header comment='PHP'/&gt;&lt;data&gt;&lt;struct&gt;<br>
&lt;var name='pi'&gt;&lt;number&gt;3.1415926&lt;/number&gt;&lt;/var&gt;&lt;var name='cities'&gt;<br>
&lt;array length='3'&gt;&lt;string&gt;Austin&lt;/string&gt;&lt;string&gt;Novato&lt;/string&gt;<br>
&lt;string&gt;Seattle&lt;/string&gt;&lt;/array&gt;&lt;/var&gt;&lt;/struct&gt;&lt;/data&gt;&lt;/wddxPacket&gt;
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-wddx_serialize_value.php" alt="function.php?wddx_serialize_value">wddx_serialize_value</a>:</td><td valign=top>����һֵ��������</td></tr>
<tr><td align=right valign=top><a href="function.php-wddx_serialize_vars.php" alt="function.php?wddx_serialize_vars">wddx_serialize_vars</a>:</td><td valign=top>����ֵ��������</td></tr>
<tr><td align=right valign=top><a href="function.php-wddx_packet_start.php" alt="function.php?wddx_packet_start">wddx_packet_start</a>:</td><td valign=top>��ʼ�µ� WDDX �����</td></tr>
<tr><td align=right valign=top><a href="function.php-wddx_packet_end.php" alt="function.php?wddx_packet_end">wddx_packet_end</a>:</td><td valign=top>������ WDDX �����</td></tr>
<tr><td align=right valign=top><a href="function.php-wddx_add_vars.php" alt="function.php?wddx_add_vars">wddx_add_vars</a>:</td><td valign=top>�� WDDX �����������</td></tr>
<tr><td align=right valign=top><a href="function.php-wddx_deserialize.php" alt="function.php?wddx_deserialize">wddx_deserialize</a>:</td><td valign=top>�� WDDX �������������</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-50.php" alt="group.php?50">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-52.php" alt="group.php?52">��һҳ</a> 
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
