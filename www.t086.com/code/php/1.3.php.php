<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - PHP ������ CGI �ıȽ�</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>PHP ������ CGI �ıȽ�</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

�޿����ɵģ�д CGI �ķ�ʽ�кܶ��֣��� PHP ֻ�����е�һ��ѡ����ˡ�������� Webmaster ���ԣ�CGI ��д������Ӧ������������Ķ����Ͼ�����һ����ϵͳ��ӳ�ٶ�Ҫ���ϸ��ϵͳ���ԣ�����ֻ�� NSAPI ����д�� CGI ������ܷ���Ҫ���ˡ��������ĳ��ϣ�����ʹ�� PHP ����Ϊ CGI �Ľ������������࣬���������ʺϵġ�<p>

<table border=1>
<tr><th>�������</th>
            <th><a href="http://www.php.net/" tppabs="http://www.php.net/">PHP</a></th>
            <th>ASP</th><th>CGI</th>
            <th>NSAPI</th>
            <th>ISAPI</th></tr>
<tr><th>����ϵͳ</th><td align=center>����</td><td align=center>Win32</td><td align=center>����</td><td align=center>����</td><td align=center>Win32</td></tr>
<tr><th>Web������</th><td align=center>����</td><td align=center>IIS</td><td align=center>����</td><td align=center>Netscape Server</td><td align=center>IIS</td></tr>
<tr><th>ִ��Ч��</th><td align=center>��</td><td align=center>��</td><td align=center>��</td><td align=center>����</td><td align=center>����</td></tr>
<tr><th>�ȶ���</th><td align=center>��</td><td align=center>�е�</td><td align=center>���</td><td align=center>��</td><td align=center>��</td></tr>
<tr><th>����ʱ��</th><td align=center>��</td><td align=center>��</td><td align=center>�е�</td><td align=center>��</td><td align=center>��</td></tr>
<tr><th>�޸�ʱ��</th><td align=center>��</td><td align=center>��</td><td align=center>�е�</td><td align=center>��</td><td align=center>��</td></tr>
<tr><th>��������</th><td align=center>PHP</td><td align=center>VB</td><td align=center>����</td><td align=center>C/C++</td>
            <td align=center>C/<a href="/to.asp?url=http://www.borland.com/delphi" tppabs="/to.asp?url=http://www.borland.com/delphi">Delphi</a></td>
          </tr>
<tr><th>��ҳ���</th><td align=center>��</td><td align=center>��</td><td align=center>��</td><td align=center>��</td><td align=center>��</td></tr>
<tr><th>ѧϰ�ż�</th><td align=center>��</td><td align=center>��</td><td align=center>��</td><td align=center>����</td><td align=center>��</td></tr>
<tr><th>����֧��</th><td align=center>��</td><td align=center>��</td><td align=center>����</td><td align=center>�е�</td><td align=center>��</td></tr>
<tr><th>ϵͳ��ȫ</th><td align=center>��</td><td align=center>����</td><td align=center>���</td><td align=center>��</td><td align=center>�п�</td></tr>
<tr><th>ʹ����վ</th><td align=center>����</td><td align=center>��</td><td align=center>��</td><td align=center>����</td><td align=center>��</td></tr>
<tr><th>�İ��ٶ�</th><td align=center>��</td><td align=center>��</td><td align=center>��</td><td align=center>��</td><td align=center>��</td></tr>
</table><p>

���е� PHP ���������� Web �������ϣ���ͳ CGI �Ͳ��������ֲ���ϵͳ�� Web ������ƽ̨��NSAPI һ��Ҫ�� Netscape �ķ����� (�� Netscape Enterprise Server �� FastTrack Server) �ϲſ���ִ�У�����֧�ֶ��ֲ���ϵͳ (UNIX �� Win32)��ASP �� ISAPI ֻ�� IIS ���������Ĺ��ܡ�<p>

���ȶ����ϣ����� NSAPI �� ISAPI �Ƕ�̬���ӵķ�ʽ�������ִ�����������⣬��ʹ�� Web ������һ��̱������ ASP ����ʵ��Ӧ�þ����ϣ������Ӿͻ�ʹϵͳ���ȶ�����Ҫ������������ϵͳ��PHP ��������վʹ���ϣ���������ʹ�ö�û�����⣬���ҳ�����ȶ���Ҳ������Ȼ���ȵĻ��Ǵ�ͳ CGI ������Ϊ�����ɲ���ϵͳ������ƣ������� CGI ����Ĵ����� Web �������Ĳ��ȶ���<p>

�ڿ�����ά��ʱ���ϣ�PHP �� ASP ���в���ı��֡��� NSAPI �� ISAPI ����Ҫ��ʱ��Ŀ������̣����ȶ����ߺ������ֽ��淴����Ч����ѵķ�������ͳ�� CGI ������Ҫ�ӿ����������Զ����ˣ��� Perl ���� shell script ����Ҫ����Ĺ��̣�ֱ�ӾͿ���ִ�У����� Delphi �� VC/BCB ������������Եȶ�Ҫ�����������ִ�У������� VB ��д��ͳ CGI����....��<p>

Ҫ�ȽϺ���ҳ��ϵ�������PHP �� ASP �ǲ��������ģ������ķ�ʽ�Ͳ�����Ƕ HTML �﷨�ˡ�����Ҳ��Ӱ�쿪��ʱ�������֮һ��<p>

��ϵͳ��ȫ�Զ��ԣ�ASP �����ģ���û�о���΢��� IIS Service Pack �������ʹ�� ::$DATA �Ϳ��Կ��� ASP ��Դ���룬�����ǽ��˲�����̡���Ȼ����ͳ CGI �ĳ����������ɲ���ϵͳֱ�ӹ���Ҫ�ƽ���Ѷ���ߣ��ڿͱ����ɲ���ϵͳ���֣��������� Web ���������֡�PHP �������ҵ������ҵʹ��ʱ��Ҳû��������ʲô��ȫ�����⡣<p>

���������ܼ��İ淽�棬��ͳ�� CGI ���ڲ����κ��������ƣ�û���ⷽ������⡣PHP �����л����ģ����������ܾ���һ���°汾���֣�ÿ�ε��°棬�ʹ������Ĺ��ܼ���������Ĵ��������� ASP��NSAPI��ISAPI �������� Web �������İ��ٶ��ˣ�ASP Ҫ�ȵ� IIS 5.0 ����ʱ�Ż��� ASP 3.0��Ҳ����Ҫ�ȵ� Windows 2000 ��ʽ���С�<p>

�ܶ���֮���� Web �ĺ�� CGI ���򣬾�����������һ�㣬û�и�Ч���ֿ��������ѡ�񡣲������� PHP �Ǵ��ڿ������ס�Ч��Ҳ�����ƽ����ϡ�

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="1.2.php.php" alt="1.2.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="2.1.php.php" alt="2.1.php">��һҳ</a> 
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
