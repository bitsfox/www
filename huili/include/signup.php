<?php
/**
 @package		huili manager
 @version		0.0.0.1
 @author		田勇 Alisa tybitsfox <tybitsfox@163.com>
 @license		GPLv2

本文件是注册操作的实现文件
 **/
?>
<?php
if(!defined("FULL_PATH"))
	define("FULL_PATH",substr(dirname(__FILE__),0,strlen(dirname(__FILE__))-strlen(strstr(dirname(__FILE__),"huili")))."huili".DIRECTORY_SEPARATOR);
require_once(constant("FULL_PATH")."config/glob_new.php");
require_once(constant("FULL_PATH")."lib/main.php");
require_once(constant("FULL_PATH")."config/email.php");
echo $OUT_HTML['LOGIN_HEAD'];
$s1=sprintf($OUT_HTML['VERF_BODY_1l'],constant("WORK_PLACE")."include/signup.php");
echo $s1;
echo $OUT_HTML['REG_AFTER'];
echo $OUT_HTML['LOGIN_BODY_3g'];
echo $OUT_HTML['TAIL'];
/*if(!isset($_GET['code']))
{
	$s1=sprintf($OUT_HTML['VERF_BODY_1g'],constant("WORK_PLACE")."include/signup.php");
	echo $s1;
	if(isset($_POST['email']))
	{
		$v=new mixer();
		echo $OUT_HTML['REG_AFTER'];
		$handle=fopen();
	}
	else
	{}
}
else
{
}*/
/*global $SIGN_DEF;
echo $SIGN_DEF["head"];
echo $SIGN_DEF["title"];
echo $SIGN_DEF["css"];
echo $SIGN_DEF["js"];
echo $SIGN_DEF["head_end"];
if(!isset($_GET["code"]))
{
	echo $SIGN_DEF["body_10_1"];
	echo $SIGN_DEF["body_10_2"];
	echo $SIGN_DEF["body_10_3"];
	if(isset($_POST["email"]))
	{
		$v=new mixer();
		echo $SIGN_DEF["bodyr_E_1"];
		$handle=fopen("./vbvb.txt","r");
		$needle=$v->get_nedle();
		while(!feof($handle))
		{
			$st1=fgets($handle);
			$pos=strpos($st1,$needle);
			if($pos === false)
				$st.=$st1;
			else
			{
				$pos=strpos($st1,$needle,$pos+2);
				if($pos === false)
					$st2=sprintf($st1,$v->mix($_POST["email"]));
				else
					$st2=sprintf($st1,$v->mix($_POST["email"]),$v->mix($_POST["email"]));
				$st.=$st2;
			}
		}
		fclose($handle);
		unset($v);
		$mailcontent = $st;
		$mailtype = "HTML";//HTML/TXT
		$smtp = new smtp();//这里面的一个true是表示使用身份验证,否则不使用身份验证.
		$state = $smtp->sendmail($_POST["email"],"bitsfox@126.com","huishi group", $mailcontent, $mailtype);
	}	
	else
	{
		echo $SIGN_DEF["bodyr_10_3"];
		echo $SIGN_DEF["bodyr_10_4"];
		echo $SIGN_DEF["bodyr_10_5"];
		echo $SIGN_DEF["bodyr_10_6"];
	}
	echo $SIGN_DEF["body_10_9"];
	echo $SIGN_DEF["body_10_10"];
}
else
{
	$v=new mixer();
	if(!$v->unmix($_GET["code"]))
		die("请获得授权再访问当前页面.");
	$w=$v->get_mail();
	for($i=1;$i<=10;$i++)
	{
		if($i == 3)
		{
			$st=sprintf($SIGN_DEF["bodyf_10_3"],$w);
			echo $st;
		}
		else
			echo $SIGN_DEF["bodyf_10_$i"];
	}
}
echo $SIGN_DEF["tail"];*/
?>
<?php
?>
