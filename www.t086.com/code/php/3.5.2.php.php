<html>
<head>
<meta content="text/html; charset=gb2312" http-equiv=Content-Type>
<title>PHP - ��</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="top"><a href="http://www.itlearner.com">ITѧϰ��</a> -&gt; <a href="../">�����ĵ�</a> 
  -&gt; <a href="../php/">PHP ��ȫ�����ֲ�</a>
</div>




<div align=center>
<table border=0 width=70%><tr>
<td valign=middle width=20><hr size=1 width=100%></td>
<td valign=middle nowrap><font color=e06060 size=+2><b>��</b></font></td>
<td valign=middle width=100%><hr size=1 width=100%></td>
</tr></table></div><p>
<div align=center><table border=0 width=70%><tr><td>

�û�������࣬Ҳ��ѧ�� PHP ���ر�������֮һ���� PHP ���࣬������������������ԱȽ������������������ġ�PHP ֻ����� (class)������ (method)�����ԡ��Լ���һ�̳� (extensions) �ȡ��Բ�ϰ��ʹ�� C++��Java��Delphi �������������������������û����������Ķ�һ���й�������������飬���ſ��Դ��������ջ�<p>

����ķ��������Ƴ����ࡣ���Կ�����ʹ�� class ��ʾ����һ�������������е� function������ add_item ���ʾ�����һ���������������Է�װ���ʵ�ʴ������Σ��ø����Լ�������װ�õķ�����ִ��һЩ���衣<p>

�����е� $this �����Ҳ�� $GLOBALS �� $php_errormsg ��������һ������ PHP ����������ı�����$this ����ֻ����������У���ʾ��ı���<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;������:&nbsp;cart.inc<br></font><font color="#007700">class&nbsp;</font><font color="#0000BB">Cart&nbsp;</font><font color="#007700">{<br>&nbsp;&nbsp;var&nbsp;</font><font color="#0000BB">$items</font><font color="#007700">;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;���Ƴ���<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;//&nbsp;����������&nbsp;$num&nbsp;����Ʒ�����Ƴ���&nbsp;(�ӵ�&nbsp;$artnr&nbsp;����)<br>&nbsp;&nbsp;</font><font color="#007700">function&nbsp;</font><font color="#0000BB">add_item&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$artnr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">items</font><font color="#007700">[</font><font color="#0000BB">$artnr</font><font color="#007700">]&nbsp;+=&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;<br>&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;�����������Ƴ�����&nbsp;$num&nbsp;����Ʒ&nbsp;(��&nbsp;$artnr&nbsp;��������)<br>&nbsp;&nbsp;</font><font color="#007700">function&nbsp;</font><font color="#0000BB">remove_item&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$artnr</font><font color="#007700">,&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">items</font><font color="#007700">[</font><font color="#0000BB">$artnr</font><font color="#007700">]&nbsp;&gt;&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">items</font><font color="#007700">[</font><font color="#0000BB">$artnr</font><font color="#007700">]&nbsp;-=&nbsp;</font><font color="#0000BB">$num</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</font><font color="#0000BB">true</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</font><font color="#0000BB">false</font><font color="#007700">;<br>&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

Ҫʹ�����Ƴ����������������ķ�ʽ�������Ƚ�ÿ������ Include �ļ����ٽ��� require �� include �������ڶ������ $cart ʱ��Ҫʹ�� new �ı����֣���ʾ $cart ʹ�� Cart �ࡣʹ�� -&gt; ���ţ���ʾִ����ķ�����<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">require(</font><font color="#DD0000">"cart.inc"</font><font color="#007700">);<br></font><font color="#0000BB">$cart&nbsp;</font><font color="#007700">=&nbsp;new&nbsp;</font><font color="#0000BB">Cart</font><font color="#007700">;<br></font><font color="#0000BB">$cart</font><font color="#007700">-&gt;</font><font color="#0000BB">add_item</font><font color="#007700">(</font><font color="#DD0000">"10"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

֮��������м��������Ƴ����������Ƴ������Ƴ��Ŵ�������������Ƴ�ӵ�еķ��������ԣ��������Ƴ�Ҳ�У����������Ƴ������Ƴ����������ֵķ��� (����ó����Խ�ǡ��)��<p>

�������п��Կ��������� Named_Cart ʹ�� extends ���̳��丸�� Cart����Ȼ Named_Cart ����û��������Ʒ��������Ʒ�ķ��������������Ŵ������ԣ������еĶ��������С�<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#FF8000">//&nbsp;������:&nbsp;named_cart.inc<br></font><font color="#007700">require(</font><font color="#DD0000">"cart.inc"</font><font color="#007700">);<br>class&nbsp;</font><font color="#0000BB">Named_Cart&nbsp;</font><font color="#007700">extends&nbsp;</font><font color="#0000BB">Cart&nbsp;</font><font color="#007700">{<br>&nbsp;&nbsp;var&nbsp;</font><font color="#0000BB">$owner</font><font color="#007700">;<br>&nbsp;&nbsp;function&nbsp;</font><font color="#0000BB">set_owner&nbsp;</font><font color="#007700">(</font><font color="#0000BB">$name</font><font color="#007700">)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#0000BB">$this</font><font color="#007700">-&gt;</font><font color="#0000BB">owner&nbsp;</font><font color="#007700">=&nbsp;</font><font color="#0000BB">$name</font><font color="#007700">;<br>&nbsp;&nbsp;}<br>}<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

Ҫʹ�ü������Ƴ��࣬�뿴����ķ�������Ȼ�ⲻ��̫�õ���ƣ�ÿ�����඼һֱ require ���ĸ��࣬����ɷ������� I/O ����ĸ�������ʵ��ʱ�����Խ�����ϵ�е�����ͬһ�������ļ��У��������Ѝ���ൽ���������࣬Ҳ�����պ�������<p>

<font color="#000000">
<font color="#0000BB">&lt;?php<br></font><font color="#007700">require(</font><font color="#DD0000">"named_cart.inc"</font><font color="#007700">);<br></font><font color="#0000BB">$ncart&nbsp;</font><font color="#007700">=&nbsp;new&nbsp;</font><font color="#0000BB">Named_Cart</font><font color="#007700">;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;���������<br></font><font color="#0000BB">$ncart</font><font color="#007700">-&gt;</font><font color="#0000BB">set_owner&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"CyberRidder"</font><font color="#007700">);&nbsp;</font><font color="#FF8000">//&nbsp;������ļ�������<br></font><font color="#007700">echo&nbsp;</font><font color="#0000BB">$ncart</font><font color="#007700">-&gt;</font><font color="#0000BB">owner</font><font color="#007700">;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;��ʾ��ļ�������<br></font><font color="#0000BB">$ncart</font><font color="#007700">-&gt;</font><font color="#0000BB">add_item&nbsp;</font><font color="#007700">(</font><font color="#DD0000">"10"</font><font color="#007700">,&nbsp;</font><font color="#0000BB">1</font><font color="#007700">);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font color="#FF8000">//&nbsp;�Ӹ����Ŵ��ķ���Ҳ��ʹ��<br></font><font color="#0000BB">?&gt;<br></font>
</font>
<p>

��ˣ��� PHP ��ʹ���� extends �����֣��������õ�ϵͳ������������ CRC ��Ƭ (��������������鼮) ���֮��PHP �ɱ��ӵ��ǿ���������� CGI ���ԡ�<p>

PHP �����ǽű����� (Script)����˳���Դ����ɼ�������������е�Ԫ�����䲢������Ŀǰ�� PHP �汾�г��֣�Ҳ����˵��ȫ��������ʵû���������������ݡ��������ҵ�߶��ԣ�û�а취������ν����� IC��վ�ڿ���������ԣ�������Դ�����Ǽ����£�����������ǣ��ͺ����ж��ˣ�����Ŀǰ PHP ���� Open Source �����һ���ӣ������պ� Zend ��������������װ�Ĺ���Ҳ��һ����

<p><hr size=1><br><p>
</td></tr></table></div>
<p>
<div align=center>
  <table border=0>
    <tr>
      <td>[ <a href="3.5.1.php.php" alt="3.5.1.php">��һҳ</a> 
      </td>
      <td>  <a href="../php/" alt="PHP">PHP�����ֲ�</a>   
	  </td>
      <td> <a href="4.php.php" alt="4.php">��һҳ</a> 
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
