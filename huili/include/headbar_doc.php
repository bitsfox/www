<?php
/**
 @package		huili manager
 @version		0.0.0.1
 @author		田勇 Alisa tybitsfox <tybitsfox@163.com>
 @license		GPLv2

本文件是浮动菜单栏的定义及输出文件。
 **/
?>
  <!-- Mobile top bar -->
 <div class="mobile-bar">
   <div class="logobox">
       <a href="/app/home" title="Greenback Home">
           <img class="logo" src='/huili/images/logo/logo-greenback-mobile.png' alt="Greenback"/>
       </a>
   </div>
   <div class="mobile-menu">
     <button type="button" class="navbar-toggle btn-mobilemenu">
       <span class="sr-only">Toggle navigation</span>
       <span class="title">MENU</span>
       <span class="bars">
         <span class="icon-bar icon-bar1"></span>
         <span class="icon-bar icon-bar2"></span>
         <span class="icon-bar icon-bar3"></span>
       </span>
     </button>
   </div>
 </div>
<div class='overlay'></div>
<header class='header'>
   <nav class='navbar navbar-default'>
     <div class='container-fluid'>
       <div class='navbar-header'>
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-side" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a href="#" class="btn-closemenu"><i class="icon-x"></i></a>
<a class='navbar-brand' href='/huili/index.php'><img src='/huili/images/logo/logo.png5.png' alt='Greenback'/></a>
	   </div>
       <div class='collapse navbar-collapse' id='mobile-side'>
         <ul class='nav navbar-nav navbar-right'>
       <!--   <li class='dropdown'><a href='#' class='dropdown-toggle tooltip' data-toggle='dropdown'>管家服务<b class='caret'></b><span class='tooltiptext'>您身边的环保专家,为您提供专业的服务</span></a> 
		   <ul class='dropdown-menu'>
				<li><a href='#'><span class='fa fa-gear fa-fw'></span>&nbsp;环评咨询</a></li>
				<li><a href='#'><span class='fa fa-truck fa-fw'></span>&nbsp;环境工程</a></li>
				<li><a href='#'><span class='fa fa-flask fa-fw'></span>&nbsp;环境监测</a></li>
				<li><a href='#'><span class='fa fa-pagelines fa-fw'></span>&nbsp;项目验收</a></li>
				<li><a href='#'><span class='fa fa-recycle fa-fw'></span>&nbsp;清洁生产</a></li>
				<li><a href='#'><span class='fa fa-fire fa-fw'></span>&nbsp;危废服务</a></li>
				<li><a href='#'><span class='fa fa-calendar-check-o fa-fw'></span>&nbsp;应急预案</a></li>
				<li><a href='#'><span class='fa fa-pencil fa-fw'></span>&nbsp;排污申报</a></li>
		   </ul>
		   </li> -->
		   	   <li><a href='/huili/index.php?selecter=a001' class='tooltip'>管家服务<span class='tooltiptext'>您身边的环境专家，为您提供专业的服务</span></a></li>
		   	   <li><a href='/huili/index.php?selecter=a002' class='tooltip'>专家团队<span class='tooltiptext'>聚集了环保全领域的资深专家和优秀人才</span></a></li>
<!--       <li><a href='#' title='Learn from the Experts in Connected Accounting'>Blog</a></li> -->
<!--           <li class='dropdown'><a href='#' class='dropdown-toggle tooltip' data-toggle='dropdown' >资讯信息<b class='caret'></b><span class='tooltiptext'>建设项目名录、管家案例</span></a>
		   	<ul class='dropdown-menu'>
				<li><a href='#'><span class='fa fa-book fa-fw'></span>&nbsp;企业名录</a></li>
				<li><a href='#'><span class='fa fa-snapchat-ghost fa-fw'></span>&nbsp;环境案例</a></li>
				<li><a href='#'><span class='fa fa-joomla fa-fw'></span>&nbsp;技术动态</a></li>
				<li><a href='#'><span class='fa fa-wpforms fa-fw'></span>&nbsp;环境法规</a></li>
				<li><a href='#'><span class='fa fa-download fa-fw'></span>&nbsp;资料下载</a></li>
			</ul>
		   </li>  -->
           <li><a href='#' class='tooltip'>监控平台<span class='tooltiptext'>污染源、水站、空气站在线监控平台</span></a></li>
           <li><a href='#' class='tooltip'>交流互动<span class='tooltiptext'>在这里发布供求，寻求支持</span></a></li>
           <li class='sec'><a href='/huili/include/login.php' class='btn btn-head-signin tooltip'>登录<span class='tooltiptext'>Sign In</span></a></li>
           <li class='sec'><a href='/huili/include/signup.php' class='btn btn-head-signup' title='Sign Up for Free'>注册</a></li>
         </ul>
         <ul class='list-unstyled list-mobilebtns'>
           <li><a href='/huili/include/signin.php' class='btn btn-outline btn-head-signin' title='Sign In'>登 录</a></li>
           <li><a href='/huili/include/signup.php' class='btn btn-primary btn-head-signup' title='Sign Up for Free'>注 册</a></li>
         </ul>
       </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
   </nav>
</header>
<?php
/*echo "<img src='/huili/images/logo/aboutditu.jpg' style='width:100%;cursor:pointer'>";
echo "<br><span class='fa fa-glass fa-lg'></span><br>";*/

?>
