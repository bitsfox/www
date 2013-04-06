<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
echo "<center><font size=5 color=red>小巧实用的看图软件feh</font></center>";
echo "<br><table border=0 width=100%><tr width=100%><td width=10%></td><td width=80%><font size=4 color=black><pre>";
echo "
1、基本的看图命令：feh a.jpg
2、以全屏适合尺寸查看当前目录下所有图片的命令：feh -F -Z ./*.jpg
3、显示当前目录下所有图片标题的简图：feh -t ./*.jpg 各简图可用鼠标点击查看。
4、使用指定大小的窗口显示图片：feh -g 640x480 ./*.jpg。
5、多图片显示时，每张图片打开一个窗口：feh -w -g 640x480 ./*.jpg。
6、使用不带标题栏的窗口：feh -x ./*.jpg。
7、设定桌面背景：feh --bg-scale FILE
8、看图时可操作的键：多图时使用左右键翻看图片，<,>可以90度左右旋转图片，旋转后即自动保存。x关闭当前窗口，q退出。
";
echo "</pre></font></td><td width=10%></td></tr><table>";
?>
