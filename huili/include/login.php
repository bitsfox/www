<?php
/**
 @package		huili manager
 @version		0.0.0.1
 @author		田勇 Alisa tybitsfox <tybitsfox@163.com>
 @license		GPLv2

本文件是用户的登录界面文件，该文件是个独立的文件，不与head_doc.php组合，其本身包括了对所需css和js文件的引入
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
    <body class='loginpage'>
        <div class="bg">
  <div class="loginbox">
        <form class="form form-landing" action='#' method="post">
      <input type="hidden" value="b7f4a68d-58ad-486d-a554-e3781e727376" name="authenticityToken" />
      <!-- Form Login -->
      <div class="form-login form-box">
        <div class="side-head">
    	<a href="/huili/index.php"><img class="logo" src='../images/logo/logo.png5.png' alt="huishi group"></a>
</div>
        <div>
<!--如果输入错误，则会出现这个提示
        <div class="alert alert-danger" role="alert">
              <strong>Uh oh!</strong> Invalid username or password.
        </div>-->

          <div class="form-group">
            <label>Email</label>
            <div class="form-suffix">
			  <span class='fa fa-envelope-o fa-lg picto'></span>
              <input id="email" type="email" class="form-control first" name="email" value=''
                placeholder="Email" autocorrect="off" autocapitalize="none" autocomplete="username" required/>
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
            <a href="./forgot.php" class="btn-text">是不是忘记密码了?</a>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" href="#" class="btn btn-primary btn-fat btn-block">登 录</button>
        </div>
        <div class="form-group form-out">
          <p>您还没有帐号? <a href="/register/signup" class="btn-text">注 册</a></p>
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
               <p class="copy">&COPY; 2018 汇氏环境, Inc. 保留所有权利</p>
             </div>
           </div>
         </div>
       </footer>
    </body>
</html>
