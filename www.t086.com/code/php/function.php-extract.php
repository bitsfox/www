<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - ����:extract()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>����:extract()</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>
<div align="right"><a href="group.php-30.php" alt="group.php?30">�������</a></div><br><h1><font color="0000bb">extract</font></h1><p>
�������鵽���ű�<p>
<font color="ff8000">�﷨:</font> <b>void extract(array var_array, int [extract_type], string [prefix]);</b><p>
<font color="ff8000">����ֵ:</font> ��<p>
<font color="ff8000">��������:</font> ���ϴ���<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">����˵��</font></td></tr></table><p>�����������������������Ŀǰʹ�õķ��ű�֮�С����� var_array Ϊ�������������������� extract_type Ϊ��������ͣ��ڶ�ֵΪ EXTR_OVERWRITE�����±�<p>

<table border="1">
<tr><td>EXTR_OVERWRITE</td><td>����ͬ�ı�������ȡ����֮��</td></tr>
<tr><td>EXTR_SKIP</td><td>����ͬ�ı��������Թ���ȡ����</td></tr>
<tr><td>EXTR_PREFIX_SAME</td><td>����ͬ�ı�������ȡ�±������ơ�</td></tr>
<tr><td>EXTR_PREFIX_ALL</td><td>ȫ��ȡ�µı������ơ�</td></tr>
</table><p>

���� prefix Ϊ���� extract_type ֵΪ EXTR_PREFIX_SAME ���� EXTR_PREFIX_ALL ʱ���������ڱ�������ǰ���ַ�����<p>
<p><table border="0" cellspacing="0" cellpadding="0" width="100%" height="1"><tr><td height="1" bgcolor="c0c0c0"><table border="0" cellspacing="0" cellpadding="0"><tr><td></td></tr></table></td></tr>
<tr><td align="left"><font color="ff8000">ʹ�÷���</font></td></tr></table><p><font color="#000000">
��������ֵΪ&nbsp;��ɫ,&nbsp;���,&nbsp;����,&nbsp;�кţ����е�&nbsp;size&nbsp;�������䡣<br><br><font color="#0000BB">&lt;?<br>$size&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;���&quot;</font><font color="#007700">;<br></font><font color="#0000BB">$var_array&nbsp;</font><font color="#007700">=&nbsp;array(</font><font color="#DD0000">&quot;color&quot;&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">&quot;��ɫ&quot;</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">&quot;size&quot;&nbsp;&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">&quot;�к�&quot;</font><font color="#007700">,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#DD0000">&quot;shape&quot;&nbsp;</font><font color="#007700">=&gt;&nbsp;</font><font color="#DD0000">&quot;����&quot;</font><font color="#007700">);<br></font><font color="#0000BB">extract</font><font color="#007700">(</font><font color="#0000BB">$var_array</font><font color="#007700">,&nbsp;</font><font color="#0000BB">EXTR_PREFIX_SAME</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;new&quot;</font><font color="#007700">);<br>print&nbsp;</font><font color="#DD0000">&quot;$color,&nbsp;$size,&nbsp;$shape,&nbsp;$new_size</font><font color="#007700">\n</font><font color="#DD0000">&quot;</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;</font>
</font>
<p>
        <div align="center"><img src="extract.gif" alt="img/extract.gif" WIDTH="360" HEIGHT="102"></div>
        <p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
<table border="0"><tr><td>[  <a href="function.php-eval.php" alt="function.php?eval">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-die.php" alt="function.php?die">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
