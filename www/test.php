<style>
* {
margin:0;
padding:0;
}
div {
margin:130px;
list-style:none;
}
div img {
border:0;
}
div a {
color:#fff;
text-decoration:none;
position:relative;
display:block;
}
div span {
font-size:12px;
display:none;
}
div a:hover {
background:;
}
div a:hover span {
padding:3px;
background:skyblue;
color:#fff;
font-size:9pt;
border-width:1px 2px 2px 1px;
border-color:#333;
border-style:solid;
position:absolute;
top:-30px;
left:0;
display:block;
}
</style>
<script>
	$(document).ready(function(){
		$('#explode1').click(function(){
				window.location.href='exp.php';
		});

		$('explode2').click(function(){
				window.location.href='./excel.php';
		});
	})
function ooo()
{
	window.location.href='./excel.php';
}
</script>
<?php
$tm=mktime(0,0,0,13,0,2016);
$st=strftime("%d",$tm);
echo "2016年12月共有：".$st."天";
echo "<a href='excel.php' target=_blank>excel</a>";
?>
<input type='button' id='explode1' value='Explode' style='margin-left:620px;background-color:#10899E;color:white;padding:3px;font-weight:bold;'>
<input type='button' id='explode2' value='Explode2' style='background-color:#10899E;color:white;padding:3px;font-weight:bold;margin-left:24px;'>
<a href='http://5566.org' target=_blank><img src='../php_hl/css/excel24.png' /></a><br>
<input type='image' src='../php_hl/css/excel24.png' title='ahahah' onclick='ooo()' />


