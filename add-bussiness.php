
<?php
session_start();
include_once 'includes/dbh.inc.php';
$owner= $_SESSION['u_first'];
  //echo $owner;

 $sql = "SELECT * FROM bussiness WHERE bussiness_owner='$owner';";
    $results= mysqli_query($conn,$sql);
    $resultsCheck = mysqli_num_rows($results);
    if ($resultsCheck > 0) {
     
    }
    else{
    
    }

    
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/add-bussiness</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="main_css/sub.css" />
    <script src="soni.js" type="text/javascript"></script>
    <style type="text/css">

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

.main-graph{
    width:300px;
    height:300px;
    background-color: #f8f8f8;
    margin: 0 auto;
    overflow: auto;

}

.graph1 button{
    width: 98%;
    height:30px;
    background-color: #fff;
    margin-left: 1%;
    
      font-family:'Quicksand', sans-serif;
     font-size:16px;
     color: #5c7eb4;
     text-align: center;
     font-weight: bold;
     border:0px;

}
.graph1:hover{
    border-left: 3px solid #FFAA00;
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
        <br>
           <div id="introduce-main"><br><br>
                <div id="introduce-box">
                <h2>Add another Bussiness</h2>

                <form action="includes/bussiness.submit.php" method="POST">
             <input type="text" name="bname" placeholder="Business Name">
             <input type="text" name="service" placeholder="Products or Services">
             <input type="text" name="location" placeholder="Business location or Work area">
             <input type="text" name="email" placeholder="email">
             <button type="submit" name="submit">Save</button>
                </form>
            </div>
            </div>
            <br>
              <div class="heading"><h5>My Bussinesses</h5></div><br>


                       <div class="main-graph">
                          <?php
                        
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

                echo "<div class='graph1'><form action='bussiness.php' method='POST'>
                <input type='text' name='bizi' value='".$BusinessName."'>

                 <button type='submit' name='another'> ".$BusinessName." </button>
                         </form>
                         </div>";

              }
            }
            ?>
                       </div>
                       <br>
                        <div class="foota4"><p>drop90 (C) All Rights Reserved 2018</p></div>