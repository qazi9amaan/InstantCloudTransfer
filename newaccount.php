<?php
   
session_start();
 if(isset($_SESSION['status']))
  {
        header("location:account.php");
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


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">
  </head>

  <style>
     body{
        background: #373737
      }
    .login-form-2{
      height: 430px;
     
      padding: 5%;
      background:#2d2d2d ;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 .display-3{
    
    color: #373737;
    margin-bottom: 40px;
    margin-top: 0px;
    overflow: hidden;
    
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


.login-form-2 .btnSubmit{
    font-weight: 200;
    color: #fff;
    padding: 10px;
    background-color: #373737;
    border :  1px solid #373737;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 20px 0 rgba(0, 0, 0, 0.19);
   }
.login-form-2 .btnSubmit:hover{
  
    color: #fff;
    border :  1px solid  #333;
    box-shadow: 0 3px 5px 0 rgba(0, 0, 3, 0.2), 0 7px 19px 0 rgba(0, 0, 0, 0.19);
 
   }


   img{
        border:1px solid #333;
    }
  
  .login-container{
    margin-top: 9.5rem;
    
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


.wrapper{
  
  width:100%;
  height:73%;
  display:flex;
  align-items:center;
  justify-content:center;
  
}
  .file-upload{

    height:200px;
    width:200px;
    border-radius: 100px;
    position:relative;
    
    display:flex;
    justify-content:center;
    align-items: center;  
      border:4px solid #FFFFFF;
    overflow:hidden;
    background-image: linear-gradient(to bottom, #373737 50%, #fff 50%);
    background-size: 100% 200%;
    transition: all 1s;
    color: #FFFFFF;
    font-size:100px;
}
    input[type='file']{
      height:200px;
      width:200px;
      position:absolute;
      top:0;
      left:0;
      opacity:0;
      cursor:pointer;

    }

   .file-upload:hover{

      background-position: 0 -100%;

      color:#373737;

    }

.login-form-1{
 padding: 5px;
 padding-right: 15px; 
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

    <div id="navbar-full">
    <div id="navbar">
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black   fixed-top">
      <div class="container">
  <a class="navbar-brand check" href="index.php" style="
    font-size: 25px;
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
                      <li class="nav-item ">
                          <a href="shortner.php" class="nav-link">
                               <i style = "color: #ffc300;" class="pe-7s-scissors"></i>
                                  <p>Shorten URl</p>
                          </a>
                    </li>   
                    <li class="nav-item ">
                          <a href="login.php" class="nav-link">
                               <i class="pe-7s-user"></i>
                                  <p>Login</p>
                          </a>
                    </li>   
               </ul>
  </div></div>
</nav></div></div>



 <div class="container login-container">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 login-form-1">
                  <div class="info">
                    <h1 class="display-4">CREATE YOUR CHANNEL</h1>
                   <br>
                    <p class="lead">
 Share your files any where anytime, just make a channel and start sharing. Use your room number and channel name or just the url provided after broadcast to download you can register here to keep a eye on your broadcasts. </p>
  <p class="lead"><strong> Donot share your authentication code with annyone. </strong> 
  Your authentication code is the access key to your channel. </p>

                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 login-form-2">
                <h1 class="display-4">CREATE YOUR CHANNEL</h1><br>
                    
                    <form action="authentication.php"  method="post">
                        <div class="form-group">
                            <input type="text" name = "broadcastchannel" class="form-control" placeholder="Channal Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name = "authcode" class="form-control" placeholder="Authentication code *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name = "create_account"class="btnSubmit" value="Create" />
                        </div>
                        
                    </form>
                </div>
            </div>
        </div></div>

<br>
   <!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
      <li class="list-inline-item">
        <h5 class="mb-1">Own a channel?</h5>
      </li>
      <li class="list-inline-item">
        <a href="login.php" class="btn btn-outline-white btn-rounded">Login Now!</a>
      </li>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://kirangle.com/"> Kirangle.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->






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
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
  </body>
</html>