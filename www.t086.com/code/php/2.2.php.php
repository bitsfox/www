<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 快速配置及安装</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>快速配置及安装</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

以下是基本的安装步骤，运行环境是 UNIX 系列的系统平台。在安装之前，要先下载 apache_1.3.x.tar.gz 及 php-3.0.x.tar.gz 两个文件。可以将这两个文件放在 /usr/src 中再开始执行以下的步骤。
下面每个行号后是一个步骤，步骤中的所有选项是连在一起的，请不要分开执行。<p>

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

第一、二行利用 gzip 及 tar 加上管道功能，将压缩文件解压还原。然后在 Apache 的原始文件目录中执行环境配置，--prefix 选项指示 Apache 的安装目录路径。之后进入 PHP3 的原始文件目录中，若没有 MySQL 数据库，则可省略 --with-mysql 的选项，重要的是一定要加入 --with-apache 选项，而且 Apache 原始文件的路径要正确。配置完 PHP3 之后就编译、安装到 Apache 的原始文件目录中。之后在 Apache 原始文件目录中再加入 PHP 的模块文件。在编译及安装 Apache 之后就初步完成了。之后就是要配置 Apache 才能让 Web Server 顺利运作。<p>

需要注意的是，PHP 要和任何数据库连接，都要在执行这些步骤之前先将数据库设好，并确定 Web Server 上可以顺利存取数据库系统。如果需要其它的一些 PHP 外部模块也要先配置好这些模块。<p>

<ol>
<li value=13>cd ../php-3.0.x
<li value=14>cp php3.ini-dist /usr/local/lib/php3.ini
</ol><p>

之后将 php3.ini 放在指定的目录，如果需要，也可以手动修改 php3.ini 文件文件，以符合使用的要求。<p>

在 Apache 服务器的配置方面，要在 Apache 的配置文件 httpd.conf 或 srm.conf 文件中加入下面的字符串。告诉 Apache 服务器，扩展名 php3 是一个特殊的程序文件。当然扩展名可以设成别的扩展名，还有一些网站将 php 的程序扩展名设为 phtml 也是不错的选择，反正这就要看 Webmaster 的规划了。<p>

<code>AddType application/x-httpd-php3 .php3</code><p><hr size=1><br><p>

在 PHP 4.x 版的方法大致和 PHP 3.0.x 版相同，不同的地方在于 PHP 4.x 的目录名称及编译后的模块放置目录不同。此外，默认的扩展名也由 .php3 变成了 .php。当然在安装前还要先下载 PHP 4.x 的程序才行。<p>

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

在 httpd.conf 或 srm.conf 加入<p>

<code>AddType application/x-httpd-php .php<br>
AddType application/x-httpd-php-source .phps</code><p>

而 PHP 4.x 版中对 Apache 服务器加入了新的环境变量配置项。<p>

<code>
php_value [PHP directive name] [value]<br>
php_flag [PHP directive name] [On|Off]<br>
php_admin_value [PHP directive name] [value]<br>
php_admin_flag [PHP directive name] [On|Off]
</code><p>

在 PHP 3.0.x 版中，有些目录可能会有 .htaccess 的文件，使用 PHP 4.0.x 版的系统，必须将这个文件拿掉，可以使用改名字的方式或者直接删除。<p><hr size=1><br><p>
 
当一切配置好了之后，重新执行 Apache 服务器。在 Apache 目录下有 bin 或是 sbin 的目录，其中会有 apachectl 的 shell 程序，输入 apachectl restart 就可以重新启动 Apache 服务器了。赶快试看看 <a href="3.1.1.php.php" alt="3.1.1.php">hello, world 程序</a>吧！

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="2.1.php.php" alt="2.1.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="2.3.php.php" alt="2.3.php">下一页</a> 
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
