<?php
/*2014-5-24看了open-limis的源码才领略到php的强大，我这个用了几年echo的
  php用户也应该深入的了解下php，并对其一探究竟了~~~虽然学习脚本类语言
  不是我的风格...
  					tybitsfox 2014-5-24
 */
//定义接口inter01_def，实现一些常规性资料的查询取得
interface inter01_def
{
	//return string   can be used by scandir()
	public function get_base_dir();//取得index所在目录的路径。
	public static function get_temp_dir();//取得模板文件所在路径。
	public function get_conf_dir();//取得配置文件所在路径。
	public function get_inc_dir();//取得接口、类的定义文件路径。
	public function get_run_dir();//取得接口、类的实现文件路径。
}
//定义数据库的访问接口psql_def
interface psql_def
{
	//return source
	public function connect_db();//数据库连接函数。
	public function query_db();//取得数据
	public function show_msg($outmsg);//
}
?>


