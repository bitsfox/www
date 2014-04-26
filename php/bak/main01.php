<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
body{background-color:white;font-family:Arial, Helvetica, sans-serif;font-size:12px;text-align:center}
.align-center{
	margin:0 auto;		/* 居中 这个是必须的，，其它的属性非必须 */
	width:500px;		/* 给个宽度 顶到浏览器的两边就看不出居中效果了 */
	background:gray;		/* 背景色 */
	text-align:center; 	/* 文字等内容居中 #292929 */
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
.box-163css { width:300px; border:1px solid #ccc; margin:20px auto; padding:10px; }
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
width:750px; 
margin:0; 
margin:50px 0;
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
width:104px; 
height:30px; 
color:#000; 
border:1px solid #fff;
border-width:1px 1px 0 0;
background:#c9c9a7; 
line-height:30px; 
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
top:31px; 
left:0; 
width:105px;
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
<!--[if lte IE 6]>
<style type="text/css">
/* styling specific to Internet Explorer IE5.5 and IE6. Yet to see if IE7 handles li:hover */
/* Get rid of any default table style */
table {
border-collapse:collapse;
margin:0; 
padding:0;
}
/* ignore the link used by 'other browsers' */
.menu ul li a.hide, .menu ul li a:visited.hide {
display:none;
}
/* set the background and foreground color of the main menu link on hover */
.menu ul li a:hover {
color:#fff; 
background:#b3ab79;
}
/* make the sub menu ul visible and position it beneath the main menu list item */
.menu ul li a:hover ul {
display:block; 
position:absolute; 
top:32px; 
left:0; 
width:105px;
}
/* style the background and foreground color of the submenu links */
.menu ul li a:hover ul li a {
background:#faeec7; 
color:#000;
}
/* style the background and forground colors of the links on hover */
.menu ul li a:hover ul li a:hover {
background:#dfc184; 
color:#000;
}
</style>
<![endif]-->
<!--下拉菜单的js-->
<script type="text/javascript" src="./jquery.min.js"></script>
<!--显示隐藏链接的函数-->
<script type="text/javascript">
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



<?php
session_start();
if(isset($_SESSION["loguser"]) && isset($_SESSION["logpwd"]))
{}
else
{die("hi guys,you died now!!");}
?>
<body  onload="time()">
<div class="align-center" id="showtime"></div><br/><br/>
<hr>
<div class="menu">
<ul>
<li><a class="hide" href="../menu/index.html">DEMOS</a>
<!--[if lte IE 6]>
<a href="../menu/index.html">DEMOS
<table><tr><td>
<![endif]-->
    <ul>
    <li><a href="../menu/zero_dollars.html" title="The zero dollar ads page">zero dollars</a></li>
    <li><a href="../menu/embed.html" title="Wrapping text around images">wrapping text</a></li>
    <li><a href="../menu/form.html" title="Styling forms">styled form</a></li>
    <li><a href="../menu/nodots.html" title="Removing active/focus borders">active focus</a></li>
    <li><a href="../menu/shadow_boxing.html" title="Multi-position drop shadow">shadow boxing</a></li>
    <li><a href="../menu/old_master.html" title="Image Map for detailed information">image map</a></li>
    <li><a href="../menu/bodies.html" title="fun with background images">fun backgrounds</a></li>
    <li><a href="../menu/fade_scroll.html" title="fade-out scrolling">fade scrolling</a></li>
    <li><a href="../menu/em_images.html" title="em size images compared">em sized images</a></li>
    </ul>
<!--[if lte IE 6]>
</td></tr></table>
</a>
<![endif]-->
</li>
<li><a class="hide" href="index.html">MENUS</a>
<!--[if lte IE 6]>
<a href="index.html">MENUS
<table><tr><td>
<![endif]-->
    <ul>
    <li><a href="spies.html" title="a coded list of spies">spies menu</a></li>
    <li><a href="vertical.html" title="a horizontal vertical menu">vertical menu</a></li>
    <li><a href="expand.html" title="an enlarging unordered list">enlarging list</a></li>
    <li><a href="enlarge.html" title="an unordered list with link images">link images</a></li>
    <li><a href="cross.html" title="non-rectangular links">non-rectangular</a></li>
    <li><a href="jigsaw.html" title="jigsaw links">jigsaw links</a></li>
    <li><a href="circles.html" title="circular links">circular links</a></li>
    </ul>
<!--[if lte IE 6]>
</td></tr></table>
</a>
<![endif]-->
</li>
<li><a class="hide" href="../layouts/index.html">LAYOUTS</a>
<!--[if lte IE 6]>
<a href="../layouts/index.html">LAYOUTS
<table><tr><td>
<![endif]-->
    <ul>
    <li><a href="../layouts/bodyfix.html" title="Cross browser fixed layout">Fixed 1</a></li>
    <li><a href="../layouts/body2.html" title="Cross browser fixed layout">Fixed 2</a></li>
    <li><a href="../layouts/body4.html" title="Cross browser fixed layout">Fixed 3</a></li>
    <li><a href="../layouts/body5.html" title="Cross browser fixed layout">Fixed 4</a></li>
    <li><a href="../layouts/minimum.html" title="A simple minimum width layout">minimum width</a></li>
    </ul>
<!--[if lte IE 6]>
</td></tr></table>
</a>
<![endif]-->
</li>
<li><a class="hide" href="../boxes/index.html">BOXES</a>
<!--[if lte IE 6]>
<a href="../boxes/index.html">BOXES
<table><tr><td>
<![endif]-->
    <ul>
    <li><a href="spies.html" title="a coded list of spies">spies menu</a></li>
    <li><a href="vertical.html" title="a horizontal vertical menu">vertical menu</a></li>
    <li><a href="expand.html" title="an enlarging unordered list">enlarging list</a></li>
    <li><a href="enlarge.html" title="an unordered list with link images">link images</a></li>
    <li><a href="cross.html" title="non-rectangular links">non-rectangular</a></li>
    <li><a href="jigsaw.html" title="jigsaw links">jigsaw links</a></li>
    <li><a href="circles.html" title="circular links">circular links</a></li>
    </ul>
<!--[if lte IE 6]>
</td></tr></table>
</a>
<![endif]-->
</li>
<li><a class="hide" href="../mozilla/index.html">MOZILLA</a>
<!--[if lte IE 6]>
<a href="../mozilla/index.html">MOZILLA
<table><tr><td>
<![endif]-->
    <ul>
    <li><a href="../mozilla/dropdown.html" title="A drop down menu">drop down menu</a></li>
    <li><a href="../mozilla/cascade.html" title="A cascading menu">cascading menu</a></li>
    <li><a href="../mozilla/content.html" title="Using content:">content:</a></li>
    <li><a href="../mozilla/moxbox.html" title=":hover applied to a div">mozzie box</a></li>
    <li><a href="../mozilla/rainbow.html" title="I can build a rainbow">rainbow box</a></li>
    <li><a href="../mozilla/snooker.html" title="Snooker cue">snooker cue</a></li>
    <li><a href="../mozilla/target.html" title="Target Practise">target practise</a></li>
    <li><a href="../mozilla/splittext.html" title="Two tone headings">two tone headings</a></li>
    <li><a href="../mozilla/shadow_text.html" title="Shadow text">shadow text</a></li>
    </ul>
<!--[if lte IE 6]>
</td></tr></table>
</a>
<![endif]-->
</li>
<li><a class="hide" href="../ie/index.html">EXPLORER</a>
<!--[if lte IE 6]>
<a href="../ie/index.html">EXPLORER
<table><tr><td>
<![endif]-->
    <ul>
    <li><a href="../ie/exampleone.html" title="Example one">example one</a></li>
    <li><a href="../ie/weft.html" title="Weft fonts">weft fonts</a></li>
    <li><a href="../ie/exampletwo.html" title="Vertical align">vertical align</a></li>
    </ul>
<!--[if lte IE 6]>
</td></tr></table>
</a>
<![endif]-->
</li>
<li><a class="hide" href="../opacity/index.html">OPACITY</a>
<!--[if lte IE 6]>
<a href="../opacity/index.html">OPACITY
<table><tr><td>
<![endif]-->
    <ul>
    <li><a href="../opacity/colours.html" title="colour wheel">opaque colours</a></li>
    <li><a href="../opacity/picturemenu.html" title="a menu using opacity">opaque menu</a></li>
    <li><a href="../opacity/png.html" title="partial opacity">partial opacity</a></li>
    <li><a href="../opacity/png2.html" title="partial opacity II">partial opacity II</a></li>
    </ul>
<!--[if lte IE 6]>
</td></tr></table>
</a>
<![endif]-->
</li>
</ul>
<!-- clear the floats if required -->
<div class="clear"> </div>
</div>
<br><br><br><br><br><br><hr>



<br><br><br><br><br><br><hr>
<div style="width:300px; margin:0 auto;">
<div class="cutpage" id="page">
<a href="#"><span>上一页</span></a><a href="#" class="current" id="cutpage"><span>1</span></a><a href="#"><span>2</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>3</span></a><a href="#"><span>4</span></a><a href="#"><span>5</span></a><a href="#"><span>6</span></a><a href="#"><span>7</span></a><a href="#"><span>8</span></a><a href="#"><span>9</span></a><a href="#"><span>10</span></a><a href="#"><span>11</span></a><a href="#"><span>14</span></a><a href="#"><span>124</span></a><a href="#"><span>下一页</span></a>
</div>
</div>
<ul class="box-163css">
  <li><span><a href="#" >前</a> <a href="#" >昨</a> <a href="#" >今</a></span><a href="让WordPress支持中文标签链接" >让WordPress支持中文标签链接 </a></li>
  <li><span><a href="#" >前</a> <a href="#" >昨</a> <a href="#" >今</a></span><a href="#" >order-categories wp分类目录排序插件</a></li>
  <li><span><a href="#">前</a> <a href="#">昨</a> <a href="#">今</a></span><a href="#">自动切换选项卡js效果</a></li>
  <li><span><a href="#">前</a> <a href="#">昨</a> <a href="#">今</a></span><a href="#">点击链接，从顶部向下平滑弹出一个div窗口</a></li>
  <li><span><a href="#">前</a> <a href="#">昨</a> <a href="#">今</a></span><a href="http://www.lanrentuku.com/" target="_blank">更多代码请访问：懒人图库</a></li>
</ul>



<form name="form1" method="post" action="main01.php">
<br><center>主界面区域&nbsp;&nbsp;&nbsp;&nbsp;欢迎[<font color=red size=2><?php echo"$_SESSION[loguser]";?></font>] </center><br><br><br>
<input type="text" name="user" value="">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user1" value=""><br><br>
<input type="submit" name="sub1" value="bydw" title="sub1">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub2" value="bydate" title="sub2">
<?php
if(isset($_POST["sub1"]))
{echo "<br> button $_POST[sub1] pressed";}
if(isset($_POST["sub2"]))
{echo "<br> button $_POST[sub2] pressed ...";}
?>
</form>
</body>
