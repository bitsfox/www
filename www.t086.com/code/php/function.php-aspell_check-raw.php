<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:aspell_check-raw()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:aspell_check-raw()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-4.php" alt="group.php?4">ƴд��麯����</a></div><br><h1><font color=0000bb>aspell_check-raw</font></h1><p>
���һ�����֣���ʹƴ��Ҳ���ı��������<p>
<font color=ff8000>�﷨:</font> <b>boolean aspell_check_raw(int dictionary_link, string word);</b><p>
<font color=ff8000>����ֵ:</font> ����ֵ<p>
<font color=ff8000>��������:</font> ���ϴ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>��������鵥�ֵ�ƴд����ƴд��ȷ�򷵻� true������ȷ�򷵻� false������������ı��������ʹ���ߵ�ƴд��<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
$aspell_link=aspell_new("english");<br>if&nbsp;(aspell_check_raw($aspell_link,"testt"))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"This&nbsp;is&nbsp;a&nbsp;valid&nbsp;spelling";<br>}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;"Sorry,&nbsp;wrong&nbsp;spelling";<br>}<br></font>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-aspell_check.php" alt="function.php?aspell_check">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-aspell_suggest.php" alt="function.php?aspell_suggest">��һҳ</a> 
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
