<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:error_reporting()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:error_reporting()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-22.php" alt="group.php?22">PHP ѡ������Ϣ������</a></div><br><h1><font color=0000bb>error_reporting</font></h1><p>
���ô�����Ϣ�ر��ĵȼ���<p>
<font color=ff8000>�﷨:</font> <b>int error_reporting(int [level]);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> PHP ϵͳ����<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������������ô�����Ϣ�ر��ĵȼ������� level ��һ��������λ���� (bitmask)�����±�<p>

<table border=1>
<tr><th>����ֵ</th><th>��ʾ����</th></tr>
<tr><td>1</td><td>E_ERROR</td></tr>
<tr><td>2</td><td>E_WARNING</td></tr>
<tr><td>4</td><td>E_PARSE</td></tr>
<tr><td>8</td><td>E_NOTICE</td></tr>
<tr><td>16</td><td>E_CORE_ERROR</td></tr>
<tr><td>32</td><td>E_CORE_WARNING</td></tr>
</table><p>

<ul type=disc>
<li>E_NOTICE ��ʾһ�����β���¼��ֻ�г����д�������ʱ���õ���������ͼ��ȡһ�������ڵı��������Ǻ��� <a href="function.php-stat.php" alt="function.php?stat">stat()</a> �������Ӳ����ڵ��ļ���
<li>E_WARNING ͨ��������ʾ�������������жϳ����ִ�С���Գ������Ч�����磺���������������ʽ���� <a href="function.php-ereg.php" alt="function.php?ereg">ereg()</a>��
<li>E_ERROR ͨ������ʾ����������жϳ���ִ�С��⼴����������޷�׷�鵽�ڴ����û������Ĵ���
<li>E_PARSE ���﷨�н�������
<li>E_CORE_ERROR ���� E_ERROR���������� PHP ������ɵĴ���
<li>E_CORE_WARNING ���� E_WARNING���������� PHP ���Ĵ��󾯸档
</ul><p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-error_log.php" alt="function.php?error_log">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-getenv.php" alt="function.php?getenv">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
