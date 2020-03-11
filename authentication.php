<? php


	    require_once('connection.php');
	
		session_start();
		 if(isset($_POST['hello']))
	    {
	    	$_SESSION['status']=1;
	    	echo 'ok';
	    	 header("location:account.php");

	    }

	    if(isset($_POST['login']))
	    {
	    	_SESSION['status']='active';
	       if(empty($_POST['broadcastchannel']) || empty($_POST['authcode']))
	       {
	            header("location:index.php?Empty= Please Fill in the Blanks");
	       }
	       else
	       {
	            $query="select * from employee where channel='".$_POST['broadcastchannel']."' and authcode='".$_POST['authcode']."'";
	            $result=mysqli_query($conn,$query);

	            if(mysqli_fetch_assoc($result))
	            {
	                $_SESSION['broadcastchannel']=$_POST['broadcastchannel'];
	                $_SESSION['status']='active';
	                header("location:account.php");
	            }
	            else
	            {
	                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
	            }
	       }
	    }
	    

	    if(isset($_POST['create_account']))
	    {
	       if(empty($_POST['broadcastchannel']) || empty($_POST['authcode']))
	       {
	            header("location:index.php?Empty= Please Fill in the Blanks");
	       }
	       else
	       {
	            

	            if()
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