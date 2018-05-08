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
<a class='navbar-brand' href='/'><img src='/huili/images/logo/logo.png5.png' alt='Greenback'/></a>
	   </div>
       <div class='collapse navbar-collapse' id='mobile-side'>
         <ul class='nav navbar-nav navbar-right'>
           <li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' title='您身边的环保专家,为您提供专业的服务'>管家服务<b class='caret'></b></a>
		   <ul class='dropdown-menu'>
				<li><a href='#'><span class='fa fa-gear fa-fw'></span>&nbsp;环评咨询</a></li>
				<li><a href='#'><span class='fa fa-truck fa-fw'></span>&nbsp;环保工程</a></li>
				<li><a href='#'><span class='fa fa-flask fa-fw'></span>&nbsp;环境监测</a></li>
				<li><a href='#'><span class='fa fa-pagelines fa-fw'></span>&nbsp;项目验收</a></li>
				<li><a href='#'><span class='fa fa-recycle fa-fw'></span>&nbsp;清洁生产</a></li>
				<li><a href='#'><span class='fa fa-fire fa-fw'></span>&nbsp;危废服务</a></li>
				<li><a href='#'><span class='fa fa-calendar-check-o fa-fw'></span>&nbsp;应急预案</a></li>
				<li><a href='#'><span class='fa fa-pencil fa-fw'></span>&nbsp;排污申报</a></li>
		   </ul>
		   </li>
           <li><a href='#' title='聚集了环保全领域的资深专家和优秀人才'>专家团队</a></li>
<!--       <li><a href='#' title='Learn from the Experts in Connected Accounting'>Blog</a></li> -->
           <li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown' title='建设项目名录、管家案例'>资讯信息<b class='caret'></b></a>
		   	<ul class='dropdown-menu'>
				<li><a href='#'><span class='fa fa-book fa-fw'></span>&nbsp;项目名录</a></li>
				<li><a href='#'><span class='fa fa-snapchat-ghost fa-fw'></span>&nbsp;环保案例</a></li>
				<li><a href='#'><span class='fa fa-joomla fa-fw'></span>&nbsp;技术动态</a></li>
				<li><a href='#'><span class='fa fa-wpforms fa-fw'></span>&nbsp;环保法规</a></li>
				<li><a href='#'><span class='fa fa-download fa-fw'></span>&nbsp;资料下载</a></li>
			</ul>
		   </li> 
           <li><a href='#' title='污染源、水站、空气站在线监控平台'>监控平台</a></li>
           <li><a href='#' title='在这里发布供求，寻求支持'>交流互动</a></li>
           <li class='sec'><a href='./include/login.php' class='btn btn-head-signin' title='Sign In'>登录</a></li>
           <li class='sec'><a href='#' class='btn btn-head-signup' title='Sign Up for Free'>注册</a></li>
         </ul>
         <ul class='list-unstyled list-mobilebtns'>
           <li><a href='./signin.php' class='btn btn-outline btn-head-signin' title='Sign In'>登 录</a></li>
           <li><a href='./signup.php' class='btn btn-primary btn-head-signup' title='Sign Up for Free'>注 册</a></li>
         </ul>
       </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
   </nav>
</header>
  <section class="promo promo--home">
    <div class="container">
      <div class="promo-msg promo-msg--half">
        <h1 class="animated">懂你所需、做你所想</h1>
          <p class="intro animated">
			汇众环保管家，是目前国内环保行业唯一的线上线下联动、一站式、全流程的第三方服务平台。
			公司现已通过本平台发展形成线上线下专业环保服务团队和国内领先的环保供应链体系。未来，
			公司将以绿色环保科技为努力方向，打造国内最大最专业的环保咨询服务平台。
         </p>
      </div>
    </div>
    <!-- Promo Slider -->
    <div class="promo-hero">
      <div>
        
      </div>
      <!--
      <div>
        <img src="img/hero-home2.png" alt="Greenback will help you organize your online purchases"/>
      </div>  -->
    </div> 	
  </section>
<?php
echo "<img src='/huili/images/logo/aboutditu.jpg' style='width:100%;cursor:pointer'>";
echo "<br><span class='fa fa-glass fa-lg'></span><br>";
?>
