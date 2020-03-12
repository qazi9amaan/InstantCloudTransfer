<?php
    if(isset($_POST['Home']))
    {
        header('Location:shortner');
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
      <link href="css/main2.css" rel="stylesheet" /> 
    
    


    <title>Kirangle|Url Shortner</title>
  </head>
  <style>
.fa:hover{
  transform: scale(1.5);
  font-size: 60px;
}
.fa{
 
 transition: transform .2s; 
  color: #333;
}

.lead{
    color:#ffc300;
}
  </style>
  <body>

   

  


<div class='tile' id='a'>

  <header>
      <h1 class = "display-3"> 404 </h1>
      <h1 class = "display-5"> Page not found </h1>
      <p class="lead">We are sorry, the page you requested coud not be found.Please go back to the homepage.</p>
      <form action="404.php" method="post">
      <input type="submit" style="margin-top: 12px;" name = "Home" class = "create" value="Home">
      </form>  
    </header>
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