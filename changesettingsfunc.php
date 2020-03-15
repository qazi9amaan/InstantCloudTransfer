<?php
		session_start();
	$conn = mysqli_connect('localhost', 'root', '' ,'instantsharing');


		if(isset($_GET["deleteaccount"])&&isset($_GET["user"])){
		$user = $_GET['user'];
		$sql = "DELETE FROM users WHERE channelname= '$user';";
			$sql .= "DELETE FROM storage WHERE   broadcastchannel= '$user';";
			if (mysqli_multi_query($conn, $sql)) {
				 session_destroy();
				  header('Location:home');}
 	};



 		if(isset($_POST["checkpassword"]) && isset($_POST["channel"]) &&isset($_POST["auth"])){
		$channel = $_POST['channel'];
		$auth = $_POST['auth'];


		$sql = "UPDATE users SET auth='$auth' WHERE channelname= '$channel';";
	    if($result = mysqli_query($conn, $sql)){
	    	echo "Successfully! Changed";
	         }else{
	        		echo 'There was a problem sorry!
                      ';
	        }
	    
 		};





	if(isset($_POST['channelname'])){
		$channel = $_POST['channelname'];
		$previous = $_POST['previousname'];
		$sql = "SELECT channelname FROM users WHERE channelname= '$channel'";
	    if($result = mysqli_query($conn, $sql)){
	         if(mysqli_num_rows($result) > 0){                
					echo '<button disabled id = "renamemychannelbtn"  class="btn btn-outline-secondary dropdown-toggle" type="submit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sorry not available</button>
                        <div class="dropdown-menu">
                          <a  class="dropdown-item" name = "rename" id ="changemyname" href = "#">Change my name</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="home">Exit</a>
                        </div>';
                      


	        }else{
	        		echo '<button id = "renamemychannelbtn"  class="btn btn-outline-secondary dropdown-toggle" type="submit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choose an action</button>
                        <div class="dropdown-menu">
                          <a  class="dropdown-item" name = "rename" id ="changemyname" href = "changesettingsfunc.php?changename=true&newname='.$channel.'&previous='.$previous.'">Change my name</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="home">Exit</a>
                        </div>';
	        }
	    }
 	};

	
 	if(isset($_GET['changename'])){
 		if($_GET['changename']==true){
			$new = $_GET['newname'];
			$previous = $_GET['previous'];
			$sql = "UPDATE users SET channelname='$new' WHERE channelname= '$previous';";
			$sql .= "UPDATE storage SET broadcastchannel='$new' WHERE broadcastchannel= '$previous';";
			if (mysqli_multi_query($conn, $sql)) {
				 $_SESSION['broadcastchannel']=$new;
				  header('Location:home');
		}else
		{
			header('Location:404');
		}
	}
 	};


// validating password
 	


?>