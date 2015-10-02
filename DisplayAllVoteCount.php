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
	
session_start();

$query1 = "SELECT * FROM tbl_votes WHERE President_id = 1";
$query2 = "SELECT * FROM tbl_votes WHERE President_id = 2";
$query3 = "SELECT * FROM tbl_votes WHERE President_id = 3";
$query4 = "SELECT * FROM tbl_votes WHERE President_id = 7";
$query5 = "SELECT * FROM tbl_votes WHERE President_id = 8";
$query6 = "SELECT * FROM tbl_votes WHERE President_id = 9";
$query7 = "SELECT * FROM tbl_votes WHERE President_id = 10";
$query8 = "SELECT * FROM tbl_votes WHERE President_id = 11";
$query9 = "SELECT * FROM tbl_votes WHERE President_id = 12";
$query10 = "SELECT * FROM tbl_votes WHERE President_id = 13";
$query11 = "SELECT * FROM tbl_votes WHERE President_id = 14";
$query12 = "SELECT * FROM tbl_votes WHERE President_id = 15";

 
$result1 = mysqli_query($conn,$query1) or die (mysqli_error($conn));
$result2 = mysqli_query($conn,$query2) or die (mysqli_error($conn));
$result3 = mysqli_query($conn,$query3) or die (mysqli_error($conn));
$result4 = mysqli_query($conn,$query4) or die (mysqli_error($conn));
$result5 = mysqli_query($conn,$query5) or die (mysqli_error($conn));
$result6 = mysqli_query($conn,$query6) or die (mysqli_error($conn));
$result7 = mysqli_query($conn,$query7) or die (mysqli_error($conn));
$result8 = mysqli_query($conn,$query8) or die (mysqli_error($conn));
$result9 = mysqli_query($conn,$query9) or die (mysqli_error($conn));
$result10 = mysqli_query($conn,$query10) or die (mysqli_error($conn));
$result11 = mysqli_query($conn,$query11) or die (mysqli_error($conn));
$result12 = mysqli_query($conn,$query12) or die (mysqli_error($conn));


$count1 = mysqli_num_rows($result1);
$count2 = mysqli_num_rows($result2);
$count3 = mysqli_num_rows($result3);
$count4 = mysqli_num_rows($result4);
$count5 = mysqli_num_rows($result5);
$count6 = mysqli_num_rows($result6);
$count7 = mysqli_num_rows($result7);
$count8 = mysqli_num_rows($result8);
$count9 = mysqli_num_rows($result9);
$count10 = mysqli_num_rows($result10);
$count11 = mysqli_num_rows($result11);
$count12 = mysqli_num_rows($result12);


echo $_GET['callback']."(".json_encode(array("countbinay"=>$count1,
"countpoe"=>$count2,
"countmar"=>$count3,
"countduterte"=>$count4,
"counttrillanes"=>$count5,
"countcayetano"=>$count6,
"countescudero"=>$count7,
"countrevilla"=>$count8,
"countgibo"=>$count9,
"countmarcos"=>$count10,
"countlacson"=>$count11,
"countsantiago"=>$count12
)).");";
?>