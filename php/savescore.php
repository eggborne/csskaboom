<?php
include("config.php");

$postData = json_decode(file_get_contents("php://input"), TRUE);

if(isset( $postData['name']) && isset( $postData['score']) && isset( $postData['game'])){
	$tbl_name =  $postData['game'];
	$name = strip_tags(mysqli_real_escape_string($link, $postData['name']));
	$score = strip_tags(mysqli_real_escape_string($link, $postData['score']));

	$sql = mysqli_query($link, "INSERT INTO `$db_name`.`$tbl_name` (`name`,`score`) VALUES ('$name','$score');");
	$scoreID = mysqli_insert_id($link);
	if($sql){
		echo $scoreID;
	}else{
		echo 'QUERY FAILED';
	}
}else{
	echo 'name, score, or game not set';
}

mysqli_close($link);
?>
