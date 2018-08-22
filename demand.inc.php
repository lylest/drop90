emial, need xp
<?php
if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$need = mysqli_real_escape_string($conn,$_POST['need']);
	$xp = mysqli_real_escape_string($conn,$_POST['xp']);

	if (empty($email) || empty($need) || empty($xp)) {
		header("Location:../traders.php?empty");
	}
	else{

		$sql = "INSERT INTO demands (who, what, detail) VALUES ('$email', '$need', '$xp');";
		mysqli_query($conn,$sql);
		header("Location:../traders.php?successfull");
	}
}
else{
	header("Location:../traders.php?error");
}