<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - Oracle ���ݿ⺯����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>Oracle ���ݿ⺯����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 22 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>Ҫʹ����������⣬Ҫ�ڰ�װ PHP �� Apache Server ֮ǰ�Ƚ� Oracle ���ݿⰲװ�ã���ȷ�� Oracle �ܹ�˳��������֮���� PHP ���� (configure) ʱ���� --with-oracle=DIR ��ѡ�DIR ���� $ORACLE_HOME �������������磺<p>

<code>  ./configure --with-oracle=/abc/def/oracle/product/7.0.3 --with-apache=../apache_1.3.x --enable-track-vars</code><p>

���µķ����� stevel@nettek-llc.com (22-Jan-1999) ���ṩ�ġ���������Ƿ��� Oracle �� sid1 ���ݿ� (Database) �� EMP ���ϱ� (Table) �������ϡ��ʺ��� SCOTT������Ϊ TIGER��<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br><br>putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=sid1"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/u01/app/oracle/product/8.0.5"</font><font color="#007700">);<br><br></font><font color="#0000BB">$handle&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ora_plogon</font><font color="#007700">(</font><font color="#DD0000">"SCOTT@sid1"</font><font color="#007700">,&nbsp;&nbsp;</font><font color="#DD0000">"TIGER"</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">$cursor&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">$query&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"SELECT&nbsp;*&nbsp;FROM&nbsp;EMP"</font><font color="#007700">;<br></font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br><br>echo&nbsp;&nbsp;</font><font color="#DD0000">"&lt;HTML&gt;&lt;PRE&gt;\n"</font><font color="#007700">;<br>echo&nbsp;&nbsp;</font><font color="#DD0000">"$query</font><font color="#007700">\n\n</font><font color="#DD0000">"</font><font color="#007700">;<br></font><font color="#0000BB">$numcols&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>while(</font><font color="#0000BB">ora_fetch</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$numcols&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ora_numcols</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</font><font color="#0000BB">$column</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$column&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">$numcols</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$column</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">trim</font><font color="#007700">(</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$column</font><font color="#007700">));<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">==&nbsp;&nbsp;</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;</font><font color="#0000BB">$data&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"NULL"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&nbsp;</font><font color="#DD0000">"$data</font><font color="#007700">\t</font><font color="#DD0000">"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;&nbsp;</font><font color="#DD0000">"\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">$numrows&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ora_numrows</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>echo&nbsp;&nbsp;</font><font color="#DD0000">"</font><font color="#007700">\n</font><font color="#DD0000">ROWS&nbsp;RETURNED:&nbsp;$numrows</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">;<br>echo&nbsp;&nbsp;</font><font color="#DD0000">"&lt;/PRE&gt;&lt;/HTML&gt;\n"</font><font color="#007700">;<br><br></font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br><br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

kk@shonline.de (05-Aug-1998) ָ�� ORACLE_HOME Ϊ Oracle �İ�װ·����ORACLE_SID Ϊ Oracle �����ݿ����ƣ�����֪��������������������� sqlplus ���� Oracle ����֤��<p>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-Ora_Bind.php" alt="function.php?Ora_Bind">Ora_Bind</a>:</td><td valign=top>���� PHP ������ Oracle ������</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Close.php" alt="function.php?Ora_Close">Ora_Close</a>:</td><td valign=top>�ر�һ�� Oracle �� cursor��</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_ColumnName.php" alt="function.php?Ora_ColumnName">Ora_ColumnName</a>:</td><td valign=top>�õ� Oracle ������ (Column) �����ơ�</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_ColumnType.php" alt="function.php?Ora_ColumnType">Ora_ColumnType</a>:</td><td valign=top>�õ� Oracle ������ (Column) �����͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Commit.php" alt="function.php?Ora_Commit">Ora_Commit</a>:</td><td valign=top>�� Oracle �Ľ��״�����ʵ�С�</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_CommitOff.php" alt="function.php?Ora_CommitOff">Ora_CommitOff</a>:</td><td valign=top>�ر��Զ�ִ�� Oracle ���׸Ķ��Ĺ��ܡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_CommitOn.php" alt="function.php?Ora_CommitOn">Ora_CommitOn</a>:</td><td valign=top>���Զ�ִ�� Oracle ���׸Ķ��Ĺ��ܡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Error.php" alt="function.php?Ora_Error">Ora_Error</a>:</td><td valign=top>��� Oracle ������Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_ErrorCode.php" alt="function.php?Ora_ErrorCode">Ora_ErrorCode</a>:</td><td valign=top>��� Oracle ������롣</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Exec.php" alt="function.php?Ora_Exec">Ora_Exec</a>:</td><td valign=top>ִ�� Oracle ��ָ��֡�</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Fetch.php" alt="function.php?Ora_Fetch">Ora_Fetch</a>:</td><td valign=top>ȡ�÷������ϵ�һ�� (row)��</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_GetColumn.php" alt="function.php?Ora_GetColumn">Ora_GetColumn</a>:</td><td valign=top>�ӷ����� (row) ������ȡ��һ�� (column)��</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Logoff.php" alt="function.php?Ora_Logoff">Ora_Logoff</a>:</td><td valign=top>������ Oracle �����ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Logon.php" alt="function.php?Ora_Logon">Ora_Logon</a>:</td><td valign=top>���� Oracle �����ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Open.php" alt="function.php?Ora_Open">Ora_Open</a>:</td><td valign=top>�� Oracle �� cursor��</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Parse.php" alt="function.php?Ora_Parse">Ora_Parse</a>:</td><td valign=top>���� SQL �﷨��</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Rollback.php" alt="function.php?Ora_Rollback">Ora_Rollback</a>:</td><td valign=top>������ǰ���ס�</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Do.php" alt="function.php?Ora_Do">Ora_Do</a>:</td><td valign=top>���ٵ� SQL ��ѯ��</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_FetchInto.php" alt="function.php?Ora_FetchInto">Ora_FetchInto</a>:</td><td valign=top>ȡ�� Oracle ���Ϸ������顣</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_ColumnSize.php" alt="function.php?Ora_ColumnSize">Ora_ColumnSize</a>:</td><td valign=top>ȡ���ֶ����͵Ĵ�С��</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_Numcols.php" alt="function.php?Ora_Numcols">Ora_Numcols</a>:</td><td valign=top>ȡ���ֶε���Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-Ora_PLogon.php" alt="function.php?Ora_PLogon">Ora_PLogon</a>:</td><td valign=top>���� Oracle �ĳ������ӡ�</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-38.php" alt="group.php?38">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-40.php" alt="group.php?40">��һҳ</a> 
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
