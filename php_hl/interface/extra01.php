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
$st=constant("FULL_PATH")."core/main.php";
require_once($st);

////////////////////////////////////////////////////////////
//{{{ class data_sright implements main_data 废水实时主界面数据及标准的获取类
class data_sright implements main_data
{
	private $db,$ins;	//目标数据库相关信息，传入的查询条件。
	private $con_std,$con_val; //解析后生成的执行标准查询字符串和项目数据查询字符串
	private $say,$vay;  //标准数据数组，项目数据数组
//{{{ public function __construct()
	public function __construct()
	{
		if(!isset($_POST['starttime']))
			die("");
		if(!isset($_POST['sel1']))
			die("参数传递错误！sel1");
		if(!isset($_POST['sel2']))
			die("参数传递错误！sel2");
		if(!isset($_POST['sel3']))
			die("参数传递错误！sel3");
		if(!isset($_SESSION['sys_level']))
			die("初始化信息错误！sys_level");
		$i=intval($_POST['starttime']);
		$this->get_used_db($i);
	}//}}}
//{{{public function get_used_db($y)
	public function get_used_db($y)
	{
		global $DB_ADDR_TY,$DB_PORT_TY,$DB_NAME_TY,$DB_PWD_TY;
		global $DB_USER_TY;
		if(!isset($DB_ADDR_TY[$y]))
			die("你所选择的日期".$i."年，没有数据！");
		$this->db=array();
		array_push($this->db,$DB_ADDR_TY[$y]);
		array_push($this->db,$DB_PORT_TY[$y]);
		array_push($this->db,$DB_NAME_TY[$y]);
		array_push($this->db,$DB_USER_TY);
		array_push($this->db,$DB_PWD_TY);
	}//}}}
//{{{public function parse_sql()
	public function parse_sql()
	{//废水,县区级
		switch($_SESSION['sys_level'])
		{
		case 0: //县区级
			$s1="SELECT e.uname,e.cod,e.nhx,e.ll_sh,e.ll_jg FROM (SELECT a.uid,b.uname,a.cod,a.nhx,a.ll_sh,a.ll_jg FROM zd_info as b LEFT JOIN fs_h_master as a ON b.uid = a.uid AND a.date > date_add(now(),interval -2 hour) WHERE b.utype = 0 AND b.ctlvl = %d ORDER BY a.date DESC) AS e GROUP BY e.uid";
			$this->con_val=sprintf($s1,$_POST['sel2']);
			break;
		case 1://省级
			$s1="SELECT e.uname,e.cod,e.nhx,e.ll_sh,e.ll_jg FROM (SELECT b.uid,b.uname,a.cod,a.nhx,a.ll_sh,a.ll_jg FROM zd_info AS b LEFT JOIN fs_h_master AS a ON a.date > date_add(now(),interval -2 hour) AND a.uid = b.uid WHERE b.aid BETWEEN %u AND %u AND b.utype = 0 AND b.ctlvl = %d ORDER BY a.date DESC) AS e GROUP BY e.uid";
			$i=intval($_POST['sel1'])+1;
			$j=$i+98;
			$this->con_val=sprintf($s1,$i,$j,$_POST['sel2']);
			break;
		case 2://地市级
			$s1="SELECT e.uname,e.cod,e.nhx,e.ll_sh,e.ll_jg FROM (SELECT b.uid,b.uname,a.cod,a.nhx,a.ll_sh,a.ll_jg FROM zd_info AS b LEFT JOIN fs_h_master AS a ON a.date > date_add(now(),interval -1 month) AND a.uid = b.uid WHERE b.aid = %u AND b.utype = 0 AND b.ctlvl = %d ORDER BY a.date DESC) AS e GROUP BY e.uid";
			$this->con_val=sprintf($s1,$_POST['sel1'],$_POST['sel2']);
			break;
		default:
			$this->con_val="sys_level=".$_SESSION['sys_level'];
			break;
		};
	//	echo $this->con_val;
		$s1="SELECT b.uid,a.std1,a.std1_area,a.std2 FROM gb_std a,zd_info b WHERE b.utype = 0 AND b.ctlvl = %d AND b.uid = a.uid AND b.sttm < %s AND b.edtm > %s ORDER BY b.uid,a.iid";
		
	}//}}}
//{{{public function get_std()
	public function get_std()
	{
		$this->say=array();
	}//}}}
//{{{public function get_unit()
	public function get_unit()
	{
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_errno())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		if($res=mysqli_query($mysqli,"$this->con_val"))
		{
		$res=mysqli_query($mysqli,$this->con_val);
			$this->vay=array();
			while($row=mysqli_fetch_row($res))
				array_push($this->vay,$row);
			mysqli_free_result($res);
		}
		else
		{
			//mysqli_close($mysqli);
			var_dump($this->db);
			die("mysql query error!<br>".mysqli_error($mysqli));
		}
		mysqli_close($mysqli);
		return $this->vay;
	}//}}}

}//}}}
/////////////////////////////////////////////////////////////
//{{{class init_tab implements listbox_data 控制界面数据的获取类
class init_tab implements listbox_data
{
	private $conn,$str_sj,$str_ds;
	private $str_uxq,$str_usj,$str_uds;
	private $rq,$db,$utp;
//{{{public function __construct($y)	
	public function __construct($y)
	{
		if(!is_array($y))
			die("参数错误！");
		if(($y[1] == 0)||($y[1] == 1)||($y[1] == 2))
		{	$this->utp=$y[1];}
		else
			die("参数错误11！");
		if($y[0] != 0)
			$this->rq=intval($y[0]);
		else
			$this->get_cur_year();
		$this->get_used_db();
		$this->conn="SELECT aid,aname FROM area_info WHERE bused = 1";
		$this->str_sj="SELECT aid,aname FROM area_info WHERE aid BETWEEN %u AND %u AND aid%100 = 0";
		$this->str_ds="SELECT aid,aname FROM area_info WHERE aid BETWEEN %u AND %u";
		$this->str_uxq="SELECT uid,uname,ctlvl FROM zd_info WHERE utype = %d";//对于县区级，所有站点的aid都一样，所以无需判断
		$this->str_usj="SELECT uid,uname,ctlvl FROM zd_info WHERE utype = %d AND aid BETWEEN %u AND %u";//省级，需要获取在一定区间内的aid
		$this->str_uds="SELECT uid,uname,ctlvl FROM zd_info WHERE utype = %d AND aid = %u";//地市级，需要获取等于指定的aid
	}//}}}
//{{{public function __destruct()
	public function __destruct()
	{
		unset($this->db);
	}//}}}
//{{{public function get_cur_year()
	public function get_cur_year()
	{
		$dy=array();
		$dy=getdate(time());
		$this->rq= $dy['year'];
	}//}}}
//{{{public function get_used_db()
	public function get_used_db()
	{
		global $DB_ADDR_TY,$DB_PORT_TY,$DB_NAME_TY,$DB_PWD_TY;
		global $DB_USER_TY;
		$i=intval($this->rq);
		if(!isset($DB_ADDR_TY[$i]))
			die("你所选择的日期".$i."年，没有数据！");
		$this->db=array();
		array_push($this->db,$DB_ADDR_TY[$i]);
		array_push($this->db,$DB_PORT_TY[$i]);
		array_push($this->db,$DB_NAME_TY[$i]);
		array_push($this->db,$DB_USER_TY);
		array_push($this->db,$DB_PWD_TY);
	}//}}}
//{{{public function get_ctlarea()
	public function get_ctlarea()
	{
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_errno())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		$res=mysqli_query($mysqli,$this->conn);
		if(mysqli_num_rows($res) != 1)
		{
			mysqli_free_result($res);
			mysqli_close($mysqli);
			die("严重错误！行政区划的设定错误！");
		}
		$row=mysqli_fetch_row($res);
		$ay=array();
		if($row[0]%10000 == 0) //省级系统
		{
			$_SESSION['sys_level'] = 1;
			$i=intval($row[0])+1;
			$j=$i+9998;
			$s1=sprintf($this->str_sj,$i,$j);
		}
		else
		{
			if($row[0]%100 == 0) //地市级系统
			{
				$_SESSION['sys_level'] = 2;
				$i=intval($row[0])+1;
				$j=$i+98;
				$s1=sprintf($this->str_ds,$i,$j);
			}
			else
			{
				$_SESSION['sys_level'] = 0; //县区级系统
				array_push($ay,$row);
			}
		}
		mysqli_free_result($res);
		if($_SESSION['sys_level'] > 0)
		{
			$res=mysqli_query($mysqli,$s1);
			while($row=mysqli_fetch_row($res))
				array_push($ay,$row);
			mysqli_free_result($res);
		}
		mysqli_close($mysqli);
		return $ay;
	}//}}}
//{{{public function get_unit($y)
	public function get_unit($y)
	{
		global $arry;
		if(!is_array($arry))
			$arry=array();
		if(!is_array($y))
			die("缺少传入参数或参数错误！");
		if(!isset($_SESSION['sys_level']))
			die("控制区域错误，无法取得相应的站点信息");
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_errno())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		if($_SESSION['sys_level'] == 0) //县区级
		{
			//$s1=sprintf($this->str_uxq,$y[0][0]);
			$s1=sprintf($this->str_uxq,$this->utp);
			for($i=0;$i<5;$i++)
				$dy[$i]=array();
			$res=mysqli_query($mysqli,$s1);
			while($row=mysqli_fetch_row($res))
			{
				if($row[2] > 4)
				{
					mysqli_free_result($res);
					mysqli_close($mysqli);
					die("越界错误！");
				}
				array_push($dy[$row[2]],$row);
			}
			$ey=array();
			for($i=0;$i<5;$i++)
				array_push($ey,$dy[$i]);
			array_push($arry,$ey);//保证与省市控的处理一致，并同步全局变量
			mysqli_free_result($res);
			mysqli_close($mysqli);
			return;
		}
		if($_SESSION['sys_level'] == 1) //省级
		{
			$i=count($y);
			for($j=0;$j<$i;$j++)
			{
				for($k=0;$k<5;$k++)
					$dy[$k]=array();
				$cy=$y[$j];
				$m=intval($cy[0])+1;
				$n=$m+98;
				$s1=sprintf($this->str_usj,$this->utp,$m,$n);
				$res=mysqli_query($mysqli,$s1);
				while($row=mysqli_fetch_row($res))
				{
					if($row[2] > 4)
					{
						mysqli_free_result($res);
						mysqli_close($mysqli);
						die("越界错误1！");
					}
					array_push($dy[$row[2]],$row);
				}
				$ey=array();
				for($k=0;$k<5;$k++)
					array_push($ey,$dy[$k]);
				array_push($arry,$ey);//并同步全局变量
				mysqli_free_result($res);
			}
			mysqli_close($mysqli);
			return;
		}
		if($_SESSION['sys_level'] == 2) //地市级
		{
			$i=count($y);
			for($j=0;$j<$i;$j++)
			{
				$cy=$y[$j];
				$s1=sprintf($this->str_uds,$this->utp,$cy[0]);
				for($k=0;$k<5;$k++)
					$dy[$k]=array();
				$res=mysqli_query($mysqli,$s1);
				while($row=mysqli_fetch_row($res))
				{
					if($row[2] > 4)
					{
						mysqli_free_result($res);
						mysqli_close($mysqli);
						die("越界错误1！");
					}
					array_push($dy[$row[2]],$row);
				}
				$ey=array();
				for($k=0;$k<5;$k++)
					array_push($ey,$dy[$k]);
				array_push($arry,$ey);//并同步全局变量
				mysqli_free_result($res);
			}
			mysqli_close($mysqli);
			return;
		}
	}//}}}
}//}}}


?>
<?php
/*
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
		$this->dy=array("小时值","日均值","小时超标值","日均超标值");//数据类型
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
//{{{class tb_mxright_t implements tab_show 明晰的右边栏-表格显示
class tb_mxright_t implements tab_show
{
	private $ay,$cy;
	private $dy=array();
	public function __construct()
	{//now no data,these only for test!
		$this->ay=array("编号","时间","COD","氨氮","累计流量");
		$this->cy=array("监测值","标准值");
		//only for test!
		$ey=array("1","2016-04-22:15:20","37","60","11.34","10","1679356");
		array_push($this->dy,$ey);
		$ey=array("2","2016-04-22:16:20","56","60","3.3","10","16842970");
		array_push($this->dy,$ey);
		$ey=array("3","2016-04-22:17:20","47","60","8.83","10","16884940");
		array_push($this->dy,$ey);
		$ey=array("4","2016-04-22:18:20","63","60","5.19","10","16925402");
		array_push($this->dy,$ey);
		$ey=array("5","2016-04-22:19:20","54","60","6.1","10","1697074");
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
//{{{class tb_mxright_g implements tab_show 明晰的右边栏-图形显示
class tb_mxright_g implements tab_show
{
	private $ay=array();
	private $cy=array();
	private $dy=array();
	public function __construct()
	{//now no data,these only for test!
		for($i=0;$i<24;$i++)
		{
			$str=$i."时";
			array_push($this->ay,$str);
		}
		for($i=0;$i<70;$i+=10)
			array_push($this->cy,$i);
//		$this->ay=array("编号","时间","COD","氨氮","累计流量");
//		$this->cy=array("监测值","标准值");
		//only for test!
		$ey=array("1","2016-04-22:15:20","37","60","11.34","10","1679356");
		array_push($this->dy,$ey);
		$ey=array("2","2016-04-22:16:20","56","60","3.3","10","16842970");
		array_push($this->dy,$ey);
		$ey=array("3","2016-04-22:17:20","47","60","8.83","10","16884940");
		array_push($this->dy,$ey);
		$ey=array("4","2016-04-22:18:20","63","60","5.19","10","16925402");
		array_push($this->dy,$ey);
		$ey=array("5","2016-04-22:19:20","54","60","6.1","10","1697074");
		array_push($this->dy,$ey);
	}//2016-4-28 test ok! so i can focus on my graphic-code
	public function show_header()
	{//no use in this class,so put the init data here
		$this->range_ary();
	}
	public function show_body()
	{//values trans by global variable,so just show a picture here
	//	global $scr_width,$scr_height;
	//	$s1="<img src='core/graph/g01.php' width= ".$scr_width." height= ".$scr_height." />";
	//	echo $s1;
	}
	public function show_tail()
	{
	//	$s1=realpath('.');
	//	echo $s1;
	}
	//{{{
	protected function range_ary()
	{
		global $gx,$gy,$gdata,$gsc;
		$m1=0;$m2=0;
		$xy=$this->dy[0][1];
		$days=$this->get_days_by_month($xy);
		if(isset($_POST['sel3']))
			$tflag=$_POST['sel3'];//日均值
		else
			$tflag=0;//小时均值
		if($tflag == 0)
		{//取得横坐标
			for($i=0;$i<24;$i++)
			{
				$s1=$i."时";
				array_push($gx,$s1);
			}
		}
		else
		{//取得横坐标
			for($i=1;$i<=$days;$i++)
			{
				$s1=$i."日";
				array_push($gx,$s1);
			}
		}
		$i=count($this->dy);
		$xx=array();$xy=array();
		$v1=0;$v2=0;
		//每一个子串是一组数据，画一条线
		for($j=0,$k=0;$j<$i;$j++)
		{
			$xa=$this->dy[$j];
			if($tflag==0)
			{//小时值
				if($k>23)
					break;
				$v1=$xa[3];$v2=$xa[5];
				$l=$this->get_hour($xa[1]);
				while($k<$l)
				{
					array_push($xx,0);$k++;
					array_push($xy,0);
				}
				if($k == $l)
				{
					if($m1 < $xa[2])
						$m1=$xa[2];
					if($m2 < $xa[4])
						$m2=$xa[4];
					array_push($xx,$xa[2]);
					array_push($xy,$xa[4]);
					$k++;
				}
			}
			else
			{//日均值
				if($k>$days)
					break;
				$l=$this->get_day($xa[1]);
				while($k<$l)
				{
					array_push($xx,0);$k++;
					array_push($xy,0);
				}
				if($k == $l)
				{
					if($m1 < $xa[2])
						$m1=$xa[2];
					if($m2 < $xa[4])
						$m2=$xa[4];
					array_push($xx,$xa[2]);
					array_push($xy,$xa[4]);
				}
			}
		}
		if(tflag==0) //小时值
			$k=24;
		else
			$k=$days;
		$i=count($xx);
		for($j=$i;$j<$k;$j++)
		{
			array_push($xx,0);
			array_push($xy,0);
		}
		array_push($gdata,$xx);
		array_push($gdata,$xy);
//设定图形比例： 固定为标准的2:1
		if($m1>$m2)
			$gsc=$m1;
		else
			$gsc=$m2;
		unset($xx);unset($xy);
		$xx=array();$xy=array();
		//固定5个刻度
		for($i=0;$i<4;$i++)
		{
			$aa1=sprintf("%0.2f",($v1/3)*($i+1));
			$aa2=sprintf("%0.2f",($v2/3)*($i+1));
			array_push($xx,$aa1);
			array_push($xy,$aa2);
		}
		if($m1<($v1*2))//最后一个刻度应该是标准的2倍或者最大超标值
			$m1=$v1*2;
		if($m2<($v2*2))
			$m2=$v2*2;
		$aa1=sprintf("%0.2f",$m1);
		$aa2=sprintf("%0.2f",$m2);
		array_push($xx,$aa1);
		array_push($xy,$aa2);
		array_push($gy,$xx);
		array_push($gy,$xy);
	}//}}}
	protected function get_hour($tmfmt)
	{//format: 2016-04-22:08:12:35
		return substr($tmfmt,11,2);
	}
	protected function get_day($tmfmt)
	{ return substr($tmfmt,5,2);}
	protected function get_days_by_month($tmfmt)
	{//取得指定月份的天数
		$month=substr($tmfmt,5,2);
		$year=substr($tmfmt,0,4);
		return date("d",mktime(0,0,0,$month+1,0,$year));
	}
}//}}}
*/
?>
