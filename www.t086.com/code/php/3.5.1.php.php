<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

�� PHP �У������������߽����õ����̻��߱�����Ԫ������֯��һ���̶��ĸ�ʽ��Ҳ����˵�û�����������Ϻ����������ࡣ<p>

PHP �еĺ��� (function) �� C ����һ���������з���ֵ�ļ��޷���ֵ�ģ����� Pascal �ֳɺ��� (function) �ͳ��� (procedure) ��ô���ӡ�<p>

�ں����������ϣ�PHP ���ڴ�Сд�Ĺ��ƺ���ɢ�������ڶ��庯��ʱд�ɴ�д�����֣�����ʹ��ʱʹ��Сд�����֡���֮���Ժ������ԣ����ùܴ�Сд��ֻҪע������û���ظ��ͺ��ˡ�<p>

���¾��Ǻ�����ʹ���﷨<p>

<pre>
function myfunc($arg_1, $arg_2, ..., $arg_n) {
  // ִ��һЩ����
  return $retval;
}
</pre><p>

��ʹ��ʱ�����Զ��ĺ�������ǰҪ���� function �ı����֣���ʾ���Ƕ����û��Զ�������֮��� myfunc �������κε�Ӣ����ĸ��ͷ���ַ������ַ������˿�ͷ���������ֻ����»��ߣ��ڵ�һ����ĸ������ǰ��������ֻ������»��ߣ���Ȼ�����ķ��Ż��������ֲ��ܵ���������<p>

$arg_1 �� $arg_n Ϊ����ʹ�õĲ���������֮��ʹ�ö��Ÿ������ڲ�����Ĵ����� {}����Ϊ���������Ĳ��֡������������ֵ��ʹ�� return �ɽ�ֵ���ء��������������ȶ����ʼֵ��Ĭ��ֵ���ж���Ĭ��ֵ�Ĳ�����ʹ�ú���ʱ����ʡ�ԣ���һ��Ҫ����û������Ĭ��ֵ�����ĺ��棬���� PHP �ڽ�������ʱ������ִ���<p>

������ǲ��������ͣ�ֻҪ������ PHP ֧�ֵı������Ͷ�����ʹ�ã����������顢�ַ�������������....�ȵȡ�����ֵҲ��һ����<p>

���漴Ϊʹ��Ĭ��ֵ������Ĭ��ֵ������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc1</font><font color="#007700">(</font><font color="#0000BB">$arg_1</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$arg_2</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$arg_3</font><font color="#007700">=</font><font color="#DD0000">"����Ĭ���ַ���"</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$arg_1</font><font color="#007700">+</font><font color="#0000BB">$arg_2</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$arg_3</font><font color="#007700">.</font><font color="#DD0000">"&lt;p&gt;\n"</font><font color="#007700">;<br>}<br><br></font><font color="#0000BB">myfunc</font><font color="#007700">(</font><font color="#0000BB">3</font><font color="#007700">,&nbsp;</font><font color="#0000BB">4</font><font color="#007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;����&nbsp;$arg_3&nbsp;ʡ�ԡ�<br></font><font color="#0000BB">myfunc</font><font color="#007700">(</font><font color="#0000BB">6</font><font color="#007700">,&nbsp;</font><font color="#0000BB">6</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"����Ĭ��ֵ"</font><font color="#007700">)&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;�������&nbsp;$arg_3��<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

������ֵ��ͨ��ʹ�ô�ֵ�ķ�ʽ���룬��ʱ��ֵ�õ�����ʱ������ʹ�ô�ַ�ķ�ʽ�����������ָ�롣���������ڲ�����ǰ����� & ���ż��ɡ�������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc2</font><font color="#007700">(&amp;</font><font color="#0000BB">$argstr</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$argstr</font><font color="#007700">=</font><font color="#0000BB">ereg_replace</font><font color="#007700">(</font><font color="#DD0000">"/"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"-"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$argstr</font><font color="#007700">);<br>}<br><br></font><font color="#0000BB">$today</font><font color="#007700">=</font><font color="#DD0000">"2000/01/01"</font><font color="#007700">;<br></font><font color="#0000BB">myfunc2</font><font color="#007700">(</font><font color="#0000BB">$today</font><font color="#007700">);<br>echo&nbsp;</font><font color="#0000BB">$today</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;2000-01-01;<br></font><font color="#0000BB">?&gt;<br></font>
</font>

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.5.php.php" alt="3.4.5.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="3.5.2.php.php" alt="3.5.2.php">��һҳ</a> 
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
