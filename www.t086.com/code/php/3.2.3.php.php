<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ������ʹ��</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>������ʹ��</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

����󲿷ݵĽṹ����������ν��ȫ�ֱ�����ֲ�������PHP ���ⷽ��Ҳ������ͬ�Ĵ���ʽ��<p>

�� PHP �ĳ���ִ��ʱ��ϵͳ�����ڴ��б���һ��ȫ�ֱ���������ʵ������ʱ������͸�� $GLOBALS["��������"] ����Ҫ�ı���ȡ�������û��Զ��ĺ���������У��Ϳ����� $GLOBALS ����ȡ����Ҫ�ı�������Ȼ������ PHP �ı����зִ�Сд������˴�Сд���ǽ�һ���꣬����Ҳ���������<p>

$GLOBALS ������ PHP �����бȽ�����ı��������ض��壬ϵͳ���Զ�ƥ����صı��������档�ں����У�Ҳ���ع� $GLOBALS �����Ƿ��Ѿ���ȫ�ֶ��壬�Ϳ���ֱ��ʹ���ˡ�<p>

�� $GLOBALS �������ƵĻ��� $php_errormsg �ַ����������� PHP �������ļ� (php.ini/php3.ini) �е� track_errors ѡ��򿪵Ļ�������ȫ�ֱ��� $php_errormsg ���Կ����������Ϣ��<p>

�� PHP �У�ȫ�ֱ�������Ч��Χ (scope) ��������Ҫ�����У�����Ӱ�쵽������ͬ���ı�����Ҳ����ȫ�ֱ�����ֲ����������ַ�����Ҫ������ͨ͸�������У���Ҫ�õ� $GLOBALS �������ʹ�� global ���塣<p>

���磬�����п����ĺ����У�Ҫȡ��Ŀǰִ�� PHP ����ҳ����ļ������Ϳ����� $GLOBALS["PHP_SELF"] ȡ�� $PHP_SELF ��ֵ��<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;������ʹ��&nbsp;$GLOBALS&nbsp;����<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$GLOBALS</font><font color="#007700">[</font><font color="#DD0000">"PHP_SELF"</font><font color="#007700">];<br>}<br></font><font color="#0000BB">myfunc</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

�����Ǵ����ʾ��������ģ�£�����Ĳ�����ȷ��ʾ����<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;���Ǵ����ʾ��<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">errfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;<br>}<br></font><font color="#0000BB">errfunc</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

������������ʾ��Ҫ�Ǹĳ�������û������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;������ʹ��ȫ�ֶ���<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;global&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;<br>}<br></font><font color="#0000BB">myfunc</font><font color="#007700">();<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

�ڱ���ǰ����� global �����ƣ����Ƕ���ñ���Ϊȫ�ֱ����������ַ�ʽ���Ͳ���ʹ�� $GLOBALS ���飬Ҳ���ñ����������п����ĺ����С�<p>

�������ȿ���̬����������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;��̬����������<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;static&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">.=</font><font color="#DD0000">"��"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">.</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;����<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

������ִ��ʱ�������ı������ں�������ʱ����ʧ�ˣ���ʱ��Ϊ�������Ҫ��������ѭ���У�����ϣ��������ÿ��ִ���꺯������ʧ�Ļ�����̬���� (static variable) �������ó��ˡ������У�ʹ�� $mystr ����֮ǰ�����ڱ���ǰ����� static������ʾ���� $mystr �Ǿ�̬��������ÿ��ִ�� myfunc() ����ʱ��$mystr ��ֵ��һֱ���ӣ�ÿִ��һ�ξͶ�һ�����֡����� static �ľ�̬���������õ�����û�취�ۼӹ����ˡ�<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;���Ǿ�̬����������&nbsp;(�����)<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myfunc</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">.=</font><font color="#DD0000">"��"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$mystr</font><font color="#007700">.</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>}<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��<br></font><font color="#0000BB">myfunc</font><font color="#007700">();&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

�ٿ�һ���Ƚ�ʵ�ʵ����ӣ����Ǵ��������ɫ���ø��е���ɫ��ͬ��<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">TdBackColor</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;static&nbsp;</font><font color="#0000BB">$ColorStr</font><font color="#007700">;<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$ColorStr</font><font color="#007700">==</font><font color="#DD0000">"808080"</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$ColorStr</font><font color="#007700">=</font><font color="#DD0000">"c0c0c0"</font><font color="#007700">;<br>&nbsp;&nbsp;}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$ColorStr</font><font color="#007700">=</font><font color="#DD0000">"808080"</font><font color="#007700">;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;return(</font><font color="#0000BB">$ColorStr</font><font color="#007700">);<br>}<br>echo&nbsp;</font><font color="#DD0000">"&lt;table&nbsp;border=1&gt;\n"</font><font color="#007700">;<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">10</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$ColorStr</font><font color="#007700">=</font><font color="#0000BB">TdBackColor</font><font color="#007700">();<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;tr&gt;&lt;td&nbsp;bgcolor="</font><font color="#007700">.</font><font color="#0000BB">$ColorStr</font><font color="#007700">.</font><font color="#DD0000">"&gt;���ǵ�"</font><font color="#007700">.</font><font color="#0000BB">$i</font><font color="#007700">.</font><font color="#DD0000">"��&lt;/td&gt;&lt;/tr&gt;\n"</font><font color="#007700">;<br>}<br>echo&nbsp;</font><font color="#DD0000">"&lt;/table&gt;"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

PHP �ı���ʹ�ü����ϣ������˾��ò���˼������Ǳ����ı��� (variable variable)�����ǳ������ PHP ������������⼼��<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br>$a&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"Hello"</font><font color="#007700">;<br>$</font><font color="#0000BB">$a&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">"world"</font><font color="#007700">;<br>echo&nbsp;</font><font color="#DD0000">"$a,&nbsp;$hello"</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;Hello,&nbsp;world<br></font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"$a,&nbsp;</font><font color="#007700">{</font><font color="#DD0000">$a</font><font color="#007700">}</font><font color="#DD0000">"</font><font color="#007700">;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;Ҳ��&nbsp;Hello,&nbsp;world<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

mdean@kcnet.com �ٳ�һ������������ (24-Apr-1999)������Ϊ�����ĺ��� (variable function)<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">myCallbackFunction</font><font color="#007700">()<br>{<br>&nbsp;&nbsp;print(</font><font color="#DD0000">"Hello&nbsp;from&nbsp;callback"</font><font color="#007700">);<br>}<br><br>function&nbsp;</font><font color="#0000BB">myFunction</font><font color="#007700">(</font><font color="#0000BB">$callback</font><font color="#007700">)<br>{<br>&nbsp;&nbsp;</font><font color="#0000BB">$callback</font><font color="#007700">();<br>}<br></font><font color="#FF8000">//&nbsp;call&nbsp;to&nbsp;myFunction&nbsp;passing&nbsp;callback<br>//&nbsp;function&nbsp;as&nbsp;parameter<br></font><font color="#0000BB">myFunction</font><font color="#007700">(</font><font color="#DD0000">"myCallbackFunction"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

�����û��� FORM ����������ϣ�Ҫ��ô�����أ�Ҫ���� PHP �������ļ��У�track_vars ��Ϊ On ʱ��ֱ��ʹ�ñ������־ͺ��ˡ���������next.php ��ִ��ʱ��ϵͳ���Զ������������� $username �� $sex��ֱ��ʹ�þͺ��ˣ�����ͳ�� CGI Ҫ�Լ�������PHP ʵ����̫�����ˡ�<p>

&lt;form action=next.php method=post&gt;<br>
����: &lt;input type=text name="username"&gt;&lt;br&gt;<br>
�Ա�: &lt;input type=text name="sex"&gt;&lt;br&gt;<br>
&lt;input type=submit&gt;<br>
&lt;/form&gt;
        <p> ���� PHP ����﷨���� C ���Եķ��棬�� PHP ��ʹ�ñ���ʱ����ʱ������ʹ���µı�����ֻҪ��ʹ��ǰ��������ʼ���ͺ��ˣ������� 
          Pascal ���������Ͻ�������Ҫʹ�õı�����Ҫ���ȶ��塣�⵱Ȼ�кô��뻵�����ô���ʹ�÷��㡢���ɣ��������ǳ�������Щ���ɶ������൱��Ĵ��۵��ԡ��ڳ�����̵� 
          PHP ����Ȼ�������⣬��������������ǧ�У����� include �� require �ü���֮������͸��ֳ����ˡ�������Σ��������õ�д��ϰ�߲��Ǳ����˷��ഺ�ķ����� 
        <p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.2.2.php.php" alt="3.2.2.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="3.3.php.php" alt="3.3.php">��һҳ</a> 
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
