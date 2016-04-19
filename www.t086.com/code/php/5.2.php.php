<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 用户认证</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>用户认证</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr>
      <td> 在专门 Web 网站上，常常会需要用户的帐号及密码，也就是身份确认的步骤。早期的 <a href="http://hoohoo.ncsa.uiuc.edu/" tppabs="/to.asp?url=http://hoohoo.ncsa.uiuc.edu/">NCSA 
        httpd 服务器</a>并没有提供这项用户确认的功能，Webmaster 只能用手工打造一个身份确认的 CGI 程序。
        <p> 自 <a href="http://www.w3c.org/Daemon/" tppabs="http://www.w3c.org/Daemon/">CERN 
          httpd</a> 之后的 Web 服务器大部份都提供了用户身份确认的功能。仅管每套 Web 服务器的配置都不太相同，但在配置上都大同小异。
        <p>

以下就是 Apache 服务器上的用户身份确认的配置。<p>

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


在这个例子中，当用户在看 MyMember 目录下所有的文件，包括图片文件及其它各式文件时，都需要用户的帐号密码确认。而用户的帐号及密码文件都存在于 /usr/local/MyMember.txt 之中。<p>

这个帐号密码文件 /usr/local/MyMember.txt 的样子可能如下例。其中冒号前的字符串是用户帐号，冒号之后的字符串是经过不可还原加密的密码，编码一般都是使用传统的 DES 编码，密码的头两个字是类似种子的字符 (salt)，本例中都是 3P。每行代表一位用户。当然 Webmaster 要自行控制重覆帐号的情形。比较特殊是在 Win32 系统上架 Apache 的情形，冒号后的密码不可加密，因为 Win32 没有提供这方面的编码 API，因此用户密码以明码的方式存在。<p>

<pre>
john1234:3PWudBlJMiwro
queenwan:3PFNVLNPN9W0M
noname00:3PEsXaJx5pk7E
wilson49:3PjoWb0EnaG22
rootboot:3PIt0snI6.84E
sun_moon:3PvymMeNOc.x.
nobody38:3PbskPKwV94hw
</pre><p>

在 Apache 1.3.6 版上，可以用 ~apache/bin/htpasswd 来产生单笔的帐号及密码，但对于需要大笔资料的商业网站，可能就需要自行写程序来处理了。UNIX 上需要调用 crypt() 来处理编码。
        <p> <img src="5.2.1.gif" alt="img/5.2.1.gif" width="350">
        <p>

在一切都配置好了之后，连接时就会在浏览器出现查核密码的窗口，如上图就是 SEEDNet 的 MySEED 网站的用户查核机制。在输入了帐号及密码后，浏览器会将它用 BASE64 编码后，传到服务器端。当然 BASE64 只是编码不是加密，因此在网络上这种传输的安全性仍然不高，还是有可能被中间的刽客截下，再将 BASE64 还原，这也是整个用户认证中最美中不足的地方，或许日后支持摘要认证 (Digest) 及使用 MD5 编码后，可以解决这种问题。之后每一页仍然需要帐号及密码，只不过浏览器会帮你主动送出，不用再输入帐号密码了。这方面浏览器会保留到被关闭为止，下次重执行浏览器仍需输入第一次。<p>

在用户数量少时，使用上述的方法轻松又省事。但是在用户有数万人，甚至数十万人时，会发生整个服务器的效率都被搜寻帐号密码下拖垮，可能读取一页需要数十秒到数分钟。这种情形再使用服务器提供的密码查核机制就不太明智了。在 Netscape Enterprise Server 上可能就可以使用 NSAPI 来开发自己的查核方式，在 IIS 上也可以用 ISAPI 过滤器开发。写 C/C++ 程序调用 NSAPI/ISAPI 总是很累，在 PHP 上有了另外的选择，这也是本节的主题。<p><hr size="1"><br><p>

PHP 的 HTTP 相关函数库提供了 <a href="function.php-header.php" alt="function.php?header">header()</a> 的函数。许多 Web 服务器与客户端的互动，都可以使用这个函数来变戏法。例如在某个 PHP 页面最开始处，也就是第一行或第二行，加入以下的程序，可以将用户重定向到作者的网页。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br>header</font><font color="#007700">(</font><font color="#DD0000">&quot;Location:&nbsp;http://wilson.gs&quot;</font><font color="#007700">);<br>exit;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table></div><p>

当然，在上述程序之后的 HTML 文字或者是 PHP 程序都永远不会出现在用户端了。<p>

同样的道理，我们就用 header() 来变用户认证的把戏。可以在 PHP 的最开头送出字符串到用户端，就会在用户端出现下图的窗口。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br>Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;Member\&quot;&quot;</font><font color="#007700">);<br></font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table>
          <p> <img src="5.2.2.gif" alt="img/5.2.2.gif" WIDTH="284" HEIGHT="163">
        </div><p>

在程序中字符串 realm=\&quot;Member\&quot; 中的 Member 字样出现在图中，当然若使用中文字取代，浏览器端也会出现中文字，如上面的 MySEED 图。若 Web 网站用户还有其它语文，如英文或日文，送出中文的 realm 字符串似乎就比较不合适。无论如何，这都要视网站的性质及用户定位而决定。<p>

当然这还是很粗糙，因为除了送出窗口后，就没有下文了，帐号输入正确也好，输入错误也罢，都不会有任何的结果。我们需要再更进阶的程序来处理。<p><hr size="1"><br><p>

在后端的使用认证上，考虑使用数据库作为储存帐号及密码的后端，在这种架构可以容纳许多的用户，管它一万个用户还是十万个用户。若您的站已有数十万个用户帐号，那么恭喜您，您的站算是世界级的大站了。<a href="/to.asp?url=http://www.mysql.com/">MySQL</a> 是个不错的选择，许多网站，甚至是商业化的网站都用它来做后端的数据库。当然您要架真正的商业网站，钱不是问题的话，那可以使用口碑最广的 <a href="/to.asp?url=http://www.oracle.com/">Oracle</a> 数据库系列。<p>

要在 PHP 中使用任何数据库，都要先将数据库的服务器端及客户端配置好，之后才编译 PHP 及 Apache 系统。<p>

准备好 MySQL 及 PHP 之后，先在 MySQL 中加入新的数据库，本例是加入 mymember，用别的名字当然也可以。MySQL 要加入数据库 (Database) 很容易，只要在 MySQL 存放 Database 的地方 mkdir 就可以了。例如在 UNIX Shell 下打<p>

<code>hahaha:/usr/local/mysql/data# mkdir mymember</code><p>

在建立了数据库之后，尚需要建立资料表格 (Table) 方能使用。配置的表格如下，可以将它储在 /tmp/memberauth.sql 中<p>

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
<div align="right"><font color="c0c0c0" size="-2">文件 memberauth.sql </font></div>
</td></tr></table></div><p>

先看看 memberauth.sql 的这些字段。Serial 是个自动增加的整数字段，每输入一笔资料，就会自动加一，这当然不能是空的字段，于是就用 NOT NULL 了。第两个字段是 Username，代表用户的帐号，为了统一以及适应各系统起见，配置成八个字，当然这个字段也不能是空的。Password 是第三个字段，为用户的密码。第四个字段 Enable 做为帐号是否有效的标志，设计上 0 表示无用，1 表可用，日后还可加入其它值做不同的用途。<p>

设计好了资料表之后，就要将资料表加入数据库了。由于常要使用 MySQL 数据库，可以到 <a href="/to.asp?url=http://www.phpwizard.net/phpMyAdmin">http://www.phpwizard.net/phpMyAdmin</a> 下载 phpMyAdmin，使用浏览器操作及管理 MySQL，轻松又方便。若使用这套 phpMyAdmin 可以在它的用户界面上输入 memberauth.sql 加入 MySQL 中。或者也可以在 UNIX Shell 下输入下式，也是有同样的效果。
        <p> <code>mysql mymember &lt; /tmp/memberauth.sql</code>
        <p>

在准备好了之后，就可以输入用户帐号及密码在 memberauth 资料表中了。当然还是使用 phpMyAdmin 方便，用 mysql 程序就要一笔笔的 INSERT 了。
        <p> <img src="5.2.3.gif" alt="img/5.2.3.gif" WIDTH="295" HEIGHT="228">
        <p>

接着进入了设计函数的阶段了。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;用户认证函数&nbsp;&nbsp;&nbsp;&nbsp;auth.inc<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;1999<br>//---------------------------<br></font><font color="#0000BB">$error401&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;/home/phpdocs/error/401.php&quot;</font><font color="#007700">;<br>if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">==</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;超金卡会员\&quot;&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>&nbsp;&nbsp;exit;<br>}&nbsp;else&nbsp;{<br>&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">$db_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_pconnect</font><font color="#007700">(</font><font color="#DD0000">&quot;localhost&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;myid&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;mypw&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_db_query</font><font color="#007700">(</font><font color="#DD0000">&quot;mymember&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;select&nbsp;password,&nbsp;enable&nbsp;from&nbsp;MemberAuth&nbsp;where&nbsp;username='$PHP_AUTH_USER'&quot;</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$MemberPasswd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">$MemberEnable&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">];<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$MemberEnable</font><font color="#007700">==</font><font color="#0000BB">0</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;您的帐号被停用了&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">!=</font><font color="#0000BB">$MemberPasswd</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;超金卡会员\&quot;&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<div align="right"><font color="c0c0c0" size="-2">Copyright (C) 1999, Wilson Peng</font></div>
</td></tr></table></div><p>

要使用这个 auth.inc，要在每个 PHP 的第一行加入 <br><font color="#0000BB">&lt;? </font><font color="#007700">require(</font><font color="#DD0000">&quot;auth.inc&quot;</font><font color="#007700">);</font> <font color="#0000BB">?&gt;</font> 。在加入本程序的 PHP 文件都会检查帐号密码，图片等就不会检查，比起使用 Web 服务器功能的某目录下全都检查，PHP 显得有弹性多了。<p>

<font color="#0000BB">$error401&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;/home/phpdocs/error/401.php&quot;</font><font color="#007700">;</font><p>

这行表示在用户按下取消，或检查失败时，要显示给用户看的文件。<p>

<font color="#007700">if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">==</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;超金卡会员\&quot;&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>
&nbsp;&nbsp;exit;<br>
}&nbsp;else&nbsp;{</font><p>

到 else 之前，若没有传入密码，则送出输入密码的窗口。其中的 $PHP_AUTH_USER、$PHP_AUTH_PW 是 PHP 中特殊的变量，分别代表用户确认的帐号及密码。上面的程序也是利用这两个变量来处理用户认证。
        <p> <img src="5.2.4.gif" alt="img/5.2.4.gif" WIDTH="402" HEIGHT="237">
        <p>

&nbsp;&nbsp;<font color="#0000BB">$db_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_pconnect</font><font color="#007700">(</font><font color="#DD0000">&quot;localhost&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;myid&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;mypw&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_db_query</font><font color="#007700">(</font><font color="#DD0000">&quot;mymember&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;select&nbsp;password,&nbsp;enable&nbsp;from&nbsp;MemberAuth&nbsp;where&nbsp;username='$PHP_AUTH_USER'&quot;</font><font color="#007700">);</font><p><font color="#007700">

&nbsp;&nbsp;</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br>
&nbsp;&nbsp;</font><font color="#0000BB">$MemberPasswd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];<br>
&nbsp;&nbsp;</font><font color="#0000BB">$MemberEnable&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">];</font><p>

若用户有输入帐号及密码，则向数据库查询。同时查核该用户是否仍可使用。<p>

&nbsp;&nbsp;<font color="#007700">if&nbsp;(</font><font color="#0000BB">$MemberEnable</font><font color="#007700">==</font><font color="#0000BB">0</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;您的帐号被停用了&quot;</font><font color="#007700">;<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>
&nbsp;&nbsp;}</font><p>

上四行程序为帐号被停用的情形。<p>

&nbsp;&nbsp;<font color="#007700">if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">!=</font><font color="#0000BB">$MemberPasswd</font><font color="#007700">)&nbsp;{<br>
&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;超金卡会员\&quot;&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>
&nbsp;&nbsp;&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>
&nbsp;&nbsp;}</font><p>

密码错误则再次向用户要求输入帐号及密码。<p>

在实际使用时，可以视需要加入的网页再加入 auth.inc 这个文件，就不用连看张图形也要查一次密码，轿募服务器和用户二端的资源。当然，和 MySQL 的连系上，可以使用 <a href="function.php-mysql_pconnect.php" alt="function.php?mysql_pconnect">mysql_pconnect()</a> 一直和 MySQL 服务器连接。或是使用 <a href="function.php-mysql_connect.php" alt="function.php?mysql_connect">mysql_connect()</a> 每次重新连接，用这个函数要记得早点使用 <a href="function.php-mysql_close.php" alt="function.php?mysql_close">mysql_close()</a> 将数据库关闭。下面的程序 auth1.inc 是另一版本的认证程序，就是打开连接后马上关闭，释放资源的例子。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;用户认证函数-1&nbsp;auth1.inc<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;1999<br>//---------------------------<br></font><font color="#0000BB">$error401&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#DD0000">&quot;/home/phpdocs/error/401.php&quot;</font><font color="#007700">;<br>if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">==</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;超金卡会员\&quot;&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>&nbsp;&nbsp;exit;<br>}&nbsp;else&nbsp;{<br>&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">$db_id&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_connect</font><font color="#007700">(</font><font color="#DD0000">&quot;localhost&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;myid&quot;</font><font color="#007700">,&nbsp;</font><font color="#DD0000">&quot;mypw&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$result&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_db_query</font><font color="#007700">(</font><font color="#DD0000">&quot;mymember&quot;</font><font color="#007700">,</font><font color="#DD0000">&quot;select&nbsp;password,&nbsp;enable&nbsp;from&nbsp;MemberAuth&nbsp;where&nbsp;username='$PHP_AUTH_USER'&quot;</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$row&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">mysql_fetch_array</font><font color="#007700">(</font><font color="#0000BB">$result</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$MemberPasswd&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">$MemberEnable&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$row</font><font color="#007700">[</font><font color="#0000BB">1</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">mysql_close</font><font color="#007700">(</font><font color="#0000BB">$db_id</font><font color="#007700">);<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$MemberEnable</font><font color="#007700">==</font><font color="#0000BB">0</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;您的帐号被停用了&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$PHP_AUTH_PW</font><font color="#007700">!=</font><font color="#0000BB">$MemberPasswd</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;WWW-Authenticate:&nbsp;Basic&nbsp;realm=\&quot;超金卡会员\&quot;&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">Header</font><font color="#007700">(</font><font color="#DD0000">&quot;HTTP/1.0&nbsp;401&nbsp;Unauthorized&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;include(</font><font color="#0000BB">$error401</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<div align="right"><font color="c0c0c0" size="-2">Copyright (C) 1999, Wilson Peng</font></div>
</td></tr></table></div><p>

在实际应用时，可以在数据库中加入更多功能，如用户分组 (CUG) 的功能；或是加入时间字段，可做到期检查。其中的变化，端赖设计者的巧思了。

<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr> 
      <td height="16">[ <a href="5.1.php.php" alt="5.1.php">上一页</a> 
      </td>
      <td height="16"> <a href="5.3.php.php" alt="5.3.php">下一页</a> 
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
