<?php
/*山东汇力监控平台
 本文件定义本项目所用的各类全局变量


 	2016-4-17  田勇 alias tybitsfox
 */
//session_start();
?>
<?php
//版本信息和路径
	$tybitsfox['www_path']		=	"/var/www";
	$tybitsfox['version']		=	"0.0.0.1";
	$tybitsfox['corename']		=	"tiny";
//数据库信息：
	$database['host']			=	"localhost";
	$database['type']			=	"MYSQL";
	$database['user']			=	"sdhl";
	$database['pwd']			=	"sdhl2016";
//将来这个应该是动态生成的：	
	$database['dbname']			=	"env2016";
//附加的数据库变量
	$database['logstr']			=	"select * from auth";
	$database['logtab']			=	"auth";	
//定义主页的主菜单值
	$menuitem[0]			=	"废水";
	$menuitem[1]			=	"废气";
	$menuitem[2]			=	"污水厂";
	$menuitem[3]			=	"废水明晰";
	$menuitem[4]			=	"废气明晰";
	$menuitem[5]			=	"污水厂明晰";
	$menucount				=	6;
	$menulnk[0]				=	"test1.php";
	$menulnk[1]				=	"test1.php";
	$menulnk[2]				=	"test1.php";
	$menulnk[3]				=	"test1.php";
	$menulnk[4]				=	"test1.php";
	$menulnk[5]				=	"test1.php";
//SESSION
//	$_SESSION['leftcnt']	=	4;	
?>
