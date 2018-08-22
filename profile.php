
<?php
session_start();
include_once 'includes/dbh.inc.php';
if (!isset($_SESSION['u_first'])) {
   header("Location:login.php");
}
else{
    $owner = $_SESSION['u_first'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/profile/</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="main_css/sub.css" />
    <script src="soni.js" type="text/javascript"></script>
    <style type="text/css">
    #para{
    font-family:'Quicksand', sans-serif;
    font-size:15px;
    color: #5c7eb4;
    outline: none;
    padding-top: 20px;
    text-align: center;

    }
    #user-img img{
    width: 82px;
    height: 80px;
    border-radius:54px;
    background-repeat: no-repeat;

}
        #uploaded1 input[type="text"]{
    outline: none;
    font-size: 0px;
    border:0px;
    background-color: none;
}
    </style>
      
        

   


   
</head>
<body>
   
    
        
         <nav>
             <ul>
                 <li><p>Drop90</p></li>
                 <li><P></P></li>
                 <li><?php

                     if (!isset($_SESSION['u_first'])) {
                        echo '<button onclick="drop()">Menu</button>';


                     }
                     else{
                echo "<button onclick='drop()'>Menu</button>";

                     }
?>
                     </li>

             </ul>

        </nav>
      

        <div id="hidden-menu">
            
            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="traders.php">Trades</a></li>
               
            </ul>

            <button onclick="drop2()"><p>Close</p></button>
            </div>
            <div class="main-profile">
                <div class="profile-self">
                    
                     <div id="profile-div"><br>

                        <div id="user-img">

                            <?php
                            $owner =$_SESSION['u_first'];
                        $sql= "SELECT * FROM profileimages WHERE profile_owner='$owner';";
                        $results= mysqli_query($conn,$sql);
                        $resultsCheck = mysqli_num_rows($results);
                        if ($resultsCheck > 0) {
                             if($row = mysqli_fetch_assoc($results)) {
                                $profileName= $row['profile_name'];
                                $profilePhone= $row['profile_phone'];
                                $profileOwner= $row['profile_owner'];
                                 echo "<img src='uploads/profile/". $profileName." ' >";
                              
                            }
                            
                        }  else{
                             echo " <a href='profile.img.php'>
                             <img src='img/user3.png'></a>";
                            
                        }
                        
                       
                            ?>
                        </div>
                        <div id="info-box">

                            <?php
                            echo "<p>".$_SESSION['u_first']. "&emsp;".$_SESSION['u_last']. "</p>";

                            ?>

                        </div>
                        <div id="info-box2">

                            <br>
                            <?php

                            echo "<p>".$_SESSION['u_bios']."</p>";

                         
                        ?>


                        </div>
                        <div id="info-box">

                           
                            <?php
                            echo "<p>".$_SESSION['u_email']."</p>";

                            ?>


                        </div>
                        <div id="info-box">
                           
                            <?php
                            echo "<p>".$_SESSION['u_phone']. "</p>";

                            ?>



                        </div>
                        <div id="info-box"><a href="bussiness.php"><p>My Bussiness</p></a></div><br>
                        <div id="info-box4"><button><a href="edit-profile.php"><p>Edit</p></a></button></div>
                    </div><br>
                    
            <form method="POST" action="includes/logout.php">
                <button type="submit" name="logout">Log out</button>
            </form><br>

                </div>

        <div class="user-uploads">
             <div id="uploaded">

                <?php

                //demo
                    $owner =$_SESSION['u_first'];
                    $phone =$_SESSION['u_phone'];
                    $email =$_SESSION['u_email'];

                    // get product from database
                    $sql = "SELECT * FROM products WHERE product_owner ='$owner';";
                    $results = mysqli_query($conn,$sql);
                    $resultsCheck = mysqli_num_rows($results);
                    if ($resultsCheck > 0) {
                        while ($row = mysqli_fetch_assoc($results)) {
                            
                           $productname = $row['product_name'];
                           $productprice = $row['product_price'];
                            $productplace = $row['product_place'];
                            $productimage = $row['product_image'];
                            $productImgName = $row['product_img'];
                            $productDate = $row['product_date'];
                            $productLikes = $row['product_like'];


                 echo "<div id='uploaded1'>
                 <div  id='top-pal'> <p>".$productname."</p> </div>

                <img src='uploads/products/".$productImgName." ' >

                <div id='down-pal'>
                <p> <a href='#'>".$productprice." </a>&emsp;&emsp;". $productLikes."likes</p>
                
                 
                 <form action='includes/delete.inc.php' method='POST'>
                  <input type='text' name='remove' value='".$productname."'>
                 
                 <button type='submit' name='delete-product'>delete</button>
                 </form>

                 
                 </p>


                </div>


                </div> <br><br>";





                        }
                    }

else{
  
   echo "<br>";
     echo "<p id ='para'><a href='upload-product.php'>Upload your products Now</a></p>";
}
                  

                ?>



             <br><br>

                          
         </div>
                    

                </div>

            </div>
            <br><br>


            