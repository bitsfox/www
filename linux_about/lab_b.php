<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
include_once("./about_ta_server.txt");
echo "<font color=blue>mysql中关于时间戳转换的使用：<br>
select count(*) from fq_d_master where date = from_unixtime(1218290027);<br>
select count(*) from fq_d_master where unix_timestamp(date) = 121890027;<br>
<br><br><br><br><br><br><br>
</blue>";
?>

