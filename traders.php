<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>www.drop90.com/traders</title>
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main_css/style.css" />
     <link rel="stylesheet" type="text/css" media="screen" href="main_css/sub.css" />
    <script src="soni.js" type="text/javascript"></script>
    <script src="jquery-3.3.1.min.js"></script>
   <script>
  $(document).ready(function (){
    
      $("#intext").keyup( function(){
        var look = $("input").val();
        $.post("tradersUs.php", {
          tradersUs:look
        }, function(data,status){
          $("#results").html(data);
        });

      });
      
      //

 $("#btn").click( function(){
   var look = $("#intext").val();
   $.post("tradersUs.php", {
    tradersUs:look } , function(data,status){
        $("#results").html(data);


   
       

    });




  

      });
      //
      

    });
    </script>
    <style type="text/css">
    .bussiness-info input[type="text"]{
        width: 0px;
        height: 0px;
        font-size: 0px;
        border:0px;
        background-color: #fff;
    }
     .bussiness-info{
        height:138px;
        font-size: 0px;
    }
    .bussiness-down{
        height:50px;
    }
    .bussiness-icon{
        height:140px;
    }
    #results{
    width: 100%;
    height:auto;
    background-color: #fff;
}
#pia {
     font-family:'Quicksand', sans-serif;
     font-size:16px;
     color: #5c7eb4;
     text-align: center;
    

}
          
        nav{
            background-color:#FFF;
            border: 0px;
            height: 40px;
            } 
            nav  ul li p{
                color: #333;
                margin-top: -17px;

            }
            nav button{
                margin-top: -4px;
            }
    </style>
  
      
        

   


   
</head>
<body onscroll="navi()" >
   
    
        

            <div class="main-trade">
                <nav id="navig">
             <ul>
                 <li><p>Drop90</p></li>
                 <li><P></P></li>
                 <li>
                    <?php
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
            
                <div id="main-trade-bg"><h3> Meet And  Collaborate With Traders Across The World</h3></div>
            </div>

            <div id="trade-panel">
                <div class="panel1"><a href="bussiness.php"><p>My Bussiness</p></a></div><br>
                <div class="panel2"><P>State New Demand</P></div><br>
                <div class="panel3"><a href="add-bussiness.php"><p>Introduce Bussiness</p></a></div>
                <br>
            </div>


            <div id="find">
                <div id="tri"></div>
                <br><br><br>

                <div id="find-form">
             <input type="text" id="intext" name="find" placeholder="Find traders and Bussiness" >
                    <button id="btn">Find</button>
               

                </div><br>

               

            </div>
             <div id="results">
                 
                 <br>
                 <br>
             </div>

               
            

          
            <div id="state-main">
                <br>
                    <div id="state-form">
                        <p>State New Demand</p>
                        <form action="includes/demand.inc.php" method="POST">
                 <input type="text" name="email" placeholder="Email">
     <textarea name="need" placeholder="Tell us about your new demand of a product 
                         or service "></textarea>
     <textarea name="xp" placeholder="Any other descption (optional)"></textarea>
                         <button type="submit" name="submit">Submit</button>
                     </form>

                    </div>
                    <div id="state-icon"></div>
                
            </div>


            <div id="introduce-main"><br><br>
                <div id="introduce-box">
                <h2>Introduce Your Business Here</h2>

                <form action="includes/bussiness.submit.php" method="POST">
             <input type="text" name="bname" placeholder="Business Name">
             <input type="text" name="service" placeholder="Products or Services">
             <input type="text" name="location" placeholder="Business location or Work area">
             <input type="text" name="email" placeholder="email">
             <button type="submit" name="submit">Save</button>
                </form>
            </div>
            </div>

























            <script type="text/javascript">
                function navi() {

    document.getElementById("trade-panel").style.opacity="1";
    document.getElementById("trade-panel").style.transform="scale(1.0)";
     document.getElementById("trade-panel").style.transition="all 2s";

      document.getElementById("navig").style.position="fixed";
       document.getElementById("navig").style.background="#fff";
        document.getElementById("navig").style.opacity="1";

        document.getElementById("navig").style.transition="all 8s";
     document.getElementById("main-trade-bg").style.height="560px";

     document.getElementById("state-icon").style.transform="scale(1.0)";
     document.getElementById("state-icon").style.transition="all 5s";







                }
             
               

         function line(){
    
    document.getElementById("inline").style.height="200px";
     //document.getElementById("inline").style.border="#5c7eb4";
    //document.getElementById("inline").style.transition= "all 2s";
    //document.getElementsById("hidden-menu").style.background= "red";
    // document.getElementsByClassName("top-banner").style.width="300px";
 }
                
            </script>




         