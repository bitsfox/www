<?php
/*山东汇力监控平台
 本文件定义本项目所用的各类全局变量


 	2016-4-17  田勇 alias tybitsfox
 */
//2017-1-1添加session的状态判断,避免log中的错误提示
if(session_status() != PHP_SESSION_ACTIVE)
	session_start();
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"gis_hb");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."gis_hb/";
	define("FULL_PATH",$s2);
}
//确保包含了全局变量的定义文件
$str11=constant("FULL_PATH")."config/setup.php";
require_once($str11);
?>
<?php
	define("SDHL_GBL","sdhl_2016");
//版本信息和路径
	$tybitsfox['www_path']		=	"/var/www";
	$tybitsfox['version']		=	"0.0.0.1";
	$tybitsfox['corename']		=	"tiny";
//山东汇力公司污染源监控平台登录
	$tybitsfox['logmsg']		=	"泰安市土壤环境信息系统登录";
//山东汇力公司污染源监控平台	
	$tybitsfox['title']			=	"泰安市土壤环境信息系统"; 
//山东汇力公司污染源监控用户注册
	$tybitsfox['regmsg']		=	"泰安市土壤环境信息系统用户注册";	
//数据库信息：
	$database['host']			=	"localhost";
	$database['type']			=	"MYSQL";
	$database['user']			=	"sdhl";
	$database['pwd']			=	"sdhl2016";
//将来这个应该是动态生成的：	
	$database['dbname']			=	"gis_hb";
//附加的数据库变量
	$database['logstr']			=	"select * from auth";
	$database['logtab']			=	"auth";
	$database['regstr']			=	"insert into auth(user,pwd) values('%s','%s')";
//定义主页的主菜单值
	$menuitem[0]			=	"点位总览";
	$menuitem[1]			=	"点位详细";
	$menuitem[2]			=	"监测数据";
//	$menuitem[3]			=	"废水明晰";
//	$menuitem[4]			=	"废气明晰";
//	$menuitem[5]			=	"污水厂明晰";
	$menulnk[0]				=	"index.php?pgcnt=".base64_encode("template/01/m01.html");
	$menulnk[1]				=	"index.php?pgcnt=".base64_encode("template/01/m02.html");
	$menulnk[2]				=	"index.php?pgcnt=".base64_encode("template/01/m03.html");
//	$menulnk[3]				=	"index.php?pgcnt=".base64_encode("template/01/m04.html");
//	$menulnk[4]				=	"index.php?pgcnt=".base64_encode("template/01/m05.html");
//	$menulnk[5]				=	"index.php?pgcnt=".base64_encode("template/01/m06.html");
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
//	$DB_ADDR_TY				=	array('2016'=>'127.0.0.1','2017'=>'127.0.0.1');
//	$DB_PORT_TY				=	array('2016'=>3306,'2017'=>3306);
//	$DB_NAME_TY				=	array('2016'=>'env2016','2017'=>'env2017');
//include_once("./config/setup.php");
	$DB_USER_TY				=	"sdhl";
	$DB_PWD_TY				=	"sdhl2016";
/////////////////废水和污水厂////////////////////////////////////////////
	$FS_HEADER				=	"<table width=97%% class='imagetable'><tr><th width=10%% rowspan=2 align=center>编号</th>
								 <th width=20%% rowspan=2 align=center>时间</th><th width=20%% colspan=2 align=center>COD</th>
								 <th width=20%% colspan=2 align=center>氨氮</th><th width=30%% colspan=3 align=center>流量</th></tr><tr>
								 <th width=10%% align=center>监测值</th><th width=10%% align=center>标准值</th>
								 <th width=10%% align=center>监测值</th><th width=10%% align=center>标准值</th>
								 <th width=10%% align=center>瞬时流量</th><th width=10%% align=center>间隔流量</th>
								 <th width=10%% align=center>累计流量</th></tr>";
	$FS_BODY_1				=	"<tr><td width=10%% >%d</td><td width=20%% >%s</td>";
	$FS_BODY_RED			=	"<td width=10%% id='tdid'>%0.2f</td><td width=10%% >%0.2f</td>";
	$FS_BODY_NOR			=	"<td width=10%% >%0.2f</td><td width=10%% >%0.2f</td>";
	$FS_BODY_LL				=	"<td width=10%% >%u</td><td width=10%% >%u</td><td width=10%% >%u</td></tr>";	
	$FS_HEADER_END			=	"</table>";
////////////////////废气//////////////////////////////////////
	$FQ_HEADER				=	"<table width=97%% class='imagetable'><tr><th width=6%% rowspan=2 align=center>编号</th>
								<th width=20%% rowspan=2 align=center>时间</th><th width=16%% colspan=2 align=center>SO2</th>
								<th width=16%% colspan=2 align=center>NOx</th><th width=16%% colspan=2 align=center>烟尘</th>
								<th width=10%% rowspan=2 align=center>氧量</th><th width=16%% rowspan=2 align=center>废气排放量</th></tr><tr>
								<th width=8%% align=center>监测值</th><th width=8%% align=center>标准值</th>
								<th width=8%% align=center>监测值</th><th width=8%% align=center>标准值</th>
								<th width=8%% align=center>监测值</th><th width=8%% align=center>标准值</th></tr>";
	$FQ_BODY_1				=	"<tr><td width=5%% >%d</td><td width=20%% >%s</td>";
	$FQ_BODY_RED			=	"<td width=8%% id='tdid'>%0.2f</td><td width=8%% >%0.2f</td>";
	$FQ_BODY_NOR			=	"<td width=8%% >%0.2f</td><td width=8%% >%0.2f</td>";
	$FQ_BODY_LL				=	"<td width=10%% >%0.2f</td><td width=16%% >%u</td></tr>";
	$FQ_HEADER_END			=	"</table>";
////////////////////废水和污水厂实时/////////////////////////////////////////////
	$FSS_HEADER				=	"<table width=97%% class='imagetable'><tr><th width=5%% rowspan=2 align=center>编号</th>
								 <th width=15%% rowspan=2 align=center>站点名称</th><th width=10%% rowspan=2 align=center>上传时间</th>
								 <th width=20%% colspan=2 align=center>COD</th><th width=20%% colspan=2 align=center>氨氮</th>
								 <th width=30%% colspan=3 align=center>流量</th></tr><tr>
								 <th width=10%% align=center>监测值</th><th width=10%% align=center>标准值</th>
								 <th width=10%% align=center>监测值</th><th width=10%% align=center>标准值</th>
								 <th width=10%% align=center>瞬时流量</th><th width=10%% align=center>间隔流量</th>
								 <th width=10%% align=center>累计流量</th></tr>";
	$FSS_BODY_1				=	"<tr><td width=5%% >%d</td><td width=15%% >%s</td><td width=10%% >%s</td>";
	$FSS_BODY_RED			=	"<td width=10%% id='tdid'>%s</td><td width=10%% >%s</td>";
	$FSS_BODY_NOR			=	"<td width=10%% >%s</td><td width=10%% >%s</td>";
	$FSS_BODY_LL			=	"<td width=10%% >%s</td><td width=10%% >%s</td><td width=10%% >%s</td></tr>";	
	$FSS_HEADER_END			=	"</table>";
/////////////////////废气实时/////////////////////////////////////////////////////////
	$FQS_HEADER				=	"<table width=97%% class='imagetable'><tr><th width=5%% rowspan=2 align=center>编号</th>
								<th width=19%% rowspan=2 align=center>站点名称</th><th width=10%% rowspan=2 align=center>上传时间</th>
								<th width=16%% colspan=2 align=center>SO2</th>
								<th width=16%% colspan=2 align=center>NOx</th><th width=16%% colspan=2 align=center>烟尘</th>
								<th width=8%% rowspan=2 align=center>氧量</th><th width=10%% rowspan=2 align=center>废气排放量</th></tr><tr>
								<th width=8%% align=center>监测值</th><th width=8%% align=center>标准值</th>
								<th width=8%% align=center>监测值</th><th width=8%% align=center>标准值</th>
								<th width=8%% align=center>监测值</th><th width=8%% align=center>标准值</th></tr>";
	$FQS_BODY_1				=	"<tr><td width=5%% >%d</td><td width=19%% >%s</td><td width=10%% >%s</td>";
	$FQS_BODY_RED			=	"<td width=8%% id='tdid'>%s</td><td width=8%% >%s</td>";
	$FQS_BODY_NOR			=	"<td width=8%% >%s</td><td width=8%% >%s</td>";
	$FQS_BODY_LL			=	"<td width=8%% >%s</td><td width=10%% >%s</td></tr>";
	$FQS_HEADER_END			=	"</table>";
//////////////////////////////2016-12-19添加无效值的定义/////////////////////////////
	define("IGN_VAL",-100.11);	
	$WUXIAO					=	"无效值";
//////////////////////////////2017-8-4添加，土壤监测gis系统//////////////////////////
	$GIS_DIV				=	"<div id='allmap'></div><br><div id='clear_id'></div>";
	$GIS_BEG_SCRIPT			=	"<script type='text/javascript'>";
	$GIS_MAP_MSG1			=	"var map = new BMap.Map('allmap');map.centerAndZoom('%s', 10);map.addControl(new BMap.MapTypeControl());";
	$GIS_MAP_MSG2			=	"map.setCurrentCity('泰安');map.enableScrollWheelZoom(true);";
	$GIS_MAP_MARKER			=	"var marker = new BMap.Marker(new BMap.Point(%s,%s));map.addOverlay(marker);";
	$GIS_END_SCRIPT			=	"</script>";	
////////////////////////////////////////////////
	$GIS_CONTENT_IMAGE		=	"var content = \"<div style='margin:0;line-height:20px;padding:2px;'><img src='%s' alt='' style='float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;'/>点位名称：%s<br>点位代码：<font color=red>%s</font><br>经度：<font color=blue>%0.6f</font><br>纬度：<font color=blue>%0.6f</font></div>\";";
	$GIS_CONTENT_OPT		=	"var opts = {width:300,height:110,title:'%s',enableMessage:true};";
	$GIS_CONTENT_FUNCH		=	"function addClickHandler(content,marker){marker.addEventListener('click',function(e){openInfo(content,e)});};";
	$GIS_CONTENT_FUNCL		=	"function openInfo(content,e){var p = e.target;var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);var infoWindow = new BMap.InfoWindow(content,opts);map.openInfoWindow(infoWindow,point);};";
	$GIS_CONTENT_VVV		=	"var marker = new BMap.Marker(new BMap.Point(%0.6f,%0.6f));map.addOverlay(marker);addClickHandler(content,marker);";
	$GIS_HEADER				=	"<center><table width=97%% class='imagetable'><tr><th width=10%% align=center>项目名称</th><th width=40%% align=center>项目数据</th><th width=10%% align=center>项目名称</th><th width=40%% align=center>项目数据</th></tr>";
	$GIS_BODY1				=	"<tr><td width=10%%>%s</td><td width=40%%>%s</td><td width=10%%>%s</td><td width=40%%>%s</td></tr>";
	$GIS_HEADER_END			=	"</table></center>";	
?>








