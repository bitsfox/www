<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
body{background-color:white;font-family:Arial, Helvetica, sans-serif;font-size:12px;text-align:center}
.align-center{
	margin:10 auto;		/* 居中 这个是必须的，，其它的属性非必须 */
	width:200px;		/* 给个宽度 顶到浏览器的两边就看不出居中效果了 */
	background:white;		/* 背景色 */
	text-align:center; 	/* 文字等内容居中 #292929 */
	font-size:12px;
}
</style>
<!--一个圆角的页数按钮css-->
<style type="text/css">
*{margin:0; padding:0;}
body{padding:20px; text-align:center;}
.cutpage{font-size:12px; font-family:Tahoma;}
.cutpage a{display:inline-block; background:url(./13255922330.png) left top no-repeat; height:17px; padding-left:5px; line-height:17px; text-decoration:none; margin:3px 3px 3px 0; vertical-align:middle;}
.cutpage a span{ background:url(./13255922330.png) right top no-repeat; padding-right:5px; display:inline-block; cursor:pointer; height:17px; line-height:17px;}

.cutpage a.current{background:url(./13255922330.png) left -17px no-repeat;}
.cutpage a.current span{background:url(./13255922330.png) right -17px no-repeat;}
.cutpage a:link,.cutpage a:visited{color:#999;}
.cutpage a:hover{background-position:left -17px; color:#fff;}
.cutpage a.current:hover{color:#fff;}
.cutpage a:hover span{background-position:right -17px;}
.cutpage a.current:link,.cutpage a.current:visited{color:#fff;}
</style>
<!--一个指针移动，显示隐藏链接的css-->
<style>
* { padding:0; margin:0; font-family:Arial, Helvetica, sans-serif; list-style:none; }
a { color:#000; text-decoration:none }
a:hover { color:#03F; text-decoration: underline; }
.aaaa { width:100%; border:0px ; margin:0px auto; padding:0px; font-size:12px; background:white}
.box-163css { width:200px; border:0px solid #ccc; margin:-5px auto; padding:10px; }
.box-163css li { height:25px; line-height:25px; font-size:12px; border-bottom:1px solid #eee; padding:0 5px; }
.box-163css li span { float:right; display:none }
.box-163css li span a { color:#999; }
</style>
<!--弹出菜单-->
<style type="text/css">
/* common styling */
/* set up the overall width of the menu div, the font and the margins */
.menu {
font-family: arial, sans-serif; 
width:850px; 
margin:0; 
margin:5px 0;
}
/* remove the bullets and set the margin and padding to zero for the unordered list */
.menu ul {
padding:0; 
margin:0;
list-style-type: none;
}
/* float the list so that the items are in a line and their position relative so that the drop down list will appear in the right place underneath each list item */
.menu ul li {
float:left; 
position:relative;
}
/* style the links to be 104px wide by 30px high with a top and right border 1px solid white. Set the background color and the font size. */
.menu ul li a, .menu ul li a:visited {
display:block; 
text-align:center; 
text-decoration:none; 
width:124px; 
height:27px; 
color:#000; 
border:1px solid #fff;
border-width:1px 1px 0 0;
background:#c9c9a7; 
line-height:27px; 
font-size:11px;
}
/* make the dropdown ul invisible */
.menu ul li ul {
display: none;
}
/* specific to non IE browsers */
/* set the background and foreground color of the main menu li on hover */
.menu ul li:hover a {
color:#fff; 
background:#b3ab79;
}
/* make the sub menu ul visible and position it beneath the main menu list item */
.menu ul li:hover ul {
display:block; 
position:absolute; 
top:28px; 
left:0; 
width:125px;
}
/* style the background and foreground color of the submenu links */
.menu ul li:hover ul li a {
display:block; 
background:#faeec7; 
color:#000;
}
/* style the background and forground colors of the links on hover */
.menu ul li:hover ul li a:hover {
background:#dfc184; 
color:#000;
}
</style>
<!--下拉菜单的js-->
<script type="text/javascript" src="./jquery.min.js"></script>
<!--显示隐藏链接的函数-->
<script type="text/javascript">
/*function bnb2()
{$(this).find("span").hide();}
function bnb1()
{$(this).find("span").show();}
function bnb()
{
	$(".box-163css li").hover(bnb1(),bnb2());
}
$(bnb());*/
$(function(){
	$(".box-163css li").hover(function(){
		$(this).find("span").show();
	},function(){
		$(this).find("span").hide();
	});
});
</script>
<!--显示时间的函数-->
 <script language=Javascript> 
   function time(){
	       //获得显示时间的div
	       t_div = document.getElementById('showtime');
		      var now=new Date()
				      //替换div内容 
				     t_div.innerHTML = "现在是"+now.getFullYear()
					     +"年"+(now.getMonth()+1)+"月"+now.getDate()
						     +"日"+now.getHours()+"时"+now.getMinutes()
							     +"分"+now.getSeconds()+"秒";
			      //等待一秒钟后调用time方法，由于settimeout在time方法内，所以可以无限调用
			     setTimeout(time,1000);
				   }
</script>
<link type="text/css" href="css/lrtk.css" rel="stylesheet" />
<link type="text/css" href="css/animation.css" rel="stylesheet" />


<?php
session_start();
if(isset($_SESSION["loguser"]) && isset($_SESSION["logpwd"]))
{}
else
{die("hi guys,you died now!!");}
?>
<body onload="time()"><a name=a01></a>
<form name="form1" method="post" action="main01.php">
<table class="aaaa"><tr><td width=70% align=left valign=top>
<div class="menu">
<ul>
<li><a class="hide" href="#a01">查看视频</a>
    <ul>
    <li><a href="#a01" title="按检测站房分类查看">按站点查看</a></li>
    <li><a href="#a01" title="按日期顺序查看">按日期查看</a></li>
    <li><a href="#a01" title="查看已确认作弊的视频">重点视频</a></li>
    </ul>
</li>
<li><a class="hide" href="#a02">查看图片</a>
    <ul>
    <li><a href="#a01" title="按站点查看视频截图">按站点查看截图</a></li>
    <li><a href="#a01" title="按日期查看视频截图">按日期查看截图</a></li>
    <li><a href="#a01" title="查看确认作弊的视频截图">重点图片</a></li>
    </ul>
</li>
<li><a class="hide" href="#a01">门禁错误记录</a>
    <ul>
    <li><a href="#a01" title="查看系统错误">系统错误</a></li>
    <li><a href="#a01" title="查看现场端错误">现场端错误</a></li>
    <li><a href="#a01" title="添加错误记录">添加记录</a></li>
    <li><a href="#a01" title="查看一般警告">警告记录</a></li>
    </ul>
</li>
<li><a class="hide" href="#a01">交流区</a>
    <ul>
    <li><a href="#a01" title="进入公告栏">公告栏</a></li>
    <li><a href="#a01" title="进入聊天室">聊天室</a></li>
    </ul>
</li>
<li><a class="hide" href="#a01">待开发1</a>
    <ul>
    <li><a href="#a01" title="该菜单目前未用1">待添加1</a></li>
    <li><a href="#a01" title="该菜单目前未用2">待添加2</a></li>
    <li><a href="#a01" title="该菜单目前未用3">待添加3</a></li>
    <li><a href="#a01" title="该菜单目前未用4">待添加4</a></li>
    <li><a href="#a01" title="该菜单目前未用5">待添加5</a></li>
    <li><a href="#a01" title="该菜单目前未用6">待添加6</a></li>
    <li><a href="#a01" title="该菜单目前未用7">带添加7</a></li>
    </ul>
</li>
<li><a class="hide" href="#a02">待开发2</a>
    <ul>
    <li><a href="#a02" title="该菜单目前未用1">待添加1</a></li>
    <li><a href="#a02" title="W该菜单目前未用2">待添加2</a></li>
    <li><a href="#a02" title="该菜单目前未用3">待添加3</a></li>
    </ul>
</li>
</ul>
<!-- clear the floats if required -->
<div class="clear"> </div>
</div>
</td><td width=12% align=left valign=center>
欢迎[<font color=red size=2><?php echo"$_SESSION[loguser]";?></font>] 
</td><td width=18% align=left valign=top>
<div class="align-center" id="showtime"></div>
</td></tr></table>
<br><br><br><br><br><br><br><br><br>

<input type="text" name="user" value="">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user1" value=""><br><br>
<input type="submit" name="sub1" value="bydw" title="sub1">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub2" value="bydate" title="sub2">
<?php
if(isset($_POST["sub1"]))
{echo "<br> button $_POST[sub1] pressed";}
if(isset($_POST["sub2"]))
{echo "<br> button $_POST[sub2] pressed ...";}
?>

<div class="center major-list-outer">
	<ul class="major-list">
		<li class="major-item" id="dx"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="rj"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="jx"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="gdz"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="jsj"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="kz"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="jg"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="sx"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="gl"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="ch"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="wl"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
		<li class="major-item" id="xw"><a href="#" target="_blank"><span class="txt-hide front-face"></span><span class="back-face"></span></a></li>
	</ul>
</div>

<br><br><br><br><br><br><hr><a name=a02></a>
<div class="cutpage" id="page">
<a href="#"><span>上一页</span></a><a href="#" class="current" id="cutpage"><span>1</span></a><a href="#"><span>2</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>5</span></a><a href="#"><span>6</span></a><a href="#"><span>7</span></a><a href="#"><span>8</span></a><a href="#"><span>9</span></a><a href="#"><span>10</span></a><a href="#"><span>11</span></a><a href="#"><span>14</span></a><a href="#"><span>124</span></a><a href="#"><span>下一页</span></a>
</div>
</form>
<script type="text/javascript" src="js/public.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
