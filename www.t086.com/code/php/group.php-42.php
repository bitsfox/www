<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - PostgreSQL ���ݿ⺯����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>PostgreSQL ���ݿ⺯����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 32 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>Postgres ���ݿ����ɰؿ�����ѧ���Կ�ѧϵ�����������ݿ�ϵͳ��Ϊ�����ʽ���ݿ�����������ṩ 
              SQL92/SQL3 �﷨��PostgreSQL �ǹ���ʹ�õ����ϵͳ������ϸ�ڿ��� <a href="/to.asp?url=http://www.postgresql.org/" tppabs="/to.asp?url=http://www.postgresql.org/">http://www.PostgreSQL.org</a> 
              վ�Ͽ�����
              <p> �� phpWizard.net ��վ��Ҳ���� Browser ���� PostgreSQL ����װ���� <a href="/to.asp?url=http://www.phpwizard.net/PostgresAdmin/" tppabs="/to.asp?url=http://www.phpwizard.net/PostgresAdmin/">PostgresAdmin</a>���������������ɹ��� 
                PostgreSQL ���ݿ⡣
              <p>

�ڹ�Ԫ 1998 ��� PostgreSQL 6.3 ��֮�󣬿���ʹ�� UNIX �ϵ� domain sockets��postmaster ���ϲ��� -i �Ϳ���ʹ�ã�PostgreSQL ϵͳ���õ� /tmp/.s.PGSQL.5432 ���ļ���<p>

����Ϊʹ�� LOB (Large Object) ������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$database&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_Connect&nbsp;</font><font color="#007700">(</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">""</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"jacarta"</font><font color="#007700">);<br></font><font color="#0000BB">pg_exec&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"begin"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$oid&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_locreate&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;(</font><font color="#DD0000">"$oid</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$handle&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">pg_loopen&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$oid</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;(</font><font color="#DD0000">"$handle</font><font color="#007700">\n</font><font color="#DD0000">"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">pg_lowrite&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"gaga"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">pg_loclose&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">pg_exec&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"commit"</font><font color="#007700">)<br></font><font color="#0000BB">pg_exec&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$database</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"end"</font><font color="#007700">)<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-pg_Close.php" alt="function.php?pg_Close">pg_Close</a>:</td><td valign=top>�ر� PostgreSQL ���������ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_cmdTuples.php" alt="function.php?pg_cmdTuples">pg_cmdTuples</a>:</td><td valign=top>ȡ�ñ� SQL ָ��Ӱ������ϱ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Connect.php" alt="function.php?pg_Connect">pg_Connect</a>:</td><td valign=top>�� PostgreSQL ���������ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_DBname.php" alt="function.php?pg_DBname">pg_DBname</a>:</td><td valign=top>ȡ��Ŀǰ�����ݿ����ơ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_ErrorMessage.php" alt="function.php?pg_ErrorMessage">pg_ErrorMessage</a>:</td><td valign=top>���ش�����Ϣ��</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Exec.php" alt="function.php?pg_Exec">pg_Exec</a>:</td><td valign=top>ִ�� query ָ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Fetch_Array.php" alt="function.php?pg_Fetch_Array">pg_Fetch_Array</a>:</td><td valign=top>�����������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Fetch_Object.php" alt="function.php?pg_Fetch_Object">pg_Fetch_Object</a>:</td><td valign=top>���������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Fetch_Row.php" alt="function.php?pg_Fetch_Row">pg_Fetch_Row</a>:</td><td valign=top>���ص��еĸ��ֶΡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldIsNull.php" alt="function.php?pg_FieldIsNull">pg_FieldIsNull</a>:</td><td valign=top>����ֶ��Ƿ������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldName.php" alt="function.php?pg_FieldName">pg_FieldName</a>:</td><td valign=top>����ָ���ֶε����ơ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldNum.php" alt="function.php?pg_FieldNum">pg_FieldNum</a>:</td><td valign=top>ȡ��ָ���ֶε�������</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldPrtLen.php" alt="function.php?pg_FieldPrtLen">pg_FieldPrtLen</a>:</td><td valign=top>�������ʾ�ĳ��ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldSize.php" alt="function.php?pg_FieldSize">pg_FieldSize</a>:</td><td valign=top>����ָ���ֶεĳ��ȡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FieldType.php" alt="function.php?pg_FieldType">pg_FieldType</a>:</td><td valign=top>���Ŀǰ�ֶε����͡�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_FreeResult.php" alt="function.php?pg_FreeResult">pg_FreeResult</a>:</td><td valign=top>�ͷŷ���ռ���ڴ档</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_GetLastOid.php" alt="function.php?pg_GetLastOid">pg_GetLastOid</a>:</td><td valign=top>ȡ����������롣</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Host.php" alt="function.php?pg_Host">pg_Host</a>:</td><td valign=top>ȡ�����ӻ������ơ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_loclose.php" alt="function.php?pg_loclose">pg_loclose</a>:</td><td valign=top>�رմ����ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_locreate.php" alt="function.php?pg_locreate">pg_locreate</a>:</td><td valign=top>���������ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_loopen.php" alt="function.php?pg_loopen">pg_loopen</a>:</td><td valign=top>�򿪴����ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_loread.php" alt="function.php?pg_loread">pg_loread</a>:</td><td valign=top>��ȡ�����ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_loreadall.php" alt="function.php?pg_loreadall">pg_loreadall</a>:</td><td valign=top>��ȡ�����ಢ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_lounlink.php" alt="function.php?pg_lounlink">pg_lounlink</a>:</td><td valign=top>ɾ�������ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_lowrite.php" alt="function.php?pg_lowrite">pg_lowrite</a>:</td><td valign=top>��ȡ�����ࡣ</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_NumFields.php" alt="function.php?pg_NumFields">pg_NumFields</a>:</td><td valign=top>ȡ�÷����ֶε���Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_NumRows.php" alt="function.php?pg_NumRows">pg_NumRows</a>:</td><td valign=top>ȡ�÷����е���Ŀ��</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Options.php" alt="function.php?pg_Options">pg_Options</a>:</td><td valign=top>ȡ�����ӻ���ѡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_pConnect.php" alt="function.php?pg_pConnect">pg_pConnect</a>:</td><td valign=top>�� PostgreSQL �������������ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Port.php" alt="function.php?pg_Port">pg_Port</a>:</td><td valign=top>ȡ�����ӻ������š�</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_Result.php" alt="function.php?pg_Result">pg_Result</a>:</td><td valign=top>ȡ�ò�ѯ (query) �Ľ����</td></tr>
<tr><td align=right valign=top><a href="function.php-pg_tty.php" alt="function.php?pg_tty">pg_tty</a>:</td><td valign=top>ȡ�����ӻ����ն˻���</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-41.php" alt="group.php?41">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-43.php" alt="group.php?43">��һҳ</a> 
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
