<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv="Content-Type">
<title>PHP - 访客计数器</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border="0" width="70%"><tr>
<td valign="middle" width="20"><hr size="1" width="100%"></td>
<td valign="middle" nowrap><font color="e06060" size="+2"><b>访客计数器</b></font></td>
<td valign="middle" width="100%"><hr size="1" width="100%"></td>
</tr></table></div><p>
<div align="center"><table border="0" width="70%"><tr><td>

访客计数器是让 Web 访客知道该网页或者网站的人气指数最直接的方法。尤其是想利用网页赚钱的人，访客人数是找广告商最好的说词。当然可以将网站来访人数写成统计报表，但总是感觉直接看到比较真实，到底眼见为凭。<p>

        <div align="center"><img src="5.1.1.gif" alt="img/5.1.1.gif" WIDTH="260" HEIGHT="168"></div>
        <p>

在上图中，访客计数器的流程如下
<ol>
<li>第一位用户浏览某页。
<li>服务器程序从数据库或文件中读取该页被浏览次数。
<li>将次数加一储存，并将它送回第一位用户。
<li>第二位用户浏览某页。
<li>服务器程序从数据库或文件中读取该页被浏览次数。
<li>将次数再加一储存，并将它送回第二位用户。
</ol><p>

PHP 在没有特殊的访客计数器函数，但是我们可以用 PHP 的强大功能自已写一个访客计数器函数。<p>

以下的函数是访客计数器的原型，是由 David W. Bettis 所提供，并经过作者少许修改。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;访客计数器&nbsp;原型&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">/*<br>simple&nbsp;access&nbsp;counter&nbsp;for&nbsp;php3<br>(c)1998&nbsp;David&nbsp;W.&nbsp;Bettis<br>dbettis@eyeintegrated.com<br>medify&nbsp;by&nbsp;Wilson&nbsp;Peng<br>*/<br><br></font><font color="#0000BB">$counterFile&nbsp;</font><font color="#007700">=&nbsp;&nbsp;</font><font color="#DD0000">&quot;/tmp/counter.txt&quot;</font><font color="#007700">;<br><br>function&nbsp;</font><font color="#0000BB">displayCounter</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$fp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">,</font><font color="#DD0000">&quot;rw&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fgets</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#0000BB">5</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">+=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>&nbsp;&nbsp;print&nbsp;&nbsp;</font><font color="#DD0000">&quot;您是第&nbsp;&quot;</font><font color="#007700">.</font><font color="#DD0000">&quot;$num&quot;</font><font color="#007700">.</font><font color="#DD0000">&quot;&nbsp;位无聊份子&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(&nbsp;</font><font color="#DD0000">&quot;rm&nbsp;-rf&nbsp;$counterFile&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(&nbsp;</font><font color="#DD0000">&quot;echo&nbsp;$num&nbsp;&gt;&nbsp;$counterFile&quot;</font><font color="#007700">);<br>}<br><br>if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(&nbsp;</font><font color="#DD0000">&quot;echo&nbsp;0&nbsp;&gt;&nbsp;$counterFile&quot;</font><font color="#007700">);<br>}<br><br></font><font color="#0000BB">displayCounter</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">);<br><br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
<p>
<div align="right"><font color="c0c0c0" size="-2">Copyright &copy; 1998 David W. Bettis</font></div>
</td></tr></table></div><p>

在读取到本页时，PHP 程序先找寻 /tmp/counter.txt 文件是否存在，若不存在，则建立一个 counter.txt 文件，然后将 0 写入文件。然后读取 counter.txt 文件的内容，也就是纯文字叠，再将内文的数字存入 $num 变量中。在 $num 的变量出现在浏览器前，还有经过加一的步骤，让用户可以增加。当然，如果想灌水，就在加一步骤时加二或者加三，不过自欺是无用的。最后将访客人数再回存 /tmp/counter.txt 就一切 OK。<p><hr size="1">
        <p> 当然，每一页都要这样写，岂不麻烦到了极点。这时，我们可以利用 PHP 提供的 require() 功能，将计数器整理成一个函数，酱子在使用上就方便多多了。
        <p>

首先要先将 Apache 的配置文件 (httpd.conf) 加入 PHP include 文件的路径。例如要设所有的 include 文件都在 http://abcdefghijk.com.tw/include 中，可以在 httpd.conf 加入下面的例子<p>

<code>php3_include_path .:./include:../include</code><p>

别忘了重新启动 Apache 服务器，新增的 include 路径才有效。<p>

<code>./apachectl restart</code><p>

再来就在服务器的 .../include 目录中放入以下的文件，文件名存成 counter.inc<p>

下面就是 MyCounter() 函数。为了让读者方便了解，程序中的变量 $counterFile、$fp 及 $num 保持和 David W. Bettis 所配置的计数器中的变量功能相同。<p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//---------------------------<br>//&nbsp;访客计数器函数&nbsp;MyCounter()<br>//&nbsp;Author:&nbsp;Wilson&nbsp;Peng<br>//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright&nbsp;(C)&nbsp;1999<br>//---------------------------<br></font><font color="#007700">function&nbsp;</font><font color="#0000BB">MyCounter</font><font color="#007700">()&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$counterFile</font><font color="#007700">=</font><font color="#DD0000">&quot;/tmp&quot;</font><font color="#007700">.</font><font color="#0000BB">$GLOBALS</font><font color="#007700">[</font><font color="#DD0000">&quot;PHP_SELF&quot;</font><font color="#007700">];<br>&nbsp;&nbsp;if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#0000BB">dirname</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">)))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">mkdir</font><font color="#007700">(</font><font color="#0000BB">dirname</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">),&nbsp;</font><font color="#0000BB">0700</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#DD0000">&quot;echo&nbsp;0&nbsp;&gt;&nbsp;$counterFile&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;</font><font color="#0000BB">$fp&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fopen</font><font color="#007700">(</font><font color="#0000BB">$counterFile</font><font color="#007700">,</font><font color="#DD0000">&quot;rw&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">fgets</font><font color="#007700">(</font><font color="#0000BB">$fp</font><font color="#007700">,</font><font color="#0000BB">5</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$num&nbsp;</font><font color="#007700">+=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>&nbsp;&nbsp;print&nbsp;</font><font color="#DD0000">&quot;$num&quot;</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#0000BB">$counterFile</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#DD0000">&quot;rm&nbsp;-rf&nbsp;$counterFile&quot;</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">exec</font><font color="#007700">(</font><font color="#DD0000">&quot;echo&nbsp;$num&nbsp;&gt;&nbsp;$counterFile&quot;</font><font color="#007700">);<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>
<div align="right"><font color="c0c0c0" size="-2">Copyright &copy; 1999, Wilson Peng</font></div>
</td></tr></table></div>
        <p> 当然，要用的话要加 <a href="5.1.2a.php.php" alt="demo/5.1.2.php">Homepage</a> 
          中嵌入 MyCounter() 函数，就可以使用了 
        <p>

<div align="center"><table border="1" bgcolor="ffe0e0"><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">require(</font><font color="#DD0000">&quot;counter.inc&quot;</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;访客计数器&nbsp;最终版&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>您是第&nbsp;<font color="#0000BB">&lt;?&nbsp;MyCounter</font><font color="#007700">();&nbsp;</font><font color="#0000BB">?&gt;</font>&nbsp;位参观者<br>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
<p>
<div align="right"><font color="c0c0c0" size="-2">Copyright &copy; 1999, Wilson Peng</font></div>
</td></tr></table></div><p>

要用这个 MyCounter() 函数，先在 Homepage 的开头处加入 require() 函数，引入 MyCounter() 函数成为该 Homepage 的一部份。之后再将 &lt;? MyCounter(); ?&gt; 字符串放在需要计数器的地方就可以了。<p>

<font color="#0000BB"><font color="#007700">function</font>&nbsp;MyCounter<font color="#007700">(</font><font color="#007700">)</font>&nbsp;<font color="#007700">{</font><br>
<pre>
:
:
</pre>
<font color="#007700">}</font></font><p>

在建立函数时，需要用上面的格式。在自订函数名称前加入 function 字符串。<p>

每页有用到 MyCounter() 的 Homepage 都会在 /tmp 之后加入该页的路径，这可以用 $PHP_SELF 变量达成。<p>

<font color="#0000BB">&nbsp;&nbsp;$counterFile=<font color="#DD0000"><strong>&quot;/tmp&quot;</strong></font>.$GLOBALS[<font color="#DD0000"><strong>&quot;PHP_SELF&quot;</strong></font>]<font color="#007700">;</font></font><p>

当然，若您要将 /tmp 改成别的目录也可以，不然在 SUN 等服务器，要是 reboot，/tmp 中的东西都没了，要重新开始再计数了。若您不知要使用什么目录，建议使用 /var/log/counter 这个目录，和其它的 log 等变动资料放在一起。<p>

<font color="#0000BB">&nbsp;&nbsp;<font color="#007700">if</font>&nbsp;<font color="#007700">(</font>!file_exists<font color="#007700">(</font>$counterFile<font color="#007700">)</font><font color="#007700">)</font>&nbsp;<font color="#007700">{</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;<font color="#007700">if</font>&nbsp;<font color="#007700">(</font>!file_exists<font color="#007700">(</font>dirname<font color="#007700">(</font>$counterFile<font color="#007700">)</font><font color="#007700">)</font><font color="#007700">)</font>&nbsp;<font color="#007700">{</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mkdir<font color="#007700">(</font>dirname<font color="#007700">(</font>$counterFile<font color="#007700">)</font>,&nbsp;0700<font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;<font color="#007700">}</font><br>
&nbsp;&nbsp;&nbsp;&nbsp;exec<font color="#007700">(</font><font color="#DD0000"><strong>&quot;echo&nbsp;0&nbsp;&gt;&nbsp;$counterFile&quot;</strong></font><font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;<font color="#007700">}</font></font><p>


这五行主要是检查 $counterFile 是否存在，若文件不存在则看目录是否存在，决定要不要建立目录。之后就建立文件，并写入 0。<p>

<font color="#0000BB">&nbsp;&nbsp;$fp&nbsp;=&nbsp;fopen<font color="#007700">(</font>$counterFile,<font color="#DD0000"><strong>&quot;rw&quot;</strong></font><font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;$num&nbsp;=&nbsp;fgets<font color="#007700">(</font>$fp,5<font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;$num&nbsp;+=&nbsp;1<font color="#007700">;</font><br>
&nbsp;&nbsp;<font color="#007700">print</font>&nbsp;<font color="#DD0000"><strong>&quot;$num&quot;</strong></font><font color="#007700">;</font><br>
&nbsp;&nbsp;<font color="#007700">echo</font>&nbsp;$counterFile<font color="#007700">;</font></font><p>

这五行就是打开计数器存放的文件，并将它累加后的结果送到浏览器端。<p>

<font color="#0000BB">&nbsp;&nbsp;exec<font color="#007700">(</font><font color="#DD0000"><strong>&quot;rm&nbsp;-rf&nbsp;$counterFile&quot;</strong></font><font color="#007700">)</font><font color="#007700">;</font><br>
&nbsp;&nbsp;exec<font color="#007700">(</font><font color="#DD0000"><strong>&quot;echo&nbsp;$num&nbsp;&gt;&nbsp;$counterFile&quot;</strong></font><font color="#007700">)</font><font color="#007700">;</font></font><p>

最后将计数器文件删除，再重新建立一个。就完成了这个以文件为基础的纯文字计数器。

<p><hr size="1"><br><p>
</td></tr></table></div>
<p>
<div align="center">
  <table border="0">
    <tr>
      <td>[ <a href="5.php.php" alt="5.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="5.2.php.php" alt="5.2.php">下一页</a> 
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
