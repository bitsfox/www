<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����ֲ�</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����ֲ�</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

�����棬����� Internet �ϵ�����ѧ�ʡ��� 468x60 ������˹����Ա�ʾ���֭�ĳߴ硣<p>

�ڴ�����ʱ������ֱ��ʹ������������� 468x60 ͼ�ļ��͵�������ķ������У������Ǽ���������£������ٿ� FTP ���򣬸�����ֻΪ�� upload��<p>

������⣬������ Web CGI �����ʹ������ ASP��Prel....�ȵȣ�����Ҫ�پ���ϵͳԪ�������Ӳ��ܴ�ɡ��ų���ǿ�� Web CGI ����: PHP�����ⷽ��ı���û������ʧ������������������ CGI ���ߡ�<p>

File Upload ������ RFC 1867 �ļ�������ϸ��˵����������������ļ���ʽ (content-type) multipart/form-data��ֵ��ע����������һ��Ҫ�� Netscape 3.0 ���ϻ� MS Internet Explorer 4.0 ���ϵİ汾���ܽ��ļ��ϴ���<p>

�ȿ������ HTML Դ����<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
&lt;form&nbsp;enctype="multipart/form-data"&nbsp;action="next.php"&nbsp;method=post&gt;<br>���Ĵ���:&nbsp;&lt;input&nbsp;type=text&nbsp;name=user&gt;&lt;br&gt;<br>�ļ�����:&nbsp;&lt;input&nbsp;name="myfile"&nbsp;type="file"&gt;&lt;br&gt;<br>&lt;input&nbsp;type="submit"&nbsp;value="�ͳ�"&gt;<br>&lt;/form&gt;<br></font>
</td></tr></table></div><p>

�� form �ı�ǩ�У�Ҫ���� enctype="multipart/form-data" ���ַ�������ʾ�û���������������ļ��ϴ���ͬʱ method һ��Ҫ�� POST �������� GET��<p>

����������У����û��������� Wilson Peng����ѡ c:\myphoto.gif ���ļ������û������ͳ�������������ͳ������ POST ���ϡ�<p>

<pre>

Content-type: multipart/form-data, boundary=AaB03x

--AaB03x
content-disposition: form-data; name="user"

Wilson Peng
--AaB03x
content-disposition: form-data; name="myfile"
Content-type: multipart/mixed, boundary=BbC04y

--BbC04y
Content-disposition: attachment; filename="myphoto.gif"
Content-type: image/gif
Content-Transfer-Encoding: binary

  ...myphoto.gif ������...
--BbC04y--
--AaB03x--

</pre><p>

��������������У�boundary=AaB03x ��Ϊ�ֿ���ͬ�ֶ����ϵ���Ϣ�����е� AaB03x ���뷽������������İ汾��ͬ���죬ͨ�����������ϡ�����ġ�֮��Ϳ��Կ����� --AaB03x ��������ͬ���ֶΡ�<p>

������Ϊ�������� form �� action ���� next.php�������������ĸ����������±�<p>

<table border=1>
<tr><th>������</th><th>˵��</th></tr>
<tr><td>$myfile</td><td>���ϴ����ļ�����</td></tr>
<tr><td>$myfile_name</td><td>�ϴ��ļ����û��˵�����</td></tr>
<tr><td>$myfile_size</td><td>�ϴ��ļ��Ĵ�С</td></tr>
<tr><td>$myfile_type</td><td>�ϴ��ļ��ĸ�ʽ���� "image/gif"</td></tr>
</table><p>

�� next.php ����Ҫ��������Ҫ���裬���Ǻúõ�ʹ�����ĸ��������������һ�������û��ϴ����ļ�����ʧ�ˡ���ˣ�Ҫ�Ƚ� $myfile ���Ƶ���Ź��ͼ��Ŀ¼��<p>

<font color="#0000BB">copy</font><font color="#007700">(</font><font color="#0000BB">$banner</font><font color="#007700">,</font><font color="#DD0000">"/home1/biglobe3/ad/"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">);</font><p>

���г�����ǽ��ļ����� /home/htdocs/ad ��Ŀ¼�У�����������Ӷ��ԣ��ͽ��ļ��浽 /home/htdocs/ad/myphoto.gif����Ҫ���ǣ���ŵ�Ŀ¼������ Web Server �޷�������Ŀ¼����Ӧ������վ�� Homepage ����Ŀ¼�У��ſ����������Ͽ�����<p>

�������Ҫ����ϸ�Ĵ�������ȶ�ȡ�õ��ļ���С��ϵͳ�ر����Ƿ���ͬ....�ȵȣ��Ϳ����� $myfile_size �����ˡ�<p>

���� form ������ input file �����Ƹĵ������� Upload �ı���Ҳһ��ģ���<p>

&lt;input name="upfile" type="file"&gt;<p>

������͸ĳ� $upfile��$upfile_name��$upfile_size���� $upfile_type��<p>

��ˣ���������Ӿ����� File Upload �� Oracle 7.x ������ݿ⣬���ļ����� Web Homepage Ŀ¼�У������Ϣ����� Oracle �С���Ȼ�������û���֤�������ʺŵ��û������ϴ�ͼƬ���ɱ������ (cracker) �Ƚ����Ż��ʵ��Ĺ���ϴ��������й����ݿ�����ú� <a href="5.4.php.php" alt="5.4.php">5.4 ���԰�</a>��������ͬ��<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;head&gt;<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;adadd.php<br></font><font color="#007700">if&nbsp;((</font><font color="#0000BB">$banner</font><font color="#007700">==</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$url</font><font color="#007700">==</font><font color="#DD0000">""</font><font color="#007700">))&nbsp;{<br></font><font color="#0000BB">?&gt;<br></font>&lt;title&gt;�������&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>��Ȩֵ��������ͼƬ���ֵĻ��ʾ����ߣ�Ĭ��ֵΪ&nbsp;1��<br>&lt;FORM&nbsp;ENCTYPE="multipart/form-data"&nbsp;ACTION="adadd.php"&nbsp;METHOD=POST&gt;<br>&lt;table&nbsp;border=0&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;���&nbsp;Banner:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=banner&nbsp;TYPE="file"&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;�����ַ&nbsp;URL:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=url&nbsp;type=text&nbsp;size=30&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;�����ַ���&nbsp;ALT:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=alt&nbsp;type=text&nbsp;size=30&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;���˵��:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=descript&nbsp;type=text&nbsp;size=30&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;��ʾ��Ȩ:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=priority&nbsp;type=text&nbsp;size=5&nbsp;value=1&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;colspan=2&nbsp;align=right&gt;&lt;input&nbsp;type="submit"&nbsp;VALUE="ȷ��"&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/FORM&gt;<br><font color="#0000BB">&lt;?<br></font><font color="#007700">}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#DD0000">"/home/htdocs/ad/"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">CommonHeader</font><font color="#007700">(</font><font color="#DD0000">"�ļ�&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;�Ѵ���"</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;&lt;br&gt;&lt;br&gt;����ļ��Ѿ�����\n&lt;p&gt;&lt;br&gt;&lt;br&gt;&lt;/body&gt;&lt;/html&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;};<br><br>&nbsp;&nbsp;</font><font color="#0000BB">copy</font><font color="#007700">(</font><font color="#0000BB">$banner</font><font color="#007700">,</font><font color="#DD0000">"/home1/biglobe3/ad/"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=WWW"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/home/oracle/product/7.3.2"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"LD_LIBRARY_PATH=/home/oracle/product/7.3.2/lib"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS32=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;<br>&nbsp;&nbsp;</font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"insert&nbsp;into&nbsp;ad(url,&nbsp;banner,&nbsp;alt,&nbsp;descript,&nbsp;priority)&nbsp;values('$url',&nbsp;'$banner_name',&nbsp;'$alt',&nbsp;'$descript',&nbsp;$priority)"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;title&gt;����������&lt;/title&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/head&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;body&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href="</font><font color="#007700">.</font><font color="#0000BB">$url</font><font color="#007700">.</font><font color="#DD0000">"&gt;&lt;img&nbsp;src=/ad/"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;alt=\""</font><font color="#007700">.</font><font color="#0000BB">$alt</font><font color="#007700">.</font><font color="#DD0000">"\"&nbsp;border=0&gt;&lt;/a&gt;&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;ul&nbsp;type=disc&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;�����ַ:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$url</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;�����ַ���:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$alt</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;���˵��:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$descript</font><font color="#007700">;&nbsp;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;��ʾ��Ȩ:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$priority</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/ul&gt;"</font><font color="#007700">;<br>}<br><br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table></div><p>

��ȻҪʹ������ĳ���֮ǰ������������ ad ���ϱ�SQL ���ֶ�����<p>

<pre>
CREATE TABLE ad (
  url       varchar2(1024) not null,
  banner    varchar2(1024) not null,
  alt       varchar2(255)  null,
  descript  varchar2(255)  null,
  priority  number(4) not null default 1
);
</pre><p>

<table border=1>
<tr><th>���</th><th>�ֶ�</th><th>����</th><th>��������</th><th>���ϳ���</th><th>�ֶ�˵��</th></tr>
<tr><td align=right>0</td><td nowrap>�����ַ</td><td nowrap>url</td><td nowrap>varchar2</td><td nowrap>1024</td><td nowrap></td></tr>
<tr><td align=right>1</td><td nowrap>ͼƬ·��</td><td nowrap>banner</td><td nowrap>varchar2</td><td nowrap>1024</td><td nowrap></td></tr>
<tr><td align=right>2</td><td nowrap>�ַ�����ʾ</td><td nowrap>alt</td><td nowrap>varchar2</td><td nowrap>255</td><td nowrap></td></tr>
<tr><td align=right>3</td><td nowrap>���˵��</td><td nowrap>descript</td><td nowrap>varchar2</td><td nowrap>255</td><td nowrap></td></tr>
<tr><td align=right>4</td><td nowrap>��ʾ��Ȩ</td><td nowrap>priority</td><td nowrap>number</td><td nowrap>4</td><td nowrap>1 ΪĬ��ֵ��0 ��ͣ��</td></tr>
</table><p>

ֵ��һ�������������˼�Ȩ�Ĺ��ܣ���һ�����Ҫ�����ع��ʣ�����Խ���ʾ��Ȩ���ֶ����ּӴ����� 5�����ĳ��ֻ��ʾͻ��ֻ��Ϊ 1 �ĸ��屶��<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;ad.php<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=WWW"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/home/oracle/product/7.3.2"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"LD_LIBRARY_PATH=/home/oracle/product/7.3.2/lib"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS32=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br><br></font><font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"SELECT&nbsp;url,&nbsp;banner,&nbsp;alt,&nbsp;priority&nbsp;FROM&nbsp;ad&nbsp;where&nbsp;priority&nbsp;&gt;&nbsp;0"</font><font color="#007700">;<br></font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br></font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">$pricount</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;<br>while(</font><font color="#0000BB">ora_fetch</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">2</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">3</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$pricount&nbsp;</font><font color="#007700">+=&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>};<br><br></font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br></font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">srand</font><font color="#007700">((double)</font><font color="#0000BB">microtime</font><font color="#007700">()*</font><font color="#0000BB">1000000</font><font color="#007700">);<br></font><font color="#0000BB">$pri&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">rand</font><font color="#007700">(</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">$pricount</font><font color="#007700">);<br></font><font color="#0000BB">$pricount</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;<br>for(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$ad</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$pricount&nbsp;</font><font color="#007700">+=&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">];<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$pri&nbsp;</font><font color="#007700">&lt;=&nbsp;</font><font color="#0000BB">$pricount</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$ad1</font><font color="#007700">[]=</font><font color="#DD0000">"&lt;a&nbsp;href="</font><font color="#007700">.</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;target=new&gt;&lt;img&nbsp;src=/ad/"</font><font color="#007700">.</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;width=468&nbsp;height=60&nbsp;border=0&nbsp;alt=\""</font><font color="#007700">.</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">].</font><font color="#DD0000">"\"&gt;&lt;/a&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;}<br>}<br>echo&nbsp;</font><font color="#0000BB">$ad1</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];<br><br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table></div><p>

����ĳ���Ϊ���õĹ����ʾ�������е� $pricount ����Ϊ���й�� priority �������ĺ͡������Ƚ����еĹ����Ϣ����������� $ad �У��漴�������ݿ⡣����ʱ��ȡ��������ӣ�֮���ٴ� 1 �� $pricount �����ȡһ�����֡�<p>

��ҳ��Ҫ�ù�����ֻҪ����Ҫ���ĵط����� <nobr><font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">include(</font><font color="#DD0000">"ad.php"</font><font color="#007700">);&nbsp;</font><font color="#0000BB">?&gt;</font></nobr> �Ϳ����ˣ���Ȼ Include ��·�� (�� httpd.conf ��) Ҫ����ò��С�
        <p> ����ĳ����иĽ��ռ䣬���Լ������ Click Log ���ܣ�������ʾ�� Log ���ܣ��Ķ���ʾ��Ȩ�ĳ���....�ȵȣ��Ͳ��������ˣ��Ͼ��������Ҫ���� 
          PHP ��ʵ��Ӧ�ü����򿪷����������׼������������Ҫ�ֳɵĹ���׼��������� <a href="/to.asp?url=http://www.phpwizard.net/phpAds/" tppabs="/to.asp?url=http://www.phpwizard.net/phpAds/">http://www.phpwizard.net/phpAds</a>������һ���� 
          PHP ���������Ĺ����� 
        <p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="5.5.php.php" alt="5.5.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="funcindex.php.php" alt="funcindex.php">��һҳ</a> 
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
