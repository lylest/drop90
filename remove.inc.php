<?php
session_start();
include_once 'dbh.inc.php';

if(isset($_POST['submit'])) {

    $cancel= mysqli_real_escape_string($conn,$_POST['cancel']);
	//echo $cancel;

	$sql = "DELETE FROM bussiness WHERE bussiness_name='$cancel';";
	mysqli_query($conn,$sql);
	header("Location:../traders.php");
}
else{
	header("Location:../bussiness.php?failed");
}