<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
echo "<pre>";
echo "
继续练习引导和启动模式
在head加载了以后，如果使用32位编程则在未进入保护模式时很难避免错误的发生，看来加入.code16并不像
0.11书中说的那样简单，只是将mov之类的指令加上w限制。

--------------problem------------
问题1：在加入.code16后编译的文件和使用宽度限制符movw编译的文件确实有差异，稍后研究吧。
现在解决方法是将所有进入保护模式前的代码都放在boot文件中，一个扇区的字节不够，可以顺序放入第二扇区，
一并将其读入执行。
连续扇区的代码测试成功，只要指定了第二扇区的加载位置即可，即加载到：0x7c00:0x200(512)处，然后跳转至
该位置继续执行即可.这样做的好处是，我可以在加载gdt\idt进入到保护模式之前使用一个文件用.code16完成所
有的引导和初始化代码。
问题2：加载了head代码后如果代码段选择符依然使用原来代码的0x7c0所在的段时，会出现代码可以执行，
但是数据访问错误，表现在使用lss加载ss/sp时出现错误以及显示信息获取错误。这个问题可以通过指定head
加载处地址作为新的代码段加入到gdt既能解决。但是为何使用原有段＋偏移（通过Ttext 5120指定）就不成功
呢？而且该位置的代码可以正常运行，数据加载不了（都在代码段中）－－恍然大悟，这可能与保护模式下代码
段的特性决定的，这也是为何反汇编时数据信息依然反汇编成了代码的原因吧。测试下。
测试结果：
第一：在使用ld链接时参数 -Ttext 或者 -Tdata后面跟着的地址是16进制的，也即：-Ttext 5120
并非我预期的10个扇区的位置，而是0x5120,相去甚远了，再者，如果仅仅指定了text段的加载位置，不指定data
段的话，data的默认加载位置并非想象的与text直接相连，通过查看bochs的各运行时寄存器的情况，也确实如此，
这种不确定性直接导致了数据定位的错误。才出现了代码正常运行，而数据显示不出来的问题。
第二：关于程序编译链接时设计的加载地址和设定读取磁盘数据加载至内存地址的一致性问题，就目前测试的情况
来看这个问题应该不会影响到加载程序的运行，只要设计好代码段的基地址就可以使程序正常执行，在我的测试中
head进程是在boot引导完成，并设置好gdt\idt再跳转至保护模式后，通过jmp跳转到head的加载位置开始执行的，
一般情况下，head的加载地址应该与head程序链接时设计的加载地址一致，我是将加载地址设计为0x1400（5120，10
个扇区位置之后，前10个为boot所用）如果不进行初始代码的移动的话，head加载进内存的地址为：0x7c00+0x1400
此时只要将代码段描述符中段基地址设计为0x7c00，然后jmp $0x8,$0x1400即可转入head进程的执行，而此时的加载
位置正好与链接head时设定的代码入口点一致，将能保证后续代码的正确转移执行。但是如果在链接时不指定入口地
址为0x1400的话，如指定为0,由boot跳转来后依然能正确执行，因为我们可以设计这时的段基地址为：0x7c00+0x1400
而在我的测试中，我并没有修改段基地址，依然使用的0x7c00，跳转到加载的位置后仍然能够正常执行，但是这时的加
载地址和设计的入口地址明显不一致了，由于head使用了32位的汇编设计，在剔除了pdr,comment,note等调试、链接信
息后不能使用objdump来查看反汇编信息了，
第三：在第一中提到的data段的加载位置不确定的问题也弄清楚了，这个问题的产生是因为源代码的编写是否是将.data
和.text段的定义伪指令放在一起，也就是是否所有的指令代码和数据代码都在一个作用域内，看来对.data和.text的定位
不仅能直接影响到org的定位，还影响到编译后程序的大小，实例如下：
代码形式1：
.data
.text
	....
代码形式2：
.text
.data
	....
代码形式3：
.text
	....
.data
	....
对于这三种情况的定义，在编译链接后，可以通过objdump -x来查看程序的各类信息：
architecture: i386, flags 0x00000112:
EXEC_P, HAS_SYMS, D_PAGED
start address 0x08049054

Program Header:
    LOAD off    0x00000000 vaddr 0x08049000 paddr 0x08049000 align 2**12
         filesz 0x00000254 memsz 0x00000254 flags rw-

Sections:
Idx Name          Size      VMA       LMA       File off  Algn
  0 .data         00000200  08049054  08049054  00000054  2**2
                  CONTENTS, ALLOC, LOAD, DATA
SYMBOL TABLE:
08049054 l    d  .data  00000000 .data
08049089 l       .data  00000000 disp
0000000c l       *ABS*  00000000 len
08049104 l       .data  00000000 msg
08049054 g       .data  00000000 _start
08049254 g       *ABS*  00000000 __bss_start
08049254 g       *ABS*  00000000 _edata
08049254 g       *ABS*  00000000 _end
这是形式2的信息，形式1的信息和他几乎一致，就是将Section的Name换成了.text
也就是这两种形式的写法，其代码段和数据段的作用域完全一致，因此，在程序的编译、链接
过程中只需定义一个Section.
而形式3的信息则是:
architecture: i386, flags 0x00000112:
EXEC_P, HAS_SYMS, D_PAGED
start address 0x08048074

Program Header:
    LOAD off    0x00000000 vaddr 0x08048000 paddr 0x08048000 align 2**12
         filesz 0x000000c0 memsz 0x000000c0 flags r-x
    LOAD off    0x000000c0 vaddr 0x080490c0 paddr 0x080490c0 align 2**12
         filesz 0x00000200 memsz 0x00000200 flags rw-

Sections:
Idx Name          Size      VMA       LMA       File off  Algn
  0 .text         0000004c  08048074  08048074  00000074  2**2
                  CONTENTS, ALLOC, LOAD, READONLY, CODE
  1 .data         00000200  080490c0  080490c0  000000c0  2**2
                  CONTENTS, ALLOC, LOAD, DATA
SYMBOL TABLE:
08048074 l    d  .text  00000000 .text
080490c0 l    d  .data  00000000 .data
080480a9 l       .text  00000000 disp
0000000c l       *ABS*  00000000 len
08049124 l       .data  00000000 msg
08048074 g       .text  00000000 _start
080492c0 g       *ABS*  00000000 __bss_start
080492c0 g       *ABS*  00000000 _edata
080492c0 g       *ABS*  00000000 _end
哈哈，由于这种定义方法代码段和数据段的作用域不同（指令代码不在.data中）所以，出现了
两个Section,而这两个段的定位地址并不相同，这时，如果.org在数据段作用域内，
则他的定位就是以.data的基地址开始计算的偏移，反之将以.text的基地址作为偏移计算。
Ttext定位测试:
通过这个程序的测试，更加清楚了程序加载后重定位信息的调整。实际上所有的标号在编译后都代表着一个段内的偏移，但是这个偏移
已经被编译链接程序硬编译进了程序的二进制文件中，当一个程序由系统加载时，系统会根据这些重定位信息在往内存的加载过程中依照
重定位信息或者修改重定位信息然后加载，这样在执行过程中就不会出现问题了，但是如果仅是将程序从磁盘读出到内存的某一位置，则
不涉及重定位的代码或指令可以顺利执行，但是所有涉及重定位的代码指令则不能正常执行了。因此，对于手动加载的程序必须依据加载
到的内存位置，在确定了段基地址后还要调整重定位项的数值！
测试idt的建立和使用
测试成功，需要注意的是：在设置idt的描述符时，指定的段选择符是中断函数所在的段，并且是可执行段
a02测试时，使用call时需注意：
1、必须要设置好堆栈。
2、在函数中使用堆栈操作时记住第一个pop出来的是系统自动压入堆栈的返回指针，需好存和恢复。
3、在测试局部标号0－9的使用，在不同的函数中使用同一数字标号没有岐义。
尼玛，代码的一丝错误简直就是逆天，一个磁盘读取的错误，将16进制误写成8进制。害我浪费了宝贵的一个晚上！
整数乘法的运算，如果使用mull的话，低32位在eax中，高32位在edx中。
-----------------------2014-08-18	关于重定位的补充-------------------------------------
在16位代码完成初始化，准备跳转进入32位模式时，有两种定位方式：
一、安全的定位方式：
就是将32位代码开始执行的地址设为新的段地址，加入到gdt表中。例如16位的初始化代码都在0x7c0：0000开始的第一个读入扇区内完成了，
现在将第二扇区的数据依次读入到0x7c0:0x200开始的地址并跳转至该处执行。而第二扇区就已经为32位代码了，此时可以将0x7c0:0x200设为
新的段基地址并加入到gdt中：.word 2,0x7e00,0x9a00,0x00c0。然后在加载了cr0后直接跳转至jmp $8,$0(假设该段选择符为8,偏移则为0).
这种做法的好处是在新读入的扇区数据中如果有新的数据，则可以正确的访问代码和数据。而无需考虑数据的重定位。
二、带偏移的定位方法：
这种方法与方法基本相似，不同的就是在构造32位代码段时不加入0x200的便宜，仍然使用一开始的0x7c0来构造，此时的段描述符为：
.word 2,0x7c00,0x9a00,0x00c0。由于这里没有加入0x200的便宜所以在跳转时要使用：jmp $8,$0x200(仍假设该段选择符为8)，这种写法如果
不再makefile文件中进行修改，跳转后的代码可以执行，但是数据访问可能出错。错误在于对数据的定位不对，为可测试，可以在代码中取得了
数据地之后再人为的加上一个偏移（人为的重定位，呵呵）这个偏移就是0x200! 因此，如果非要使用这种带偏移的定位，就必须在makefile文
件中做相应的修正，修正的方法又有两种：
1、如果在32位的源代码中是如下定义的：
.data
.text
则需要在makefile文件中对head文件的text段指定偏移： -Ttext 200
2、如果在32位的源代码中是如下定义的：
.text
.data
则需要在makefile中对head文件的data段指定偏移： -Tdata 200
如果在后面的代码中还有org定位的话，则第一种写法的作用域为data，此时org的定位是以data的偏移开始计算便宜的，第二种反之。

</pre>";
echo "<pre><font color=red size=3>
关于软驱驱动编程
相关基础知识部分请参看：<a href=../www.brokenthorn.com/Resources/OSDevIndex.html target=_blank>操作系统开发系列</a>
下面主要记录下实际操作的情况，在具体的驱动编制过程中，最大的感慨就是：所有正确知识的取得都是拼凑起来的！
不管是handbook还是操作系统开发网站甚至intel官方资料网站的介绍，在实际操作中都存在问题。
究其原因我想或许是我并没有对实际的软驱测试，而是使用的bochs。也可能有些异常是由模拟器造成的吧？
下面介绍下驱动开发的具体流程，每个步骤基本上对应一个函数：
（1）启动马达： 该步骤是通过对写0x3f2端口，并等待马达转速正常后,即完成启动操作。
写入的命令字节释义：
		0 0 0 1 1 1 0 0
		------- - - ---
		   |    | |  |
		   |    | |  -----指定驱动器，0-3分别代表软驱A-D
		   |    | --------0：控制器重置;1：控制器允许
		   |	----------0：IRQ模式; 1：DMA模式
		   ---------------4-7bit置位时，分别代表软驱A-D
一般的命令为（使用软驱A）：0x1C
（2）移动磁头到指定位置：该函数用于将指定的磁头移动至指定的磁道。该操作命令字节为3个,没有返回值。
其中：
		命令字：	0 0 0 0 1 1 1 1
		参数1 ：	x x x x x HD DR1 DR0	HD:指定磁头，DR1 DR0:指定软驱A-D（0-3）
		参数2 ：	磁道号（0-基）
（3）命令字的写入： 由于该操作是最频繁的操作，并且在每个命令字节的写入前都要读主状态寄存器(0x3f4)的状
态，并根据主状态寄存器的状态确定是否可写。所以，该命令是一个独立的函数。
写入前主状态的判断：状态字位6必须为0，位7必须为1才可写入
主状态字释义：
		1 0 0 0 0 0 0 0
		- - - -	-------
		| | | |    |
		| | | |	   -------位0-3置位代表驱动器A-D忙
		| | | ------------FDC忙标志，0：不忙，1：读写命令正在执行
		| | --------------FDC处于DMA模式，0：不是，1：是
		| ----------------传送方向标志，0：从CPU到FDC，1：从FDC到CPU
		------------------数据寄存器准备传送标志，0：未就绪，1：就绪可传送
当读取的主状态寄存器允许传送时，写命令就可以通过向数字寄存器（0x3f5）写入一个命令字或参数，然后再次判断
主状态寄存器。
（4）等待软驱中断：（wait_for_irq6）该函数在每次向FDC发送一个命令后（除了中断检测命令）都要被调用，以确
定FDC是否执行完命令。在实模式下可通过bios数据区的0x0040:0x003e的字节判断是否中断发生。只有中断发生才能继
续后面的操作，并调用中断检测命令通知FDC我们已经处理完成了本次中断。
0x0040:0x003e字节的释义：
		0 0 0 0 0 0 0 0
		- - --- -------
		| |  |     |
		| |  |     -------位0-3置位分别代表驱动器A-D(位0-A,位1-B,位2-C，位3-D)
		| |  -------------0-3代表选中的驱动器（0：A，1：B...）
		| ----------------未知
		------------------1：中断发生，0：中断已处理
该函数主要是监控字段位7是否置位，如果置位则复位该bit表示中断已处理。
（5）检测中断状态：该命令用于执行完一些没有返回的命令后查询中断的状态，但是是否所有的FDC命令执行完后都应调
用这条命令尚不明确。但是看操作系统开发这个网站的一个读数据操作实例中有这样一句注释：
//! let FDC know we handled interrupt
如果是这样的话，那应该是在每个FDC命令执行完成后都应调用该命令以通知FDC。
该命令的命令字节为1,命令字为0x8,返回状态字节2个，其中第一个字节为状态寄存器0的内容，第二字节为当前的柱面号。
（6）执行状态的读取：这也是我目前碰到的关于软驱驱动编程中最为混乱的操作！各方做法不一。该命令的操作是在写入
命令执行完后，对有返回值的命令必须要读取其返回值，该命令才算执行完成，否则不能继续执行其他命令。而返回的状
态字节数各个命令也不相同，最多为7个返回字节。在读取之前还应先执行等待软驱中断操作。待中断产生后，清除中断后
在开始读取，并且每次读取一字节的状态都要对主状态字进行检查。根据主状态字节的释义和handbook的说明，应该是先要
判断主状态字的位6以确定传送方向是FDC到CPU，然后在判断数据寄存器就绪才可读取一个返回状态字节。循环上述操作读取
全部返回状态字节。但是，实际的测试却不是如此，在我的测试程序中，主状态字的位6从来都不是1,首次得到的主状态字是
0b00010000 也就是FDC处于忙状态，通过追踪主状态字的变化，发现等待忙状态结束后即刻进入到初始状态了
（主状态字为0b10000000）。也就是根本无法按照handbook上要求的去获取返回状态字节。查看操作系统开发网站的上示例
（http://www.brokenthorn.com/Resources/OSDev20.html）他是只判断位7的数据寄存器是否就绪，只要就绪就开始读取。
然而这种状态也是主状态寄存器的初始状态，应该是准备接受命令的标志。我尝试按照这种做法，确实获得了正确的返回状
态字节。但是返回的字节数却不能确定，只好连续取得7次（针对某个单独的FDC命令可以使用其特定的返回字节数控制）。
不管怎么我觉得这种做法真的很曹蛋，我也因此而花费了整个国庆的休息时间去测试！
（7）DMA的设置：dma的设置相对而言比较简单，对软驱编程用到的端口为：
0x81 通道2的页寄存器端口，
0xA 单通道屏蔽寄存器（只写），
0xB 模式寄存器（只写），
0xC 清字节指针寄存器（只写），
0x4 通道2的地址寄存器（8位，分2次写入16位地址）
0x5 通道2的计数寄存器（8位，分2次写入16位地址）
设置步骤一般为：
1、写端口0xA屏蔽指定软驱;
2、写模式寄存器端口0xB，指定dma工作在读模式下（磁盘->内存）;
3、写任意数据至端口0xC，重置字节指针;
4、将段地址的高4位写入页寄存器0x81;
5、重复步骤3,重置寄存器字节指针;
6、将段地址的低16位+偏移形成16位地址分两次写入地址寄存器;
7、重复步骤3,重置寄存器字节指针;
8、将待读入的字节数分别写入计数寄存器;
9、开启指定软驱的屏蔽。
单通道屏蔽寄存器字节释义：
		0 0 0 0 0 0 0 0
		--------- - ---
		    |     |  |
		    |     |  -------0-3分别对应通道0-3
		    |     ----------屏蔽位，1：屏蔽，0：不屏蔽
		    ----------------未用
模式寄存器字节释义：
		0 0 0 0 0 0 0 0
		--- - - --- ---
		 |  | |  |   |
		 |  | |  |   -------0-3分别对应通道0-3
		 |  | |  -----------传送类型，0：自身测试; 1：写模式（对内存而言）;2：读模式（对内存而言）; 3：无效
		 |  | --------------自动初始化设置，1：自动初始化，0：不自动
		 |  ----------------IDEC 无须设置
		 -------------------工作模式，0：询问模式，1：单字节传输模式，2：块字节传输模式，3：dma级联模式

</font></pre>";
?>
