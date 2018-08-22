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
        $fileDestination ='../uploads/profile/'.$fileNameNew;

      move_uploaded_file($fileTmpName, $fileDestination );

      //DB

      $owner = $_SESSION['u_first'];

      $sql = "SELECT * FROM users WHERE user_first='$owner' and user_img < 1;";
      $results= mysqli_query($conn,$sql);
      $resultsCheck = mysqli_num_rows($results);

       if ($resultsCheck > 0) {
         while ($row = mysqli_fetch_assoc($results)) {
         $userName = $row['user_first'];
         $userPhone= $row['user_phone'];

         //image info

         $imageName = $fileNameNew;
         $profileStatus =1;

       $sql = "INSERT INTO profileimages (profile_owner, profile_phone, profile_name, profile_status) VALUES ('$owner', '$userPhone', '$imageName', '$profileStatus');";
       mysqli_query($conn,$sql);

       //echo "success";
       
       // update products table and put 1 on 0

       $sql = "UPDATE users SET user_img=1 WHERE user_first='$owner';";
        mysqli_query($conn,$sql);
        header("Location:../profile.php");

        //insert image name into products table
          $sql = "UPDATE products SET product_face='$imageName' WHERE product_owner='$owner';";
        mysqli_query($conn,$sql);
        header("Location:../profile.php");

         $sql = "UPDATE users SET user_face='$imageName' WHERE product_owner='$owner';";
        mysqli_query($conn,$sql);
        header("Location:../profile.php");
    
    

        //

       // echo "successfull";

          
         }
       
       }
       else{
        echo "you have alredy have profile image";
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