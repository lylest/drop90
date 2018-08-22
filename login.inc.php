<?php
session_start();


if (isset($_POST['submit'])) {

	include_once 'dbh.inc.php';
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	if (empty($email) || empty($pwd)) {
		header("Location:../login.php?login=empty!");
	}
	else{
		$sql = "SELECT * FROM users WHERE user_email='$email' and user_pwd='$pwd' or user_phone='$email';";
		$results = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($results);
		if ($resultCheck > 0) {
			if ($row = mysqli_fetch_assoc($results)) {
				//echo $row['user_pwd'];
				$_SESSION['u_id'] = $row['user_id'];
				$_SESSION['u_first'] = $row['user_first'];
				$_SESSION['u_last'] = $row['user_last'];
				$_SESSION['u_email'] = $row['user_email'];
				$_SESSION['u_pwd'] = $row['user_pwd'];
				$_SESSION['u_bios'] = $row['user_bios'];
				$_SESSION['u_phone'] = $row['user_phone'];
				header("Location:../index.php?you are logged in");


			}
			
		}
		                  else{
		                  	
		                  
	                              	 header("Location:../login.php?wrongPassword");

	                

			              
			              
		                  }
	}

	
}
 else{
	
		header("Location:../login.php?log in failed");
}