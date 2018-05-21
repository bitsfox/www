<?php
echo "<!DOCTYPE html>\n<html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />\n";
echo "<title>testtest</title>\n";
//echo "<link rel='stylesheet' href='./corp.aadddae364.css'>";
//echo "<link rel='stylesheet' href='./formated.css'>";
echo "<link rel='stylesheet' href='../css/font_awesome.css'>";
//echo "<link rel='stylesheet' href='../css/fiin.css'>";
echo "<style>";
echo "div,img,body{
	margin:0;
	padding:0;}";
echo ".box{
	height:150px;
	weight:300px;
	background:#1b7b80;
	margin:0 auto;
	padding:20px;}";
echo ".myarrow:before{    
    content: '';    
    position: absolute;    
    width: 8px;    
    height: 8px;    
    border: 2px solid #f5b24a;    
    -webkit-transform: rotate(-135deg);    
    -moz-transform: rotate(-135deg);    
    -o-transform: rotate(-135deg);    
    -ms-transform: rotate(-135deg);    
    transform: rotate(-135deg);    
    border-top: none;    
    border-right: none;    
    top: 19px;}";
echo ".box:hover .fa{
	margin-left:7px;
	margin-right:0px;
";
/*echo ".box:hover .arrow{  
      transform: rotate(-135deg);  
      -webkit-transform: rotate(-135deg);  
      -moz-transform: rotate(-135deg);  
      -o-transform: rotate(-135deg);  
      -ms-transform: rotate(-135deg);}";*/
echo "</style>";
echo "</head><body>\n";
?>
<?php
echo "<br><br><br><br><br><br><br>";
echo "<div class='box'>";
//echo "<span class='myarrow'></span>";
echo "<span class='fa fa-long-arrow-right fa-lg'></span>";
echo "</div>";
echo "<br><br><br><br>";
echo "<br><br><br><br>";
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
