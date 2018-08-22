<?php
session_start();
include_once 'includes/dbh.inc.php';

 $owner= $_SESSION['u_first'];

$sql = "SELECT * FROM bussiness WHERE bussiness_owner='$owner';";
    $results= mysqli_query($conn,$sql);
    $resultsCheck = mysqli_num_rows($results);
    if ($resultsCheck > 0) {
     
    }
    else{
      header("Location:login.php");
      exit();
    }
 
 if (isset($_POST['submit'])){
  $bussinessName = mysqli_real_escape_string($conn,$_POST['bussinessName']);
  $bussinessOwner = mysqli_real_escape_string($conn,$_POST['bussinessOwner']);
   //echo $bussinessOwner;
 }
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/bussiness</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="main_css/sub.css" />
    <script src="soni.js" type="text/javascript"></script>
    <style type="text/css">
    .heading2{
      border:1px solid #fff;
    }
    .heading2 button{
      border:1px solid #fff;
    }


     #content3 input[type="text"]{
       width: 0px;
       height:0px;
       font-size: 0px;
       border:0px;
       margin-top: 0px;

    }
    #content3 button{
      display:block;
     


}
 #buttoni2{
       width: 10px;
    height: 10px;
   background-color:#fff;
   
   background-size: cover;
   background-repeat: no-repeat;
   background-size:30px 30px;
   background-position: center;


}
    #content3 button img{
     width: 30px;
    height: 30px;
   background-color:#ddd;
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center;
   margin-top: 0px;


}

    .graph1{
    width: 98%;
    height:50px;
    background-color: #fff;
    margin-left: 1%;
     margin-top:12px;
}
     .graph1 input[type="text"]{
       width: 0px;
       height:0px;
       font-size: 0px;
       border:0px;
       margin-top: -10px;

    }

    .heading2{
    margin:0 auto;
     width: 250px;
    height: 60px;
    background-color: #f8f8f8;
    border:1px solid #f8f8f8;
}
      .heading2 input[type="text"]{
       width: 0px;
       height:0px;
       font-size: 0px;
       border:0px;
       margin-top: -10px;

    }
    #bussiness-down input[type="text"]{
       width: 0px;
       height: 0px;
       font-size: 0px;
       border:0px;

    }
      .foota4{
        position:relative;
        bottom: 0;
    }
    
    @media(min-width: 0px) and (max-width:700px){
       #content3 button img{
     width: 0px;
    height: 0px;
   background-color:#ddd;
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center;
   margin-top: -40px;


}
   #content3{
     width: 0px;
    height: 0px;
   background-color:#fff;
   background-size: cover;
   background-repeat: no-repeat;
   background-position: center;
   margin-top: 0px;


}
    }
    @media(min-width: 100px) and (max-width: 1400px){

       .product-footer{
        width:500px;
        height:40px;
        background-color:#eee;
        margin-top:-4px;
    
    
    }
    }
    </style>
  
      
        

   


   
</head>
<body>
   
    
        

           
                <nav id="navig">
             <ul>
                 <li><p>Drop90</p></li>
                 <li><P></P></li>
                 <li>
                  <?php
               
                        echo '<button onclick="drop()">Menu</button>';


                     
                 
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

          <div class="small-menu3">
                <div class="more3"><button onclick="sider()"><img src="img/menu3.png"></button></div>
                <div class="sponsored-posts3"><p>Bussiness</p></div>
                <div class="upload3"><a href="add-bussiness.php"><button>More</button></a></div>
            </div>
         
            
            <div id="nice-panel">
                <div id="nice1">
                   <a href="#"><p id="para"> Our team</a><button onclick="closer()" id="butoni">X</button></p>
                   <div id="round-ceo"><img src="img/office3.png" id="image"></div><br>

<?php
                   
 $owner= $_SESSION['u_first'];

 if (isset($_POST['another'])) {

    $bizi= mysqli_real_escape_string($conn,$_POST['bizi']);
     $sql= "SELECT * FROM bussinessteam WHERE bussiness_owner='$owner' and bussiness_name='$bizi';";
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

                            <form action='includes/remove.member.php' method='POST'>

                            <input type='text' name='member' value='".$MemberName."'>
            <button id='butoni2' type='submit' name='submit'>
            <img src='img/remove.png' id='image3'>
                        </button>
                            </form>



                            </div>

                    </div>";
           }
               }
               //

               //
}
else{
  $sql= "SELECT * FROM bussinessteam WHERE bussiness_name='$bussinessName' or bussiness_owner='$bussinessOwner'";
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

                            <form action='includes/remove.member.php' method='POST'>

                            <input type='text' name='member' value='".$MemberName."'>
           
          
                            </form>



                            </div>

                    </div>";

         }


         }









}

       

                    ?>
                    <br>
                  
                    <br>
                    



                </div>


                  <div id="nice2">
                    <div class="main-bussiness">
                      <?php
                    

                  $sql= "SELECT * FROM bussiness WHERE bussiness_name='$bussinessName' or bussiness_owner='$bussinessOwner';";
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
            } else{
               header("Location:add-bussiness.php");
            }
           
          





                    



            $sql= "SELECT * FROM bussiness WHERE bussiness_name='$bussinessName';";
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
            else{
               header("Location:add-bussiness.php");
            }
          


                      ?>


      <div class="bussiness-icon">
        <?php
        echo "<img src='uploads/bussiness/".$BusinessIcon."'> ";

        ?>


      </div>
            <div class="bussiness-info">
                  <div id="bussiness-down">
                    <p>Name:
                      <?php

                   echo $BusinessName;
                    ?>

                  </p>
                  </div>
                  <div id="bussiness-down">

                    <p>Location: <?php

                   echo  $BusinessLocation;
                    ?>
                      
                    </p>


                  </div>
                  <div id="bussiness-down">
                    <p>
                    Services:  <?php

                   echo   $BusinessService;
                    ?>

                  </p>
                  </div>
    <div id="bussiness-down">



      <p>Followers:<b>


 <?php

                   echo   $BusinessFollowers;
                    ?>




    </b>
    <?php

 echo "<form action='includes/follow.php' method='POST'>
 <input type='text' name='bussiness' value='".$BusinessName."'> 

  
      <button type='submit' name='follow'>follow</button>
</form>"

?>





  </p></div>

                    </div>
                    
                  </div>
                  <br>
                  <div class="heading"><h5>Products/Services</h5></div>
                  <br>

                  <div class="main-galley">
                    <?php
  $sql="SELECT*FROM bussinessimages WHERE bussiness_name='$BusinessName';";
                  $results= mysqli_query($conn,$sql);
                  $resultsCheck= mysqli_num_rows($results);
                  if ($resultsCheck > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                       $Imgname= $row['bussiness_image'];
                      echo "<div class='galley1'>

                      <div id='trans'><p></p></div>

                      <img src='uploads/galley/".$Imgname."'>


                        

                    </div>
                    <br>
                    <br>
                    <br>";
                    }

                  }




                   

                    ?>




       
     
         <br>
                   
                  </div>



                  <br><br><br><br><br>

                   <div class="heading"><h5></h5>
                    <br>
                    

                    <br>
                    <br>
                   </div>
                   <br>

                    <div class="heading2">

<?php

                      echo "<form action='includes/remove.inc.php' method='POST'>

                      <input type='text' name='cancel' value='".$BusinessName."'>
                      
                    </form>";

                    ?>



                  </div><br><br><br>
                    <div class="contact-us">
                     <p><?php

                   echo   $BusinessEmail;
                    ?>
                      
                    </p>
                    </div>
                     
                    <br><br>



                 
                  </div>
                    <div id="nice3">

                       <div class="heading"><h5>Other Bussinesses</h5></div>


                       <div class="main-graph">
                        <?php
                         $sql= "SELECT * FROM bussiness WHERE bussiness_owner='$bussinessOwner';";
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

                echo "<div class='graph1'><form action='guest-bussiness.php' method='POST'>
                <input type='text' name='bussinessName' value='".$BusinessName."'>
               <input type='text' name='bussinessOwner' value='".$BusinessOwner."'>

                 <button type='submit' name='submit'> ".$BusinessName." </button>
                         </form>
                         </div>";

              }
            } else{
               header("Location:add-bussiness.php");
            }


                        


                         ?>


                       </div>


            <div id="introduce-main"><br><br>
                <div id="introduce-box">
               
            </div>
            </div>
                    </div>
                   
                



            </div>
            
              <br>

             