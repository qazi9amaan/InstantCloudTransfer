<? php
	
		 $dbhost = "localhost";
		 $dbuser = "root";
		 $dbpass = "";
		 $db = "cloudshare";
		 $con = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

			// Check connection
			if (!$con) {
			    die("Connection failed: " . mysqli_connect_error());
			}
		
?>
