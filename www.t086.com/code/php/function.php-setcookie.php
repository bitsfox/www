<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:setcookie()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:setcookie()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-18.php" alt="group.php?18">HTTP ��غ�����</a></div><br><h1><font color=0000bb>setcookie</font></h1><p>
�ͳ� Cookie ��Ϣ���������<p>
<font color=ff8000>�﷨:</font> <b>int setcookie(string name, string value, int expire, string path, string domain, int secure);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>����������ű�ͷ Header �ͳ�һ��С��Ϣ�ַ������������ʹ�ñ�����Ҫ���ͳ� HTML ����ǰ��ʵ���� cookie Ҳ���ͷ��һ���ݡ��������Ĳ������˵�һ�� name ֮�⣬���ǿ���ʡ�Եġ����� name ��ʾ cookie �����ƣ�value ��ʾ��� cookie ��ֵ���������Ϊ���ַ������ʾȡ��������и� cookie �����ϣ�expire ��ʾ�� cookie ����Чʱ�䣻path Ϊ�� cookie �����·����domain ��ʾ cookie ����վ��secure ������ https �İ�ȫ����ʱ����Ч����õ������ cookie ��Ϣ���Ե� <a href="javascript:if(confirm('http://www.netscape.com/newsref/std/cookie_spec.html  \n\nThis file was not retrieved by Teleport Pro, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?'))window.location='../www.netscape.com/newsref/std/cookie_spec.html'" tppabs="/to.asp?url=http://www.netscape.com/newsref/std/cookie_spec.html">http://www.netscape.com/newsref/std/cookie_spec.html</a>���� cookie ԭ���� Netscape ���ṩ��������Ϣ��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
dante@mpath.com&nbsp;(27-May-1999)&nbsp;���ṩ��&nbsp;setcookie()&nbsp;��&nbsp;header()&nbsp;������<br><br><font color="#0000BB">&lt;?php<br>$status&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">0</font><font color="#007700">;<br>if&nbsp;(isset(</font><font color="#0000BB">$myTstCky</font><font color="#007700">)&nbsp;&amp;&amp;&nbsp;(</font><font color="#0000BB">$myTstCky&nbsp;</font><font color="#007700">==&nbsp;</font><font color="#DD0000">"ChocChip"</font><font color="#007700">))&nbsp;</font><font color="#0000BB">$status&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">1</font><font color="#007700">;<br>if&nbsp;(!isset(</font><font color="#0000BB">$CCHK</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;</font><font color="#0000BB">setcookie</font><font color="#007700">(</font><font color="#DD0000">"myTstCky"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"ChocChip"</font><font color="#007700">);<br>&nbsp;&nbsp;</font><font color="#0000BB">header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;$PHP_SELF?CCHK=1"</font><font color="#007700">);<br>&nbsp;&nbsp;exit;<br>}<br></font><font color="#0000BB">?&gt;<br></font>&lt;html&gt;<br>&lt;head&gt;&lt;title&gt;Cookie&nbsp;Check&lt;/title&gt;&lt;/head&gt;<br>&lt;body&nbsp;bgcolor="#FFFFFF"&nbsp;text="#000000"&gt;<br>Cookie&nbsp;Check&nbsp;Status:&nbsp;<br><font color="#0000BB">&lt;?php&nbsp;<br>printf&nbsp;</font><font color="#007700">(</font><font color="#DD0000">'&lt;font&nbsp;color="#%s"&gt;%s&lt;/font&gt;&lt;br&gt;;'</font><font color="#007700">,&nbsp;<br>&nbsp;&nbsp;</font><font color="#0000BB">$status&nbsp;</font><font color="#007700">?&nbsp;</font><font color="#DD0000">"00FF00"&nbsp;</font><font color="#007700">:&nbsp;</font><font color="#DD0000">"FF0000"</font><font color="#007700">,<br>&nbsp;&nbsp;</font><font color="#0000BB">$status&nbsp;</font><font color="#007700">?&nbsp;</font><font color="#DD0000">"PASSED!"&nbsp;</font><font color="#007700">:&nbsp;</font><font color="#DD0000">"FAILED!"</font><font color="#007700">);&nbsp;<br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-header.php" alt="function.php?header">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-hw_Children.php" alt="function.php?hw_Children">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
