<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:dba_open()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:dba_open()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-9.php" alt="group.php?9">DBA ������</a></div><br><h1><font color=0000bb>dba_open</font></h1><p>
�����ݿ����ӡ�<p>
<font color=ff8000>�﷨:</font> <b>int dba_open(string path, string mode, string handler);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ݿ⹦��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>������������ָ�������ݿ⡣���� path Ϊ���ݿ��·�������ݿ����ƣ����� "/tmp/mysite/wahaha.db"������ mode ֵ���±�<p>

<table border=1>
<tr><th>����</th><th>˵��</th></tr>
<tr><td>r</td><td>��ֻ���������ݿ�</td></tr>
<tr><td>w</td><td>�򿪿ɶ�д�������ݿ�</td></tr>
<tr><td>c</td><td>�򿪿ɶ�д���ݿ⣬������������</td></tr>
<tr><td>n</td><td>ɾȥ�������ݿ⣬��������������֮��ɶ�д</td></tr>
</table><p>

���� handler Ϊ�����ݿ�����࣬�� dbm��ndbm��gdbm��db2 �� cdb �����ࡣ����ֵΪ���ݿ�Ĵ��� ID����ʧ���򷵻� false���������� <a href="function.php-dba_popen.php" alt="function.php?dba_popen">dba_popen()</a> ��ͬ�ĵط����ڱ������򿪵����ݿ��� PHP ��������󼴹رգ�<a href="function.php-dba_popen.php" alt="function.php?dba_popen">dba_popen()</a> �ᱣ�������ݿ����ӣ����´���ִ�У��򲻱��ٴ������ݿ�����ӡ�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-dba_close.php" alt="function.php?dba_close">dba_close()</a> &nbsp;<a href="function.php-dba_popen.php" alt="function.php?dba_popen">dba_popen()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-dba_popen.php" alt="function.php?dba_popen">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-dba_optimize.php" alt="function.php?dba_optimize">��һҳ</a> 
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
