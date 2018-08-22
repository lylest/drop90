<?php
session_start();

if (isset($_POST['submit'])) {
	include_once 'dbh.inc.php';

	$pname = mysqli_real_escape_string($conn,$_POST['pname']);
	$price = mysqli_real_escape_string($conn,$_POST['price']);
	$place = mysqli_real_escape_string($conn,$_POST['place']);
	$desk = mysqli_real_escape_string($conn,$_POST['desk']);

	//ERROR HANDLES

	//  check for empty field
if (empty($pname) || empty($price) || empty($place)  || empty($desk) ) {

      header("Location:../upload-product.php?upload=empty!");
	
	}
	else{
		$owner= $_SESSION['u_first'];
		$image = 0;
		$img = "none";
		$like =0;
		$face = "unset";




		
		//echo $owner;

		$sql = "SELECT * FROM profileimages WHERE profile_owner='$owner';";
		$results = mysqli_query($conn,$sql);
		$resultsCheck =mysqli_num_rows($results);
		if ($resultsCheck > 0) {
			while ($row = mysqli_fetch_assoc($results)) {
				 $Imgowner = $row['profile_owner'];
				 $Imgname = $row['profile_name'];
				 $ImgStatus = $row['profile_status'];

			}
		}

		//

		$sql = "INSERT INTO products(product_owner, product_name, product_price, product_place,  product_desk, product_image, product_like, product_face)

		 VALUES ('$owner', '$pname', '$price',  '$place', '$desk', '$image', '$like', '$Imgname' );";

		mysqli_query($conn,$sql);
		 header("Location:../product-img.php?upload=productimage!");

	}
} else{
	 header("Location:../upload-product.php?upload=failed!");
}