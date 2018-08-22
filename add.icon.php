<?php
session_start();

include_once 'dbh.inc.php';

if (isset($_POST['submit'])) {

// getting file information
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];


// file extension
	$fileExt = explode('.', $fileName);

   $fileActualExt =strtolower(end($fileExt));
   $allowed =  array('jpg','jpeg', 'png');

   if (in_array( $fileActualExt, $allowed  )) {

   	if ($fileError === 0) {
   		
   		if ($fileSize < 900000000000 ) {

   			$fileNameNew = uniqid('',true).".". $fileActualExt;
   			$fileDestination ='../uploads/bussiness/'.$fileNameNew;

   		move_uploaded_file($fileTmpName, $fileDestination );

   		//DB

   		$owner = $_SESSION['u_first'];

   		$sql = "SELECT * FROM bussiness WHERE bussiness_owner='$owner' and icon_status < 1;";
   		$results= mysqli_query($conn,$sql);
   		$resultsCheck = mysqli_num_rows($results);

   	   if ($resultsCheck > 0) {
   	   	 while ($row = mysqli_fetch_assoc($results)) {
   	   	 $bussinessName = $row['bussiness_name'];
   	   	 $bussinessOwner= $row['bussiness_owner'];

   	   	 //image info

   	   	 $imageName = $fileNameNew;

   	   //$sql = "INSERT INTO productimages (image_owner, image_product, image_price, image_name) VALUES ('$owner', '$productName', '$productPrice', '$imageName');";
   	 //  mysqli_query($conn,$sql);

   	   //echo "success";
   	   
   	   // update products table and put 1 on 0

   	   $sql = "UPDATE bussiness SET bussiness_icon='$imageName' WHERE bussiness_name='$bussinessName' and bussiness_owner='$owner';";
   	    mysqli_query($conn,$sql);
   	   

   	    //insert image name into products table
   	$sql = "UPDATE bussiness  SET icon_status =1 WHERE bussiness_name='$bussinessName';";

   	   mysqli_query($conn,$sql);
          header("Location:../bussiness.php");

   	    //

   	   // echo "successfull";

   	   	 	
   	   	 }
   	   
   	   }





   		//DB

   		//header("Location:../profile.php?upload=success");

   			

   		}

   		else{
   				echo "your files is to big";

   		}

   	}

   	else{
   		echo "there were problem in uploading your files";

   	}


   }

   else{
   	echo "you can not upload files of these type";
   }

}