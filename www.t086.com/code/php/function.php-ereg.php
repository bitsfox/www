<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ereg()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ereg()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-43.php" alt="group.php?43">������ʽ������</a></div><br><h1><font color=0000bb>ereg</font></h1><p>
�ַ����ȶԽ�����<p>
<font color=ff8000>�﷨:</font> <b>int ereg(string pattern, string string, array [regs]);</b><p>
<font color=ff8000>����ֵ:</font> ����/����<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������� pattern �Ĺ����������ȶ��ַ��� string���ȶԽ�����ص�ֵ����������� regs ֮�У�regs[0] ���ݾ���ԭ�ַ��� string��regs[1] Ϊ��һ���Ϻ�������ַ�����regs[2] ���ǵڶ����Ϻ�������ַ����������ơ���ʡ�Բ��� regs����ֻ�ǵ����رȶԣ��ҵ��򷵻�ֵΪ true��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
���������&nbsp;markus@dnet.it&nbsp;��&nbsp;14-Jun-1999&nbsp;������ģ��ɶ�ʹ���������&nbsp;E-Mail&nbsp;���򵥵ļ�飬���ʹ���ߵ�&nbsp;E-Mail&nbsp;�ַ����Ƿ���&nbsp;@&nbsp;�ַ�����&nbsp;@&nbsp;�ַ�ǰ��Ӣ����ĸ�����֣���֮���������ַ���������С�����ֻ���ж���������Ӣ����ĸ��super@mail.wilson.gs&nbsp;�Ϳ���ͨ����飬super@mail.wilson&nbsp;�Ͳ���ͨ����顣<br><br><font color="#0000BB">&lt;?php<br></font><font color="#007700">if&nbsp;(</font><font color="#0000BB">eregi</font><font color="#007700">(</font><font color="#DD0000">"^</font><font color="#007700">[</font><font color="#DD0000">_\.0-9a-z-</font><font color="#007700">]</font><font color="#DD0000">+@(</font><font color="#007700">[</font><font color="#DD0000">0-9a-z</font><font color="#007700">][</font><font color="#DD0000">0-9a-z-</font><font color="#007700">]</font><font color="#DD0000">+\.)+</font><font color="#007700">[</font><font color="#DD0000">a-z</font><font color="#007700">]{</font><font color="#DD0000">2,3</font><font color="#007700">}$</font><font color="#DD0000">"</font><font color="#007700">,</font><font color="#0000BB">$email</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"����&nbsp;E-Mail&nbsp;ͨ���������"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-ereg_replace.php" alt="function.php?ereg_replace">ereg_replace()</a> &nbsp;<a href="function.php-eregi.php" alt="function.php?eregi">eregi()</a> &nbsp;<a href="function.php-eregi_replace.php" alt="function.php?eregi_replace">eregi_replace()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[ </td> <td> <a href="function.php-ereg_replace.php" alt="function.php?ereg_replace">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
