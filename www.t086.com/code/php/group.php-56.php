<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - FTP �ļ����亯����</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>FTP �ļ����亯����</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>�������⹲�� 20 ������</div><p><table border=0 cellpadding=12 cellspacing=0><tr><td bgcolor=e0e0ff>FTP ��ȫΪ File Transfer Protocol��Ҳ�����ļ�����Э�顣���ñ������������ PHP Ҳ�ܴ��� FTP ����ع��ܡ�����������Ҫ PHP 3.0.13 ��֮���֧�֡�
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-ftp_connect.php" alt="function.php?ftp_connect">ftp_connect</a>:</td><td valign=top>�� FTP ���ӡ�</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_login.php" alt="function.php?ftp_login">ftp_login</a>:</td><td valign=top>���� FTP ��������</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_pwd.php" alt="function.php?ftp_pwd">ftp_pwd</a>:</td><td valign=top>ȡ��Ŀǰ����·����</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_cdup.php" alt="function.php?ftp_cdup">ftp_cdup</a>:</td><td valign=top>���ϲ�Ŀ¼��</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_chdir.php" alt="function.php?ftp_chdir">ftp_chdir</a>:</td><td valign=top>�ı�·����</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_mkdir.php" alt="function.php?ftp_mkdir">ftp_mkdir</a>:</td><td valign=top>����Ŀ¼��</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_rmdir.php" alt="function.php?ftp_rmdir">ftp_rmdir</a>:</td><td valign=top>ɾ��Ŀ¼��</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_nlist.php" alt="function.php?ftp_nlist">ftp_nlist</a>:</td><td valign=top>�г�ָ��Ŀ¼�������ļ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_rawlist.php" alt="function.php?ftp_rawlist">ftp_rawlist</a>:</td><td valign=top>��ϸ�г�ָ��Ŀ¼�������ļ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_systype.php" alt="function.php?ftp_systype">ftp_systype</a>:</td><td valign=top>��ʾ������ϵͳ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_pasv.php" alt="function.php?ftp_pasv">ftp_pasv</a>:</td><td valign=top>�л�����������ģʽ��</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_get.php" alt="function.php?ftp_get">ftp_get</a>:</td><td valign=top>�����ļ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_fget.php" alt="function.php?ftp_fget">ftp_fget</a>:</td><td valign=top>�����ļ����������ѿ��ĵ��С�</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_put.php" alt="function.php?ftp_put">ftp_put</a>:</td><td valign=top>�ϴ��ļ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_fput.php" alt="function.php?ftp_fput">ftp_fput</a>:</td><td valign=top>�ϴ��Ѵ��ļ���</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_size.php" alt="function.php?ftp_size">ftp_size</a>:</td><td valign=top>���ָ���ļ��Ĵ�С��</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_mdtm.php" alt="function.php?ftp_mdtm">ftp_mdtm</a>:</td><td valign=top>���ָ���ļ�������޸�ʱ�䡣</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_rename.php" alt="function.php?ftp_rename">ftp_rename</a>:</td><td valign=top>���ļ�������</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_delete.php" alt="function.php?ftp_delete">ftp_delete</a>:</td><td valign=top>���ļ�ɾ����</td></tr>
<tr><td align=right valign=top><a href="function.php-ftp_quit.php" alt="function.php?ftp_quit">ftp_quit</a>:</td><td valign=top>�ر� FTP ���ӡ�</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-55.php" alt="group.php?55">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="group.php-57.php" alt="group.php?57">��һҳ</a> 
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
