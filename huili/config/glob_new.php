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
	define("DB_SET",constant("FULL_PATH")."config/db_set.php");
}
require_once(constant("DB_SET"));
$GLOB_DEF['TITLE']	=	"山东汇氏集团-汇氏管家";
$GLOB_DEF['IDX']	=	constant("WORK_PLACE")."index.php";
$GLOB_DEF['LOGO']	=	constant("WORK_PLACE")."images/logo/logo.png5.png";
$GLOB_DEF['LOGO_ALT']	=	"huishi group";
$GLOB_DEF['EMAIL']	=	constant("FULL_PATH")."include/vbvb.txt";
$GLOB_DEF['PG_ONE']	=	md5("huishi_Aa123BbCc");
$GLOB_DEF['PG_TWO']	=	md5("huishi_Dd456EeFf");
$GLOB_DEF['PG_THR']	=	md5("huishi_Gg789HhIi");
$GLOB_DEF['PG_FUR']	=	md5("huishi_Jj012KkLl");
$GLOB_DEF['PG_FIV']	=	md5("huishi_Mm345NnOo");
$GLOB_DEF['MSG_HOME_TITLE']	=	"懂你所需、做你所想";
$GLOB_DEF['MSG_HOME_CON']	=	"汇氏环保管家，是目前国内环保行业唯一的线上线下联动、一站式、全流程的第三方服务平台。公司现已通过本平台发展形成线上线下专业环保服务团队和国内领先的环保供应链体系。未来，公司将以绿色环保科技为努力方向，打造国内最大最专业的环保咨询服务平台。";
$GLOB_DEF['FEAT_TITLE_1']	=	"平台的特性";
$GLOB_DEF['FEAT_TITLE_2']	=	"汇氏管家，为您的成功助力。";
$GLOB_DEF['FEAT_TITLE_3']	=	"汇氏管家就是为需要解决环境问题的客户、环境问题专家及环保企业建立一个互联互通的简易而且直观的交流互动平台";
$GLOB_DEF['FEAT_MSG_M']	=	"环保管家服务为企业提供一站式环保托管服务，统筹解决企业环境问题；提高决策科学性，保证服务效果，有效降低企业环保管理成本；同时降低环境产业链各个环节脱节产生的高昂交易成本。是传统环保服务的升级衍生业务，全方面帮助企业实施管理服务，减少企业用人成本，提升企业环境面貌，解决企业因环保而带来的烦恼。";
$GLOB_DEF['FEAT_IMG_1']	=	"/huili/images/logo/picto-connect.png";
$GLOB_DEF['FEAT_IMG_2']	=	"/huili/images/logo/picto-spending.png";
$GLOB_DEF['FEAT_IMG_3']	=	"/huili/images/logo/picto-quickbooks.png";
$GLOB_DEF['FEAT_MSG_A1']	=	"互联的平台";
$GLOB_DEF['FEAT_MSG_A2']	=	"顺畅的沟通是您发挥才能，展示产品和服务，取得最优解决方案的保证。";
$GLOB_DEF['FEAT_MSG_B1']	=	"优质的服务";
$GLOB_DEF['FEAT_MSG_B2']	=	"平台围绕环评咨询、环境工程、环境监测、项目验收、清洁生产、应急预案、危废服务、排污申报等领域，提供政策信息咨询、业务辅导、工程施工等专业化咨询服务。";
$GLOB_DEF['FEAT_MSG_C1']	=	"完整的资源";
$GLOB_DEF['FEAT_MSG_C2']	=	"各类在线实时监控数据的发布以及全面的企业和专家名录满足您的需要。";
$GLOB_DEF['EXPE_TITLE_1']	=	"NETWORK";
$GLOB_DEF['EXPE_TITLE_2']	=	"利用环境管家简化您的环境问题";
$GLOB_DEF['EXPE_TITLE_3']	=	"汇氏管家将所有的环境服务整合在一起";
$GLOB_DEF['EXPE_TITLE_4']	=	"了解更多";
$GLOB_DEF['EXPE_TITLE_IMG']	=	"/huili/images/logo/img-arrow-large.png";
$GLOB_DEF['EXPE_MSG_1']		=	"汇氏管家就是资源的整合";
$GLOB_DEF['EXPE_MSG_2']		=	"更多的整合意味着更宽广的视野和更加高度的自动化";
$GLOB_DEF['EXPE_MSG_3']		=	"这里没有你需要的资源?";
$GLOB_DEF['EXPE_MSG_4']		=	"联系我们";
$GLOB_DEF['EXPE_MSG_5']		=	"我们会在这个平台下加入他.";
$GLOB_DEF['EXPE_ARRY']		=	array(
		array('/huili/include/login.php','icon-gear','环评咨询'),
		array('/huili/include/login.php','icon-truck','环境工程'),
		array('/huili/include/login.php','icon-flask','环境监测'),
		array('/huili/include/login.php','icon-pagelines','项目验收'),
		array('/huili/include/login.php','icon-recycle','清洁生产'),
		array('/huili/include/login.php','icon-fire','危废服务'),
		array('/huili/include/login.php','icon-calendar-check-o','应急预案'),
		array('/huili/include/login.php','icon-pencil','排污申报'),
		array('/huili/include/login.php','icon-book','企业名录'),
		array('/huili/include/login.php','icon-snapchat-ghost','环境案例'),
		array('/huili/include/login.php','icon-joomla','技术动态'),
		array('/huili/include/login.php','icon-wpforms','环境法规'),
		array('/huili/include/login.php','icon-download','资料下载'),
		);







$s1="<!DOCTYPE html>\n<html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />\n<title>".$GLOB_DEF['TITLE']."</title>\n";
$s2="<link rel='stylesheet' href='".constant('CSS_FONT')."'>\n<link rel='stylesheet' href='".constant("CSS_LOG")."'>";
$s3="<script src='".constant("JS_FILEA")."'></script>\n<script src='".constant("JS_FILEB")."'></script></head>\n";
$s4="<link rel='stylesheet' href='".constant('CSS_FONT')."'>\n<link rel='stylesheet' href='".constant("CSS_MAIN")."'>";
$OUT_HTML['LOGIN_HEAD']	=	$s1.$s2.$s3;		//这是注册，登录界面的标准头定义
$OUT_HTML['MAIN_HEAD']	=	$s1.$s4.$s3."<body>";		//这是主界面的标准头定义
//{{{下面定义的是注册、登录、密码找回、验证界面的html代码
$s1="<body class='loginpage'><div class='bg'><div class='loginbox'><form class='form form-landing' action='%s' method='post'>\n";
$s2="<div class='form-login form-box'><div class='side-head'><a href='".$GLOB_DEF['IDX']."'><img class='logo' src='".$GLOB_DEF['LOGO']."' alt='".$GLOB_DEF['LOGO_ALT']."'></a></div>\n";
$OUT_HTML['LOGIN_BODY_1g']	=	$s1.$s2;	//需要指定action.
//$OUT_HTML['LOGIN_BODY_ERR']	=	"<div class='alert alert-danger' role='alert'>%s</div>"; 这里并不需要，错误提示的实现在login类中完成。
$s1="<div class='form-group'><label>邮箱</label><div class='form-suffix'><span class='icon-envelope picto'></span><input id='email' type='email' class='form-control first' name='email' value='' placeholder='Email' autocorrect='off' autocapitalize='none' autocomplete='username' required/></div></div>\n";
$s2="<div class='form-group'><label>密码</label><div class='form-suffix'><span class='icon-key picto'></span><input id='password' type='password' class='form-control last' name='password' value='' placeholder='Password' autocomplete='current-password' required /></div></div>\n";
$s3="<div class='form-group form-twocols'><div class='pass-reset'><a href='./forgot.php' class='btn-text'>是不是忘记密码了?</a></div></div>\n";
$s4="<div class='form-group'><button type='submit' href='#' class='btn btn-primary btn-fat btn-block'>登 录</button></div>\n";
$s5="<div class='form-group form-out'><p>您还没有帐号? <a href='./signup.php' class='btn-text'>注 册</a></p></div>\n";
$OUT_HTML['LOGIN_BODY_2l']	=	$s1.$s2.$s3.$s4.$s5;	//仅登录界面使用
$OUT_HTML['LOGIN_BODY_3g']	=	"</div></form></div></div><footer class='footer'><div class='inner'><div class='row'><div class='col-sm-12'><p class='copy'>&COPY; 2018 汇氏环境, Inc. 保留所有权利</p></div></div></div></footer>\n";
$OUT_HTML['TAIL']	=	"</body></html>\n";
$s1="<h5 class='text-center'>与我们保持联系！</h5><p class='intro'>我们会为您搭建一个提供或享受专业环境服务的平台.</p>";
$s2="<div class='form-group'><label>Email</label><div class='form-suffix'><span class='icon-envelope picto'></span><input id='email' type='email' class='form-control' name='email' value='' placeholder='Your Email' autocorrect='off' autocapitalize='none' autocomplete='username' required/></div></div>";
$s3="<div class='form-group'><button href='#' type='submit' class='btn btn-primary btn-block btn-fat'>开始注册</button></div>";
$s4="<p class='intro'>汇氏管家，品质服务的保证.</p><div class='form-group form-out text-center'><p>您已经拥有帐号? 请选择：<a href='./login.php' class='btn-text'>登 录</a></p></div>";
$OUT_HTML['REG_NORMAL']	= $s1.$s2.$s3.$s4;
$OUT_HTML['REG_AFTER']	= "<h5>注册马上完成!</h5><p class='intro'>我们给<strong>".$_POST["email"]."</strong>.发送了一封邮件，请查阅您的邮箱以完成注册.如果您的邮箱设置了过滤机制，请检查垃圾邮件目录下是否有我们的信件.</p></div>";
$OUT_HTML['VERF_BODY_1l']	=	preg_replace("/form-login/","form-signup",$OUT_HTML['LOGIN_BODY_1g']);
$s1="<p class='intro'>注册邮箱：<strong>%s</strong></p><div class='form-group'><label>Name</label><div class='form-suffix'><span class='icon-lock picto'></span><input id='name' type='password' class='form-control first' placeholder='输入密码' name='new-password' value='' required title='密码必须包含大小写字母、数字以及特殊符号例如：(!@$&*)' /></div></div>";
$s2="<div class='form-group'><label>Password</label><div class='form-suffix'><span class='icon-lock picto'></span><input id='password' type='password' class='form-control last' name='password' value='' placeholder='确认密码' required autocomplete='off' pattern='(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*()+=?_-])(?=.*[0-9]).{8,32}' title='密码必须包含大小写字母、数字以及特殊符号例如：(!@$&*)' />";
$s3="</div><div class='help-block'>密码必须是8-32位字符，且字符中必须出现大小写字母(e.g. Aa), 数字(e.g. 1234), 特殊符号(e.g. !$&*)</div></div>";
$s4="<div class='form-group'><div class='checkbox'><label><input type='checkbox' id='trusted' name='trusted' checked data-ninja-checkbox> 允许自动登录 <span class='helper' data-toggle='tooltip' data-placement='top' title='允许自动登录，意味着您使用的这台设备是安全的，或者这台设备只有您个人使用。这样在每次访问管家时都会自动使用您的帐号登录。如果您不确定这台设备的安全性，请不要选择此项设置，您每次登录都需要输入账号密码验证. '>?</span></label></div></div><div class='form-group form-delimited'><p class='intro'>点击注册意味着您同意我们的 <a href='./terms.php' target='_blank'>服务条款</a> 和 <a href='./privacy.php' target='_blank'>隐私权相关政策</a>. </p></div>";
$s5="<div class='form-group form-delimited'><button type='submit' class='btn btn-primary btn-fat btn-block'>注 册</button></div>";
$OUT_HTML['VERF_BODY_2l']	= $s1;		//需要指定邮箱名称
$OUT_HTML['VERF_BODY_3l']	= $s2.$s3.$s4.$s5;
$OUT_HTML['FORGOT_BODY_1l']	=	"<h5>忘记密码了?</h5>\n<p class='intro'>我们将发送一个重置密码的链接到您的邮箱.</p>\n<div class='form-group'>\n<label>邮箱地址</label><div class='form-suffix'>\n<span class='icon-envelope picto'></span><input type='email' class='form-control' name='email' value='' placeholder='Email' />\n</div></div><div class='form-group'><button class='btn btn-primary btn-fat btn-block'>重置密码</button></div>\n<div class='form-group form-out text-center'> <p>想起密码了? <a href='/huili/include/login.php' class='btn-text btn-backlogin'>登录</a></p></div>\n";
$OUT_HTML['FORGOT_AFTER']	= "<h5>重置马上完成!</h5><p class='intro'>我们给<strong>".$_POST["email"]."</strong>.发送了一封邮件，请查阅您的邮箱以完成密码重置.如果您的邮箱设置了过滤机制，请检查垃圾邮件目录下是否有我们的信件.</p>";
//}}}
//{{{下面定义的是总览界面（登录前）的html代码
$EX_HTML['headbar1']	=	"<div class='mobile-bar'>\n<div class='logobox'>\n<a href='/huili/index.php' title='Huishi Home'>\n<img class='logo' src='/huili/images/logo/logo.png5.png' alt='Huishi'/>\n</a>\n</div>\n<div class='mobile-menu'>\n<button type='button' class='navbar-toggle btn-mobilemenu'>\n<span class='sr-only'>Toggle navigation</span>\n<span class='title'>MENU</span>\n<span class='bars'>\n<span class='icon-bar icon-bar1'></span>\n<span class='icon-bar icon-bar2'></span>\n<span class='icon-bar icon-bar3'></span>\n</span>\n</button>\n</div>\n</div>\n<div class='overlay'></div>\n<header class='header'>\n<nav class='navbar navbar-default'>\n<div class='container-fluid'>\n<div class='navbar-header'>\n<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#mobile-side' aria-expanded='false'>\n<span class='sr-only'>Toggle navigation</span>\n<span class='icon-bar'></span>\n<span class='icon-bar'></span>\n<span class='icon-bar'></span>\n</button>\n<a href='#' class='btn-closemenu'><i class='icon-x'></i></a>\n<a class='navbar-brand' href='/huili/index.php'><img src='/huili/images/logo/logo.png5.png' alt='Huishi'/></a>\n</div>";
$EX_HTML['headbar2']	=	"<div class='collapse navbar-collapse' id='mobile-side'>\n<ul class='nav navbar-nav navbar-right'>\n<li><a href='/huili/index.php?selecter=".$GLOB_DEF['PG_ONE']."' class='tooltip'>管家服务<span class='tooltiptext'>您身边的环境专家，为您提供专业的服务</span></a></li>\n<li><a href='/huili/index.php?selecter=".$GLOB_DEF['PG_THR']."' class='tooltip'>专家团队<span class='tooltiptext'>聚集了环保全领域的资深专家和优秀人才</span></a></li>\n<li><a href='/huili/index.php?selecter=".$GLOB_DEF['PG_TWO']."' class='tooltip'>监控平台<span class='tooltiptext'>污染源、水站、空气站在线监控平台</span></a></li>\n<li><a href='/huili/index.php?selecter=".$GLOB_DEF['PG_FUR']."' class='tooltip'>交流互动<span class='tooltiptext'>在这里发布供求，寻求支持</span></a></li>\n<li class='sec'><a href='/huili/include/login.php' class='btn btn-head-signin tooltip' title=''>登录</a></li>\n<li class='sec'><a href='/huili/include/signup.php' class='btn btn-head-signup' title=''>注册</a></li>\n</ul>\n<ul class='list-unstyled list-mobilebtns'>\n<li><a href='/huili/include/login.php' class='btn btn-outline btn-head-signin' title='登录'>登 录</a></li>\n<li><a href='/huili/include/signup.php' class='btn btn-primary btn-head-signup' title='免费注册'>注 册</a></li>\n</ul>\n</div><!-- /.navbar-collapse -->\n</div><!-- /.container-fluid -->\n</nav>\n</header>\n";
$EX_HTML['home']	=	"<section class='promo promo--home'><div class='container'><div class='promo-msg promo-msg--half'><h1 class='animated'>".$GLOB_DEF['MSG_HOME_TITLE']."</h1><p class='intro animated'>".$GLOB_DEF['MSG_HOME_CON']."</p></div></div><div class='promo-hero'><div></div></div></section>";
$EX_HTML['feature']	=	"<section class='block'><div class='container'><div class='inner'><p class='sect'>".$GLOB_DEF['FEAT_TITLE_1']."</p><h2>".$GLOB_DEF['FEAT_TITLE_2']."</h2><p class='intro'>".$GLOB_DEF['FEAT_TITLE_3']."</p><p class='intro'>".$GLOB_DEF['FEAT_MSG_M']."</p><ul class='list-unstyled list-promo'><li><img class='picto' src='".$GLOB_DEF['FEAT_IMG_1']."' alt='互联的平台'/><h3 class='withtopline'>".$GLOB_DEF['FEAT_MSG_A1']."</h3><p>".$GLOB_DEF['FEAT_MSG_A2']."</p></li><li><img class='picto' src='".$GLOB_DEF['FEAT_IMG_2']."' alt='优质的服务'/><h3 class='withtopline'>".$GLOB_DEF['FEAT_MSG_B1']."</h3><p>".$GLOB_DEF['FEAT_MSG_B2']."</p></li><li><img class='picto' src='".$GLOB_DEF['FEAT_IMG_3']."' alt='完整的资源'/><h3 class='withtopline'>".$GLOB_DEF['FEAT_MSG_C1']."</h3><p>".$GLOB_DEF['FEAT_MSG_C2']."</p></li></ul></div></div></section>";
$EX_HTML['expert_beg']	=	"<section class='promo network'>\n<div class='container'>\n<div class='promo-msg wide'>\n<p class='sect'>".$GLOB_DEF['EXPE_TITLE_1']."</p>\n<h1 class='animated'>".$GLOB_DEF['EXPE_TITLE_2']."</h1>\n<p class='intro animated'>".$GLOB_DEF['EXPE_TITLE_3']."</p>\n<a href='#integrations' class='learn-more smooth animated'>\n<div>".$GLOB_DEF['EXPE_TITLE_4']."</div>\n<img src='".$GLOB_DEF['EXPE_TITLE_IMG']."' alt='>'/>\n</a>\n</div>\n</div>\n</section>\n<section class='block' id='integrations'>\n<div class='container'>\n<div class='inner'>\n<p class='sect animated'>".$GLOB_DEF['EXPE_MSG_1']."</p>\n<h2 class='animated'>".$GLOB_DEF['EXPE_MSG_2']."</h2>\n<p class='intro animated'>".$GLOB_DEF['EXPE_MSG_3']."<br />\n<a href='/contact'>".$GLOB_DEF['EXPE_MSG_4']."</a>".$GLOB_DEF['EXPE_MSG_5']."</p>\n<ul class='list-unstyled list-brands'>\n";
//下面的变量需要sprintf函数组合三个参数
$EX_HTML['expert_list']	=	"<li class='animated'>\n<a href='%s'>\n<div class='brand-logo'>\n<span class='%s'></span>\n</div>\n<div class='brand-msg'>\n<p>%s</p>\n</div>\n<div class='brand-foot'>\n<div class='btn'>详细了解<i class='icon-arrow'></i></div>\n</div>\n</a>\n</li>\n";
$EXP_HTML['expert_end']	=	"</ul>\n</div>\n</div>\n</section>\n<br>";






//}}}
unset($s1);unset($s2);unset($s3);unset($s4);unset($s5);
?>
