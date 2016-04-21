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

//{{{ class my_init implements inter_base_def
class my_init implements inter_base_def
{
	public function __construct()
	{//定义常量
		global $tybitsfox;
		define("BASE_DIR",$tybitsfox['www_path']."/php_hl");
		define("TEMP_DIR",constant("BASE_DIR")."/template");
		define("INCL_DIR",constant("BASE_DIR")."/include");
		define("CONF_DIR",constant("BASE_DIR")."/config");
		define("CORE_DIR",constant("BASE_DIR")."/core");
		define("INTR_DIR",constant("BASE_DIR")."/interface");
	}
	public function get_base_dir()
	{return constant("BASE_DIR");}
	public function get_conf_dir()
	{return constant("CONF_DIR");}
	public function get_temp_dir()
	{return constant("TEMP_DIR");}
	public function get_incl_dir()
	{return constant("INCL_DIR");}
	public function get_core_dir()
	{return constant("CORE_DIR");}
	public function get_intr_dir()
	{return constant("INTR_DIR");}
}//}}}
//{{{class msql implements sql_def
class msql implements sql_def
{
	private $str;
	private $conn=NULL;
	public function __construct()
	{
		global $database;
		$this->str="'".$database['host']."','".$database['user']."','".$database['pwd']."'";
	}
	public function get_db_type()
	{return $database['type'];}
	public function connect_db()
	{
		$this->conn=MYSQL_connect($str) or die("connect die: ".MYSQL_error());
		return $this->conn;
	}
	public function query_db()
	{
		global $database;
		if($this->conn == NULL)
			$this->connect_db();
		MYSQL_select_db($database['dbname']) or die("select_db die:".MYSQL_error());
		$result=mysql_query($database['logstr'],$this->conn) or die("query die:".MYSQL_error());
		$ay=array();
		while($rows=mysql_fetch_row($result))
			array_push($ay,$row);
		MYSQL_free_result($result);
		return $ay;
	}
	public function close_db()
	{
		MYSQL_close($this->conn);
		$this->conn=NULL;
	}
	public function __destruct()
	{
		if($this->conn != NULL)
			$this->close_db();
	}
}
//}}}
//这里定义一个Session验证的函数
//{{{function _verf_fox()
function _verf_fox()
{
	global $tybitsfox;
	if($_SESSION['logok'] != $tybitsfox['corename'])
		die("you're over!");
}//}}}
//{{{function _verf_db($u,$p)
function _verf_db($u,$p)
{
	global $database;
	$i=1;
	$conn=MYSQL_connect($database['host'],$database['user'],$database['pwd']) or die("connect die: ".MYSQL_error());
	MYSQL_select_db($database['dbname']) or die("select_db die: ".MYSQL_error());
	$result=mysql_query($database['logstr'],$conn) or die("query die: ".MYSQL_error());
//	$ay=array();
	while($rows=mysql_fetch_row($result))
	{
	//	array_push($ay,$row);
	//	print_r($rows);
		if(($rows[0] == $u) && ($rows[1] == $p))
		{
			$i=0;break;
		}
	}
	MYSQL_free_result($result);
	MYSQL_close($conn);
	return $i;
}//}}}
//{{{function _reg_db($u,$p)
function _reg_db($u,$p)
{
	global $database;
	$i=0;
	$conn=MYSQL_connect($database['host'],$database['user'],$database['pwd']) or die("connect die: ".MYSQL_error());
	MYSQL_select_db($database['dbname']) or die("select_db die: ".MYSQL_error());
	$result=mysql_query($database['logstr'],$conn) or die("query die: ".MYSQL_error());
	while($rows=mysql_fetch_row($result))
	{
		if($rows[0] == $u)
		{
			$i=1;break;
		}
	}
	mysql_free_result($result);
	if($i !=0 )
	{
		mysql_close($conn);
		return $i;
	}
	$str=sprintf($database['regstr'],$u,$p);
	$result=mysql_query($str,$conn) or die("query die again: ".mysql_error());
//	mysql_free_result($res); mysql_query返回值不一定都是资源型的（查询时是），此时的写入返回值是bool型的，所以不能（也不用）释放
	mysql_close($conn);
	return 0;
}//}}}
//{{{ class tb_wsc implements tab_show
class tb_wsc implements tab_show
{
	private $ay,$cy;
	private $dy=array();
	public function __construct()
	{
		$this->ay=array("编号","单位名称","COD","氨氮","累计流量");
		$this->cy=array("监测值","标准值");
		//only for test!
		$ey=array("1","清源水务一污","入口","164","--","23.10","--","--");
		array_push($this->dy,$ey);
		$ey=array("2","清源水务一污","出口","22","50","8.42","8","8744659");
		array_push($this->dy,$ey);
		$ey=array("3","康龙排水","入口","398","--","46.83","--","--");
		array_push($this->dy,$ey);
		$ey=array("4","康龙排水","出口","38","50","1.77","5","5131181");
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
		for($k=0;$k<5;$k++)
		{
			$i=count($this->dy);
			for($j=0;$j<$i;$j++)
			{
				$fy=$this->dy[$j];
				$s1="<tr><td width=%10>".$fy[0]."</td><td width=30%>".$fy[1].$fy[2]."</td>";
				if(($fy[3]>$fy[4]) && ($fy[4]>0))
					$s1.="<td width=10% id='tdid'>".$fy[3]."</td><td width=10%>".$fy[4]."</td>";
				else
					$s1.="<td width=10%>".$fy[3]."</td><td width=10%>".$fy[4]."</td>";
				if(($fy[5]>$fy[6]) && ($fy[6]>0))
					$s1.="<td width=10% id='tdid'>".$fy[5]."</td><td width=10%>".$fy[6]."</td><td width=20%>".$fy[7]."</td></tr>";
				else
					$s1.="<td width=10%>".$fy[5]."</td><td width=10%>".$fy[6]."</td><td width=20%>".$fy[7]."</td></tr>";
				echo $s1;
			}
		}
	}
	public function show_tail()
	{echo "</table>";}
}//}}}
//{{{class tb_fs implements tab_show
class tb_fs implements tab_show
{
	private $ay,$cy;
	private $dy=array();
	public function __construct()
	{
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
//{{{class tb_fq implements tab_show
class tb_fq implements tab_show
{
	private $ay,$cy;
	private $dy=array();
	public function __construct()
	{
		$this->ay=array("编号","单位名称","SO2","NOx","烟尘","废气排放量");
		$this->cy=array("监测值","标准值");
		//only for test!
		$ey=array("1","泰山玻璃纤维","133","200","222","300","13","30","13156");
		array_push($this->dy,$ey);
		$ey=array("2","泰山石膏股份有限公司","4","200","81","200","7","30","107005");
		array_push($this->dy,$ey);
		$ey=array("3","泰山东城热电","299","200","97","200","5","30","347814");
		array_push($this->dy,$ey);
		$ey=array("4","新矿集团泰山盐化工分公司热电厂","7","200","57","200","14","30","402034");
		array_push($this->dy,$ey);
		$ey=array("5","岱岳精制盐","127","200","109","200","8","30","116827");
		array_push($this->dy,$ey); 
	}
	public function show_header()
	{
		$s1="<table width=97% class='imagetable'><tr>";
		$s2="<th width=6% rowspan=2 align=center>".$this->ay[0]."</th>";
		$s1.=$s2;
		$s2="<th width=30% rowspan=2 align=center>".$this->ay[1]."</th>";
		$s1.=$s2;
		$s2="<th width=16% colspan=2 align=center>".$this->ay[2]."</th>";
		$s1.=$s2;
		$s2="<th width=16% colspan=2 align=center>".$this->ay[3]."</th>";
		$s1.=$s2;
		$s2="<th width=16% colspan=2 align=center>".$this->ay[4]."</th>";//;</tr><tr>";
		$s1.=$s2;
		$s2="<th width=16% rowspan=2 align=center>".$this->ay[5]."</th></tr><tr>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[1]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[1]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[0]."</th>";
		$s1.=$s2;
		$s2="<th width=8% align=center>".$this->cy[1]."</th></tr>";
		$s1.=$s2;
		echo $s1;
	}
	public function show_body()
	{
		$i=count($this->dy);
		for($j=0;$j<$i;$j++)
		{
			$fy=$this->dy[$j];
			$s1="<tr><td width=%6>".$fy[0]."</td><td width=30%>".$fy[1]."</td>";
			if($fy[2]>$fy[3])
				$s2="<td width=8% id='tdid'>".$fy[2]."</td>";
			else
				$s2="<td width=8%>".$fy[2]."</td>";
			$s1.=$s2."<td width=8%>".$fy[3]."</td>";
			if($fy[4]>$fy[5])
				$s2="<td width=8% id='tdid'>".$fy[4]."</td>";
			else
				$s2="<td width=8%>".$fy[4]."</td>";
			$s1.=$s2."<td width=8%>".$fy[5]."</td>";
			if($fy[6]>$fy[7])
				$s2="<td width=8% id='tdid'>".$fy[6]."</td>";
			else
				$s2="<td width=8%>".$fy[6]."</td>";
			$s1.=$s2."<td width=8%>".$fy[7]."</td>";
			$s1.="<td width=16%>".$fy[8]."</td></tr>";
			echo $s1;
		}
	}
	public function show_tail()
	{echo "</table>";}
}//}}}
//{{{class tb_left implements tab_show
class tb_left implements tab_show
{
	private $ay,$cy;
	private $dy;
	public function __construct()
	{
		$ay=array("市直","泰山区","岱岳区","东平县","宁阳县","肥城市","新泰市");//控制区域
		$cy=array("国控","省控","市控","县控");//控制级别
		$dy=array("小时值","日均值");//数据类型
	}
	public function show_header()
	{
		echo "<br>";
	}
	public function show_body()
	{}
	public function show_tail()
	{}
}






?>












