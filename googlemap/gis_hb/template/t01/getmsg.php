<?php
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."php_hl/";
	define("FULL_PATH",$s2);
}
if(isset($_GET['daa']))
{
	if($_GET['daa'] == "bbb")
	{
		$ifile=constant("FULL_PATH")."config/main.php";
		require_once($ifile);
		global	$DB_ADDR_TY,$DB_PORT_TY,$DB_NAME_TY;
		if(isset($_GET['dstdate']))
		{
			$rq=$_GET['dstdate'];
		}
		else
		{
  			$nowtime = time();
  			$rq = date("Y",$nowtime);
		}
		if(isset($DB_ADDR_TY[$rq]))
		{
			echo "SADDR:".$DB_ADDR_TY[$rq]."<br>";
			echo "SPORT:".$DB_PORT_TY[$rq]."<br>";
			echo "SDB:".$DB_NAME_TY[$rq]."<br>";
		}
		else
		{
			echo "SADDR:NULL<br>";
			echo "SPORT:NULL<br>";
			echo "SDB:NULL<br>";
		}	
	}
}
?>
