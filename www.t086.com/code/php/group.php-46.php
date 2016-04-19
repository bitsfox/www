<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - SNMP 网管函数库</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>SNMP 网管函数库</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right>本函数库共有 5 个函数</div><p><table border=0 cellpadding=12 cellspacing=0><tr>
            <td bgcolor=e0e0ff>SNMP (网管协议, Simple Network Management Protocol) 
              是身为 MIS 或是网络管理人员所必须要碰到的重要课题，中文方面可参考张苑蓉所译的 SNMP 网络管理协议 (ISBN: 957-8247-14-1)，或者直接参考 
              RFC1089 文件。另外在 <a href="/to.asp?url=http://www.snmp.com/" tppabs="/to.asp?url=http://www.snmp.com/">http://www.snmp.com</a> 
              也有许多资料。
              <p> 要在 PHP 中使用 SNMP 网管函数，需要确定是否可以使用 SNMP 功能。UNIX 系统需要先加装 UCD SNMP 程序，可在 <a href="http://ucd-snmp.ucdavis.edu/" tppabs="/to.asp?url=http://ucd-snmp.ucdavis.edu/">http://ucd-snmp.ucdavis.edu</a> 
                取得。Windows NT 需要先安装 SNMP 的系统服务。Windows 95/98 系列则无法使用本功能。
              <p>

值得注意的是 UNIX 平台在编译 UCD SNMP 程序之前，要先将 config.h 文件中的 NO_ZEROLENGTH_COMMUNITY 常量 define 设成 1，也就是将该行的行首 # 字符删掉。如下例<p>

<code>define NO_ZEROLENGTH_COMMUNITY 1</code><p>

若网络部分 (segmentation) 有怪异的情形，可能就不能用上面的方式了。而若懒得重新编译 UCD SNMP，可以在配置 PHP 时加入 --enable-ucd-snmp-hack 的选项。
</td></tr></table><p>
<table border=0 width=100%><tr><td align=right valign=top><a href="function.php-snmpget.php" alt="function.php?snmpget">snmpget</a>:</td><td valign=top>取得指定类识别码。</td></tr>
<tr><td align=right valign=top><a href="function.php-snmpwalk.php" alt="function.php?snmpwalk">snmpwalk</a>:</td><td valign=top>取得所有类。</td></tr>
<tr><td align=right valign=top><a href="function.php-snmpwalkoid.php" alt="function.php?snmpwalkoid">snmpwalkoid</a>:</td><td valign=top>取得网络本体树状信息。</td></tr>
<tr><td align=right valign=top><a href="function.php-snmp_get_quick_print.php" alt="function.php?snmp_get_quick_print">snmp_get_quick_print</a>:</td><td valign=top>取得 UCD 函数库中的 quick_print 值。</td></tr>
<tr><td align=right valign=top><a href="function.php-snmp_set_quick_print.php" alt="function.php?snmp_set_quick_print">snmp_set_quick_print</a>:</td><td valign=top>配置 UCD 函数库中的 quick_print 值。</td></tr>
</table><p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="group.php-45.php" alt="group.php?45">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="group.php-47.php" alt="group.php?47">下一页</a> 
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
