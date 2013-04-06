<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
echo ("<a name=p001></a><center><font color=#ff0000 size=5>玩转ptrace(一)</font></center>");
echo ("<font color=#0000ff size=3><pre>
by Pradeep Padala
Created 2002-11-01 02:00
翻译: Magic.D E-mail: adamgic@163.com
译者序：在开发Hust Online
Judge的过程中，查阅了不少资料，关于调试器技术的资料在网上是很少，即便是UNIX编程巨著《UNIX环境高级编程》中，相关内容也不多，直到我在http://
www.linuxjournal.com上找到这篇文章，如获至宝，特翻译之，作为鄙人翻译技术文档的第一次尝试，必定会有不少蹩脚之处，各位就将就一下吧，欢迎大力
拍砖。
你想过怎么实现对系统调用的拦截吗？你尝试过通过改变系统调用的参数来愚弄你的系统kernel吗？你想过调试器是如何使运行中的进程暂停并且控制它吗？
你可能会开始考虑怎么使用复杂的kernel编程来达到目的，那么，你错了。实际上Linux提供了一种优雅的机制来完成这些：ptrace系统函数。 
ptrace提供了一种使父进程得以监视和控制其它进程的方式，它还能够改变子进程中的寄存器和内核映像，因而可以实现断点调试和系统调用的跟踪。
使用ptrace，你可以在用户层拦截和修改系统调用(sys call)在这篇文章中，我们将学习如何拦截一个系统调用，然后修改它的参数。在本文的
第二部分我们将学习更先进的技术：设置断点，插入代码到一个正在运行的程序中；我们将潜入到机器内部，偷窥和纂改进程的寄存器和数据段。 
基本知识
操作系统提供了一种标准的服务来让程序员实现对底层硬件和服务的控制（比如文件系统），叫做系统调用(system calls)。当一个程序需要作系统
调用的时候，它将相关参数放进系统调用相关的寄存器，然后调用软中断0x80，这个中断就像一个让程序得以接触到内核模式的窗口，程序
将参数和系统调用号交给内核，内核来完成系统调用的执行。
在i386体系中(本文中所有的代码都是面向i386体系)，系统调用号将放入%eax,它的参数则依次放入%ebx, %ecx, %edx, %esi 和 %edi。 比如，在以下的调用

       Write(2, “Hello”, 5)
 
的汇编形式大概是这样的


    movl \$4, %eax
    movl \$2, %ebx
    movl \$hello, %ecx
    movl \$5, %edx
    int \$0x80
 

这里的\$hello指向的是标准字符串”Hello”。 
那么，ptrace会在什么时候出现呢？在执行系统调用之前，内核会先检查当前进程是否处于被“跟踪”(traced)的状态。如果是的话，内核暂停当前进程并将控
制权交给跟踪进程，使跟踪进程得以察看或者修改被跟踪进程的寄存器。 
让我们来看一个例子，演示这个跟踪程序的过程 

#include &lt;sys/ptrace.h&gt;
 #include &lt;sys/types.h&gt;
 #include &lt;sys/wait.h&gt;
 #include &lt;unistd.h&gt;
  #include &lt;linux/user.h&gt; /* For constants
                                    ORIG_EAX etc */
 int main()
  {
    pid_t child;
     long orig_eax;
     child = fork();
      if(child == 0) {
         ptrace(PTRACE_TRACEME, 0, NULL, NULL);
         execl(\"/bin/ls\", \"ls\", NULL);
     }
      else {
         wait(NULL);
         orig_eax = ptrace(PTRACE_PEEKUSER,
                           child, 4 * ORIG_EAX,
                           NULL);
         printf(\"The child made a \"
                \"system call %ld \", orig_eax);
         ptrace(PTRACE_CONT, child, NULL, NULL);
     }
     return 0;
 }

运行这个程序，将会在输出ls命令的结果的同时，输出:
 
The child made a system call 11
说明：11是execve的系统调用号，这是该程序调用的第一个系统调用。想知道系统调用号的详细内容，察看 /usr/include/asm/unistd.h。 
在以上的示例中，父进程fork出了一个子进程，然后跟踪它。在调用exec函数之前，子进程用PTRACE_TRACEME作为第一个参数调用了 
ptrace函数，它告诉内核：让别人跟踪我吧！然后，在子进程调用了execve()之后，它将控制权交还给父进程。当时父进程正使用wait()函数来等待来自
内核的通知，现在它得到了通知，于是它可以开始察看子进程都作了些什么，比如看看寄存器的值之类。
出现系统调用之后，内核会将eax中的值（此时存的是系统调用号）保存起来，我们可以使用PTRACE_PEEKUSER作为ptrace的第一个参数来读到这个值。
我们察看完系统调用的信息后，可以使用PTRACE_CONT作为ptrace的第一个参数，调用ptrace使子进程继续系统调用的过程。
 
ptrace函数的参数
 
Ptrace有四个参数
long ptrace(enum __ptrace_request request,
            pid_t pid,
            void *addr,
            void *data);
 
第一个参数决定了ptrace的行为与其它参数的使用方法，可取的值有:
PTRACE_ME
PTRACE_PEEKTEXT
PTRACE_PEEKDATA
PTRACE_PEEKUSER
PTRACE_POKETEXT
PTRACE_POKEDATA
PTRACE_POKEUSER
PTRACE_GETREGS
PTRACE_GETFPREGS,
PTRACE_SETREGS
PTRACE_SETFPREGS
PTRACE_CONT
PTRACE_SYSCALL,
PTRACE_SINGLESTEP
PTRACE_DETACH
在下文中将对这些常量的用法进行说明。
 
读取系统调用的参数
 
通过将PTRACE_PEEKUSER作为ptrace 的第一个参数进行调用，可以取得与子进程相关的寄存器值。
 
先看下面这个例子

#include &lt;sys/ptrace.h&gt;
 #include &lt;sys/types.h&gt;
 #include &lt;sys/wait.h&gt;
 #include &lt;unistd.h&gt;
 #include &lt;linux/user.h&gt;
  #include &lt;sys/syscall.h&gt; /* For SYS_write etc */
 
 int main()
  {
     pid_t child;
     long orig_eax, eax;
     long params[3];
     int status;
     int insyscall = 0;
     child = fork();
      if(child == 0) {
         ptrace(PTRACE_TRACEME, 0, NULL, NULL);
         execl(\"/bin/ls\", \"ls\", NULL);
     }
      else {
         while(1) {
           wait(&status);
           if(WIFEXITED(status))
               break;
           orig_eax = ptrace(PTRACE_PEEKUSER,
                      child, 4 * ORIG_EAX, NULL);
            if(orig_eax == SYS_write) {
               if(insyscall == 0) {
                  /* Syscall entry */
                 insyscall = 1;
                 params[0] = ptrace(PTRACE_PEEKUSER,
                                    child, 4 * EBX,
                                    NULL);
                 params[1] = ptrace(PTRACE_PEEKUSER,
                                    child, 4 * ECX,
                                    NULL);
                 params[2] = ptrace(PTRACE_PEEKUSER,
                                    child, 4 * EDX,
                                    NULL);
                 printf(\"Write called with \"
                        \"%ld, %ld, %ld \",
                        params[0], params[1],
                        params[2]);
                 }
            else { /* Syscall exit */
                 eax = ptrace(PTRACE_PEEKUSER,
                              child, 4 * EAX, NULL);
                     printf(\"Write returned \"
                            \"with %ld \", eax);
                     insyscall = 0;
                 }
             }
             ptrace(PTRACE_SYSCALL,
                    child, NULL, NULL);
         }
     }
     return 0;
 }

这个程序的输出是这样的
 
ppadala@linux:~/ptrace &gt; ls
a.out dummy.s ptrace.txt
libgpm.html registers.c syscallparams.c
dummy ptrace.html simple.c
ppadala@linux:~/ptrace &gt; ./a.out
Write called with 1, 1075154944, 48
a.out dummy.s ptrace.txt
Write returned with 48
Write called with 1, 1075154944, 59
libgpm.html registers.c syscallparams.c
Write returned with 59
Write called with 1, 1075154944, 30
dummy ptrace.html simple.c
Write returned with 30
 

以上的例子中我们跟踪了write系统调用，而ls命令的执行将产生三个write系统调用。使用PTRACE_SYSCALL作为ptrace的第一个参数，使内核在子进程做出
系统调用或者准备退出的时候暂停它。这种行为与使用PTRACE_CONT，然后在下一个系统调用/进程退出时暂停它是等价的。
在前一个例子中，我们用PTRACE_PEEKUSER来察看write系统调用的参数。系统调用的返回值会被放入%eax。
wait函数使用status变量来检查子进程是否已退出。它是用来判断子进程是被ptrace暂停掉还是已经运行结束并退出。有一组宏可以通过status的值来判断
进程的状态，比如WIFEXITED等，详情可以察看wait(2) man。 
读取寄存器的值如果你想在系统调用或者进程终止的时候读取它的寄存器，使用前面那个例子的方法是可以的，但是这是笨拙的方法。使用PRACE_GETREGS
作为ptrace的第一个参数来调用，可以只需一次函数调用就取得所有的相关寄存器值。
获得寄存器值得例子如下：

#include &lt;sys/ptrace.h&gt;
 #include &lt;sys/types.h&gt;
 #include &lt;sys/wait.h&gt;
 #include &lt;unistd.h&gt;
 #include &lt;linux/user.h&gt;
 #include &lt;sys/syscall.h&gt;
 
 int main()
  {
     pid_t child;
     long orig_eax, eax;
     long params[3];
     int status;
     int insyscall = 0;
     struct user_regs_struct regs;
     child = fork();
      if(child == 0) {
         ptrace(PTRACE_TRACEME, 0, NULL, NULL);
         execl(\"/bin/ls\", \"ls\", NULL);
     }
      else {
         while(1) {
           wait(&status);
           if(WIFEXITED(status))
               break;
           orig_eax = ptrace(PTRACE_PEEKUSER,
                             child, 4 * ORIG_EAX,
                             NULL);
            if(orig_eax == SYS_write) {
                if(insyscall == 0) {
                   /* Syscall entry */
                  insyscall = 1;
                  ptrace(PTRACE_GETREGS, child,
                         NULL, &regs);
                  printf(\"Write called with \"
                         \"%ld, %ld, %ld \",
                         regs.ebx, regs.ecx,
                         regs.edx);
              }
               else { /* Syscall exit */
                  eax = ptrace(PTRACE_PEEKUSER,
                               child, 4 * EAX,
                               NULL);
                  printf(\"Write returned \"
                         \"with %ld \", eax);
                  insyscall = 0;
              }
           }
           ptrace(PTRACE_SYSCALL, child,
                  NULL, NULL);
        }
    }
    return 0;
 }

这段代码与前面的例子是比较相似的，不同的是它使用了PTRACE_GETREGS。 其中的user_regs_struct结构是在&lt;linux/user.h&gt;中定义的。 
来点好玩的

现在该做点有意思的事情了，我们将要把传给write系统调用的字符串给反转。

#include &lt;sys/ptrace.h&gt;
 #include &lt;sys/types.h&gt;
 #include &lt;sys/wait.h&gt;
 #include &lt;unistd.h&gt;
 #include &lt;linux/user.h&gt;
 #include &lt;sys/syscall.h&gt;
 
 const int long_size = sizeof(long);
 
 void reverse(char *str)
  {
     int i, j;
     char temp;
     for(i = 0, j = strlen(str) - 2;
          i &lt;= j; ++i, --j) {
         temp = str[i];
         str[i] = str[j];
         str[j] = temp;
     }
 }
 
 void getdata(pid_t child, long addr,
              char *str, int len)
  {
     char *laddr;
     int i, j;
      union u {
             long val;
             char chars[long_size];
     }data;
 
     i = 0;
     j = len / long_size;
     laddr = str;
      while(i &lt; j) {
         data.val = ptrace(PTRACE_PEEKDATA,
                           child, addr + i * 4,
                           NULL);
         memcpy(laddr, data.chars, long_size);
         ++i;
         laddr += long_size;
     }
     j = len % long_size;
      if(j != 0) {
         data.val = ptrace(PTRACE_PEEKDATA,
                           child, addr + i * 4,
                           NULL);
         memcpy(laddr, data.chars, j);
     }
     str[len] = '';
 }
 
 void putdata(pid_t child, long addr,
              char *str, int len)
  {
     char *laddr;
     int i, j;
      union u {
             long val;
             char chars[long_size];
     }data;
 
     i = 0;
     j = len / long_size;
     laddr = str;
      while(i &lt; j) {
         memcpy(data.chars, laddr, long_size);
         ptrace(PTRACE_POKEDATA, child,
                addr + i * 4, data.val);
         ++i;
         laddr += long_size;
     }
     j = len % long_size;
      if(j != 0) {
         memcpy(data.chars, laddr, j);
         ptrace(PTRACE_POKEDATA, child,
                addr + i * 4, data.val);
     }
 }
 
 int main()
  {
    pid_t child;
    child = fork();
     if(child == 0) {
       ptrace(PTRACE_TRACEME, 0, NULL, NULL);
       execl(\"/bin/ls\", \"ls\", NULL);
    }
     else {
       long orig_eax;
       long params[3];
       int status;
       char *str, *laddr;
       int toggle = 0;
        while(1) {
          wait(&status);
          if(WIFEXITED(status))
              break;
          orig_eax = ptrace(PTRACE_PEEKUSER,
                            child, 4 * ORIG_EAX,
                            NULL);
           if(orig_eax == SYS_write) {
              if(toggle == 0) {
                toggle = 1;
                params[0] = ptrace(PTRACE_PEEKUSER,
                                   child, 4 * EBX,
                                   NULL);
                params[1] = ptrace(PTRACE_PEEKUSER,
                                   child, 4 * ECX,
                                   NULL);
                params[2] = ptrace(PTRACE_PEEKUSER,
                                   child, 4 * EDX,
                                   NULL);
                str = (char *)calloc((params[2]+1)
                                  * sizeof(char));
                getdata(child, params[1], str,
                        params[2]);
                reverse(str);
                putdata(child, params[1], str,
                        params[2]);
             }
              else {
                toggle = 0;
             }
          }
       ptrace(PTRACE_SYSCALL, child, NULL, NULL);
       }
    }
    return 0;
 }
输出是这样的：
 
ppadala@linux:~/ptrace &gt; ls
a.out dummy.s ptrace.txt
libgpm.html registers.c syscallparams.c
dummy ptrace.html simple.c
ppadala@linux:~/ptrace &gt; ./a.out
txt.ecartp s.ymmud tuo.a
c.sretsiger lmth.mpgbil c.llacys_egnahc
c.elpmis lmth.ecartp ymmud

这个例子中涵盖了前面讨论过的所有知识点，当然还有些新的内容。这里我们用PTRACE_POKEDATA作为第一个参数，以此来改变子进程中的变量值。它以与
PTRACE_PEEKDATA相似的方式工作，当然，它不只是偷窥变量的值了，它可以修改它们。 
单步ptrace 提供了对子进程进行单步的功能。 ptrace(PTRACE_SINGLESTEP, …)
会使内核在子进程的每一条指令执行前先将其阻塞，然后将控制权交给父进程。下面的例子可以查出子进程当前将要执行的指令。为了便于理解，我用汇编写了
这个受控程序，而不是让你为c的库函数到底会作那些系统调用而头痛。以下是被控程序的代码 dummy1.s，使用gcc  –o dummy1 dummy1.s来编译

.data
hello:
    .string \"hello world\n\"
.globl main
main:
    movl \$4, %eax
    movl \$2, %ebx
    movl \$hello, %ecx
    movl \$12, %edx
    int \$0x80
    movl \$1, %eax
    xorl %ebx, %ebx
    int \$0x80
    ret

以下的程序则用来完成单步：
#include &lt;sys/ptrace.h&gt;
 #include &lt;sys/types.h&gt;
 #include &lt;sys/wait.h&gt;
 #include &lt;unistd.h&gt;
 #include &lt;linux/user.h&gt;
 #include &lt;sys/syscall.h&gt;
 int main()
  {
     pid_t child;
     const int long_size = sizeof(long);
     child = fork();
      if(child == 0) {
         ptrace(PTRACE_TRACEME, 0, NULL, NULL);
         execl(\"./dummy1\", \"dummy1\", NULL);
     }
      else {
         int status;
          union u {
             long val;
             char chars[long_size];
         }data;
         struct user_regs_struct regs;
         int start = 0;
         long ins;
          while(1) {
             wait(&status);
             if(WIFEXITED(status))
                 break;
             ptrace(PTRACE_GETREGS,
                    child, NULL, &regs);
              if(start == 1) {
                 ins = ptrace(PTRACE_PEEKTEXT,
                              child, regs.eip,
                              NULL);
                 printf(\"EIP: %lx Instruction \"
                        \"executed: %lx \",
                        regs.eip, ins);
             }
              if(regs.orig_eax == SYS_write) {
                 start = 1;
                 ptrace(PTRACE_SINGLESTEP, child,
                        NULL, NULL);
             }
             else
                 ptrace(PTRACE_SYSCALL, child,
                        NULL, NULL);
         }
     }
     return 0;
 }
程序的输出是这样的：
你可能需要察看Intel的用户手册来了解这些指令代码的意思。
更复杂的单步，比如设置断点，则需要很仔细的设计和更复杂的代码才可以实现。
在第二部分，我们将会看到如何在程序中加入断点，以及将代码插入到已经在运行的程序中
</pre></font>");
echo ("<a name=p002></a><center><font color=#ff0000 size=5>玩转ptrace(二)</font></center>");
echo ("<font color=#0000ff size=3><pre>
by Pradeep Padala
Created 2002-11-01 02:00
翻译: Magic.D
 
在第一部分中我们已经看到ptrace怎么获取子进程的系统调用以及改变系统调用的参数。在这篇文章中，我们将要研究如何在子进程中设置断点和往运行中
的程序里插入代码。实际上调试器就是用这种方法来设置断点和执行调试句柄。与前面一样，这里的所有代码都是针对i386平台的。
附着在进程上
在第一部分钟，我们使用ptrace(PTRACE_TRACEME,…)来跟踪一个子进程，如果你只是想要看进程是怎么进行系统调用和跟踪程序的，这个做法是不错的。
但如果你要对运行中的进程进行调试，则需要使用 ptrace( PTRACE_ATTACH, ….)
当 ptrace( PTRACE_ATTACH, …)在被调用的时候传入了子进程的pid时， 它大体是与ptrace( PTRACE_TRACEME,…)的行为相同的，它会向子进程发送
SIGSTOP信号,于是我们可以察看和修改子进程，然后使用 ptrace( PTRACE_DETACH, …)来使子进程继续运行下去。 
下面是调试程序的一个简单例子

int main()
{
   int i;
    for(i = 0;i &lt; 10; ++i) {
        printf(\"My counter: %d \", i);
        sleep(2);
    }
    return 0;
}

将上面的代码保存为dummy2.c。按下面的方法编译运行：

gcc -o dummy2 dummy2.c
./dummy2 &
 

现在我们可以用下面的代码来附着到dummy2上。

 

#include &lt;sys/ptrace.h&gt;
#include &lt;sys/types.h&gt;
#include &lt;sys/wait.h&gt;
#include &lt;unistd.h&gt;
#include &lt;linux/user.h&gt; /**//* For user_regs_struct
                             etc. */
int main(int argc, char *argv[])
{
    pid_t traced_process;
    struct user_regs_struct regs;
    long ins;
    if(argc != 2) ...{
        printf(\"Usage: %s &lt;pid to be traced&gt; \",
               argv[0], argv[1]);
        exit(1);
    }
    traced_process = atoi(argv[1]);
    ptrace(PTRACE_ATTACH, traced_process,
           NULL, NULL);
    wait(NULL);
    ptrace(PTRACE_GETREGS, traced_process,
           NULL, &regs);
    ins = ptrace(PTRACE_PEEKTEXT, traced_process,
                 regs.eip, NULL);
    printf(\"EIP: %lx Instruction executed: %lx \",
           regs.eip, ins);
    ptrace(PTRACE_DETACH, traced_process,
           NULL, NULL);
    return 0;
}

上面的程序仅仅是附着在子进程上，等待它结束，并测量它的eip( 指令指针)然后释放子进程。 
设置断点 
调试器是怎么设置断点的呢？通常是将当前将要执行的指令替换成trap指令，于是被调试的程序就会在这里停滞，这时调试器就可以察看被调试程序的信息了。
被调试程序恢复运行以后调试器会把原指令再放回来。这里是一个例子：
#include &lt;sys/ptrace.h&gt;
#include &lt;sys/types.h&gt;
#include &lt;sys/wait.h&gt;
#include &lt;unistd.h&gt;
#include &lt;linux/user.h&gt;

const int long_size = sizeof(long);

void getdata(pid_t child, long addr,
             char *str, int len)
{
    char *laddr;
    int i, j;
    union u ...{
            long val;
            char chars[long_size];
    }data;

    i = 0;
    j = len / long_size;
    laddr = str;

    while(i &lt; j) ...{
        data.val = ptrace(PTRACE_PEEKDATA, child,
                          addr + i * 4, NULL);
        memcpy(laddr, data.chars, long_size);
        ++i;
        laddr += long_size;
    }
    j = len % long_size;
    if(j != 0) ...{
        data.val = ptrace(PTRACE_PEEKDATA, child,
                          addr + i * 4, NULL);
        memcpy(laddr, data.chars, j);
    }
    str[len] = '';
}

void putdata(pid_t child, long addr,
             char *str, int len)
{
    char *laddr;
    int i, j;
    union u ...{
            long val;
            char chars[long_size];
    }data;

    i = 0;
    j = len / long_size;
    laddr = str;
    while(i &lt; j) ...{
        memcpy(data.chars, laddr, long_size);
        ptrace(PTRACE_POKEDATA, child,
               addr + i * 4, data.val);
        ++i;
        laddr += long_size;
    }
    j = len % long_size;
    if(j != 0) ...{
        memcpy(data.chars, laddr, j);
        ptrace(PTRACE_POKEDATA, child,
               addr + i * 4, data.val);
    }
}

int main(int argc, char *argv[])
{
    pid_t traced_process;
    struct user_regs_struct regs, newregs;
    long ins;
    /**//* int 0x80, int3 */
    char code[] = ...{0xcd,0x80,0xcc,0};
    char backup[4];
    if(argc != 2) ...{
        printf(\"Usage: %s &lt;pid to be traced&gt; \",
               argv[0], argv[1]);
        exit(1);
    }
    traced_process = atoi(argv[1]);
    ptrace(PTRACE_ATTACH, traced_process,
           NULL, NULL);
    wait(NULL);
    ptrace(PTRACE_GETREGS, traced_process,
           NULL, &regs);
    /**//* Copy instructions into a backup variable */
    getdata(traced_process, regs.eip, backup, 3);
    /**//* Put the breakpoint */
    putdata(traced_process, regs.eip, code, 3);
    /**//* Let the process continue and execute
       the int 3 instruction */
    ptrace(PTRACE_CONT, traced_process, NULL, NULL);
    wait(NULL);
    printf(\"The process stopped, putting back \"
           \"the original instructions \");
    printf(\"Press &lt;enter&gt; to continue \");
    getchar();
    putdata(traced_process, regs.eip, backup, 3);
    /**//* Setting the eip back to the original
       instruction to let the process continue */
    ptrace(PTRACE_SETREGS, traced_process,
           NULL, &regs);
    ptrace(PTRACE_DETACH, traced_process,
           NULL, NULL);
    return 0;

}

上面的程序将把三个byte的内容进行替换以执行trap指令，等被调试进程停滞以后，我们把原指令再替换回来并把eip修改为原来的值。下面的图中演示了指令
的执行过程
 1. 进程停滞后 	 2. 替换入trap指令
 3.断点成功，控制权交给了调试器 	 4. 继续运行，
将原指令替换回来并将eip复原在了解了断点的机制以后，往运行中的程序里面添加指令也不再是难事了，下面的代码会使原程序多出一个”hello world”的
输出这时一个简单的”hello world”程序，当然为了我们的特殊需要作了点修改：
void main()
{
__asm__(\"
         jmp forward
backward:
         popl %esi # Get the address of
                          # hello world string
         movl \$4, %eax # Do write system call
         movl \$2, %ebx
         movl %esi, %ecx
         movl \$12, %edx
         int \$0x80
         int3 # Breakpoint. Here the
                          # program will stop and
                          # give control back to
                          # the parent
forward:
         call backward
         .string \"Hello World\n\"\"
       );
}

使用 gcc –o hello hello.c来编译它。
在backward和forward之间的跳转是为了使程序能够找到”hello world” 字符串的地址。
使用GDB我们可以得到上面那段程序的机器码。启动GDB,然后对程序进行反汇编：

(gdb) disassemble main
Dump of assembler code for function main:
0x80483e0 &lt;main&gt;: push %ebp
0x80483e1 &lt;main+1&gt;: mov %esp,%ebp
0x80483e3 &lt;main+3&gt;: jmp 0x80483fa &lt;forward&gt;
End of assembler dump.
(gdb) disassemble forward
Dump of assembler code for function forward:
0x80483fa &lt;forward&gt;: call 0x80483e5 &lt;backward&gt;
0x80483ff &lt;forward+5&gt;: dec %eax
0x8048400 &lt;forward+6&gt;: gs
0x8048401 &lt;forward+7&gt;: insb (%dx),%es:(%edi)
0x8048402 &lt;forward+8&gt;: insb (%dx),%es:(%edi)
0x8048403 &lt;forward+9&gt;: outsl %ds:(%esi),(%dx)
0x8048404 &lt;forward+10&gt;: and %dl,0x6f(%edi)
0x8048407 &lt;forward+13&gt;: jb 0x8048475
0x8048409 &lt;forward+15&gt;: or %fs:(%eax),%al
0x804840c &lt;forward+18&gt;: mov %ebp,%esp
0x804840e &lt;forward+20&gt;: pop %ebp
0x804840f &lt;forward+21&gt;: ret
End of assembler dump.
(gdb) disassemble backward
Dump of assembler code for function backward:
0x80483e5 &lt;backward&gt;: pop %esi
0x80483e6 &lt;backward+1&gt;: mov \$0x4,%eax
0x80483eb &lt;backward+6&gt;: mov \$0x2,%ebx
0x80483f0 &lt;backward+11&gt;: mov %esi,%ecx
0x80483f2 &lt;backward+13&gt;: mov \$0xc,%edx
0x80483f7 &lt;backward+18&gt;: int \$0x80
0x80483f9 &lt;backward+20&gt;: int3
End of assembler dump.

我们需要使用从man+3到backward+20之间的字节码，总共41字节。使用GDB中的x命令来察看机器码。

 

(gdb) x/40bx main+3
&lt;main+3&gt;: eb 15 5e b8 04 00 00 00
&lt;backward+6&gt;: bb 02 00 00 00 89 f1 ba
&lt;backward+14&gt;: 0c 00 00 00 cd 80 cc
&lt;forward+1&gt;: e6 ff ff ff 48 65 6c 6c
&lt;forward+9&gt;: 6f 20 57 6f 72 6c 64 0a

已经有了我们想要执行的指令，还等什么呢？只管把它们根前面那个例子一样插入到被调试程序中去！ 

代码：

int main(int argc, char *argv[])
{
pid_t traced_process;
    struct user_regs_struct regs, newregs;
    long ins;
    int len = 41;
    char insertcode[] =
        \"\\xeb\\x15\\x5e\\xb8\\x04\\x00\"
        \"\\x00\\x00\\xbb\\x02\\x00\\x00\\x00\\x89\\xf1\\xba\"
        \"\\x0c\\x00\\x00\\x00\\xcd\\x80\\xcc\\xe8\\xe6\\xff\"
        \"\\xff\\xff\\x48\\x65\\x6c\\x6c\\x6f\\x20\\x57\\x6f\"
        \"\\x72\\x6c\\x64\\x0a\\x00\";
    char backup[len];
    if(argc != 2) ...{
        printf(\"Usage: %s &lt;pid to be traced&gt; \",
               argv[0], argv[1]);
        exit(1);
    }
    traced_process = atoi(argv[1]);
    ptrace(PTRACE_ATTACH, traced_process,
           NULL, NULL);
    wait(NULL);
    ptrace(PTRACE_GETREGS, traced_process,
           NULL, &regs);
    getdata(traced_process, regs.eip, backup, len);
    putdata(traced_process, regs.eip,
            insertcode, len);
    ptrace(PTRACE_SETREGS, traced_process,
           NULL, &regs);
    ptrace(PTRACE_CONT, traced_process,
           NULL, NULL);
    wait(NULL);
    printf(\"The process stopped, Putting back \"
           \"the original instructions \");
    putdata(traced_process, regs.eip, backup, len);
    ptrace(PTRACE_SETREGS, traced_process,
           NULL, &regs);
    printf(\"Letting it continue with \"
           \"original flow \");
    ptrace(PTRACE_DETACH, traced_process,
           NULL, NULL);
    return 0;
}

将代码插入到自由空间在前面的例子中我们将代码直接插入到了正在执行的指令流中，然而，调试器可能会被这种行为弄糊涂，所以我们决定把指令插入到进
程中的自由空间中去。通过察看/proc/pid/maps可以知道这个进程中自由空间的分布。接下来这个函数可以找到这个内存映射的起始点：
long freespaceaddr(pid_t pid)
{
    FILE *fp;
    char filename[30];
    char line[85];
    long addr;
    char str[20];
    sprintf(filename, \"/proc/%d/maps\", pid);
    fp = fopen(filename, \"r\");
    if(fp == NULL)
        exit(1);
    while(fgets(line, 85, fp) != NULL) ...{
        sscanf(line, \"%lx-%*lx %*s %*s %s\", &addr,
               str, str, str, str);
        if(strcmp(str, \"00:00\") == 0)
            break;
    }
    fclose(fp);
    return addr;
}


在/proc/pid/maps中的每一行都对应了进程中一段内存区域。主函数的代码如下：


int main(int argc, char *argv[])
{
    pid_t traced_process;
    struct user_regs_struct oldregs, regs;
    long ins;
    int len = 41;
    char insertcode[] =
        \"\\xeb\\x15\\x5e\\xb8\\x04\\x00\"
        \"\\x00\\x00\\xbb\\x02\\x00\\x00\\x00\\x89\\xf1\\xba\"
        \"\\x0c\\x00\\x00\\x00\\xcd\\x80\\xcc\\xe8\\xe6\\xff\"
        \"\\xff\\xff\\x48\\x65\\x6c\\x6c\\x6f\\x20\\x57\\x6f\"
        \"\\x72\\x6c\\x64\\x0a\\x00\";
    char backup[len];
    long addr;
    if(argc != 2) ...{
        printf(\"Usage: %s &lt;pid to be traced&gt; \",
               argv[0], argv[1]);
        exit(1);
    }
    traced_process = atoi(argv[1]);
    ptrace(PTRACE_ATTACH, traced_process,
           NULL, NULL);
    wait(NULL);
    ptrace(PTRACE_GETREGS, traced_process,
           NULL, &regs);
    addr = freespaceaddr(traced_process);
    getdata(traced_process, addr, backup, len);
    putdata(traced_process, addr, insertcode, len);
    memcpy(&oldregs, &regs, sizeof(regs));
    regs.eip = addr;
    ptrace(PTRACE_SETREGS, traced_process,
           NULL, &regs);
    ptrace(PTRACE_CONT, traced_process,
           NULL, NULL);
    wait(NULL);
    printf(\"The process stopped, Putting back \"
           \"the original instructions \");
    putdata(traced_process, addr, backup, len);
    ptrace(PTRACE_SETREGS, traced_process,
           NULL, &oldregs);
    printf(\"Letting it continue with \"
           \"original flow \");
    ptrace(PTRACE_DETACH, traced_process,
           NULL, NULL);
    return 0;
}

ptrace的幕后工作

那么，在使用ptrace的时候，内核里发生了声么呢？这里有一段简要的说明：当一个进程调用了 ptrace( PTRACE_TRACEME,…)之后，内核为该进
程设置了一个标记，注明该进程将被跟踪。内核中的相关原代码如下：

Source: arch/i386/kernel/ptrace.c
if (request == PTRACE_TRACEME) {
    /* are we already being traced? */
    if (current-&gt;ptrace & PT_PTRACED)
        goto out;
    /* set the ptrace bit in the process flags. */
    current-&gt;ptrace |= PT_PTRACED;
    ret = 0;
    goto out;
}

一次系统调用完成之后，内核察看那个标记，然后执行trace系统调用（如果这个进程正处于被跟踪状态的话）。其汇编的细节可以在
 arh/i386/kernel/entry.S中找到。现在让我们来看看这个sys_trace()函数（位于 arch/i386/kernel/ptrace.c）。它停止子进程，然后发送一个信号
给父进程，告诉它子进程已经停滞，这个信号会激活正处于等待状态的父进程，让父进程进行相关处理。父进程在完成相关操作以后就调用
ptrace( PTRACE_CONT, …)或者 ptrace( PTRACE_SYSCALL, …), 这将唤醒子进程，内核此时所作的是调用一个叫wake_up_process()
的进程调度函数。其他的一些系统架构可能会通过发送SIGCHLD给子进程来达到这个目的。 
小结：
ptrace函数可能会让人们觉得很奇特，因为它居然可以检测和修改一个运行中的程序。这种技术主要是在调试器和系统调用跟踪程序中使用。它使程序
员可以在用户级别做更多有意思的事情。已经有过很多在用户级别下扩展操作系统得尝试，比如UFO,一个用户级别的文件系统扩展，它使用ptrace来实
现一些安全机制。
作者: Pradeep Padala,
</pre></font>");
echo ("<a name=p003></a><center><font color=#ff0000 size=5>关于O_EXCL的说明</font></center>");
echo ("<pre>
	在使用open函数建立或打开文件时旗标O_EXCL经常于O_CREAT一起配合使用。但是如果我们仅仅需要打开某个文件并且在该文件
不存在的时候才新建立的时候，就不要使用O_EXCL旗标了，因为他会先于文件操作前检查文件是否存在，只有在文件不存在的时候才能使
本次的open操作成功。
</pre>");
echo ("<a name=p004></a><center><font color=#ffff00 size=5>mkdir函数应用</font></center>");
echo ("<pre>
原型：int mkdir (const char *filename, mode_t mode)

返回0表示成功，返回-1表述出错。使用该函数需要包含头文件sys/stat.h
mode 表示新目录的权限，可以取以下值：

S_IRUSR
S_IREAD
Read permission bit for the owner of the file. On many systems this bit is 0400. S_IREAD is an obsolete synonym provided for BSD compatibility.

S_IWUSR
S_IWRITE
Write permission bit for the owner of the file. Usually 0200. S_IWRITE is an obsolete synonym provided for BSD compatibility.

S_IXUSR
S_IEXEC
Execute (for ordinary files) or search (for directories) permission bit for the owner of the file. Usually 0100. S_IEXEC is an obsolete synonym provided for BSD compatibility.

S_IRWXU
This is equivalent to (S_IRUSR | S_IWUSR | S_IXUSR).

S_IRGRP
Read permission bit for the group owner of the file. Usually 040.

S_IWGRP
Write permission bit for the group owner of the file. Usually 020.

S_IXGRP
Execute or search permission bit for the group owner of the file. Usually 010.

S_IRWXG
This is equivalent to (S_IRGRP | S_IWGRP | S_IXGRP).

S_IROTH
Read permission bit for other users. Usually 04.

S_IWOTH
Write permission bit for other users. Usually 02.

S_IXOTH
Execute or search permission bit for other users. Usually 01.

S_IRWXO
This is equivalent to (S_IROTH | S_IWOTH | S_IXOTH).

S_ISUID
This is the set-user-ID on execute bit, usually 04000. See How Change Persona.

S_ISGID
This is the set-group-ID on execute bit, usually 02000. See How Change Persona.

S_ISVTX
This is the sticky bit, usually 01000.
</pre>");
echo ("<a name=p005></a><center><font color=#ff0000 size=5>让printf丰富多彩</font></center>");
echo ("<font color=blue><pre>
看个例子:
int main(int argc,char **argv)
{
        printf(\"\\033[44;37;5m hello world\\033[0m\\n\");
        return 0;
}
该段代码编译运行后显示的是蓝色背景，白色闪烁字的效果。
解释下特殊字符的使用及定义：
“\\033”引导非常规字符序列。“m”意味着设置属性然后结束非常规字符序列
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
world后面的\\033[0m为恢复你默认设定，不然你的shell在运行该代码后，将修改你默认的设定
</pre></font>");
?>



