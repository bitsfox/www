<?php
header ( "Content-type:application/vnd.ms-excel" );
header ( "Content-Disposition:filename=/tmp/csat.xls" );
echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title>无标题文档</title>
<style>
td{
	text-align:center;
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
	border:#1C7A80 1px solid;
	color:#152122;
	width:100px;
}
table,tr{
	border-style:none;
}
.title{
	background:#7DDCF0;
	color:#FFFFFF;
	font-weight:bold;
}
</style>
</head>

<body>
<table width='800' border='1'>
  <tr>
    <td class='title'>Date</td>
    <td class='title' colspan='5' style='width:500px;text-align:center;'>CSAT Score</td>
    <td class='title'>Grand Total</td>
    <td class='title'>CSAT</td>
  </tr>
  <tr>
    <td>08/01/11</td>
    <td>0</td>
    <td>0</td>
    <td>测试内容！！</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0%</td>
  </tr>
  <tr>
    <td>08/01/11</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0%</td>
  </tr>
  <tr>
    <td>08/01/11</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0%</td>
  </tr>
</table>
</body>
</html>
";
?>
