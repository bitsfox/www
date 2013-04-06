<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
echo "<center><font size=5 color=red>debian602下mutt+exim4+fetchmail+procmail+formail搭建邮件收发系统</font></center>";
echo "<br><table border=0 width=100%><tr width=100%><td width=10%></td><td width=80%><font size=4 color=black><pre>";
echo "
<font color=blue size=4>一、各程序功能简介</font>
1、mutt是一个综合的邮件收发，阅读管理平台。其具体功能实现，仰仗其他软件的协同工作。
2、exim4这是debian下默认安装的MTA（邮件传输代理），mutt使用她来完成邮件发送工作。
3、fetchmail是一款邮件接收软件，虽然mutt自身可以接收邮件，但是若要实现多个邮箱的查询接收要靠fetchmail。
4、procmail是一款邮件分拣、过滤工具，她可以设定阻止垃圾邮件接收和按条件分类邮件。
5、formail是邮件格式化工具。
各程序的工作机制为：发送邮件由mutt调用exim4完成，接收邮件由mutt调用fetchmail实现，在接收时，fetchmail
又借助于procmail和formail来完成邮件的分类、过滤以及文件的格式化工作。mutt实现前台的邮件列表管理、邮件
阅读、转发、删除等工作。
<font color=blue size=4>二、程序安装</font>
由于我使用的debian，exim4是系统默认安装的，同样procmail、formail都是系统默认安装的。如果没有可使用
apt-get 自行安装。mutt和fetchmail使用apt-get install安装。
<font color=blue size=4>三、exim4的设置</font>
虽然exim4是系统默认安装的，但是在没有配置前是不可以直接发送外网邮件的，必须要对其进行进一步的设置。
其配置的路径为/etc/exim4/,配置前所有的文件为：
exim4.conf.template						这是一个重要的配置模板文件，一般无须手动
update-exim4.conf.conf					exim4启动时的配置文件。
passwd.client							在未进行配置前，该文件为空。
conf.d/									该目录中的文件一般无需改动。
首先运行dkpg-reconfigure exim4-config,进入一个配置界面，根据个人需要可以选直接使用smtp发送或者使用smarthost
代理发送，使用smtp发送有个坏处，就是收信人看到的邮件地址是你本机设置的，无法回复。选择使用smarthost发送需要
指定一个网络上真实的smtp服务器，是借用这个服务器上你的邮箱发送邮件。例如：你的邮箱是：aaa@gmail.com，则要指
定smarthost为smtp.gmail.com。给别人发信时，显示的是你aaa@gmail.com邮箱发来的。
我选择了smtp发送。其他的选项为：
1、直接使用smtp的服务类型
2、系统邮件名称设置 	随意（我的tiny.edu）
3、监听联入的smtp的ip	一般选择127.0.0.1(仅本机可用)，*允许任何人
4、其他的选默认
配置完成后exim4会按照新的配置重新启动服务，此时如果选择的是smtp方式则配置完成，如果你选择了smarthost
类型的服务则还要进一步进行设置（该设置适用于smarthost类型的邮件服务系统）：
在/etc/exim4/下修改passwd.client,添加smarthost服务器名：用户名：密码：
smtp1.mail.vip.cnb.yahoo.com:aaa@yahoo.cn:password
在/etc/exim4/下新建文件email-addresses,添加本机用户明和邮箱用户名（该名必须和passwd.client中用户名一致）：
root:aaa@yahoo.cn
然后重启exim4服务：/etc/init.d/exim4 restart
上述步骤完成后可发送邮件测试是否成功：mutt -s \"mail test\" aaa@163.com &lt; ./aaa.txt
如果在aaa＠163.com中收到了主题为mail test的邮件则表示配置成功。
mutt命令解释：-s后带邮件主题，aaa@163.com为目的邮箱，邮件内容为aaa.txt的内容，如带附件则：
mutt -s \"mail test\" aaa@163.com -a bbb.jpg &lt; ./aaa.txt 
需要注意的是：exim4虽然简单，但是在配置过程中往往会出现些莫名其妙的错误，可能不管你怎样修改都无法更正，甚至
卸载掉重装都无济于事，这时最好不要使用apt-get remove或autoremove来卸载，使用dpkg --pruge进行彻底清除。
<font color=blue size=4>四、mutt的设置</font>
mutt的配置依然很简单（仅限于满足使用），他的配置文件一般为\$HOME/.muttrc。只要进行简单的设置mutt就可以工作了：
ignore *									#设置显示邮件时不显示邮件头
unignore From Subject Date					#设置取消屏蔽邮件头中的发件地址，邮件名称和日期。 
set editor='vim'							#设置邮件正文编辑器为vim
set sendmail='/usr/sbin/exim4'     			#设置邮件发送程序为exim4
set folder=\"~/Mail\"							#设置邮箱目录
set mbox=\"~/Mail/inbox\"						#设置收件箱
set spoolfile=\"~/Mail/inbox\"     
set record=\"~/Mail/sent\"     				
mailboxes \"+inbox\"							#收件箱
mailboxes \"+13325xxxx00\"					#分类收件箱，189邮箱
mailboxes \"+tybitsfox_gmail\"				#gmail邮箱的邮件
mailboxes \"+tyyyyt\"							#163邮箱的
mailboxes \"+tybitsfox_163\"	
mailboxes \"+tybitsfox_yahoo\"
set charset=\"utf8\"							#字体
set locale=\"zh_CN\"							
set from='QQMaster <10000@qq.com>'			#设置使用直接smtp发送时，收件方显示的你的发信地址.
<font color=blue size=4>五、fetchmail的设置</font>
fetchmail的个人配置文件为\$HOME/.fetchmailrc，如果要作为服务运行定时检查邮箱则为/etc/fetchmailrc。

defaults										#保证这几行在文件的开头
mda \"/usr/bin/procmail -d %T\"					#使用procmail过滤、分拣
set logfile \"/var/log/fetchmail.log\"			
set daemon 600 									#如果作为服务运行，指定检查邮箱的时间间隔

poll pop.163.com								#设定需要检查的邮箱
proto POP3
uidl											#只收取新邮件
username tybitsfox@163.com						
password **********
keep											#收取邮件后不删除服务器上的邮件

poll pop.189.cn									#设定其他需要检查的邮箱
proto POP3
uidl
username 13325xxxx00@189.cn
password *********
ssl												#如需验证则加入该项
keep
<font color=blue size=4>六、procmail的设置</font>
procmail的配置文件\$HOME/.procmailrc，在这里进行邮件过滤、分拣设置

PATH=/bin:/usr/bin:/usr/local/bin
MAILDIR=\"/root/Mail\"					#指定邮件目录
LOGFILE=\"/var/log/procmail.log\"			
FORMAIL=/usr/bin/formail				#指定格式化程序
VERBOSE=off

:0
* ^To.*fox@gmail.com					#我的gmail邮箱的邮件都存放在文件tybitsfox_gmail中
tybitsfox_gmail

:0
* ^To.*yyt@163.com						#tyyyyt@163.com邮箱中的信件报存在tyyyyt文件中
tyyyyt

:0
*.*
inbox									#其余邮件存放在inbox文件中

至此你的邮件收发已经建立起来了，在没有启动fetchmail之前，使用命令进行测试：
fetchmail -akv -m \"/usr/bin/procmail -d %T\" 看看收邮件是否成功，如成功，运行mutt查看。
参数a 收取所有邮件，k 不删除服务器上的邮件，m 指定邮件传送代理mda。
依据你的实际情况确定是否将自动收取邮件fetchmail加入服务中运行，如需加入，修改/etc/default/fetchmail
将START_DAEMON=no 改为yes，重启即可。
";
echo "</pre></font></td><td width=10%></td></tr><table>";

?>
