<?php
session_start();
include_once 'includes/dbh.inc.php';

if (!isset($_SESSION['u_first'])) {
   $FirstName = "your are not logged in";
   $LastName =  ".";
  $Phone =  "+255";
   $Email =  "@mail";
   $Bios =  "not set";
}

else{
   $FirstName = $_SESSION['u_first']; 
   $LastName = $_SESSION['u_last']; 
  $Phone = $_SESSION['u_phone']; 
   $Email = $_SESSION['u_email']; 
   $Bios = $_SESSION['u_bios']; 

  
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/products.php</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
    <script src="soni.js" type="text/javascript"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script>
    $(document).ready(function (){
      
      $("input").keyup( function(){
        var search = $("input").val();
        $.post("results.php", {
          results:search
        }, function(data,status){
          $("#products").html(data);
        });

      });
      
      //
      $("#btn").click(function(){
        var search= $("input").val();
        $.post("results.php", {
          results:search
        }, function(data,status){
          $("#products").html(data);
        });

      });

      });
      

  
    </script>


    <style type="text/css">
    .products-room h4{
     font-family:'Quicksand', sans-serif;
    font-size:15px;
    color: #5c7eb4;
    outline: none;
    text-align: center;
   
    }
    #navi2{
      width: 100%;
      height: 50px;
      background-color: #5c7eb4; 

    }
   #search-box{
    width:290px;
    height:45px;
    margin:0 auto;
    margin-top:0px;
    background: #fff;
}
.myuploads{
    width:0%;
    height:0px;
    background-color:#ddd;
    margin-left:0%;
    overflow: auto;


}


    .upload-top p{
    font-size:0px;
}
#post-xp p{
   
    font-size:0px;
    

}
#post-xp a{
    
    font-size:0px;
 

}
#post-xp button{
    border:0px;
    background-color: #fff;
    outline: none;
}
#post-xp p{
   
    font-size:14px;


}
 #post-img img{
      width: 0px;
      height:0px;


    }

    .product-footer input[type='text']{
      width: 0px;
      height: 0px;
      margin-top:10px;
      height: 20px;
      font-family:'Quicksand', sans-serif;
    font-size:0px;
    color: #5c7eb4;
    text-align: center;
    background-color:#eee;
    border:0px;

    }
      #like-icon input[type='text']{
      width: 0px;
      height: 0px;
      margin-top:0px;
      height: 0px;
      font-family:'Quicksand', sans-serif;
    font-size:0px;
    color: #5c7eb4;
    text-align: center;
    background-color:#eee;
    border:0px;

    }
    .product-footer button{
      
      margin-top:10px;
      height: 20px;
      font-family:'Quicksand', sans-serif;
    font-size:16px;
    color: #5c7eb4;
    text-align: center;
    background-color:#eee;
    border:0px;

    }
     #user-img img{
    
    width: 82px;
    height: 80px;
    border-radius:54px;
    background-repeat: no-repeat;

}
   
    .product-price p{
    font-family:'Quicksand', sans-serif;
    font-size:18px;
    color:#FFAA00;
   text-align: center;
   padding-top: 4px;


}
      .product-photo img{
    width:200px;
    height:200px;
    background-color:#24b840;
 
    background-size: cover;
    background-position: center;

}
#post-img img{
    width:100px;
    height:100px;
   background:#fff;
    background-repeat: no-repeat;
    background-size: cover;

   

}

@media(min-width: 400px) and (max-width: 699px){
  .foota4{
    width:100%;
    height: 50px;
    background-color: #333;
    margin-top:40px;
    position:relative;
    bottom: 0;
}
     .product-photo img{
    width:300px;
    height:300px;
    background-color:#24b840;
    background-size: cover;
    background-position: center;

}
}
@media(min-width: 700px){
    #search-box{
    width:290px;
    height:45px;
    margin:0 auto;
    margin-top:0px;
    background: #fff;
}

.myuploads{
    width:30%;
    height:800px;
    background-color:#ddd;
    margin-left:0%;
    overflow: auto;


}


    .upload-top p{
    font-size:17px;
}
#post-xp p{
   
    font-size:17px;
    

}
#post-xp a{
    
    font-size:16px;
 

}
#post-xp button{
    border:0px;
    background-color: #fff;
    outline: none;
}
#post-xp p{
   
    font-size:14px;


}
 #post-img img{
      width: 100px;
      height:100px;


    }
   .products-room{
        width:45%;
        height:800px;
        background-color:#fff;
        margin-left:0%;
        overflow: scroll;
    }
     .product-photo img{
    width:300px;
    height:300px;
    background-color:#24b840;
    background-size: cover;
    background-position: center;

}
    </style>

   
</head>
<body>
   
    
        
         <nav>
             <ul>
                 <li><p>Drop90</p></li>
                 <li></li>
                 <li> <?php
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
        <div id="navi2">
            <div id="search-box">
          
                <input type="text" name="search" placeholder="Search products">
               <button id="btn"></button>
           
        </div>
        </div>
      

        <div id="hidden-menu">
            
            <ul>
                
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="traders.php">Trades</a></li>
               
            </ul>

            <button onclick="drop2()"><p>Close</p></button>
            </div>
           

            <div class="little-bar">
                <div class="products" ><a href="products.php"><p>Products</p></a></div>
                <div class="services"> <a href="traders.php"><p>Traders</p></a></div>
            </div>

            <div class="small-menu">
                <div class="more"><a href="profile.php"><button>Profile</button></a></div>
                <div class="sponsored-posts"><p>Products Posts</p></div>
                <div class="upload"><a href="upload-product.php"><p>Upload</p></a></div>
            </div>

            <div class="main-products">
                
                <div class="sider-more">
                    <div id="profile-div"><br>

                    <a href="profile.img.php">    <div id="user-img">
                               <?php
                            $owner =$FirstName;
                        $sql= "SELECT * FROM profileimages WHERE profile_owner='$owner';";
                        $results= mysqli_query($conn,$sql);
                        $resultsCheck = mysqli_num_rows($results);
                        if ($resultsCheck > 0) {
                             while($row = mysqli_fetch_assoc($results)) {
                                $profileName= $row['profile_name'];
                                $profilePhone= $row['profile_phone'];
                                $profileOwner= $row['profile_owner'];
                                $profileStatus= $row['profile_status'];
                                if ($profileStatus > 0) {

                                  echo "<img src='uploads/profile/".$profileName." ' >";
                                 
                                }
                           else{
                            $profileName = "user3.png";
                            echo "<img src='uploads/profile/".$profileName." ' >";
                           }

                              
                              
                            }

                            
                        }  
                           

                      
                        
                        
                       
                            ?>

                         
                        </div>
                        <div id="info-box">

                            <?php
                       echo "<p>".$FirstName. "&emsp;".$LastName. "</p>";
       

                          
                            
                            ?>

                        </div>
                        <div id="info-box2">

                            <br>
                            <?php

                            echo "<p>".$Bios."</p>";

                         
                        ?>


                        </div>
                        <div id="info-box">

                           
                            <?php
                            echo "<p>".$Email."</p>";

                            ?>


                        </div>
                        <div id="info-box">
                           
                            <?php
                            echo "<p>".$Phone. "</p>";

                            ?>



                        </div>
                        <div id="info-box"><a href="bussiness.php"><p>My Bussiness</p></a></div><br>
                        <div id="info-box4"><button><a href="edit-profile.php"><p>Edit</p></a></button></div>
                    </div><br><br>
                  

                    




                </div>

                <div class="products-room" id="products">
                  <?php
                  $sql = "SELECT * FROM products WHERE product_image > 0;";
                  $results= mysqli_query($conn,$sql);
                  $resultsCheck = mysqli_num_rows($results);
                  if ($resultsCheck > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                           $productName = $row['product_name'];
                           $productPrice = $row['product_price'];
                           $productPlace = $row['product_place'];
                           $productLink = $row['product_link'];
                           $productLikes = $row['product_like'];
                           $productImg = $row['product_img'];
                           $productDesk = $row['product_desk'];
                           $productOwner = $row['product_owner'];
                           $productFace = $row['product_face'];
                           $productDate = $row['product_date'];


                          



                           echo  "<div class='product-box'>
                        <div class='product-top'>

                            <div class='top-p'><p>".$productName."</p></div>

                            <div class='top-user'>
                          


                            <img src='uploads/profile/". $productFace ."'>

                            



                            </div>
                         




                        </div>

                       
                       <div class='product-img'>
                           <div class='product-photo'>
                           <img src='uploads/products/".$productImg."'>

                           </div>
                           <div class='product-words'>
                               <div class='product-price'><p>". $productPrice."</p></div>
                               <div class='product-funbox'><p>Descrption</p></div>
                               <div class='product-des'><p>". $productDesk."</p></div>
                           </div>
                       </div> 
                       <div class='product-footer'>
                           <div class='product-like'>
                               <div id='like-icon'>
                        <form action='includes/like.php' method='POST'>
                           <input type='text' value='".$productName."' name='product'>
                                  
                                   <button type='submit' title='LIKE' onclick='like()' id='btn' name='like'></button>
                           </form>
                               </div>
                               <p>".$productLikes." Likes</p>
                            </div>


                           <div class='product-place'><p>". $productPlace."</p></div>
                           <div class='product-link'>
                           <form action='guest-profile.php' method='POST'>

      <input type='text' name='profile' value ='".$productOwner."'>
      <button type='submit' name='submit'>".$productOwner."</button>


                           </form>


                           </div>
                       </div>

                    </div> <br><br><br><br> ";


                    }
                   
                  }
                  ?>


                

                    </div>


              
              


                <div class="myuploads">
                    <div class="upload-top"><p>My Uploads</p></div>

  <?php


$owner = $FirstName;

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



                   echo " <div id='post'>
                        <div id='post-img'>
                        <img src='uploads/products/". $productImgName."'>

                        </div>
                        <div id='post-xp'>
                            <form>
                                <button type='submit'><p>". $productname."</p></button>
                            </form><br>
                        <a href='#'>".$productprice ."</a></div>
                    </div> ";
                  }
                }

                    ?>
                </div>
 
            </div> 

          

       




