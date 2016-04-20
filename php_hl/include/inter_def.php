<?php
/*本文件是所有接口的定义文件
 
 	2016-4-17 田勇 alias tybitsfox
 */
//下面的接口是用户定义本项目中所有目录的取得函数及一些常规值的取得函数
interface inter_base_def
{
	public function get_base_dir();//取得顶级目录的函数
	public function get_conf_dir();//取得config目录的函数
	public function get_temp_dir();//取得模板（template）目录的函数
	public function get_incl_dir();//取得include目录的函数
	public function get_core_dir();//取得core目录的函数
	public function get_intr_dir();//取得interface目录的函数
}
//下面的接口定义了数据库的基本操作
interface sql_def
{
	public function get_db_type();//取得数据库类型
	public function connect_db();//数据库连接函数
	public function query_db();//数据库操作函数
	public function close_db();//关闭数据库
}
//下面的接口定义了污水厂的显示界面实现
interface tab_wushuichang
{
	public function show_header();//表头的显示
	public function show_body();//表内容的显示
	public function show_tail();//表尾的显示
}

?>


