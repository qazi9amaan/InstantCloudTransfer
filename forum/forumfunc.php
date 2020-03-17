<?php
		
	$conn = mysqli_connect('localhost', 'root', '' ,'instantsharing');

 if(isset($_GET["deleteforum"]) && isset($_GET["forum"])){
		$user = $_GET['forum'];
		$id = $_GET['id'];
		$sql = "DELETE FROM forumowner WHERE id= '$id';";
			$sql .= "DELETE FROM forumposts WHERE   forumname= '$user';";
			if (mysqli_multi_query($conn, $sql)) {
				
				  header('Location:forum-main.php');}
 	};

		function presentindb($forumname,$conn){
			//if present in users show taken
			
			  $sql = "SELECT forumname FROM forumowner WHERE forumname = '$forumname'";
				 $result = mysqli_query($conn, $sql);
				   if (mysqli_num_rows($result) == 0) { 
					 return false;
					}else{
					  header('Location:../404'); 
					  return true;
					}     
			  }


		function create_account($forumname,$forumowner,$forumtopic,$forumdesc,$sharingmode,$conn)
		{
			$sql = "INSERT INTO forumowner (forumname,owner,forumtopic,forumdesc,sharingmode)
			  VALUES ('$forumname', '$forumowner','$forumtopic', '$forumdesc','$sharingmode')";
		  
			  if (mysqli_query($conn, $sql)) {
				return true;
			  } else {
				  return false;
				//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			  }

		}

		 session_start();
		if(isset($_POST['create_forum']))
	    {
	      
			   
				   $forumname = $_POST['newforumname'];
				   $forumowner = $_SESSION['broadcastchannel'];
				   $forumtopic = $_POST['forumtopic'];
				   $forumdesc = $_POST['forumdesc'];
				   $sharingmode = 'public';
				   echo $forumname;
				   
				   if(presentindb($forumname,$conn))
				   {
					   exit();
				   }
	            if(create_account($forumname,$forumowner,$forumtopic,$forumdesc,$sharingmode,$conn))
	            {
	                // header("location:account.php");
	               header('Location:forum-main.php');	
	            }
	            else
	            {
	                header("location:index.php?Invalid= ");
	            }
	       
	    }
	  







		if(isset($_POST["checkforumname"]) && isset($_POST["forumname"])){

			$forumname = $_POST['forumname'];
			$sql = "SELECT forumname FROM forumowner WHERE forumname= '$forumname'";
	   		if($result = mysqli_query($conn, $sql)){

	         	if(mysqli_num_rows($result) > 0){ 

		         		echo '<span style="color:#A63232"> This forum name has been aready taken!</span> 
		         		<script>   $("#createbtn").attr("value","Not available!"); 
						$("#createbtn").prop("disabled", true);; 
		         		</script>';
		         }else{
			         	echo '<script>   $("#createbtn").attr("value","Ready to go!"); 
							$("#createbtn").prop("disabled", false);; 
			         	</script>';
	        		 }		               
 			}
 		};





if(isset($_POST['deletepost'])){
    $sql = "DELETE FROM forumposts WHERE id = '".$_POST["id"]."'";  
    if(mysqli_query($conn, $sql))  
    {  
        echo 'Data Deleted';  
    }  
 };



 if(isset($_POST['editpost'])){
 	$val = $_POST['value'];
    $sql = "UPDATE forumposts SET description = '".$val."' WHERE id = '".$_POST["id"]."'";  
    if(mysqli_query($conn, $sql))  
    {  
        echo 'Data Updated';  
    }  
 }




 if(isset($_POST['updatethought'])){
 	
 	$val = $_POST['value'];
    $sql = "UPDATE forumowner SET thought = '".$val."' WHERE id = '".$_POST["forum_id"]."'";  
    if(mysqli_query($conn, $sql))  
    {  
        echo 'Data Updated';  
    }  
 }








 ?>