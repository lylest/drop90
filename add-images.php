<?php


//
$sql= "SELECT * FROM bussinessteam WHERE bussiness_owner='$owner' and bussiness_name='';";
            $results= mysqli_query($conn,$sql);
            $resultsCheck= mysqli_num_rows($results);
            if ($resultsCheck > 0) {
              while($row = mysqli_fetch_assoc($results)){
                $BusinessName = $row['bussiness_name'];
                $BusinessOwner = $row['bussiness_owner'];
                $MemberName = $row['member'];
                $MemberPosition = $row['member_position'];
                $MemberFace = $row['member_face'];
                
              
           echo "<div id='content-box'>
                        <div id='content1'>

                        <img src='uploads/bussiness/".$MemberFace."' id='image2'>

                        </div>
                        <div id='content2'>
                          <p id='oky'>".$MemberName." (".$MemberPosition.")</p>
                          <p id='oky2'></p>
                        </div>
                        <div id='content3'>

                            <form>
            <button id='butoni2'><img src='img/remove.png' id='image3'>
                        </button>
                            </form>


                            </div>

                    </div>";

         }

         }








//

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
   			$fileDestination ='../uploads/galley/'.$fileNameNew;

   		move_uploaded_file($fileTmpName, $fileDestination );

   		//DB

   		$owner = $_SESSION['u_first'];
         //
           $sql= "SELECT * FROM bussiness WHERE bussiness_owner='$owner';";
            $results= mysqli_query($conn,$sql);
            $resultsCheck= mysqli_num_rows($results);
            if ($resultsCheck > 0) {
              while($row = mysqli_fetch_assoc($results)){
                $BusinessName = $row['bussiness_name'];
                $BusinessOwner = $row['bussiness_owner'];
                $BusinessLocation = $row['bussiness_location'];
                $BusinessService = $row['bussiness_service'];
                $BusinessFollowers = $row['bussiness_followers'];
                $BusinessEmail = $row['bussiness_email'];
                $BusinessIcon = $row['bussiness_icon'];

              }
            }

         //

   	

   	   	 $imageName = $fileNameNew;
             $Imgstatus= 1;

             $sql = "INSERT INTO bussinessimages(bussiness_owner, bussiness_name, bussiness_image, status)
             VALUES('$owner', '$BusinessName', '$imageName', '$Imgstatus');";

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