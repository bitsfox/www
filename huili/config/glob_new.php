<?php
/**
 @package		huili manager
 @version		0.0.0.1
 @author		田勇 Alisa tybitsfox <tybitsfox@163.com>
 @license		GPLv2

本文件是系统所需的全局变量和常量的定义文件
 **/
?>
<?php
if(!defined("WORK_PLACE"))
{
	define("WORK_PLACE","/huili/");
	define("CSS_FONT",constant("WORK_PLACE")."css/style.css");
	define("CSS_MAIN",constant("WORK_PLACE")."css/formated.css");
	define("CSS_LOG",constant("WORK_PLACE")."css/ffiin.css");
	define("JS_FILEA",constant("WORK_PLACE")."js/jquery.min.js");
	define("JS_FILEB",constant("WORK_PLACE")."js/core.aadddae364.js");
	define("DB_SET",constant("WORK_PLACE")."config/db_set.php");
}
require_once(constant("DB_SET"));
$GLOB_DEF['TITLE']	=	"山东汇氏集团-汇氏管家";
$GLOB_DEF['IDX']	=	constant("WORK_PLACE")."index.php";
$GLOB_DEF['LOGO']	=	constant("WORK_PLACE")."images/logo/logo.png5.png";
$GLOB_DEF['LOGO_ALT']	=	"huishi group";

$s1="<!DOCTYPE html>\n<html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />\n<title>".$GLOB_DEF['TITLE']."</title>\n";
$s2="<link rel='stylesheet' href='".constant('CSS_FONT')."'>\n<link rel='stylesheet' href='".constant("CSS_LOG")."'>";
$s3="<script src='".constant("JS_FILEA")."'></script>\n<script src='".constant("JS_FILEB")."'></script></head>";
$s4="<link rel='stylesheet' href='".constant('CSS_FONT')."'>\n<link rel='stylesheet' href='".constant("CSS_MAIN")."'>";
$OUT_HTML['LOGIN_HEAD']	=	$s1.$s2.$s3;		//这是注册，登录界面的标准头定义
$OUT_HTML['MAIN_HEAD']	=	$s1.$s4.$s3;		//这是主界面的标准头定义
$s1="<body class='loginpage'><div class='bg'><div class='loginbox'><form class='form form-landing' action='%s' method='post'>";
$s2="<div class='form-login form-box'><div class='side-head'><a href='".$GLOB_DEF['IDX']."'><img class='logo' src='".$GLOB_DEF['LOGO']."' alt='".$GLOB_DEF['LOGO_ALT']."'></a></div><div>";
$OUT_HTML['LOGIN_BODY_1']	=	$s1.$s2;	//需要指定action.
//$OUT_HTML['LOGIN_BODY_ERR']	=	"<div class='alert alert-danger' role='alert'>%s</div>"; 这里并不需要，错误提示的实现在login类中完成。
$s1="<div class='form-group'><label>邮箱</label><div class='form-suffix'><span class='icon-envelope picto'></span><input id='email' type='email' class='form-control first' name='email' value='' placeholder='Email' autocorrect='off' autocapitalize='none' autocomplete='username' required/></div></div>";
$s2="<div class='form-group'><label>密码</label><div class='form-suffix'><span class='icon-key picto'></span><input id='password' type='password' class='form-control last' name='password' value='' placeholder='Password' autocomplete='current-password' required /></div></div></div>";
$s3="<div class='form-group form-twocols'><div class='pass-reset'><a href='./forgot.php' class='btn-text'>是不是忘记密码了?</a></div></div>";
$s4="<div class='form-group'><button type='submit' href='#' class='btn btn-primary btn-fat btn-block'>登 录</button></div>";
$s5="<div class='form-group form-out'><p>您还没有帐号? <a href='./signup.php' class='btn-text'>注 册</a></p></div>";
$OUT_HTML['LOGIN_BODY_2']	=	$s1.$s2.$s3.$s4.$s5;	//仅登录界面使用
$OUT_HTML['LOGIN_BODY_3']	=	"</div></form></div></div><footer class='footer'><div class='inner'><div class='row'><div class='col-sm-12'><p class='copy'>&COPY; 2018 汇氏环境, Inc. 保留所有权利</p></div></div></div></footer>";
$OUT_HTML['TAIL']	=	"</body></html>";







?>
