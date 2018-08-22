<?php
 if (isset($_POST['logout'])) {
 	include_once 'dbh.inc.php';
 	session_destroy();
 	header("Location:../products.php?");
 	session_destroy();
 	header("Location:../login.php?");
 }

 else{
    header("Location:../profile.php?logoutfailed");

 }