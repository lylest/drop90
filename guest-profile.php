<?php


if (isset($_POST['submit'])) {
	include_once 'includes/dbh.inc.php';
	$profile = mysqli_real_escape_string($conn,$_POST['profile']);
	//echo $profile;
	$sql ="SELECT * FROM users WHERE user_first='$profile';";
	$results =mysqli_query($conn,$sql);
	$resultsCheck = mysqli_num_rows($results);
	if ($resultsCheck > 0){
		while($row = mysqli_fetch_assoc($results)){
			 $userFirst = $row['user_first'];
			 $userLast = $row['user_last'];
			 $userPhone = $row['user_phone'];
			 $userEmail = $row['user_email'];
			 $userBios = $row['user_bios'];
			 $userFace = $row['user_face'];
			 $userImgstatus = $row['user_img'];

		}
		
		
	}

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
     #info-box input[type="text"]{
    outline: none;
    font-size: 0px;
    border:0px;
    background-color: none;
    width: 0px;
    height: 0px;
    }
    #info-box button{
    outline: none;
    font-size: 0px;
    border:0px;
    background-color: none;
    width: 0px;
    height: 0px;
    text-align: center;
    margin: 0 auto;
    
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
                         if ($userImgstatus > 0) {
                         	echo "<img src='uploads/profile/". $userFace."'>
                         	";
                         
                         } else{
                         	echo " <a href='profile.img.php'>
                             <img src='img/user3.png'></a>";

                         }
                           
                            
                        
                        
                       
                            ?>
                        </div>
                        <div id="info-box">

                            <?php

                            /*
                             $userFirst = $row['user_first'];
			 $userLast = $row['user_last'];
			 $userPhone = $row['user_phone'];
			 $userEmail = $row['user_email'];
			 $userBios = $row['user_bios'];
			 $userFace = $row['user_face'];
			 $userImgstatus = $row['user_img'];

                            */
                            echo "<p>". $userFirst. "&emsp;". $userLast."</p>";

                            ?>

                        </div>
                        <div id="info-box2">

                            <br>
                            <?php

                            echo "<p>". $userBios."</p>";

                         
                        ?>


                        </div>
                        <div id="info-box">

                           
                            <?php
                            echo "<p>".$userEmail."</p>";

                            ?>


                        </div>
                        <div id="info-box">
                           
                            <?php
                            echo "<p>". $userPhone. "</p>";

                            ?>



                        </div>
                        <div id="info-box"><a href="#">
                            <a href="traders.php"><p>Bussiness</p></a>
<?php
/*
  echo "  <form action='guest-bussiness.php' method='POST'>
        <input type='text' name='bussinessOwner' value='".$userFirst."'>
        <input type='text' name='bussinessName' value='".$userFirst."'>
        <button type='submit' name='submit'><p>Bussiness</p></button>
                                
                            </form>";
                            */
                          

                            ?>

                        </a></div><br>
                        <div id="info-box4"></div>
                    </div><br><br>

                </div>

        <div class="user-uploads">
             <div id="uploaded">

                <?php
;

                    // get product from database
                    $sql = "SELECT * FROM products WHERE product_owner ='$profile';";
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
                 
                 
                 </form>

                 
                 </p>


                </div>


                </div> <br><br>";





                        }
                    }


                  

                ?>



             <br><br>

                          
         </div>
                    

                </div>

            </div>
            <br><br>

          


