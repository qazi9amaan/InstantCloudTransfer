
<?php
   session_start();
   if(!isset($_SESSION['status']))
    {
      header("location:index.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
     <link href="css/ct-navbar.css" rel="stylesheet" />  
    <title>Kirangle | Cloud Share</title>
  </head>

  <style>
     body{
        background: #373737
      }
   
.login-container {
    margin-top: 9.5rem;
}

.btnSubmit
{
    width: 100%;

    border-radius: .5rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
    border-radius: 0px;
    margin-top: 19px;
}


  
  .info{
    position: relative;

    padding: 12px;
  }
  .lead{
    text-align: justify;
    color : #777575;
    font-weight: 100;
    font-style: ;
  }
  .display-4{
    color: #777575;
    overflow: hidden;
    margin-top: -11px;
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
.display-2 {
    font-size: 4.5rem;
    font-weight: 300;
 
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

h1, .h1, h2, .h2, h3, .h3, h4, .h4 {
    font-weight: 400;
    margin: 30px 0 15px;
}
h1, .h1 {
    font-size: 52px;
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, p, .navbar, .brand {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

#downloadlink{
      border-radius: 0.35rem;
     

    border: none;
    padding: 2px;
}






.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    color: #fff;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #333;
    background-clip: border-box;
   border: none;
    border-radius: .35rem;
     box-shadow: 0 3px 6px 1px rgba(0, 0, 0, 0.2), 0 5px 12px 0 rgba(0, 0, 0, 0.19);
}
  </style>
  <body>
    
    <!-- Navigation -->

    <div id="navbar-full">
    <div id="navbar">
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black   fixed-top">
      <div class="container">

  <a class="navbar-brand check" href="#" style="
    font-size: 25px; font-weight: 400; text-transform: uppercase;"> 
    <?php echo $_SESSION['broadcastchannel']; ?>
      
    </a>
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
                       <li class="nav-item active ">
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
               </ul>
  </div></div>
</nav></div></div>


 <div class=" container login-container">
   <h1 class="display-4">Multiple Share Records</h1>
    <div class="card-columns">
          <div class="card ">
              <div class="card-body ">
                  <p class="card-text"> &nbsp;&nbsp;  Room Number  &nbsp; &nbsp; <small>Date</small>
                    &nbsp;&nbsp;&nbsp;&nbsp;  <span class="badge badge-primary badge-pill">14</span>  &nbsp;
                   <i class="fa fa-copy " style="font-size: 22px;" aria-hidden="true"></i>&nbsp;&nbsp;
                    <i class="fa fa-trash-o  " style="font-size: 22px;" aria-hidden="true"> </i>
                    
                  </p>
              </div>
           </div>
           <div class="card ">
              <div class="card-body ">
                  <p class="card-text"> &nbsp;&nbsp;  Room Number  &nbsp; &nbsp; <small>Date</small>
                    &nbsp;&nbsp;&nbsp;&nbsp;  <span class="badge badge-primary badge-pill">14</span>  &nbsp;
                   <i class="fa fa-copy " style="font-size: 22px;" aria-hidden="true"></i>&nbsp;&nbsp;
                    <i class="fa fa-trash-o  " style="font-size: 22px;" aria-hidden="true"> </i>
                    
                  </p>
              </div>
           </div>
           <div class="card ">
              <div class="card-body ">
                  <p class="card-text"> &nbsp;&nbsp;  Room Number &nbsp; &nbsp; <small>Date</small>
                    &nbsp;&nbsp;&nbsp;&nbsp;  <span class="badge badge-primary badge-pill">14</span> &nbsp;
                   <i class="fa fa-copy " style="font-size: 22px;" aria-hidden="true"></i>&nbsp;&nbsp;
                    <i class="fa fa-trash-o  " style="font-size: 22px;" aria-hidden="true"> </i>
                    
                  </p>
              </div>
           </div>
           <div class="card ">
              <div class="card-body ">
                  <p class="card-text"> &nbsp;&nbsp;  Room Number  &nbsp; &nbsp; <small>Date</small>
                    &nbsp;&nbsp;&nbsp;&nbsp;  <span class="badge badge-primary badge-pill">14</span>  &nbsp;
                   <i class="fa fa-copy " style="font-size: 22px;" aria-hidden="true"></i>&nbsp;&nbsp;
                    <i class="fa fa-trash-o  " style="font-size: 22px;" aria-hidden="true"> </i>
                    
                  </p>
              </div>
           </div>
           <div class="card ">
              <div class="card-body ">
                  <p class="card-text"> &nbsp;&nbsp;  Room Number  &nbsp; &nbsp; <small>Date</small>
                    &nbsp;&nbsp;&nbsp;&nbsp;  <span class="badge badge-primary badge-pill">14</span>  &nbsp;
                   <i class="fa fa-copy " style="font-size: 22px;" aria-hidden="true"></i>&nbsp;&nbsp;
                    <i class="fa fa-trash-o  " style="font-size: 22px;" aria-hidden="true"> </i>
                    
                  </p>
              </div>
           </div>
           <div class="card ">
              <div class="card-body ">
                  <p class="card-text"> &nbsp;&nbsp;  Room Number  &nbsp; &nbsp; <small>Date</small>
                    &nbsp;&nbsp;&nbsp;  <span class="badge badge-primary badge-pill">14</span> &nbsp;
                   <i class="fa fa-copy " style="font-size: 22px;" aria-hidden="true"></i>&nbsp;&nbsp;
                    <i class="fa fa-trash-o  " style="font-size: 22px;" aria-hidden="true"> </i>
                    
                  </p>
              </div>
           </div>



    </div>


  </div>










    <!-- Optional JavaScript -->
    <script>
    
   

       if ($('.display-3').width() > $('login-form-2').width()) {
        $('.display-3').css('font-size', '3rem');
}
        if ($('.display-4').width() > $('login-form-1').width()) {
        $('.display-4').css('font-size', '3rem');
    }

  </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>