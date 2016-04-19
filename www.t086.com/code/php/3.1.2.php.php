<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 嵌入方法</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>嵌入方法</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

要将 Homepage 中放入 PHP，有以下数种做法<p>

<ol type=1> 
<li><font color="#000000">
<font color="#0000BB">&lt;?&nbsp;</font><font color="#007700">echo&nbsp;(</font><font color="#DD0000">"这是一个&nbsp;PHP&nbsp;语言的嵌入范例\n"</font><font color="#007700">);&nbsp;</font><font color="#0000BB">?&gt;<br></font>
</font>
<p> 
<li><font color="#000000">
<font color="#0000BB">&lt;?php&nbsp;</font><font color="#007700">echo(</font><font color="#DD0000">"这是第两个&nbsp;PHP&nbsp;语言的嵌入范例\n"</font><font color="#007700">);&nbsp;</font><font color="#0000BB">?&gt;<br></font>
</font>
<p>
<li><font color="#000000">
<font color="#0000BB">&lt;script&nbsp;language="php"&gt;&nbsp;<br></font><font color="#007700">echo&nbsp;(</font><font color="#DD0000">"这是类似&nbsp;JavaScript&nbsp;及&nbsp;VBScript&nbsp;语法<br>的&nbsp;PHP&nbsp;语言嵌入范例"</font><font color="#007700">);<br></font><font color="#0000BB">&lt;/script&gt;<br></font>
</font>
<p>
<li><font color="#000000">
&lt;%&nbsp;echo&nbsp;("这是类似&nbsp;ASP&nbsp;嵌入语法的&nbsp;PHP&nbsp;范例");&nbsp;%&gt;<br><br></font>
<p>
</ol>

其中第一种及第两种是最常用的两个方法，在小于符号加上问号后，可以加也可以不加 php 三个字，之后就是 PHP 的程序码。在程序码结束后，加入问号大于两个符号就可以了。第三种方法对熟悉 Netscape 服务器产品的 Webmaster 人员而言，有相当的亲切感，它是类似 JavaScript 的写作方式。而对于从 Windows NT 平台的 ASP 投向 PHP 的用户来说，第四种方法似曾相似，只要用 PHP 3.0.4 版本以后的服务器都可以用小于百分比的符号开始，以百分比大于结束 PHP 的部分，但想用第四种方法的用户别忘了在 php.ini 加入 asp_tags 或是在编译 PHP 时加入 <code><b>--enable-asp-tags</b></code> 的选项，才能使第四种方法有效。建议少用第四种方法，当 PHP 与 ASP 源代码混在一起时就麻烦了。<p>

其实，在写作 PHP 的程序最好的方法，就是先处理好纯 HTML 格式的 Homepage 文件之后，再将需要变量或其它处理的地方改成 PHP 程序。这种方法，可以让您在开发上达到事半功倍的效果。


<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.1.1.php.php" alt="3.1.1.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.1.3.php.php" alt="3.1.3.php">下一页</a> 
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
