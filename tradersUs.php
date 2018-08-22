
 

<?php
include_once 'includes/dbh.inc.php';



     if (isset($_POST['tradersUs'])) {

               $name= mysqli_real_escape_string($conn,$_POST['tradersUs']);



  $sql= "SELECT * FROM bussiness WHERE bussiness_name LIKE '%$name%' OR 
     bussiness_owner LIKE '%$name%'";
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

<form action='guest-bussiness.php' method='POST'>
<input id='info' type='text' name='bussinessName' value='".$BusinessName."' />
                  <div id='bussiness-down'>

                  <p>". $BusinessName ." 

                  <button type='submit' name='submit'>view</button></p>

                  </div>

                
                  <div id='bussiness-down'><p>From:". $BusinessOwner."</p></div>

                  <input id='info' type='text' name='bussinessOwner' value='".$BusinessOwner."' />
   </form>   
   


                  <div id='bussiness-down'><p>Bussiness:". $BusinessService."</p></div>

<form action='includes/follow.php' method='POST'> 
                 <input type='text' name='bussiness' value='".$BusinessName."' />
    <div id='bussiness-down'><p>Followers:<b>". $BusinessFollowers."</b><button type='submit' name='submit'>follow</button></p>
</form>

    </div>

                    </div>
                    
                  </div>



                  ";
                  echo "
                 <br><br><br><br> ";

              }



    
    }
}
    else{
      echo "no results found";
    }