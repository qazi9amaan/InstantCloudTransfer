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
    <link rel="stylesheet" href="../fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <script src="..//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
     <link href="../css/ct-navbar.css" rel="stylesheet" />  
    <title>Kirangle | New Forum </title>
  </head>

  <style>
     body{
        background: #373737
      }
    .login-form-2{
      height: auto;
     
      padding: 5%;
      background:#2d2d2d ;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 .display-4{
    
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
    
    <!-- Navigation -->

    <div id="navbar-full">
    <div id="navbar">
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black   fixed-top">
      <div class="container">
  <a class="navbar-brand check" href="" style="
    font-size: 25px;
    font-weight: 400;
">CREATE A FORUM</a>
 <a hidden data-user = "<?php echo $_SESSION['broadcastchannel']; ?> " class="navbar-brand check" href="home" id= "channelname" style="
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
                      
                     
                     <li class="nav-item ">
                          <a href="broadcast.php" class="nav-link">
                               <i class="pe-7s-users"></i>
                                <p>Forum</p> 
                          </a>
                      </li> 
                     
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
                   
               </ul>
  </div></div>
</nav></div></div>


 <div class="container login-container">
            <div class="row">
               <div class="col col-sm-12 col-md-6 col-lg-6 login-form-1">
                  <div class="info">
                    <h1 class="display-4">STARTING A DISCUSSION</h1>
                    <p class="lead">Forums allow you to dedicate your broadcast to a particular field. People with same intrests can come to your forum and share there views</p>
                    <p class="lead">Forum names are unqiue, there are always public. You can choose to the privacy of the forum either you can mute public comments or allow them. You can change the ownership of your forum. </p>

                  </div>
                </div>
                <div class="col col-sm-12 col-md-6 col-lg-6 login-form-2">
                  <h1 class="display-4">NEW FORUM</h1>

                    
                    <form action="forumfunc.php"  id = "createforumform" method="post">

                        <div class="form-group">
                            <input required id = "newforumname" required type="text" name ="newforumname" class="form-control" placeholder="Choose a forum name *"/>

                            <small id = "forum-name-result"></small>
                        </div>

                        <div class="form-group">
                            <input required type="text" name = "forumtopic" class="form-control" placeholder="A topic that defines your forum *" />
                        </div>

                        <div class="form-group">
                            <textarea required class="form-control" name = "forumdesc" placeholder=" Short description of your forum helps us to connect you to world easily *"></textarea>
                        </div>

					

						<div class="form-group">
                            <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <label disbaled class=" form-control input-group-text" for="inputGroupSelect01">Ownership *</label>
                                    </div>
                                        <select disabled name = "forumowner" class=" form-control custom-select" id="inputGroupSelect01">
 											<option value="<?php echo $_SESSION['broadcastchannel']; ?>"><?php echo $_SESSION['broadcastchannel']; ?></option>
                                        </select>
                            </div>
                        </div>



                        


                        <div class="form-group">
                            <input type="submit" id = "createbtn" name = "create_forum" class="btnSubmit" value="Create" />
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>











    <!-- Optional JavaScript -->
   

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

 <script>
    
   

       if ($('.display-3').width() > $('login-form-2').width()) {
        $('.display-3').css('font-size', '3rem');
}
        if ($('.display-4').width() > $('login-form-1').width()) {
        $('.display-4').css('font-size', '3rem');
    }

  </script>

  <script>
  	
	$(document).ready(function(){

  // VALIDATING THE CHANNEL NAME

       $('#newforumname').keyup(function(){
           
                jQuery.ajax({
                  url:"forumfunc.php",
                  type:"POST",
                   data: {
                   	checkforumname:true,
                        forumname : $('#newforumname').val(),
                        // channelname: $('#channelname').attr("data-user"),
                      },
                    success:function(data){  
                        $('#forum-name-result').html(data);
                        }  
                });

       });


       	

   });


  </script>
</html>