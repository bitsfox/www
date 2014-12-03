<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
echo "<pre>
<a name=8259A></a>
<center><font color=red size=5>8259A中断控制器</font></center>
pdf文档的相关资料请参看：linux0.11kerlen <font color=blue>P222</font>(zathura)另一个资料：<a href=4-3.htm target=_blank>8259A中断控制器</a>
我已经顺利的完成了两级级联的8259A中断控制器的编程，目前编程主要涉及的是对两个芯片初始化、中断号的重新设定、工作方式和屏蔽中断请求的操作。
对8259A进一步的测试还没有进行，以后有时间会慢慢测试的。有关8259A详细的资料请看pdf文档，这里仅记录下我在实际操作过程中对8259A的认识和理解
下面所说都是针对两级级联的情况：
一、8259A的端口：<font color=blue>主芯片：0x20，0x21，从芯片：0xa0，0xa1</font>
实际上每个芯片上的两个端口是一致的，关键在于控制器上的A0线，当A0=0时，端口号为0x20（0xa0），当A0=1时，端口号就为0x21（0xa1）
二、8259A的工作方式：8259A有4种工作方式：
（1）全嵌套方式
（2）循环优先级方式
（3）特殊屏蔽方式
（4）程序查询方式
linux0.11版本使用的工作方式为：普通全嵌套方式，8086模式，非缓冲，非自动结束，<font color=blue>所对应的命令字为：0x1</font>
三、8259A的命令字：有两种命令字分别为ICW和OCW，ICW为初始化命令字，又有4种分别是ICW1～ICW4，OCW为操作命令字，有三种：OCW1～OCW3
<font color=red>初始化命令字：</font>
（1）ICW1的格式：
<font color=blue><table wodth=50% border=1>
<tr><td width=30%>位</td><td width=30%>名称</td><td width=40%>含义</td></tr>
<tr><td width=30%>D7</td><td width=30%>A7</td><td width=40%>A7～A5用于MCS80/85，对X86处理器无用</td></tr>
<tr><td width=30%>D6</td><td width=30%>A6</td><td width=40%></td></tr>
<tr><td width=30%>D5</td><td width=30%>A5</td><td width=40%></td></tr>
<tr><td width=30%>D4</td><td width=30%>1</td><td width=40%>恒为1</td></tr>
<tr><td width=30%>D3</td><td width=30%>LTIM</td><td width=40%>1-电平触发中断，0-边沿触发中断</td></tr>
<tr><td width=30%>D2</td><td width=30%>ADI</td><td width=40%>用于MCS80/85，X86无用</td></tr>
<tr><td width=30%>D1</td><td width=30%>SNGL</td><td width=40%>1-单片8259A，0-多片</td></tr>
<tr><td width=30%>D0</td><td width=30%>IC4</td><td width=40%>1-需要ICW4，0-不需要</td></tr>
</table></font>
注意ICW1的发送需要A0=0时操作，也就是该命令字是发往0X20,0XA0的端口上的。至于怎样控制A0，由于没有资料，本人的猜测为：A0的选择是基于编程时所用的
是哪个端口（奇、偶端口地址）来确定的。是端口决定A0，而非A0确定端口。
在linux0.11中，<font color=blue>初始化命令字ICW1的默认取值为0X11</font>，表示需要ICW4
<font color=blue>命令字操作端口：0X20，0XA0</font>
（2）ICW2：用于设置芯片送出的中断号的高5位，也就是8259A对起始中断号的设置是8对齐的，因为每个芯片可以送出8个中断号，后面的中断号是依据初始中断号
递增得到的，而初始中断号不可以指定为非8对齐的号码。在linux0.11中，<font color=blue>主芯片初始化命令字ICW2为0X20，从芯片取值为0X28</font>
<font color=blue>命令字操作端口：0X21，0XA1</font>
（3）ICW3：用于多片级联时，主芯片指定的通过那个IR引脚连接从芯片的INT，以及指定从芯片的标识号。对于主芯片，如果其位0-位7哪一位=1表示该位对应的IR
引脚连接一个从芯片。对于从芯片，其位0-2表示该从芯片对应的在级联中的连接序号（标识号）。
在linux0.11中，<font color=blue>主芯片的ICW3默认取值为0X4，表示IR2引脚连接从芯片。从芯片默认取值为0X2，表示为第二个级联的芯片</font>
<font color=blue>命令字操作端口：0X21，0XA1</font>
（4）ICW4：当ICW1的位0置位时，表示还需要设置ICW4。ICW4的格式为：
<font color=blue><table wodth=50% border=1>
<tr><td width=30%>位</td><td width=30%>名称</td><td width=40%>含义</td></tr>
<tr><td width=30%>D7</td><td width=30%>0</td><td width=40%>恒为0</td></tr>
<tr><td width=30%>D6</td><td width=30%>0</td><td width=40%>恒为0</td></tr>
<tr><td width=30%>D5</td><td width=30%>0</td><td width=40%>恒为0</td></tr>
<tr><td width=30%>D4</td><td width=30%>SFNM</td><td width=40%>1-特殊全嵌套方式，0-普通全嵌套方式</td></tr>
<tr><td width=30%>D3</td><td width=30%>BUF</td><td width=40%>1-缓冲方式，0-非缓冲方式</td></tr>
<tr><td width=30%>D2</td><td width=30%>M/S</td><td width=40%>1-缓冲方式下主片，0-缓冲方式下从片</td></tr>
<tr><td width=30%>D1</td><td width=30%>AEOI</td><td width=40%>1-自动结束中断方式，0-非自动结束方式</td></tr>
<tr><td width=30%>D0</td><td width=30%>uPM</td><td width=40%>1-8086/88处理器系统，0-MCS80/85系统</td></tr>
</table></font>
linux0.11中，<font color=blue>送往主、从芯片的的ICW4的取值都为0X1</font>表示8259A芯片被设置为普通全嵌套、非缓冲、非自动结束中断方式，并且8086兼容系统。
<font color=blue>命令字操作端口：0X21，0XA1</font>
<font color=red>操作命令字：</font> 操作命令字在初始化完成后可随时对2859A进行设置操作。
（1）OCW1：该命令字用于对8259A的中断屏蔽寄存器IMR进行读写操作。该操作字位0-7对应该芯片上的8个中断请求。
在linux0.11的初始化中先设置屏蔽所有中断，因此送出的OCW1取值为0XFF。
<font color=blue>命令字操作（读、写）端口：0X21，0XA1</font>
（2）OCW2：用于发送EOI命令或设置中断优先级的自动循环方式，对于设置为非自动结束方式的8259A，这是编程中最常用到的一个操作：发送0X20到端口0X20或者0XA0以手
动方式告知8259A中断处理结束。
OCW2的命令字格式：
<font color=blue><table wodth=50% border=1>
<tr><td width=30%>位</td><td width=30%>名称</td><td width=40%>含义</td></tr>
<tr><td width=30%>D7</td><td width=30%>R</td><td width=40%>优先级循环状态</td></tr>
<tr><td width=30%>D6</td><td width=30%>SL</td><td width=40%>优先级设定标志</td></tr>
<tr><td width=30%>D5</td><td width=30%>EOI</td><td width=40%>非自动结束标志</td></tr>
<tr><td width=30%>D4</td><td width=30%>0</td><td width=40%>恒为0</td></tr>
<tr><td width=30%>D3</td><td width=30%>0</td><td width=40%>恒为0</td></tr>
<tr><td width=30%>D2</td><td width=30%>L2</td><td width=40%>L2-0 3位组成级别号</td></tr>
<tr><td width=30%>D1</td><td width=30%>L1</td><td width=40%>分别对应中断请求级别IRQ0--IRQ7（或IRQ8-IRQ15）</td></tr>
<tr><td width=30%>D0</td><td width=30%>L0</td><td width=40%></td></tr>
</table></font>
<font color=blue>命令字操作（读、写）端口：0X20，0XA0</font>
（3）OCW3：用于设置特殊屏蔽方式和读取寄存器状态（IRR和ISR），在linux0.11中并未用到该命令字。OCW3命令字的格式：
<font color=blue><table wodth=50% border=1>
<tr><td width=30%>位</td><td width=30%>名称</td><td width=40%>含义</td></tr>
<tr><td width=30%>D7</td><td width=30%>0</td><td width=40%>恒为0</td></tr>
<tr><td width=30%>D6</td><td width=30%>ESMM</td><td width=40%>对特殊屏蔽方式操作，D6-D5为11-设置特殊屏蔽，10-复位特殊屏蔽</td></tr>
<tr><td width=30%>D5</td><td width=30%>SMM</td><td width=40%></td></tr>
<tr><td width=30%>D4</td><td width=30%>0</td><td width=40%>恒为0</td></tr>
<tr><td width=30%>D3</td><td width=30%>1</td><td width=40%>恒为1</td></tr>
<tr><td width=30%>D2</td><td width=30%>P</td><td width=40%>1-查询（poll）命令，0-无查询命令</td></tr>
<tr><td width=30%>D1</td><td width=30%>RR</td><td width=40%>在下一个DR脉冲时读寄存器状态</td></tr>
<tr><td width=30%>D0</td><td width=30%>RIS</td><td width=40%>D1-0为11-读正在服务寄存器ISR，10-读终端请求寄存器IRR</td></tr>
</table></font>


<a name=cmos></a>
<center><font color=red size=5>cmos信息</font></center>
pdf文档的相关资料请参看：linux0.11kerlen <font color=blue>P252</font>(zathura)
pc的cmos内存是由电池供电的64或128字节的内存块，通常是系统实时钟芯片的一部分，有些会有更大的容量。存放的时间为BCD格式
cmos的地址空间在基本地址空间之外，因此其中不包括可执行的代码。要访问他需要通过端口<font color=blue>0X70,0X71</font>进行，
其中0X70是地址端口，0X71是数据端口。操作时需先发送地址偏移到0X70端口，再从0X71数据端口读、写数据即可。
下面是cmos64字节信息简表：
<center><table width=80% border=1><font color=blue>
<tr>
<td width=20% align=center>地址偏移值</td>
<td width=30% align=center>内容说明</td>
<td width=20% align=center>地址偏移值</td>
<td width=30% align=center>内容说明</td>
</tr>
<tr>
<td width=20% align=center>0x00</td>
<td width=30% align=center>当前秒值（实时钟）</td>
<td width=20% align=center>0x11</td>
<td width=30% align=center>保留</td>
</tr>
<tr>
<td width=20% align=center>0x01</td>
<td width=30% align=center>报警秒值</td>
<td width=20% align=center>0x12</td>
<td width=30% align=center>硬盘驱动类型</td>
</tr>
<tr>
<td width=20% align=center>0x02</td>
<td width=30% align=center>当前分钟（实时钟）</td>
<td width=20% align=center>0x13</td>
<td width=30% align=center>保留</td>
</tr>
<tr>
<td width=20% align=center>0x03</td>
<td width=30% align=center>报警分钟值</td>
<td width=20% align=center>0x14</td>
<td width=30% align=center>设备字节</td>
</tr>
<tr>
<td width=20% align=center>0x04</td>
<td width=30% align=center>当前小时（实时钟）</td>
<td width=20% align=center>0x15</td>
<td width=30% align=center>基本内存（低字节）</td>
</tr>
<tr>
<td width=20% align=center>0x05</td>
<td width=30% align=center>报警小时值</td>
<td width=20% align=center>0x16</td>
<td width=30% align=center>基本内存（高字节）</td>
</tr>
<tr>
<td width=20% align=center>0x06</td>
<td width=30% align=center>一周中的天（实时钟）</td>
<td width=20% align=center>0x17</td>
<td width=30% align=center>扩展内存（低字节）</td>
</tr>
<tr>
<td width=20% align=center>0x07</td>
<td width=30% align=center>一月中的当日（实时钟）</td>
<td width=20% align=center>0x18</td>
<td width=30% align=center>扩展内存（高字节）</td>
</tr>
<tr>
<td width=20% align=center>0x08</td>
<td width=30% align=center>当前月份（实时钟）</td>
<td width=20% align=center>0x19～0x2d</td>
<td width=30% align=center>保留</td>
</tr>
<tr>
<td width=20% align=center>0x09</td>
<td width=30% align=center>当前年份（实时钟）</td>
<td width=20% align=center>0x2e</td>
<td width=30% align=center>校验和（低字节）</td>
</tr>
<tr>
<td width=20% align=center>0xa</td>
<td width=30% align=center>RTC状态寄存器A</td>
<td width=20% align=center>0x2f</td>
<td width=30% align=center>校验和（高字节）</td>
</tr>
<tr>
<td width=20% align=center>0x0b</td>
<td width=30% align=center>RTC状态寄存器B</td>
<td width=20% align=center>0x30</td>
<td width=30% align=center>1M以上扩展内存（低字节）</td>
</tr>
<tr>
<td width=20% align=center>0x0c</td>
<td width=30% align=center>RTC状态寄存器C</td>
<td width=20% align=center>0x31</td>
<td width=30% align=center>1M以上扩展内存（高字节）</td>
</tr>
<tr>
<td width=20% align=center>0x0d</td>
<td width=30% align=center>RTC状态寄存器D</td>
<td width=20% align=center>0x32</td>
<td width=30% align=center>当前所处实际值</td>
</tr>
<tr>
<td width=20% align=center>0x0e</td>
<td width=30% align=center>POST诊断状态字</td>
<td width=20% align=center>0x33</td>
<td width=30% align=center>信息标志</td>
</tr>
<tr>
<td width=20% align=center>0x0f</td>
<td width=30% align=center>停机状态字</td>
<td width=20% align=center>0x34～0x3f</td>
<td width=30% align=center>保留</td>
</tr>
<tr>
<td width=20% align=center>0x10</td>
<td width=30% align=center>磁盘驱动器类型</td>
<td width=20% align=center></td>
<td width=30% align=center></td>
</tr>
</font></table></center>






</pre>";
?>
