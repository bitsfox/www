<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - �û���֤</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>�û���֤</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr>
      <td> ��ר���� Web ��վ�ϣ���������Ҫ�û����ʺż����룬Ҳ�������ȷ�ϵĲ��衣���ڵ� <a href="http://hoohoo.ncsa.uiuc.edu/" tppabs="/to.asp?url=http://hoohoo.ncsa.uiuc.edu/">NCSA 
        httpd ������</a>��û���ṩ�����û�ȷ�ϵĹ��ܣ�Webmaster ֻ�����ֹ�����һ�����ȷ�ϵ� CGI ����
        <p> �� <a href="http://www.w3c.org/Daemon/" tppabs="http://www.w3c.org/Daemon/">CERN 
          httpd</a> ֮��� Web �������󲿷ݶ��ṩ���û����ȷ�ϵĹ��ܡ�����ÿ�� Web �����������ö���̫��ͬ�����������϶���ͬС�졣
        <p>

���¾��� Apache �������ϵ��û����ȷ�ϵ����á�<p>

<pre>
&lt;Directory /home/MyMember&gt;
AuthType Basic
AuthName MyMember
AuthUserFile /usr/local/MyMember.txt
Options Includes ExecCGI
&lt;Limit GET POST&gt;
require valid-user
&lt;/Limit&gt;
&lt;/Directory&gt;
</pre><p>


����������У����û��ڿ� MyMember Ŀ¼�����е��ļ�������ͼƬ�ļ���������ʽ�ļ�ʱ������Ҫ�û����ʺ�����ȷ�ϡ����û����ʺż������ļ��������� /usr/local/MyMember.txt ֮�С�<p>

����ʺ������ļ� /usr/local/MyMember.txt �����ӿ���������������ð��ǰ���ַ������û��ʺţ�ð��֮����ַ����Ǿ������ɻ�ԭ���ܵ����룬����һ�㶼��ʹ�ô�ͳ�� DES ���룬�����ͷ���������������ӵ��ַ� (salt)�������ж��� 3P��ÿ�д���һλ�û�����Ȼ Webmaster Ҫ���п����ظ��ʺŵ����Ρ��Ƚ��������� Win32 ϵͳ�ϼ� Apache �����Σ�ð�ź�����벻�ɼ��ܣ���Ϊ Win32 û���ṩ�ⷽ��ı��� API������û�����������ķ�ʽ���ڡ�<p>

<pre>
john1234:3PWudBlJMiwro
queenwan:3PFNVLNPN9W0M
noname00:3PEsXaJx5pk7E
wilson49:3PjoWb0EnaG22
rootboot:3PIt0snI6.84E
sun_moon:3PvymMeNOc.x.
nobody38:3PbskPKwV94hw
</pre><p>

�� Apache 1.3.6 ���ϣ������� ~apache/bin/htpasswd ���������ʵ��ʺż����룬��������Ҫ������ϵ���ҵ��վ�����ܾ���Ҫ����д�����������ˡ�UNIX ����Ҫ���� crypt() ��������롣
        <p> <img src="5.2.1.gif" alt="img/5.2.1.gif" width="350">
        <p>

��һ�ж����ú���֮������ʱ�ͻ�����������ֲ������Ĵ��ڣ�����ͼ���� SEEDNet �� MySEED ��վ���û���˻��ơ����������ʺż������������Ὣ���� BASE64 ����󣬴����������ˡ���Ȼ BASE64 ֻ�Ǳ��벻�Ǽ��ܣ���������������ִ���İ�ȫ����Ȼ���ߣ������п��ܱ��м�Ĺ��ͽ��£��ٽ� BASE64 ��ԭ����Ҳ�������û���֤�������в���ĵط��������պ�֧��ժҪ��֤ (Digest) ��ʹ�� MD5 ����󣬿��Խ���������⡣֮��ÿһҳ��Ȼ��Ҫ�ʺż����룬ֻ�������������������ͳ��������������ʺ������ˡ��ⷽ��������ᱣ�������ر�Ϊֹ���´���ִ����������������һ�Ρ�<p>

���û�������ʱ��ʹ�������ķ���������ʡ�¡��������û��������ˣ�������ʮ����ʱ���ᷢ��������������Ч�ʶ�����Ѱ�ʺ��������Ͽ壬���ܶ�ȡһҳ��Ҫ��ʮ�뵽�����ӡ�����������ʹ�÷������ṩ�������˻��ƾͲ�̫�����ˡ��� Netscape Enterprise Server �Ͽ��ܾͿ���ʹ�� NSAPI �������Լ��Ĳ�˷�ʽ���� IIS ��Ҳ������ ISAPI ������������д C/C++ ������� NSAPI/ISAPI ���Ǻ��ۣ��� PHP �����������ѡ����Ҳ�Ǳ��ڵ����⡣<p><hr size="1"><br><p>

PHP �� HTTP ��غ������ṩ�� <a href="function.php-header.php" alt="function.php?header">header()</a> �ĺ�������� Web ��������ͻ��˵Ļ�����������ʹ�������������Ϸ����������ĳ�� PHP ҳ���ʼ����Ҳ���ǵ�һ�л�ڶ��У��������µĳ��򣬿��Խ��û��ض������ߵ���ҳ��<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br>header</font><font color="#007700">(</font><font color="#DD0000">&quot;Location:&nbsp;http://wilson.gs&quot;</font><font color="#007700">);<br>exit;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table></div><p>

��Ȼ������������֮��� HTML ���ֻ����� PHP ������Զ����������û����ˡ�<p>

ͬ���ĵ������Ǿ��� header() �����û���֤�İ�Ϸ�������� PHP ���ͷ�ͳ��ַ������û��ˣ��ͻ����û��˳�����ͼ�Ĵ��ڡ�<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br>Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;Member\&quot;&quot;</font><font color="#007700">);<br></font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table>
          <p> <img src="5.2.2.gif" alt="img/5.2.2.gif" WIDTH="284" HEIGHT="163">
        </div><p>

�ڳ������ַ��� realm=\&quot;Member\&quot; �е� Member ����������ͼ�У���Ȼ��ʹ��������ȡ�����������Ҳ����������֣�������� MySEED ͼ���� Web ��վ�û������������ģ���Ӣ�Ļ����ģ��ͳ����ĵ� realm �ַ����ƺ��ͱȽϲ����ʡ�������Σ��ⶼҪ����վ�����ʼ��û���λ��������<p>

��Ȼ�⻹�Ǻֲܴڣ���Ϊ�����ͳ����ں󣬾�û�������ˣ��ʺ�������ȷҲ�ã��������Ҳ�գ����������κεĽ����������Ҫ�ٸ����׵ĳ���������<p><hr size="1"><br><p>

�ں�˵�ʹ����֤�ϣ�����ʹ�����ݿ���Ϊ�����ʺż�����ĺ�ˣ������ּܹ��������������û�������һ����û�����ʮ����û���������վ������ʮ����û��ʺţ���ô��ϲ��������վ�������缶�Ĵ�վ�ˡ�<a href="/to.asp?url=http://www.mysql.com/">MySQL</a> �Ǹ������ѡ�������վ����������ҵ������վ������������˵����ݿ⡣��Ȼ��Ҫ����������ҵ��վ��Ǯ��������Ļ����ǿ���ʹ�ÿڱ����� <a href="/to.asp?url=http://www.oracle.com/">Oracle</a> ���ݿ�ϵ�С�<p>

Ҫ�� PHP ��ʹ���κ����ݿ⣬��Ҫ�Ƚ����ݿ�ķ������˼��ͻ������úã�֮��ű��� PHP �� Apache ϵͳ��<p>

׼���� MySQL �� PHP ֮������ MySQL �м����µ����ݿ⣬�����Ǽ��� mymember���ñ�����ֵ�ȻҲ���ԡ�MySQL Ҫ�������ݿ� (Database) �����ף�ֻҪ�� MySQL ��� Database �ĵط� mkdir �Ϳ����ˡ������� UNIX Shell �´�<p>

<code>hahaha:/usr/local/mysql/data# mkdir mymember</code><p>

�ڽ��������ݿ�֮������Ҫ�������ϱ�� (Table) ����ʹ�á����õı�����£����Խ������� /tmp/memberauth.sql ��<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<pre>
CREATE TABLE MemberAuth (
   Serial mediumint(9) NOT NULL auto_increment,
   Username char(8) NOT NULL,
   Password char(8) NOT NULL,
   Enable char(1) DEFAULT '0' NOT NULL,
   PRIMARY KEY (Serial)
);
</pre>
<div align="right"><font color="c0c0c0" size="-2">�ļ� memberauth.sql </font></div>
</td></tr></table></div><p>

�ȿ��� memberauth.sql ����Щ�ֶΡ�Serial �Ǹ��Զ����ӵ������ֶΣ�ÿ����һ�����ϣ��ͻ��Զ���һ���⵱Ȼ�����ǿյ��ֶΣ����Ǿ��� NOT NULL �ˡ��������ֶ��� Username�������û����ʺţ�Ϊ��ͳһ�Լ���Ӧ��ϵͳ��������óɰ˸��֣���Ȼ����ֶ�Ҳ�����ǿյġ�Password �ǵ������ֶΣ�Ϊ�û������롣���ĸ��ֶ� Enable ��Ϊ�ʺ��Ƿ���Ч�ı�־������� 0 ��ʾ���ã�1 ����ã��պ󻹿ɼ�������ֵ����ͬ����;��<p>

��ƺ������ϱ�֮�󣬾�Ҫ�����ϱ�������ݿ��ˡ����ڳ�Ҫʹ�� MySQL ���ݿ⣬���Ե� <a href="/to.asp?url=http://www.phpwizard.net/phpMyAdmin">http://www.phpwizard.net/phpMyAdmin</a> ���� phpMyAdmin��ʹ����������������� MySQL�������ַ��㡣��ʹ������ phpMyAdmin �����������û����������� memberauth.sql ���� MySQL �С�����Ҳ������ UNIX Shell ��������ʽ��Ҳ����ͬ����Ч����
        <p> <code>mysql mymember &lt; /tmp/memberauth.sql</code>
        <p>

��׼������֮�󣬾Ϳ��������û��ʺż������� memberauth ���ϱ����ˡ���Ȼ����ʹ�� phpMyAdmin ���㣬�� mysql �����Ҫһ�ʱʵ� INSERT �ˡ�
        <p> <img src="5.2.3.gif" alt="img/5.2.3.gif" WIDTH="295" HEIGHT="228">
        <p>

���Ž�������ƺ����Ľ׶��ˡ�<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;�û���֤����&nbsp;&nbsp;&nbsp;&nbsp;auth.inc<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;1999<br>//---------------------------<br></font><font color="#0000BB">$error401&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;/home/phpdocs/error/401.php&quot;</font><font color="#007700">;<br>if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">==</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;���𿨻�Ա\&quot;&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>&nbsp;&nbsp;exit;<br>}&nbsp;else&nbsp;{<br>&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">$db_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_pconnect</font><font color="#007700">(</font><font color="#DD0000">&quot;localhost&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;myid&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;mypw&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_db_query</font><font color="#007700">(</font><font color="#DD0000">&quot;mymember&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;select&nbsp;password,&nbsp;enable&nbsp;from&nbsp;MemberAuth&nbsp;where&nbsp;username='$PHP_AUTH_USER'&quot;</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$MemberPasswd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">$MemberEnable&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">];<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$MemberEnable</font><font color="#007700">==</font><font color="#0000BB">0</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;�����ʺű�ͣ����&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">!=</font><font color="#0000BB">$MemberPasswd</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;���𿨻�Ա\&quot;&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<div align="right"><font color="c0c0c0" size="-2">Copyright (C) 1999, Wilson Peng</font></div>
</td></tr></table></div><p>

Ҫʹ����� auth.inc��Ҫ��ÿ�� PHP �ĵ�һ�м��� <br><font color="#0000BB">&lt;? </font><font color="#007700">require(</font><font color="#DD0000">&quot;auth.inc&quot;</font><font color="#007700">);</font> <font color="#0000BB">?&gt;</font> ���ڼ��뱾����� PHP �ļ��������ʺ����룬ͼƬ�ȾͲ����飬����ʹ�� Web ���������ܵ�ĳĿ¼��ȫ����飬PHP �Ե��е��Զ��ˡ�<p>

<font color="#0000BB">$error401&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;/home/phpdocs/error/401.php&quot;</font><font color="#007700">;</font><p>

���б�ʾ���û�����ȡ��������ʧ��ʱ��Ҫ��ʾ���û������ļ���<p>

<font color="#007700">if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">==</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;���𿨻�Ա\&quot;&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>
&nbsp;&nbsp;exit;<br>
}&nbsp;else&nbsp;{</font><p>

�� else ֮ǰ����û�д������룬���ͳ���������Ĵ��ڡ����е� $PHP_AUTH_USER��$PHP_AUTH_PW �� PHP ������ı������ֱ�����û�ȷ�ϵ��ʺż����롣����ĳ���Ҳ�����������������������û���֤��
        <p> <img src="5.2.4.gif" alt="img/5.2.4.gif" WIDTH="402" HEIGHT="237">
        <p>

&nbsp;&nbsp;<font color="#0000BB">$db_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_pconnect</font><font color="#007700">(</font><font color="#DD0000">&quot;localhost&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;myid&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;mypw&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_db_query</font><font color="#007700">(</font><font color="#DD0000">&quot;mymember&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;select&nbsp;password,&nbsp;enable&nbsp;from&nbsp;MemberAuth&nbsp;where&nbsp;username='$PHP_AUTH_USER'&quot;</font><font color="#007700">);</font><p><font color="#007700">

&nbsp;&nbsp;</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$MemberPasswd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];<br>
&nbsp;&nbsp;</font><font color="#0000BB">$MemberEnable&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">];</font><p>

���û��������ʺż����룬�������ݿ��ѯ��ͬʱ��˸��û��Ƿ��Կ�ʹ�á�<p>

&nbsp;&nbsp;<font color="#007700">if&nbsp;(</font><font color="#0000BB">$MemberEnable</font><font color="#007700">==</font><font color="#0000BB">0</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;�����ʺű�ͣ����&quot;</font><font color="#007700">;<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>
&nbsp;&nbsp;}</font><p>

�����г���Ϊ�ʺű�ͣ�õ����Ρ�<p>

&nbsp;&nbsp;<font color="#007700">if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">!=</font><font color="#0000BB">$MemberPasswd</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;���𿨻�Ա\&quot;&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>
&nbsp;&nbsp;}</font><p>

����������ٴ����û�Ҫ�������ʺż����롣<p>

��ʵ��ʹ��ʱ����������Ҫ�������ҳ�ټ��� auth.inc ����ļ����Ͳ���������ͼ��ҲҪ��һ�����룬��ļ�ͷ��������û����˵���Դ����Ȼ���� MySQL ����ϵ�ϣ�����ʹ�� <a href="function.php-mysql_pconnect.php" alt="function.php?mysql_pconnect">mysql_pconnect()</a> һֱ�� MySQL ���������ӡ�����ʹ�� <a href="function.php-mysql_connect.php" alt="function.php?mysql_connect">mysql_connect()</a> ÿ���������ӣ����������Ҫ�ǵ����ʹ�� <a href="function.php-mysql_close.php" alt="function.php?mysql_close">mysql_close()</a> �����ݿ�رա�����ĳ��� auth1.inc ����һ�汾����֤���򣬾��Ǵ����Ӻ����Ϲرգ��ͷ���Դ�����ӡ�<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;�û���֤����-1&nbsp;auth1.inc<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;1999<br>//---------------------------<br></font><font color="#0000BB">$error401&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;/home/phpdocs/error/401.php&quot;</font><font color="#007700">;<br>if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">==</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;���𿨻�Ա\&quot;&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>&nbsp;&nbsp;exit;<br>}&nbsp;else&nbsp;{<br>&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">$db_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_connect</font><font color="#007700">(</font><font color="#DD0000">&quot;localhost&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;myid&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;mypw&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_db_query</font><font color="#007700">(</font><font color="#DD0000">&quot;mymember&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;select&nbsp;password,&nbsp;enable&nbsp;from&nbsp;MemberAuth&nbsp;where&nbsp;username='$PHP_AUTH_USER'&quot;</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$MemberPasswd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">$MemberEnable&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">mysql_close</font><font color="#007700">(</font><font color="#0000BB">$db_id</font><font color="#007700">);<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$MemberEnable</font><font color="#007700">==</font><font color="#0000BB">0</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;�����ʺű�ͣ����&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">!=</font><font color="#0000BB">$MemberPasswd</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;���𿨻�Ա\&quot;&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<div align="right"><font color="c0c0c0" size="-2">Copyright (C) 1999, Wilson Peng</font></div>
</td></tr></table></div><p>

��ʵ��Ӧ��ʱ�����������ݿ��м�����๦�ܣ����û����� (CUG) �Ĺ��ܣ����Ǽ���ʱ���ֶΣ��������ڼ�顣���еı仯����������ߵ���˼�ˡ�

<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr> 
      <td height="16">[ <a href="5.1.php.php" alt="5.1.php">��һҳ</a> 
      </td>
      <td height="16"> <a href="5.3.php.php" alt="5.3.php">��һҳ</a> 
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
