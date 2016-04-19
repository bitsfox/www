<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - hello, world</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">IT学习者</a> -&gt; <a href="../">技术文档</a> 
  -&gt; <a href="../php/">PHP 完全中文手册</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>hello, world</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

在 K&R 二教授的经典名著 The C Programming Language 一书中的 "hello, world" 几乎已经变成了所有程序语言的第一个范例。因此，在这儿也用 PHP 来写个最基本的 "hello, world" 程序。<p>

<div align=center><table border=1 bgcolor=ffe0e0><tr><td>
<font color="#000000">
&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;First&nbsp;program&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><font color="#0000BB">&lt;?php<br>&nbsp;&nbsp;</font><font color="#007700">echo&nbsp;</font><font color="#DD0000">"hello,&nbsp;world\n"</font><font color="#007700">;<br></font><font color="#0000BB">?&gt;<br></font>&lt;/body&gt;<br>&lt;/html&gt;<br></font>
</td></tr></table></div>
        <p> 这十行程序在 PHP 中不需经过编译等复杂的过程，只要将它放在配置好可执行 PHP 语法的服务器中，将它存成文件 helloworld.php 
          好了。在用户的浏览器端，只要在 Location: 输入 <a href="3.1.1a.php.php" alt="demo/3.1.1.php">http://some.hostname/helloworld.php</a>，就可以在浏览器上看到 
          hello, world 字符串出现。 
        <p>

我们可以看到，这个程序只有三行有用，其它六行都是标准的 HTML 语法。而它在返回浏览器时和 JavaScript 或 VBScript 完全不一样，PHP 的程序没有传到浏览器，只在浏览器上看到短短的几个字 "hello, world"。<p>

在第六行及第八行，分别是 PHP 的开始及结束的嵌入符号。第七行才是服务器端执行的程序。在这个例子中，"\n" 和 C 语言的表示都一模一样，代表换行的意思。在第一章也有介绍过 PHP 是混合多种语言而成，而 C 正是含量最多的语言。在一个表达式结束后，要加上分号代表结束。<p>


<div align=center><table border=0><tr>
              <td> <img src="002.gif" alt="img/002.gif" width=355 height=271 border=0> 
                <div align=right><font color=c0c0c0 size=-2>图二: 在浏览器上看到 PHP 写的 hello, world 程序</font></div>
</td></tr></table></div><p>



<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="2.3.php.php" alt="2.3.php">上一页</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP中文手册</a>   
	  </td>
      <td> <a href="3.1.2.php.php" alt="3.1.2.php">下一页</a> 
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
