<?php
 session_start();
 include('connection.php');
  include('shortnerhelper.php');
  $siteurl = 'localhost/test2';


 

if(isset($_POST['checkchannelname'])){


    $channel = $_POST['channelname'];
    
    $sql = "SELECT channelname FROM users WHERE channelname= '$channel'";
      if($result = mysqli_query($conn, $sql)){
           if(mysqli_num_rows($result) > 0){                
        
echo "
              
                $('#broadcastnowbtnn').prop('disabled', true);
             

          ";   

          }else{
             echo "
              
                $('#broadcastnowbtnn').prop('disabled', false);
             

          ";   
          }
      }
  };









function getFilename($broadcastchannel ,$roomnumber,$conn)
{
  // $conn = mysqli_connect('localhost', 'root', '','instantsharing');
 $sql = "SELECT filename FROM storage WHERE broadcastchannel= '$broadcastchannel' and roomnumber = '$roomnumber'";
 
 $filename =  null;
    $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) == 0) { 
        header('Location:404');
               }
          else{
            $row = mysqli_fetch_assoc($result);
            $filename=$row["filename"];
           
            
          }
          return $filename ;
}


function delete_file($broadcastchannel ,$roomnumber,$conn)
{

  
    // $conn = mysqli_connect('localhost', 'root', '','instantsharing');
    $sql = "DELETE FROM storage  WHERE broadcastchannel= '$broadcastchannel' and roomnumber = '$roomnumber' and  sharingmode = 'single' ";
      if (!mysqli_query($conn, $sql)) {
          echo "deletion error".mysqli_error($conn);
      }
  
}


function increasedownloadcount($filename,$broadcastchannel ,$roomnumber,$conn)
{

  // $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "UPDATE storage  SET downloadcount = downloadcount +1 WHERE broadcastchannel= '$broadcastchannel' and roomnumber = '$roomnumber' and filename = '$filename'";
   if (mysqli_query($conn, $sql)) {

  
      delete_file($broadcastchannel ,$roomnumber,$conn);
 
  }else{
    echo "updation error".mysqli_error($conn);
  }
}

// function getshareablelink($filename,$broadcastchannel ,$roomnumber,$siteurl)
// {
//   $conn = mysqli_connect('localhost', 'root', '','urlshortner');
//       $files = scandir("result");
//       for($a=1;$a<count($files);$a++)
//       {
//           if($files[$a] ===  $filename )
//           {           
//              $file = ("result/".$filename);
//              //urll
//              $url = 'localhost/test2/thankyou/'.$file;

//              $word = getRandomword(6);
        
//               while(!israndomindb($word,$conn))
//               {
//                 $word = getRandomword(6);
//               }
//               shortentheurl($word,$url,$conn);
              
//               $msg = $siteurl."/".$word;
//               header('Location:broadcast?m='.$msg) ;    
//           }
//       }
// }

function uploadlinktodb($broadcastchannel ,$roomnumber,$msg,$conn)
{
  // $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "UPDATE storage  SET url = '$msg' WHERE broadcastchannel= '$broadcastchannel' and roomnumber = '$roomnumber'";
   if (mysqli_query($conn, $sql)) {
 
  }else{
    echo "updation error".mysqli_error($conn);
  }
}

function getshareablelink($filename,$broadcastchannel ,$roomnumber,$siteurl,$conn)
{
     

     $shortencon = mysqli_connect('localhost', 'root', '','urlshortner');




     $sql = "SELECT * FROM storage WHERE broadcastchannel= '$broadcastchannel' and roomnumber = '$roomnumber' and filename = '$filename'";
  
        $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) == 0) { 
                  echo "sorry";
                   }
              else{
                $row = mysqli_fetch_assoc($result);
                $broadcastid=$row['bid'];
                echo $broadcastid;
                $url = 'localhost/test2/thankyou/'.$broadcastid;

                
                $word = getRandomword(6);
                while(!israndomindb($word,$shortencon))
                {
                  $word = getRandomword(6);
                }

                $url = 'localhost/test2/thankyou/'.$broadcastid.'/'.$word;
                shortentheurl($word,$url,$shortencon);
                $msg = $siteurl."/".$word;
                uploadlinktodb($broadcastchannel ,$roomnumber,$msg,$conn);
                header('Location:broadcast?m='.$msg);
              }
              
}




function savetodb($filename, $broadcastchannel ,$roomnumber,$sharingmode,$conn)
{
  if(isset($_SESSION['status'])){
    $broadcastchannel =  $_SESSION['broadcastchannel'];
  }
  $dt=date("Y-m-d H:i:s");
  // $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "INSERT INTO storage (filename, broadcastchannel,roomnumber,sharingmode,uploaddate)
    VALUES ('$filename', '$broadcastchannel','$roomnumber', '$sharingmode','$dt')";

    if (mysqli_query($conn, $sql)) {
      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function isregistered($channel,$conn)
{
  // $conn = mysqli_connect('localhost', 'root', '' ,'instantsharing');
    $sql = "SELECT * FROM users WHERE channelname= '$channel' ";
       $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) == 0) { 
           return false;
          }else{
            return true;
          }     
}

function presentindb($channel,$room,$conn){
  //if present in users show taken
    
    // $conn = mysqli_connect('localhost', 'root', '','instantsharing');
    $sql = "SELECT * FROM storage WHERE broadcastchannel= '$channel' and roomnumber = '$room'";
       $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) == 0) { 
           return false;
          }else{
            header('Location:404'); 
            return true;
          }     
  
}

// BROADCASTING CONTENT
  if(isset($_POST['broadcast']))
  { 
    $broadcastchannel =  $_POST['broadcastchannel'];
    
    if(isset($_SESSION['status'])){
      $broadcastchannel =  $_SESSION['broadcastchannel'];
    }

    if(!empty($broadcastchannel) && !empty($_POST['roomnumber']))
    {

      if(!isset($_SESSION['status']) && isregistered($broadcastchannel,$conn))
      {
        header('Location:login');
        exit();
      }

      //check if the same name is present in db
      if(presentindb($broadcastchannel,$_POST['roomnumber'],$conn))
      {
          exit();
      }
      
      
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
                savetodb($file_name_zip ,$broadcastchannel,$_POST['roomnumber'],$_POST['sharingmode'],$conn);
                getshareablelink($file_name_zip ,$broadcastchannel,$_POST['roomnumber'],$siteurl,$conn);
          }
          else{
                    $files = $_FILES['upload'];
                    $tmp = $files['tmp_name'][0];
                    $filename = $files['name'][0];
                    move_uploaded_file($tmp, 'result/'.$filename);
                    savetodb($filename ,$broadcastchannel,$_POST['roomnumber'],$_POST['sharingmode'],$conn);
                    getshareablelink($filename ,$broadcastchannel,$_POST['roomnumber'],$siteurl,$conn);
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






// UPLOADING TO FORUM









if(isset($_POST['download'])){

      if(!empty($_POST['downloadbroadcastchannel']) && !empty($_POST['roomnumber']))
    {    

      $filename = getFilename($_POST['downloadbroadcastchannel'],$_POST['roomnumber'],$conn);
      
      if(empty($filename))
      {
        header('Location:404');
      }
      $files = scandir("result");
     
      for($a=1;$a<count($files);$a++)
      {
          if($files[$a] ===  $filename )
          {
            
           increasedownloadcount($filename,$_POST['downloadbroadcastchannel'],$_POST['roomnumber'],$conn);     
           
           $file = ("result/$filename");
           $filetype=filetype($file);
             $_SESSION['downloadavailable']=1;
          
              $filename=basename($file);
              sleep(2);
              header('Location:ty.php?file='.$filename);
          //  header ("Content-Type: application/octet-stream");
          //  header ("Content-Length: ".filesize($file));
          //  header ("Content-Disposition: attachment; filename=".$filename);
          //    header('Pragma: public');
          // flush();
          //   readfile($file);
          //   die();
           
           
               



           
          }
      }
   }
 }


function delete_file_multiple( $broadcastchannel,$roomnumber,$conn){
  // $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "DELETE FROM storage  WHERE broadcastchannel= '$broadcastchannel' and roomnumber = '$roomnumber' ";
    if (!mysqli_query($conn, $sql)) {
        echo "deletion error".mysqli_error($conn);
    }

}

if(isset($_POST['delete'])){
   if(!empty($_POST['broadcastchannel']) && !empty($_POST['roomnumber']))
    {
        delete_file_multiple($_POST['broadcastname'] ,$_POST['roomnumber']);
    }

}





// if(@$_GET[]  )
?>