<?php
//下面的文件为全局变量的定义文件
$file="config/main.php";
if((!is_array($tybitsfox)) && is_file($file))
{require_once($file);}
//下面的文件为接口类的定义文件

require_once("include/inter01_def.php");
//{{{class my_inter01 implements inter01_def
class my_inter01 implements inter01_def
{
	public function __construct()
	{//结构函数用于建立所用的常量。
		global  $tybitsfox;
		define("BASE_DIR",$tybitsfox['www_path']."/php5");
		//self::$temp_dir=constant("BASE_DIR")."/template";
		define("TEMP_DIR",constant("BASE_DIR")."/template");
		define("CONF_DIR",constant("BASE_DIR")."/config");
		define("RUN_DIR",constant("BASE_DIR")."/interfaces");
		define("INC_DIR",constant("RUN_DIR")."/include");
	}	
	public function __destruct()
	{
		//unset self::$temp_dir;
	}
	public function get_base_dir()
	{
		return constant("BASE_DIR");
	}
	public static function get_temp_dir()
	{
		return constant("TEMP_DIR");
	}
	public function get_conf_dir()
	{ return constant("CONF_DIR");}
	public function get_inc_dir()
	{ return constant("INC_DIR");}
	public function get_run_dir()
	{ return constant("RUN_DIR");}
}
//}}}
//{{{ class psql_db implements psql_def
class psql_db implements psql_def
{
	private static $db=FALSE;
//	private $arry;
	public function connect_db()
	{
		global $database;
		if(!is_array($database))
			return 0;
		$conn_str="host=".$database['host']." dbname=".$database['dbname']." user=".$database['user']." password=".$database['passwd'];
		self::$db=pg_connect($conn_str);
		return self::$db;
	}
	public function __destruct()
	{
		pg_close(self::$db);
	}
	public function query_db()
	{
		if(self::$db == FALSE)
		{
			return;
		}
		else
		{
			$conn="select * from basemsg";
			$result=pg_query(self::$db,$conn);
			if(!$result)
			{
				echo "result error!<br>";
				return;
			}
			while($row=pg_fetch_row($result))
			{
				//echo "<br>".$row[0]."\t".$row[1]."\t".$row[2]."<br>";
				if(!is_array($arry))
					$arry=array_values($row);//=array_merge(this->$arry,$row);
				else
				{
					$arry1=array_values($arry);
					$arry=array_merge($arry1,$row);
				}
			}
			return $arry;
		}
	}
}//}}}
//{{{ class sql implements psql_def
class sql implements psql_def
{
	private static $db=FALSE;
	private $ary;
	public function __construct()
	{
		global $database;
		if(!is_array($database))
			return 0;
		$this->ary=array_values($database);
	}
	public function __destruct()
	{
		unset($this->ary);
	}
	public function connect_db()
	{
		$conn_str="host=".$this->ary[0]." dbname=".$this->ary[1]." user=".$this->ary[2]." password=".$this->ary[3];
		echo $conn_str."<br>";
	}
	public function query_db()
	{
		self::$db=1;
		print_r($this->ary);
		echo "<br>";
	}

}//}}}

?>
