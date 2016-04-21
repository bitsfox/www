<?php
session_start();
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"php_hl");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."php_hl/";
	define("FULL_PATH",$s2);
}
//确保包含了全局变量的定义文件
$ifile=constant("FULL_PATH")."config/main.php";
require_once($ifile);
$st=constant("FULL_PATH")."include/inter_def.php";
require_once($st);
//{{{class tb_qleft implements tab_show
class tb_qleft implements tab_show
{
	private $ay,$cy;
	private $dy;
	private $nowtile,$rq;
	public function __construct()
	{
  		date_default_timezone_set("PRC");
  		$this->nowtime = time();
  		$this->rq = date("Y-m-d",$this->nowtime);
		$this->ay=array("市直","泰山区","岱岳区","东平县","宁阳县","肥城市","新泰市");//控制区域
		$this->cy=array("国控","省控","市控","县控");//控制级别
		$this->dy=array("小时值","日均值");//数据类型
	}
	public function show_header()
	{
		$i=count($this->ay);
		if(isset($_POST["sel1"]))
			$k=$_POST["sel1"];
		else
			$k=0;
		$s1="<br><div class='dvmsg'>控制区域：</div><div class='select_style'><select name='sel1'>";
		for($j=0;$j<$i;$j++)
		{
			if($j == $k)
				$s1.="<option value=".$j." selected='selected'>".$this->ay[$j]."</option>";
			else
				$s1.="<option value=".$j.">".$this->ay[$j]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;	//end of control area
		if(isset($_POST["sel2"]))
			$k=$_POST["sel2"];
		else
			$k=0;
		$i=count($this->cy);
		$s1="<br><div class='dvmsg'>控制级别：</div><div class='select_style'><select name='sel2'>";
		for($j=0;$j<$i;$j++)
		{
			if($j == $k)
				$s1.="<option value=".$j." selected='selected'>".$this->cy[$j]."</option>";
			else
				$s1.="<option value=".$j.">".$this->cy[$j]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;	//end of control level
		if(isset($_POST["sel3"]))
			$k=$_POST["sel3"];
		else
			$k=0;
		$i=count($this->dy);
		$s1="<br><div class='dvmsg'>数据类型：</div><div class='select_style'><select name='sel3'>";
		for($j=0;$j<$i;$j++)
		{
			if($j == $k)
				$s1.="<option value=".$j." selected='selected'>".$this->dy[$j]."</option>";
			else
				$s1.="<option value=".$j.">".$this->dy[$j]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;	//end of data type
	}
	public function show_body()
	{
		$s1="<br><div class='dvmsg'>日均值日期:</div>";
		$s1.="<div class='dvmsg'><input type='text' id='text_id' name='starttime' onfocus='MyCalendar.SetDate(this)' value='".$this->rq."'/>";
		$s1.="</div><div id='clear_id'></div>";
		echo $s1;
		$s1="<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
		$s1.="<center><input type='submit' id='button_id' name='submit' value='应用'></center>";
		echo $s1;
	}
	public function show_tail()
	{echo "</body></html>";}
}//}}}



?>


