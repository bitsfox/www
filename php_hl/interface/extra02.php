<?php
/*这是一个由接口导出的类定义文件的扩展
  也就是本目录下main.php文件的扩展
 

 	2016-4-17  田勇 alias tybitsfox
 */
/*本文件现为测试文件，目的为使用重新定义的接口来实现图形的显示

 */
session_start();
/////////////////////////////////////////////////////////////
//{{{class mx_g implements gra_data
class mx_g implements gra_data
{
	private $xway,$yway,$gdata,$gd;
	private $tm,$w,$d; //日期，表类型，数据类型，数据类型：0,1,2,3 小时值，日均值，小时超标，日均超标
//{{{public function __construct($y)
	public function __construct($y)
	{//需要传入的参数：sel2p(站点id),sel3(数据类型)，日期（starttime）,当前操作界面（废水，废气，污水厂，这个是有函数参数传入）
		switch($y)
		{
		case 1:	//废水
		case 2://污水厂
			$a=new data_sright_mx($y);
			$a->parse_sql();
			$this->gdata=$a->get_std();
			$this->w=$y;
			break;
		default: //废气
			$a=new data_qright_mx();
			$a->parse_sql();
			$this->gdata=$a->get_std();
			$this->w=0;
			break;
		};
		$this->tm=$_POST['starttime'];
		$this->d=$_POST['sel3'];
		unset($_SESSION['fs_g_xway']);
		unset($_SESSION['fs_g_yway']);
		unset($_SESSION['fs_g_data']);
	}//}}}
//{{{public function __destruct()
	public function __destruct()
	{unset($this->gdata);unset($this->xway);unset($this->yway);}//}}}
//{{{public function range_xway()
	public function range_xway()
	{
		$this->xway=array();
		$s1=$this->tm;
		switch($this->d)
		{
		case 0: //小时
		case 2: //小时超标
			for($i=0;$i<24;$i++)
				$this->xway[$i]=$i;
			break;
		case 1: //日均
		case 3: //日均超标
			$s2=$this->get_days_by_month($s1);
			$i=intval($s2);
			for($j=0;$j<$i;$j++)
				$this->xway[$j]=$j;
			break;
		};
		$_SESSION['fs_g_xway']=$this->xway;
	}//}}}
//{{{public function range_yway()
	public function range_yway()
	{//纵坐标的处理：共11个刻度（含横坐标），标准值为中线（刻度5 0-base），标准值以下按标准值5等分，最大值不超过标准值的2倍时，以上也是五等分
	//超过最大值超过标准值2倍时，标准值以上的刻度按最大值减标准值五等分。
		$i=count($this->gdata);
		$max=array();$std=array();
		if($this->w == 0) //废气
		{
			$std[0]=$this->gdata[0][3]; //so2 std
			$std[1]=$this->gdata[0][5];//nox std
			$std[2]=$this->gdata[0][7];//dust std
			$max[0]=0;$max[1]=0;$max[2]=0;
			for($j=0;$j<$i;$j++)
			{
				if($max[0] < $this->gdata[$j][2])
					$max[0]=$this->gdata[$j][2];	//max so2
				if($max[1] < $this->gdata[$j][4])
					$max[1]=$this->gdata[$j][4];	//max nox
				if($max[2] < $this->gdata[$j][6])
					$max[2]=$this->gdata[$j][6];	//max dust
			}
		}
		else
		{
			$std[0]=$this->gdata[0][3];//cod std
			$std[1]=$this->gdata[0][5];//mhx std
			$max[0]=0;$max[1]=0;
			for($j=0;$j<$i;$j++)
			{
				if($max[0] < $this->gdata[$j][2])
					$max[0]=$this->gdata[$j][2];	//max cod
				if($max[1] < $this->gdata[$j][4])
					$max[1]=$this->gdata[$j][4];	//max nhx
			}
		}
		$this->yway=array();
		array_push($this->yway,$std);
		array_push($this->yway,$max);
		$_SESSION['fs_g_yway']=$this->yway;  
	}//}}}
//{{{public function range_ary()
	public function range_ary()
	{//虽然目前的gdata中包含了所有的数据，但是用于显示的只是其中一小部分，因此先精简一下再传递
		$ay=array();
		$i=count($this->gdata);
		if($this->w == 0) //废气
		{
			for($j=0;$j<$i;$j++)
			{
				$by=array();
				$by[0]=$this->gdata[$j][2];		//get so2
				$by[1]=$this->gdata[$j][4];		//get nox
				$by[2]=$this->gdata[$j][6];		//get dust
				array_push($ay,$by);
			}
		}
		else
		{
			for($j=0;$j<$i;$j++)
			{
				$by=array();
				$by[0]=$this->gdata[$j][2];		//get cod
				$by[1]=$this->gdata[$j][4];		//get nhx
				array_push($ay,$by);
			}
		}
		$_SESSION['fs_g_data']=$ay;
	}//}}}
//{{{public function analysis_post()
	public function analysis_post()	//对post传递值的处理
	{}//}}}
//{{{protected function get_days_by_month($tmfmt)
	protected function get_days_by_month($tmfmt)
	{//取得指定月份的天数
		$month=substr($tmfmt,5,2);
		$year=substr($tmfmt,0,4);
		return date("d",mktime(0,0,0,$month+1,0,$year));
	}//}}}
}
//}}}



?>




