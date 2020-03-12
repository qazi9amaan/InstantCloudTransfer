<?php  

  session_start();



  $conn = mysqli_connect('localhost', 'root', '','urlshortner');
  if(!$conn)
  {
    header('Location:404.php');
  }
  if(isset($_GET['title']))
  {
    if(!empty($_GET['title'])){
          $url = $_GET['title'];
          $sql = "SELECT * FROM urlhandler WHERE shortkey = '$url' ";
          $result = mysqli_query($conn, $sql);
          if (!$result|| mysqli_num_rows($result) == 0) {
              header('Location:404');
          }
          else{
            $row = mysqli_fetch_assoc($result);
            $redirectto=$row["redirectto"];
            header('Location:'.$redirectto);
          }

    }
    
  }
?>


<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
   <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

     <link href="css/ct-navbar.css" rel="stylesheet" /> 
      <link href="css/main.css" rel="stylesheet" /> 
     <link href="css/ct-navbar.css" rel="stylesheet" />  
    <title>Kirangle | Shortner</title>
  </head>

  <style>
     body{
        background: #373737
      }


.navbar-ct-black{
  background: #333;
  padding: 0px;
}
.navbar .navbar-brand-logo .brand {
    color: #FFFFFF;
    float: left;
    font-size: 18px;
    font-weight: 400;
    line-height: 20px;
    margin-left: 10px;
    margin-top: 0px;
    width: 60px;
}

.navbar-brand ,.check{
  padding: 2px;
  font-weight: 800;
  font-size: 25px;
  padding-left: 2rem;
}

.navbar-toggler{
  margin-right: .5rem;
}



.form-control {
    background-color: #FFFFFF;
    border: 1px solid #E3E3E3;
    border-radius: 0px; 
    box-shadow: none;
    color: #444444;
    height: 53px;
    padding: 6px 16px; 
}
.mb-14, .my-14 {
    margin-bottom: 5rem!important;
}
.mt-14, .my-14 {
    margin-top:  5rem!important;
}
.mb-14, .my-14 {
    margin-bottom:  5rem!important;
}
.mt-14, .my-14 {
    margin-top:  5rem!important;
}

.display-1 {
    font-size: 5rem;
    text-align: center;
    padding: 12px;
    color: #ffc300;
    font-weight: 400;
}
#formGroupExampleInput{
    background: #333;
  color: #ffc300;
  
       height: 65px;
    border: 1px solid #ffc300;
    
}


#btn{
  background: #ffc300;
  color: #333;
  border-color: #ffc300;  

}
#btn:hover{
  background: #333;
  color: #ffc300;
}

#formGroupExampleInput::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #6c757d ;
  opacity: 1; /* Firefox */
}

#formGroupExampleInput:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color:  #6c757d;
}

#formGroupExampleInput::-ms-input-placeholder { /* Microsoft Edge */
  color:  #6c757d;
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
.lead{
   background: #333;
  color: #ffc300;
  
       height: 65px;
    border: 1px solid #ffc300;
    
}
  </style>
  <body>
    

 <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Shorten url</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: #ffc300;" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <input  style = "width: 100%;" class = "lead" type="text" name="" id="myInput" value="<?php echo (isset($_GET['m']))?$_GET['m']  :'';?>" >
        </div>
        <div class="modal-footer" style="
      margin-top: -27px;
  ">
          <button hidden type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button"  onclick="myFunction()"  id = "copybtn"class="btn btn-primary yellow"> Copy</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Navigation -->
`
    <div id="navbar-full">
    <div id="navbar">
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black   fixed-top">
      <div class="container">
  <a class="navbar-brand check" href="index.php" style="
    font-size: 25px;
    color: #ffc300;
    font-weight: 400;
">KIRANGLE ZONE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
    <span class="navbar-toggler-icon"></span>
  </button>
     

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                    
                    <li class="nav-item ">
                          <a href="broadcast.php" class="nav-link">
                               <i class="pe-7s-cloud-upload"></i>
                                <p>Broadcast</p> 
                          </a>
                      </li> 
                       <li class="nav-item">
                          <a href="download.php" class="nav-link">
                               <i class="pe-7s-cloud-download"></i>
                                <p>Download</p>
                          </a>
                      </li> 
                      <li class="nav-item">
                          <a href="delete.php" class="nav-link">
                              <i class="pe-7s-trash">
                                              </i>
                              <p>Delete</p>
                          </a>
                      </li> 
                      <li class="nav-item  ">
                          <a href="shortner.php" class="nav-link">
                               <i style = "color:#ffc300 ;" class="pe-7s-scissors"></i>
                                  <p>Shorten URl</p>
                          </a>
                    </li> 
                     <?php 

                         if(isset($_SESSION['status'])){
                      ?>
                      <li class="nav-item">
                          <a href="account.php" class="nav-link">
                               <i class="pe-7s-user"></i>
                                  <p>Account</p>
                          </a>
                    </li>   
                      <li class="nav-item ">
                          <a href="logout.php?logout" class="nav-link">
                               <i class="pe-7s-power"></i>
                                  <p>Logout</p>
                          </a>
                    </li>   
                    <?php 
                      }
                      else{
                    ?>   
                      <li class="nav-item">
                          <a href="login.php" class="nav-link">
                               <i class="pe-7s-user"></i>
                                  <p>Login</p>
                          </a>
                    </li>
                    <?php
                      }
                    ?>
               </ul>
  </div></div>
</nav></div></div>

  <div class="container ml-auto p-5 my-14"> 

    <form action="create" method="post">
      <div class="form-group">
        <h1 class="display-1">Whats your url? </h1>
        <input type="text" class="form-control" name="requested" id="formGroupExampleInput" placeholder="http://kirangle.com"/>
      </div>
     <input class= "form-control" id = "btn" name = "create" type="submit">
    </form>
  </div>


 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script>
    
   
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  document.location.href = 'shortner';
  }  


  </script>

<?php if(isset($_GET['m']))
{
  if(!empty($_GET['m']))
  {
    echo "<script>$('#exampleModalCenter').modal('show')</script>";
  }
}
 ?>

   
  </body>
</html>