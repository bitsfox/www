<?php
/*这是一个由接口导出的类定义文件的扩展
  也就是本目录下main.php文件的扩展
 

 	2016-4-17  田勇 alias tybitsfox
 */
//2017-1-1添加session的状态判断,避免log中的错误提示
if(session_status() != PHP_SESSION_ACTIVE)
	session_start();
if(!defined("FULL_PATH"))
{
	$s1=dirname(__FILE__);
	$s2=strstr($s1,"gis_hb");
	$i=strlen($s1)-strlen($s2);
	$s2=substr($s1,0,$i)."gis_hb/";
	define("FULL_PATH",$s2);
}

///////////////////////////////////////////////////////////

//{{{class init_gis implements listbox_data 2017-8-4添加 点位总览控制界面，区域和点位信息数据获取类
class init_gis implements listbox_data
{
	private $conn,$str_top1;
	private $db,$rq;
//{{{public function __construct($y)
	public function __construct($y)
	{
		if($y > 0)
			$this->rq=$y;
		else
			$this->get_cur_year();
		$this->get_used_db();
		$this->conn="SELECT aid,aname FROM area_info WHERE bused = 1";
		
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
		$this->rq=$dy['year'];
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
		$ay=array();
		while($rows=mysqli_fetch_row($res))
			array_push($ay,$rows);
		mysqli_free_result($res);
		mysqli_close($mysqli);
		return $ay;
	}
//}}}
//{{{public function get_unit($y)
	public function get_unit($y)
	{
		if(!isset($_SESSION['INTR_SEND']))
			die("data error!");
		$i=intval($_SESSION['INTR_SEND']);
		$j=intval($_SESSION['SEL_5']);
		if(($i % 100) == 0)
		{
			switch($j)
			{
			case 0://全部点位
				$s1="SELECT a.aid,a.sname,a.sid,a.lng,a.lat,b.link from station as a LEFT JOIN pt_link as b ON a.sid=b.sid WHERE a.aid > %u AND a.aid < %u AND b.lid < 1000 group by a.sid";
				break;
			case 1://基础点位
				$s1="SELECT a.aid,a.sname,a.sid,a.lng,a.lat,b.link from station as a LEFT JOIN pt_link as b ON a.sid=b.sid WHERE a.stype = 0 AND a.aid > %u AND a.aid < %u AND b.lid < 1000 group by a.sid";
				break;
			case 2://质控点位
				$s1="SELECT a.aid,a.sname,a.sid,a.lng,a.lat,b.link from station as a LEFT JOIN pt_link as b ON a.sid=b.sid WHERE a.stype = 1 AND a.aid > %u AND a.aid < %u AND b.lid < 1000 group by a.sid";
				break;
			};
			$this->str_top1=sprintf($s1,$i,$i+99);
		}
		else
		{
			switch($j)
			{
			case 0://全部点位
				$s1="SELECT a.aid,a.sname,a.sid,a.lng,a.lat,b.link from station as a LEFT JOIN pt_link as b ON a.sid=b.sid  WHERE a.aid = %u AND b.lid < 1000 group by a.sid";
				break;
			case 1://基础点位
				$s1="SELECT a.aid,a.sname,a.sid,a.lng,a.lat,b.link from station as a LEFT JOIN pt_link as b ON a.sid=b.sid  WHERE a.stype = 0 AND a.aid = %u AND b.lid < 1000 group by a.sid";
				break;
			case 2://质控点位
				$s1="SELECT a.aid,a.sname,a.sid,a.lng,a.lat,b.link from station as a LEFT JOIN pt_link as b ON a.sid=b.sid  WHERE a.stype = 1 AND a.aid = %u AND b.lid < 1000 group by a.sid";
				break;
			};
			$this->str_top1=sprintf($s1,$i);
		}
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_errno())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		$res=mysqli_query($mysqli,$this->str_top1);
		$ay=array();
		while($rows=mysqli_fetch_row($res))
			array_push($ay,$rows);
		mysqli_free_result($res);
		mysqli_close($mysqli);
		return $ay;
	}//}}}
}//}}}
//{{{class init_gis_mx implements listbox_data 点位明细控制界面，区域和点位及图片数据获取类
class init_gis_mx implements listbox_data
{
	private $conn,$con_str,$con_str1;
	private $rq,$db;
//{{{public function __construct($y)
	public function __construct($y)
	{
		if($y > 0)
			$this->rq=$y;
		else
			$this->get_cur_year();
		$this->get_used_db();
		$this->conn="SELECT aid,aname FROM area_info WHERE bused = 1";
		$this->con_str="SELECT aid,sname,sid,lng,lat from station WHERE aid > %u and aid < %u order by aid";
		$this->con_str1="SELECT sid,link FROM pt_link WHERE lid < 1000";
	}//}}}
//{{{public function __destruct()
	public function __destruct()
	{unset($this->db);}//}}}
//{{{public function get_cur_year()
	public function get_cur_year()
	{
		$dy=array();
		$dy=getdate(time());
		$this->rq=$dy['year'];
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
		$ay=array();
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_error())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		$res=mysqli_query($mysqli,$this->conn);
		while($rows=mysqli_fetch_row($res))
		{
			$i=intval($rows[0]);
			if(($i % 100) > 0)
				array_push($ay,$rows);
		}
		mysqli_free_result($res);
		mysqli_close($mysqli);
		return $ay;
	}//}}}
//{{{public function get_unit($y)
	public function get_unit($y)
	{
		$ay=array();
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_error())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		$v1=intval($_SESSION['INTR_SEND']);
		$v1=(floor($v1/100))*100;
		$str=sprintf($this->con_str,$v1,$v1+99);
		$res=mysqli_query($mysqli,$str);
		while($rows=mysqli_fetch_row($res))
			array_push($ay,$rows);
		mysqli_free_result($res);
		$cy=array();
		$res=mysqli_query($mysqli,$this->con_str1);
		while($rows=mysqli_fetch_row($res))
			array_push($cy,$rows);
		mysqli_free_result($res);
		mysqli_close($mysqli);
		$i=count($ay);
		$j=count($cy);
		$dy=array();
		for($k=0;$k<$i;$k++)
		{
			$ey=$ay[$k];//取得单个站点的资料，组成一个新数组
			for($l=0;$l<$j;$l++)
			{
				$fy=$cy[$l];
				if($ey[2] == $fy[0])  //比较sid
					array_push($ey,$fy[1]); //将图片链接加入新数组
			}
			array_push($dy,$ey); //将新数组作为一个元素加入目标数组
		}
	//传出的目标数组的格式为：aid,sname,sid,lng,lat,link1,link2...
	//每个站点的图片数量由count（）决定：count-5	
		return $dy;
	}//}}}

}//}}}
//{{{class init_gis_mmx implements listbox_data 点位明细主界面，点为信息和图片数据获取类
class init_gis_mmx implements listbox_data
{
	private $conn,$con_str;
	private $db,$rq;
//{{{public function __construct($y)
	public function __construct($y)
	{
		if($y > 0)
			$this->rq=$y;
		else
			$this->rq=get_cur_year();
		$this->get_used_db();
		$this->conn="select b.sid,b.fpoint,a.lng,a.lat,b.ftime,b.weather,b.fcode,b.fdeep,b.altitude, b.fused,b.ntype,b.wtype,b.etype,b.ftype,b.fqual,b.fcolor,b.fdamp,b.weight,b.aeast,b.awest,b.asouth,b.anorth,a.stype,b.coller,b.noter,b.checker from station as a left join station_ex as b on a.sid = b.sid where a.sid = '%s'";
		$this->con_str="SELECT link FROM pt_link WHERE sid = '%s' AND lid = %d";
	}//}}}
//{{{public function __destruct()
	public function __destruct()
	{unset($this->db);}//}}}
//{{{public function get_cur_year()
	public function get_cur_year()
	{
		$dy=array();
		$dy=getdate(time());
		return $dy['year'];
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
	{//这是取得站点基本信息的函数，这是站点信息中唯一不涉及图片的信息资料
		$ay=array();
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_error())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		$str=sprintf($this->conn,$_SESSION['SEL3']);
		//echo $str;
		$res=mysqli_query($mysqli,$str);
		while($rows=mysqli_fetch_row($res))
		{
			array_push($ay,$rows);
			//print_r($rows);
		}
		mysqli_free_result($res);
		mysqli_close($mysqli);
		return $ay;
	}//}}}
//{{{publilc function get_unit($y)
	public function get_unit($y)
	{
		$ay=array();
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_error())
			die("connect error");
		mysqli_set_charset($mysqli,"utf8");
		$i=intval($_SESSION['SEL_4'])+1000;
		$str=sprintf($this->con_str,$_SESSION['SEL3'],$i);
		//echo $str;
		$res=mysqli_query($mysqli,$str);
		while($rows=mysqli_fetch_row($res))
			array_push($ay,$rows);
		mysqli_free_result($res);
		mysqli_close($mysqli);
		return $ay;
	}//}}}

}//}}}
//{{{class init_gis_calc implements listbox_data  2017-9-4添加，污染物类型和监测数据的获取类
class init_gis_calc implements listbox_data
{
	private $conn,$conn1,$str_con,$db,$rq;
//{{{public function __construct($y)
	public function __construct($y)
	{
		if($y > 0)
			$this->rq=$y;
		else
			$this->get_cur_year();
		$this->get_used_db();
		$this->conn="SELECT iid,iname from standard group by iname order by iid"; //用于取得combox列表数据
		$this->conn1="SELECT iid,iname,isname,iisd,soil_type,soil_name,std FROM standard WHERE iname = '%s'"; //用于取得同一污染物不同类型的执行标准
		$this->str_con="SELECT sid,iid,date,val FROM soil_val WHERE aid = '%s' AND iid = %a";//用于取得指定区域指定污染物的监测数据
		//$this->str_con1="SELECT sid,iid,date,val FROM soil_val WHERE sid = '%s' ORDER BY iid";//用于取得指定点位所有的污染物监测数据
	}//}}}
//{{{public function __destruct()
	public function __destruct()
	{unset($this->db);}//}}}
//{{{public function get_cur_year()
	public function get_cur_year()
	{
		$dy=array();
		$dy=getdate(time());
		$this->rq=$dy['year'];
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
		$ay=array();
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if(mysqli_connect_error())
			die("connect error!");
		mysqli_set_charset($mysqli,"utf8");
		$res=mysqli_query($mysqli,$this->conn);
		while($rows=mysqli_fetch_row($res))
			array_push($ay,$rows); //得到一个以污染物分组的数据列表，用于combox的显示
		mysqli_free_result($res);
		mysqli_close($mysqli);
		return $ay;
	}//}}}
//{{{public function get_unit($y)
	public function get_unit($y)
	{
		$ay=array();
		$mysqli=mysqli_connect($this->db[0],$this->db[3],$this->db[4],$this->db[2],$this->db[1]);
		if($mysqli_connect_error())
			die("connect error!");
		mysqli_set_char_set($mysqli,"utf8");
		$str=sprintf($this->con,$_SESSION['INTR_SEND'],$_SESSION['SEL_3']);
		$res=mysqli_query($mysqli,$str);
		while($rows=mysqli_fetch_row($res))
			array_push($ay,$rows);
		mysqli_free_result($res);
		mysqli_close($mysqli);
		return $ay;
	}//}}}
}//}}}


?>
