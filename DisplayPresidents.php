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
	
	$sql = "Select * from tbl_presidentiables";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			
			$sqlcountvotes = "Select * from tbl_votes where President_id = '".$row["President_id"]."'";
			
			$result1 = mysqli_query($conn, $sqlcountvotes);
			
			$countvotes = mysqli_num_rows($result1);
			
			echo "<tr>";
			echo "<td class='hidden'>".$row["President_id"]."</td>";
			echo "<td><img class='center-block img-responsive img-circle' width='150px' src='img/".$row["imgloc"]."'><h5 class='text-center'>".$row["fld_presidentiables"]."</h5></td>";
			echo "<td>".$row["Position"]."</td>";
			echo "<td>".$countvotes."</td>";
			echo "<td class='hidden'>".$row["imgloc"]."</td>";
			echo "<td class='hidden'><p>".$row["About"]."</p></td>";
			echo "<td><button class='btn btn-success center-block' id='showprofile'>Vote Now</button></td>";
			echo "</tr>";
		}
	}
?>