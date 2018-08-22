<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/t?resul!bussines</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="main_css/sub.css" />
    <script src="soni.js" type="text/javascript"></script>
     <script src="jquery-3.3.1.min.js"></script>
    <script>
    $(document).ready(function (){
      $("input").keyup( function(){
        var look = $("input").val();
        $.post("tradersUs.php", {
          tradersUs:look
        }, function(data,status){
          $("body").html(data);
        });

      });
      

    });
    </script>
    <style type="text/css">


#pia {
     font-family:'Quicksand', sans-serif;
     font-size:16px;
     color: #5c7eb4;
     text-align: center;
    

}

#find-form{
    width:297px;
    height:35px;
    background-color:#fff;
    margin: 0 auto;
     font-family:'Quicksand', sans-serif;
     font-size:14px;
     color: #fff;
     background-color:

}

#find-form input[type="text"]{
        width:200px;
        height:35px;
        font-family:'Quicksand', sans-serif;
        font-size:14px;
        color: #ccc;
        text-align: center;
        outline: none;
        cursor: pointer;
        background-color:#fff;
        border:1px solid #eee;  
       }


  

#find-form button{
        width:35px;
        height:30px;
        border:0px;
        font-family:'Quicksand', sans-serif;
        font-size:14px;
        color: #fff;
        text-align: center;
        outline: none;
        cursor: pointer;
       background-color: #5c7eb4;

}
    .main-bussiness{
        margin-left: 2%;
    }
    .foota4{
        position: fixed;
        bottom: 0;
    }

.main-graph{
    width:300px;
    height:300px;
    background-color: #f8f8f8;
    margin: 0 auto;
    overflow: auto;

}
.graph1{
    width: 98%;
    height:30px;
    background-color: #fff;
    margin-left: 1%;
     margin-top:12px;
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
    @media(min-width: 1000px) and (max-width: 1400px){
              .main-bussiness{
     margin-left: 20%;
}
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
                 <li><a href="profile.html"><button>Joseph</button></a></li>

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
           <div id="find-form">
                     <form>
                    <input type="text" name="find" placeholder="Find traders and Bussinesses" >
                    <button type="submit">Find</button>
                </form>
                </div>
                <br>
                <br>


<?php
/*

    include_once 'includes/dbh.inc.php';
    $find= mysqli_real_escape_string($conn,$_POST['find']);
   // echo $find;
    

    if (empty($find)) {
        header("Location:../traders.php?empty!");
    }
    else{
     $sql= "SELECT * FROM bussiness WHERE bussiness_name LIKE '%$find%' OR 
     bussiness_owner LIKE '%$find%'";
           $results= mysqli_query($conn,$sql);
            $resultsCheck= mysqli_num_rows($results);
            echo "<p id='pia'> There &emsp;".$resultsCheck."&emsp; results found</p>";
            if ($resultsCheck > 0) {
              while($row = mysqli_fetch_assoc($results)){
                $BusinessName = $row['bussiness_name'];
                $BusinessOwner = $row['bussiness_owner'];
                $BusinessLocation = $row['bussiness_location'];
                $BusinessService = $row['bussiness_service'];
                $BusinessFollowers = $row['bussiness_followers'];
                $BusinessEmail = $row['bussiness_email'];
                $BusinessIcon = $row['bussiness_icon'];

                echo "
           <div class='main-bussiness'>
      <div class='bussiness-icon'><img src='uploads/bussiness/".$BusinessIcon ."'></div>
            <div class='bussiness-info'>
                  <div id='bussiness-down'><p>".$BusinessName." <button>view</button></p></div>
                  <div id='bussiness-down'><p>Owner:". $BusinessOwner."</p></div>
                  <div id='bussiness-down'><p>Bussiness:". $BusinessService."</p></div>
    <div id='bussiness-down'><p>Followers:<b>". $BusinessFollowers."</b><button>follow</button></p></div>

                    </div>
                    
                  </div>
                  <br><br><br>";

              }
            }
             else{
     
    echo "<div id='introduce-main'><br><br>
                <div id='introduce-box'>
                <h2>Add another Bussiness</h2>

                <form action='includes/bussiness.submit.php' method='POST'>
             <input type='text' name='bname' placeholder='Business Name'>
             <input type='text' name='service' placeholder='Products or Services'>
             <input type='text' name='location' placeholder='Business location or Work area'>
             <input type='text' name='email' placeholder='email'>
             <button type='submit' name='submit'>Save</button>
                </form>
            </div>
            </div>";
}

    
    
}
 


*/
                  ?>




                  