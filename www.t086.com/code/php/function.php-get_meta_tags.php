<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - 函数:get_meta_tags()</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>函数:get_meta_tags()</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>
<div align=right><a href="group.php-47.php" alt="group.php?47">字符串处理函数库</a></div><br><h1><font color=0000bb>get_meta_tags</font></h1><p>
抽出文件所有 meta 标记的资料。<p>
<font color=ff8000>语法:</font> <b>array get_meta_tags(string filename, int [use_include_path]);</b><p>
<font color=ff8000>返回值:</font> 数组<p>
<font color=ff8000>函数种类:</font> 资料处理<p>
<p><table border=0 cellspacing=0 cellpadding=0 width=100% height=1><tr><td height=1 bgcolor=c0c0c0><table border=0 cellspacing=0 cellpadding=0><tr><td></td></tr></table></td></tr>
<tr><td align=left><font color=ff8000>内容说明</font></td></tr></table><p>本函数将 homepage 中的所有 &lt;meta ......&gt; 标记的资料取出并放置数组变量返回。例如<p>

<pre>
  &lt;html&gt;
  &lt;head&gt;
  &lt;meta name="author" content="彭武兴"&gt;
  &lt;meta name="title" content="PHP BIBLE"&gt;
  &lt;title&gt;PHP BIBLE&lt;/title&gt;
  &lt;/head&gt;&lt;!-- 本函数处理只到这儿结束 --&gt;
</pre><p>

本函数找出 meta 标记，name 属性的字符串为数组索引，而 content 属性字符串则为数组的内容资料了。治募注意的是本函数为 PHP 原生函数，在 UNIX 系列平台上无法直接处理麦金塔的文件格式，因为换行字符不同。blake@mediaone.net 指出 (07-Jun-1999)，参数 filename 也可以是 URL，函数将抽出远端服务器的文件 meta 标记。而函数在处理时，遇到 &lt;/head&gt; 标记结束，要是 &lt;meta ....&gt; 标记放在 &lt;/head&gt; 后将无法处理。<p>
<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="function.php-flush.php" alt="function.php?flush">上一页</a> 
      </td>
      <td>　<a href="../php/" alt="PHP">PHP中文手册</a>　</td>
      <td> <a href="function.php-htmlspecialchars.php" alt="function.php?htmlspecialchars">下一页</a> 
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
