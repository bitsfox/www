<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:imap_fetchstructure()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:imap_fetchstructure()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-21.php" alt="group.php?21">IMAP �����ʼ�ϵͳ������</a></div><br><h1><font color=0000bb>imap_fetchstructure</font></h1><p>
��ȡĳ�ż��Ľṹ��Ϣ��<p>
<font color=ff8000>�﷨:</font> <b>array imap_fetchstructure(int imap_stream, int msg_number);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������ɶ�ȡָ���ż��������Ϣ������ imap_stream Ϊ IMAP �Ĵ��š����� msg_number Ϊ�ż�����š����ص���ϢΪ����ķ�ʽ����Ԫ�ص����ݼ��±�<p>

<table border=1>
<tr><th>Ԫ������</th><th>����</th></tr>
<tr><td>type</td><td>���� (Integer)</td></tr>
<tr><td>encoding</td><td>���� (Integer)</td></tr>
<tr><td>ifsubtype</td><td>���� (Boolean)</td></tr>
<tr><td>subtype</td><td>�ַ��� (String)</td></tr>
<tr><td>ifdescription</td><td>���� (Boolean)</td></tr>
<tr><td>description</td><td>�ַ��� (String)</td></tr>
<tr><td>ifid</td><td>���� (Boolean)</td></tr>
<tr><td>id</td><td>�ַ��� (String)</td></tr>
<tr><td>lines</td><td>���� (Integer)</td></tr>
<tr><td>bytes</td><td>���� (Integer)</td></tr>
<tr><td>ifparameters</td><td>���� (Boolean)</td></tr>
</table><p>

���� type Ԫ�ص�ֵ�������������<p>
<table border=1>
<tr><th>ֵ</th><th>��������</th></tr>
<tr><td>0</td><td>���� text</td></tr>
<tr><td>1</td><td>���� multipart</td></tr>
<tr><td>2</td><td>��Ϣ message</td></tr>
<tr><td>3</td><td>���� application</td></tr>
<tr><td>4</td><td>���� audio</td></tr>
<tr><td>5</td><td>ͼ�� image</td></tr>
<tr><td>6</td><td>Ӱ�� video</td></tr>
<tr><td>7</td><td>���� other</td></tr>
</table><p>

�� encoding ֵ�������������<p>

<table border=1>
<tr><th>ֵ</th><th>��������</th></tr>
<tr><td>0</td><td>��λ (7 bit)</td></tr>
<tr><td>1</td><td>��λ (8 bit)</td></tr>
<tr><td>2</td><td>����λ (binary)</td></tr>
<tr><td>3</td><td>BASE64 ����</td></tr>
<tr><td>4</td><td>QP ���� (QuotedPrintable)</td></tr>
<tr><td>5</td><td>����</td></tr>
</table><p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-imap_fetchbody.php" alt="function.php?imap_fetchbody">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-imap_header.php" alt="function.php?imap_header">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
