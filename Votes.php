<?php

	$server = "localhost";
	$user = "gcccsorg_halalan";
	$pass = "Aa0987654321";
	
	$conn = mysqli_connect($server, $user, $pass);
	
	if(!$conn){
		echo "not connected";
	}else{
		mysqli_select_db($conn, "gcccsorg_halatest2016");
	}
	
	 
		$province = $_POST["province"];
		$presidentid = $_POST["presidentid"];
	
	$sql = "Insert into tbl_votes (id, President_id, fld_provinces) values (null, '".$presidentid."', '".$province."')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result){
		echo "success";
	}
	else{
		echo "fail";
	}
?>