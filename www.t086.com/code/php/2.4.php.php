<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - php.ini 配置详细选项</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>php.ini 配置详细选项</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

php.ini 或 php3.ini 是 PHP 在启动时会读取的配置文件。该文件的存放路径为 /usr/local/lib/。在 PHP 3.x 版的配置文件为 php3.ini；而在 PHP 4.x 版改为 php.ini。若 PHP 安装成服务器的模块，则在 Web 服务器启动执行时会读取，之后就不再读取，因此改动配置的话要重新启动 Web 服务器。若使用独立 PHP CGI 方式，则每次都读一次。<p>

要看目前的系统配置，可以用 <a href="function.php-phpinfo.php" alt="function.php?phpinfo">phpinfo()</a> 看到。以下为选项配置<p>

<dl><dt>php_value name value
<dd>配置变量名称和值。本选项需 PHP 4.x 版之后才能使用。
</dl><p>

<dl><dt>php_flag name on|off
<dd>配置标志布尔变量选项。本选项需 PHP 4.x 版之后才能使用。
</dl><p>

<dl><dt>php_admin_value name value
<dd>配置 Apache 的配置文件变量。原来在 .htaccess 的配置改到这个选项配置。本选项需 PHP 4.x 版之后才能使用。
</dl><p>

<dl><dt>php_admin_flag name on|off
<dd>配置布尔变量当标志。本选项需 PHP 4.x 版之后才能使用。
</dl><p>

<dl><dt>asp_tags boolean
<dd>配置 PHP 程序是否解析以 ASP Script 语法 &lt;% %&gt; 的标记 (tag)。本选项在 PHP 3.0.4 之后才可使用。更多的细节可以参考 <a href="3.1.2.php.php" alt="3.1.2.php">嵌入方法</a> 的部份。
</dl><p>

<dl><dt>auto_append_file string
<dd>配置本选项可以让指定的文件附加在原 PHP 程序后面自动执行。若 PHP 程序中有用到 exit() 函数，则指定的文件不会执行。参数 string 即为指定自动执行的文件。
</dl><p>

<dl><dt>auto_prepend_file string
<dd>配置本选项可以让指定的文件在原 PHP 程序之前自动执行。参数 string 即为指定自动执行的文件。
</dl><p>

<dl><dt>cgi_ext string
<dd>本选项配置 CGI 程序的扩展名。
</dl><p>

<dl><dt>display_errors boolean
<dd>本选项配置是否要将执行的错误信息显示在用户的浏览器上。
</dl><p>

<dl><dt>doc_root string
<dd>配置服务器的文件及 PHP 文件放置的根目录。
</dl><p>

<dl><dt>engine boolean
<dd>本选项需要使用apache的模块方式使用 PHP。可配置是否要使用 PHP 引擎。在 httpd.conf 中加入 php3_engine on/off 亦可配置某目录或某虚拟网站是否要用 PHP 解析器。
</dl><p>

<dl><dt>error_log string
<dd>本选项用来配置错误记录文件。在 UNIX 系统上参数 string 即为文件名。Windows NT 会将记录记在事件检视器的日志之中。Windows 95/98 则不支持系统记录。
</dl><p>

<dl><dt>error_reporting integer
<dd>本选项用来配置系统记录的等级。参数 integer 即为等级的级数标志，可以加在一起，默认值为 7，见下表
<dd><table border=1>
<tr><td>级数</td><td>说明</td></tr>
<tr><td>1</td><td>一般的错误</td></tr>
<tr><td>2</td><td>一般的警告</td></tr>
<tr><td>4</td><td>解析错误</td></tr>
<tr><td>8</td><td>非关键的警告</td></tr>
</table>
</dl><p>

<dl><dt>open_basedir string
<dd>本选项用来配置提供 PHP 存取的最底层目录。从该指定目录之下的文件或目录，PHP 程序才能存取。使用本选项主要是为了系统安全性的考虑。参数 string 即为要限制的最底层目录节点。值得注意的是在 UNIX 系统中，若该节点之下的文件或目录有符号链结 (symbolic link)，则可能会让使用本选项的目的打折，因此在目录的设计上考虑，也是 Webmaster 的重要任务。默认值是所有文件均可存取。在 PHP 3.0.7 版之后，可以配置多个底层目录。
</dl><p>

<dl><dt>gpc_order string
<dd>配置 GET/POST/COOKIE 三种模块的顺序及规则。参数 string 即为要配置的规则，例如：配置成 "GP" 表示忽视 cookie，并在存取方法 (method) 相同时，以 POST 取代 GET。
</dl><p>

<dl><dt>ignore_user_abort string
<dd>默认值为 Off。用来配置当传输未完成时，用户端断线是要继续处理。
</dl><p>

<dl><dt>include_path string
<dd>为 PHP 程序中 require、include 及 fopen_with_path 等函数的文件搜寻路径。在 UNIX 或 Windows 中的斜线方向不同。
</dl><p>

<dl><dt>log_errors boolean
<dd>指定程序错误时是否要记录在 log 文件中。
</dl><p>

<dl><dt>magic_quotes_gpc boolean
<dd>配置 GET/POST/COOKIE 三种模块的特殊字符，包含单引号、双引号、反斜线、及空字符 (NUL) 是否要自动加入反斜线当溢出字符。
</dl><p>

<dl><dt>magic_quotes_runtime boolean
<dd>配置返回资料是否自动加入反斜线当溢出字符。
</dl><p>

<dl><dt>magic_quotes_sybase boolean
<dd>配置 sybase 资料中单引号要自动加上反斜线当溢出字符。
</dl><p>

<dl><dt>max_execution_time integer
<dd>配置程序最久执行时间。单位是秒。
</dl><p>

<dl><dt>memory_limit integer
<dd>配置程序最多使用多少内存。
</dl><p>

<dl><dt>short_open_tag boolean
<dd>配置是否使用短的 PHP 标记 (&lt;? ?&gt;)。若不使用，则必须要用 &lt;?php 作为程序的开头，若要使程序合乎 XML 的标准则要关闭本功能。
</dl><p>

<dl><dt>track_errors boolean
<dd>打开本选项可使最后的错误信息跟着全局变量 $php_errormsg。
</dl><p>

<dl><dt>track_vars boolean
<dd>打开本选项可让用户输入的字符串自动解析到变量之中，而不用自己处理。
</dl><p>

<dl><dt>upload_tmp_dir string
<dd>指定上传文件临时路径。
</dl><p>

<dl><dt>user_dir string
<dd>指定用户根目录的路径。
</dl><p>

<dl><dt>warn_plus_overloading boolean
<dd>若打开本选项，字符串间就只能用英文的句号 (.) 链接，而不能用加号 (+) 链接字符串。
</dl><p>

<dl><dt>SMTP string
<dd>在 Windows 系列操作系统中，用来指定 SMTP 服务器，供 mail 函数使用。参数 string 为 SMTP 服务器名字。
</dl><p>

<dl><dt>sendmail_from string
<dd>配置 "From: " 字符串供 Windows 系列操作系统使用 mail 函数。
</dl><p>

<dl><dt>sendmail_path string
<dd>配置 sendmail 程序的放置路径。例如 /usr/sbin/sendmail。
</dl><p>

<dl><dt>safe_mode boolean
<dd>配置 PHP 在安全模式下执行。
</dl><p>

<dl><dt>safe_mode_exec_dir string
<dd>配置安全模式程序执行的路径。
</dl><p>

<dl><dt>debugger.host string
<dd>指定远端调试的服务器名称，可以是 IP 或 Domain Name。
</dl><p>

<dl><dt>debugger.port string
<dd>配置远端调试服务器的端口 (port)。
</dl><p>

<dl><dt>debugger.enabled boolean
<dd>配置是否可以为调试模式。
</dl><p>

<dl><dt>enable_dl boolean
<dd>本选项要使用apache模块 (Apache module) 的方式才有效。用来配置 PHP 的 <a href="function.php-dl.php" alt="function.php?dl">dl()</a> 函数可否作用。当系统处于安全模式 (safe-mode) 时，本选项 enable 也无法使用 dl() 函数。
</dl><p>

<dl><dt>extension_dir string
<dd>配置动态函数的路径。
</dl><p>

<dl><dt>extension string
<dd>PHP 启动时所要载入的动态扩充功能。
</dl><p>

<dl><dt>mysql.allow_persistent boolean
<dd>配置是否允许 MySQL 数据库持续连接 (persistent connections)，会影响 <a href="function.php-mysql_pconnect.php" alt="function.php?mysql_pconnect">mysql_pconnect()</a> 函数。
</dl><p>

<dl><dt>mysql.max_persistent integer
<dd>配置每个处理程序最多保持几个 MySQL 持续连接。
</dl><p>

<dl><dt>mysql.max_links integer
<dd>配置每个处理程序最多开几个 MySQL 连接，包括持续连接。
</dl><p>

<dl><dt>msql.allow_persistent boolean
<dd>配置是否允许 mSQL 数据库持续连接 (persistent connections)，会影响 <a href="function.php-msql_pconnect.php" alt="function.php?msql_pconnect">msql_pconnect()</a> 函数。
</dl><p>

<dl><dt>msql.max_persistent integer
<dd>配置每个处理程序最多保持几个 mSQL 持续连接。
</dl><p>

<dl><dt>msql.max_links integer
<dd>配置每个处理程序最多开几个 mSQL 连接，包括持续连接。
</dl><p>

<dl><dt>pgsql.allow_persistent boolean
<dd>配置是否允许 Postgres 数据库持续连接 (persistent connections)，会影响 <a href="function.php-pg_pConnect.php" alt="function.php?pg_pConnect">pg_pConnect()</a> 函数。
</dl><p>

<dl><dt>pgsql.max_persistent integer
<dd>配置每个处理程序最多保持几个 Postgres 持续连接。
</dl><p>

<dl><dt>pgsql.max_links integer
<dd>配置每个处理程序最多开几个 Postgres 连接，包括持续连接。
</dl><p>

<dl><dt>sybase.allow_persistent boolean
<dd>配置是否允许 Sybase 数据库持续连接 (persistent connections)，会影响 <a href="function.php-sybase_pconnect.php" alt="function.php?sybase_pconnect">sybase_pconnect()</a> 函数。
</dl><p>

<dl><dt>sybase.max_persistent integer
<dd>配置每个处理程序最多保持几个 Sybase 持续连接。
</dl><p>

<dl><dt>sybase.max_links integer
<dd>配置每个处理程序最多开几个 Sybase 连接，包括持续连接。
</dl><p>

<dl><dt>sybct.allow_persistent boolean
<dd>配置是否允许 Sybase-CT 数据库持续连接 (persistent connections)，默认值是打开的。
</dl><p>

<dl><dt>sybct.max_persistent integer
<dd>配置每个处理程序最多保持几个 Sybase-CT 持续连接。默认值为 -1 表示无限制。
</dl><p>

<dl><dt>sybct.max_links integer
<dd>配置每个处理程序最多开几个 Sybase-CT 连接，包括持续连接。默认值为 -1，表示没有限制。
</dl><p>

<dl><dt>sybct.min_server_severity integer
<dd>配置 Sybase-CT 服务器错误报告的最少笔数。默认值为 10。
</dl><p>

<dl><dt>sybct.min_client_severity integer
<dd>配置 Sybase-CT 客户端错误报告的最少笔数。默认值为 10。
</dl><p>

<dl><dt>sybct.login_timeout integer
<dd>配置 Sybase-CT 最久可以使用的登入时间。默认值为 1 分钟。
</dl><p>

<dl><dt>sybct.timeout integer
<dd>配置 Sybase-CT 的 query 操作时间限制。默认值为无限制。
</dl><p>

<dl><dt>sybct.hostname string
<dd>配置 Sybase-CT 可连接机器名称。默认值不设限
</dl><p>

<dl><dt>ifx.allow_persistent boolean
<dd>配置是否允许 Informix 数据库持续连接 (persistent connections)，会影响 <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> 函数。
</dl><p>

<dl><dt>ifx.max_persistent integer
<dd>配置每个处理程序最多保持几个 Informix 持续连接。
</dl><p>

<dl><dt>ifx.max_links integer
<dd>配置每个处理程序最多开几个 Informix 连接，包括持续连接。
</dl><p>

<dl><dt>ifx.default_host string
<dd>配置 Informix 默认连接的服务器名称，供 <a href="function.php-ifx_connect.php" alt="function.php?ifx_connect">ifx_connect()</a> 或 <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> 函数使用。
</dl><p>

<dl><dt>ifx.default_user string
<dd>配置 Informix 默认连接的用户帐号，供 <a href="function.php-ifx_connect.php" alt="function.php?ifx_connect">ifx_connect()</a> 或 <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> 函数使用。
</dl><p>

<dl><dt>ifx.default_password string
<dd>配置 Informix 默认连接的用户密码，供 <a href="function.php-ifx_connect.php" alt="function.php?ifx_connect">ifx_connect()</a> 或 <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> 函数使用。
</dl><p>

<dl><dt>ifx.blobinfile boolean
<dd>配置 Informix 长位类模式，0 表在内存；1 表在文件中。亦可以在 PHP 程序中使用 <a href="function.php-ifx_blobinfile_mode.php" alt="function.php?ifx_blobinfile_mode">ifx_blobinfile_mode()</a> 函数来修改。
</dl><p>

<dl><dt>ifx.textasvarchar boolean
<dd>配置 Informix 文字模式默认值，0 表返回 blob 的代码；1 表返回 varchar 字符串。亦可在 PHP 程序中使用 <a href="function.php-ifx_textasvarchar.php" alt="function.php?ifx_textasvarchar">ifx_textasvarchar()</a> 函数来修改配置。
</dl><p>

<dl><dt>ifx.byteasvarchar boolean
<dd>配置 Informix 位组模式默认值，0 表返回 blob 的代码；1 表返回 varchar 字符串。亦可在 PHP 程序中使用 <a href="function.php-ifx_byteasvarchar.php" alt="function.php?ifx_byteasvarchar">ifx_byteasvarchar()</a> 来修改配置。
</dl><p>

<dl><dt>ifx.charasvarchar boolean
<dd>配置 Informix 返回字符串的字尾空格是否要自动去除。
</dl><p>

<dl><dt>ifx.nullformat boolean
<dd>配置 NULL 字段的返回方式，true 表示返回字符串 NULL，false 表格返回字符串 ""。亦可在 PHP 程序中以 <a href="function.php-ifx_nullformat.php" alt="function.php?ifx_nullformat">ifx_nullformat()</a> 修改。
</dl><p>

<dl><dt>bcmath.scale integer
<dd>配置 BC 高精确度函数库的小数点位数。
</dl><p>

<dl><dt>browscap string
<dd>配置浏览器的开文件能力名。
</dl><p>

<dl><dt>uodbc.default_db string
<dd>配置 ODBC 默认连接的数据库名称，供 <a href="function.php-odbc_connect.php" alt="function.php?odbc_connect">odbc_connect()</a> 或 <a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect()</a> 函数使用。
</dl><p>

<dl><dt>uodbc.default_user string
<dd>配置 ODBC 默认连接的用户帐号，供 <a href="function.php-odbc_connect.php" alt="function.php?odbc_connect">odbc_connect()</a> 或 <a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect()</a> 函数使用。
</dl><p>

<dl><dt>uodbc.default_pw string
<dd>配置 ODBC 默认连接的用户密码，供 <a href="function.php-odbc_connect.php" alt="function.php?odbc_connect">odbc_connect()</a> 或 <a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect()</a> 函数使用。
</dl><p>

<dl><dt>uodbc.allow_persistent boolean
<dd>配置是否允许 ODBC 数据库持续连接 (persistent connections)，会影响 <a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect()</a> 函数。
</dl><p>

<dl><dt>uodbc.max_persistent integer
<dd>配置每个处理程序最多保持几个 ODBC 持续连接。
</dl><p>

<dl><dt>uodbc.max_links integer
<dd>配置每个处理程序最多开几个 ODBC 连接，包括持续连接。
</dl><p>

以下和 session 有关的配置值，都在 PHP 4.x 以上的版本方支持。在 php.ini 的配置文件中。<p>

<dl><dt>session.save_handler 
<dd>定义 session 储存资料的文件名称。默认值为 files。
</dl><p>

<dl><dt>session.save_path
<dd>定义 session 储存资料的文件路径。默认值为 /tmp。
</dl><p>

<dl><dt>session.name
<dd>配置 session 所使用的 cookie 名称。默认值为 PHPSESSID。
</dl><p>

<dl><dt>session.auto_start
<dd>配置 session 是否自动打开。默认值为 0 (否)。
</dl><p>

<dl><dt>session.lifetime
<dd>配置 cookie 送到浏览器后的保存时间，单位为秒。默认值为 0，表示直到浏览器关闭。
</dl><p>

<dl><dt>session.serialize_handler
<dd>定义连续/解连续资料的标头，本功能只有 WDDX 模块或 PHP 内部使用。默认值为 php。
</dl><p>

<dl><dt>session.gc_probability
<dd>配置每笔要求回应时的废物蒐集 (gc, garbage collection) 处理机率。默认值为 1。
</dl><p>

<dl><dt>session.gc_maxlifetime 
<dd>配置废物被清除前的存活秒数。
</dl><p>

<dl><dt>session.extern_referer_check
<dd>决定参照到客户端的 Session 代码是否要删除。有时在安全或其它考虑时，会配置不删除。默认值为 0。
</dl><p>

<dl><dt>session.entropy_file
<dd>配置 session 代码建立时，使用外部高熵值资源或文件来建立，例如 UNIX 系统上的 /dev/random 或 /dev/urandom。
</dl><p>

<dl><dt>session.entropy_length
<dd>配置 session 从高熵值资源读取的位组数。默认值为 0。
</dl><p>

<dl><dt>session.use_cookies 
<dd>配置是否要将 session 变成 cookie 存在用户端。默认值为 1，表是打开本功能。
</dl><p>

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr> 
      <td height="20">[ <a href="2.3.php.php" alt="2.3.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>      
      <td height="20"> <a href="2.5.php.php" alt="2.5.php">下一页</a> 
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
