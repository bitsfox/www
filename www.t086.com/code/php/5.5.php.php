<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - �������</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>�������</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

���û��ڲι���ҳʱ����ʱ�� Email �� Webmaster ������ִ�� Email �������ǲ���ʹ���û��ڰ��� mailto:abc@abc.abc.tw ��Ҫ����ʱ����Լ������ Outlook ���鷳����ʱ������ Homepage ���ṩд�ŵĹ��ܾ�̫���ˡ�ͬʱ������仹�������ѻ���Ҫ���û�һ��Ҫ������Щ���ϣ�������ϲִ����ԣ�Ҳ���˽�ͻ�����÷�����<p>

�������������ʵ���� Outlook �������������ʼ�������򿪼ķ����ʼ��Ĺ��ܣ���ͬ�ĵط�����ʹ�� Outlook ʱ���ļ����ǹ̶��ģ���Ҫ�����ռ��˵ĵ�ַ������վ�ϵ�������䣬�ռ��˼������� Webmaster��������Ҫ���ϼļ��˵ĵ����ʼ���ַ����Ȼ��һ����֮ͬ���� Outlook ������ŵĲ��裻������������� Web �����������û����͵��ż���<p>

�ڸ����׵���ƺ��������Ա�� Web Mail���� HotMail �㣬ֻҪ��������Ϳ������κεط����κε����շ��ż���<p>

��Ȼ��Ҳ���������׵���ƣ����û���������������ݿ��У������պ�����ɸ����õ����ϡ�������Ͳ������Ҫ���۵Ĳ����ˡ�<p>

�� UNIX ��ϵͳ�У��󲿷ݺ͵����ʼ��йص����ⶼ�� <a href="/to.asp?url=http://www.sendmail.org" tppabs="/to.asp?url=http://www.sendmail.org/">sendmail</a> �йأ�����ϵͳ����Ա��ƫִ���Ż���������ϵͳ����ˣ�����������ƿ�����Ҳ��ʹ�� sendmail ���������Ҫ�Ĺ��ܡ��� WindowsNT ϵͳ�У�����û�� sendmail ������Ҫ���з��ѹ��򣬻�ʹ���������ʼ������������˱��ڳ����޷��� WindowsNT ϵͳִ�С�<p>

�������������
<ol type=1>
<li>�ͳ���д����ı���û���������ϡ�
<li>�û���ú��ͳ����ϵ���������
<li>���������û������������󣬴����ļ���
<li>���� UNIX �Ĺܵ�ָ� sendmail ��������͸�ϵͳ������Ա��
<li>������֪ͨ�û�������ͳ���
</ol><p>

���¾��������ķ�������<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;�������&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><font color="#0000BB">&lt;?php<br><br>$mailto</font><font color="#007700">=</font><font color="#DD0000">"yourname@hahaha.com.tw"</font><font color="#007700">;<br><br>if&nbsp;((</font><font color="#0000BB">$topic</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$Email</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$body</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$tmpfilename&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">tempnam</font><font color="#007700">(</font><font color="#DD0000">"/tmp"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"dm"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$tmpfilename</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"From:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$Email</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Subject:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$topic</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;&nbsp;&lt;�ÿ�����&gt;\n\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$body</font><font color="#007700">.</font><font color="#DD0000">"\n\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"������:"</font><font color="#007700">.</font><font color="#0000BB">$sender</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"����IP:"</font><font color="#007700">.</font><font color="#0000BB">$REMOTE_ADDR</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$execstr</font><font color="#007700">=</font><font color="#DD0000">"cat&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$tmpfilename</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;|&nbsp;/usr/lib/sendmail&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$mailto</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#0000BB">$execstr</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$execstr</font><font color="#007700">=</font><font color="#DD0000">"echo&nbsp;$sender&nbsp;$REMOTE_HOST&nbsp;&gt;&gt;&nbsp;/var/log/mail.log"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#0000BB">$execstr</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"�ż����ͳ�������վ������Ա���촦����������&lt;p&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;"</font><font color="#007700">;<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">?&gt;<br></font>&nbsp;&nbsp;&lt;form&nbsp;action=<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo(</font><font color="#0000BB">$GLOBALS</font><font color="#007700">[</font><font color="#DD0000">"PHP_SELF"</font><font color="#007700">]);&nbsp;</font><font color="#0000BB">?&gt;</font>&nbsp;method=post&gt;<br>&nbsp;&nbsp;&lt;table&nbsp;border=0&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&gt;����&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;type=text&nbsp;size=20&nbsp;name=topic&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&gt;����&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;type=text&nbsp;size=20&nbsp;name=sender&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&gt;Email&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;type=text&nbsp;size=20&nbsp;name=Email&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&nbsp;colspan=2&gt;����&lt;br&gt;&lt;textarea&nbsp;cols=26&nbsp;rows=10&nbsp;name=body&gt;&lt;/textarea&gt;&lt;/td&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&nbsp;colspan=2&gt;&lt;div&nbsp;align=right&gt;&lt;input&nbsp;type=submit&nbsp;value="�ͳ�"&gt;&lt;/td&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;/table&gt;<br>&nbsp;&nbsp;&lt;/form&gt;<br>&nbsp;&nbsp;<font color="#0000BB">&lt;?<br></font><font color="#007700">}<br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table></div><p>

������ PHP �������ʱ�����ж��û��Ƿ��������ϡ���û���������ͳ���������û�������������ʾ�û���������ص����ϣ�����д���<p>

�����ԭ�����Ƚ��û���д������д����ʱ�ļ��У���Ϊ�˷�ֹ���û�ͬʱ��д���ʱ��������ļ������ǣ������Ҫÿ�ζ��в�ͬ����ʱ�ļ�������������ʹ�� <a href="function.php-tempnam.php" alt="function.php?tempnam">tempnam()</a> ���������������������һ�޶�����ʱ�ļ���

���ļ��������⴦��������� PHP �ṩ���ļ������ܣ����û���д������д�뷽�Ž������ļ��С����ļ��رվͳ�����ɡ���ʹ����û���ʼĳ�ȥ��ϵͳ���ܱ�������ļ���ֵ��ע����ǣ�������� /tmp �У���Щ UNIX ��ϵͳ (�� SUN Solaris) ������������ϵͳʱ��ʧ��Щ���ϣ�����Щ�򲻻� (�� Slackware Linux)���ⷽ�����Ҫ�ȹ滮�ã�Ҫ����Ļ���Ҫ���ڲ��ᱻ�����Ŀ¼�¡�<p>

UNIX ����ǿ�Ĺ��ܾ��ǹܵ����������ùܵ���������ŵĲ��裬����<p>

<code>cat tmpfilename | /usr/lib/sendmail wilson@biglobe.net.tw</code><p>

���ָ�����˼Ϊ���ļ��͸��ܵ��˶˵� sendmail ���򣬶� sendmail �����ļ��ĸ� wilson@biglobe.net.tw����˿����ñ��ܵ�ָ�����ĸ� Webmaster ���ǿͷ����ŵ���Ա����Ҫ�ĸ����ˣ������� mailing list ���Ƕ��ü��μ��ŵĹܵ�ָ�<p>

�� PHP ������Ҫʹ�� UNIX �ĳ�������ⲿָ�����ʹ�� <a href="function.php-exec.php" alt="function.php?exec">exec()</a> ���������������ź�֪ͨ�û��Ѿ��ڴ����ˣ���������������ĳ�����������Ȼ֮��Ҫ��δ����Ͳ��� PHP �����������۵ġ�<p>

��Ȼִ�м��ŵķ�ʽ��ֻһ�֣��������� <a href="function.php-mail.php" alt="function.php?mail">mail()</a> ���������ţ�������� UNIX ������ socket ��������νϷ�����˻�䣬������в�ͬ��

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="5.4.php.php" alt="5.4.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="5.6.php.php" alt="5.6.php">��һҳ</a> 
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
