<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - �������ü���װ</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>�������ü���װ</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

�����ǻ����İ�װ���裬���л����� UNIX ϵ�е�ϵͳƽ̨���ڰ�װ֮ǰ��Ҫ������ apache_1.3.x.tar.gz �� php-3.0.x.tar.gz �����ļ������Խ��������ļ����� /usr/src ���ٿ�ʼִ�����µĲ��衣
����ÿ���кź���һ�����裬�����е�����ѡ��������һ��ģ��벻Ҫ�ֿ�ִ�С�<p>

<ol type=1>
<li>gzip -d -c apache_1.3.x.tar.gz | tar xvf -
<li>gzip -d -c php-3.0.x.tar.gz | tar xvf -
<li>cd apache_1.3.x
<li>./configure --prefix=/www
<li>cd ../php-3.0.x
<li>./configure --with-mysql --with-apache=../apache_1.3.x --enable-track-vars
<li>make
<li>make install
<li>cd ../apache_1.3.x
<li>./configure --prefix=/www --activate-module=src/modules/php3/libphp3.a
<li>make
<li>make install
</ol><p>

��һ���������� gzip �� tar ���Ϲܵ����ܣ���ѹ���ļ���ѹ��ԭ��Ȼ���� Apache ��ԭʼ�ļ�Ŀ¼��ִ�л������ã�--prefix ѡ��ָʾ Apache �İ�װĿ¼·����֮����� PHP3 ��ԭʼ�ļ�Ŀ¼�У���û�� MySQL ���ݿ⣬���ʡ�� --with-mysql ��ѡ���Ҫ����һ��Ҫ���� --with-apache ѡ����� Apache ԭʼ�ļ���·��Ҫ��ȷ�������� PHP3 ֮��ͱ��롢��װ�� Apache ��ԭʼ�ļ�Ŀ¼�С�֮���� Apache ԭʼ�ļ�Ŀ¼���ټ��� PHP ��ģ���ļ����ڱ��뼰��װ Apache ֮��ͳ�������ˡ�֮�����Ҫ���� Apache ������ Web Server ˳��������<p>

��Ҫע����ǣ�PHP Ҫ���κ����ݿ����ӣ���Ҫ��ִ����Щ����֮ǰ�Ƚ����ݿ���ã���ȷ�� Web Server �Ͽ���˳����ȡ���ݿ�ϵͳ�������Ҫ������һЩ PHP �ⲿģ��ҲҪ�����ú���Щģ�顣<p>

<ol>
<li value=13>cd ../php-3.0.x
<li value=14>cp php3.ini-dist /usr/local/lib/php3.ini
</ol><p>

֮�� php3.ini ����ָ����Ŀ¼�������Ҫ��Ҳ�����ֶ��޸� php3.ini �ļ��ļ����Է���ʹ�õ�Ҫ��<p>

�� Apache �����������÷��棬Ҫ�� Apache �������ļ� httpd.conf �� srm.conf �ļ��м���������ַ��������� Apache ����������չ�� php3 ��һ������ĳ����ļ�����Ȼ��չ��������ɱ����չ��������һЩ��վ�� php �ĳ�����չ����Ϊ phtml Ҳ�ǲ����ѡ�񣬷������Ҫ�� Webmaster �Ĺ滮�ˡ�<p>

<code>AddType application/x-httpd-php3 .php3</code><p><hr size=1><br><p>

�� PHP 4.x ��ķ������º� PHP 3.0.x ����ͬ����ͬ�ĵط����� PHP 4.x ��Ŀ¼���Ƽ�������ģ�����Ŀ¼��ͬ�����⣬Ĭ�ϵ���չ��Ҳ�� .php3 ����� .php����Ȼ�ڰ�װǰ��Ҫ������ PHP 4.x �ĳ�����С�<p>

<ol type=1>
<li>gzip -dc apache_1.3.x.tar.gz | tar xvf -
<li>gzip -dc php-4.0.x.tar.gz | tar xvf -
<li>cd apache_1.3.x
<li>./configure --prefix=/www
<li>cd ../php-4.0.x
<li>./configure --with-mysql --with-apache=../apache_1.3.x --enable-track-vars
<li>make
<li>make install
<li>cd ../apache_1.3.x
<li>./configure --prefix=/www --activate-module=src/modules/php4/libphp4.a
<li>make
<li>make install
<li>cd ../php-4.0.x
<li>cp php.ini-dist /usr/local/lib/php.ini
</ol><p>

�� httpd.conf �� srm.conf ����<p>

<code>AddType application/x-httpd-php .php<br>
AddType application/x-httpd-php-source .phps</code><p>

�� PHP 4.x ���ж� Apache �������������µĻ������������<p>

<code>
php_value [PHP directive name] [value]<br>
php_flag [PHP directive name] [On|Off]<br>
php_admin_value [PHP directive name] [value]<br>
php_admin_flag [PHP directive name] [On|Off]
</code><p>

�� PHP 3.0.x ���У���ЩĿ¼���ܻ��� .htaccess ���ļ���ʹ�� PHP 4.0.x ���ϵͳ�����뽫����ļ��õ�������ʹ�ø����ֵķ�ʽ����ֱ��ɾ����<p><hr size=1><br><p>
 
��һ�����ú���֮������ִ�� Apache ���������� Apache Ŀ¼���� bin ���� sbin ��Ŀ¼�����л��� apachectl �� shell �������� apachectl restart �Ϳ����������� Apache �������ˡ��Ͽ��Կ��� <a href="3.1.1.php.php" alt="3.1.1.php">hello, world ����</a>�ɣ�

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="2.1.php.php" alt="2.1.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="2.3.php.php" alt="2.3.php">��һҳ</a> 
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
