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
         //
           $sql= "SELECT * FROM bussinessteam WHERE bussiness_owner='$owner' and member_face < 1;";
            $results= mysqli_query($conn,$sql);
            $resultsCheck= mysqli_num_rows($results);
            if ($resultsCheck > 0) {
              while($row = mysqli_fetch_assoc($results)){
                $BusinessName = $row['bussiness_name'];
                $BusinessOwner = $row['bussiness_owner'];
                $MemberName = $row['member'];
                $MemberPosition = $row['member_position'];
                $MemberFace = $row['member_face'];
                

              }
            }

         //

   	

   	   	 $imageName = $fileNameNew;
             $Imgstatus= 1;

            $sql = "UPDATE bussinessteam SET member_face='$imageName' WHERE member_face=0;";
           mysqli_query($conn,$sql);     
        header("Location:../bussiness.php");

   	    //

   	   // echo "successfull";

   	   	 	
   	   	 




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