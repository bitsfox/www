<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - PHP 与其它 CGI 的比较</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>PHP 与其它 CGI 的比较</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

无可置疑的，写 CGI 的方式有很多种，而 PHP 只是其中的一种选择罢了。对资深的 Webmaster 而言，CGI 的写作界面应是随着需求而改动。毕竟，在一个对系统反映速度要求极严格的系统而言，恐怕只有 NSAPI 界面写的 CGI 程序才能符合要求了。在其它的场合，相信使用 PHP 来作为 CGI 的界面是游刃有余，而且是最适合的。<p>

<table border=1>
<tr><th>程序界面</th>
            <th><a href="http://www.php.net/" tppabs="http://www.php.net/">PHP</a></th>
            <th>ASP</th><th>CGI</th>
            <th>NSAPI</th>
            <th>ISAPI</th></tr>
<tr><th>操作系统</th><td align=center>均可</td><td align=center>Win32</td><td align=center>均可</td><td align=center>均可</td><td align=center>Win32</td></tr>
<tr><th>Web服务器</th><td align=center>数种</td><td align=center>IIS</td><td align=center>均可</td><td align=center>Netscape Server</td><td align=center>IIS</td></tr>
<tr><th>执行效率</th><td align=center>快</td><td align=center>快</td><td align=center>慢</td><td align=center>极快</td><td align=center>极快</td></tr>
<tr><th>稳定性</th><td align=center>佳</td><td align=center>中等</td><td align=center>最高</td><td align=center>差</td><td align=center>差</td></tr>
<tr><th>开发时间</th><td align=center>短</td><td align=center>短</td><td align=center>中等</td><td align=center>长</td><td align=center>长</td></tr>
<tr><th>修改时间</th><td align=center>短</td><td align=center>短</td><td align=center>中等</td><td align=center>长</td><td align=center>长</td></tr>
<tr><th>程序语言</th><td align=center>PHP</td><td align=center>VB</td><td align=center>不限</td><td align=center>C/C++</td>
            <td align=center>C/<a href="/to.asp?url=http://www.borland.com/delphi" tppabs="/to.asp?url=http://www.borland.com/delphi">Delphi</a></td>
          </tr>
<tr><th>网页结合</th><td align=center>佳</td><td align=center>佳</td><td align=center>差</td><td align=center>差</td><td align=center>差</td></tr>
<tr><th>学习门槛</th><td align=center>低</td><td align=center>低</td><td align=center>高</td><td align=center>极高</td><td align=center>高</td></tr>
<tr><th>函数支持</th><td align=center>多</td><td align=center>少</td><td align=center>不定</td><td align=center>中等</td><td align=center>少</td></tr>
<tr><th>系统安全</th><td align=center>佳</td><td align=center>极差</td><td align=center>最佳</td><td align=center>佳</td><td align=center>尚可</td></tr>
<tr><th>使用网站</th><td align=center>超多</td><td align=center>多</td><td align=center>多</td><td align=center>极少</td><td align=center>少</td></tr>
<tr><th>改版速度</th><td align=center>快</td><td align=center>慢</td><td align=center>无</td><td align=center>慢</td><td align=center>慢</td></tr>
</table><p>

其中的 PHP 可用在数种 Web 服务器上；传统 CGI 就不限是哪种操作系统或 Web 服务器平台；NSAPI 一定要在 Netscape 的服务器 (如 Netscape Enterprise Server 或 FastTrack Server) 上才可以执行，但可支持多种操作系统 (UNIX 或 Win32)；ASP 及 ISAPI 只在 IIS 上有完整的功能。<p>

在稳定性上，由于 NSAPI 或 ISAPI 是动态链接的方式，因此在执行若出现问题，会使得 Web 服务器一起瘫痪。而 ASP 在我实际应用经验上，隔阵子就会使系统不稳定，需要重新启动操作系统。PHP 在许多的网站使用上，不但长期使用都没有问题，而且程序的稳定性也不错。当然最稳的还是传统 CGI 程序，因为它是由操作系统负责控制，不会因 CGI 程序的错误导致 Web 服务器的不稳定。<p>

在开发及维护时间上，PHP 及 ASP 都有不错的表现。而 NSAPI 及 ISAPI 则需要长时间的开发过程，在稳定上线后，这两种界面反倒是效率最佳的方法。传统的 CGI 程序则要视开发工具语言而定了，用 Perl 或是 shell script 不需要编译的过程，直接就可以执行，若用 Delphi 或 VC/BCB 甚至用组合语言等都要经过编译才能执行，至于用 VB 来写传统 CGI，唉....。<p>

要比较和网页结合的能力，PHP 和 ASP 是并驾齐驱的，其它的方式就不能内嵌 HTML 语法了。而这也是影响开发时间的因素之一。<p>

就系统安全性而言，ASP 是最差的，在没有经过微软的 IIS Service Pack 处理过，使用 ::$DATA 就可以看到 ASP 的源代码，这真是叫人不敢领教。当然，传统 CGI 的程序，由于是由操作系统直接管理，要破解的难度最高，黑客必须由操作系统下手，而不能由 Web 服务器下手。PHP 在许多商业及非商业使用时，也没有听过有什么安全的问题。<p>

在新增功能及改版方面，传统的 CGI 由于不受任何语言限制，没有这方面的问题。PHP 是最有活力的，数天至数周就有一个新版本出现，每次的新版，就代表更多的功能及修正更多的错误。其它的 ASP、NSAPI、ISAPI 就视它的 Web 服务器改版速度了，ASP 要等到 IIS 5.0 出现时才会有 ASP 3.0，也就是要等到 Windows 2000 正式上市。<p>

总而言之，在 Web 的后端 CGI 程序，就像鱼与熊掌一般，没有高效率又开发方便的选择。不过相信 PHP 是处于开发容易、效率也不错的平衡点上。

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="1.2.php.php" alt="1.2.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="2.1.php.php" alt="2.1.php">下一页</a> 
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
