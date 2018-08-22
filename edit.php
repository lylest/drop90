<?php
session_start();
include_once 'dbh.inc.php';
$Bphone = $_SESSION['u_phone'];
$first = $_SESSION['u_first'];

//echo $Bphone;
//echo $first;


if (isset($_POST['submit'])) {
	
	$flast = mysqli_real_escape_string($conn,$_POST['flast']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$phone = mysqli_real_escape_string($conn,$_POST['phone']);
	$bios = mysqli_real_escape_string($conn,$_POST['bios']);
	

	//
	$sql ="SELECT * FROM users WHERE user_first='$first' and user_phone='$Bphone';";
	$results= mysqli_query($conn,$sql);
            $resultsCheck= mysqli_num_rows($results);
            if ($resultsCheck > 0) {
              while($row = mysqli_fetch_assoc($results)){
                $userPhone = $row['user_phone'];
                $userFirst = $row['user_first'];
                echo $userPhone;
                echo $userFirst;
                echo $face=$row['user_face'];
                }
            }
                
	


	
	//$userpwd = $_SESSION['u_pwd'];

	$sql="UPDATE users SET user_last='$flast'  WHERE user_face = '$face';";
	  mysqli_query($conn,$sql);

	  $sql="UPDATE users SET user_email='$email'  WHERE user_face = '$face';";
	  mysqli_query($conn,$sql);

	   $sql="UPDATE users SET user_phone='$phone'  WHERE user_face = '$face';";
	  mysqli_query($conn,$sql);

	  $sql="UPDATE users SET user_bios='$bios'  WHERE user_face = '$face';";
	  mysqli_query($conn,$sql);

	 

	

	  

	 


	 
				 header("Location:../profile.php?");
				


			



	
}
else{
	 header("Location:../login.php");
}
