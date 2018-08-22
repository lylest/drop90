<?php
if (isset($_POST['delete-product'])) {
	include_once 'dbh.inc.php';

	$remove = mysqli_real_escape_string($conn,$_POST['remove']);
	//echo "$remove";

  $sql = "DELETE FROM products WHERE product_name = '$remove';";
   mysqli_query($conn,$sql);
   header("Location:../profile.php?delete=success!");
}
else{
	 header("Location:../profile.php?delete=failed!");
}

