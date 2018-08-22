<?php
session_start();

 include_once 'includes/dbh.inc.php';
  $owner= $_SESSION['u_first'];
  //echo $owner;

 $sql = "SELECT * FROM users WHERE user_first='$owner';";
    $results= mysqli_query($conn,$sql);
    $resultsCheck = mysqli_num_rows($results);
    if ($resultsCheck > 0) {
     
    }
    else{
      header("Location:login.php");
    }

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/profile/edit</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="main_css/sub.css" />
    <script src="soni.js" type="text/javascript"></script>
      
        

   


   
</head>
<body>
   
    
        
         <nav>
             <ul>
                 <li><p>Drop90</p></li>
                 <li><P></P></li>
                <li><a href="profile.php">
                    
               </a></li>

             </ul>

        </nav>
      

        <div id="hidden-menu">
            <form>
                <input type="text" name="uid" placeholder="User name">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit">Log in</button>
            </form>
            <ul>
                
                <li><a href="index.html">Home</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="profile.html">About</a></li>
               
            </ul>

            <button onclick="drop2()"><p>Close</p></button>
            </div>
            <div class="main-edit"><br><br>
                <div class="edit-form">
                    <div class="edit-top"><P>Edit Your Profile <a href="profile.img.php"><img src="img/user3.png" ></a> </P></div>
                    <form action="includes/edit.php" method="POST">
           
            <input type="text" name="flast" placeholder="last Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone Number">
        <textarea name="bios"  placeholder="Edit your Bio"></textarea>
            <button type="submit" name="submit">Save</button>

                    </form>
                    
                   
                </div>
                
                </form>
               
            </div>

              <div class="foota4"><p>drop90 (C) All Rights Reserved 2018</p></div>