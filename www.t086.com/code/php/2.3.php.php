<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - PHP 的编译配置详细选项</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>





<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>PHP 的编译配置详细选项</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
在详细选项上，除了上述的安装简介外，也可以在编译时加入其它的选项。<p>

<dl><dt><font color=5b69a6><b>apache模块</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-apache=DIR</b>
<dd><font color=ff8000>说明:</font>  用本选项可以让 PHP 以apache的模块方式使用，DIR 的字符串可以是 /usr/local/apache 或其它安装apache的目录
<dd><font color=ff8000>范例:</font>  --with-apache=/var/lib/apache
</dl><p>

<dl><dt><font color=5b69a6><b>fhttpd 服务器模块</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-fhttpd=DIR</b>
<dd><font color=ff8000>说明:</font>  若使用 fttpd 服务器，可以使用本指令编译 PHP。用模块的方式配合 fttpd 服务器，可以有较好的效率。
</dl><p>

<dl><dt><font color=5b69a6><b>Adabas D 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-adabas=DIR</b>
          <dd><font color=ff8000>说明:</font> 数据库系统为 Adabas D 数据库时需要加本选项。关于 Adabas D 数据库的细节，可以参考 
            <a href="/to.asp?url=http://www.adabas.com/" tppabs="/to.asp?url=http://www.adabas.com/">http://www.adabas.com</a>。 
          <dd><font color=ff8000>范例:</font>  --with-adabas=/usr/local/adabasd
</dl><p>

<dl><dt><font color=5b69a6><b>dBase 资料表</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-dbase</b>
<dd><font color=ff8000>说明:</font>  只要加本选项，不用其它的参数或函数库，PHP 就会让系统有存取 dBase 资料表的功能。
</dl><p>

<dl><dt><font color=5b69a6><b>filePro 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-filepro</b>
<dd><font color=ff8000>说明:</font>  不用指定数据库路径及其它函数库等，可以读取 filePro 数据库 (唯读)。
</dl><p>

<dl><dt><font color=5b69a6><b>mSQL 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-msql=DIR</b>
          <dd><font color=ff8000>说明:</font> 提供存取 mSQL 数据库。更多的细节请参考 mSQL 的网站 <a href="/to.asp?url=http://www.hughes.com.au/" tppabs="/to.asp?url=http://www.hughes.com.au/">http://www.hughes.com.au</a>。 
          <dd><font color=ff8000>范例:</font>  --with-msql=/usr/local/Hughes
</dl><p>

<dl><dt><font color=5b69a6><b>MySQL 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-mysql=DIR</b>
          <dd><font color=ff8000>说明:</font> 提供存取 MySQL 数据库。更多的细节请参考 MySQL 的网站 <a href="/to.asp?url=http://www.tcx.se/" tppabs="/to.asp?url=http://www.tcx.se/">http://www.tcx.se</a>。 
          <dd><font color=ff8000>范例:</font>  --with-mysql=/usr/local/mysql
</dl><p>

<dl><dt><font color=5b69a6><b>iODBC 数据库装置</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-iodbc=DIR</b>
          <dd><font color=ff8000>说明:</font> 提供 ODBC 数据库装置，用来存取后端数据库。更多的细节请参考 iODBC 的网站 <a href="/to.asp?url=http://www.iodbc.org/" tppabs="/to.asp?url=http://www.iodbc.org/">http://www.iodbc.org</a>。 
          <dd><font color=ff8000>范例:</font>  --with-iodbc=/usr/local/iodbc
</dl><p>

<dl><dt><font color=5b69a6><b>OpenLink ODBC 数据库装置</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-openlink=DIR</b>
          <dd><font color=ff8000>说明:</font> 使用 OpenLink ODBC 数据库装置，用来存取后端数据库。更多的细节请参考 OpenLink 
            ODBC 的网站 <a href="/to.asp?url=http://www.openlinksw.com/" tppabs="/to.asp?url=http://www.openlinksw.com/">http://www.openlinksw.com</a>。 
          <dd><font color=ff8000>范例:</font>  --with-openlink=/usr/local/openlink
</dl><p>

<dl><dt><font color=5b69a6><b>Oracle 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-oracle=DIR</b>
          <dd><font color=ff8000>说明:</font> 使用 Oracle 数据库。Oracle 的版本要在 7.3 版以上。您也可以在 PHP 
            程序中使用环境变量 ORACLE_HOME 来指定 Oracle 的路径。更多有关 Oracle 的信息请参考 Oracle 的网站 
            <a href="/to.asp?url=http://www.oracle.com/" tppabs="/to.asp?url=http://www.oracle.com/">http://www.oracle.com</a>。 
          <dd><font color=ff8000>范例:</font>  --with-oracle=/export/app/oracle/product/7.3.2     
</dl><p>

<dl><dt><font color=5b69a6><b>PostgreSQL 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-pgsql=DIR</b>
          <dd><font color=ff8000>说明:</font> 使用 PostgreSQL 数据库。更多有关 PostgreSQL 
            的信息请参考 PostgreSQL 的网站 <a href="/to.asp?url=http://www.postgresql.org/" tppabs="/to.asp?url=http://www.postgresql.org/">http://www.postgreSQL.org</a> 
            或台湾的 Mirror 站 <a href="http://postgresql.ccit.edu.tw/" tppabs="/to.asp?url=http://postgresql.ccit.edu.tw/">http://postgresql.ccit.edu.tw</a>。 
          <dd><font color=ff8000>范例:</font>  --with-pgsql=/usr/local/pgsql
</dl><p>

<dl><dt><font color=5b69a6><b>Solid 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-solid=DIR</b>
          <dd><font color=ff8000>说明:</font> 使用 Solid 数据库。更多有关 Solid 的信息请参考 Solid 的网站 <a href="/to.asp?url=http://www.solidtech.com/" tppabs="/to.asp?url=http://www.solidtech.com/">http://www.solidtech.com</a>。 
          <dd><font color=ff8000>范例:</font>  --with-solid=/usr/local/solid
</dl><p>

<dl><dt><font color=5b69a6><b>Sybase 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-sybase=DIR</b>
          <dd><font color=ff8000>说明:</font> 使用 Sybase 数据库。更多有关 Sybase 的信息请参考 Sybase 的网站 
            <a href="/to.asp?url=http://www.sybase.com/" tppabs="/to.asp?url=http://www.sybase.com/">http://www.sybase.com</a>。 
          <dd><font color=ff8000>范例:</font>  --with-sybase=/home/sybase
</dl><p>

<dl><dt><font color=5b69a6><b>Sybase-CT 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-sybase-ct=DIR</b>
<dd><font color=ff8000>说明:</font>  使用 Sybase-CT 数据库。
<dd><font color=ff8000>范例:</font>  --with-sybase-ct=/home/sybase
</dl><p>

<dl><dt><font color=5b69a6><b>Velocis 数据库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-velocis=DIR</b>
          <dd><font color=ff8000>说明:</font> 使用 Velocis 数据库。有关 Velocis 数据库的进一步资料请参考 Raima 
            公司的网站 <a href="/to.asp?url=http://www.raima.com/" tppabs="/to.asp?url=http://www.raima.com/">http://www.raima.com</a>。 
          <dd><font color=ff8000>范例:</font>  --with-velocis=/usr/local/velocis
</dl><p>

<dl><dt><font color=5b69a6><b>自订 ODBC 数据库驱动程序</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-custom-odbc=DIR</b>
<dd><font color=ff8000>说明:</font>  使用自订的 ODBC 函数库。当然，在使用本方式时要指定 CUSTOM_ODBC_LIBS 及 CFLAGS 变量。例如在 QNX 机器上使用 Sybase SQL Anywhere 时可能要配置系统环境变量 CFLAGS=-DODBC_QNX、LDFLAGS=-lunix 及 CUSTOM_ODBC_LIBS="-ldblib -lodbc"，并要在 PHP 配置加入 --with-custom-odbc=/usr/lib/sqlany50
<dd><font color=ff8000>范例:</font>  --with-custom-odbc=/usr/local/odbc
</dl><p>

<dl><dt><font color=5b69a6><b>不使用 ODBC 数据库驱动程序</b></font>
<dd><font color=ff8000>语法:</font>  <b>--disable-unified-odbc</b>
<dd><font color=ff8000>说明:</font>  使用本选项将使所有的 ODBC 数据库驱动程序不作用。本选项不用指定路径，而受本选项影响的选项有 --with-iodbc、--with-solid、--with-adabas、--with-velocis 及 --with-custom-odbc。
</dl><p>

<dl><dt><font color=5b69a6><b>LDAP 目录协议</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-ldap=DIR</b>
<dd><font color=ff8000>说明:</font>  若要使用目录协议 (Lightweight Directory Access Protocol, LDAP) 则必须要打开本选项。有关 LDAP 的细节，可以参考 RFC 文件的 RFC1777 及 RFC1778。
<dd><font color=ff8000>范例:</font>  --with-ldap=/usr/local/ldap. 
</dl><p>

<dl><dt><font color=5b69a6><b>mcrypt 编码函数库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-mcrypt=DIR</b>
<dd><font color=ff8000>说明:</font>  当安装了 mcrypt 函数库后，可在编译 PHP 时加入本选项，让程序可以使用编解码功能。
<dd><font color=ff8000>范例:</font>  --with-mcrypt=/usr/local/include
</dl><p>

<dl><dt><font color=5b69a6><b>Sys V 信号</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-sysvsem</b>
<dd><font color=ff8000>说明:</font>  要使用 SysV 的信号 (semaphores) 机制，则要打开本选项。
</dl><p>

<dl><dt><font color=5b69a6><b>XML 支持</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-xml</b>
<dd><font color=ff8000>说明:</font>  打开本选项可以支持 James Clark's 写的 XML 解析程序库。
</dl><p>

<dl><dt><font color=5b69a6><b>维护模式</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-maintainer-mode</b>
<dd><font color=ff8000>说明:</font>  本选项一般不会打开，除非是 PHP 开发人员比较有用。
</dl><p>

<dl><dt><font color=5b69a6><b>正则表达式程序库</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-system-regex</b>
<dd><font color=ff8000>说明:</font>  若您需要额外的正则表达式功能，可以加入本选项。
</dl><p>

<dl><dt><font color=5b69a6><b>PHP 配置文件</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-config-file-path=DIR</b>
<dd><font color=ff8000>说明:</font>  用来指定 php3.ini 或 php4.ini 的路径，供 PHP 初始化时使用。
<dd><font color=ff8000>范例:</font>  --with-config-file-path=/usr/local/lib
</dl><p>

<dl><dt><font color=5b69a6><b>PHP 执行路径</b></font>
<dd><font color=ff8000>语法:</font>  <b>--with-exec-dir=DIR</b>
<dd><font color=ff8000>说明:</font>  有时为了系统的安全性考虑，会指定 PHP 程序一定要在哪个目录执行。
<dd><font color=ff8000>范例:</font>  --with-exec-dir=/usr/local/bin
</dl><p>

<dl><dt><font color=5b69a6><b>调试模式</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-debug</b>
<dd><font color=ff8000>说明:</font>  本选项一般不会使用，除非在开发 PHP 程序时比较有用。它可以显示额外的错误信息。
</dl><p>

<dl><dt><font color=5b69a6><b>安全模式</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-safe-mode</b>
<dd><font color=ff8000>说明:</font>  默认值是打开的，可以对系统安全提供比较多的保护。
</dl><p>

<dl><dt><font color=5b69a6><b>变量追踪</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-track-vars</b>
<dd><font color=ff8000>说明:</font>  让 PHP 能 追踪 HTTP_GET_VARS、HTTP_POST_VARS 及 HTTP_COOKIE_VARS 三个变量，一般是打开的。
</dl><p>

<dl><dt><font color=5b69a6><b>自动加引入字符</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-magic-quotes</b>
<dd><font color=ff8000>说明:</font>  可让程序在执行时自动加入反斜线的引入字符。
</dl><p>

<dl><dt><font color=5b69a6><b>打开调试器</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-debugger</b>
<dd><font color=ff8000>说明:</font>  打开内建的 PHP 调试器。目前本功能还在实验阶段，尚未成熟。
</dl><p>

<dl><dt><font color=5b69a6><b>取消路径 (discard path)</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-discard-path</b>
<dd><font color=ff8000>说明:</font>  打开这个选项，用户就不能透过浏览器读取 .htaccess 等和系统安全相关的文件。
</dl><p>

<dl><dt><font color=5b69a6><b>高精确度数学函数</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-bcmath</b>
<dd><font color=ff8000>说明:</font>  打开高精确度函数。必须要先安装本函数库，本选项方有效。
</dl><p>

<dl><dt><font color=5b69a6><b>强制 CGI 重定向</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-force-cgi-redirect</b>
<dd><font color=ff8000>范例:</font>  若使用 CGI VERSION 模式来执行 PHP 的设，打开本选项会增加安全性。例如用户读 http://my.host/cgi-bin/php/secret/doc.html 遇到比较了解 PHP 系统的黑客级用户可能会自已输入以下网址 http://my.host/secret/doc.html 来读取相关信息。若 PHP 和 Apache 编译在一起，让 PHP 变成 Apache 的一部份，则不需要加入本选项。
</dl><p>

<dl><dt><font color=5b69a6><b>不使用短的标记</b></font>
<dd><font color=ff8000>语法:</font>  <b>--disable-short-tags</b>
<dd><font color=ff8000>说明:</font>  配置本选项后，PHP 的程序就不能使用短的 &lt;? .... ?&gt; 标记，一定要用 &lt;?php ...... ?&gt; 的长标记。
</dl><p>

<dl><dt><font color=5b69a6><b>引入远端档宁</b></font>
<dd><font color=ff8000>语法:</font>  <b>--enable-url-includes</b>
<dd><font color=ff8000>说明:</font>  配置本选项可让 PHP 程序可以引入 (include) 远端的 HTTP 或 FTP 服务器中的文件。
</dl><p>

<dl><dt><font color=5b69a6><b>关闭语法效果</b></font>
<dd><font color=ff8000>语法:</font>  <b>--disable-syntax-hl</b>
<dd><font color=ff8000>说明:</font>  使用本选项会关闭 PHP 语法的彩色效果。
</dl><p>

<dl><dt><font color=5b69a6><b>函数库路径</b></font>
<dd><font color=ff8000>语法:</font>  <b>CPPFLAGS=-IDIR 及 LDFLAGS=-LDIR</b>
<dd><font color=ff8000>说明:</font>  若 PHP 在安全或编译所需的函数库在值得的路径，需要加入本选项，LDFLAGS 表示函数库的路径，CPPFLAGS 表示标头文件的路径。
<dd><font color=ff8000>范例:</font>  LDFLAGS=-L/my/lib/dir CPPFLAGS=-I/my/include/dir ./configure 
</dl>

<p><hr size=1><br>整理:&nbsp;<a href="mailto:php@videopokercity.com">php</a>&nbsp;(<a href="http://www.videopokercity.com/">video poker guy</a>)<p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="2.2.php.php" alt="2.2.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="2.4.php.php" alt="2.4.php">下一页</a> 
        ]</td>
    </tr>
  </table>
</div><p><br><br>
  sponsor: <a href="http://www.gamblinggala.com/">online gambling</a>
  <a href="http://www.onlinecasinoage.com/">online casino</a>,
  <a href="sponsor.php">click to be a sponsor.</a>
  <br>
</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
