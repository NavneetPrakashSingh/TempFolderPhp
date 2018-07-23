<?php 
if($_POST){
	$postResponse = $_POST['idValue'];	
	echo "reached in post request ".$postResponse;
}else{
	$idPassed = $_GET["parameter1"];
	echo "Id passed is : ".$idPassed;
}

 ?>