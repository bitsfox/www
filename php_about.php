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
echo "<pre>
<font color=blue>记录下最近学习php的一些总结</font>

1、require或者include在包含文件时不要使用../或者./相对路径。如果可能，
使用自根目录开始的绝对路径最为保险。
2、一些常用的判断函数：
（1）isset(\$var)该函数是用于判断一个变量是否定义的，如果定义了，即便
是该变量为空，=0 =false。都会返回true.但是该函数不能对常量进行判断。
（2）defined(\"const\") 该函数与isset()函数相似，但是用于判断一个常
量是否定义。
（3）is_dir(\$dir) 判断参数dir是否为一个目录。 
（4）is_array(\$ary)判断参数ary是否为一个数组。
（5）is_file(\$file)判断参数file是否为一个文件
2、我的thinkpad本不自动启动postgresql,每次需要手动进入/etc/init.d/
执行 ./postgresql restart才能启动。今天启动时总是不成功，提示/var/run/
postgresql/..sock错误，进入到/var/run目录下，发现没有postgresql目录
mkdir建立目录，查看/etc/passwd,获取postgres的用户和组id,
chown uid:gid postgresql/.然后再次启动成功。
3、全局变量在函数中的用法，定义的全局变量不能在函数所在的类中使用global声明
必须在函数体内使用global声明，另外，如果不显式的使用global声明，可以在函数
体内使用require_once之类的包括函数，包括定义全局变量的文件（open-lims是这样
做的）。
4、关于在类中定义的static类型的变量的用法，该变量的赋值和引用都必须使用self::
,但是赋值时使用\$this->对变量进行赋值也不会有错误提示，但是无法引用，也不能用
self::引用。不过可以作为返回值使用，但返回空值。还有在析构函数中若要unset类中
static变量，使用self::会出现错误。使用\$this->虽然不会出现错误提示，但我感觉这
样也是无用的吧。
5、this指针的注意事项：如果使用类中的函数而不采用类的实例化时，如
classname::func();采用这种调用方式，如果函数体内使用了this指针则一定会出现错误提示。
避免的方法就是：如果必须使用this指针，则在调用函数前对类进行实例化，如果不想实例化
而直接调用则在函数体内避免使用this指针。
6、数组的使用，在测试过程中发现，在使用数组对数据库数据进行操作时，应该会出现二维数组
的情况。即每条记录由一个数组表示（典型的\$row=pg_fetch_row()）数组的每个元素存储记录的一
个字段。但是对读取出来的多条记录，单一的数组就无法应付了，但是php中的数组好像有没有二维
一说(有！但我现在还不会用)。我的实现方法就是使用array_values函数和array_merge这两个将多个
数组合并为一个数组。只要知道每条记录的字段数量，这种方法测试可行。

</pre>";
?>




