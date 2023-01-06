<?php
include("config.php");

$tbl_name = strip_tags(mysqli_real_escape_string($link,$_GET['game']));

$sql="SELECT * FROM `$db_name`.`$tbl_name` ORDER BY score DESC LIMIT 100";
$result=mysqli_query($link,$sql);

while($rows=mysqli_fetch_array($result)){
	echo $rows['name'] . " " . $rows['score'] . " " . $rows['ind'] . " - ";
}
mysqli_close($link);
?>
