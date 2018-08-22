<?php
session_start();

include_once 'dbh.inc.php';

$bussiness= mysqli_real_escape_string($conn,$_POST['bussiness']);



                     

                      $owner= $_SESSION['u_first'];

            $sql= "SELECT * FROM bussiness WHERE bussiness_owner='$owner' and bussiness_name='$bussiness';";

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

                $newFollower =  $BusinessFollowers+1;

 $sql ="UPDATE bussiness SET bussiness_followers='$newFollower' WHERE bussiness_name='$bussiness';";
     mysqli_query($conn,$sql);
     header("Location:../guest-bussiness.php");

              }
            }
            else{
                echo "failed";
            }
            