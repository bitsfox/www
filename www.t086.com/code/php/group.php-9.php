<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - DBA ������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>

<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>DBA ������</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 12 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>�ڰؿ����� BSD ϵ�в���ϵͳ�У��и��򵥵����ݿ�ṹ�����������ļ���ɳ�С�͵����ݿ�ϵͳ���ܹ��ɳ���� (abstraction layer) �� DBA ���ݿ⡣<p>

Ŀǰ PHP ֧�ֵ� DBA ���ݿ����
<ol type=1>
<li>dbm���ؿ�����չ�������� DBA ���ݿ⡣
<li>ndbm�������ҽ��е��Ե� DBA��
                <li>gdbm��GNU ��չ�� DBA��<a href="/to.asp?url=ftp://ftp.gnu.org/pub/gnu/gdbm/" tppabs="/to.asp?url=ftp://ftp.gnu.org/pub/gnu/gdbm/">ftp://ftp.gnu.org/pub/gnu/gdbm/</a> 
                <li>db2���� Sleepycat ��������� DB2 (�� IBM �� DB2)��<a href="/to.asp?url=http://www.sleepycat.com/" tppabs="/to.asp?url=http://www.sleepycat.com/">http://www.sleepycat.com</a> 
                <li>cdb������ qmail ���߿������ٿɿ��� DBA��<a href="/to.asp?url=http://pobox.com/%7Edjb/cdb.html" tppabs="/to.asp?url=http://pobox.com/~djb/cdb.html">http://pobox.com/~djb/cdb.html</a> 
              </ol><p>

�����Ǽ򵥵�ʹ�÷�������Ȼ��ʹ��ǰ��������װ�� DBA��<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">dba_open</font><font color="#007700">(</font><font color="#DD0000">"/tmp/test.db"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"n"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"db2"</font><font color="#007700">);<br><br>if(!</font><font color="#0000BB">$id</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"dba_open&nbsp;failed\n"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>}<br><br></font><font color="#0000BB">dba_replace</font><font color="#007700">(</font><font color="#DD0000">"key"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"This&nbsp;is&nbsp;an&nbsp;example!"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">);<br><br>if(</font><font color="#0000BB">dba_exists</font><font color="#007700">(</font><font color="#DD0000">"key"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">dba_fetch</font><font color="#007700">(</font><font color="#DD0000">"key"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">dba_delete</font><font color="#007700">(</font><font color="#DD0000">"key"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">);<br>}<br><br></font><font color="#0000BB">dba_close</font><font color="#007700">(</font><font color="#0000BB">$id</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td><td valign="top"></td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-dba_close.php" alt="function.php?dba_close">dba_close</a>:</td><td valign=top>�ر����ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_delete.php" alt="function.php?dba_delete">dba_delete</a>:</td><td valign=top>ɾ��ָ�����ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_exists.php" alt="function.php?dba_exists">dba_exists</a>:</td><td valign=top>�����Ƿ���ڡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_fetch.php" alt="function.php?dba_fetch">dba_fetch</a>:</td><td valign=top>ȡ��ָ�����ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_firstkey.php" alt="function.php?dba_firstkey">dba_firstkey</a>:</td><td valign=top>ȡ���ױʼ�ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_insert.php" alt="function.php?dba_insert">dba_insert</a>:</td><td valign=top>�������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_nextkey.php" alt="function.php?dba_nextkey">dba_nextkey</a>:</td><td valign=top>ȡ���±ʼ�ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_popen.php" alt="function.php?dba_popen">dba_popen</a>:</td><td valign=top>�򿪲��������ݿ����ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_open.php" alt="function.php?dba_open">dba_open</a>:</td><td valign=top>�����ݿ����ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_optimize.php" alt="function.php?dba_optimize">dba_optimize</a>:</td><td valign=top>��ѻ����ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_replace.php" alt="function.php?dba_replace">dba_replace</a>:</td><td valign=top>�Ķ���������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dba_sync.php" alt="function.php?dba_sync">dba_sync</a>:</td><td valign=top>���ݿ�ͬ������</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-8.php" alt="group.php?8">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-10.php" alt="group.php?10">��һҳ</a> 
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
