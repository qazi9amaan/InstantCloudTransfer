<?php 	
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db ="urlshortner";
	$siteurl = 'localhost/test2';
	$conn1 = mysqli_connect($servername, $username, $password,$db);
	if (!$conn1) {
    die("Connection failed: " . mysqli_connect_error());
}
	


			
	function getRandomword($length = 6) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
    	return $randomString;
	}

	function israndomindb($value ,$conn1)
	{
		$sql = "SELECT id FROM urlhandler WHERE shortkey =".$value;
		$result = mysqli_query($conn, $sql);
			if (!$result|| mysqli_num_rows($result) == 0) {
			   return 1;
			}
		return 0;
	}

	function shortentheurl($word,$url,$conn1){
		if (substr($url, 0, 4) != "http") {
      		$url = "http://".$url;
    	} 
		$sql = "INSERT INTO urlhandler (shortkey, redirectto)
		VALUES ('$word', '$url')";

		if (mysqli_query($conn1, $sql)) {
			echo 'done';
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn1);
		}
	}
 
	function showtoast($word){
		header('Location:shortner?m='.$word);
	}
 
	if(isset($_POST['create']))
  	{
    	if(empty($_POST['requested']))
    	{
    		//error handling
    		$error = "Please provide an input";
    		showtoast($error);
    	}else{
    		$word = getRandomword(6);
    		$url = $_POST['requested'];
    		while(!israndomindb($word,$conn1))
    		{
    			$word = getRandomword(6);
    		}
			shortentheurl($word,$url,$conn1);
			$msg = $siteurl."/".$word;
		    showtoast($msg);
    		
    	}
	}
	//under construction
	
	




 ?>