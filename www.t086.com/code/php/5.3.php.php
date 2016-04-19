<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 聊天室</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>聊天室</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>

聊天室，是 Web 站上打发无聊人士的秘密武器。同时，站长或其它人员也可以在这儿杀时间。甚至发生一段轰轰烈烈的网络恋情呢，就算没有，起码可以增加打字的速度。<p>

聊天室，其实就是多人共同使用的 CGI 程序。程序将每个人输入的字符串，依系统接收完成的时间整理过后，再送给各个用户。而 Web 聊天室和 BBS 的聊天室不同的地方是 BBS 聊天室可以每收到一句话，就马上分送给每位在聊天室的网络用户；Web 由于 CGI 程序不能像 BBS 的 telnet 一直连接，Web CGI 必须以最快的速度将信息送出，然后结束连接。会形成这种情形，就是因为 Web 聊天室还是使用 HTTP 传输协议，在 HTTP 实作的版本，无论是 0.9、1.0 或是 1.1 版都不能长期占据网络连接的 Port。<p>

为了解决资料无法马上传输的问题，及更新信息的问题，Netscape 在 3.0 版浏览器之后使用了新的技术，而 Internet Explorer 也实作了这些 Netscape 研发出来的技术。Netscape 将它分成 Server Push 及 Client Pull 两种技术。Server Push 由 Web 服务器将资料以多重 MIME 编码，送给用户端，目前较少网站使用这种方式；而 Client Pull 则利用了 HTML 的 meta 标签，并利用 http-equiv=&quot;Refresh&quot; 的属性，表示资料要重新载入，至于载入时间，则利用 content 属性来达成。<p>

&lt;meta&gt; 标签通常都放在 &lt;head&gt;..&lt;/head&gt; 的部分中，以便让浏览器可以仅早准备更新用户端的网页。下面为 meta 和 PHP 合用的例子，配置为每十五秒重新载入一次。<p>

&lt;meta http-equiv=&quot;Refresh&quot; content=&quot;15; url=&lt;? echo $PHP_SELF; ?&gt;&quot;&gt;<p>

如果不用 Server Push 或是 Client Pull 来做聊天室，是否有其它的方法，让 Web 的浏览器能聊天呢？答案是肯定的。可以使用 Java 或是 ActiveX (限 IE4、5) 来做甚至自行开发专属的 Browser Plug-in 程序 (如<a href="/to.asp?url=http://chat.kimo.com.tw/">奇摩的聊天室</a>)，不过这就和 PHP 没有关系了，不是我们要的重点。<p>

除此之外，由于定期更新所有网友的留言，为了怕写了一半因为 refresh 而被清掉尚未写好的字符串，因此将聊天室以 frame 的页框技术来做是有必要的。下例就是聊天室的主程序。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;聊天室&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;frameset&nbsp;rows=&quot;*,40&quot;&nbsp;border=1&gt;<br>&lt;frame&nbsp;src=&quot;list.php&quot;&nbsp;name=list&nbsp;scrolling=auto&gt;<br>&lt;frame&nbsp;src=&quot;post.php&quot;&nbsp;name=post&nbsp;scrolling=no&gt;<br>&lt;noframes&gt;<br>&lt;body&gt;<br>本聊天室需使用页框，您的浏览器无法使用<br>&lt;/body&gt;<br>&lt;/noframes&gt;<br>&lt;/frameset&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table>
          <p> <img src="5.3.gif" alt="img/5.3.gif" WIDTH="423" HEIGHT="197">
        </div><p>
程序中以 frame 带出二支 PHP 程序，建议将它们放在同一目录之中，例如 /chatroom，以便日后维护。另外，为了 list.php 及 post.php 可以使用相同的变量，下例将共通的变路路径放在 env.inc 中，可以将它放在 /chatroom 或是 Web 服务器 (如 Apache) 的 PHP include 配置路径中。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;文件名:&nbsp;env.inc<br></font><font color="#0000BB">$tempdir</font><font color="#007700">=</font><font color="#DD0000">&quot;/tmp/&quot;</font><font color="#007700">;<br></font><font color="#0000BB">$chatfile</font><font color="#007700">=</font><font color="#DD0000">&quot;/tmp/abc&quot;</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table></div><p>

聊天室的后端可以设计的很简单，单纯的使用文件来做，也可以弄个数据库，将聊天的内容丢入，若是真的很在意系统效率，或许可以考虑使用 UNIX 的行程通讯 IPC 了。<p>

本节即将用户留言的内容放入文件中，在这儿的例子大部份都使用 UNIX/Linux 的外部指令。若系统无该指令 (或称程序)，请自行安装相关程序。<p>

实际上将资料丢入文件中会比使用数据库还快，若还很在乎速度，可以在 UNIX 机器中装上 RAM Disk，再将文件的存取路径都设在该 RAM Disk 上，保证存取速度能满足严苛的要求。在有些以高速度搜寻引擎为号召的网站，甚至将整个数据库资料都放到 RAM Disk 中，马上让系统速度提高十倍百倍，而且 RAM 的价格和其它解决方案相比的话还算很便宜。若使用 Windows NT，那就没办法了，看微软什么时候提供，或者用 Third Party 的产品了。<p>

有些用户可能对 UNIX 还不是很熟，在这儿先简介会用到的指令：<p>

touch: 建立新文件，或修改旧文件的最后更新日期。<p>

echo 加上两个大于符号: 将字符串显示转向到指定的地方。<p>

tail: 显示文件最后数行的资料，默认值为十行，可使用减号加数字，修改要显示的行数。<p>

下面为送出及处理留言字符串的程序，程序用到 env.inc 的文件。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;文件名:&nbsp;post.php<br></font><font color="#007700">require(</font><font color="#DD0000">&quot;env.inc&quot;</font><font color="#007700">);<br>if&nbsp;((</font><font color="#0000BB">$chatuser</font><font color="#007700">!=</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$chattext</font><font color="#007700">!=</font><font color="#DD0000">&quot;&quot;</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$chatstr</font><font color="#007700">=</font><font color="#DD0000">&quot;&lt;font&nbsp;color=8080ff&gt;&quot;</font><font color="#007700">.</font><font color="#0000BB">date</font><font color="#007700">(</font><font color="#DD0000">&quot;h:i:s&quot;</font><font color="#007700">).</font><font color="#DD0000">&quot;&lt;/font&gt;-&lt;font&nbsp;color=ff8080&gt;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatuser</font><font color="#007700">.</font><font color="#DD0000">&quot;&lt;/font&gt;:&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chattext</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">$cmdstr</font><font color="#007700">=</font><font color="#DD0000">&quot;echo&nbsp;\&quot;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatstr</font><font color="#007700">.</font><font color="#DD0000">&quot;\&quot;&nbsp;&gt;&gt;&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatfile</font><font color="#007700">;<br>&nbsp;&nbsp;if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$chatfile</font><font color="#007700">))&nbsp;</font><font color="#0000BB">passthru</font><font color="#007700">(</font><font color="#DD0000">&quot;touch&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatfile</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">passthru</font><font color="#007700">(</font><font color="#0000BB">$cmdstr</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;</font>&lt;html&gt;<br>&lt;body&nbsp;bgcolor=ffffff&nbsp;leftmargin=0&nbsp;topmargin=0&nbsp;marginheight=0&nbsp;marginwidth=0&gt;<br>&lt;form&nbsp;action=<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;&nbsp;</font><font color="#0000BB">?&gt;</font>&nbsp;method=post&gt;<br>&lt;table&nbsp;border=0&nbsp;width=100%&gt;&lt;tr&gt;<br>&lt;td&nbsp;align=right&gt;匿称:&lt;/td&gt;<br>&lt;td&gt;&lt;input&nbsp;type=text&nbsp;name=chatuser&nbsp;size=8&nbsp;value=&quot;<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$chatuser</font><font color="#007700">;&nbsp;</font><font color="#0000BB">?&gt;</font>&quot;&gt;&lt;/td&gt;<br>&lt;td&nbsp;align=right&gt;发言:&lt;/td&gt;<br>&lt;td&gt;&lt;input&nbsp;type=text&nbsp;name=chattext&nbsp;size=30&nbsp;maxlength=500&gt;&lt;/td&gt;<br>&lt;td&gt;&lt;div&nbsp;align=right&gt;&lt;input&nbsp;type=submit&nbsp;value=&quot;送出&quot;&gt;&lt;/td&gt;<br>&lt;/tr&gt;&lt;/table&gt;<br>&lt;/form&gt;<br>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table></div><p>

程序先检查是否有输入字符串，若无匿名及发言内容字符串则显示发言的表单 (Form)，如果资料则将字符串及当时时间存入文件中 (利用 UNIX 的转向指令)。当然，为了防止错误，先检查是否有文件可存文件，若没有则先 touch 该文件，例中的文件就是 /tmp/abc。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;meta&nbsp;http-equiv=&quot;Refresh&quot;&nbsp;content=&quot;5;&nbsp;url=<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$PHP_SELF</font><font color="#007700">;&nbsp;</font><font color="#0000BB">?&gt;</font>&quot;&gt;<br>&lt;meta&nbsp;content=&quot;text/html;&nbsp;charset=gb2312&quot;&nbsp;http-equiv=Content-Type&gt;<br>&lt;body&nbsp;bgcolor=ffffff&nbsp;leftmargin=0&nbsp;topmargin=0&nbsp;marginheight=0&nbsp;marginwidth=0&gt;<br><font color="#0000BB">&lt;?<br></font><font color="#FF8000">//&nbsp;文件名:&nbsp;list.php<br></font><font color="#007700">require(</font><font color="#DD0000">&quot;env.inc&quot;</font><font color="#007700">);<br><br>if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$chatfile</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;尚未开张&lt;/body&gt;&lt;/html&gt;&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;exit;<br>}<br><br></font><font color="#0000BB">$uniqfile</font><font color="#007700">=</font><font color="#0000BB">$tempdir</font><font color="#007700">.</font><font color="#0000BB">uniqid</font><font color="#007700">(</font><font color="#0000BB">rand</font><font color="#007700">());<br></font><font color="#0000BB">$shellcmd</font><font color="#007700">=</font><font color="#DD0000">&quot;/usr/bin/tail&nbsp;-50&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatfile</font><font color="#007700">.&nbsp;</font><font color="#DD0000">&quot;&nbsp;&gt;&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$uniqfile</font><font color="#007700">;<br></font><font color="#0000BB">passthru</font><font color="#007700">(</font><font color="#0000BB">$shellcmd</font><font color="#007700">);<br></font><font color="#0000BB">$chatfilearray</font><font color="#007700">=</font><font color="#0000BB">file</font><font color="#007700">(</font><font color="#0000BB">$uniqfile</font><font color="#007700">);<br></font><font color="#0000BB">$j</font><font color="#007700">=</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$chatfilearray</font><font color="#007700">);<br>for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">1</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;=</font><font color="#0000BB">$j</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$chatfilearray</font><font color="#007700">[</font><font color="#0000BB">$j</font><font color="#007700">-</font><font color="#0000BB">$i</font><font color="#007700">].</font><font color="#DD0000">&quot;&lt;br&gt;\n&quot;</font><font color="#007700">;<br>}<br></font><font color="#0000BB">unlink</font><font color="#007700">(</font><font color="#0000BB">$uniqfile</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table></div><p>

上面的程序就是使用 Client Pull 的技术，每五秒就重新更新一次。同样地，它也 require 共用的 env.inc 文件，要改变其中的变量时，马上就可以让所有的程序用到，这对开发网站来说，是蛮重要的方法，可以将网页程序中都会出现的地方。例如 Copyright (C) 1996-2000 的字符串，放在一个文件上，到了新的一年，只要改一个文件，整个站都改了。<p>

<font color="#007700">if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$chatfile</font><font color="#007700">))&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">&quot;尚未开张&lt;/body&gt;&lt;/html&gt;&quot;</font><font color="#007700">;<br>
&nbsp;&nbsp;exit;<br>
}</font><p>
<font color="#0000BB">$uniqfile</font><font color="#007700">=</font><font color="#0000BB">$tempdir</font><font color="#007700">.</font><font color="#0000BB">uniqid</font><font color="#007700">(</font><font color="#0000BB">rand</font><font color="#007700">());</font><br>
<font color="#0000BB">$shellcmd</font><font color="#007700">=</font><font color="#DD0000">&quot;/usr/bin/tail&nbsp;-50&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$chatfile</font><font color="#007700">.&nbsp;</font><font color="#DD0000">&quot;&nbsp;&gt;&nbsp;&quot;</font><font color="#007700">.</font><font color="#0000BB">$uniqfile</font><font color="#007700">;</font><br>
<font color="#0000BB">passthru</font><font color="#007700">(</font><font color="#0000BB">$shellcmd</font><font color="#007700">);</font><p>

程序先检查有没有用户发送聊天内容的文件 /tmp/abc，若没有就显示尚未开张，等用户送聊天内容。若已有聊天资料，就抓出最后五十笔，在在另外的文件中准备显示。<p>

<font color="#0000BB">$chatfilearray</font><font color="#007700">=</font><font color="#0000BB">file</font><font color="#007700">(</font><font color="#0000BB">$uniqfile</font><font color="#007700">);</font><br>
<font color="#0000BB">$j</font><font color="#007700">=</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$chatfilearray</font><font color="#007700">);<br>
for&nbsp;(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">1</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;=</font><font color="#0000BB">$j</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>
&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$chatfilearray</font><font color="#007700">[</font><font color="#0000BB">$j</font><font color="#007700">-</font><font color="#0000BB">$i</font><font color="#007700">].</font><font color="#DD0000">&quot;&lt;br&gt;\n&quot;</font><font color="#007700">;<br>
}<br>
</font><font color="#0000BB">unlink</font><font color="#007700">(</font><font color="#0000BB">$uniqfile</font><font color="#007700">);</font><p>

将文件读入数组变量 $chatfilearray 中，并以最后的资料最先显示的方式送给浏览器端，当然可以使用对数组排序的方法，但确定一定时最后存入的资料在最后面，将它排序实在很浪费 CPU 时间，因此就从最后 echo 到最前面的资料。使用完成还要用 <a href="function.php-unlink.php" alt="function.php?unlink">unlink()</a> 指令，将临时文件杀掉。<p>

这样就完成了最粗糙的聊天室系统，当然还有很多改进的空间，例如统计使用人数、调用个人....等，就要 Webmaster 再精雕细琢了。

<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="5.2.php.php" alt="5.2.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="5.4.php.php" alt="5.4.php">下一页</a> 
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
