<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - do..while ѭ��</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>do..while ѭ��</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

do..while ���ظ�������ѭ�������Էֳ�����ģʽ��<p>

����ľ���ֻ�� while ��ѭ����������ָ���������ڣ����ϵ��ظ�ָ���Ĳ��衣�﷨����<p>

<pre>
while (expr) {
  statement
}
</pre><p>

���е� expr Ϊ�жϵ�������ͨ���������߼�������� (logical operators) ���жϵ��������� statement Ϊ����������ִ�в��ֳ���������ֻ��һ�У�����ʡ�Դ����� {}��<p>

��������Ȥ��Ҫ���Ե����������ʮ�� "�Ժ󲻸���" ���ַ�����ǰ�沢�������֣���ʾ˵�˵ڼ��β����ˡ�(�о������� Web Server �����±�����)<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;=&nbsp;</font><font color="#0000BB">10</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;print&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">".&nbsp;�Ժ󲻸���&lt;br&gt;\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

while ���Բ��ô���������סִ�в��֣���ʹ��ð�ż��� endwhile��������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$i&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>while&nbsp;(</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;=&nbsp;</font><font color="#0000BB">10</font><font color="#007700">):<br>&nbsp;&nbsp;print&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">".&nbsp;�Ժ󲻸���&lt;br&gt;\n"</font><font color="#007700">;<br>endwhile;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

����һ�� do..while ѭ������ִ�У����ж��Ƿ�Ҫ����ִ�У�Ҳ����˵ѭ������ִ��һ�Σ��е�������ն����ķ��������ֵ�ѭ�����͵��� while �ǲ�ͬ�� (���� while �����ж��ٴ���)���������� Pascal ���ԵĻ����ᷢ�� do..while ѭ������ Pascal �� repeat..until ѭ����<p>

do..whilte ���﷨����<p>

<pre>
do {
  statement
} while (expr);
</pre>

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.4.1.php.php" alt="3.4.1.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="3.4.3.php.php" alt="3.4.3.php">��һҳ</a> 
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
