<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 广告轮播</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>广告轮播</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

网络广告，变成了 Internet 上的热门学问。而 468x60 更变成了广告人员绞尽脑汁的尺寸。<p>

在处理广告时，若能直接使用浏览器将广告的 468x60 图文件送到处理广告的服务器中，相信是件很舒服的事，不用再开 FTP 程序，搞大半天只为了 upload。<p>

这个问题，是所有 Web CGI 程序的痛，包括 ASP、Prel....等等，都需要再经过系统元件的增加才能达成。号称最强的 Web CGI 程序: PHP，在这方面的表现没有令人失望，甚至傲视其它的 CGI 工具。<p>

File Upload 功能在 RFC 1867 文件有有详细的说明，是利用特殊的文件格式 (content-type) multipart/form-data。值得注意的是浏览器一定要用 Netscape 3.0 以上或 MS Internet Explorer 4.0 以上的版本才能将文件上传。<p>

先看下面的 HTML 源代码<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
&lt;form&nbsp;enctype="multipart/form-data"&nbsp;action="next.php"&nbsp;method=post&gt;<br>您的大名:&nbsp;&lt;input&nbsp;type=text&nbsp;name=user&gt;&lt;br&gt;<br>文件名称:&nbsp;&lt;input&nbsp;name="myfile"&nbsp;type="file"&gt;&lt;br&gt;<br>&lt;input&nbsp;type="submit"&nbsp;value="送出"&gt;<br>&lt;/form&gt;<br></font>
</td></tr></table></div><p>

在 form 的标签中，要加入 enctype="multipart/form-data" 的字符串，表示用户输入的资料上有文件上传，同时 method 一定要用 POST 而不能用 GET。<p>

在上面的码中，若用户姓名填入 Wilson Peng，并选 c:\myphoto.gif 的文件，在用户按下送出键后，浏览器则传送出下面的 POST 资料。<p>

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

  ...myphoto.gif 内容略...
--BbC04y--
--AaB03x--

</pre><p>

看到上面的资料中，boundary=AaB03x 即为分开不同字段资料的信息，其中的 AaB03x 编码方法，视浏览器的版本不同而异，通常是浏览器哈稀产生的。之后就可以看到用 --AaB03x 来隔开不同的字段。<p>

以上面为例，处理 form 的 action 程序 next.php，会主动产生四个变量，见下表<p>

<table border=1>
<tr><th>变量名</th><th>说明</th></tr>
<tr><td>$myfile</td><td>即上传的文件内容</td></tr>
<tr><td>$myfile_name</td><td>上传文件在用户端的名称</td></tr>
<tr><td>$myfile_size</td><td>上传文件的大小</td></tr>
<tr><td>$myfile_type</td><td>上传文件的格式，如 "image/gif"</td></tr>
</table><p>

在 next.php 程序要做的最重要步骤，就是好好的使用这四个变量，否则程序一结束，用户上传的文件就消失了。因此，要先将 $myfile 复制到存放广告图的目录中<p>

<font color="#0000BB">copy</font><font color="#007700">(</font><font color="#0000BB">$banner</font><font color="#007700">,</font><font color="#DD0000">"/home1/biglobe3/ad/"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">);</font><p>

这行程序就是将文件存在 /home/htdocs/ad 的目录中，就上面的例子而言，就将文件存到 /home/htdocs/ad/myphoto.gif。重要的是，存放的目录不能是 Web Server 无法读到的目录，而应放在网站的 Homepage 所在目录中，才可以在网络上看到。<p>

或许程序要更详细的处理，例如比对取得的文件大小与系统回报的是否相同....等等，就可以用 $myfile_size 变量了。<p>

若在 form 中配置 input file 的名称改掉，则在 Upload 的变量也一起改，如<p>

&lt;input name="upfile" type="file"&gt;<p>

则变量就改成 $upfile、$upfile_name、$upfile_size、与 $upfile_type。<p>

因此，下面的例子就利用 File Upload 及 Oracle 7.x 后端数据库，将文件放在 Web Homepage 目录中，相关信息则存在 Oracle 中。当然，加上用户认证，让有帐号的用户才能上传图片，可避免刽客 (cracker) 等将不雅或不适当的广告上传。例中有关数据库的配置和 <a href="5.4.php.php" alt="5.4.php">5.4 留言板</a>的配置相同。<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;head&gt;<br><font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;adadd.php<br></font><font color="#007700">if&nbsp;((</font><font color="#0000BB">$banner</font><font color="#007700">==</font><font color="#DD0000">""</font><font color="#007700">)&nbsp;and&nbsp;(</font><font color="#0000BB">$url</font><font color="#007700">==</font><font color="#DD0000">""</font><font color="#007700">))&nbsp;{<br></font><font color="#0000BB">?&gt;<br></font>&lt;title&gt;新增广告&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br>加权值数字愈大，图片出现的机率就愈高，默认值为&nbsp;1。<br>&lt;FORM&nbsp;ENCTYPE="multipart/form-data"&nbsp;ACTION="adadd.php"&nbsp;METHOD=POST&gt;<br>&lt;table&nbsp;border=0&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;广告&nbsp;Banner:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=banner&nbsp;TYPE="file"&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;广告网址&nbsp;URL:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=url&nbsp;type=text&nbsp;size=30&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;辅助字符串&nbsp;ALT:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=alt&nbsp;type=text&nbsp;size=30&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;广告说明:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=descript&nbsp;type=text&nbsp;size=30&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;align=right&gt;显示加权:&nbsp;&lt;/td&gt;&lt;td&gt;&lt;input&nbsp;name=priority&nbsp;type=text&nbsp;size=5&nbsp;value=1&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;tr&gt;&lt;td&nbsp;colspan=2&nbsp;align=right&gt;&lt;input&nbsp;type="submit"&nbsp;VALUE="确定"&gt;&lt;/td&gt;&lt;/tr&gt;<br>&lt;/table&gt;<br>&lt;/FORM&gt;<br><font color="#0000BB">&lt;?<br></font><font color="#007700">}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">file_exists</font><font color="#007700">(</font><font color="#DD0000">"/home/htdocs/ad/"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">CommonHeader</font><font color="#007700">(</font><font color="#DD0000">"文件&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;已存在"</font><font color="#007700">);<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;p&gt;&lt;br&gt;&lt;br&gt;广告文件已经存在\n&lt;p&gt;&lt;br&gt;&lt;br&gt;&lt;/body&gt;&lt;/html&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;exit;<br>&nbsp;&nbsp;};<br><br>&nbsp;&nbsp;</font><font color="#0000BB">copy</font><font color="#007700">(</font><font color="#0000BB">$banner</font><font color="#007700">,</font><font color="#DD0000">"/home1/biglobe3/ad/"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=WWW"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/home/oracle/product/7.3.2"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"LD_LIBRARY_PATH=/home/oracle/product/7.3.2/lib"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS32=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;<br>&nbsp;&nbsp;</font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br>&nbsp;&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"insert&nbsp;into&nbsp;ad(url,&nbsp;banner,&nbsp;alt,&nbsp;descript,&nbsp;priority)&nbsp;values('$url',&nbsp;'$banner_name',&nbsp;'$alt',&nbsp;'$descript',&nbsp;$priority)"</font><font color="#007700">;<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;title&gt;广告新增完成&lt;/title&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/head&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;body&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;a&nbsp;href="</font><font color="#007700">.</font><font color="#0000BB">$url</font><font color="#007700">.</font><font color="#DD0000">"&gt;&lt;img&nbsp;src=/ad/"</font><font color="#007700">.</font><font color="#0000BB">$banner_name</font><font color="#007700">.</font><font color="#DD0000">"&nbsp;alt=\""</font><font color="#007700">.</font><font color="#0000BB">$alt</font><font color="#007700">.</font><font color="#DD0000">"\"&nbsp;border=0&gt;&lt;/a&gt;&lt;p&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;ul&nbsp;type=disc&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;广告网址:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$url</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;辅助字符串:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$alt</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;广告说明:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$descript</font><font color="#007700">;&nbsp;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;li&gt;显示加权:&nbsp;"</font><font color="#007700">.</font><font color="#0000BB">$priority</font><font color="#007700">;<br>&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"&lt;/ul&gt;"</font><font color="#007700">;<br>}<br><br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table></div><p>

当然要使用上面的程序之前别忘了先增加 ad 资料表，SQL 及字段如下<p>

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
<tr><th>序号</th><th>字段</th><th>名称</th><th>资料类型</th><th>资料长度</th><th>字段说明</th></tr>
<tr><td align=right>0</td><td nowrap>广告网址</td><td nowrap>url</td><td nowrap>varchar2</td><td nowrap>1024</td><td nowrap></td></tr>
<tr><td align=right>1</td><td nowrap>图片路径</td><td nowrap>banner</td><td nowrap>varchar2</td><td nowrap>1024</td><td nowrap></td></tr>
<tr><td align=right>2</td><td nowrap>字符串显示</td><td nowrap>alt</td><td nowrap>varchar2</td><td nowrap>255</td><td nowrap></td></tr>
<tr><td align=right>3</td><td nowrap>广告说明</td><td nowrap>descript</td><td nowrap>varchar2</td><td nowrap>255</td><td nowrap></td></tr>
<tr><td align=right>4</td><td nowrap>显示加权</td><td nowrap>priority</td><td nowrap>number</td><td nowrap>4</td><td nowrap>1 为默认值，0 表停用</td></tr>
</table><p>

值得一提的是在这加入了加权的功能，若一个广告要提升曝光率，则可以将显示加权的字段数字加大，例如 5，它的出现机率就会比只设为 1 的高五倍。<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;ad.php<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_SID=WWW"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"NLS_LANG=american_taiwan.zht16big5"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORACLE_HOME=/home/oracle/product/7.3.2"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"LD_LIBRARY_PATH=/home/oracle/product/7.3.2/lib"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br></font><font color="#0000BB">putenv</font><font color="#007700">(</font><font color="#DD0000">"ORA_NLS32=/home/oracle/product/7.3.2/ocommon/nls/admin/data"</font><font color="#007700">);<br><br></font><font color="#0000BB">$handle</font><font color="#007700">=</font><font color="#0000BB">ora_logon</font><font color="#007700">(</font><font color="#DD0000">"user38@WWW"</font><font color="#007700">,</font><font color="#DD0000">"iam3849"</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">$cursor</font><font color="#007700">=</font><font color="#0000BB">ora_open</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br></font><font color="#0000BB">ora_commitoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">$query</font><font color="#007700">=</font><font color="#DD0000">"SELECT&nbsp;url,&nbsp;banner,&nbsp;alt,&nbsp;priority&nbsp;FROM&nbsp;ad&nbsp;where&nbsp;priority&nbsp;&gt;&nbsp;0"</font><font color="#007700">;<br></font><font color="#0000BB">ora_parse</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$query</font><font color="#007700">)&nbsp;or&nbsp;die;<br></font><font color="#0000BB">ora_exec</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br></font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">$pricount</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;<br>while(</font><font color="#0000BB">ora_fetch</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">1</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">2</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">]&nbsp;=&nbsp;</font><font color="#0000BB">ora_getcolumn</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">,</font><font color="#0000BB">3</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">$pricount&nbsp;</font><font color="#007700">+=&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">];<br>&nbsp;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++;<br>};<br><br></font><font color="#0000BB">ora_close</font><font color="#007700">(</font><font color="#0000BB">$cursor</font><font color="#007700">);<br></font><font color="#0000BB">ora_logoff</font><font color="#007700">(</font><font color="#0000BB">$handle</font><font color="#007700">);<br><br></font><font color="#0000BB">srand</font><font color="#007700">((double)</font><font color="#0000BB">microtime</font><font color="#007700">()*</font><font color="#0000BB">1000000</font><font color="#007700">);<br></font><font color="#0000BB">$pri&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">rand</font><font color="#007700">(</font><font color="#0000BB">1</font><font color="#007700">,</font><font color="#0000BB">$pricount</font><font color="#007700">);<br></font><font color="#0000BB">$pricount</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;<br>for(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">&lt;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$ad</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">$pricount&nbsp;</font><font color="#007700">+=&nbsp;</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">3</font><font color="#007700">];<br>&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$pri&nbsp;</font><font color="#007700">&lt;=&nbsp;</font><font color="#0000BB">$pricount</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$ad1</font><font color="#007700">[]=</font><font color="#DD0000">"&lt;a&nbsp;href="</font><font color="#007700">.</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">0</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;target=new&gt;&lt;img&nbsp;src=/ad/"</font><font color="#007700">.</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">1</font><font color="#007700">].</font><font color="#DD0000">"&nbsp;width=468&nbsp;height=60&nbsp;border=0&nbsp;alt=\""</font><font color="#007700">.</font><font color="#0000BB">$ad</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">][</font><font color="#0000BB">2</font><font color="#007700">].</font><font color="#DD0000">"\"&gt;&lt;/a&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;}<br>}<br>echo&nbsp;</font><font color="#0000BB">$ad1</font><font color="#007700">[</font><font color="#0000BB">0</font><font color="#007700">];<br><br></font><font color="#0000BB">?&gt;<br></font>
</font>
</td></tr></table></div><p>

上面的程序为公用的广告显示程序，其中的 $pricount 变量为所有广告 priority 加起来的和。程序先将所有的广告信息读到数组变量 $ad 中，随即关上数据库。再依时间取随机数种子，之后再从 1 到 $pricount 间随机取一个数字。<p>

网页中要用广告程序，只要在需要广告的地方加上 <nobr><font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">include(</font><font color="#DD0000">"ad.php"</font><font color="#007700">);&nbsp;</font><font color="#0000BB">?&gt;</font></nobr> 就可以了，当然 Include 的路径 (在 httpd.conf 中) 要先设好才行。
        <p> 上面的程序还有改进空间，可以加入广告的 Click Log 功能，或是显示的 Log 功能，改动显示加权的程序....等等，就不做范例了，毕竟在这儿是要介绍 
          PHP 的实际应用及程序开发，而不是套件开发。真的需要现成的广告套件，不妨到 <a href="/to.asp?url=http://www.phpwizard.net/phpAds/" tppabs="/to.asp?url=http://www.phpwizard.net/phpAds/">http://www.phpwizard.net/phpAds</a>，这是一套用 
          PHP 开发出来的广告程序。 
        <p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="5.5.php.php" alt="5.5.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="funcindex.php.php" alt="funcindex.php">下一页</a> 
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
