<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - ����:pack()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>����:pack()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-30.php" alt="group.php?30">�������</a></div><br><h1><font color="0000bb">pack</font></h1><p>
ѹ�����ϵ�λ�ַ���֮�С�<p>
<font color="ff8000">�﷨:</font> <b>string pack(string format, mixed [args]...);</b><p>
<font color="ff8000">����ֵ:</font> �ַ���<p>
<font color="ff8000">��������:</font> ���ϴ���<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">����˵��</font></td></tr></table><p>����������������ѹ�������λ���ַ���֮�С��������� Perl ��ͬ�����������÷���ȫ��ͬ������ format Ϊѹ���ĸ�ʽ�����±�<p>

<table border="1">
<tr><td>a</td><td>���ַ����հ��� NULL �ַ�����</td></tr>
<tr><td>A</td><td>���ַ����հ��� SPACE �ַ� (�ո�) ����</td></tr>
<tr><td>h</td><td>ʮ����λ�ַ�������λ��ǰ</td></tr>
<tr><td>H</td><td>ʮ����λ�ַ�������λ��ǰ</td></tr>
<tr><td>c</td><td>�к��ַ�</td></tr>
<tr><td>C</td><td>�޺��ַ�</td></tr>
<tr><td>s</td><td>�кŶ����� (ʮ��λ�����������λ˳��)</td></tr>
<tr><td>S</td><td>�޺Ŷ����� (ʮ��λ�����������λ˳��)</td></tr>
<tr><td>n</td><td>�޺Ŷ����� (ʮ��λ, ��λ�ں��˳��)</td></tr>
<tr><td>v</td><td>�޺Ŷ����� (ʮ��λ, ��λ�ں��˳��)</td></tr>
<tr><td>i</td><td>�к����� (���������˳�򼰷�Χ)</td></tr>
<tr><td>I</td><td>�޺����� (���������˳�򼰷�Χ)</td></tr>
<tr><td>l</td><td>�кų����� (ئ��λ�����������λ˳��)</td></tr>
<tr><td>L</td><td>�޺ų����� (ئ��λ�����������λ˳��)</td></tr>
<tr><td>N</td><td>�޺Ŷ����� (ئ��λ, ��λ�ں��˳��)</td></tr>
<tr><td>V</td><td>�޺Ŷ����� (ئ��λ, ��λ�ں��˳��)</td></tr>
<tr><td>f</td><td>����ȷ������ (��������ķ�Χ)</td></tr>
<tr><td>d</td><td>����ȷ������ (��������ķ�Χ)</td></tr>
<tr><td>x</td><td>��λ</td></tr>
<tr><td>X</td><td>����һλ</td></tr>
<tr><td>@</td><td>���� NULL �ַ�������λ��</td></tr>
</table><p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">print(</font><font color="#0000BB">pack</font><font color="#007700">(</font><font color="#DD0000">&quot;cccc&quot;</font><font color="#007700">,&nbsp;</font><font color="#0000BB">65</font><font color="#007700">,&nbsp;</font><font color="#0000BB">66</font><font color="#007700">,&nbsp;</font><font color="#0000BB">67</font><font color="#007700">,&nbsp;</font><font color="#0000BB">68</font><font color="#007700">));<br>echo&nbsp;</font><font color="#DD0000">&quot;&lt;br&gt;\n&quot;</font><font color="#007700">;<br>print(</font><font color="#0000BB">pack</font><font color="#007700">(</font><font color="#DD0000">&quot;h10&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;778899aabb&quot;</font><font color="#007700">));<br>echo&nbsp;</font><font color="#DD0000">&quot;&lt;br&gt;\n&quot;</font><font color="#007700">;<br>print(</font><font color="#0000BB">pack</font><font color="#007700">(</font><font color="#DD0000">&quot;H10&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;778899aabb&quot;</font><font color="#007700">));<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="pack.gif" alt="img/pack.gif" WIDTH="355" HEIGHT="144"></div>
        <p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">�ο�</font></td></tr></table><p><a href="function.php-unpack.php" alt="function.php?unpack">unpack()</a> &nbsp;<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-leak.php" alt="function.php?leak">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-register_shutdown_function.php" alt="function.php?register_shutdown_function">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
