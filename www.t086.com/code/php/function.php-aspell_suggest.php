<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:aspell_suggest()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:aspell_suggest()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-4.php" alt="group.php?4">ƴд��麯����</a></div><br><h1><font color=0000bb>aspell_suggest</font></h1><p>
���һ�����֣����ṩƴд���顣<p>
<font color=ff8000>�﷨:</font> <b>array aspell_suggest(int dictionary_link, string word);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������鵥�ֵ�ƴд����������ܵ�ƴ������ȷ�Ľ��飬���������ͽ�������ء�<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
<font color="#0000BB">&lt;?<br>$aspell_link</font><font color="#007700">=</font><font color="#0000BB">aspell_new</font><font color="#007700">(</font><font color="#DD0000">"english"</font><font color="#007700">);<br><br>if&nbsp;(!</font><font color="#0000BB">aspell_check</font><font color="#007700">(</font><font color="#0000BB">$aspell_link</font><font color="#007700">,</font><font color="#DD0000">"testt"</font><font color="#007700">))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$suggestions</font><font color="#007700">=</font><font color="#0000BB">aspell_suggest</font><font color="#007700">(</font><font color="#0000BB">$aspell_link</font><font color="#007700">,</font><font color="#DD0000">"testt"</font><font color="#007700">);<br><br>&nbsp;&nbsp;&nbsp;&nbsp;for(</font><font color="#0000BB">$i</font><font color="#007700">=</font><font color="#0000BB">0</font><font color="#007700">;&nbsp;</font><font color="#0000BB">$i&nbsp;</font><font color="#007700">&lt;&nbsp;</font><font color="#0000BB">count</font><font color="#007700">(</font><font color="#0000BB">$suggestions</font><font color="#007700">);&nbsp;</font><font color="#0000BB">$i</font><font color="#007700">++)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</font><font color="#DD0000">"Possible&nbsp;spelling:&nbsp;"&nbsp;</font><font color="#007700">.&nbsp;</font><font color="#0000BB">$suggestions</font><font color="#007700">[</font><font color="#0000BB">$i</font><font color="#007700">]&nbsp;.&nbsp;</font><font color="#DD0000">"&lt;br&gt;"</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-aspell_check-raw.php" alt="function.php?aspell_check-raw">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-bcadd.php" alt="function.php?bcadd">��һҳ</a> 
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
