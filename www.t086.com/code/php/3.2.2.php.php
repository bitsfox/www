<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ��������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>��������</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

PHP �ı������Ͳ��࣬���������֣�<p>

<ul type=disc>
<li>string
<li>integer
<li>double  
<li>array
<li>object
</ul>

string ��Ϊ�ַ��������������ǵ�һ�ַ�����ǧ�ֵ��ַ�������ʹ������������͡�ֵ��ע�����Ҫָ���ַ������ַ���������Ҫ��ͷβ����˫���� (����: "�����ַ���")����Ҫ���ַ�������ʱ����ʹ������ַ���Ҳ���Ƿ�б�߼���ָ���ķ��ţ����� \x ���϶�λ���֣��� \xFE ����ʮ����λ�ַ�������±�<p>

<table border=1>
<tr><th>����</th><th>����</th></tr>
<tr><td>\&quot;</td><td>˫����</td></tr>
<tr><td>\\</td><td>��б��</td></tr>
<tr><td>\n</td><td>����</td></tr>
<tr><td>\r</td><td>�ͳ� CR</td></tr>
<tr><td>\t</td><td>��λ (TAB)</td></tr>
</table><p>  

integer Ϊ�����ͱ��� 32 λ�Ĳ���ϵͳ�У�������Ч��Χ�� -2,147,483,648 �� +2,147,483,647��Ҫʹ�� 16 ��λ������������� 0x��<p>

double Ϊ�������ͱ��� 32 λ�Ĳ���ϵͳ�У�������Ч��Χ�� 1.7E-308 �� 1.7E+308��<p>

array Ϊ��������������Ƕ�ά����ά���߶�ά���飬���е�Ԫ��Ҳ�����ɣ������� string��integer ���� double�������� array��<p>

object Ϊ�������Ŀǰ�� PHP �е��಻�࣬���ۼ��࣬Microsoft �� ASP ����Ȼ�� PHP ��Ĭ����࣬������������ҵ�Ŭ������������˵������Web CGI ����Ҫ�����Ч�ʣ�����ȫ�������ķ�ʽ�������û������ʱҲ����Ϊ����ִ���ٶ������ܲ��ͷ��ɡ�<p>

Ҫʹ�ñ�����ֻҪ��Ӣ���ַ���ǰ��Ӹ���Ԫ�� $ ���ɣ�Ŀǰ���������Բ���ʹ�����ġ����ڱ����Ĵ�Сд�ǲ�һ���ģ��Կ��� PHP ����� TEAM ��˵�����ʹ����ͬ�ı���ʹ�÷�������ʱ��Ϊ������С�����⣬�������ν��ʱ��ȥ��Ѱ����㣬�Ǿ��鷳�ˡ�<p>

����Ϊ������ʹ�÷�����<p>

<font color=#0000BB>$mystring&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#DD0000>"�����ַ���"</font><font color=#007700>;<br></font><font color=#0000BB>$WilsonPeng&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#DD0000>"�������������"</font><font color=#007700>;<br></font><font color=#0000BB>$NewLine&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#DD0000>"������\n"</font><font color=#007700>;</font><p><font color=#007700></font>
<font color=#0000BB>$int1&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>38</font><font color=#007700>;<br></font><font color=#0000BB>$int2&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>49</font><font color=#007700>;<br></font><font color=#0000BB>$hexint&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>0x10</font><font color=#007700>;</font><p><font color=#007700></font>
<font color=#0000BB>$float1&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>1.732</font><font color=#007700>;<br></font><font color=#0000BB>$float2&nbsp;</font><font color=#007700>=&nbsp;</font><font color=#0000BB>1.4E+2</font><font color=#007700>;</font><p><font color=#007700></font>
<font color=#0000BB>$MyArray1&nbsp;</font><font color=#007700>=&nbsp;array(</font><font color=#DD0000>"��"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"��"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"��"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"î"</font><font color=#007700>);<br></font><font color=#0000BB>$MyArray2&nbsp;</font><font color=#007700>=&nbsp;array(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color=#DD0000>"��֧"&nbsp;</font><font color=#007700>=&gt;&nbsp;array(</font><font color=#DD0000>"��"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"��"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"��"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"î"</font><font color=#007700>),<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color=#DD0000>"��Ф"&nbsp;</font><font color=#007700>=&gt;&nbsp;array(</font><font color=#DD0000>"��"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"ţ"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"��"</font><font color=#007700>,&nbsp;</font><font color=#DD0000>"��"</font><font color=#007700>),<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color=#DD0000>"����"&nbsp;</font><font color=#007700>=&gt;&nbsp;array(</font><font color=#0000BB>1</font><font color=#007700>,&nbsp;</font><font color=#0000BB>2</font><font color=#007700>,&nbsp;</font><font color=#0000BB>3</font><font color=#007700>,&nbsp;</font><font color=#0000BB>4</font><font color=#007700>)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</font><p>

���ʹ���ϾͱȽ��鷳�ˣ�Ҫ�ȶ����������������Ҫ����������ʹ���࣬��������<p>

<font color=#007700>class&nbsp;</font><font color=#0000BB>foo&nbsp;</font><font color=#007700>{<br>&nbsp;&nbsp;function&nbsp;</font><font color=#0000BB>do_foo&nbsp;</font><font color=#007700>()&nbsp;{&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color=#DD0000>"Doing&nbsp;foo."</font><font color=#007700>;&nbsp;<br>&nbsp;&nbsp;}<br>}</font><p><font color=#007700></font>
<font color=#0000BB>$bar&nbsp;</font><font color=#007700>=&nbsp;new&nbsp;</font><font color=#0000BB>foo</font><font color=#007700>;<br></font><font color=#0000BB>$bar&nbsp;</font><font color=#007700>-&gt;&nbsp;</font><font color=#0000BB>do_foo&nbsp;</font><font color=#007700>();</font><p>

�����й�������ۣ��ο� <a href="3.5.2.php.php" alt="3.5.2.php">��</a><p>

���⣬���в���ֵ (boolean)��ͨ�� 1 ��Ϊ true��0 Ϊ false��<p>

�ڱ���֮�䣬��Ҫת�����ͣ��� PHP �������Ǻ����ɵģ�ֱ�Ӿ��������ˣ����ؾ��������ת����������Ȼ��������ת���������е�ǣǿ�ˣ��������Խ�������ת���ַ�����Ҳ�Ǻܺô���

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.2.1.php.php" alt="3.2.1.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="3.2.3.php.php" alt="3.2.3.php">��һҳ</a> 
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
