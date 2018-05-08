<?php
/**
 @package		huili manager
 @version		0.0.0.1
 @author		田勇 Alisa tybitsfox <tybitsfox@163.com>
 @license		GPLv2

本文件是超文本头部的定义及输出文件，包括了对所需css和js文件的引入
 **/
?>
<?php
if(!defined("FULL_PATH"))
	require_once("../need.php");
echo "<!DOCTYPE html>\n<html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />\n";
echo "<title>testtest</title>\n";	//<--这里修改标题
//echo "<link rel='stylesheet' href='".constant("CSS_FILE")."'>";
echo "<link rel='stylesheet' href='".constant("CSS_FILEA")."'>";
echo "<link rel='stylesheet' href='".constant("CSS_FILEB")."'>";
echo "<script src='".constant("JS_FILE_ONE")."'></script>";
echo "<script src='".constant("JS_FILE_TWO")."'></script>";
//echo "<script src='".constant("JS_FILE_THR")."'></script>";
echo "</head>";
?>
    <body class='loginpage'>
        <div class="bg">
  <div class="loginbox">
        <form class="form form-landing" action='#' method="post">
      <input type="hidden" value="b7f4a68d-58ad-486d-a554-e3781e727376" name="authenticityToken" />
      <!-- Form Login -->
      <div class="form-login form-box">
        <div class="side-head">
    <a href="/"><img class="logo" src='../images/logo/logo.png5.png' alt="huishi group"></a>
</div>
        <div>
          <div class="form-group">
            <label>Email</label>
            <div class="form-suffix">
			  <span class='fa fa-envelope-o fa-lg picto'></span>
              <input id="email" type="email" class="form-control first" name="email" value=''
                placeholder="Email" autocorrect="off" autocapitalize="none" autocomplete="username" required autofocus />
            </div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="form-suffix">
			  <span class='fa fa-key fa-lg picto'></span>
              <input id="password" type="password" class="form-control last" name="password" value=""
                placeholder="Password" autocomplete="current-password" required />
            </div>
          </div>
        </div>
        <div class="form-group form-twocols">
          <div class="pass-reset">
            <a href="/auth/forgot" class="btn-text">Forgot your password?</a>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" href="#" class="btn btn-primary btn-fat btn-block">Sign In</button>
        </div>
        <div class="form-group form-out">
          <p>Don't have an account yet? <a href="/register/signup" class="btn-text">Sign Up</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
        <!-- Footer -->
       <footer class="footer">
         <div class="inner">
           <div class="row">
             <div class="col-sm-12">
               <p class="copy">&COPY; 2018 Greenback, Inc. All Rights Reserved</p>
             </div>
           </div>
         </div>
       </footer>
    </body>
</html>
