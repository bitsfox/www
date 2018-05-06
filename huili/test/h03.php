<?php
echo "<!DOCTYPE html>\n<html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />\n";
echo "<title>testtest</title>\n";
//echo "<link rel='stylesheet' href='./corp.aadddae364.css'>";
//echo "<link rel='stylesheet' href='./formated.css'>";
//echo "<link rel='stylesheet' href='./font-awesome.min.css'>";
echo "<link rel='stylesheet' href='../css/fin.css'>";
echo "</head><body>\n";
?>
<?php
$handle=fopen("./fin.txt","r");
$i=0;
while(!feof($handle))
{
	if($i == 0)
	{echo "<table><tr>";}
	else
	{
		$st=fgets($handle);
		echo "<td width=25%>".$st."<span class='fa ".$st." fa-lg'></span></td>"; //lg,2x,3x,4x,5x
		if(($i % 4) == 0)
			echo "</tr><tr>";
	}
	$i++;
}
$i--;
if(($i % 4) == 0)
	echo"</table>";
else
	echo "<td></td><td></td><td></td><td></td></tr></table>";
fclose($handle);
echo "</body></html>\n";

?>
