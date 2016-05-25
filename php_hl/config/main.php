<?php
/*山东汇力监控平台
 本文件定义本项目所用的各类全局变量


 	2016-4-17  田勇 alias tybitsfox
 */
?>
<?php
	define("SDHL_GBL","sdhl_2016");
//版本信息和路径
	$tybitsfox['www_path']		=	"/var/www";
	$tybitsfox['version']		=	"0.0.0.1";
	$tybitsfox['corename']		=	"tiny";
//山东汇力公司污染源监控平台登录
	$tybitsfox['logmsg']		=	"山东汇力公司污染源监控平台登录";
//山东汇力公司污染源监控平台	
	$tybitsfox['title']			=	"山东汇力公司污染源监控平台"; 
//山东汇力公司污染源监控用户注册
	$tybitsfox['regmsg']		=	"山东汇力公司污染源监控用户注册";	
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
	$database['regstr']			=	"insert into auth(user,pwd) values('%s','%s')";
//定义主页的主菜单值
	$menuitem[0]			=	"废水";
	$menuitem[1]			=	"废气";
	$menuitem[2]			=	"污水厂";
	$menuitem[3]			=	"废水明晰";
	$menuitem[4]			=	"废气明晰";
	$menuitem[5]			=	"污水厂明晰";
	$menulnk[0]				=	"index.php?pgcnt=".base64_encode("template/01/m01.html");
	$menulnk[1]				=	"index.php?pgcnt=".base64_encode("template/01/m02.html");
	$menulnk[2]				=	"index.php?pgcnt=".base64_encode("template/01/m03.html");
	$menulnk[3]				=	"index.php?pgcnt=".base64_encode("template/01/m04.html");
	$menulnk[4]				=	"index.php?pgcnt=".base64_encode("template/01/m05.html");
	$menulnk[5]				=	"index.php?pgcnt=".base64_encode("template/01/m06.html");
//
	$arry					=	array();
//下面的数组用于绘制图形	
	$gx						=	array();
	$gy						=	array();
	$gdata					=	array();
	$gsc					=	0;
	$scr_width				=	690;
	$scr_height				=	470; 
	$yway_cnt				=	6;		//纵坐标的刻度个数

/////////////////下面添加的用于按年度访问不同数据库服务器上的数据
	$DB_ADDR_TY				=	array('2016'=>'127.0.0.1','2017'=>'127.0.0.1');
	$DB_PORT_TY				=	array('2016'=>3306,'2017'=>3306);
	$DB_NAME_TY				=	array('2016'=>'env2016','2017'=>'env2017');
	$DB_USER_TY				=	"sdhl";
	$DB_PWD_TY				=	"sdhl2016";



?>
