<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - switch ѭ��</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center><table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>switch ѭ��</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

switch ѭ����ͨ��������ʽ�������жϣ�ÿ�������������� case ָ��֡���ʵ������ʹ��������Ƶ� if ָ����Խ����ۺϳ� switch ѭ����<p>

�﷨����<p>

<pre>
switch (expr) {
  case expr1:
    statement1;
    break;
  case expr2:
    statement2;
    break;
    :
    :
  default:
    statementN;
    break;
}
</pre><p>

���е� expr ������ͨ��Ϊ�������ơ��� case ��� exprN��ͨ����ʾ����ֵ��ð�ź���Ϊ���ϸ�����Ҫִ�еĲ��֡�ע��Ҫ�� break ����ѭ����<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">switch&nbsp;(</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">"D"</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Mon"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"��������һ"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Tue"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"�������ڶ�"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Wed"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"����������"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Thu"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"����������"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;case&nbsp;</font><font color="#DD0000">"Fri"</font><font color="#007700">:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"����������"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;default:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"����ż�"</font><font color="#007700">;<br>
          &nbsp;&nbsp;&nbsp;&nbsp;break;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

�����Եģ������������� if ѭ���ͺ��鷳�ˡ���Ȼ�����ʱ��Ҫ�����ֻ�����������������ǰ�棬���ٳ��ֵ�������������棬�������ӳ����ִ��Ч�ʡ���������ÿ����ֵĻ�����ͬ�����Բ���ע��������˳��

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.3.php.php" alt="3.4.3.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="3.4.5.php.php" alt="3.4.5.php">��һҳ</a> 
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
