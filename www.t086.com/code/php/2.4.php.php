<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - php.ini ������ϸѡ��</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>php.ini ������ϸѡ��</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

php.ini �� php3.ini �� PHP ������ʱ���ȡ�������ļ������ļ��Ĵ��·��Ϊ /usr/local/lib/���� PHP 3.x ��������ļ�Ϊ php3.ini������ PHP 4.x ���Ϊ php.ini���� PHP ��װ�ɷ�������ģ�飬���� Web ����������ִ��ʱ���ȡ��֮��Ͳ��ٶ�ȡ����˸Ķ����õĻ�Ҫ�������� Web ����������ʹ�ö��� PHP CGI ��ʽ����ÿ�ζ���һ�Ρ�<p>

Ҫ��Ŀǰ��ϵͳ���ã������� <a href="function.php-phpinfo.php" alt="function.php?phpinfo">phpinfo()</a> ����������Ϊѡ������<p>

<dl><dt>php_value name value
<dd>���ñ������ƺ�ֵ����ѡ���� PHP 4.x ��֮�����ʹ�á�
</dl><p>

<dl><dt>php_flag name on|off
<dd>���ñ�־��������ѡ���ѡ���� PHP 4.x ��֮�����ʹ�á�
</dl><p>

<dl><dt>php_admin_value name value
<dd>���� Apache �������ļ�������ԭ���� .htaccess �����øĵ����ѡ�����á���ѡ���� PHP 4.x ��֮�����ʹ�á�
</dl><p>

<dl><dt>php_admin_flag name on|off
<dd>���ò�����������־����ѡ���� PHP 4.x ��֮�����ʹ�á�
</dl><p>

<dl><dt>asp_tags boolean
<dd>���� PHP �����Ƿ������ ASP Script �﷨ &lt;% %&gt; �ı�� (tag)����ѡ���� PHP 3.0.4 ֮��ſ�ʹ�á������ϸ�ڿ��Բο� <a href="3.1.2.php.php" alt="3.1.2.php">Ƕ�뷽��</a> �Ĳ��ݡ�
</dl><p>

<dl><dt>auto_append_file string
<dd>���ñ�ѡ�������ָ�����ļ�������ԭ PHP ��������Զ�ִ�С��� PHP ���������õ� exit() ��������ָ�����ļ�����ִ�С����� string ��Ϊָ���Զ�ִ�е��ļ���
</dl><p>

<dl><dt>auto_prepend_file string
<dd>���ñ�ѡ�������ָ�����ļ���ԭ PHP ����֮ǰ�Զ�ִ�С����� string ��Ϊָ���Զ�ִ�е��ļ���
</dl><p>

<dl><dt>cgi_ext string
<dd>��ѡ������ CGI �������չ����
</dl><p>

<dl><dt>display_errors boolean
<dd>��ѡ�������Ƿ�Ҫ��ִ�еĴ�����Ϣ��ʾ���û���������ϡ�
</dl><p>

<dl><dt>doc_root string
<dd>���÷��������ļ��� PHP �ļ����õĸ�Ŀ¼��
</dl><p>

<dl><dt>engine boolean
<dd>��ѡ����Ҫʹ��apache��ģ�鷽ʽʹ�� PHP���������Ƿ�Ҫʹ�� PHP ���档�� httpd.conf �м��� php3_engine on/off �������ĳĿ¼��ĳ������վ�Ƿ�Ҫ�� PHP ��������
</dl><p>

<dl><dt>error_log string
<dd>��ѡ���������ô����¼�ļ����� UNIX ϵͳ�ϲ��� string ��Ϊ�ļ�����Windows NT �Ὣ��¼�����¼�����������־֮�С�Windows 95/98 ��֧��ϵͳ��¼��
</dl><p>

<dl><dt>error_reporting integer
<dd>��ѡ����������ϵͳ��¼�ĵȼ������� integer ��Ϊ�ȼ��ļ�����־�����Լ���һ��Ĭ��ֵΪ 7�����±�
<dd><table border=1>
<tr><td>����</td><td>˵��</td></tr>
<tr><td>1</td><td>һ��Ĵ���</td></tr>
<tr><td>2</td><td>һ��ľ���</td></tr>
<tr><td>4</td><td>��������</td></tr>
<tr><td>8</td><td>�ǹؼ��ľ���</td></tr>
</table>
</dl><p>

<dl><dt>open_basedir string
<dd>��ѡ�����������ṩ PHP ��ȡ����ײ�Ŀ¼���Ӹ�ָ��Ŀ¼֮�µ��ļ���Ŀ¼��PHP ������ܴ�ȡ��ʹ�ñ�ѡ����Ҫ��Ϊ��ϵͳ��ȫ�ԵĿ��ǡ����� string ��ΪҪ���Ƶ���ײ�Ŀ¼�ڵ㡣ֵ��ע������� UNIX ϵͳ�У����ýڵ�֮�µ��ļ���Ŀ¼�з������� (symbolic link)������ܻ���ʹ�ñ�ѡ���Ŀ�Ĵ��ۣ������Ŀ¼������Ͽ��ǣ�Ҳ�� Webmaster ����Ҫ����Ĭ��ֵ�������ļ����ɴ�ȡ���� PHP 3.0.7 ��֮�󣬿������ö���ײ�Ŀ¼��
</dl><p>

<dl><dt>gpc_order string
<dd>���� GET/POST/COOKIE ����ģ���˳�򼰹��򡣲��� string ��ΪҪ���õĹ������磺���ó� "GP" ��ʾ���� cookie�����ڴ�ȡ���� (method) ��ͬʱ���� POST ȡ�� GET��
</dl><p>

<dl><dt>ignore_user_abort string
<dd>Ĭ��ֵΪ Off���������õ�����δ���ʱ���û��˶�����Ҫ��������
</dl><p>

<dl><dt>include_path string
<dd>Ϊ PHP ������ require��include �� fopen_with_path �Ⱥ������ļ���Ѱ·������ UNIX �� Windows �е�б�߷���ͬ��
</dl><p>

<dl><dt>log_errors boolean
<dd>ָ���������ʱ�Ƿ�Ҫ��¼�� log �ļ��С�
</dl><p>

<dl><dt>magic_quotes_gpc boolean
<dd>���� GET/POST/COOKIE ����ģ��������ַ������������š�˫���š���б�ߡ������ַ� (NUL) �Ƿ�Ҫ�Զ����뷴б�ߵ�����ַ���
</dl><p>

<dl><dt>magic_quotes_runtime boolean
<dd>���÷��������Ƿ��Զ����뷴б�ߵ�����ַ���
</dl><p>

<dl><dt>magic_quotes_sybase boolean
<dd>���� sybase �����е�����Ҫ�Զ����Ϸ�б�ߵ�����ַ���
</dl><p>

<dl><dt>max_execution_time integer
<dd>���ó������ִ��ʱ�䡣��λ���롣
</dl><p>

<dl><dt>memory_limit integer
<dd>���ó������ʹ�ö����ڴ档
</dl><p>

<dl><dt>short_open_tag boolean
<dd>�����Ƿ�ʹ�ö̵� PHP ��� (&lt;? ?&gt;)������ʹ�ã������Ҫ�� &lt;?php ��Ϊ����Ŀ�ͷ����Ҫʹ����Ϻ� XML �ı�׼��Ҫ�رձ����ܡ�
</dl><p>

<dl><dt>track_errors boolean
<dd>�򿪱�ѡ���ʹ���Ĵ�����Ϣ����ȫ�ֱ��� $php_errormsg��
</dl><p>

<dl><dt>track_vars boolean
<dd>�򿪱�ѡ������û�������ַ����Զ�����������֮�У��������Լ�����
</dl><p>

<dl><dt>upload_tmp_dir string
<dd>ָ���ϴ��ļ���ʱ·����
</dl><p>

<dl><dt>user_dir string
<dd>ָ���û���Ŀ¼��·����
</dl><p>

<dl><dt>warn_plus_overloading boolean
<dd>���򿪱�ѡ��ַ������ֻ����Ӣ�ĵľ�� (.) ���ӣ��������üӺ� (+) �����ַ�����
</dl><p>

<dl><dt>SMTP string
<dd>�� Windows ϵ�в���ϵͳ�У�����ָ�� SMTP ���������� mail ����ʹ�á����� string Ϊ SMTP ���������֡�
</dl><p>

<dl><dt>sendmail_from string
<dd>���� "From: " �ַ����� Windows ϵ�в���ϵͳʹ�� mail ������
</dl><p>

<dl><dt>sendmail_path string
<dd>���� sendmail ����ķ���·�������� /usr/sbin/sendmail��
</dl><p>

<dl><dt>safe_mode boolean
<dd>���� PHP �ڰ�ȫģʽ��ִ�С�
</dl><p>

<dl><dt>safe_mode_exec_dir string
<dd>���ð�ȫģʽ����ִ�е�·����
</dl><p>

<dl><dt>debugger.host string
<dd>ָ��Զ�˵��Եķ��������ƣ������� IP �� Domain Name��
</dl><p>

<dl><dt>debugger.port string
<dd>����Զ�˵��Է������Ķ˿� (port)��
</dl><p>

<dl><dt>debugger.enabled boolean
<dd>�����Ƿ����Ϊ����ģʽ��
</dl><p>

<dl><dt>enable_dl boolean
<dd>��ѡ��Ҫʹ��apacheģ�� (Apache module) �ķ�ʽ����Ч���������� PHP �� <a href="function.php-dl.php" alt="function.php?dl">dl()</a> �����ɷ����á���ϵͳ���ڰ�ȫģʽ (safe-mode) ʱ����ѡ�� enable Ҳ�޷�ʹ�� dl() ������
</dl><p>

<dl><dt>extension_dir string
<dd>���ö�̬������·����
</dl><p>

<dl><dt>extension string
<dd>PHP ����ʱ��Ҫ����Ķ�̬���书�ܡ�
</dl><p>

<dl><dt>mysql.allow_persistent boolean
<dd>�����Ƿ����� MySQL ���ݿ�������� (persistent connections)����Ӱ�� <a href="function.php-mysql_pconnect.php" alt="function.php?mysql_pconnect">mysql_pconnect()</a> ������
</dl><p>

<dl><dt>mysql.max_persistent integer
<dd>����ÿ�����������ౣ�ּ��� MySQL �������ӡ�
</dl><p>

<dl><dt>mysql.max_links integer
<dd>����ÿ�����������࿪���� MySQL ���ӣ������������ӡ�
</dl><p>

<dl><dt>msql.allow_persistent boolean
<dd>�����Ƿ����� mSQL ���ݿ�������� (persistent connections)����Ӱ�� <a href="function.php-msql_pconnect.php" alt="function.php?msql_pconnect">msql_pconnect()</a> ������
</dl><p>

<dl><dt>msql.max_persistent integer
<dd>����ÿ�����������ౣ�ּ��� mSQL �������ӡ�
</dl><p>

<dl><dt>msql.max_links integer
<dd>����ÿ�����������࿪���� mSQL ���ӣ������������ӡ�
</dl><p>

<dl><dt>pgsql.allow_persistent boolean
<dd>�����Ƿ����� Postgres ���ݿ�������� (persistent connections)����Ӱ�� <a href="function.php-pg_pConnect.php" alt="function.php?pg_pConnect">pg_pConnect()</a> ������
</dl><p>

<dl><dt>pgsql.max_persistent integer
<dd>����ÿ�����������ౣ�ּ��� Postgres �������ӡ�
</dl><p>

<dl><dt>pgsql.max_links integer
<dd>����ÿ�����������࿪���� Postgres ���ӣ������������ӡ�
</dl><p>

<dl><dt>sybase.allow_persistent boolean
<dd>�����Ƿ����� Sybase ���ݿ�������� (persistent connections)����Ӱ�� <a href="function.php-sybase_pconnect.php" alt="function.php?sybase_pconnect">sybase_pconnect()</a> ������
</dl><p>

<dl><dt>sybase.max_persistent integer
<dd>����ÿ�����������ౣ�ּ��� Sybase �������ӡ�
</dl><p>

<dl><dt>sybase.max_links integer
<dd>����ÿ�����������࿪���� Sybase ���ӣ������������ӡ�
</dl><p>

<dl><dt>sybct.allow_persistent boolean
<dd>�����Ƿ����� Sybase-CT ���ݿ�������� (persistent connections)��Ĭ��ֵ�Ǵ򿪵ġ�
</dl><p>

<dl><dt>sybct.max_persistent integer
<dd>����ÿ�����������ౣ�ּ��� Sybase-CT �������ӡ�Ĭ��ֵΪ -1 ��ʾ�����ơ�
</dl><p>

<dl><dt>sybct.max_links integer
<dd>����ÿ�����������࿪���� Sybase-CT ���ӣ������������ӡ�Ĭ��ֵΪ -1����ʾû�����ơ�
</dl><p>

<dl><dt>sybct.min_server_severity integer
<dd>���� Sybase-CT ���������󱨸�����ٱ�����Ĭ��ֵΪ 10��
</dl><p>

<dl><dt>sybct.min_client_severity integer
<dd>���� Sybase-CT �ͻ��˴��󱨸�����ٱ�����Ĭ��ֵΪ 10��
</dl><p>

<dl><dt>sybct.login_timeout integer
<dd>���� Sybase-CT ��ÿ���ʹ�õĵ���ʱ�䡣Ĭ��ֵΪ 1 ���ӡ�
</dl><p>

<dl><dt>sybct.timeout integer
<dd>���� Sybase-CT �� query ����ʱ�����ơ�Ĭ��ֵΪ�����ơ�
</dl><p>

<dl><dt>sybct.hostname string
<dd>���� Sybase-CT �����ӻ������ơ�Ĭ��ֵ������
</dl><p>

<dl><dt>ifx.allow_persistent boolean
<dd>�����Ƿ����� Informix ���ݿ�������� (persistent connections)����Ӱ�� <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> ������
</dl><p>

<dl><dt>ifx.max_persistent integer
<dd>����ÿ�����������ౣ�ּ��� Informix �������ӡ�
</dl><p>

<dl><dt>ifx.max_links integer
<dd>����ÿ�����������࿪���� Informix ���ӣ������������ӡ�
</dl><p>

<dl><dt>ifx.default_host string
<dd>���� Informix Ĭ�����ӵķ��������ƣ��� <a href="function.php-ifx_connect.php" alt="function.php?ifx_connect">ifx_connect()</a> �� <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> ����ʹ�á�
</dl><p>

<dl><dt>ifx.default_user string
<dd>���� Informix Ĭ�����ӵ��û��ʺţ��� <a href="function.php-ifx_connect.php" alt="function.php?ifx_connect">ifx_connect()</a> �� <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> ����ʹ�á�
</dl><p>

<dl><dt>ifx.default_password string
<dd>���� Informix Ĭ�����ӵ��û����룬�� <a href="function.php-ifx_connect.php" alt="function.php?ifx_connect">ifx_connect()</a> �� <a href="function.php-ifx_pconnect.php" alt="function.php?ifx_pconnect">ifx_pconnect()</a> ����ʹ�á�
</dl><p>

<dl><dt>ifx.blobinfile boolean
<dd>���� Informix ��λ��ģʽ��0 �����ڴ棻1 �����ļ��С�������� PHP ������ʹ�� <a href="function.php-ifx_blobinfile_mode.php" alt="function.php?ifx_blobinfile_mode">ifx_blobinfile_mode()</a> �������޸ġ�
</dl><p>

<dl><dt>ifx.textasvarchar boolean
<dd>���� Informix ����ģʽĬ��ֵ��0 ���� blob �Ĵ��룻1 ���� varchar �ַ���������� PHP ������ʹ�� <a href="function.php-ifx_textasvarchar.php" alt="function.php?ifx_textasvarchar">ifx_textasvarchar()</a> �������޸����á�
</dl><p>

<dl><dt>ifx.byteasvarchar boolean
<dd>���� Informix λ��ģʽĬ��ֵ��0 ���� blob �Ĵ��룻1 ���� varchar �ַ���������� PHP ������ʹ�� <a href="function.php-ifx_byteasvarchar.php" alt="function.php?ifx_byteasvarchar">ifx_byteasvarchar()</a> ���޸����á�
</dl><p>

<dl><dt>ifx.charasvarchar boolean
<dd>���� Informix �����ַ�������β�ո��Ƿ�Ҫ�Զ�ȥ����
</dl><p>

<dl><dt>ifx.nullformat boolean
<dd>���� NULL �ֶεķ��ط�ʽ��true ��ʾ�����ַ��� NULL��false ��񷵻��ַ��� ""������� PHP �������� <a href="function.php-ifx_nullformat.php" alt="function.php?ifx_nullformat">ifx_nullformat()</a> �޸ġ�
</dl><p>

<dl><dt>bcmath.scale integer
<dd>���� BC �߾�ȷ�Ⱥ������С����λ����
</dl><p>

<dl><dt>browscap string
<dd>����������Ŀ��ļ���������
</dl><p>

<dl><dt>uodbc.default_db string
<dd>���� ODBC Ĭ�����ӵ����ݿ����ƣ��� <a href="function.php-odbc_connect.php" alt="function.php?odbc_connect">odbc_connect()</a> �� <a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect()</a> ����ʹ�á�
</dl><p>

<dl><dt>uodbc.default_user string
<dd>���� ODBC Ĭ�����ӵ��û��ʺţ��� <a href="function.php-odbc_connect.php" alt="function.php?odbc_connect">odbc_connect()</a> �� <a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect()</a> ����ʹ�á�
</dl><p>

<dl><dt>uodbc.default_pw string
<dd>���� ODBC Ĭ�����ӵ��û����룬�� <a href="function.php-odbc_connect.php" alt="function.php?odbc_connect">odbc_connect()</a> �� <a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect()</a> ����ʹ�á�
</dl><p>

<dl><dt>uodbc.allow_persistent boolean
<dd>�����Ƿ����� ODBC ���ݿ�������� (persistent connections)����Ӱ�� <a href="function.php-odbc_pconnect.php" alt="function.php?odbc_pconnect">odbc_pconnect()</a> ������
</dl><p>

<dl><dt>uodbc.max_persistent integer
<dd>����ÿ�����������ౣ�ּ��� ODBC �������ӡ�
</dl><p>

<dl><dt>uodbc.max_links integer
<dd>����ÿ�����������࿪���� ODBC ���ӣ������������ӡ�
</dl><p>

���º� session �йص�����ֵ������ PHP 4.x ���ϵİ汾��֧�֡��� php.ini �������ļ��С�<p>

<dl><dt>session.save_handler 
<dd>���� session �������ϵ��ļ����ơ�Ĭ��ֵΪ files��
</dl><p>

<dl><dt>session.save_path
<dd>���� session �������ϵ��ļ�·����Ĭ��ֵΪ /tmp��
</dl><p>

<dl><dt>session.name
<dd>���� session ��ʹ�õ� cookie ���ơ�Ĭ��ֵΪ PHPSESSID��
</dl><p>

<dl><dt>session.auto_start
<dd>���� session �Ƿ��Զ��򿪡�Ĭ��ֵΪ 0 (��)��
</dl><p>

<dl><dt>session.lifetime
<dd>���� cookie �͵��������ı���ʱ�䣬��λΪ�롣Ĭ��ֵΪ 0����ʾֱ��������رա�
</dl><p>

<dl><dt>session.serialize_handler
<dd>��������/���������ϵı�ͷ��������ֻ�� WDDX ģ��� PHP �ڲ�ʹ�á�Ĭ��ֵΪ php��
</dl><p>

<dl><dt>session.gc_probability
<dd>����ÿ��Ҫ���Ӧʱ�ķ����L�� (gc, garbage collection) ������ʡ�Ĭ��ֵΪ 1��
</dl><p>

<dl><dt>session.gc_maxlifetime 
<dd>���÷��ﱻ���ǰ�Ĵ��������
</dl><p>

<dl><dt>session.extern_referer_check
<dd>�������յ��ͻ��˵� Session �����Ƿ�Ҫɾ������ʱ�ڰ�ȫ����������ʱ�������ò�ɾ����Ĭ��ֵΪ 0��
</dl><p>

<dl><dt>session.entropy_file
<dd>���� session ���뽨��ʱ��ʹ���ⲿ����ֵ��Դ���ļ������������� UNIX ϵͳ�ϵ� /dev/random �� /dev/urandom��
</dl><p>

<dl><dt>session.entropy_length
<dd>���� session �Ӹ���ֵ��Դ��ȡ��λ������Ĭ��ֵΪ 0��
</dl><p>

<dl><dt>session.use_cookies 
<dd>�����Ƿ�Ҫ�� session ��� cookie �����û��ˡ�Ĭ��ֵΪ 1�����Ǵ򿪱����ܡ�
</dl><p>

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr> 
      <td height="20">[ <a href="2.3.php.php" alt="2.3.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>      
      <td height="20"> <a href="2.5.php.php" alt="2.5.php">��һҳ</a> 
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
