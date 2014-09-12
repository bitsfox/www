<?php
//header("Content-type:text/html;charset=utf-8");
/*这里定义全部的全局变量*/
$tybitsfox['www_path']		=	"/var/www";
$tybitsfox['version']		=	"0.00.1";
$tybitsfox['corename']		=	"tiny";

$database['user']			=	"root";
$database['passwd']			=	"taenv2014";
$database['host']			=	"localhost";
$database['dbname']			=	"ty004";
$database['dbtype']			=	"postgresql";
//表名查询字符串。
$database['contb']			=	"select tablename from pg_tables where tablename not like 'pg%' and tablename not like 'sql_%'";
//表结构查询字符串
$database['tbname']			=	"";
$database['struct1']		=	"select a.attnum,a.attname,t.typname,a.attlen,a.atttypmod,a.attnotnull from pg_attribute a,pg_class c,pg_type t  where c.relname = '";
$database['struct2']		=	"' and a.attnum>0 and a.attrelid = c.oid and a.atttypid = t.oid;";
//记录的分页查询字符串
$database['limit']			=	"select * from basemsg limit 10 offset 0";
//取得记录的条数
$database['count']			=	"select count(*) from basemsg";
$curpage					=	"index.php?id=";
$menuitem[0]				=	"主页";
$menuitem[1]				=	"博客";
$menuitem[2]				=	"论坛";
$menuitem[3]				=	"日志";
$menuitem[4]				=	"数据库";
//下面添加的是数据库操作的项目
$dmenuitem[0]				=	"查询数据库";
$dmenuitem[1]				=	"创建表格";
$dmenuitem[2]				=	"添加记录";
$dmenuitem[3]				=	"修改记录";
$dmenuitem[4]				=	"删除记录";
for($i=0;$i<5;$i++)
{
	$menulink[$i]	=	$curpage.base64_encode($menuitem[$i])."&user=".base64_encode("root");
	$dmenulink[$i]	=	$curpage.base64_encode($dmenuitem[$i])."&user=".base64_encode("root");
}
$menulink[0]		=	"index.php";
$sdmenu[0]					=	"点击查询表名";
$sdmenulink[0]				=	$dmenulink[0]."&action=".base64_encode("gettable");
$sdmenu[1]					=	"查看结构";
$sdmenulink[1]				=	$sdmenulink[0]."&stru=".base64_encode($sdmenu[1])."&val=";
$sdmenu[2]					=	"查看记录";
$sdmenulink[2]				=	$sdmenulink[0]."&result=".base64_encode($sdmenu[2])."&val=";
//下面定义的变量用于确定执行过程。
$tb_disp_num["table"]		=	1;//数据库表名称页号
$tb_disp_num["struc"]		=	1;//表结构页号
$tb_disp_num["result"]		=	1;//表记录页号
$tb_disp_num["name"]		=	"";//选择的表名
$tb_disp_num["conn"]		=	"";//记录查询字符串

?>



