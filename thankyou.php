<?php

function deletetheurl($id)
{
  $conn = mysqli_connect('localhost', 'root', '','urlshortner');
  $sql = "DELETE FROM urlhandler  WHERE shortkey= '$id'";
 
  if (!mysqli_query($conn, $sql)) {
    header('Location:404');
  }

}
function delete_file($bid ,$filename)
{
  $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "DELETE FROM storage  WHERE bid= '$bid' and sharingmode = 'single'";
 
     if (mysqli_query($conn, $sql)) {
       //deleting tinyurl
   
     }
     else{
      header('Location:404');
     }
}

function increasedownloadcount($bid)
{

  $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "UPDATE storage  SET downloadcount = downloadcount +1 WHERE bid= '$bid'";
   if (mysqli_query($conn, $sql)) {
 
      delete_file($bid ,$filename,$id);
 
  }else{
    echo "updation error".mysqli_error($conn);
  }
}

function getFilename($bid)
{
  $conn = mysqli_connect('localhost', 'root', '','instantsharing');
  $sql = "SELECT filename FROM storage WHERE bid= '$bid'";
 
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

  if(isset($_POST['download_link'])){
     
    if(!empty($_POST['bid']))
    { 
      $conn = mysqli_connect('localhost', 'root', '','instantsharing');
      $filename = getFilename($_POST['bid']);
      $files = scandir("result");
   
      for($a=1;$a<count($files);$a++)
      {
          if($files[$a] ===  $filename )
          {
            
          increasedownloadcount($_POST['bid']);     
          deletetheurl($_POST['id']);
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
  

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

     <link href="css/ct-navbar.css" rel="stylesheet" /> 
     
    


    <title>Kirangle|Url Shortner</title>
  </head>
  <style>
html { font-family: Saira Extra Condense;
  font-size: 1rem; }

@media (min-width: 576px) {
    html { font-size: 1.2rem; }
}
@media (min-width: 768px) {
    html { font-size: 1.3rem; }
}
@media (min-width: 992px) {
    html { font-size: 1.5rem; }
}
@media (min-width: 1200px) {
    html { font-size: 2rem; }
}


.fa:hover{
  transform: scale(1.5);
  font-size: 60px;
}
.fa{
 
 transition: transform .2s; 
  color: #333;
}
.lead{
  font-size: 32px;
}
a{
  text-decoration: none;
  color: #333;
}
a:hover{
  text-decoration: none;
  color: #333;


}
header
{
 height: 100vh;

 /* flex-box thing */
 display: flex;
 flex-direction: column;
 align-items: center;
 justify-content: center;
 background-size: cover; 
 margin-bottom: 30px;
}

*{
  font-family: 
}

#start{background :#333;
color:#fff;
height: 100%}


body,html {
  width: 100%;
  height: 100%;
  background: #333; 
}
.tile {
  height: 100%;
  width: 100%;
  position: relative;
  background-color: #ffc300;
}
#a {
  background-color: #333;
}

round-button {
  width: 25%;
}

.round-button-circle {
  width: 100%;
  height: 0;
  padding-bottom: 100%;
  border-radius: 50%;
  border: 10px solid #98a1a4;
  overflow: hidden;
}

.round-button-circle {
  width: 100%;
  height: 0;
  padding-bottom: 100%;
  border-radius: 50%;
  border: 10px solid #98a1a4;
  overflow: hidden;
  background: transparent;
  box-shadow: 0 0 3px gray;
}

.round-button-circle:hover {
  background: #30588e;
}

.round-button a {
  display: block;
  float: left;
  width: 100%;
  padding-top: 50%;
  padding-bottom: 50%;
  line-height: 1em;
  margin-top: -0.5em;
  text-align: center;
  color: #e2eaf3;
  font-family: Verdana;
  font-size: 1.2em;
  font-weight: bold;
  text-decoration: none;
}

 input {
  background: #333;
  color: #ffc300;
    width: 25rem;
    border: 1px solid #ffc300;
    padding: 12px;
}
#a h1{
  color: #ffc300;
    
}

.display-4{
  font-weight: 100;
  font-size: 3.9rem;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}


.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
 input[type=submit]:hover{
  background: #ffc300;
  color: #333;

}


    .modal-header {
      border-bottom: none;
    }

.modal-footer {   
    border-top: none;
}
.modal{
  color : #ffc300;
}
.modal-content{
  background: #333;
}
.yellow:hover{
  width: 25%;
  background: #ffc300;
  border-color: #ffc300;
}
.yellow{
  width: 25%;
  background: #333;
  color: #ffc300;

}
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

#info:hover{
  
  cursor: pointer;
}

.lead{
    color:#ffc300;
}

.yellow{
  background: #ffc300;
  color: #333;
}
.yellow:hover{
  background: #333;
  color: #ffc300;
}
  </style>
  <body>

   

  


<div class='tile' id='a'>
<br><br>
<div class="align-middle  ">
  <div class="text-center">
    <h1 center class = "display-2"> Thankyou! </h1>
      <h1 style = "text-align: center"class = "display-5"> Your download link is ready! </h1>
      <p style = "text-align: center"class="lead">We hope that you loved your services, see you soon!</p>
      <form action="/test2/thankyou.php" method="POST">
      <input hidden type="text" name ='bid' value=" <?php echo $_GET['bid']; ?>">
      <input hidden type="text" name ='id' value=" <?php echo $_GET['id']; ?>">
      <input type="submit" class="btn btn-default yellow" name = "download_link" value="Download">
      </form>
  </div>
</div>
 
</div>

   





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js/main.js"></script>
      
      <script>
       
        
</script>


 
  </body>
</html>