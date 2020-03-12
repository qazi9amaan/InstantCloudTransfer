<?php
 session_start();
  require_once('connection.php');



function getFilename($broadcastchannel ,$roomnumber)
{
  $conn = mysqli_connect('localhost', 'root', '','instantsharing');
 $sql = "SELECT filename FROM storage WHERE broadcastchannel= '$broadcastchannel' and roomnumber = '$roomnumber'";
 
 $filename =  null;
    $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) == 0) { 
              
               }
          else{
            $row = mysqli_fetch_assoc($result);
            $filename=$row["filename"];
           
            
          }
          return $filename ;
}


function delete_file($broadcastchannel ,$roomnumber)
{

  $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "DELETE FROM storage  WHERE broadcastchannel= '$broadcastchannel' and roomnumber = '$roomnumber'  and downloadcount >=1";
     if (!mysqli_query($conn, $sql)) {
        echo "deletion error".mysqli_error($conn);
     }
}


function increasedownloadcount($filename,$broadcastchannel ,$roomnumber)
{

  $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "UPDATE storage  SET downloadcount = downloadcount +1 WHERE broadcastchannel= '$broadcastchannel' and roomnumber = '$roomnumber' and filename = '$filename'";
   if (mysqli_query($conn, $sql)) {
 
      delete_file($broadcastchannel ,$roomnumber);
 
  }else{
    echo "updation error".mysqli_error($conn);
  }
}

function getshareablelink($filename,$broadcastchannel ,$roomnumber)
{
      $files = scandir("result");
      for($a=1;$a<count($files);$a++)
      {
          if($files[$a] ===  $filename )
          {           
             $file = ("result/".$filename);
             $url = 'thankyou/'.$file;
            
          }
      }



   
}


function savetodb($filename, $broadcastchannel ,$roomnumber,$sharingmode)
{
  if(isset($_SESSION['status'])){
    $broadcastchannel =  $_SESSION['broadcastchannel'];
  }

  $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "INSERT INTO storage (filename, broadcastchannel,roomnumber,sharingmode)
    VALUES ('$filename', '$broadcastchannel','$roomnumber', '$sharingmode')";

    if (mysqli_query($conn, $sql)) {
      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



// BROADCASTING CONTENT
  if(isset($_POST['broadcast']))
  {
    if(!empty($_POST['broadcastchannel']) && !empty($_POST['roomnumber']))
    {
      if(isset($_FILES['upload'])=== true)
      {
            if(count(array_filter($_FILES['upload']['name']))>1)
            {
               // echo "<pre>". print_r $_FILES['upload'] ."</prev>"; shows content of the file
                // zip instance
                $zip = new ZipArchive();
                $file_name_zip = time().".zip";
                $path_to_save = './result/'.$file_name_zip;
              
                if($zip->open($path_to_save,ZipArchive::CREATE)!==true)
                {
                  echo "filename already exists";
                }
                $files = $_FILES['upload'];
                
                
                for( $i = 0 ; $i < count($files['name']); $i++)
                {
                    $tmp = $files['tmp_name'][$i];
                    $filename = $files['name'][$i];
                    move_uploaded_file($tmp, 'uploads/'.$filename);
                    $zip->addFile('uploads/'.$filename); 
                }
                $zip->close();
                savetodb($file_name_zip ,$_POST['broadcastchannel'],$_POST['roomnumber'],$_POST['sharingmode']);
          }
          else{
                    $files = $_FILES['upload'];
                    $tmp = $files['tmp_name'][0];
                    $filename = $files['name'][0];
                    move_uploaded_file($tmp, 'result/'.$filename);
                    savetodb($filename ,$_POST['broadcastchannel'],$_POST['roomnumber'],$_POST['sharingmode']);
                    getshareablelink($filename ,$_POST['broadcastchannel'],$_POST['roomnumber']);
          }
        }else{
          // error provide username
          echo "sorry no file";
        }
    }else{
            // provide file
            echo "sorry no name";
          }

    echo "done" ;
  }





if(isset($_POST['download'])){

      if(!empty($_POST['downloadbroadcastchannel']) && !empty($_POST['roomnumber']))
    {    

      $filename = getFilename($_POST['downloadbroadcastchannel'],$_POST['roomnumber']);
      
      if(empty($filename))
      {
        header('Location:404');
      }
      $files = scandir("result");
     
      for($a=1;$a<count($files);$a++)
      {
          if($files[$a] ===  $filename )
          {
            
           increasedownloadcount($filename,$_POST['downloadbroadcastchannel'],$_POST['roomnumber']);     
           
           $file = ("result/$filename");
           $filetype=filetype($file);
           $filename=basename($file);
           header ("Content-Type: ".$filetype);
           header ("Content-Length: ".filesize($file));
           header ("Content-Disposition: attachment; filename=".$filename);
           readfile($file);


           
          }
      }
   }
 }



if(isset($_POST['delete'])){
   if(!empty($_POST['broadcastchannel']) && !empty($_POST['roomnumber']))
    {
        delete_file($_POST['broadcastname'] ,$_POST['roomnumber']);
    }

}





// if(@$_GET[]  )
?>