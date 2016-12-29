<script>
	$(document).ready(function(){
		$('#explode1').click(function(){
				window.location.href='exp.php';
		});

		$('#explode2').click(function(){
				window.location.href='./excel.php';
		});
	})
</script>
<?php
$tm=mktime(0,0,0,13,0,2016);
$st=strftime("%d",$tm);
echo "2016年12月共有：".$st."天";
echo "<a href='excel.php' target=_blank>excel</a>";
?>
<input type='button' id='explode1' value='Explode' style='margin-left:620px;background-color:#10899E;color:white;padding:3px;font-weight:bold;'>
<input type='button' id='explode2' value='Explode2' style='background-color:#10899E;color:white;padding:3px;font-weight:bold;margin-left:24px;'>
