<?php
session_start()


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/upload-product</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
    <script src="soni.js" type="text/javascript"></script>
    <style type="text/css">
        body{
            background-color: #d4d4d4;
        }
    </style>

   
</head>
<body>
   
    
        
         <nav>
             <ul>
                 <li><p>Drop90</p></li>
                 <li><P></P></li>
                <li>
                     
                     <?php

                     if (!isset($_SESSION['u_first'])) {
                        echo '<button onclick="drop()">Menu</button>';


                     }
                     else{
                echo "<a href='profile.php'><button>".$_SESSION['u_first']."</button></a>";

                     }

?>    </li>              

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
           
            <div class="main-upload"><br><br>
                <div class="loaders">
                    <div class="load1"></div>
                      <div class="load2"></div>
                        <div class="load3"></div>
                </div>
                <div class="upload-box">
                        
                            
                
               <div class="uploadi-top">
                            
                                <p>Upload Your Product</p>
                            </div>

                            <form action="includes/submit-product.php" method="POST">
                        <input type="text" name="pname" placeholder="Product name">
                        <input type="text" name="price" placeholder="Price">
                        <input type="text" name="place" placeholder="Your Location">
                       <textarea  name="desk" placeholder="Product descrption"></textarea>
                       <button type="submit" name="submit">Submit</button>
                                
                            </form>
                        
                    
                </div>
                
            </div>
              <div class="foota4"><p>drop90 (C) All Rights Reserved 2018</p></div>