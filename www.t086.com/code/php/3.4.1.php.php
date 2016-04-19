<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - if..else ѭ��</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>if..else ѭ��</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

if..else ѭ�������ֽṹ<p>

��һ����ֻ���õ� if �����������������жϡ����ͳ� "��������ĳ������������"���﷨���£�<p>

<pre>
if (expr) {
  statement
}
</pre><p>

���е� expr Ϊ�жϵ�������ͨ���������߼�������� (logical operators) ���жϵ��������� statement Ϊ����������ִ�в��ֳ���������ֻ��һ�У�����ʡ�Դ����� {}��<p>

����������ʡ�Դ����š�<p>

<font color="#0000BB">&lt;?php</font><br>
<font color="#007700">if&nbsp;(</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"D"</font><font color="#007700">)&nbsp;==&nbsp;</font><font color="#DD0000">"Sat"</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"��ĩ�ˣ���ȥ"</font><font color="#007700">;</font><br>
<font color="#0000BB">?&gt;</font><p>

������������ִ�в��������У�����ʡ�Դ����š�<p>

<font color="#0000BB">&lt;?php</font><br>
<font color="#007700">if&nbsp;(</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#DD0000">"/usr/local/lib/php3.ini"</font><font color="#007700">))&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"������&nbsp;PHP3&nbsp;�������ļ�&lt;p&gt;&lt;pre&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;</font><font color="#0000BB">readfile</font><font color="#007700">(</font><font color="#DD0000">"/usr/local/lib/php3.ini"</font><font color="#007700">);<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/pre&gt;\n"</font><font color="#007700">;<br>
}<br>
</font><font color="#0000BB">?&gt;</font>

<p><hr size=1 width=100%><p>

�������ǳ��� if ֮�⣬������ else ���������ɽ��ͳ� "��������ĳ�������������������ν��"���﷨����<p>

<pre>
if (expr) {
  statement1
} else {
  statement2
}
</pre>

������������������޸ĳɸ������Ĵ������е� else ����ֻ��һ��ִ�е�ָ���˲��ü��ϴ����š�<p>

<font color="#0000BB">&lt;?php<br>
$f</font><font color="#007700">=</font><font color="#DD0000">"/usr/local/lib/php3.ini"</font><font color="#007700">;<br>
if&nbsp;(</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$f</font><font color="#007700">))&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"������&nbsp;PHP3&nbsp;�������ļ�&lt;p&gt;&lt;pre&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;</font><font color="#0000BB">readfile</font><font color="#007700">(</font><font color="#0000BB">$f</font><font color="#007700">);<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/pre&gt;\n"</font><font color="#007700">;<br>
}&nbsp;else&nbsp;echo&nbsp;</font><font color="#DD0000">"�ܱ�Ǹ���Ҳ���&nbsp;$f"</font><font color="#007700">;</font><br>
<font color="#0000BB">?&gt;</font>

<p><hr size=1 width=100%><p>

�����־��ǵݹ�� if..else ѭ����ͨ�����ڶ��־����ж�ʱ���������� if..else �����ϲ����ô���<p>

ֱ�ӿ����������<p>

<font color="#0000BB">&lt;?php<br>
</font><font color="#007700">if&nbsp;(</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">&gt;&nbsp;</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"a&nbsp;��&nbsp;b&nbsp;��"</font><font color="#007700">;<br>
}&nbsp;elseif&nbsp;(</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">==&nbsp;</font><font color="#0000BB">$b</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;&nbsp;</font><font color="#DD0000">"a&nbsp;����&nbsp;b"</font><font color="#007700">;<br>
}&nbsp;else&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"a&nbsp;��&nbsp;b&nbsp;С"</font><font color="#007700">;<br>
}</font><br>
<font color="#0000BB">?&gt;</font><p>

����ֻ�ö���� if..else ѭ���������Ƚ� a �� b ����������ʵ��Ҫʹ�����ֵݹ� if..else ѭ��ʱ����С��ʹ�ã���Ϊ̫����ѭ������ʹ��Ƶ��߼������⣬�����ٴ��˴����ŵȣ�������ɳ������Ī����������⡣

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.php.php" alt="3.4.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="3.4.2.php.php" alt="3.4.2.php">��һҳ</a> 
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
