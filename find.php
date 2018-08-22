<?php
if (isset($_POSt['submit'])) {
	include_once 'dbh.inc.php';
	$find= mysqli_real_escape_string($conn,$_POST['find']);

	if (empty($find)) {
		header("Location:../traders.php?empty!")
	}
	else{
		$sql= "SELECT * FROM bussiness WHERE bussiness_owner LIKE %'$find'% OR bussiness_name LIKE %'$find'%;";
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

	}

} else{
	echo "<p>no result(s) found</p>";
}