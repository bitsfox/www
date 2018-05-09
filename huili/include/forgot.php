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
echo "<link rel='stylesheet' href='".constant("CSS_FILEB")."'>";
echo "<link rel='stylesheet' href='".constant("CSS_FILEA")."'>";
echo "<script src='".constant("JS_FILE_ONE")."'></script>";
echo "<script src='".constant("JS_FILE_TWO")."'></script>";
//echo "<script src='".constant("JS_FILE_THR")."'></script>";
echo "</head>";
?>
    <body class="loginpage">
        <div class="bg">
  <div class="loginbox">
        <form class="form form-landing" action='./forgot.php' method="post">
      <input type="hidden" value="2e7c1d51-7cdc-48b4-a74b-8483e4a7173b" name="authenticityToken" />
      <!-- Form Login -->
      <div class="form-login form-box">
        <div class="side-head">
    	<a href="/huili/index.php"><img class="logo" src='../images/logo/logo.png5.png' alt="huishi group"></a>
</div>
        <h5>Forgot your password?</h5>
        <p class="intro">We'll email you a link to reset your password.</p>
        <div class="form-group">
          <label>Email Address</label>
          <div class="form-suffix">
			<span class='fa fa-envelope-o fa-lg picto'></span>
            <input type="email" class="form-control" name="email" value="" placeholder="Email" />
          </div>
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-fat btn-block">Reset Password</button>
        </div>
        <div class="form-group form-out text-center">
          <p>Remembered your password? <a href='/auth/signin' class="btn-text btn-backlogin">Sign</a></p>
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
