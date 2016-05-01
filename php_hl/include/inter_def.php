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
//下面的接口定义了所有的显示界面的实现
interface tab_show
{
	public function show_header();//表头的显示
	public function show_body();//表内容的显示
	public function show_tail();//表尾的显示
}
//下面的接口定义了图形显示所需数据的准备实现
interface gra_data
{//接口定义的必须是public类型
/*attention:
  该接口与tab_show不同，不直接参与显示界面的生成，而仅仅是实现显示数据的准备和
  序列化工作。所以，在具体实现时，应考虑同时继承本接口和sql_def接口。
 */	
	public function range_xway();//横坐标信息生成
	public function range_yway();//纵坐标信息生成
	public function range_ary();//显示数据的序列化
	public function analysis_post();//对post传递值的处理
}
?>


