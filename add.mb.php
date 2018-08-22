<?php
session_start();

if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';
	$bussiness= mysqli_real_escape_string($conn,$_POST['bussiness']);
	$Fname= mysqli_real_escape_string($conn,$_POST['Fname']);
	$position =mysqli_real_escape_string($conn,$_POST['position']);

	if (empty($Fname) || empty($position)) {
		header("Location:../new-member.php?empty!");
	}
	else{
		$owner= $_SESSION['u_first'];
		$memberFace= 0;
		
       $sql = "INSERT INTO bussinessteam(bussiness_owner, bussiness_name, member, member_position, member_face ) VALUES ('$owner','$bussiness', '$Fname', '$position', '$memberFace' );";
       mysqli_query($conn,$sql);
       header("Location:../new-member-image.php");
	}
}
else{
	echo "failed to add new members";
}