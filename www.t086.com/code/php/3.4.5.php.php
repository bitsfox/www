<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ���������̿���</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>���������̿���</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

������������̿���ָ��֮�⣬���� break �� continue �������̿���ָ�<p>

break ��������Ŀǰִ�е�ѭ����������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">10</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$arr</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">]&nbsp;==&nbsp;</font><font color="#DD0000">"stop"</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>

<p><hr size=1 width=100%><p>

continue ����ֹͣĿǰִ��ѭ�������ص�ѭ���������жϴ���������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">while&nbsp;(list(</font><font color="#0000BB">$key</font><font color="#007700">,</font><font color="#0000BB">$value</font><font color="#007700">)&nbsp;=&nbsp;</font><font color="#0000BB">each</font><font color="#007700">(</font><font color="#0000BB">$arr</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$key&nbsp;</font><font color="#007700">%&nbsp;</font><font color="#0000BB">2</font><font color="#007700">)&nbsp;{&nbsp;</font><font color="#FF8000">//&nbsp;�Թ�ż��<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">continue;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;</font><font color="#0000BB">do_something_odd&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$value</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

�� BASIC ���õ� goto �� C �� Borland Pascal �л������ʹ�á����� PHP �У��������� Web Server Script �����Լ��ṹ������ɣ��������� PHP ��ʹ�� goto ѭ��ָ��?

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.4.php.php" alt="3.4.4.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="3.5.1.php.php" alt="3.5.1.php">��һҳ</a> 
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
