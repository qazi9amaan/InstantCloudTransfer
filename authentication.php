<?php

		session_start();

		if(isset($_POST['login']))
	    {
			//$_SESSION['status']='active';
			$conn = mysqli_connect('localhost', 'root', '','instantsharing');
	       if(empty($_POST['broadcastchannel']) || empty($_POST['authcode']))
	       {
	            header("location:404");
	       }
	       else
	       {	$channelname = $_POST['broadcastchannel'];
				$auth = $_POST['authcode'];
	            $query="select * from users where channelname= '$channelname' and auth='$auth'";
	            $result=mysqli_query($conn,$query);

	            if(mysqli_fetch_assoc($result))
	            {
	                $_SESSION['broadcastchannel']=$_POST['broadcastchannel'];
	                $_SESSION['status']='active';
	                header("location:account.php");
	            }
	            else
	            {
	                header("location:404");
	            }
	       }
	    }
		
		function presentindb($channel){
			//if present in users show taken
			
			  $conn = mysqli_connect('localhost', 'root', '','instantsharing');
			  $sql = "SELECT * FROM users WHERE channelname = '$channel'";
				 $result = mysqli_query($conn, $sql);
				   if (mysqli_num_rows($result) == 0) { 
					 return false;
					}else{
					  header('Location:404'); 
					  return true;
					}     
			
		  }

		function create_account($channelname,$auth)
		{
			
			$conn = mysqli_connect('localhost', 'root', '','instantsharing');
			$sql = "INSERT INTO users (channelname,auth)
			  VALUES ('$channelname', '$auth')";
		  
			  if (mysqli_query($conn, $sql)) {
				return true;
			  } else {
				  return false;
				//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			  }

		}

	    if(isset($_POST['create_account']))
	    {
	       if(empty($_POST['broadcastchannel']) || empty($_POST['authcode']))
	       {
	            header("location:home");
	       }
	       else
	       {	
			   
				   $channelname = $_POST['broadcastchannel'];
				   $auth = $_POST['authcode'];
				   if(presentindb($channelname))
				   {
					   exit();
				   }
	            if(create_account($channelname,$auth))
	            {
	                $_SESSION['broadcastchannel']=$_POST['broadcastchannel'];
	                $_SESSION['status']='active';
	                
	                header("location:account.php");
	            }
	            else
	            {
	                header("location:index.php?Invalid= ");
	            }
	       }
	    }
	  


	   

?>