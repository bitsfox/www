<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:htmlspecialchars()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:htmlspecialchars()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">�ַ�����������</a></div><br><h1><font color=0000bb>htmlspecialchars</font></h1><p>
�������ַ�ת�� HTML ��ʽ��<p>
<font color=ff8000>�﷨:</font> <b>string htmlspecialchars(string string);</b><p>
<font color=ff8000>����ֵ:</font> �ַ���<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������������ַ�ת�� HTML ���ַ�����ʽ ( &amp;....; )����õ��ĳ��Ͽ��ܾ��Ǵ���ͻ����Ե����԰��ˡ�<p>

<ul type=disc>
<li>&amp; (��) ת�� &amp;amp;
<li>" (˫����) ת�� &amp;quot;
<li>&lt; (С��) ת�� &amp;lt; 
<li>&gt; (����) ת�� &amp;gt;
</ul><p>

�˺���ֻת������������ַ���������ȫ��ת���� HTML ������ ASCII ת����
<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
����&nbsp;aulbach@unter.franken.de&nbsp;(27-Jan-1999)&nbsp;���ṩ�ķ���<br><br>&lt;FORM&nbsp;ACTION=bla&gt;<br>&lt;H2&gt;Restaurant&nbsp;Description&lt;H2&gt;<br>Name&nbsp;of&nbsp;restaurant:<br>&lt;INPUT&nbsp;TYPE=text&nbsp;NAME="restname"&nbsp;VALUE="<font color="#0000BB">&lt;?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">HTMLSpecialChars</font><font color="#007700">(</font><font color="#0000BB">$restname</font><font color="#007700">);&nbsp;</font><font color="#0000BB">?&gt;</font>"&gt;&nbsp;<br>&lt;!--&nbsp;����&nbsp;$restname&nbsp;�ǽ��ӵ�&nbsp;$restname="\"The&nbsp;White&nbsp;Horse\"";&nbsp;--&gt;<br>&lt;BR&gt;<br>��������&nbsp;(������&nbsp;HTML����ֱ��ʹ��):&nbsp;&lt;BR&gt;<br>&lt;TEXTAREA&nbsp;NAME="descript"&gt;<font color="#0000BB">&lt;?<br>&nbsp;&nbsp;&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#0000BB">HTMLSpecialChars</font><font color="#007700">(</font><font color="#0000BB">$descript</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>&lt;/TEXTAREA&gt;<br>&lt;INPUT&nbsp;TYPE=submit&gt;<br>&lt;/FORM&gt;</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-htmlentities.php" alt="function.php?htmlentities">htmlentities()</a> &nbsp;<a href="function.php-nl2br.php" alt="function.php?nl2br">nl2br()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-get_meta_tags.php" alt="function.php?get_meta_tags">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-htmlentities.php" alt="function.php?htmlentities">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
