<?php

session_start();
$owner = $_SESSION['u_first'];
echo $owner;


$sql = "SELECT * FROM users WHERE user_first ='$owner';";
$results = mysqli_query($conn,$sql);
$resultsCheck = mysqli_num_rows($results);
if ($resultsCheck > 0) {
	while ($row = mysqli_fetch_assoc($results)) {
		$owner = $row['user_first'];
		echo $row['user_email'];

	}
	
}
/*
else{
	header("Location:../login.php");
	exist();
}
*/



if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';

	$bname = mysqli_real_escape_string($conn,$_POST['bname']);
	$location = mysqli_real_escape_string($conn,$_POST['location']);
	$service = mysqli_real_escape_string($conn,$_POST['service']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
//echo $location;
//echo $email;
	
	$followers = 0;

	if(empty($bname) || empty($service) || empty($location) || empty($email)) {
		header("Location:../add-bussiness.php");

	
	}
	else{

		$sql="INSERT INTO bussiness (bussiness_owner, bussiness_name, bussiness_location, bussiness_service, bussiness_email, bussiness_followers)
		VALUES('$owner', '$bname', '$location', '$service', '$email', '$followers');";
		
		   mysqli_query($conn,$sql);
		   header("Location:../add-bussinessImg.php");
		


	}

	
}
else{
	echo "failed";
	header("Location:../add-bussiness.php");
}


