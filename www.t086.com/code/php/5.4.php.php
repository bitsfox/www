<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 留言板</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>留言板</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

大部份的网站，都会考虑到和用户之间的互动关系。这时，用留言板的功能，可让用户留下到此一游，或者是一些和网站的互动信息。<p>

在设计上，可以很简单的只留下用户的短篇留言，也可以设计到依性质分门别类很复杂的 Web BBS 系统。当然，要如何打造一个属于自己网站的留言板，就端赖网站的性质以及 Web 网站开发人员的巧思了。<p>

在这里介绍的范例，是简单的列示所有留言的内容。供用户可以一次看到多笔留言的资料。系统的后端存放留言是用 Oracle 7.x 版的数据库系统。范例中的数据库 (database) 名称为 WWW，连接的用户帐号为 user38、密码为 iam3849。要直接使用本例，必须先执行下面的 SQL 指令，建立 guestbook 的资料表格。<p>

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

上面的 SQL 各字段说明及详细资料见下表<p>

<table border=1>
<tr><th>序号</th><th>字段</th><th>名称</th><th>资料类型</th><th>资料长度</th><th>字段说明</th><th>限制</th><th>Key</th></tr>
<tr><td align=right>0</td><td nowrap>流水号</td><td nowrap>serial</td><td nowrap>varchar2</td><td nowrap>255</td><td nowrap></td><td nowrap>NN</td><td nowrap>PK</td></tr>
<tr><td align=right>1</td><td nowrap>参照流水号</td><td nowrap>ref</td><td nowrap>varchar2</td><td nowrap>255</td><td nowrap>暂保留。供回<br>覆留言功能用</td><td nowrap></td><td nowrap></td></tr>
<tr><td align=right>2</td><td nowrap>帐号</td><td nowrap>id</td><td nowrap>char</td><td nowrap>8</td><td nowrap>用户帐号</td><td nowrap>NN</td><td nowrap></td></tr>
<tr><td align=right>3</td><td nowrap>匿名</td><td nowrap>alias</td><td nowrap>varchar2</td><td nowrap>32</td><td nowrap>显示的名字</td><td nowrap>NN</td><td nowrap></td></tr>
<tr><td align=right>4</td><td nowrap>网址</td><td nowrap>ip</td><td nowrap>varchar2</td><td nowrap>1024</td><td nowrap>上网 IP</td><td nowrap></td><td nowrap></td></tr>
<tr><td align=right>5</td><td nowrap>时间</td><td nowrap>msgdate</td><td nowrap>date</td><td nowrap></td><td nowrap></td><td nowrap>NN</td><td nowrap></td></tr>
<tr><td align=right>6</td><td nowrap>电子邮件</td><td nowrap>email</td><td nowrap>varchar2</td><td nowrap>1024</td><td nowrap></td><td nowrap></td><td nowrap></td></tr>
<tr><td align=right>7</td><td nowrap>留言内容</td><td nowrap>msg</td><td nowrap>varchar2</td><td nowrap>2000</td><td nowrap></td><td nowrap>NN</td><td nowrap></td></tr>
<tr><td align=right>8</td><td nowrap>显示标志</td><td nowrap>flag</td><td nowrap>char</td><td nowrap>1</td><td nowrap>0: 不显示<br>1: 显示 (默认)</td><td nowrap></td><td nowrap></td></tr>
</table><p>

在本节的留言板相关程序中，若加入了<a href="5.2.php.php" alt="5.2.php">用户认证</a>功能，则可以在 guestbook 资料表的帐号栏中留下用户的认证帐号，方便 Webmaster 日后找寻不当的发信者。在这儿先留下字段，让需要的读者们实习了。<p>

要使用本节的程序，首先要先装好 Oracle 7.x 版，并确定 Web Server 端的 SQL*net 可以顺利连上 Oracle 数据库。之后还要在编译 PHP 时加入 --with-oracle=/home/oracle/product/7.3.2 的选项，当然改成其它的路径也没关系，只要该路径真的是 Oracle 的路径即可。有关 Oracle 装设及使用上的细节请参考相关书籍。<p>

下面的程序是将用户的留言信息加到 guestbook 留言资料表中。若要配置用户认证功能，可在程序刚开始时检查，发留言者就可以确认身份，而读取留言就不必身份检查。这种配置可以防止不当发言，却又不会让留言功能只有少数人使用。<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;新增留言程序&nbsp;addmsg.php<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;2000<br>//---------------------------<br>//<br>//&nbsp;可自行在这儿加入身份检查功能<br>//<br></font><font color="#007700">if&nbsp;((</font><font color="#0000BB">$alias</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$msg</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=WWW"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/home/oracle/product/7.3.2"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"LD_LIBRARY_PATH=/home/oracle/product/7.3.2/lib"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS32=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;<br>&nbsp;&nbsp;</font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$serial</font><font color="#007700">=</font><font color="#0000BB">md5</font><font color="#007700">(</font><font color="#0000BB">uniqid</font><font color="#007700">(</font><font color="#0000BB">rand</font><font color="#007700">()));<br>&nbsp;&nbsp;</font><font color="#0000BB">$ref</font><font color="#007700">=</font><font color="#DD0000">""</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$id</font><font color="#007700">=</font><font color="#0000BB">$PHP_AUTH_USER</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$ip</font><font color="#007700">=</font><font color="#0000BB">$REMOTE_ADDR</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">base64_encode</font><font color="#007700">(</font><font color="#0000BB">$msg</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$flag</font><font color="#007700">=</font><font color="#DD0000">"1"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"INSERT&nbsp;into&nbsp;guestbook(serial,&nbsp;ref,&nbsp;id,&nbsp;alias,&nbsp;ip,&nbsp;msgdate,&nbsp;email,&nbsp;msg,&nbsp;flag)&nbsp;values('$serial',&nbsp;'$ref',&nbsp;'$id',&nbsp;'$alias',&nbsp;'$ip',&nbsp;sysdate,&nbsp;'$email',&nbsp;'$msg',&nbsp;'$flag')"</font><font color="#007700">;<br><br>&nbsp;&nbsp;</font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;./index.php"</font><font color="#007700">);<br>&nbsp;&nbsp;exit;<br><br>}&nbsp;else&nbsp;{<br></font><font color="#0000BB">?&gt;<br></font>&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;填写留言&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&nbsp;bgcolor=ffffff&gt;<br>&lt;form&nbsp;method=POST&nbsp;action="<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;&nbsp;</font><font color="#0000BB">?&gt;</font>"&gt;<br>&lt;table&nbsp;border=0&nbsp;cellpadding=2&nbsp;width=395&gt;<br>&nbsp;&nbsp;&lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;nowrap&gt;&lt;font&nbsp;color=004080&gt;代号小名&lt;/font&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;width=20%&gt;&lt;input&nbsp;type=text&nbsp;name=alias&nbsp;size=8&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;nowrap&gt;&lt;font&nbsp;color=004080&gt;电子邮件&lt;/font&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;width=50%&gt;&lt;input&nbsp;type=text&nbsp;name=email&nbsp;size=18&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;nowrapvalign=top&gt;&lt;font&nbsp;color=004080&gt;内容&lt;/font&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;width=80%&nbsp;colspan=3&gt;&lt;textarea&nbsp;rows=5&nbsp;name=msg&nbsp;cols=33&gt;&lt;/textarea&gt;&lt;/td&gt;<br>&nbsp;&nbsp;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;width=100%&nbsp;colspan=4&nbsp;align=center&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type=submit&nbsp;value="送出留言"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type=reset&nbsp;value="擦掉留言"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt;<br>&nbsp;&nbsp;&lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/form&gt;<br>&lt;/body&gt;<br>&lt;/html&gt;<br><font color="#0000BB">&lt;?php<br></font><font color="#007700">}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table></div><p>

上面的程序在执行时，先检查变量 alias 和 msg 是否有资料，若无资料则送出填写留言的表格到用户端，供用户填写留言。<p>

若用户填好留言，按下 "送出留言" 的按钮后，则执行程序的前半部份。<p>

程序大概分成五部份
<ol type=1>
<li>配置 Oracle 需要的环境变量
<li>连上 Oracle 数据库
<li>整理资料，送入 Oracle 中
<li>结束与 Oracle 的连接
<li>结束程序，显示最新的留言资料
</ol><p>

在配置 Oracle 环境的部份，用 PHP 的函数 <a href="function.php-putenv.php" alt="function.php?putenv">putenv()</a>，可配置操作系统层的环境变量。要使用中文要记得加入下面这行<p>

<font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);</font><p>

之后就使用 Oracle 函数库的功能: <a href="function.php-ora_logon.php" alt="function.php?ora_logon">ora_logon()</a> 等等。详见 <a href="group.php-39.php" alt="group.php?39">Oracle 数据库函数库</a>。利用这个函数库，可以很轻易的操作 Oracle 数据库。<p>

再来就是整理资料，以便置入 Oracle 数据库中<p>

<font color="#0000BB">$serial</font><font color="#007700">=</font><font color="#0000BB">md5</font><font color="#007700">(</font><font color="#0000BB">uniqid</font><font color="#007700">(</font><font color="#0000BB">rand</font><font color="#007700">()));</font><br>
<font color="#0000BB">$ref</font><font color="#007700">=</font><font color="#DD0000">""</font><font color="#007700">;</font><br>
<font color="#0000BB">$id</font><font color="#007700">=</font><font color="#0000BB">$PHP_AUTH_USER</font><font color="#007700">;</font><br>
<font color="#0000BB">$ip</font><font color="#007700">=</font><font color="#0000BB">$REMOTE_ADDR</font><font color="#007700">;</font><br>
<font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">base64_encode</font><font color="#007700">(</font><font color="#0000BB">$msg</font><font color="#007700">);</font><br>
<font color="#0000BB">$flag</font><font color="#007700">=</font><font color="#DD0000">"1"</font><font color="#007700">;</font><br>
<font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"INSERT&nbsp;into&nbsp;guestbook(serial,&nbsp;ref,&nbsp;id,&nbsp;alias,&nbsp;ip,&nbsp;msgdate,&nbsp;email,&nbsp;msg,&nbsp;flag)&nbsp;values('$serial',&nbsp;'$ref',&nbsp;'$id',&nbsp;'$alias',&nbsp;'$ip',&nbsp;sysdate,&nbsp;'$email',&nbsp;'$msg',&nbsp;'$flag')"</font><font color="#007700">;</font><p>

$serial 变量为独一无二的字符串，程序先随机数产生独特的字符串，再用 md5 编码，将字符串弄乱，形成类似哈稀处理后的无意义字符串。由于字符串长，又变得很乱，可防止用户，尤其是黑客或飞客利用序号来戳系统。<p>

$ref 变量目前是无效的。$id 变量为用户认证用，若在程序开始处有加入用户认证的程序，则 $PHP_AUTH_USER 会变成用户的帐号，传入 $id 变量中。<p>

至于用户写的字符串，为了防止数据库或处理时的复杂性甘脆将它用 BASE64 编码。可以让中文字的奇怪字符一字消失，当然这是锯箭法，不过对 Web 程序而言，执行快速、修改方便才是最重要的，实在没有必要再浪费精力去处理这些中文的冲码问题了。值得注意的是使用 BASE64 编码，会让字符串膨胀大约 1/3，若数据库的储存空间有限，可能就不适合用这个方法了，话又说回来，现在硬碟便宜，随便就是十几 GB 以上，应该不会考虑数据库空间有限的问题才对。<p>

最后，将变量整理成 $query 字符串，供数据库执行 SQL 指令使用就可以了。<p>

<font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;</font><br>
<font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);</font><br>
<font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);</font><br>
<font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);</font><p>

要执行 Oracle 的 SQL 指令前，要先经过 parse 的步骤。若在前面加上 @ (如: @ora_prase();)，可以不让用户看到错误信息。在执行 query 指令后，就可以关闭与 Oracle 之间的连接了。<p>

<font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;./index.php"</font><font color="#007700">);<br>
exit;</font><p>

这二行让浏览器重定向到 index.php。让用户看到他的新留言，就完成了留言的步骤。<p>

之后来看看留言的内容显示程序。<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
&lt;html&gt;
<br>&lt;head&gt;
<br>&lt;meta&nbsp;content="text/html;&nbsp;charset=gb2312"&nbsp;http-equiv=Content-Type&gt;
<br>&lt;title&gt;留言板&lt;/title&gt;
<br>&lt;/head&gt;
<br>&lt;body&nbsp;bgcolor=ffffff&gt;
<br><font color="#0000BB">&lt;?php
<br></font><font color="#FF8000">//---------------------------
<br>//&nbsp;留言显示程序&nbsp;index.php
<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng
<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;2000
<br>//---------------------------
<br>
<br></font><font color="#0000BB">$WebmasterIPArray&nbsp;</font><font color="#007700">=&nbsp;array(
<br>&nbsp;&nbsp;</font><font color="#DD0000">"10.0.1.30"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;管理人员甲的机器&nbsp;IP
<br>&nbsp;&nbsp;</font><font color="#DD0000">"10.0.2.28"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;管理人员乙的机器&nbsp;IP
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
<br>echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href=addmsg.php&gt;新增留言....&lt;/a&gt;&lt;p&gt;\n"</font><font color="#007700">;
<br>
<br>if&nbsp;(</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;{
<br>&nbsp;&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">;
<br>}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;
<br>}
<br>
<br></font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$guestbook</font><font color="#007700">);
<br></font><font color="#0000BB">$msgnum</font><font color="#007700">=</font><font color="#0000BB">20</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;每页二十笔
<br></font><font color="#0000BB">$start&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">*&nbsp;</font><font color="#0000BB">$msgnum</font><font color="#007700">;
<br></font><font color="#0000BB">$end&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$start&nbsp;</font><font color="#007700">+&nbsp;</font><font color="#0000BB">$msgnum</font><font color="#007700">;
<br>if&nbsp;(</font><font color="#0000BB">$end&nbsp;</font><font color="#007700">&gt;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">)&nbsp;</font><font color="#0000BB">$end</font><font color="#007700">=</font><font color="#0000BB">$i</font><font color="#007700">;
<br></font><font color="#0000BB">$totalpage</font><font color="#007700">=</font><font color="#0000BB">$i</font><font color="#007700">/</font><font color="#0000BB">$msgnum</font><font color="#007700">;
<br>
<br></font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#DD0000">""</font><font color="#007700">;
<br>if&nbsp;(</font><font color="#0000BB">$page</font><font color="#007700">&gt;</font><font color="#0000BB">0</font><font color="#007700">)&nbsp;</font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"&lt;a&nbsp;href=index.php?"</font><font color="#007700">.(</font><font color="#0000BB">$page</font><font color="#007700">-</font><font color="#0000BB">1</font><font color="#007700">).</font><font color="#DD0000">"&gt;&amp;lt;上页&lt;/a&gt;&nbsp;-&nbsp;"</font><font color="#007700">;
<br></font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"[第&nbsp;"</font><font color="#007700">;
<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$totalpage</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{
<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">!=</font><font color="#0000BB">$page</font><font color="#007700">)&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$pagestr&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"&lt;a&nbsp;href=index.php?$i&gt;"</font><font color="#007700">.(</font><font color="#0000BB">$i</font><font color="#007700">+</font><font color="#0000BB">1</font><font color="#007700">).</font><font color="#DD0000">"&lt;/a&gt;&nbsp;"</font><font color="#007700">;
<br>&nbsp;&nbsp;}&nbsp;else&nbsp;{
<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$pagestr&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$pagestr</font><font color="#007700">.(</font><font color="#0000BB">$i</font><font color="#007700">+</font><font color="#0000BB">1</font><font color="#007700">).</font><font color="#DD0000">"&nbsp;"</font><font color="#007700">;
<br>&nbsp;&nbsp;}
<br>}
<br></font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;页]&nbsp;"</font><font color="#007700">;
<br>if&nbsp;(</font><font color="#0000BB">$page</font><font color="#007700">&lt;(</font><font color="#0000BB">$totalpage</font><font color="#007700">-</font><font color="#0000BB">1</font><font color="#007700">))&nbsp;</font><font color="#0000BB">$pagestr</font><font color="#007700">=</font><font color="#0000BB">$pagestr</font><font color="#007700">.</font><font color="#DD0000">"-&nbsp;&lt;a&nbsp;href=index.php?"</font><font color="#007700">.(</font><font color="#0000BB">$page</font><font color="#007700">+</font><font color="#0000BB">1</font><font color="#007700">).</font><font color="#DD0000">"&gt;下页&amp;gt;&lt;/a&gt;&nbsp;"</font><font color="#007700">;
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
<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$WebmasterIP</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href=erase.php?"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">"&gt;删除本篇!!&lt;/a&gt;&nbsp;("</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">].</font><font color="#DD0000">")&nbsp;&amp;nbsp;&nbsp;"</font><font color="#007700">;
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

在显示留言的部份，考虑到留言内容若很多，加上网络慢的话，可能会让用户在线路慢的时候拖累整个数据库，因此，尽快的连上数据库，取得需要的资料后，马上关闭数据库，再慢慢送给用户，应是最好的对策。<p>

程序分成四部份
<ol type=1>
<li>初始化
<li>取数据库中的资料
<li>计算要显示的页数
<li>送出资料
</ol>
        <p>&nbsp; 
        <p>

        <div align=center></div>
        <p>

<font color="#0000BB">$WebmasterIPArray&nbsp;</font><font color="#007700">=&nbsp;array(</font><br>
&nbsp;&nbsp;<font color="#DD0000">"10.0.1.30"</font><font color="#007700">,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;管理人员甲的机器&nbsp;IP</font><br>
&nbsp;&nbsp;<font color="#DD0000">"10.0.2.28"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;管理人员乙的机器&nbsp;IP</font><br>
<font color="#007700">);</font><p>
<font color="#0000BB">$WebmasterIP</font><font color="#007700">=</font><font color="#0000BB">false</font><font color="#007700">;<br>
for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">Count</font><font color="#007700">(</font><font color="#0000BB">$WebmasterIPArray</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>
&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$REMOTE_ADDR&nbsp;</font><font color="#007700">==&nbsp;</font><font color="#0000BB">$WebmasterIPArray</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">])&nbsp;</font><font color="#0000BB">$WebmasterIP</font><font color="#007700">=</font><font color="#0000BB">true</font><font color="#007700">;<br>
}</font><br>
<font color="#FF8000">// 之后初始化 Oracle 程序略</font><p>

显示程序和留言程序的初始化部份都差不多，但显示程序多加了一个功能，配置 Webmaster 的电脑。将 Webmaster 使用的 IP Address 加在 $WebmasterIPArray 数组变量中，可以在显示留言时，显示删除留言的字符串，方便处理不当的留言。<p>

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

在初始化后，就可以连上 Oracle 数据库，将留言的资料取出放在 $guestbook 数组中。取得资料后，就赶紧将数据库关闭，再来处理 $guestbook 数组的资料了。<p>

<font color="#007700">if&nbsp;(</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">;<br>
}&nbsp;else&nbsp;{<br>
&nbsp;&nbsp;</font><font color="#0000BB">$page&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>
}</font><p>

这一段程序判断是要显示第几页，默认值是显示第一页。要显示第三页的页面，需要使用 http://xxxxxx/index.php?2 的格式，也就是传入 $QUERY_STRING，余类推。之后的数行程序，都是用来处理显示的页数及笔数的资料。<p>

<font color="#0000BB">$msgnum</font><font color="#007700">=</font><font color="#0000BB">20</font><font color="#007700">;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;每页二十笔</font><p>

要改变每页的显示笔数，可以改 $msgnum 变量。程序的默认值为 20 笔。<p>

<font color="#007700">for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">$start</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">$end</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;&lt;hr&gt;&lt;p&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;\n&lt;font&nbsp;color=e06060&gt;"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">5</font><font color="#007700">].</font><font color="#DD0000">"&lt;/font&gt;&nbsp;&amp;nbsp;&nbsp;"</font><font color="#007700">;<br>
&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">]!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href=mailto:"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">].</font><font color="#DD0000">"&gt;"</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;strong&gt;"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">].</font><font color="#DD0000">"&lt;/strong&gt;"</font><font color="#007700">;<br>
&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">6</font><font color="#007700">]!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/a&gt;"</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;br&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$WebmasterIP</font><font color="#007700">)&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href=erase.php?"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">"&gt;删除本篇!!&lt;/a&gt;&nbsp;("</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">].</font><font color="#DD0000">")&nbsp;&amp;nbsp;&nbsp;"</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;font&nbsp;size=-1&nbsp;color=c0c0c0&gt;from:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">4</font><font color="#007700">].</font><font color="#DD0000">"&lt;/font&gt;&lt;p&gt;\n"</font><font color="#007700">;<br>
&nbsp;&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">base64_decode</font><font color="#007700">(</font><font color="#0000BB">$guestbook</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">7</font><font color="#007700">]);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">=</font><font color="#0000BB">nl2br</font><font color="#007700">(</font><font color="#0000BB">$msg</font><font color="#007700">);<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$msg</font><font color="#007700">;<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;\n"</font><font color="#007700">;<br>
}</font><p>

这一段程序就是真正显示留言资料给用户看的程序了。利用 for 循环，将 $guestbook 数组的资料按照配置的页数取出，显示给用户看。值得一提的是，若看留言的机器 IP 为 $WebmasterIPArray 变量数组中的一个元素的话，则会在留言者的匿称后显示 "删除本篇!!" 的字符串，供管理人员删除不当留言。<p>

以下即为删除留言的程序。<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;留言删除程序&nbsp;erase.php<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;2000<br>//---------------------------<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=WWW"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/home/oracle/product/7.3.2"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"LD_LIBRARY_PATH=/home/oracle/product/7.3.2/lib"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS32=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br><br></font><font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"UPDATE&nbsp;guestbook&nbsp;set&nbsp;flag='0'&nbsp;where&nbsp;serial='"</font><font color="#007700">.</font><font color="#0000BB">$QUERY_STRING</font><font color="#007700">.</font><font color="#DD0000">"'"</font><font color="#007700">;<br></font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br><br></font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br></font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;./index.php"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font><br></font>
</td></tr></table></div><p>

其实这个程序很单纯，只要打开 Oracle 数据库，将要删除的序号那笔资料的 flag 字段设成 0 就可以了，不用将资料真的从数据库上移除。

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="5.3.php.php" alt="5.3.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="5.5.php.php" alt="5.5.php">下一页</a> 
        ]</td>
    </tr>
  </table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
