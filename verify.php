<?php
include_once 'includes/dbh.inc.php';
if (!empty($verify)) {
	
}

if (isset($_POST['verify'])) {

	$value = mysqli_real_escape_string($conn,$_POST['verify']);
	if (!empty($value)) {
		
		$sql="SELECT * FROM users WHERE user_first LIKE '%$value%';";
	$results= mysqli_query($conn,$sql);
	$resultsCheck = mysqli_num_rows($results);
	
	if ($resultsCheck > 0) {
		echo "<p>taken names</P>";
		while ($row = mysqli_fetch_assoc($results)) {
			$FIRST = $row['user_first'];
			$LAST = $row['user_last'];
			echo "<br>";
			echo "<p>".$FIRST."&emsp;".$LAST."</p>";

		}
		
	}

	}


	


	
}


//$arrayName = array('$FIRST');


/*
foreach ($FIRST as $FIRSTs ) {
				if (strpos($FIRST, $value) !== false) {
					echo "taken";

					
				}
				
			}
			*/