<?php
header("Content-Type:text/html;charset=utf-8");
//下面的文件为全局变量的定义文件
require_once("config/main.php");
//下面的文件为接口类的实现文件
require_once("interfaces/inter01.php");
$my=new my_inter01();
echo $my->get_base_dir()."<br>".$my->get_temp_dir()."<br>";
echo "hello<br>";
/*$db=psql_db::connect_db();
if($db==FALSE)
	echo "<br>连接失败！<br>";
else
	echo "<br>链接成功！<br>";
$ary=psql_db::query_db();
if($ary==FALSE)
{echo "<br>error fetch<br>";}
else
{
	$k=count($ary)/2;
	$i=$k/2;
	for($j=0;$j<$i;$j++)
	{
		echo "<br>";
		for($l=0;$l<$k;$l++)
		{
			echo $ary[$l+$j*$k]."\t";
		}
		echo "<br>";
	}
}*/
$aq=new sql();
$aq->connect_db();
$aa=$aq->query_db();
$i=count($aa);
if($i>0)
{print_r($aa);}
else
{echo "count=0";}
//下面采用不一样的调用方式，看看this是否能用
/*实施证明，如果不对类进行实例化，而直接使用下面的方式调用函数时，并且在函数中使用了this指针，就会出现
Fatal error: Using $this when not in object context in /var/www/php5/interfaces/inter01.php on line 108
类似的错误提示
sql::connect_db();
*/
?>
