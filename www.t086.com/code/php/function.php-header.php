<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:header()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:header()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-18.php" alt="group.php?18">HTTP ��غ�����</a></div><br><h1><font color=0000bb>header</font></h1><p>
�ͳ� HTTP Э��ı�ͷ�������<p>
<font color=ff8000>�﷨:</font> <b>int header(string string);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ����ϵͳ<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table>
        <p>��ͷ (header) �Ƿ������� HTTP Э�鴫 HTML ���ϵ������ǰ���ͳ����ַ������ڱ�ͷ�� HTML �ļ�֮�������һ�зָ����й� 
          HTTP ����ϸ˵�������Բο����������鼮�����ϸ�� RFC 2068 �ٷ��ļ�(<a href="../www.w3c.org/Protocols/rfc2068/rfc2068" tppabs="http://www.w3c.org/Protocols/rfc2068/rfc2068">http://www.w3.org/Protocols/rfc2068/rfc2068</a>)���� 
          PHP ���ͻ� HTML ����ǰ�����ȴ������еı�ͷ��
        <p>ע��:  ��ͳ�ı�ͷһ�������������ֱ�ͷ֮һ����ֻ�ܳ���һ�Ρ�<ul type=disc><li>Content-Type: xxxx/yyyy<li>Location: xxxx:yyyy/zzzz<li>Status: nnn xxxxxx</ul><p>���µĶ��ͱ�ͷ��� (Multipart MIME) �����Գ��ֶ������ϡ�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����һ:&nbsp;���������ص��û���&nbsp;PHP&nbsp;�Ĺٷ���վ��<br><font color="#0000BB">&lt;?php<br>Header</font><font color="#007700">(</font><font color="#DD0000">"Location:&nbsp;http://www.php.net"</font><font color="#007700">);&nbsp;&nbsp;<br>exit;<br></font><font color="#0000BB">?&gt;<br></font><br>������:&nbsp;�����û�ÿ�ζ��ܵõ����µ����ϣ�������&nbsp;Proxy&nbsp;��&nbsp;cache&nbsp;�е����ϣ�����ʹ�����еı�ͷ<br>header("Expires:&nbsp;Mon,&nbsp;26&nbsp;Jul&nbsp;1997&nbsp;05:00:00&nbsp;GMT");<br>header("Last-Modified:&nbsp;"&nbsp;.&nbsp;gmdate("D,&nbsp;d&nbsp;M&nbsp;Y&nbsp;H:i:s")&nbsp;.&nbsp;"GMT");<br>header("Cache-Control:&nbsp;no-cache,&nbsp;must-revalidate");<br>header("Pragma:&nbsp;no-cache");<br><br>������:&nbsp;���û�������������Ҳ����ļ�����Ϣ��<br><font color="#0000BB">&lt;?php<br>header</font><font color="#007700">(</font><font color="#DD0000">"Status:&nbsp;404&nbsp;Not&nbsp;Found"</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font><br>������:&nbsp;bill@evil.inetarena.com&nbsp;(28-Apr-1999)&nbsp;�ṩ���û������ļ��ķ�����<br>header("Content-type:&nbsp;application/x-gzip");<br>header("Content-Disposition:&nbsp;attachment;&nbsp;filename=some-file.tar.gz");<br>header("Content-Description:&nbsp;PHP3&nbsp;Generated&nbsp;Data");<br></font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-unlink.php" alt="function.php?unlink">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-setcookie.php" alt="function.php?setcookie">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
