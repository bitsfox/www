<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - dbm �����ݿ⺯����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>dbm �����ݿ⺯����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 10 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>dbm Ϊ�ؿ�����ѧ����չ���ļ������ݿ⡣��ʹ�ñ�����������Ҫ�Ȱ�װ��ص� DBM �����ݣ���Ȼ�� BSD ϵ�еĲ���ϵͳ���Ѿ�װ�õľͲ������ж����ˡ�<p>

dbm �����ϴ�ȡû�кܸ��ӵ��ֶΣ���ֻ�е����ļ�/ֵ (key/value) ���ֶΡ�<p>

����Ϊ�򵥵� dbm ʹ�÷���<p>

<font color="#000000">
<font color="#0000BB">&lt;?<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">do_stuff</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��ȥ���ӵ����ϴ�������<br></font><font color="#007700">}<br></font><font color="#0000BB">$dbm&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">dbmopen</font><font color="#007700">(</font><font color="#DD0000">"lastseen"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br>if&nbsp;(</font><font color="#0000BB">dbmexists</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$last_seen&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">dbmfetch</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">);<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">dbminsert</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">time</font><font color="#007700">());<br>}<br></font><font color="#0000BB">do_stuff</font><font color="#007700">();<br></font><font color="#0000BB">dbmreplace</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$userid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">time</font><font color="#007700">());<br></font><font color="#0000BB">dbmclose</font><font color="#007700">(</font><font color="#0000BB">$dbm</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-dbmopen.php" alt="function.php?dbmopen">dbmopen</a>:</td><td valign=top>�� DBM ���ݿ����ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmclose.php" alt="function.php?dbmclose">dbmclose</a>:</td><td valign=top>�ر� DBM ���ݿ⡣</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmexists.php" alt="function.php?dbmexists">dbmexists</a>:</td><td valign=top>�����Ƿ���ڡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmfetch.php" alt="function.php?dbmfetch">dbmfetch</a>:</td><td valign=top>ȡ��ָ�����ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dbminsert.php" alt="function.php?dbminsert">dbminsert</a>:</td><td valign=top>�������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmreplace.php" alt="function.php?dbmreplace">dbmreplace</a>:</td><td valign=top>�Ķ���������ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmdelete.php" alt="function.php?dbmdelete">dbmdelete</a>:</td><td valign=top>ɾ��ָ�����ϡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmfirstkey.php" alt="function.php?dbmfirstkey">dbmfirstkey</a>:</td><td valign=top>ȡ���ױʼ�����</td></tr>
<tr><td align=right valign=top><a href="function.php-dbmnextkey.php" alt="function.php?dbmnextkey">dbmnextkey</a>:</td><td valign=top>ȡ���±ʼ�ֵ��</td></tr>
<tr><td align=right valign=top><a href="function.php-dblist.php" alt="function.php?dblist">dblist</a>:</td><td valign=top>ȡ�� DBM ����Ϣ��</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-10.php" alt="group.php?10">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-12.php" alt="group.php?12">��һҳ</a> 
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
