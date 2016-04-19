<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:yp_errno()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:yp_errno()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-36.php" alt="group.php?36">NIS 函数库</a></div><br><h1><font color=0000bb>yp_errno</font></h1><p>
取得先前 YP 操作的错误码。<p>
<font color=ff8000>语法:</font> <b>int yp_errno(void);</b><p>
<font color=ff8000>返回值:</font> 整数<p>
<font color=ff8000>函数种类:</font> 网络系统<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数用来取得最后一次 YP 操作时的错误代码，代码值及意义见下表<p>

<table border=1>
<tr><th>代码</th><th>意义</th></tr>
<tr><td>1</td><td>函数的参数有错</td></tr>
<tr><td>2</td><td>RPC 错误 - 不再系着 Domain</td></tr>
<tr><td>3</td><td>在 Domain 上无法系住服务器</td></tr>
<tr><td>4</td><td>Domain 上找不到指定的 map</td></tr>
<tr><td>5</td><td>Map 上找不到指定的索引键</td></tr>
<tr><td>6</td><td>YP 内部有错</td></tr>
<tr><td>7</td><td>资源取得错误</td></tr>
<tr><td>8</td><td>指定 Map 数据库中已无资料</td></tr>
<tr><td>9</td><td>无法与 portmapper 通讯</td></tr>
<tr><td>10</td><td>无法与 ypbind 通讯</td></tr>
<tr><td>11</td><td>无法与 ypserv 通讯</td></tr>
<tr><td>12</td><td>未配置本地的 Domain</td></tr>
<tr><td>13</td><td>YP 数据库有错</td></tr>
<tr><td>14</td><td>YP 版本不合</td></tr>
<tr><td>15</td><td>暴力存取</td></tr>
<tr><td>16</td><td>资料忙线中</td></tr>
</table><p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
<table border=0><tr><td>[  <a href="function.php-yp_next.php" alt="function.php?yp_next">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-yp_err_string.php" alt="function.php?yp_err_string">下一页</a>  ]</td></tr></table>

</div><p>

<div align="center">
    <p><a href="../php/">PHP 首页</a> | <a href="guide.php.php">PHP 导读</a> | <a href="4.php.php">PHP 
      函数库</a> | <a href="funcindex.php.php">PHP 函数索引</a> | <a href="5.php.php">PHP 
      范例程序</a></p>
	<script type="text/javascript" src="/js/code.js"></script>
</div>
</body>
</html>
