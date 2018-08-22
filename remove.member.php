<?php
session_start();
include_once 'dbh.inc.php';

if(isset($_POST['submit'])) {

    $member= mysqli_real_escape_string($conn,$_POST['member']);
	//echo $cancel;

	$sql = "DELETE FROM bussinessteam WHERE member='$member';";
	mysqli_query($conn,$sql);
	header("Location:../bussiness.php?");
}
else{
	header("Location:../bussiness.php");
}