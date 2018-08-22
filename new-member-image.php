<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/new-member</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="main_css/sub.css" />
    <script src="soni.js" type="text/javascript"></script>
    <style type="text/css">
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
                 <li></li>

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
                <h2>Team Member Image</h2>
                <br>

                <form action="includes/new.mb.php" method="POST" enctype="multipart/form-data">
            &emsp; <input type="file"  name="file">
             
            
             <button type="submit" name="submit">Upload</button>
                </form>
            </div>
            </div>
            <br>
              
              <br>
              <br>
              <br>
              <br
            