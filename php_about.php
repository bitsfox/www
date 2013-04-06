<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
echo "<a name=php01></a><center><font size=4 color=red>PHP编程</center></font><br><br>";
echo "<font size=4 color=blue>include_once函数的应用</font><br>";
echo "include_once函数可以轻松的包含一些外部的文本文件到网页中，并且如果这些外部文件中如果使用了html标记<br>
在网页的显示中仍然可以显示出来，比如我的网站中关于bios中断的网页，在前一级网页中使用了:<br>
&lt;a href=./boot.php#boot01 target=_blank&gt;BIOS中断--显示服务INT10H&lt;/a&gt;&lt;br&gt;&lt;br&gt;<br>
而在boot.php中使用了：<br>
echo \"&lt;br&gt;&lt;pre&gt;\";<br>
include_once(\"./bios_int.txt\");<br>
echo \"&lt;/pre&gt;\"<br>
在这里并没有上一级网页中定义的定位标记boot01，而该标志我放在了bios_int.txt外部包含中，php依然可以解释该标记<br>
并跳转到该标记处。<br>";

?>




