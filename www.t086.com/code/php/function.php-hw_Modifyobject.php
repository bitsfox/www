<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:hw_Modifyobject()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:hw_Modifyobject()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-19.php" alt="group.php?19">Hyperwave ������������</a></div><br><h1><font color=0000bb>hw_Modifyobject</font></h1><p>
�޸����¼��<p>
<font color=ff8000>�﷨:</font> <b>boolean hw_modifyobject(int connection, int object_to_change, array remove, array add, int [mode]);</b><p>
<font color=ff8000>����ֵ:</font> ����ֵ<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������������Ƴ������Ӽ��޸��ࡣ���� connection Ϊ�� Hyperwave �����������Ӵ��롣���� object_to_change Ϊ���޸ĵ��ࡣ���� remove �� add �ֱ�ΪҪ�Ƴ��������������ʾ������ mode ͨ��ʡ�ԣ���Ҫ�ݻ��޸ģ���ò�����Ϊ 1���ɹ��򷵻� true��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
��һ:&nbsp;�޸�����<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;֮ǰ�ĳ���ʡ��<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Name"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"books"</font><font color="#007700">);<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Name"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"articles"</font><font color="#007700">);<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;֮��ĳ���ʡ��<br></font><font color="#0000BB">?&gt;<br></font><br><br>����:&nbsp;��������<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;֮ǰ�ĳ���ʡ��<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Name"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Name"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"articles"</font><font color="#007700">);<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;֮��ĳ���ʡ��<br></font><font color="#0000BB">?&gt;<br></font><br><br>����:&nbsp;�޸�&nbsp;title&nbsp;����<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;֮ǰ�ĳ���ʡ��<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"en:Books"</font><font color="#007700">);<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"en:Articles"</font><font color="#007700">);<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;֮��ĳ���ʡ��<br></font><font color="#0000BB">?&gt;<br></font><br><br>����:&nbsp;�޸�&nbsp;title&nbsp;����<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;֮ǰ�ĳ���ʡ��<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;array(</font><font color="#DD0000">"en"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"Books"</font><font color="#007700">));<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;array(</font><font color="#DD0000">"en"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"Articles"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"ge"</font><font color="#007700">=&gt;</font><font color="#DD0000">"Artikel"</font><font color="#007700">));<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;֮��ĳ���ʡ��<br></font><font color="#0000BB">?&gt;<br></font><br><br>����:&nbsp;�Ƴ�����<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;֮ǰ�ĳ���ʡ��<br></font><font color="#0000BB">$remarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">""</font><font color="#007700">);<br></font><font color="#0000BB">$addarr&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">"Title"&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">"en:Articles"</font><font color="#007700">);<br></font><font color="#0000BB">$hw_modifyobject</font><font color="#007700">(</font><font color="#0000BB">$connect</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$objid</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$remarr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$addarr</font><font color="#007700">);<br></font><font color="#FF8000">//&nbsp;֮��ĳ���ʡ��<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-hw_InsertObject.php" alt="function.php?hw_InsertObject">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-hw_New_Document.php" alt="function.php?hw_New_Document">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
