
<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/index.php</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
    <script src="soni.js" type="text/javascript"></script>

   
</head>
<body>
   
    <div class="top-banner">
        
         <nav>
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
            <form action="includes/login.inc.php" method="POST"> 
                <input type="text" name="email" placeholder="email/phone">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="submit">Log in</button>
            </form>
            <ul>
                
               
               
            </ul>

            <button onclick="drop2()"><p>Close</p></button>
            </div>
        

        <div id="search-box">
    
                <input type="text" name="search" placeholder="Search everything">
               <a href="products.php"><button></button></a>
        
        </div>
    </div>
    <br><br>
    <div class="down-div">
        <div class="down1">
            <div id="down-icon"></div>
            <a href="traders.php"><p>Traders</p></a>
        </div>
        <div class="down2"></div>
        <div class="down3">
                <div id="down-icon2"></div>
                <a href="products.php"><p>Products</p></a>
        </div>
    </div>
    <div class="about-us">
        <h2>What we do?</h2>
 <div class="main-box">
     <br><br>
        <div class="boxi-pic"></div>
       <div class="boxi-xp"><p>
        Lorem, ipsum dolor sit amet 
        consectetur adipisicing elit. 
        Nobis sed fugit voluptas ex au
        t nesciunt eos quasi labore dicta
         facilis odio autem tempore,
         quod vel quas culpa sint deserunt
          id.
          consectetur adipisicing elit. 
        Nobis sed fugit voluptas ex au
        t nesciunt eos quasi labore dicta
         facilis odio autem tempore,
         quod vel quas culpa sint deserunt
          id.
          </p></div> 
    </div>

  
    </div>
    <div class="eye"> 
        <div class="eye2"><br><br><br><br>
           <div class="buttoni"> 
              <a href="signup-one.php"> <button>
            <p>CREATE ACCOUNT</p>
        </button>  </a></div>
    </div>
    
    </div>


    <div class="join-us">
         <div class="signup-form">
        <h2>Log in</h2>
        <form action="includes/login.inc.php" method="POST">
 <input type="text" name="email" placeholder="email" id="ina" onmouseover="inf()">
       
        <input type="password" name="pwd" placeholder="password">

        <button type="submit" name="submit">Log in</button>
      </form>
        
        <a href="forgot.html"><P>Forgot password?</P></a>

    </div>
        
        <div class="join1"></div>
        </div>

        

        <div class="main-foota">
            <div class="foota1">
              
            </div>
            <div class="foota1">
                    <ul>
                        <li>
            <form method="POST" action="includes/logout.php">
                <button type="submit" name="logout">Log out</button>
            </form></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="traders.php">Dealers</a></li>
                        <li><a href="login.php">Log in</a></li>
                        <li><a href="sign.php">Sign Up</a></li>
                        <li><a href="#">Back to Top</a></li>
                    </ul>
                </div>
                <div class="foota1">
                        <ul>
                            <li><a href="http://zipansion.com/2qMCI">Advertisments</a></li>
                            <li><a href="http://zipansion.com/2qMCI">Services</a></li>
                            <li><a href="#">+255 0766 298 542</a></li>
                                <li><a href="#">Drop90@mail.com</a></li>
                                <li><a href="#">+255 0745 619 532</a></li>
                                <li><a href="http://zipansion.com/2qMCI">FAQ</a></li>
                           
                        </ul>
                    </div>
                    <div class="foota1">
                            <ul>
                                <li><a href="shops.php">Shops</a></li>
                                <li><a href="Profile.php">Profile</a></li>
                                <li><a href="#">Branches</a></li>
                                <li><a href="http://zipansion.com/2qMCI" target="blank">Developer</a></li>
                                <li><a href="http://zipansion.com/2qMCI">Report</a></li>
                                <li><a href="http://zipansion.com/2qMCI">Policy</a></li
                               
                            </ul>
                        </div>
                      

            
                              
              
        </div>
        <div id="foota2">
           &emsp;  &emsp;<img src="img/gmail.png" width="30" height="30">
              &emsp;  &emsp;<img src="img/insta.png" width="25" height="25">
              &emsp;  &emsp;<img src="img/gray.png" width="30" height="30">


        </div>
      
    
       
   
</body>
</html>