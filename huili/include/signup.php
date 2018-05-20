<?php
if(!defined("FULL_PATH"))
	require_once("../need.php");
require_once(constant("FULL_PATH")."lib/main.php");
require_once(constant("FULL_PATH")."config/email.php");
global $SIGN_DEF;
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
echo $SIGN_DEF["tail"];
?>
<?php
/*
<!-- 
<body class='loginpage'>
        <div class='bg'>
  <div class='loginbox'>
        <form class='form form-landing' action='/register/signup' method='POST'>
        <input type='hidden' value='9a978e66-57e4-49fc-a40a-007b101bf1b4' name='authenticityToken' />
        <div class='form-signup form-box'>
          <div class='side-head'>
    <a href='/'><img class='logo' src='/assets/images/logo-greenback.png' alt='Greenback'></a>
</div>
            <div class='alert alert-danger' role='alert'>
              <strong>Uh oh!</strong> This email is already registered. Maybe you want to login or recover your password?
            </div>
          <h5 class='text-center'>Get receipts with an IQ!</h5>
          <p class='intro'>Discover how connected accounting can save you time and money.</p>
          <div class='form-group'>
            <label>Email Address</label>
            <div class='form-suffix'>
              <i class='icon-email picto'></i>
              <input name='email' id='email' class='form-control' type='email' placeholder='Your email'
              value='tyyyyt@163.com' required/>
            </div>
          </div>
          <div class='form-group'>
            <button href='#' type='submit' class='btn btn-primary btn-block btn-fat'>Get Started</button>
          </div>
          <p class='intro'>Greenback is a spam free zone.</p>
          <div class='form-group form-out text-center'>
            <p>Already have an account? <a href='/auth/signin' class='btn-text'>Sign In</a></p>
          </div>
        </div>
    </form>
  </div>
</div>
    <body class='loginpage'>
        <div class='bg'>

  <div class='loginbox'>
        <form class='form form-landing'>

      <!-- Form Login -->
      <div class='form-login form-box'>

        <div class='side-head'>
    <a href='/'><img class='logo' src='/assets/images/logo-greenback.png' alt='Greenback'></a>
</div>


        <div>
          <h5>You're almost done!</h5>
             
          <p class='intro'>
            We sent a link to <strong>tybitsfox@163.com</strong>.
            Please check your email to finish signing up.
            Look in your spam/clutter folder too.
          </p>
        </div>
        
      </div>
    </form>

  </div>

</div>
<!-- -->
   <body class='loginpage'>
        <div class='bg'>

  <div class='loginbox'>
            <form class='form form-landing' action='/register/register'  method='post'>
            <input type='hidden' value='9a978e66-57e4-49fc-a40a-007b101bf1b4' name='authenticityToken' />
            <input type='hidden' name='code' value='kr7pE7sVnRsjdNN9YWahJ-JaQb9oYoYnrZEayix9TohVJgYEVWk73Wbfxv6VJ9-E' />

            <!-- Form Login -->
            <div class='form-signup form-box'>

                <div class='side-head'>
    <a href='/'><img class='logo' src='/assets/images/logo-greenback.png' alt='Greenback'></a>
</div>


                
                <p class='intro'>Complete signup for <strong>tybitsfox@163.com</strong></p>
                
                <div class='form-group'>
                    <label>Name</label>
                    <div class='form-suffix'>
                        <i class='icon-user picto'></i>
                        <input id='name' type='text' class='form-control first' placeholder='First and last name' name='name'
                            value='' required autofocus />
                    </div>
                </div>

                <!-- hide from humans but still visible so browser will detect it as username -->
                <input id='email' type='text' style='height:1px;margin:0px;padding:0px;border:0px;color:white;position:absolute;'
                  name='email' value='tybitsfox@163.com' autocomplete='username' tabindex='-1' />
                
                <div class='form-group'>
                    <label>Password</label>
                    <div class='form-suffix'>
                        <i class='icon-password picto'></i>
                        <input id='password' type='password' class='form-control first' name='password' value=''
                            placeholder='Password' required autocomplete='new-password'
                            pattern='(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*()+=?_-])(?=.*[0-9]).{8,100}'
                            title='A password must be 8 or more characters and use upper and lower case letters (e.g. Aa), a number (e.g. 1234), and a symbol (e.g. !$&*)' />
                    </div>
                    <div class='help-block'>
                        A password must be 8 or more characters and use upper and lower case letters (e.g. Aa), a number (e.g. 1234), and a symbol (e.g. !$&*)
                    </div>
                </div>
                
                

                <div class='form-group'>
                    <div class='checkbox'>
                        <label>
                            <input type='checkbox' id='trusted' name='trusted' checked data-ninja-checkbox> Trust this device <span class='helper' data-toggle='tooltip' data-placement='top' title='Trusting a device means that you will be able to log into the Greenback service without performing any additional verification beyond username and password. If you do not trust a device then you will required to verify your identity by entering a one-time verification code that will be sent the email address linked to your account. You will enter this verification code on the challenge screen that you will be presented with after entering a correct username password combination. '>?</span>
                        </label>
                    </div>
                </div>


                <div class='form-group form-delimited'>
                    <p class='intro'>By signing up you agree to our <a href='/terms' target='_blank'>Terms and Conditions</a> and <a href='/privacy' target='_blank'>Privacy Policy</a>. </p>
                </div>

                <div class='form-group form-delimited'>
                    <button type='submit' class='btn btn-primary btn-fat btn-block'>Sign Up</button>
                </div>

                <div class='form-group form-out'>
                    <p>Already have an account? <a href='/auth/signin' class='btn-text'>Sign In</a></p>
                </div>

            </div>
        </form>

  </div>

</div> -->
*/
?>
