<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:dbase_create()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:dbase_create()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-10.php" alt="group.php?10">dBase ��ʽ���ϱ�����</a></div><br><h1><font color=0000bb>dbase_create</font></h1><p>
���� dBase ���ϱ�<p>
<font color=ff8000>�﷨:</font> <b>int dbase_create(string filename, array fields);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>���������������µ� dBase ���ϱ����� filename Ϊ���ϱ�����ּ�·�������� fields Ϊ���飬���ж�����ֶε���Ϣ�������ֶ����ơ��ֶ����͡����ֶγ��ȵȡ��±�Ϊ fields ��ֵ<p>

<table border=1>
<tr><th>����</th><th>˵��</th></tr>
<tr><td>L</td><td>����ֵ (Boolean)�����趨�����ϳ��ȡ�</td></tr>
<tr><td>M</td><td>�������� (Memo)��PHP Ŀǰ��֧�ֱ����͡�</td></tr>
<tr><td>D</td><td>���� (Date)�������ʽΪ YYYYMMDD��</td></tr>
<tr><td>N</td><td>�������� (Number)���趨��С��ǰ���λ����</td></tr>
<tr><td>C</td><td>�ַ��� (String)���趨���ַ������ȡ� </td></tr>
</table><p>

���޷������򷵻� false���ɹ��򷵻����ϱ�� ID��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����Ϊ�������ϱ������<br><br><font color="#0000BB">&lt;?php<br>$dbname&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"/mypath/user.dbf"</font><font color="#007700">;<br></font><font color="#FF8000">//&nbsp;�������ϱ��ֶ�<br></font><font color="#0000BB">$user&nbsp;</font><font color="#007700">=&nbsp;array(<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"name"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"C"</font><font color="#007700">,&nbsp;&nbsp;</font><font color="#0000BB">10</font><font color="#007700">),<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"age"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">"N"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">3</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">),<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"address"</font><font color="#007700">,&nbsp;&nbsp;</font><font color="#DD0000">"C"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">256</font><font color="#007700">),<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"birthday"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"D"</font><font color="#007700">),<br>&nbsp;&nbsp;array(</font><font color="#DD0000">"sex"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"L"</font><font color="#007700">)<br>);<br>if&nbsp;(!</font><font color="#0000BB">dbase_create</font><font color="#007700">(</font><font color="#0000BB">$dbname</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$user</font><font color="#007700">))<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"�޷�����ʹ�������ϱ�"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-dba_sync.php" alt="function.php?dba_sync">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-dbase_open.php" alt="function.php?dbase_open">��һҳ</a> 
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
