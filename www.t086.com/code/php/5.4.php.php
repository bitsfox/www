<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ���԰�</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>���԰�</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

�󲿷ݵ���վ�����ῼ�ǵ����û�֮��Ļ�����ϵ����ʱ�������԰�Ĺ��ܣ������û����µ���һ�Σ�������һЩ����վ�Ļ�����Ϣ��<p>

������ϣ����Ժܼ򵥵�ֻ�����û��Ķ�ƪ���ԣ�Ҳ������Ƶ������ʷ��ű���ܸ��ӵ� Web BBS ϵͳ����Ȼ��Ҫ��δ���һ�������Լ���վ�����԰壬�Ͷ�����վ�������Լ� Web ��վ������Ա����˼�ˡ�<p>

��������ܵķ������Ǽ򵥵���ʾ�������Ե����ݡ����û�����һ�ο���������Ե����ϡ�ϵͳ�ĺ�˴���������� Oracle 7.x ������ݿ�ϵͳ�������е����ݿ� (database) ����Ϊ WWW�����ӵ��û��ʺ�Ϊ user38������Ϊ iam3849��Ҫֱ��ʹ�ñ�����������ִ������� SQL ָ����� guestbook �����ϱ��<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<pre>
CREATE TABLE guestbook (
  serial    varchar2(255)  not null,
  ref       varchar2(255)  null,
  id        char(8)        not null,
  alias     varchar2(32)   not null,
  ip        varchar2(1024) null,
  msgdate   date           not null,
  email     varchar2(1024) null,
  msg       varchar2(2000) not null,
  flag      char(1)        default 1,
  primary key(serial)
);
</pre>
</td></tr></table></div><p>

����� SQL ���ֶ�˵������ϸ���ϼ��±�<p>

<table border=1>
<tr><th>���</th><th>�ֶ�</th><th>����</th><th>��������</th><th>���ϳ���</th><th>�ֶ�˵��</th><th>����</th><th>Key</th></tr>
<tr><td align=right>0</td><td nowrap>��ˮ��</td><td nowrap>serial</td><td nowrap>varchar2</td><td nowrap>255</td><td nowrap></td><td nowrap>NN</td><td nowrap>PK</td></tr>
<tr><td align=right>1</td><td nowrap>������ˮ��</td><td nowrap>ref</td><td nowrap>varchar2</td><td nowrap>255</td><td nowrap>�ݱ���������<br>�����Թ�����</td><td nowrap></td><td nowrap></td></tr>
<tr><td align=right>2</td><td nowrap>�ʺ�</td><td nowrap>id</td><td nowrap>char</td><td nowrap>8</td><td nowrap>�û��ʺ�</td><td nowrap>NN</td><td nowrap></td></tr>
<tr><td align=right>3</td><td nowrap>����</td><td nowrap>alias</td><td nowrap>varchar2</td><td nowrap>32</td><td nowrap>��ʾ������</td><td nowrap>NN</td><td nowrap></td></tr>
<tr><td align=right>4</td><td nowrap>��ַ</td><td nowrap>ip</td><td nowrap>varchar2</td><td nowrap>1024</td><td nowrap>���� IP</td><td nowrap></td><td nowrap></td></tr>
<tr><td align=right>5</td><td nowrap>ʱ��</td><td nowrap>msgdate</td><td nowrap>date</td><td nowrap></td><td nowrap></td><td nowrap>NN</td><td nowrap></td></tr>
<tr><td align=right>6</td><td nowrap>�����ʼ�</td><td nowrap>email</td><td nowrap>varchar2</td><td nowrap>1024</td><td nowrap></td><td nowrap></td><td nowrap></td></tr>
<tr><td align=right>7</td><td nowrap>��������</td><td nowrap>msg</td><td nowrap>varchar2</td><td nowrap>2000</td><td nowrap></td><td nowrap>NN</td><td nowrap></td></tr>
<tr><td align=right>8</td><td nowrap>��ʾ��־</td><td nowrap>flag</td><td nowrap>char</td><td nowrap>1</td><td nowrap>0: ����ʾ<br>1: ��ʾ (Ĭ��)</td><td nowrap></td><td nowrap></td></tr>
</table><p>

�ڱ��ڵ����԰���س����У���������<a href="5.2.php.php" alt="5.2.php">�û���֤</a>���ܣ�������� guestbook ���ϱ���ʺ����������û�����֤�ʺţ����� Webmaster �պ���Ѱ�����ķ����ߡ�������������ֶΣ�����Ҫ�Ķ�����ʵϰ�ˡ�<p>

Ҫʹ�ñ��ڵĳ�������Ҫ��װ�� Oracle 7.x �棬��ȷ�� Web Server �˵� SQL*net ����˳������ Oracle ���ݿ⡣֮��Ҫ�ڱ��� PHP ʱ���� --with-oracle=/home/oracle/product/7.3.2 ��ѡ���Ȼ�ĳ�������·��Ҳû��ϵ��ֻҪ��·������� Oracle ��·�����ɡ��й� Oracle װ�輰ʹ���ϵ�ϸ����ο�����鼮��<p>

����ĳ����ǽ��û���������Ϣ�ӵ� guestbook �������ϱ��С���Ҫ�����û���֤���ܣ����ڳ���տ�ʼʱ��飬�������߾Ϳ���ȷ����ݣ�����ȡ���ԾͲ�����ݼ�顣�������ÿ��Է�ֹ�������ԣ�ȴ�ֲ��������Թ���ֻ��������ʹ�á�<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;�������Գ���&nbsp;addmsg.php<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;2000<br>//---------------------------<br>//<br>//&nbsp;�����������������ݼ�鹦��<br>//<br></font><font color="#007700">if&nbsp;((</font><font color="#0000BB">$alias</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$msg</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=WWW"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/home/oracle/product/7.3.2"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"LD_LIBRARY_PATH=/home/oracle/product/7.3.2/lib"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS32=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;<br>&nbsp;&nbsp;</font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$serial</font><font color="#007700">=</font><font color="#0000BB">md5</font><font color="#007700">(</font><font color="#0000BB">uniqid</font><font color="#007700">(</font><font color="#0000BB">rand</font><font color="#007700">()));<br>&nbsp;&nbsp;</font><font color="#0000BB">$ref</font><font color="#007700">=</font><font color="#DD0000">""</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">=</font><font color="#0000BB">$PHP_AUTH_USER</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$ip</font><font color="#007700">=</font><font color="#0000BB">$REMOTE_ADDR</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">base64_encode</font><font color="#007700">(</font><font color="#0000BB">$msg</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$flag</font><font color="#007700">=</font><font color="#DD0000">"1"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"INSERT&nbsp;into&nbsp;guestbook(serial,&nbsp;ref,&nbsp;id,&nbsp;alias,&nbsp;ip,&nbsp;msgdate,&nbsp;email,&nbsp;msg,&nbsp;flag)&nbsp;values('$serial',&nbsp;'$ref',&nbsp;'$id',&nbsp;'$alias',&nbsp;'$ip',&nbsp;sysdate,&nbsp;'$email',&nbsp;'$msg',&nbsp;'$flag')"</font><font color="#007700">;<br><br>&nbsp;&nbsp;</font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;./index.php"</font><font color="#007700">);<br>&nbsp;&nbsp;exit;<br><br>}&nbsp;else&nbsp;{<br></font><font color="#0000BB">?&gt;<br></font>&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;��д����&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&nbsp;bgcolor=ffffff&gt;<br>&lt;form&nbsp;method=POST&nbsp;action="<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;&nbsp;</font><font color="#0000BB">?&gt;</font>"&gt;<br>&lt;table&nbsp;border=0&nbsp;cellpadding=2&nbsp;width=395&gt;<br>&nbsp;&nbsp;&lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;nowrap&gt;&lt;font&nbsp;color=004080&gt;����С��&lt;/font&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;width=20%&gt;&lt;input&nbsp;type=text&nbsp;name=alias&nbsp;size=8&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;nowrap&gt;&lt;font&nbsp;color=004080&gt;�����ʼ�&lt;/font&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;width=50%&gt;&lt;input&nbsp;type=text&nbsp;name=email&nbsp;size=18&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;nowrapvalign=top&gt;&lt;font&nbsp;color=004080&gt;����&lt;/font&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;width=80%&nbsp;colspan=3&gt;&lt;textarea&nbsp;rows=5&nbsp;name=msg&nbsp;cols=33&gt;&lt;/textarea&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;width=100%&nbsp;colspan=4&nbsp;align=center&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type=submit&nbsp;value="�ͳ�����"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type=reset&nbsp;value="��������"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt;<br>&nbsp;&nbsp;&lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/form&gt;<br>&lt;/body&gt;<br>&lt;/html&gt;<br><font color="#0000BB">&lt;?php<br></font><font color="#007700">}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table></div><p>

����ĳ�����ִ��ʱ���ȼ����� alias �� msg �Ƿ������ϣ������������ͳ���д���Եı���û��ˣ����û���д���ԡ�<p>

���û�������ԣ����� "�ͳ�����" �İ�ť����ִ�г����ǰ�벿�ݡ�<p>

�����ŷֳ��岿��
<ol type=1>
<li>���� Oracle ��Ҫ�Ļ�������
<li>���� Oracle ���ݿ�
<li>�������ϣ����� Oracle ��
<li>������ Oracle ������
<li>����������ʾ���µ���������
</ol><p>

������ Oracle �����Ĳ��ݣ��� PHP �ĺ��� <a href="function.php-putenv.php" alt="function.php?putenv">putenv()</a>�������ò���ϵͳ��Ļ���������Ҫʹ������Ҫ�ǵü�����������<p>

<font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);</font><p>

֮���ʹ�� Oracle ������Ĺ���: <a href="function.php-ora_logon.php" alt="function.php?ora_logon">ora_logon()</a> �ȵȡ���� <a href="group.php-39.php" alt="group.php?39">Oracle ���ݿ⺯����</a>��������������⣬���Ժ����׵Ĳ��� Oracle ���ݿ⡣<p>

���������������ϣ��Ա����� Oracle ���ݿ���<p>

<font color="#0000BB">$serial</font><font color="#007700">=</font><font color="#0000BB">md5</font><font color="#007700">(</font><font color="#0000BB">uniqid</font><font color="#007700">(</font><font color="#0000BB">rand</font><font color="#007700">()));</font><br>
<font color="#0000BB">$ref</font><font color="#007700">=</font><font color="#DD0000">""</font><font color="#007700">;</font><br>
<font color="#0000BB">$id</font><font color="#007700">=</font><font color="#0000BB">$PHP_AUTH_USER</font><font color="#007700">;</font><br>
<font color="#0000BB">$ip</font><font color="#007700">=</font><font color="#0000BB">$REMOTE_ADDR</font><font color="#007700">;</font><br>
<font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">base64_encode</font><font color="#007700">(</font><font color="#0000BB">$msg</font><font color="#007700">);</font><br>
<font color="#0000BB">$flag</font><font color="#007700">=</font><font color="#DD0000">"1"</font><font color="#007700">;</font><br>
<font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"INSERT&nbsp;into&nbsp;guestbook(serial,&nbsp;ref,&nbsp;id,&nbsp;alias,&nbsp;ip,&nbsp;msgdate,&nbsp;email,&nbsp;msg,&nbsp;flag)&nbsp;values('$serial',&nbsp;'$ref',&nbsp;'$id',&nbsp;'$alias',&nbsp;'$ip',&nbsp;sysdate,&nbsp;'$email',&nbsp;'$msg',&nbsp;'$flag')"</font><font color="#007700">;</font><p>

$serial ����Ϊ��һ�޶����ַ�����������������������ص��ַ��������� md5 ���룬���ַ���Ū�ң��γ����ƹ�ϡ�������������ַ����������ַ��������ֱ�ú��ң��ɷ�ֹ�û��������Ǻڿͻ�ɿ������������ϵͳ��<p>

$ref ����Ŀǰ����Ч�ġ�$id ����Ϊ�û���֤�ã����ڳ���ʼ���м����û���֤�ĳ����� $PHP_AUTH_USER �����û����ʺţ����� $id �����С�<p>

�����û�д���ַ�����Ϊ�˷�ֹ���ݿ����ʱ�ĸ����Ըʴཫ���� BASE64 ���롣�����������ֵ�����ַ�һ����ʧ����Ȼ���Ǿ������������ Web ������ԣ�ִ�п��١��޸ķ����������Ҫ�ģ�ʵ��û�б�Ҫ���˷Ѿ���ȥ������Щ���ĵĳ��������ˡ�ֵ��ע�����ʹ�� BASE64 ���룬�����ַ������ʹ�Լ 1/3�������ݿ�Ĵ���ռ����ޣ����ܾͲ��ʺ�����������ˣ�����˵����������Ӳ�����ˣ�������ʮ�� GB ���ϣ�Ӧ�ò��ῼ�����ݿ�ռ����޵�����Ŷԡ�<p>

��󣬽���������� $query �ַ����������ݿ�ִ�� SQL ָ��ʹ�þͿ����ˡ�<p>

<font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;</font><br>
<font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);</font><br>
<font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);</font><br>
<font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);</font><p>

Ҫִ�� Oracle �� SQL ָ��ǰ��Ҫ�Ⱦ��� parse �Ĳ��衣����ǰ����� @ (��: @ora_prase();)�����Բ����û�����������Ϣ����ִ�� query ָ��󣬾Ϳ��Թر��� Oracle ֮��������ˡ�<p>

<font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;./index.php"</font><font color="#007700">);<br>
exit;</font><p>

�������������ض��� index.php�����û��������������ԣ�����������ԵĲ��衣<p>

֮�����������Ե�������ʾ����<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
&lt;html&gt;
<br>&lt;head&gt;
<br>&lt;meta&nbsp;content="text/html;&nbsp;charset=gb2312"&nbsp;http-equiv=Content-Type&gt;
<br>&lt;title&gt;���԰�&lt;/title&gt;
<br>&lt;/head&gt;
<br>&lt;body&nbsp;bgcolor=ffffff&gt;
<br><font color="#0000BB">&lt;?php
<br></font><font color="#FF8000">//---------------------------
<br>//&nbsp;������ʾ����&nbsp;index.php
<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng
<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;2000
<br>//---------------------------
<br>
<br></font><font color="#0000BB">$WebmasterIPArray&nbsp;</font><font color="#007700">=&nbsp;array(
<br>&nbsp;&nbsp;</font><font color="#DD0000">"10.0.1.30"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������Ա�׵Ļ���&nbsp;IP
<br>&nbsp;&nbsp;</font><font color="#DD0000">"10.0.2.28"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������Ա�ҵĻ���&nbsp;IP
<br></font><font color="#007700">);
<br>
<br></font><font color="#0000BB">$WebmasterIP</font><font color="#007700">=</font><font color="#0000BB">false</font><font color="#007700">;
<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">Count</font><font color="#007700">(</font><font color="#0000BB">$WebmasterIPArray</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{
<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$REMOTE_ADDR&nbsp;</font><font color="#007700">==&nbsp;</font><font color="#0000BB">$WebmasterIPArray</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">])&nbsp;</font><font color="#0000BB">$WebmasterIP</font><font color="#007700">=</font><font color="#0000BB">true</font><font color="#007700">;
<br>}
<br>
<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=WWW"</font><font color="#007700">);
<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);
<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/home/oracle/product/7.3.2"</font><font color="#007700">);
<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"LD_LIBRARY_PATH=/home/oracle/product/7.3.2/lib"</font><font color="#007700">);
<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);
<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS32=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);
<br>
<br></font><font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;
<br></font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);
<br></font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);
<br>
<br></font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"SELECT&nbsp;serial,&nbsp;ref,&nbsp;id,&nbsp;alias,&nbsp;ip,&nbsp;TO_CHAR(msgdate,&nbsp;'yyyy/mm/dd&nbsp;hh:mi:ss'),&nbsp;email,&nbsp;msg&nbsp;FROM&nbsp;guestbook&nbsp;where&nbsp;flag='1'&nbsp;order&nbsp;by&nbsp;msgdate&nbsp;desc"</font><font color="#007700">;
<br></font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;
<br></font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);
<br></font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;
<br>while(</font><font color="#0000BB">ora_fetch</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">))&nbsp;{
<br>&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">);
<br>&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">);
<br>&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">2</font><font color="#007700">);
<br>&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">3</font><font color="#007700">);
<br>&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">4</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">4</font><font color="#007700">);
<br>&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">5</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">5</font><font color="#007700">);
<br>&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">6</font><font color="#007700">);
<br>&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">7</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">7</font><font color="#007700">);
<br>&nbsp;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;
<br>}
<br></font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);
<br></font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);
<br>
<br>echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href=addmsg.php&gt;��������....&lt;/a&gt;&lt;p&gt;\n"</font><font color="#007700">;
<br>
<br>if&nbsp;(</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;{
<br>&nbsp;&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">;
<br>}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;
<br>}
<br>
<br></font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$guestbook</font><font color="#007700">);
<br></font><font color="#0000BB">$msgnum</font><font color="#007700">=</font><font color="#0000BB">20</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;ÿҳ��ʮ��
<br></font><font color="#0000BB">$start&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">*&nbsp;</font><font color="#0000BB">$msgnum</font><font color="#007700">;
<br></font><font color="#0000BB">$end&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$start&nbsp;</font><font color="#007700">+&nbsp;</font><font color="#0000BB">$msgnum</font><font color="#007700">;
<br>if&nbsp;(</font><font color="#0000BB">$end&nbsp;</font><font color="#007700">&gt;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">)&nbsp;</font><font color="#0000BB">$end</font><font color="#007700">=</font><font color="#0000BB">$i</font><font color="#007700">;
<br></font><font color="#0000BB">$totalpage</font><font color="#007700">=</font><font color="#0000BB">$i</font><font color="#007700">/</font><font color="#0000BB">$msgnum</font><font color="#007700">;
<br>
<br></font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#DD0000">""</font><font color="#007700">;
<br>if&nbsp;(</font><font color="#0000BB">$page</font><font color="#007700">&gt;</font><font color="#0000BB">0</font><font color="#007700">)&nbsp;</font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"&lt;a&nbsp;href=index.php?"</font><font color="#007700">.(</font><font color="#0000BB">$page</font><font color="#007700">-</font><font color="#0000BB">1</font><font color="#007700">).</font><font color="#DD0000">"&gt;&amp;lt;��ҳ&lt;/a&gt;&nbsp;-&nbsp;"</font><font color="#007700">;
<br></font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"[��&nbsp;"</font><font color="#007700">;
<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$totalpage</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{
<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">!=</font><font color="#0000BB">$page</font><font color="#007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$pagestr&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"&lt;a&nbsp;href=index.php?$i&gt;"</font><font color="#007700">.(</font><font color="#0000BB">$i</font><font color="#007700">+</font><font color="#0000BB">1</font><font color="#007700">).</font><font color="#DD0000">"&lt;/a&gt;&nbsp;"</font><font color="#007700">;
<br>&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$pagestr&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$pagestr</font><font color="#007700">.(</font><font color="#0000BB">$i</font><font color="#007700">+</font><font color="#0000BB">1</font><font color="#007700">).</font><font color="#DD0000">"&nbsp;"</font><font color="#007700">;
<br>&nbsp;&nbsp;}
<br>}
<br></font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;ҳ]&nbsp;"</font><font color="#007700">;
<br>if&nbsp;(</font><font color="#0000BB">$page</font><font color="#007700">&lt;(</font><font color="#0000BB">$totalpage</font><font color="#007700">-</font><font color="#0000BB">1</font><font color="#007700">))&nbsp;</font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"-&nbsp;&lt;a&nbsp;href=index.php?"</font><font color="#007700">.(</font><font color="#0000BB">$page</font><font color="#007700">+</font><font color="#0000BB">1</font><font color="#007700">).</font><font color="#DD0000">"&gt;��ҳ&amp;gt;&lt;/a&gt;&nbsp;"</font><font color="#007700">;
<br>
<br></font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#DD0000">"&lt;div&nbsp;align=center&gt;$pagestr&lt;/div&gt;"</font><font color="#007700">;
<br>echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;"</font><font color="#007700">.</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"&lt;hr&gt;&lt;p&gt;\n"</font><font color="#007700">;
<br>
<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">$start</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$end</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;&lt;hr&gt;&lt;p&gt;\n"</font><font color="#007700">;
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;\n&lt;font&nbsp;color=e06060&gt;"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">5</font><font color="#007700">].</font><font color="#DD0000">"&lt;/font&gt;&nbsp;&amp;nbsp;&nbsp;"</font><font color="#007700">;
<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">]!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href=mailto:"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">].</font><font color="#DD0000">"&gt;"</font><font color="#007700">;
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;strong&gt;"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">].</font><font color="#DD0000">"&lt;/strong&gt;"</font><font color="#007700">;
<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">]!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/a&gt;"</font><font color="#007700">;
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;
<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$WebmasterIP</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href=erase.php?"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">"&gt;ɾ����ƪ!!&lt;/a&gt;&nbsp;("</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">].</font><font color="#DD0000">")&nbsp;&amp;nbsp;&nbsp;"</font><font color="#007700">;
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;font&nbsp;size=-1&nbsp;color=c0c0c0&gt;from:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">4</font><font color="#007700">].</font><font color="#DD0000">"&lt;/font&gt;&lt;p&gt;\n"</font><font color="#007700">;
<br>&nbsp;&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">base64_decode</font><font color="#007700">(</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">7</font><font color="#007700">]);
<br>&nbsp;&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">nl2br</font><font color="#007700">(</font><font color="#0000BB">$msg</font><font color="#007700">);
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">;
<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;\n"</font><font color="#007700">;
<br>}&nbsp;
<br>
<br>echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;&lt;hr&gt;&lt;p&gt;\n"</font><font color="#007700">;
<br>echo&nbsp;</font><font color="#0000BB">$pagestr</font><font color="#007700">;
<br>
<br></font><font color="#0000BB">?&gt;
<br></font>&lt;/body&gt;
<br>&lt;/html&gt;</font>
</td></tr></table></div><p>

����ʾ���ԵĲ��ݣ����ǵ������������ܶ࣬�����������Ļ������ܻ����û�����·����ʱ�������������ݿ⣬��ˣ�������������ݿ⣬ȡ����Ҫ�����Ϻ����Ϲر����ݿ⣬�������͸��û���Ӧ����õĶԲߡ�<p>

����ֳ��Ĳ���
<ol type=1>
<li>��ʼ��
<li>ȡ���ݿ��е�����
<li>����Ҫ��ʾ��ҳ��
<li>�ͳ�����
</ol>
        <p>&nbsp; 
        <p>

        <div align=center></div>
        <p>

<font color="#0000BB">$WebmasterIPArray&nbsp;</font><font color="#007700">=&nbsp;array(</font><br>
&nbsp;&nbsp;<font color="#DD0000">"10.0.1.30"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������Ա�׵Ļ���&nbsp;IP</font><br>
&nbsp;&nbsp;<font color="#DD0000">"10.0.2.28"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;������Ա�ҵĻ���&nbsp;IP</font><br>
<font color="#007700">);</font><p>
<font color="#0000BB">$WebmasterIP</font><font color="#007700">=</font><font color="#0000BB">false</font><font color="#007700">;<br>
for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">Count</font><font color="#007700">(</font><font color="#0000BB">$WebmasterIPArray</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>
&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$REMOTE_ADDR&nbsp;</font><font color="#007700">==&nbsp;</font><font color="#0000BB">$WebmasterIPArray</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">])&nbsp;</font><font color="#0000BB">$WebmasterIP</font><font color="#007700">=</font><font color="#0000BB">true</font><font color="#007700">;<br>
}</font><br>
<font color="#FF8000">// ֮���ʼ�� Oracle ������</font><p>

��ʾ��������Գ���ĳ�ʼ�����ݶ���࣬����ʾ��������һ�����ܣ����� Webmaster �ĵ��ԡ��� Webmaster ʹ�õ� IP Address ���� $WebmasterIPArray ��������У���������ʾ����ʱ����ʾɾ�����Ե��ַ��������㴦���������ԡ�<p>

<font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;<br>
</font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br>
</font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);</font><p><font color="#007700">
</font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"SELECT&nbsp;serial,&nbsp;ref,&nbsp;id,&nbsp;alias,&nbsp;ip,&nbsp;TO_CHAR(msgdate,&nbsp;'yyyy/mm/dd&nbsp;hh:mi:ss'),&nbsp;email,&nbsp;msg&nbsp;FROM&nbsp;guestbook&nbsp;where&nbsp;flag='1'&nbsp;order&nbsp;by&nbsp;msgdate&nbsp;desc"</font><font color="#007700">;<br>
</font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br>
</font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>
</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;<br>
while(</font><font color="#0000BB">ora_fetch</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">))&nbsp;{<br>
&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">2</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">3</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">4</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">4</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">5</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">5</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">6</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">7</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">7</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>
}<br>
</font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>
</font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);</font><p>

�ڳ�ʼ���󣬾Ϳ������� Oracle ���ݿ⣬�����Ե�����ȡ������ $guestbook �����С�ȡ�����Ϻ󣬾͸Ͻ������ݿ�رգ��������� $guestbook ����������ˡ�<p>

<font color="#007700">if&nbsp;(</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">;<br>
}&nbsp;else&nbsp;{<br>
&nbsp;&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>
}</font><p>

��һ�γ����ж���Ҫ��ʾ�ڼ�ҳ��Ĭ��ֵ����ʾ��һҳ��Ҫ��ʾ����ҳ��ҳ�棬��Ҫʹ�� http://xxxxxx/index.php?2 �ĸ�ʽ��Ҳ���Ǵ��� $QUERY_STRING�������ơ�֮������г��򣬶�������������ʾ��ҳ�������������ϡ�<p>

<font color="#0000BB">$msgnum</font><font color="#007700">=</font><font color="#0000BB">20</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;ÿҳ��ʮ��</font><p>

Ҫ�ı�ÿҳ����ʾ���������Ը� $msgnum �����������Ĭ��ֵΪ 20 �ʡ�<p>

<font color="#007700">for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">$start</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$end</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;&lt;hr&gt;&lt;p&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;\n&lt;font&nbsp;color=e06060&gt;"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">5</font><font color="#007700">].</font><font color="#DD0000">"&lt;/font&gt;&nbsp;&amp;nbsp;&nbsp;"</font><font color="#007700">;<br>
&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">]!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href=mailto:"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">].</font><font color="#DD0000">"&gt;"</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;strong&gt;"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">].</font><font color="#DD0000">"&lt;/strong&gt;"</font><font color="#007700">;<br>
&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">]!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/a&gt;"</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$WebmasterIP</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href=erase.php?"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">"&gt;ɾ����ƪ!!&lt;/a&gt;&nbsp;("</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">].</font><font color="#DD0000">")&nbsp;&amp;nbsp;&nbsp;"</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;font&nbsp;size=-1&nbsp;color=c0c0c0&gt;from:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">4</font><font color="#007700">].</font><font color="#DD0000">"&lt;/font&gt;&lt;p&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">base64_decode</font><font color="#007700">(</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">7</font><font color="#007700">]);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">nl2br</font><font color="#007700">(</font><font color="#0000BB">$msg</font><font color="#007700">);<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;\n"</font><font color="#007700">;<br>
}</font><p>

��һ�γ������������ʾ�������ϸ��û����ĳ����ˡ����� for ѭ������ $guestbook ��������ϰ������õ�ҳ��ȡ������ʾ���û�����ֵ��һ����ǣ��������ԵĻ��� IP Ϊ $WebmasterIPArray ���������е�һ��Ԫ�صĻ�������������ߵ���ƺ���ʾ "ɾ����ƪ!!" ���ַ�������������Աɾ���������ԡ�<p>

���¼�Ϊɾ�����Եĳ���<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;����ɾ������&nbsp;erase.php<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;2000<br>//---------------------------<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=WWW"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/home/oracle/product/7.3.2"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"LD_LIBRARY_PATH=/home/oracle/product/7.3.2/lib"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS32=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br><br></font><font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"UPDATE&nbsp;guestbook&nbsp;set&nbsp;flag='0'&nbsp;where&nbsp;serial='"</font><font color="#007700">.</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">.</font><font color="#DD0000">"'"</font><font color="#007700">;<br></font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br><br></font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br></font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;./index.php"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font><br></font>
</td></tr></table></div><p>

��ʵ�������ܵ�����ֻҪ�� Oracle ���ݿ⣬��Ҫɾ��������Ǳ����ϵ� flag �ֶ���� 0 �Ϳ����ˣ����ý�������Ĵ����ݿ����Ƴ���

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="5.3.php.php" alt="5.3.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="5.5.php.php" alt="5.5.php">��һҳ</a> 
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
