<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - �ÿͼ�����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>�ÿͼ�����</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>

�ÿͼ��������� Web �ÿ�֪������ҳ������վ������ָ����ֱ�ӵķ�������������������ҳ׬Ǯ���ˣ��ÿ��������ҹ������õ�˵�ʡ���Ȼ���Խ���վ��������д��ͳ�Ʊ��������Ǹо�ֱ�ӿ����Ƚ���ʵ�������ۼ�Ϊƾ��<p>

        <div align="center"><img src="5.1.1.gif" alt="img/5.1.1.gif" WIDTH="260" HEIGHT="168"></div>
        <p>

����ͼ�У��ÿͼ���������������
<ol>
<li>��һλ�û����ĳҳ��
<li>��������������ݿ���ļ��ж�ȡ��ҳ�����������
<li>��������һ���棬�������ͻص�һλ�û���
<li>�ڶ�λ�û����ĳҳ��
<li>��������������ݿ���ļ��ж�ȡ��ҳ�����������
<li>�������ټ�һ���棬�������ͻصڶ�λ�û���
</ol><p>

PHP ��û������ķÿͼ������������������ǿ����� PHP ��ǿ��������дһ���ÿͼ�����������<p>

���µĺ����Ƿÿͼ�������ԭ�ͣ����� David W. Bettis ���ṩ�����������������޸ġ�<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;�ÿͼ�����&nbsp;ԭ��&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">/*<br>simple&nbsp;access&nbsp;counter&nbsp;for&nbsp;php3<br>(c)1998&nbsp;David&nbsp;W.&nbsp;Bettis<br>dbettis@eyeintegrated.com<br>medify&nbsp;by&nbsp;Wilson&nbsp;Peng<br>*/<br><br></font><font color="#0000BB">$counterFile&nbsp;</font><font color="#007700">=&nbsp;&nbsp;</font><font color="#DD0000">&quot;/tmp/counter.txt&quot;</font><font color="#007700">;<br><br>function&nbsp;</font><font color="#0000BB">displayCounter</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$fp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">,</font><font color="#DD0000">&quot;rw&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fgets</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#0000BB">5</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">+=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>&nbsp;&nbsp;print&nbsp;&nbsp;</font><font color="#DD0000">&quot;���ǵ�&nbsp;&quot;</font><font color="#007700">.</font><font color="#DD0000">&quot;$num&quot;</font><font color="#007700">.</font><font color="#DD0000">&quot;&nbsp;λ���ķ���&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(&nbsp;</font><font color="#DD0000">&quot;rm&nbsp;-rf&nbsp;$counterFile&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(&nbsp;</font><font color="#DD0000">&quot;echo&nbsp;$num&nbsp;&gt;&nbsp;$counterFile&quot;</font><font color="#007700">);<br>}<br><br>if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(&nbsp;</font><font color="#DD0000">&quot;echo&nbsp;0&nbsp;&gt;&nbsp;$counterFile&quot;</font><font color="#007700">);<br>}<br><br></font><font color="#0000BB">displayCounter</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">);<br><br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
<p>
<div align="right"><font color="c0c0c0" size="-2">Copyright &copy; 1998 David W. Bettis</font></div>
</td></tr></table></div><p>

�ڶ�ȡ����ҳʱ��PHP ��������Ѱ /tmp/counter.txt �ļ��Ƿ���ڣ��������ڣ�����һ�� counter.txt �ļ���Ȼ�� 0 д���ļ���Ȼ���ȡ counter.txt �ļ������ݣ�Ҳ���Ǵ����ֵ����ٽ����ĵ����ִ��� $num �����С��� $num �ı��������������ǰ�����о�����һ�Ĳ��裬���û��������ӡ���Ȼ��������ˮ�����ڼ�һ����ʱ�Ӷ����߼������������������õġ���󽫷ÿ������ٻش� /tmp/counter.txt ��һ�� OK��<p><hr size="1">
        <p> ��Ȼ��ÿһҳ��Ҫ����д�����鷳���˼��㡣��ʱ�����ǿ������� PHP �ṩ�� require() ���ܣ��������������һ��������������ʹ���Ͼͷ������ˡ�
        <p>

����Ҫ�Ƚ� Apache �������ļ� (httpd.conf) ���� PHP include �ļ���·��������Ҫ�����е� include �ļ����� http://abcdefghijk.com.tw/include �У������� httpd.conf �������������<p>

<code>php3_include_path .:./include:../include</code><p>

�������������� Apache �������������� include ·������Ч��<p>

<code>./apachectl restart</code><p>

�������ڷ������� .../include Ŀ¼�з������µ��ļ����ļ������ counter.inc<p>

������� MyCounter() ������Ϊ���ö��߷����˽⣬�����еı��� $counterFile��$fp �� $num ���ֺ� David W. Bettis �����õļ������еı���������ͬ��<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;�ÿͼ���������&nbsp;MyCounter()<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;1999<br>//---------------------------<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">MyCounter</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$counterFile</font><font color="#007700">=</font><font color="#DD0000">&quot;/tmp&quot;</font><font color="#007700">.</font><font color="#0000BB">$GLOBALS</font><font color="#007700">[</font><font color="#DD0000">&quot;PHP_SELF&quot;</font><font color="#007700">];<br>&nbsp;&nbsp;if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">dirname</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">)))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">mkdir</font><font color="#007700">(</font><font color="#0000BB">dirname</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">),&nbsp;</font><font color="#0000BB">0700</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#DD0000">&quot;echo&nbsp;0&nbsp;&gt;&nbsp;$counterFile&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;</font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">,</font><font color="#DD0000">&quot;rw&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fgets</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#0000BB">5</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;</font><font color="#007700">+=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>&nbsp;&nbsp;print&nbsp;</font><font color="#DD0000">&quot;$num&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$counterFile</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#DD0000">&quot;rm&nbsp;-rf&nbsp;$counterFile&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#DD0000">&quot;echo&nbsp;$num&nbsp;&gt;&nbsp;$counterFile&quot;</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>
<div align="right"><font color="c0c0c0" size="-2">Copyright &copy; 1999, Wilson Peng</font></div>
</td></tr></table></div>
        <p> ��Ȼ��Ҫ�õĻ�Ҫ�� <a href="5.1.2a.php.php" alt="demo/5.1.2.php">Homepage</a> 
          ��Ƕ�� MyCounter() �������Ϳ���ʹ���� 
        <p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">require(</font><font color="#DD0000">&quot;counter.inc&quot;</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;�ÿͼ�����&nbsp;���հ�&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>���ǵ�&nbsp;<font color="#0000BB">&lt;?&nbsp;MyCounter</font><font color="#007700">();&nbsp;</font><font color="#0000BB">?&gt;</font>&nbsp;λ�ι���<br>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
<p>
<div align="right"><font color="c0c0c0" size="-2">Copyright &copy; 1999, Wilson Peng</font></div>
</td></tr></table></div><p>

Ҫ����� MyCounter() ���������� Homepage �Ŀ�ͷ������ require() ���������� MyCounter() ������Ϊ�� Homepage ��һ���ݡ�֮���ٽ� &lt;? MyCounter(); ?&gt; �ַ���������Ҫ�������ĵط��Ϳ����ˡ�<p>

<font color="#0000BB"><font color="#007700">function</font>&nbsp;MyCounter<font color="#007700">(</font><font color="#007700">)</font>&nbsp;<font color="#007700">{</font><br>
<pre>
:
:
</pre>
<font color="#007700">}</font></font><p>

�ڽ�������ʱ����Ҫ������ĸ�ʽ�����Զ���������ǰ���� function �ַ�����<p>

ÿҳ���õ� MyCounter() �� Homepage ������ /tmp ֮������ҳ��·����������� $PHP_SELF ������ɡ�<p>

<font color="#0000BB">&nbsp;&nbsp;$counterFile=<font color="#DD0000"><strong>&quot;/tmp&quot;</strong></font>.$GLOBALS[<font color="#DD0000"><strong>&quot;PHP_SELF&quot;</strong></font>]<font color="#007700">;</font></font><p>

��Ȼ������Ҫ�� /tmp �ĳɱ��Ŀ¼Ҳ���ԣ���Ȼ�� SUN �ȷ�������Ҫ�� reboot��/tmp �еĶ�����û�ˣ�Ҫ���¿�ʼ�ټ����ˡ�������֪Ҫʹ��ʲôĿ¼������ʹ�� /var/log/counter ���Ŀ¼���������� log �ȱ䶯���Ϸ���һ��<p>

<font color="#0000BB">&nbsp;&nbsp;<font color="#007700">if</font>&nbsp;<font color="#007700">(</font>!file_exists<font color="#007700">(</font>$counterFile<font color="#007700">)</font><font color="#007700">)</font>&nbsp;<font color="#007700">{</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;<font color="#007700">if</font>&nbsp;<font color="#007700">(</font>!file_exists<font color="#007700">(</font>dirname<font color="#007700">(</font>$counterFile<font color="#007700">)</font><font color="#007700">)</font><font color="#007700">)</font>&nbsp;<font color="#007700">{</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mkdir<font color="#007700">(</font>dirname<font color="#007700">(</font>$counterFile<font color="#007700">)</font>,&nbsp;0700<font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;<font color="#007700">}</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;exec<font color="#007700">(</font><font color="#DD0000"><strong>&quot;echo&nbsp;0&nbsp;&gt;&nbsp;$counterFile&quot;</strong></font><font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;<font color="#007700">}</font></font><p>


��������Ҫ�Ǽ�� $counterFile �Ƿ���ڣ����ļ���������Ŀ¼�Ƿ���ڣ�����Ҫ��Ҫ����Ŀ¼��֮��ͽ����ļ�����д�� 0��<p>

<font color="#0000BB">&nbsp;&nbsp;$fp&nbsp;=&nbsp;fopen<font color="#007700">(</font>$counterFile,<font color="#DD0000"><strong>&quot;rw&quot;</strong></font><font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;$num&nbsp;=&nbsp;fgets<font color="#007700">(</font>$fp,5<font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;$num&nbsp;+=&nbsp;1<font color="#007700">;</font><br>
&nbsp;&nbsp;<font color="#007700">print</font>&nbsp;<font color="#DD0000"><strong>&quot;$num&quot;</strong></font><font color="#007700">;</font><br>
&nbsp;&nbsp;<font color="#007700">echo</font>&nbsp;$counterFile<font color="#007700">;</font></font><p>

�����о��Ǵ򿪼�������ŵ��ļ����������ۼӺ�Ľ���͵�������ˡ�<p>

<font color="#0000BB">&nbsp;&nbsp;exec<font color="#007700">(</font><font color="#DD0000"><strong>&quot;rm&nbsp;-rf&nbsp;$counterFile&quot;</strong></font><font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;exec<font color="#007700">(</font><font color="#DD0000"><strong>&quot;echo&nbsp;$num&nbsp;&gt;&nbsp;$counterFile&quot;</strong></font><font color="#007700">)</font><font color="#007700">;</font></font><p>

��󽫼������ļ�ɾ���������½���һ�����������������ļ�Ϊ�����Ĵ����ּ�������

<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="5.php.php" alt="5.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="5.2.php.php" alt="5.2.php">��һҳ</a> 
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
