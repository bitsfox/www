<?php
/*这是一个由接口导出的类定义文件的扩展
  也就是本目录下main.php文件的扩展
 

 	2016-4-17  田勇 alias tybitsfox
 */
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
//{{{class tb_mxleft implements tab_show 明晰的左边栏
class tb_mxleft implements tab_show
{
	private $ay,$cy;
	private $dy;
	private $nowtile,$rq;
	private $ey=array();
	public function __construct()
	{
  		date_default_timezone_set("PRC");
		if($_POST['starttime'])
		{
			$this->rq=$_POST['starttime'];
		}
		else
		{
  			$this->nowtime = time();
  			$this->rq = date("Y-m-d",$this->nowtime);
		}
		global $arry;
		if(!is_array($arry))
			$arry=array();
		//only for test!!
		$this->ay=array("市直","泰山区","岱岳区");//控制区域
		$this->cy=array("泰山华艺纸业","泰安康平纳毛纺织","泰山啤酒","泰山石膏股份有限公司","山东泰山生力源集团","山东泰安制药厂");
		array_push($this->ey,$this->cy);
		array_push($arry,$this->cy);
		$this->cy=array("泰山玻纤慢庄分厂","岱银纺织","山东春雪羊绒制品");
		array_push($this->ey,$this->cy);
		array_push($arry,$this->cy);
		$this->cy=array("泰安富泰毛纺织","鲁怡针织印染","新矿集团盐化公司","泰安金辉制衣","泰安中泰纸业有限公司");
		array_push($this->ey,$this->cy);
		array_push($arry,$this->cy);
//		$this->cy=array("国控","省控","市控","县控");//控制级别
		$this->dy=array("实时值","日均值");//数据类型
	}
	public function show_header()
	{
		$i=count($this->ay);
		if(isset($_POST["sel1p"]))
			$k=$_POST["sel1p"];
		else
			$k=0;
		$s1="<br><div class='dvmsg'>控制区域：</div><div class='select_style'><select name='sel1p' id='sel1p' onchange = 'onsss()'>";
		for($j=0;$j<$i;$j++)
		{
			if($j == $k)
				$s1.="<option value=".$j." selected='selected'>".$this->ay[$j]."</option>";
			else
				$s1.="<option value=".$j.">".$this->ay[$j]."</option>";
		}
		$s1.="</select></div><div id='clear_id'></div>";
		echo $s1;	//end of control area
		$i=count($this->ey);
		if($k>=$i)
			die("get array count error");
		$this->cy=$this->ey[$k];
		if(isset($_POST["sel2p"]))
			$k=$_POST["sel2p"];
		else
			$k=0;
		$i=count($this->cy);
		$s1="<br><div class='dvmsg1'>单位名称：</div><div class='select_style1'><select name='sel2p' id='sel2p'>";
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
		$s1.="<div class='dvmsg'><input type='text' id='text1_id' name='starttime' onfocus='MyCalendar.SetDate(this)' value='".$this->rq."'/>";
		$s1.="</div><div id='clear_id'></div>";
		echo $s1;
		$s1="<br><br><div class='dwmsg'>";
		if(isset($_POST['radio1']))
		{
			if($_POST['radio1'] == 1)
				$k=0;
			else
				$k=1;
		}
		else
			$k=0;
		if($k==0)
		{
			$s1.="<input type='radio' name='radio1' value=1 checked />数据以表格显示";
			$s1.="<input type='radio' name='radio1' value=2 />数据以图形显示</div>";
		}
		else
		{
			$s1.="<input type='radio' name='radio1' value=1 />数据以表格显示";
			$s1.="<input type='radio' name='radio1' value=2 checked/>数据以图形显示</div>";
		}
		echo $s1;
		$s1="<br><br><center><input type='submit' id='button_id' name='submit' value='应用'></center>";
		echo $s1;
	}
	public function show_tail()
	{}
}//}}}

//{{{class tb_mxright_t implements tab_show 明晰的右边栏
class tb_mxright_t implements tab_show
{
	private $ay,$cy;
	private $dy=array();
	public function __construct()
	{//now no data,these only for test!
		$this->ay=array("编号","单位名称","COD","氨氮","累计流量");
		$this->cy=array("监测值","标准值");
		//only for test!
		$ey=array("1","泰山康平纳毛纺织","137","200","--","--","1679356");
		array_push($this->dy,$ey);
		$ey=array("2","泰山石膏股份有限公司","186","500","3.3","45","1742970");
		array_push($this->dy,$ey);
		$ey=array("3","岱银纺织","100","200","8.83","20","53114940");
		array_push($this->dy,$ey);
		$ey=array("4","新矿集团盐化公司","63","60","5.19","10","275402");
		array_push($this->dy,$ey);
		$ey=array("5","泰安中泰纸业有限公司","14","60","0.61","10","2660074");
		array_push($this->dy,$ey);
	}
	public function show_header()
	{
		$s1="<table width=97% class='imagetable'><tr>";
		$s2="<th width=10% rowspan=2 align=center>".$this->ay[0]."</th>";
		$s1.=$s2;
		$s2="<th width=30% rowspan=2 align=center>".$this->ay[1]."</th>";
		$s1.=$s2;
		$s2="<th width=20% colspan=2 align=center>".$this->ay[2]."</th>";
		$s1.=$s2;
		$s2="<th width=20% colspan=2 align=center>".$this->ay[3]."</th>";
		$s1.=$s2;
		$s2="<th width=20% rowspan=2 align=center>".$this->ay[4]."</th></tr><tr>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[1]."</th>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=10% align=center>".$this->cy[1]."</th></tr>";
		$s1.=$s2;
		echo $s1;
	}
	public function show_body()
	{
		for($k=0;$k<2;$k++)
		{
			$i=count($this->dy);
			for($j=0;$j<$i;$j++)
			{
				$fy=$this->dy[$j];
				$s1="<tr><td width=%10>".$fy[0]."</td><td width=30%>".$fy[1]."</td>";
				if(($fy[2]>$fy[3]) && ($fy[3]>0))
					$s1.="<td width=10% id='tdid'>".$fy[2]."</td><td width=10%>".$fy[3]."</td>";
				else
					$s1.="<td width=10%>".$fy[2]."</td><td width=10%>".$fy[3]."</td>";
				if(($fy[4]>$fy[5]) && ($fy[5]>0))
					$s1.="<td width=10% id='tdid'>".$fy[4]."</td><td width=10%>".$fy[5]."</td><td width=20%>".$fy[6]."</td></tr>";
				else
					$s1.="<td width=10%>".$fy[4]."</td><td width=10%>".$fy[5]."</td><td width=20%>".$fy[6]."</td></tr>";
				echo $s1;
			}
		}
	}
	public function show_tail()
	{echo "</table>";}
}//}}}

?>
