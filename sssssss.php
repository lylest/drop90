<?php
if (isset($_POST['results'])) {
	$name= $_POST['results'];


}


include_once 'includes/dbh.inc.php';
$sql = "SELECT * FROM products  WHERE product_name LIKE '%$name%';";
   $result= mysqli_query($conn,$sql);
   $resultsCheck= mysqli_num_rows($result);
   if ($resultsCheck > 0) {
   	while ($row = mysqli_fetch_assoc($result)) {
   		 echo $row['product_name'];
   		
   	}
   	
   }

   ?>