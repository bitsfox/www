<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - ������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>������</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>

�����ң��� Web վ�ϴ�������ʿ������������ͬʱ��վ����������ԱҲ���������ɱʱ�䡣��������һ�κ�����ҵ����������أ�����û�У�����������Ӵ��ֵ��ٶȡ�<p>

�����ң���ʵ���Ƕ��˹�ͬʹ�õ� CGI ���򡣳���ÿ����������ַ�������ϵͳ������ɵ�ʱ������������͸������û����� Web �����Һ� BBS �������Ҳ�ͬ�ĵط��� BBS �����ҿ���ÿ�յ�һ�仰�������Ϸ��͸�ÿλ�������ҵ������û���Web ���� CGI �������� BBS �� telnet һֱ���ӣ�Web CGI �����������ٶȽ���Ϣ�ͳ���Ȼ��������ӡ����γ��������Σ�������Ϊ Web �����һ���ʹ�� HTTP ����Э�飬�� HTTP ʵ���İ汾�������� 0.9��1.0 ���� 1.1 �涼���ܳ���ռ���������ӵ� Port��<p>

Ϊ�˽�������޷����ϴ�������⣬��������Ϣ�����⣬Netscape �� 3.0 �������֮��ʹ�����µļ������� Internet Explorer Ҳʵ������Щ Netscape �з������ļ�����Netscape �����ֳ� Server Push �� Client Pull ���ּ�����Server Push �� Web �������������Զ��� MIME ���룬�͸��û��ˣ�Ŀǰ������վʹ�����ַ�ʽ���� Client Pull �������� HTML �� meta ��ǩ�������� http-equiv=&quot;Refresh&quot; �����ԣ���ʾ����Ҫ�������룬��������ʱ�䣬������ content ��������ɡ�<p>

&lt;meta&gt; ��ǩͨ�������� &lt;head&gt;..&lt;/head&gt; �Ĳ����У��Ա�����������Խ���׼�������û��˵���ҳ������Ϊ meta �� PHP ���õ����ӣ�����Ϊÿʮ������������һ�Ρ�<p>

&lt;meta http-equiv=&quot;Refresh&quot; content=&quot;15; url=&lt;? echo $PHP_SELF; ?&gt;&quot;&gt;<p>

������� Server Push ���� Client Pull ���������ң��Ƿ��������ķ������� Web ��������������أ����ǿ϶��ġ�����ʹ�� Java ���� ActiveX (�� IE4��5) �����������п���ר���� Browser Plug-in ���� (��<a href="/to.asp?url=http://chat.kimo.com.tw/">��Ħ��������</a>)��������ͺ� PHP û�й�ϵ�ˣ���������Ҫ���ص㡣<p>

����֮�⣬���ڶ��ڸ����������ѵ����ԣ�Ϊ����д��һ����Ϊ refresh ���������δд�õ��ַ�������˽��������� frame ��ҳ�����������б�Ҫ�ġ��������������ҵ�������<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;������&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;frameset&nbsp;rows=&quot;*,40&quot;&nbsp;border=1&gt;<br>&lt;frame&nbsp;src=&quot;list.php&quot;&nbsp;name=list&nbsp;scrolling=auto&gt;<br>&lt;frame&nbsp;src=&quot;post.php&quot;&nbsp;name=post&nbsp;scrolling=no&gt;<br>&lt;noframes&gt;<br>&lt;body&gt;<br>����������ʹ��ҳ������������޷�ʹ��<br>&lt;/body&gt;<br>&lt;/noframes&gt;<br>&lt;/frameset&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table>
          <p> <img src="5.3.gif" alt="img/5.3.gif" WIDTH="423" HEIGHT="197">
        </div><p>
�������� frame ������֧ PHP ���򣬽��齫���Ƿ���ͬһĿ¼֮�У����� /chatroom���Ա��պ�ά�������⣬Ϊ�� list.php �� post.php ����ʹ����ͬ�ı�������������ͨ�ı�··������ env.inc �У����Խ������� /chatroom ���� Web ������ (�� Apache) �� PHP include ����·���С�<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;�ļ���:&nbsp;env.inc<br></font><font color="#0000BB">$tempdir</font><font color="#007700">=</font><font color="#DD0000">&quot;/tmp/&quot;</font><font color="#007700">;<br></font><font color="#0000BB">$chatfile</font><font color="#007700">=</font><font color="#DD0000">&quot;/tmp/abc&quot;</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table></div><p>

�����ҵĺ�˿�����Ƶĺܼ򵥣�������ʹ���ļ�������Ҳ����Ū�����ݿ⣬����������ݶ��룬������ĺ�����ϵͳЧ�ʣ�������Կ���ʹ�� UNIX ���г�ͨѶ IPC �ˡ�<p>

���ڼ����û����Ե����ݷ����ļ��У�����������Ӵ󲿷ݶ�ʹ�� UNIX/Linux ���ⲿָ���ϵͳ�޸�ָ�� (��Ƴ���)�������а�װ��س���<p>

ʵ���Ͻ����϶����ļ��л��ʹ�����ݿ⻹�죬�������ں��ٶȣ������� UNIX ������װ�� RAM Disk���ٽ��ļ��Ĵ�ȡ·�������ڸ� RAM Disk �ϣ���֤��ȡ�ٶ��������Ͽ���Ҫ������Щ�Ը��ٶ���Ѱ����Ϊ���ٵ���վ���������������ݿ����϶��ŵ� RAM Disk �У�������ϵͳ�ٶ����ʮ���ٱ������� RAM �ļ۸���������������ȵĻ�����ܱ��ˡ���ʹ�� Windows NT���Ǿ�û�취�ˣ���΢��ʲôʱ���ṩ�������� Third Party �Ĳ�Ʒ�ˡ�<p>

��Щ�û����ܶ� UNIX �����Ǻ��죬������ȼ����õ���ָ�<p>

touch: �������ļ������޸ľ��ļ������������ڡ�<p>

echo �����������ڷ���: ���ַ�����ʾת��ָ���ĵط���<p>

tail: ��ʾ�ļ�������е����ϣ�Ĭ��ֵΪʮ�У���ʹ�ü��ż����֣��޸�Ҫ��ʾ��������<p>

����Ϊ�ͳ������������ַ����ĳ��򣬳����õ� env.inc ���ļ���<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;�ļ���:&nbsp;post.php<br></font><font color="#007700">require(</font><font color="#DD0000">&quot;env.inc&quot;</font><font color="#007700">);<br>if&nbsp;((</font><font color="#0000BB">$chatuser</font><font color="#007700">!=</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$chattext</font><font color="#007700">!=</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$chatstr</font><font color="#007700">=</font><font color="#DD0000">&quot;&lt;font&nbsp;color=8080ff&gt;&quot;</font><font color="#007700">.</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">&quot;h:i:s&quot;</font><font color="#007700">).</font><font color="#DD0000">&quot;&lt;/font&gt;-&lt;font&nbsp;color=ff8080&gt;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatuser</font><font color="#007700">.</font><font color="#DD0000">&quot;&lt;/font&gt;:&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chattext</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$cmdstr</font><font color="#007700">=</font><font color="#DD0000">&quot;echo&nbsp;\&quot;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatstr</font><font color="#007700">.</font><font color="#DD0000">&quot;\&quot;&nbsp;&gt;&gt;&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatfile</font><font color="#007700">;<br>&nbsp;&nbsp;if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$chatfile</font><font color="#007700">))&nbsp;</font><font color="#0000BB">passthru</font><font color="#007700">(</font><font color="#DD0000">&quot;touch&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatfile</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">passthru</font><font color="#007700">(</font><font color="#0000BB">$cmdstr</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>&lt;html&gt;<br>&lt;body&nbsp;bgcolor=ffffff&nbsp;leftmargin=0&nbsp;topmargin=0&nbsp;marginheight=0&nbsp;marginwidth=0&gt;<br>&lt;form&nbsp;action=<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;&nbsp;</font><font color="#0000BB">?&gt;</font>&nbsp;method=post&gt;<br>&lt;table&nbsp;border=0&nbsp;width=100%&gt;&lt;tr&gt;<br>&lt;td&nbsp;align=right&gt;���:&lt;/td&gt;<br>&lt;td&gt;&lt;input&nbsp;type=text&nbsp;name=chatuser&nbsp;size=8&nbsp;value=&quot;<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$chatuser</font><font color="#007700">;&nbsp;</font><font color="#0000BB">?&gt;</font>&quot;&gt;&lt;/td&gt;<br>&lt;td&nbsp;align=right&gt;����:&lt;/td&gt;<br>&lt;td&gt;&lt;input&nbsp;type=text&nbsp;name=chattext&nbsp;size=30&nbsp;maxlength=500&gt;&lt;/td&gt;<br>&lt;td&gt;&lt;div&nbsp;align=right&gt;&lt;input&nbsp;type=submit&nbsp;value=&quot;�ͳ�&quot;&gt;&lt;/td&gt;<br>&lt;/tr&gt;&lt;/table&gt;<br>&lt;/form&gt;<br>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table></div><p>

�����ȼ���Ƿ��������ַ������������������������ַ�������ʾ���Եı� (Form)������������ַ�������ʱʱ������ļ��� (���� UNIX ��ת��ָ��)����Ȼ��Ϊ�˷�ֹ�����ȼ���Ƿ����ļ��ɴ��ļ�����û������ touch ���ļ������е��ļ����� /tmp/abc��<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;meta&nbsp;http-equiv=&quot;Refresh&quot;&nbsp;content=&quot;5;&nbsp;url=<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;&nbsp;</font><font color="#0000BB">?&gt;</font>&quot;&gt;<br>&lt;meta&nbsp;content=&quot;text/html;&nbsp;charset=gb2312&quot;&nbsp;http-equiv=Content-Type&gt;<br>&lt;body&nbsp;bgcolor=ffffff&nbsp;leftmargin=0&nbsp;topmargin=0&nbsp;marginheight=0&nbsp;marginwidth=0&gt;<br><font color="#0000BB">&lt;?<br></font><font color="#FF8000">//&nbsp;�ļ���:&nbsp;list.php<br></font><font color="#007700">require(</font><font color="#DD0000">&quot;env.inc&quot;</font><font color="#007700">);<br><br>if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$chatfile</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;��δ����&lt;/body&gt;&lt;/html&gt;&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;exit;<br>}<br><br></font><font color="#0000BB">$uniqfile</font><font color="#007700">=</font><font color="#0000BB">$tempdir</font><font color="#007700">.</font><font color="#0000BB">uniqid</font><font color="#007700">(</font><font color="#0000BB">rand</font><font color="#007700">());<br></font><font color="#0000BB">$shellcmd</font><font color="#007700">=</font><font color="#DD0000">&quot;/usr/bin/tail&nbsp;-50&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatfile</font><font color="#007700">.&nbsp;</font><font color="#DD0000">&quot;&nbsp;&gt;&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$uniqfile</font><font color="#007700">;<br></font><font color="#0000BB">passthru</font><font color="#007700">(</font><font color="#0000BB">$shellcmd</font><font color="#007700">);<br></font><font color="#0000BB">$chatfilearray</font><font color="#007700">=</font><font color="#0000BB">file</font><font color="#007700">(</font><font color="#0000BB">$uniqfile</font><font color="#007700">);<br></font><font color="#0000BB">$j</font><font color="#007700">=</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$chatfilearray</font><font color="#007700">);<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">1</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;=</font><font color="#0000BB">$j</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$chatfilearray</font><font color="#007700">[</font><font color="#0000BB">$j</font><font color="#007700">-</font><font color="#0000BB">$i</font><font color="#007700">].</font><font color="#DD0000">&quot;&lt;br&gt;\n&quot;</font><font color="#007700">;<br>}<br></font><font color="#0000BB">unlink</font><font color="#007700">(</font><font color="#0000BB">$uniqfile</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table></div><p>

����ĳ������ʹ�� Client Pull �ļ�����ÿ��������¸���һ�Ρ�ͬ���أ���Ҳ require ���õ� env.inc �ļ���Ҫ�ı����еı���ʱ�����ϾͿ��������еĳ����õ�����Կ�����վ��˵��������Ҫ�ķ��������Խ���ҳ�����ж�����ֵĵط������� Copyright (C) 1996-2000 ���ַ���������һ���ļ��ϣ������µ�һ�ֻ꣬Ҫ��һ���ļ�������վ�����ˡ�<p>

<font color="#007700">if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$chatfile</font><font color="#007700">))&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;��δ����&lt;/body&gt;&lt;/html&gt;&quot;</font><font color="#007700">;<br>
&nbsp;&nbsp;exit;<br>
}</font><p>
<font color="#0000BB">$uniqfile</font><font color="#007700">=</font><font color="#0000BB">$tempdir</font><font color="#007700">.</font><font color="#0000BB">uniqid</font><font color="#007700">(</font><font color="#0000BB">rand</font><font color="#007700">());</font><br>
<font color="#0000BB">$shellcmd</font><font color="#007700">=</font><font color="#DD0000">&quot;/usr/bin/tail&nbsp;-50&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatfile</font><font color="#007700">.&nbsp;</font><font color="#DD0000">&quot;&nbsp;&gt;&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$uniqfile</font><font color="#007700">;</font><br>
<font color="#0000BB">passthru</font><font color="#007700">(</font><font color="#0000BB">$shellcmd</font><font color="#007700">);</font><p>

�����ȼ����û���û������������ݵ��ļ� /tmp/abc����û�о���ʾ��δ���ţ����û����������ݡ��������������ϣ���ץ�������ʮ�ʣ�����������ļ���׼����ʾ��<p>

<font color="#0000BB">$chatfilearray</font><font color="#007700">=</font><font color="#0000BB">file</font><font color="#007700">(</font><font color="#0000BB">$uniqfile</font><font color="#007700">);</font><br>
<font color="#0000BB">$j</font><font color="#007700">=</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$chatfilearray</font><font color="#007700">);<br>
for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">1</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;=</font><font color="#0000BB">$j</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$chatfilearray</font><font color="#007700">[</font><font color="#0000BB">$j</font><font color="#007700">-</font><font color="#0000BB">$i</font><font color="#007700">].</font><font color="#DD0000">&quot;&lt;br&gt;\n&quot;</font><font color="#007700">;<br>
}<br>
</font><font color="#0000BB">unlink</font><font color="#007700">(</font><font color="#0000BB">$uniqfile</font><font color="#007700">);</font><p>

���ļ������������ $chatfilearray �У�������������������ʾ�ķ�ʽ�͸�������ˣ���Ȼ����ʹ�ö���������ķ�������ȷ��һ��ʱ�����������������棬��������ʵ�ں��˷� CPU ʱ�䣬��˾ʹ���� echo ����ǰ������ϡ�ʹ����ɻ�Ҫ�� <a href="function.php-unlink.php" alt="function.php?unlink">unlink()</a> ָ�����ʱ�ļ�ɱ����<p>

�������������ֲڵ�������ϵͳ����Ȼ���кܶ�Ľ��Ŀռ䣬����ͳ��ʹ�����������ø���....�ȣ���Ҫ Webmaster �پ���ϸ���ˡ�

<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="5.2.php.php" alt="5.2.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="5.4.php.php" alt="5.4.php">��һҳ</a> 
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
