<?php
include_once 'dbh.inc.php';
session_start();
if (isset($_POST['like'])) {
	$product = mysqli_real_escape_string($conn,$_POST['product']);
	

    $sql = "SELECT * FROM products WHERE product_name='$product';";
    $results = mysqli_query($conn,$sql);
    $resultsCheck = mysqli_num_rows($results);
    if ($resultsCheck > 0) {
    	while ($row = mysqli_fetch_assoc($results)) {
    		$availableLikes = $row['product_like'];
    		$newLikes= $availableLikes+1;

    	$sql="UPDATE products SET product_like='$newLikes' WHERE product_name='$product';";
    	mysqli_query($conn,$sql);
    	header("Location:../products.php");

    	}

 
    }

}