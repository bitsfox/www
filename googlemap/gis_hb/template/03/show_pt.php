<?php
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
$ifile=constant("FULL_PATH")."config/main.php";
require_once($ifile);
$st=constant("FULL_PATH")."include/inter_def.php";
require_once($st);
$st=constant("FULL_PATH")."core/main.php";
require_once($st);
$st=constant("FULL_PATH")."interface/extra01.php";
require_once($st);
$st=constant("FULL_PATH")."interface/extra02.php";
require_once($st);
	$ay=array();
	$a=new init_gis(0);
	$ay=$a->get_unit(0);
	$i=count($ay);
	$cy=array();
	for($j=0;$j<$i;$j++)
		array_push($cy,$ay[$j][5]);
	$dy=array();
	$dy=json_encode($cy);
?>
<STYLE type=text/css>
/* 图片框样式 */
.imgClass {border: 0px solid #000;}
</STYLE>
<SCRIPT language=JavaScript type=text/javascript>
var imgWidth=200; //图片宽
var imgHeight=266; //图片高
var TimeOut=4000; //每张图切换时间 (单位毫秒);
var imgUrl=new Array();
var adNum=0;
var theTimer=0;
var tt=1;
//document.write('<center><div id="focuseFrom">');
var s="";
var j=0;
//var k=parseInt(pnum);
//document.write(spath+k.toString(10));
imgUrl=eval('<?php echo $dy; ?>');
//alert(imgUrl[0]);
var intPage =0;
for (var i=1;i<=imgUrl.length;i++)
{
	if (imgUrl[i]!="!!!")
	{
		intPage++;
	}
}
function changeimg(n)
{
	adNum=n;
	window.clearInterval(theTimer);
	adNum=adNum-1;
	nextAd();
	return false;
}
//NetScape开始
if (navigator.appName == "Netscape")
{
//	document.write('<style type="text/css">');
//	document.write('.buttonDiv{height:4px;width:21px;}');
//	document.write('</style>');
	function nextAd()
	{
		if(adNum<(intPage-1))
			adNum++;
		else adNum=1;
		theTimer=setTimeout("nextAd()", TimeOut);
		document.images.imgInit.src=imgUrl[adNum];
	}
	document.write('<img src="imgUrl[1]" name="imgInit" border=1  class="imgClass" style="width:250px;">');
//	document.write('</div></center>');
	nextAd();
}
//NetScape结束
//IE开始
else
{
	var count=0;
	for (i=1;i<intPage;i++)
	 {
		if( imgUrl[i]!="" )
		 {
			count++;
		 }
		 else 
		{
			break;
		}
	}
	function playTran()
	{
		if (document.all)
			document.images.imgInit.filters.BlendTrans.play();
	}
	var key=0;
	function nextAd()
	{
		if(adNum<count)
			adNum++ ;
		else
			 adNum=1;
		if( key==0 )
		{
			key=1;
		}
		 else if (document.all)
		{
			document.images.imgInit.filters.BlendTrans.apply();
			playTran();
		}
		document.images.imgInit.src= imgUrl[adNum];
		theTimer=setTimeout("nextAd()", TimeOut);
	}
//	document.write('</div>');
	changeimg(1);
}
//IE结束



</SCRIPT>

