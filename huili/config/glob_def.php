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
if(!defined("CSS_FILE"))
{
	define("WORK_PLACE","/huili/");
	define("CSS_FILE",constant("WORK_PLACE")."css/fin.css");
	define("CSS_FILEA",constant("WORK_PLACE")."css/fiin.css");
	define("CSS_FILEB",constant("WORK_PLACE")."css/font_awesome.css");
	define("JS_FILE_ONE",constant("WORK_PLACE")."js/jquery.min.js");
	define("JS_FILE_TWO",constant("WORK_PLACE")."js/core.aadddae364.js");
	define("JS_FILE_THR",constant("WORK_PLACE")."js/utils.js");
	define("DB_SET",constant("FULL_PATH")."config/db_set.php");
}
require_once(constant("DB_SET"));
//{{{定义登录、注册界面的html代码值
$SIGN_DEF["head"]		=	"<!DOCTYPE html>\n<html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />\n";
$SIGN_DEF["title"]		=	"<title>testtest</title>\n";
$SIGN_DEF["css"]		=	"<link rel='stylesheet' href='".constant('CSS_FILEB')."'>\n<link rel='stylesheet' href='".constant("CSS_FILEA")."'>";
$SIGN_DEF["js"]			=	"<script src='".constant("JS_FILE_ONE")."'></script>\n<script src='".constant("JS_FILE_TWO")."'></script>";
$SIGN_DEF["head_end"]	=	"</head><body class='loginpage'>";
$SIGN_DEF["body_10_1"]	=	"<div class='bg'><div class='loginbox'><form class='form form-landing' action='#' method='post'>";
$SIGN_DEF["body_10_2"]	=	"<input type='hidden' value='b7f4a68d-58ad-486d-a554-e3781e727376' name='authenticityToken' />";
$SIGN_DEF["body_10_3"]	=	"<div class='form-login form-box'><div class='side-head'><a href='/huili/index.php'><img class='logo' src='../images/logo/logo.png5.png' alt='huishi group'></a></div><div>";
$SIGN_DEF["body_E_1"]	=	"<div class='alert alert-danger' role='alert'>";
$SIGN_DEF["body_E_2"]	=	"</div>";
$SIGN_DEF["body_10_4"]	=	"<div class='form-group'><label>Email</label><div class='form-suffix'><span class='fa fa-envelope-o fa-lg picto'></span><input id='email' type='email' class='form-control first' name='email' value='' placeholder='Email' autocorrect='off' autocapitalize='none' autocomplete='username' required/></div></div>";
$SIGN_DEF["body_10_5"]	=	"<div class='form-group'><label>Password</label><div class='form-suffix'><span class='fa fa-key fa-lg picto'></span><input id='password' type='password' class='form-control last' name='password' value='' placeholder='Password' autocomplete='current-password' required /></div></div></div>";
$SIGN_DEF["body_10_6"]	=	"<div class='form-group form-twocols'><div class='pass-reset'><a href='./forgot.php' class='btn-text'>是不是忘记密码了?</a></div></div>";
$SIGN_DEF["body_10_7"]	=	"<div class='form-group'><button type='submit' href='#' class='btn btn-primary btn-fat btn-block'>登 录</button></div>";
$SIGN_DEF["body_10_8"]	=	"<div class='form-group form-out'><p>您还没有帐号? <a href='./signup.php' class='btn-text'>注 册</a></p></div>";
$SIGN_DEF["body_10_9"]	=	"</div></form></div></div>";
$SIGN_DEF["body_10_10"]	=	"<footer class='footer'><div class='inner'><div class='row'><div class='col-sm-12'><p class='copy'>&COPY; 2018 汇氏环境, Inc. 保留所有权利</p></div></div></div></footer>";
$SIGN_DEF["tail"]		=	"</body></html>";
//下面是注册界面的html代码
//order of string: body1-3,[bodyr3-6,bodyr_E_1],body9,10
$SIGN_DEF["bodyr_10_3"]	=	"<h5 class='text-center'>与我们保持联系！</h5><p class='intro'>我们会为您搭建一个提供或享受专业环境服务的平台.</p>";
$SIGN_DEF["bodyr_10_4"]	=	"<div class='form-group'><label>Email</label><div class='form-suffix'><span class='fa fa-envelope-o fa-lg picto'></span><input id='email' type='email' class='form-control' name='email' value='' placeholder='Your Email' autocorrect='off' autocapitalize='none' autocomplete='username' required/></div></div>";
$SIGN_DEF["bodyr_10_5"]	=	"<div class='form-group'><button href='#' type='submit' class='btn btn-primary btn-block btn-fat'>开始注册</button></div>";
$SIGN_DEF["bodyr_10_6"]	=	"<p class='intro'>汇氏管家，品质服务的保证.</p><div class='form-group form-out text-center'><p>您已经拥有帐号? 请选择：<a href='./login.php' class='btn-text'>登 录</a></p></div>";
$SIGN_DEF["bodyr_E_1"]	=	"<h5>注册马上完成!</h5><p class='intro'>我们给<strong>".$_POST["email"]."</strong>.发送了一封邮件，请查阅您的邮箱以完成注册.如果您的邮箱设置了过滤机制，请检查下垃圾邮件目录下是否有我们的信件.</p></div>";
//}}}
