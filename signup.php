<?php
if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';
	
	$first=mysqli_real_escape_string($conn,$_POST['first']);
	$last= mysqli_real_escape_string($conn,$_POST['last']);
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$pwd= mysqli_real_escape_string($conn,$_POST['pwd']);
	$userImg = 0;

	if(empty($first) || empty($last) || empty($email) || empty($pwd) ){
		header("Location:signup.php?sign up=empty!");


	} 
	else{

$sql="SELECT * FROM users WHERE user_first='$first';";
	$results= mysqli_query($conn,$sql);
	$resultsCheck = mysqli_num_rows($results);
	echo "<p>taken names</P>";
	if ($resultsCheck > 0) {
		while ($row = mysqli_fetch_assoc($results)) {
			$FIRST = $row['user_first'];
			$UEmail = $row['user_email'];
			//echo "<br>";
			//echo "<p>".$FIRST."&emsp;".$LAST."</p>";
			

		}	
}
if ($FIRST==$first and $email==$UEmail) {
	header("Location:../signup-one.php?Username/emailTaken!");
}
else{
	$sql="INSERT INTO users (user_first, user_last, user_email, user_pwd, user_img) VALUES ('$first', '$last', '$email', '$pwd', '$userImg');";

				mysqli_query($conn,$sql);
				header("Location:../login.php?sign up success!");
}
	 }

	}