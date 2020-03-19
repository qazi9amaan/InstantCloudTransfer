<?php

 include('connection.php');


if(isset($_POST['getnumbers']))
{

	$n=range(2,99);
	shuffle($n);
	for ($x=0; $x< 4; $x++)
	{


		echo '

			<button id = "authbutton"  type="button" style="width: 60px; height: 60px;" class="btn btn-outline-secondary  rounded-circle  btn-xl  mr-2" data-numbers="'.$n[$x].'"><span style="font-size: 22px;">'.$n[$x].'</span></button>
		';

	}
	

}


if(isset($_POST['checkroomnumber'])){
    $channel = $_POST['roomnumber'];
    
    $sql = "SELECT roomnumber FROM textmessages WHERE roomnumber= '$channel'";
      if($result = mysqli_query($conn, $sql)){
           if(mysqli_num_rows($result) > 0){                
          echo '
              Sorry this room is not available!
              <script>   $("#sendmessage").prop("disabled", true) ;
              	$("sendmessage").attr("value", "Sorry this room is not available!") 
              </script>
          ';
                      


          }else{
             echo '
              Success! room is  available!
              <script>   $("sendmessage").prop("disabled", false) ;
              	$("sendmessage").attr("value", "Send message") 
              </script>
          ';
          }
      }
  };



  if(isset($_POST['recievemessage'])){
    $room = $_POST['room'];
      $auth = $_POST['auth'];
    
    $sql = "SELECT * FROM textmessages WHERE roomnumber = '$room' and auth = '$auth'";
      if($result = mysqli_query($conn, $sql)){
           if(mysqli_num_rows($result) > 0){  
           		 while($row = mysqli_fetch_array($result)){


          echo '
               <div class="input-group">
                      <textarea   required type="text" id = "recievedmessage" class="form-control" placeholder = "Whats the message? " aria-label="Text input with dropdown button">'.$row['message'].'</textarea>

                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" id = "deletemessage" data-id = "'.$row['id'].'" type="button" aria-haspopup="true" aria-expanded="false">Deletemessage</button>
                        </div>
                        
                    </div>
          ';
                      

          	}
          }else{
             echo '
              
              <script>  alert("Incorrect auth!");
              window.location.href = "textsharing.php";
              </script>

          ';
          }
      }
  };



if(isset($_POST['uploadmsg'])){
    $room = $_POST['room'];
     $auth = $_POST['auth'];
      $msg = $_POST['msg'];
    
   $sql = "INSERT INTO textmessages (roomnumber,auth,message)
    VALUES ('$room', '$auth','$msg');";

    if (mysqli_query($conn, $sql)) {
      echo 'Successfull!';
      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


  };


  if(isset($_POST['deletemessage'])){
    $id = $_POST['id'];
    ;
    
   $sql = "DELETE FROM textmessages WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
      echo '
      <script>  alert("Successfull!");
              window.location.href = "textsharing.php";
              </script>
      ';
      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


  };



?>