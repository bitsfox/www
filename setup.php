<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
echo ("<center><font size=5 color=#ff00ff>为了保存我在贴吧的一些文章，特转存至此。以后有些心得杂谈不再贴吧放出</font></center>");
echo ("<hr size=2 width=80%>");
echo ("<font size=3 color=blue>一、xp+freebsd7.2+suse10安装心得（一）</font><br>");
echo ("<font size=2 color=black><pre>
本来想要上来大诉一番苦水的，一觉醒来，苦水都被消化了，还是谈点感受和心得吧。只把自己的喜悦和心得与大家分享下，使各位在以后的安装过程中少绕些弯道：
1、首先，对于分区的要求，一开始我给fb只留出来6G的空间（不想破坏原来已经存在的两套系统了），分配完各个目录的空间后，/usr只剩下4G的空间了，虽然这样要
安装简化的系统完全够用（大约不到2G）但是，如果需要添加ports安装时，临时空间的需求量很大，以至于不得不常常中断make install过程，
先make clean一下。所以建议还是将bsd的分区分大些。
2、也是本次安装最耗时的探索了，虽然以前我装过fc6+fb7+xp+2003，但是没有出现本次这么复杂的情况。最终确定的原因可能就是，f8于bsd7.2的分区不能很好的
兼容，我测试过的情况（本来不想破坏原系统的，没法了）：
2003+freebsd ok~~ 2003+fedora8 ok~~ xp+fedora8+未使用的空主分区 ok
但是只要freebsd72一安装，f8无论如何也不能引导起来，在f8的grub中加入bsd7的引导一样起不来。
最后，我换上了suse10问题解决了。xp+freebsd7.2+suse10
3、安装顺序及引导的添加：
xp或2003打头阵，然后freebsd,在设置启动引导的界面选none,不需要他的引导。最后suse。设置使用grub引导。
全部完成后，此时还不能引导freebsd.进入suse查看fdisk -l 确定freebsd所在的分区。以我的为例，我的是sda3,然后你就可以
cd /boot/grub
编辑menu.lst(看你的系统，也可能是grub.conf或是别的文件)
添加freebsd引导：
title freebsd
    rootnoverify (hd0,2)
    chainloader (hd0,2)+1   
重启后在引导界面就可以看到freebsd的引导项了。
使用grub的好处就是，只要你记得你的linux在那个分区就可以在破坏了原来的引导时（重新安装xp
或2003）只要放进去linux安装盘，进入rescue(拯救模式)就能立刻恢复原来的引导：
grub
root (hd0,X)    ;x为你的linux/boot分区号 如果是sda6 则x=5
setup (hd0)

4、freebsd7.2仍然没有解决我的本本自动关闭电源的问题，但是，一个最简化的安装，然后再根据你的需要制定出一个适用于你的环境的安装过程中你能接触或了解很多
基本的配置。首先，在开始的安装过程中我没有完整的去安装、编译gnome和kde环境，桌明只是一个twm,在进入图形界面的设置时，由于新版的 Xorg -configure需要
自动的搜索添加devices使得生成的~/xorg.conf.new在测试时不能进入x界面。通过查看新的freebsd  handbook(注意：网上有两个不同版本的handbook)才知道
需要在xorg.conf.new的Section \"ServerLayout\"中添加
        Option         \"AutoAddDevices\" \"false\"
来禁止这个功能。然后在Xorg -config ~/xorg.conf.new -retro 测试通过。将~/xorg.conf.new cp至/etc/X11/xorg.conf。然后startx就可进入X了。
startx的基本配置文件在：/usr/X11R6/lib/X11/xinit/xinitrc中，修改这个文件后，相应的/usr/local/lib/X11/xinit/xinitrc文件也作相应的改变。
里面有一项启动xclock的语句，我没有安装，将其注释掉。注意，当你安装了相应的wm并启动他时，上面的配置文件就不再使用了。而是使用了~/.xinitrc的配置文件
进入x后第一件事就是中文字库的安装了;
mount -t msdosfs /dev/ad0s1 /mnt 挂接win,在/usr/X11R6/lib/X11/fonts目录中建立TrueType目录，然后将windows/Fonts/目录下的sim* 拷贝至
/usr/X11R6/lib/X11/fonts／trueType/下，在上述目录下运行ttmkfdir -o fonts.dir。这段操作请参考freebsd的handbook：
将下面这行添加到 /etc/X11/xorg.conf 文件的 \"Module\" 部分。
Load \"freetype\"
在添加/etc/X11/xorg.conf：
FontPath \"/usr/local/lib/X11/fonts/TrueType/\"
此时的firefox就可以更换漂亮的字体了。
上面的ttmkfdir命令如果没有就进ports make下。接下来更换wm，我真的很喜欢fluxbox:
cd /usr/ports/X11-wm/fluxbox/
make install clean
安装完后，建立 ~/.xinitrc文件：
exec fluxbox
接着就是输入法的安装，同样的进/usr/ports/chinese/scim-pinyin/ make install clean
完成后在/etc/csh.cshrc中添加：（此时还没有更换shell,使用系统默认的csh）
setenv LANG       zh_CN.UTF-8
setenv LC_CTYPE   zh_CN.UTF-8
setenv XMODIFIERS @im=SCIM
setenv XIM SCIM
setenv XIM_PROGRAM SCIM
setenv GTK_IM_MODULE xim
setenv QT_IM_MODULE xim
重新启动下，在X下的xterm中scim -d
你的输入法就出现了。关于scim的启动，网上的很多文章都介绍将其添加至.~/.xinitrc中，并且在exec fluxbox之前添加。
我试过这种做法，但是效果不好。还是手动启动最稳妥。
你的输入法启动之后，你会发现在~/下面出现了个core的文件。这是scim的help文件没有安装造成的。其他一些程序在运行崩溃时也会产生core文件。如果你不需要
调试他的话，还是禁止系统产生这类文件吧，sysctl -a | grep dump:
kern.nodump_coredump: 0
kern.coredump: 0
kern.sugid_coredump: 0
debug.elf32_legacy_coredump: 0
debug.minidump: 1
hw.an.an_dump: off
hw.midi.dumpraw: 0
dev.hdac.0.pindump: 0
通过sysctl kern.coredump=0来禁止core的产生，但这仅仅限于本次运行环境，若想永久改变还得添加/etc/sysctl.conf文件：kern.coredump=0
好啦～～看看还缺啥咚咚？关于fluxbox的配置请看我原来介绍的帖子，此时的xterm还不能显示和输入中文。我通过修改~/.Xresources也没能实现，看过楼兰的
回复，难道要重新编译？先不管他了，现在必须的咚咚就是一个支持中文的编辑器，一个中文shell，一个图片浏览器，一个抓图（臭显摆必须的）工具。还有必须的
播放器。
播放器先来，要听着歌才能干起活来更爽啊。进入/boot/defaults/loader.conf。找到sound modules,看有支持你的声卡么？我很幸运。有
然后修改 NO为YES。重启就可以了。
然后先ports个mpg123 感觉不方便的话就ports个xmms。使用mixer调正下音量就ok啦～～～
接着开始安装其他工具，我使用的分别是gnome-terminal,gedit,kview,ksnapshot。
如果没有ports的话，先进入sysinstall装全了，kview和ksnapshot在ports的kdegraphics3或者4里面。make完成后，gedit可以用来编辑中文文本了，可以
看图、抓图了嘻嘻～～～～～只是gnome-terminal运行不起来。通过在网上查找资料，发现他需要一个bus daemon没有启动。于是在.xinitrc中必须添加如下
代码，完整的.xinitrc就是：
## test for an existing bus daemon, just to be safe
if test -z \"\$DBUS_SESSION_BUS_ADDRESS\" ; then
    ## if not found, launch a new one
    eval `dbus-launch --sh-syntax --exit-with-session`
fi

exec fluxbox
好啦，一个你必须的环境基本上搭建起来了。看还差什么？shell？如果你更习惯bash的话。还是换成bash吧。
whereis bash，没有的话还是ports个，然后chsh -s /usr/local/bin/bash改为bash，
添加配置文件，把/etc/csh.cshrc的配置搬过来：
/etc/profile:

export LANG=zh_CN.UTF-8
export LC_ALL=zh_CN.UTF-8
export LC_CTYPE=zh_CN.UTF-8
export XMODIFIERS='@im=SCIM'
export XIM=SCIM
export XIM_PROGRAM=SCIM
export GTK_IM_MODULE=xim
export QT_IM_MODULE=xim

#alias ls='ls -G'
#alias cls='clear'
#alias l='ls -latrG'
PS1=\"[\\u@\\h \\W]\\\\$\"
上面的alias注释掉了，因为这里的设置在fluxbox下面的xterm中无效。所以：
在~/.bashrc:
alias ls='ls -G'
alias cls='clear'
alias l='ls -latrG'
</pre></font>");
echo ("<font size=3 color=red>评论：</font>");
echo ("<font size=2 color=#123456><pre>
楼兰天边云
	2009-05-30 22:22 | 回复 | 删除
哈哈~~ 看你这写的大部分都是FreeBSD的东东撒~

“通过查看新的freebsd handbook(注意：网上有两个不同版本的handbook)才知道”
两个版本的Handbook ? 不是吧，提到Xorg 7.4的是英文版的Handbook，翻译的中文版没有跟上。

setenv LANG zh_CN.UTF-8
setenv LC_CTYPE zh_CN.UTF-8
LC_ALL > LC_* > LANG，设置了LANG就不用设置LC_CTYPE了。
支持中文的编辑器=>emacs，一个中文shell=>rxvt-unicode，一个图片浏览器=>这个不了解，一个抓图=>Xorg自带的xwd 

零家捣蛋精灵
	2009-05-30 23:53 | 删除
还有很多话没说呢，这只是（一）啊，我准备出本书~~    ~—~!
你的指正都很好，至于常用的工具吗，编辑器我已经皈依vim了，emacs很经典，但是我不想再换了。shell我选的gnome-terminal也是暂时的，我还是想解决xterm
完美的中文显示及输入。至于图片浏览和抓图，说实话，平时真的很少用。
我也是查找ports的时候看到这个包，一下子装上了两个。你说的xwd真的很好
只是他的格式~~~还得需要转换工具，不然就得装gimp，gimp我根本不会用。
</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>二、xp+freebsd7.2+suse10安装心得（二）</font>");
echo ("<font size=2 color=black><pre>
慢慢来～～我先把freebsd72说完再说suse
1、在xterm中解决中文显示及输入的问题：
先说几句废话，这个问题解决了，那么我在前面所介绍的gedit和gnome-terminal就可以完全抛弃了，我也是在摸索中前进么。一开始没有搞定shell的中文显示、输入
也是很难受的。首先，你对你现有的xterm是否已经支持中文显示要有个明确的判断。如果不是乱码，只是方块，那说明你的xterm已经支持中文显示了，你只需调整下字体
大小就可解决。或者修改下配置永久解决。这方面的资料网上太多了。判断的方法极其简单：打个date命令，看看怎么显示，如果你还是显示的E文~~哦买嘎瘩！哦买嘎瘩！！
你按照我前面所说完成了配置输入法、调整字体后，是不会在出现E文显示了。也就是设置了LANG.....显示方块和E文的情况就不说了。现在重点来解决显示乱码的问题。
我的系统装完后就是这种情况。还好有楼兰的提示，让我节省了不少时间。（这个家伙咋怎牛呢？看他脑袋没我的大啊～～）进入到/usr/ports/x11/xterm/下，看看
Makefile,果然没有将下面这段编译进去：--enable-wide-chars --enable-luit
这是个条件判断语句，简单的做法就是先备份下这个Makefile,然后修改，去掉if...then...fi。保证将这个参数包含进去，然后就make 。不过最好的做法还是先
make deinstall下。我试为了比较两个xterm才先编译的.看看两个xterm果然不一样。进入到 ./work/xterm-242.../找到xterm,先运行下看看。date果然显示方块
和中文了。至此，将xterm替换下，大功告成！你只需简单的配置下就完美了，我在fluxbox keys中快捷键启动的命令是：
Mod1 t: Exec xterm -fa \"SimSun\" -fs 11 (或者8，超小字体)
2、在vim中显示并输入中文:
在完成了上述操作后，打开你的vim应该就能显示中文了，不过中文输入还不行（或者你的不会出现这个问题）。此时在编辑 ～/.viminfo文件，你会看到下面这行：
*encoding=utf-8
将其修改为：*encoding=euc-cn。还不行？再改！改成gb2312。还不行？？？那你自己看着/usr/share/locale/慢慢试去吧～～～～～
3、内核编译：
很恼火，连着两天晚上我宝贵的个人时间都被占用。耽误的我没有继续内核的编译，本来想将这一部分放到后面再写，想想还是有多少写多少吧，以后在补充。在两天前我编
译了5次内核，成功两次，前三次都失败了，看来要将内核成功的进行瘦身并非易事啊。这三次失败的原因都一样：都是配置的问题，在进行配置的时候,也就是编辑
/usr/src/sys/i386/conf/GENERIC的副本的时候，记得不要直接编辑这个文件。编辑他的copy（看看handbook）不能一味的将本机没用的驱动或设置全部注销，因
为很可能你需要的那些文件中使用的一些变量定义就在你注销的那些驱动文件中。这是编译内核失败的主要原因。所以我第四次编译仅仅象征性的注销了几个不用的设置，并
添加了ext2fs的支持,加入 options EXT2FS,编译顺利通过。但是编译出来的内核比原来的还要大500字节。并且发现原来的内核同样带有ext2fs支持！
mount  linux分区没有成功并不是他的原因，原因后叙。于是再修改配置文件，去掉那个ext2fs设置，又去掉了其他一些无关设置。第五词的编译也通过了。并且比原有内
核小了2M。这当然没有让我满意，过两天再试着编译吧。还有，编译完后，要记得清理一下/usr/obj这个目录，里面存放了大量的内核编译时产生的中间文件。
4、freebsd7.2分区：
通过内核编译，知道了我的系统目前能够支持ext2/3fs的mount挂接，可为什么我始终挂接不成呢？无意间我又测试了挂接扩展分区下的另一个 fat32分区（我的win下的D
盘），同样也没成功。这种情况在我原来使用7.0的时候从来没有发生。ext2fs和fat32及ntfs都挂接的好好的。我不禁又怀疑起fb72的分区了。进入suse使用fdisk -l
查看分区，显示有4处错误，使用pm805查看分区情况。同样很多错误。全部修复后，仍显示分区表错误，无法查看分区情况，不管了，大不了再装一次。重新启动并逐一进入
suse,win,freebsd。全部成功，并且可以mount另一个fat32分区了。但是linux分区仍然不行。看来freebsd7.2的分区果然存在问题。我突然又有了一种重新安装的
冲动～～，这回让linux事先划分好fb的分区在fb安装时不使用他的分区而直接安装会怎样？？可我真的不想再来一次了，谁来帮我做做实验？？？？？？
</pre></font>");
echo ("<font size=3 color=red>评论：</font>");
echo ("<font size=2 color=#123456><pre>
楼兰天边云
	2009-06-01 22:38 | 回复 | 删除
俺刚才试验了下，从ports安装的vim，没有修改任何东西就直接能显示和输入中文了，没有任何问题·~~~  
用不惯vim ~~~   -_- 
零家捣蛋精灵
	2009-06-04 08:46 | 删除
我也按照你的方法试了下，确实如此。而我之前的vim是装系统的时候直接装上的。我觉得这其中的原因可能是（包括xterm）此时的ports安装是在中文环境（或者其他的
locale）已经设置好以后安装的。make应会根据当前的环境做相应的调整，而无需安装后再手动设置了。如果是这样的话，那么再 ports xterm的操作也无需修改
makefile了。xterm我没有试，仅是猜测。 </pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>三、哭诉freebsd7.2~~~~~~~~~</font>");
echo ("<font size=2 color=black><pre>
经过2个多星期的折腾，我又回到了fedora 8。
虽然通过这次安装有不少收获，虽然对freebsd7.2的体验还是那么激动人心，虽然已经无视了无法自动关闭电源（实际上，如果fb在我的本本可用，我准备通过比较linux
和fb的相关源代码来自己实现电源的关闭）的瑕疵，更何况我也容忍了fb糟糕的分区使得我放弃fedora的使用而改用suse。但是，我实在无法原谅你将我的硬盘信息中：
Disk /dev/sda: 77.8 GB, 77860500992 bytes
255 heads, 63 sectors/track, 9466 cylinders
Units = cylinders of 16065 * 512 = 8225280 bytes
Disk identifier: 0x2a542a53
255 heads改为16 heads。从而导致我的suse不时的出现严重的错误，天哪～为什么在7.0中没有这样的错误，反倒在更高的版本中出现？
我不得不放弃freebsd7.2了，希望这只是暂时的，期待一个完美的freebsd早日出现！
</pre></font>");
echo ("<font size=3 color=red>评论：</font>");
echo ("<font size=2 color=#123456><pre>
typhoon_wolf
	2009-08-03 01:11 | 回复 | 删除
我新买的320GB硬盘被不知道什么东西改成16 heads了，导致分区边界柱面无法对齐。还好当时是试验阶段，还没往上放数据。fdisk /dev/sdb，专家模式，给改回来了。
</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>四、xterm调整窗口列宽</font>");
echo ("<font size=2 color=black><pre>
不知道为什么网上的很多介绍怎么都是：XTerm.geometry: 80*24 （~/.Xdefaults）
这种设置方式起码在我的系统上根本不可行，在终端手动启动一个xterm的话总是有错误提示，而且也无法实现调整。看了下man xterm和X(7)。有效的写法应该是：
~/.Xdefaults:
XTerm*geometry: 72
#about geometry,see man X(7)，设置为72列。
</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>五、VIM设置代码折叠（转）</font>");
echo ("<font size=2 color=black><pre>
1. 折叠方式
可用选项 'foldmethod' 来设定折叠方式：set fdm=*****。
有 6 种方法来选定折叠：
          manual           手工定义折叠
          indent             更多的缩进表示更高级别的折叠
          expr                用表达式来定义折叠
          syntax             用语法高亮来定义折叠
          diff                  对没有更改的文本进行折叠
          marker            对文中的标志折叠
注意，每一种折叠方式不兼容，如不能即用expr又用marker方式，我主要轮流使用indent和marker方式进行折叠。

使用时，用：set fdm=marker 命令来设置成marker折叠方式（fdm是foldmethod的缩写）。
要使每次打开vim时折叠都生效，则在.vimrc文件中添加设置，如添加：set fdm=syntax，就像添加其它的初始化设置一样。

2. 折叠命令
选取了折叠方式后，我们就可以对某些代码实施我们需要的折叠了，由于我使用indent和marker稍微多一些，故以它们的使用为例：
如果使用了indent方式，vim会自动的对大括号的中间部分进行折叠，我们可以直接使用这些现成的折叠成果。
在可折叠处（大括号中间）：
zc      折叠
zC     对所在范围内所有嵌套的折叠点进行折叠
zo      展开折叠
zO     对所在范围内所有嵌套的折叠点展开
[z       到当前打开的折叠的开始处。
]z       到当前打开的折叠的末尾处。
zj       向下移动。到达下一个折叠的开始处。关闭的折叠也被计入。
zk      向上移动到前一折叠的结束处。关闭的折叠也被计入。

当使用marker方式时，需要用标计来标识代码的折叠，系统默认是{{{和}}}，最好不要改动之：）
我们可以使用下面的命令来创建和删除折叠：
zf      创建折叠，比如在marker方式下：
                   zf56G，创建从当前行起到56行的代码折叠；
                   10zf或10zf+或zf10↓，创建从当前行起到后10行的代码折叠。
                   10zf-或zf10↑，创建从当前行起到之前10行的代码折叠。
                   在括号处zf%，创建从当前行起到对应的匹配的括号上去（（），{}，[]，<>等）。
zd      删除 (delete) 在光标下的折叠。仅当 'foldmethod' 设为 \"manual\" 或 \"marker\" 时有效。
zD     循环删除 (Delete) 光标下的折叠，即嵌套删除折叠。
          仅当 'foldmethod' 设为 \"manual\" 或 \"marker\" 时有效。
zE     除去 (Eliminate) 窗口里“所有”的折叠。
          仅当 'foldmethod' 设为 \"manual\" 或 \"marker\" 时有效。

---------------------------以上为摘抄-----------------------------------------

我的系统及版本－－fedora 8 VIM - Vi IMproved 7.1 (2007 May 12, compiled Feb 11 2008 10:20:43)
包含补丁: 1-242。
我的测试为：set fdm=syntax时，按照{}来折叠和展开。而set fdm=indent 不会实现{}的折叠展开
当使用set fdm=marker时，需要自行添加折叠区域开始标志:/*{{{*/和结束标志：/*}}}*/，此时使用zc和zo
命令就可以在你标记的范围内实现折叠和展开。
</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>六、fedora8 使用mplayer播放的问题－drvc.dll (drvc.so)</font>");
echo ("<font size=2 color=black><pre>
错误的表现是打开mplayer时有缺失文件的错误提示：
打开视频解码器: [realvid] RealVideo decoder
Error: libstdc++.so.5: cannot open shared object file: No such file or directory
Win32 LoadLibrary failed to load: drvc.so, /usr/lib/wincodecs/drvc.so, /usr/lib/win32/drvc.so, /usr/local/lib/win32/drvc.so
Error loading dll
错误: 打不开所需的 DirectShow 编解码器: drvc.so
Read the RealVideo section of the DOCS!
VDecoder 初始化失败 :(
打开视频解码器: [realvid] RealVideo decoder
Win32 LoadLibrary failed to load: drvc.dll, /usr/lib/wincodecs/drvc.dll, /usr/lib/win32/drvc.dll, /usr/local/lib/win32/drvc.dl
不过，有的片子仍可以播放，但是播放时可能会出现各式各样的错误。
解决得方法有两种：
一、很明显的你的系统没有安装libstdc++.so.5，
yum install libstdc++.so.5。然后问题解决。有些不能播放的片子完全可以播放，有些播放不流畅的变了流畅了。
二、通过下载drvc.dll 并将该文件添加到 /usr/lib/wincodecs/目录中，问题同样可以解决。
该文件的下载在很多地方都有，自己找找，或者安装了realplay并在其相应目录下找到该文件。再或者去win下面找到realplay也可以找到该文件，并拷贝至
/usr/lib/wincodecs/。对于第二种方法我没有测试。
</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>七、luxbox下使用xmms时原来默认的音频设置为：default pcm device:default.....</font>");
echo ("<font size=2 color=black><pre>
1  	 fedora8 kde下pulseaudio的启动	
在gnome下：是通过gnome-session启动的
strings -a /usr/bin/gnome-session | egrep \/usr\/bin\/esd'
     /usr/bin/esd
在kde下怎样或在哪里启动的pulseaudio?	
作者：零家捣蛋精灵  
2009-5-22 01:12 　 回复此发言	
2 	回复：fedora8 kde下pulseaudio的启动	
找到了：
[root@localhost env]# ls
env.sh gnome-keyring-daemon-start.sh gpg-agent-startup.sh pulseaudio.sh
[root@localhost env]# file pulseaudio.sh
pulseaudio.sh: Bourne shell script text executable
[root@localhost env]# cat pulseaudio.sh
#!/bin/sh

if [ -x /usr/bin/pulseaudio ]; then
/usr/bin/pulseaudio -D
fi
[root@localhost env]# pwd
/etc/kde/env
	
作者：零家捣蛋精灵
2009-5-22 01:31 　 回复此发言	
3 	回复：fedora8 kde下pulseaudio的启动	
这个问题来自于我在fluxbox下使用xmms时原来默认的音频设置为：
default pcm device:default。在这个设置下无法播放。必需要改为hw:0,0才可以。
其 他一些依赖于default音频设置的程序也无法播放。我考虑可能是有些只在kde或gnome下启动的服务没有运行造成的，通过比较，发现 pulseaudio没有启动。
在fluxbox下手动启动：pulseaudio -D，然后再将音频设置修改为原来的default。运行、成功。不过使用pulseaudio感觉耗费资源比较大。问题解决了，只不过刚才
一直没有找到kde下这个守护进程在哪里启动起来的.........	
	
作者：零家捣蛋精灵 
</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>八、有名管道fifo和wait共用的问题~</font>");
echo ("<font size=2 color=black><pre>
1  	 有名管道fifo和wait共用的问题~
	
不知大家在写fifo应用时是否注意到这个问题。我也是无意间发现的
就是fifo和wait共用时产生的问题：
[root@localhost f1]# cat f1.c
#include \"/usr/workarea/cprogram/include/clsscr.h\"
#define FIFO             \"/tmp/y001.tmp\"
void sig_chd();
int main(int argc,char **argv)
{
     pid_t pid;
     int i,j,fd;
     char c[200];
//     signal(SIGCHLD,sig_chd);
     unlink(FIFO);
     if(mkfifo(FIFO,0666)==-1)
     {
         printf(\"error to create fifo\\n\");
         return 0;
     }
     pid=fork();
     if(pid<0)
     {
         printf(\"error to fork\\n\");
         return 0;
     }
     if(pid==0)//child process
     {
         memset(c,0,sizeof©);
         fd=open(FIFO,O_WRONLY);
         if(fd<0)
         {
             printf(\"error to open fifo-child\\n\");
             exit(0);
         }
         snprintf(c,sizeof©,\"the message is from child\\n\");
         i=write(fd,c,strlen©);
         if(i!=strlen©)
         {
             close(fd);
             printf(\"write error\\n\");
             exit(0);
         }
         close(fd);
         sleep(5);
         exit(0);
     }
     else
     {
         wait(NULL);
         fd=open(FIFO,O_RDONLY);
         if(fd<0)
         {
             printf(\"error to open fifo\\n\");
             return 0;
         }
         memset(c,0,sizeof©);
         j=read(fd,c,sizeof©);
         if(j<=0)
         {
             close(fd);
             printf(\"error to read\\n\");
             return 0;
         }
         printf(\"%s\",c);
         close(fd);
     }
     return 0;
}
void sig_chd()
{
     int status;
     wait(&status);
     return;
}
在上述代码中，如果不使用自定义信号处理函数而在父进程中直接wait的话，进程将停滞在wait上面。一直得不到输出。也就是父进程始终得不到子进程结束的信号。如果
使用自定义的信号处理函数则可以正常结束。但是，却没有子进程休眠时间的等待。看来该SIGCHLD信号也非真正由子进程发送。我将对该情况进行进一步的测试，
希望各位给点意见。
问题已经解决：
* 如果你同时用读写方式(O_RDWR)方式打开，则不会引起阻塞。
* 如果你用只读方式(O_RDONLY)方式打开，则open()会阻塞一直到有写方打开管道， 除非你指定了O_NONBLOCK，来保证打开成功。
*同样以写方式(O_WRONLY)打开也会阻塞到有读方打开管道，不同的是如果 O_NONBLOCK被指定open()会以失败告终。
当对有名管道进行读写的时，注意点和操作普通管道和套接字时一样：当写入方关闭连接时read()返回EOF，如果没有听众write()会得到一个 SIGPIPE的信号，
对此信号进行屏蔽或忽略会引发一个EPIPE错误退出。感谢中国Linux论坛的wandys版主~
</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>九、在汇编代码中如何实现sleep的系统调用？？</font>");
echo ("<font size=2 color=black><pre>
在syscall.h中定义了绝大部分的系统函数调用，唯独没有SYS_sleep的定义,我该如何在汇*编中实现sleep的调用？？？

[root@localhost a10]# cat a10.s
.include \"defines.h\"
.section .data
d01:
.string \"hello world\\n\"
d1len=.-d01
d02:
.string \"a test\\n\"
d2len=.-d02
.section .text
.globl _start
_start:
movl \$d01,%ecx
movl \$d1len,%edx
movl \$1,%ebx
movl \$SYS_write,%eax
int \$0x80
movl \$d02,%ecx
movl \$d2len,%edx
movl \$STDOUT,%ebx
movl \$SYS_write,%eax
int \$0x80
# --在这里调用sleep
# movl \$3,%ebx --休眠3秒
# movl \$SYS_sleep,%eax －－可是没有调用号SYS_sleep
# int \$0x80
movl \$0,%ebx
movl \$1,%eax
int \$0x80
ret
难道sleep的系统调用不是通过0x80中断实现的么？
哎～贴个代码真难~~~~~~~~~~~~~~~~~~~~~~~~~~~下面是头文件：
[root@localhost a10]# cat defines.h
SYS_exit = 1
SYS_fork = 2
SYS_write = 4
SYS_open = 5
SYS_close = 6
SYS_execve = 11
SYS_lseek = 19
SYS_dup2 = 63
SYS_mmap = 90
SYS_munmap = 91
SYS_socketcall = 102
SYS_socketcall_socket = 1
SYS_socketcall_bind = 2
SYS_socketcall_listen = 4
SYS_socketcall_accept = 5
SEEK_END = 2
PROT_READ = 1
MAP_SHARED = 1
AF_INET = 2
SOCK_STREAM = 1
IPPROTO_TCP = 6
STDOUT = 1
其余函数的调用码可以参看：asm/unistd_32.h
or sys/syscall.h 需要什么自己加入defines.h中即可。

编译及链接：
[root@localhost a10]# cat makefile
a10:a10.o
ld a10.o -o a10
a10.o:a10.s
as -o a10.o a10.s
clean:
rm a10.o
运行：
[root@localhost a10]# ./s10

呜呜～～楼兰，真的是太谢谢你了！！
我找到SYS_nanosleep的定义了。这样可以使用nanosleep来替代sleep了。我还没来得及测试。
在 看到你的帖子之前，我今晚又忙活了一晚上还是没收获，我下了内核的源代码，没有找到相关的c文件（不过我找到了一个OSSO - A Micro Kernel OS 的unistd.c），
在网上搜索的结果好象是这种不属于内核的库函数只提供头文件（unistd.h）和二进制的链接库文件so。－－这、这还能叫开源么？

好了，再次向楼兰表示感谢！！
我测试完后会贴出结果的。
作者：零家捣蛋精灵
其实在C里面编好的函数在汇编里面调用时要用函数名前加上\"_\"的，如以里面的 do_sleep(){ ... }，在汇编里面就得用 call _do_sleep 来调用	
	
作者：procfork 
使用nanosleep的测试完美通过，多加了点注释：
[root@localhost a10]# cat a10.s
.include \"defines.h\"
.section .data
d01:
.string \"hello world\\n\"
d1len=.-d01
#d1len: .long .=.-d01
d02:
.string \"this is a test\\n\"
d2len=.-d02
.section .text
time_spec:
.int 3
.int 0
.globl _start
_start:
#write函数调用，向stdout写输出
movl \$d01,%ecx －－输出数据缓冲
movl \$d1len,%edx －－输出的字符数
movl $1,%ebx －－stdout文件描述符
movl \$SYS_write,%eax －－write函数的调用号
int \$0x80
movl \$d02,%ecx
movl \$d2len,%edx
movl \$STDOUT,%ebx
movl \$SYS_write,%eax
int \$0x80
# nanosleep调用：C中使用了struct timespec结构，
#在前面我定义了time_spec来替代。
movl \$time_spec,%ebx －－休眠的时间
movl \$SYS_nanosleep,%eax －－进入0x80的调用号
int \$0x80
movl \$0,%ebx
movl \$1,%eax
int \$0x80
ret	
	
作者：零家捣蛋精灵 
SYS_nanosleep在我起初提供的defines.h中没有，可以查询asm/unistd_32.h文件将其加上：
SYS_nanosleep=162
然后make
./a10就行了	
	
作者：零家捣蛋精灵 
再次向楼兰兄表示感谢！也谢谢18楼的兄弟！
在c中调用汇编写的函数也是一样，不过正相反，写函数时需要：_函数名，在c调用时要去掉：_。
不过我感觉linux下的混编确实很繁琐，很容易出现各种意想不到的错误。主要是gcc编译器对代码的优化，这种优化虽然对代码的执行效率有提高，但是对编写者却是限制
不少。仅举一例：
int main(int argc,char** argv)
{
int i,j;
char ch[]=\"hello world\\n\";
__asm__ __volatile__
(
\"movl \$4,%%eax\\n\t\" #write函数调用码进eax
\"movl \$1,%%ebx\\n\t\" #stdout文件描述符进ebx
\"movl %0,%%ecx\\n\t\" #输出数据缓冲指针进ecx
\"movl \$12,%%edx\\n\t\" #输出字符数
\"int \$0x80\\n\t\" #80h调用
::\"p\"(ch) #没有输出项，输入项为ch
);
return 0;
}
这样写的话，是得不到正确的结果的。但是如果将\"p\"(ch)换成
\"c\"(ch),指定使用ecx寄存器则可以，或者使用限定符\"p\"不变，而将\"movl %0,%%ecx\\n\t\" 改为：\"movl %0,%%esi\\n\t\" ，然后添加\"movl %%esi,%%ecx\\n\t\"。
或者压栈，出栈给ecx赋值都能得到正确的结果。
如 果要查找这个错误，我们就得gcc -S来生成汇编文件。通过查看该汇编文件我们就很清楚为什么了，原因就是gcc在编译是对代码进行了优化。在调用我们的汇编代码时，
编译器已经将ch的指针赋予了eax。而我们的代码已经对eax进行了修改，但是编译器还是按照优化的原则优先从寄存器对寄存器赋值，而不是内存操作数对寄存器赋值。所以
如果我们将\"movl %0,%%ecx\\n\t\"放到 \"movl \$4,%%eax\\n\t\" 前面结果也正确。但是对于编写者来说，这种差别就要时时注意。这也太麻烦了，而win的混编情况就好多
了，在win下我还没碰到过这种情况。不过从另外的角度考虑，使用 linux确实比用win更加的练人啊。哈哈	
	
作者：零家捣蛋精灵 
</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>十、分享～～xmame玩cps2缺失文件大全</font>");
echo ("<font size=2 color=black><pre>
http://cps2shock.emu-france.info/
下载所需的文件，解压并添加到romzip文件中。就可以玩sfa2 sfa3
等cps2游戏了。
</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<font size=3 color=blue>十一、让你的printf函数丰富多彩～</font>");
echo ("<font size=2 color=black><pre>
看个例子:
int main(int argc,char **argv)
{
        printf(\"\\033[44;37;5m hello world\\033[0m\\n\");
        return 0;
}
该段代码编译运行后显示的是蓝色背景，白色闪烁字的效果。
解释下特殊字符的使用及定义：
\\033”引导非常规字符序列。“m”意味着设置属性然后结束非常规字符序列
“44;37;5”为蓝色，前景白色，闪烁光标的特殊字符代码。具体如下：
编码    颜色/动作
0       重新设置属性到缺省设置
1       设置粗体
2       设置一半亮度（模拟彩色显示器的颜色）
4       设置下划线（模拟彩色显示器的颜色）
5       设置闪烁
7       设置反向图象
22      设置一般密度
24      关闭下划线
25      关闭闪烁
27      关闭反向图象
30      设置黑色前景
31      设置红色前景
32      设置绿色前景
33      设置棕色前景
34      设置蓝色前景
35      设置紫色前景
36      设置青色前景
37      设置白色前景
38      在缺省的前景颜色上设置下划线
39      在缺省的前景颜色上关闭下划线
40      设置黑色背景
41      设置红色背景
42      设置绿色背景
43      设置棕色背景
44      设置蓝色背景
45      设置紫色背景
46      设置青色背景
47      设置白色背景
49      设置缺省黑色背景
其他有趣的代码还有：
\\033[2J         　清除屏幕
\\033[0q         　关闭所有的键盘指示灯
\\033[1q         　设置“滚动锁定”指示灯 (Scroll Lock)
\\033[2q         　设置“数值锁定”指示灯 (Num Lock)
\\033[3q         　设置“大写锁定”指示灯 (Caps Lock)
\\033[15:40H     把关闭移动到第15行，40列
\\007            　　发蜂鸣生beep
		</pre></font>");
echo ("<br><hr size=2 width=80% color=green>");
echo ("<br><br>");
echo ("<hr size=2 width=80%>");

?>
