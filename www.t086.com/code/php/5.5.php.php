<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 意见信箱</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>意见信箱</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

当用户在参观网页时，有时想 Email 给 Webmaster 但是再执行 Email 程序总是不方使，用户在按下 mailto:abc@abc.abc.tw 还要花段时间打开自己这儿的 Outlook 岂不麻烦。这时，若是 Homepage 能提供写信的功能就太酷了。同时意见信箱还是以提醒或者要求用户一定要填入哪些资料，这对资料仓储而言，也是了解客户的最好方法。<p>

整个意见信箱其实就像 Outlook 或者其它电子邮件软件，打开寄发新邮件的功能，不同的地方在于使用 Outlook 时，寄件人是固定的，而要填上收件人的地址；而网站上的意见信箱，收件人几乎都是 Webmaster，反而是要填上寄件人的电子邮件地址。当然另一个不同之处是 Outlook 处理寄信的步骤；而意见信箱是由 Web 服务器处理用户发送的信件。<p>

在更进阶的设计后，甚至可以变成 Web Mail，像 HotMail 般，只要用浏览器就可以在任何地方用任何电脑收发信件。<p>

当然，也可以做进阶的设计，将用户的意见储放在数据库中，留待日后整理成更有用的资料。不过这就不是这节要讨论的部份了。<p>

在 UNIX 的系统中，大部份和电子邮件有关的问题都和 <a href="/to.asp?url=http://www.sendmail.org" tppabs="/to.asp?url=http://www.sendmail.org/">sendmail</a> 有关，除非系统管理员较偏执，才会用其它的系统。因此，意见信箱的设计开发，也是使用 sendmail 来达成所需要的功能。而 WindowsNT 系统中，由于没有 sendmail 程序，需要另行符费购买，或使用其它的邮件派送软件，因此本节程序无法在 WindowsNT 系统执行。<p>

程序的流程如下
<ol type=1>
<li>送出填写意见的表格到用户的浏览器上。
<li>用户填好后送出资料到服务器。
<li>服务器将用户填的资料整理后，存入文件。
<li>利用 UNIX 的管道指令及 sendmail 程序将意见送给系统管理人员。
<li>服务器通知用户意见已送出。
</ol><p>

以下就是完整的范例程序<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;意见信箱&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><font color="#0000BB">&lt;?php<br><br>$mailto</font><font color="#007700">=</font><font color="#DD0000">"yourname@hahaha.com.tw"</font><font color="#007700">;<br><br>if&nbsp;((</font><font color="#0000BB">$topic</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$Email</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$body</font><font color="#007700">!=</font><font color="#DD0000">""</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$tmpfilename&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">tempnam</font><font color="#007700">(</font><font color="#DD0000">"/tmp"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"dm"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$tmpfilename</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"w"</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"From:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$Email</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"Subject:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$topic</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;&nbsp;&lt;访客来信&gt;\n\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$body</font><font color="#007700">.</font><font color="#DD0000">"\n\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"送信人:"</font><font color="#007700">.</font><font color="#0000BB">$sender</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fwrite</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"发信IP:"</font><font color="#007700">.</font><font color="#0000BB">$REMOTE_ADDR</font><font color="#007700">.</font><font color="#DD0000">"\n"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">fclose</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$execstr</font><font color="#007700">=</font><font color="#DD0000">"cat&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$tmpfilename</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;|&nbsp;/usr/lib/sendmail&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$mailto</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#0000BB">$execstr</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$execstr</font><font color="#007700">=</font><font color="#DD0000">"echo&nbsp;$sender&nbsp;$REMOTE_HOST&nbsp;&gt;&gt;&nbsp;/var/log/mail.log"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#0000BB">$execstr</font><font color="#007700">);<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"信件已送出！！本站工作人员尽快处理您的问题&lt;p&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;"</font><font color="#007700">;<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">?&gt;<br></font>&nbsp;&nbsp;&lt;form&nbsp;action=<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo(</font><font color="#0000BB">$GLOBALS</font><font color="#007700">[</font><font color="#DD0000">"PHP_SELF"</font><font color="#007700">]);&nbsp;</font><font color="#0000BB">?&gt;</font>&nbsp;method=post&gt;<br>&nbsp;&nbsp;&lt;table&nbsp;border=0&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&gt;主题&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;type=text&nbsp;size=20&nbsp;name=topic&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&gt;姓名&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;type=text&nbsp;size=20&nbsp;name=sender&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&gt;Email&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;type=text&nbsp;size=20&nbsp;name=Email&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&nbsp;colspan=2&gt;内容&lt;br&gt;&lt;textarea&nbsp;cols=26&nbsp;rows=10&nbsp;name=body&gt;&lt;/textarea&gt;&lt;/td&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;tr&gt;&lt;td&nbsp;colspan=2&gt;&lt;div&nbsp;align=right&gt;&lt;input&nbsp;type=submit&nbsp;value="送出"&gt;&lt;/td&gt;&lt;/tr&gt;<br>&nbsp;&nbsp;&lt;/table&gt;<br>&nbsp;&nbsp;&lt;/form&gt;<br>&nbsp;&nbsp;<font color="#0000BB">&lt;?<br></font><font color="#007700">}<br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table></div><p>

程序在 PHP 处理解析时，先判断用户是否填入资料。若没有资料则送出意见表单给用户，如果资料则表示用户已输入相关的资料，则进行处理。<p>

处理的原则是先将用户填写的资料写入临时文件中，但为了防止多用户同时填写意见时，会造成文件被覆盖，因此需要每次都有不同的临时文件，这个问题可以使用 <a href="function.php-tempnam.php" alt="function.php?tempnam">tempnam()</a> 函数来解决，用来建立独一无二的临时文件。

在文件名的问题处理完后，利用 PHP 提供的文件处理功能，将用户填写的资料写入方才建立的文件中。将文件关闭就初步完成。即使资料没有邮寄出去，系统仍能保存意见文件。值得注意的是，若存放在 /tmp 中，有些 UNIX 的系统 (如 SUN Solaris) 会在重新启动系统时遗失这些资料，而有些则不会 (如 Slackware Linux)，这方面可能要先规划好，要保存的话需要存在不会被清掉的目录下。<p>

UNIX 中最强的功能就是管道，可以利用管道来处理寄信的步骤，如下<p>

<code>cat tmpfilename | /usr/lib/sendmail wilson@biglobe.net.tw</code><p>

这个指令的意思为将文件送给管道彼端的 sendmail 程序，而 sendmail 将该文件寄给 wilson@biglobe.net.tw。因此可利用本管道指令将意见寄给 Webmaster 或是客服部门的人员。若要寄给多人，可利用 mailing list 或是多用几次寄信的管道指令。<p>

在 PHP 程序中要使用 UNIX 的程序或者外部指令，可以使用 <a href="function.php-exec.php" alt="function.php?exec">exec()</a> 函数来做。寄完信后，通知用户已经在处理了，就完成了意见处理的初步工作。当然之后要如何处理，就不是 PHP 书中所能讨论的。<p>

当然执行寄信的方式不只一种，可以利用 <a href="function.php-mail.php" alt="function.php?mail">mail()</a> 函数来寄信，亦可利用 UNIX 的网络 socket 来做，所谓戏法人人会变，巧妙各有不同。

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="5.4.php.php" alt="5.4.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="5.6.php.php" alt="5.6.php">下一页</a> 
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
