<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ����:ImageTTFText()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>����:ImageTTFText()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-20.php" alt="group.php?20">ͼ�δ�������</a></div><br><h1><font color=0000bb>ImageTTFText</font></h1><p>
д TTF ���ֵ�ͼ�С�<p>
<font color=ff8000>�﷨:</font> <b>array ImageTTFText(int im, int size, int angle, int x, int y, int col, string fontfile, string text);</b><p>
<font color=ff8000>����ֵ:</font> ����<p>
<font color=ff8000>��������:</font> ͼ�δ���<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>����˵��</font></td></tr></table><p>�������� TTF (TrueType Fonts) ��������д��ͼƬ������ size Ϊ���εĳߴ磻angle Ϊ���͵ĽǶȣ�˳ʱ����㣬0 ��Ϊˮƽ��Ҳ���������ӵķ��� (������)��90 ����Ϊ���µ��ϵ����֣�x,y ������Ϊ���ֵ�����ֵ (ԭ��Ϊ���Ͻ�)������ col Ϊ�ֵ���ɫ��fontfile Ϊ�����ļ����ƣ������Զ�˵��ļ���text ��Ȼ�����ַ��������ˡ�����ֵΪ���飬�����˰˸�Ԫ�أ�ͷ�����ֱ�Ϊ���µ� x��y ���꣬�������ĸ�Ϊ���½ǵ� x��y ���꣬���塢�����ߡ��˶���ֱ�Ϊ���ϼ����ϵ� x��y ���ꡣ��ļ��ע�������ʹ�ñ�������ϵͳҪװ�� GD �� Freetype ���������⡣<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>ʹ�÷���</font></td></tr></table><p><font color="#000000">
��������һ��&nbsp;400x30&nbsp;pixel&nbsp;��С�ĺڵ�ͼ������&nbsp;Arial&nbsp;��������д��&nbsp;I&nbsp;am&nbsp;NUMBER&nbsp;ONE&nbsp;!!&nbsp;�İ��֡�<br><br><font color="#0000BB">&lt;?php<br>Header</font><font color="#007700">(</font><font color="#DD0000">"Content-type:&nbsp;image/gif"</font><font color="#007700">);<br></font><font color="#0000BB">$im&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">imagecreate</font><font color="#007700">(</font><font color="#0000BB">400</font><font color="#007700">,</font><font color="#0000BB">30</font><font color="#007700">);<br></font><font color="#0000BB">$black&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">,</font><font color="#0000BB">0</font><font color="#007700">);<br></font><font color="#0000BB">$white&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">ImageColorAllocate</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">,</font><font color="#0000BB">255</font><font color="#007700">);<br></font><font color="#0000BB">ImageTTFText</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">,&nbsp;</font><font color="#0000BB">20</font><font color="#007700">,&nbsp;</font><font color="#0000BB">0</font><font color="#007700">,&nbsp;</font><font color="#0000BB">10</font><font color="#007700">,&nbsp;</font><font color="#0000BB">20</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$white</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"/somewhere/arial.ttf"</font><font color="#007700">,&nbsp;</font><font color="#DD0000">"I&nbsp;am&nbsp;NUMBER&nbsp;ONE&nbsp;!!"</font><font color="#007700">);<br></font><font color="#0000BB">ImageGif</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">);<br></font><font color="#0000BB">ImageDestroy</font><font color="#007700">(</font><font color="#0000BB">$im</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;</font>
</font>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>�ο�</font></td></tr></table><p><a href="function.php-ImageTTFBBox.php" alt="function.php?ImageTTFBBox">ImageTTFBBox()</a> &nbsp;<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-ImageTTFBBox.php" alt="function.php?ImageTTFBBox">��һҳ</a> 
      </td>
      <td>��<a href="../php/" alt="PHP">PHP�����ֲ�</a>��</td>
      <td> <a href="function.php-ImageColorAt.php" alt="function.php?ImageColorAt">��һҳ</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP ��ҳ</a> | <a href="guide.php.php">PHP ����</a> | <a href="4.php.php">PHP 
      ������</a> | <a href="funcindex.php.php">PHP ��������</a> | <a href="5.php.php">PHP 
      ��������</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
