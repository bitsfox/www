<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ifx_query()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ifx_query()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-23.php" alt="group.php?23">Informix ���ݿ⺯����</a></div><br><h1><font color=0000bb>ifx_query</font></h1><p>
�ͳ�һ�� query �ַ�����<p>
<font color=ff8000>�﷨:</font> <b>int ifx_query(string query, int [link_identifier], int [cursor_type], mixed [blobidarray]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������ͳ� query �ַ����� Informix ����صĴ����衣��û��ָ�� link_identifier �������������Զ�Ѱ������򿪵� ID������ cursor_type ��ʡ�ԣ���ֵ�� IFX_SCROLL �� IFX_HOLD ���֡����� BLOB ���ֶ�Ҫ���� query ָ��֮�У���ʹ�� blobidarray ������ָ�� BLOB �Ĵ��롣<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
��һ:<br><br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;֮ǰ�ĳ���ʡ��<br></font><font color="#0000BB">ifx_textasvarchar</font><font color="#007700">(</font><font color="#0000BB">1</font><font color="#007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;ʹ������ģʽ&nbsp;(text&nbsp;mode)&nbsp;��&nbsp;blobs<br></font><font color="#0000BB">$res_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_query</font><font color="#007700">(</font><font color="#DD0000">"select&nbsp;*&nbsp;from&nbsp;orders"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$conn_id</font><font color="#007700">);<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">$res_id</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">printf</font><font color="#007700">(</font><font color="#DD0000">"�޷�ȡ��&nbsp;orders&nbsp;���ϱ�&nbsp;:&nbsp;%s\n&lt;br&gt;%s&lt;br&gt;\n"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">ifx_error</font><font color="#007700">());<br>&nbsp;&nbsp;</font><font color="#0000BB">ifx_errormsg</font><font color="#007700">();<br>&nbsp;&nbsp;die;<br>}<br></font><font color="#0000BB">ifx_htmltbl_result</font><font color="#007700">(</font><font color="#0000BB">$res_id</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"border=\"1\""</font><font color="#007700">);<br></font><font color="#0000BB">ifx_free_result</font><font color="#007700">(</font><font color="#0000BB">$res_id</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;֮��ĳ���ʡ��<br></font><font color="#0000BB">?&gt;<br></font><br><br>����:<br><br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;֮ǰ�ĳ���ʡ��<br>//<br>//&nbsp;Ϊ����λ�����ֽ���&nbsp;BLOB&nbsp;����<br></font><font color="#0000BB">$textid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_create_blob</font><font color="#007700">(</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Text&nbsp;column&nbsp;in&nbsp;memory"</font><font color="#007700">);<br></font><font color="#0000BB">$byteid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_create_blob</font><font color="#007700">(</font><font color="#0000BB">1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Byte&nbsp;column&nbsp;in&nbsp;memory"</font><font color="#007700">);<br><br></font><font color="#0000BB">$blobidarray</font><font color="#007700">[]&nbsp;=&nbsp;</font><font color="#0000BB">$textid</font><font color="#007700">;<br></font><font color="#0000BB">$blobidarray</font><font color="#007700">[]&nbsp;=&nbsp;</font><font color="#0000BB">$byteid</font><font color="#007700">;<br><br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"insert&nbsp;into&nbsp;catalog&nbsp;(stock_num,&nbsp;manu_code,&nbsp;"&nbsp;</font><font color="#007700">.</font><font color="#DD0000">"cat_descr,cat_picture)&nbsp;values(1,'HRO',?,?)"</font><font color="#007700">;<br></font><font color="#0000BB">$res_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ifx_query</font><font color="#007700">(</font><font color="#0000BB">$query</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$conn_id</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$blobidarray</font><font color="#007700">);<br>if&nbsp;(!&nbsp;</font><font color="#0000BB">$res_id</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������<br></font><font color="#007700">}<br></font><font color="#0000BB">ifx_free_result</font><font color="#007700">(</font><font color="#0000BB">$res_id</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;֮�����ʡ��<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ifx_close.php" alt="function.php?ifx_close">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ifx_prepare.php" alt="function.php?ifx_prepare">��һҳ</a>  ]</td></tr></table>
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
