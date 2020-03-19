<?php 
  session_start();
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
    <title>Kirangle | Download Broadcast </title>
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

    .nav-pills .nav-link {
     border-radius: .2rem; 
}
.nav-link {
    display: block;
    padding: 1.0rem 1rem;
}

.nav-pills  [class^="pe"]{
font-size: 32px;
    position: relative;
}

[class^="pe-7s-"], [class*=" pe-7s-"] {
    display: inline-block;
    font-family: 'Pe-icon-7-stroke';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
  }
.navbar-pills > li > a {
    margin: 6px 3px;
    padding: 6px 7px;
    text-align: center;
    min-width: 70px;
}
  .nav-pills .nav_item:hover {
    color: !rgba(255,255,255,.75);
}
.nav-pills .nav-link, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: rgba(0, 0, 0, 0.1);
}

.nav-pills .nav-link:hover, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #3b3b3b;
}
.fa{
  float: right;
  padding: 1px;
}

.A{
    background  :rgba(0, 0, 0, 0.1);
    border-radius:5px;
}


.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
     background-color: #3b3b3b;
}

.settings{
  display: none;
}

.backgroungactive{
  display: block;
}
  </style>
  <body>
    
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
                       <li class="nav-item active">
                          <a href="download.php" class="nav-link">
                               <i class="pe-7s-cloud-download"></i>
                                <p>Download</p><span class="sr-only">(current)</span>
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
                               <i class="pe-7s-scissors"></i>
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
<br><br><br>

<div class="container mt-4 ">
<ul class="nav nav-pills nav-fill" role = "tablist">
  <li class=" nav-item mr-3">
    <a class="nav-link active "  id = "controller-a" href="#rename" >
        <i class="pe-7s-info"></i>
                                <p>About </p>

    </a>
  </li>
  <li class="nav-item mr-3">
    <a class="nav-link  " id = "controller-b"  href="#password">
        <i class="pe-7s-cloud-upload"></i>
                                <p>Broadcast text</p>

    </a>
  </li>
  
 
  <li class="nav-item mr-3">
    <a  class="nav-link  "  id = "controller-c" href="#delete" >
        <i class="pe-7s-cloud-download"></i>
                                <p> Receive text</p>
    </a>
  </li>
</ul>
</div>


<!-- Renaming   -->
 <div  role="tabpanel" aria-labelledby="rename"  id = "rename" class="mt-4 settings container mb-5 tab-pane backgroungactive  ">
    <div class="row">
      <div class=" p-3 col-lg-12 ">
        <div class=" p-4 container A">
          <h1 class=" pl-4 pt-3 pb-2 display-4 justify">
            Text Sharing ..
          </h1>
          <p class="  px-4 lead">
           Well, expanding the essence of cloudsharing we are introducing a text sharing feature where you create a room unique, give it a password and ask your other mate to recieve using same credientails. We believe in privacy so we keep your message encrypted and once read we let your mate decide to delete it or not!
          </p>
         
                   <!--  <small id = "broadcastchannel-status"  class="form-text text-muted">
                    </small> -->

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    
<!-- Changing password   -->
 <div   role="tabpanel" aria-labelledby="change"  id = "change" class="mt-4 settings container mb-5 tab-pane   ">
    <div class="row">
      <div class=" p-3 col-lg-12 ">
        <div class=" p-4 container A">
          <h1 class=" pl-4 pt-3 pb-2 display-4 justify">
            Broadcast your message ..
          </h1>
          <p class="  px-4 lead">
            Please choose a unqiue name and select a number  that will ensure privacy of your broadcast tell the mate to use same number while recieving
          </p>
          <div class="container">
               <form class="form-horizontal">
                    <div id = "numberholder" class="container m-2 p-3 ml-auto text-center">
                     </div>
                 <input  required type="text" id = "newroomnumber" class="form-control mb-1" placeholder = "Choose a unique name " aria-label="Text input with dropdown button">
                  <div class="input-group">
                      <textarea   required type="text" id = "msg" class="form-control" placeholder = "Whats the message? " aria-label="Text input with dropdown button"></textarea>

                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" id = "sendmessage" type="button" aria-haspopup="true" aria-expanded="false">Send Message</button>
                        </div>
                        
                    </div>
                </form>
                <div id="checkstatus" class="text-white">
                          
                        </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Deleting your account   -->
 <div  role="tabpanel" aria-labelledby="delete"  id = "delete" class="mt-4 settings container mb-5 tab-pane   ">
    <div class="row">
      <div class=" p-3  col-lg-12 ">
        <div class=" p-4 container A">
          <h1 class=" pl-4 pt-3 pb-2 display-4 justify">
            Recieving Message ..
          </h1>
          <p class="  px-4 lead">
            Please provide the name and the unique number selected while broadcasting the message. 
          </p>
           
          <div class="container">
              <form class="form-horizontal">
                    <div id = "numberholder" class="container m-2 p-3 ml-auto text-center">
                     </div>
                 <input  required type="text" id = "recroomnumber" class="form-control mb-1" placeholder = "Whats the unique name? " aria-label="Text input with dropdown button">
                  <div class="input-group">
                      <input  type="text" required type="text" id = "auth" class="form-control" placeholder = "Whats the unique number? " aria-label="Text input with dropdown button"></textarea>

                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" id = "recievemessage" type="button" aria-haspopup="true" aria-expanded="false">Recieve Message</button>
                        </div>
                        
                    </div>
                </form><br>

                <form  id = "resultingrecievemessage" action="
                ">
                  


                </form>
              </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
       $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
       $('#controller-b').on('click', function (e) {
        e.preventDefault()
         $("#controller-a").attr('class','nav-link ')
         $("#rename").attr('class','mt-4 settings container mb-5 tab-pane ')

          $("#controller-c").attr('class','nav-link ')
         $("#delete").attr('class','mt-4 settings container mb-5 tab-pane ')
         
         $("#change").attr('class','mt-4 settings container mb-5 tab-pane backgroungactive')
         $("#controller-b").attr('class','nav-link active')
          })
            $('#controller-c').on('click', function (e) {
            e.preventDefault()
             $("#controller-a").attr('class','nav-link ')
             $("#rename").attr('class','mt-4 settings container mb-5 tab-pane ')
            $("#controller-b").attr('class','nav-link ')
             $("#change").attr('class','mt-4 settings container mb-5 tab-pane ')
             
             $("#delete").attr('class','mt-4 settings container mb-5 tab-pane backgroungactive')
             $("#controller-c").attr('class','nav-link active')
          })
             $('#controller-a').on('click', function (e) {
            e.preventDefault()
             $("#controller-b").attr('class','nav-link ')
             $("#delete").attr('class','mt-4 settings container mb-5 tab-pane ')

            $("#controller-c").attr('class','nav-link ')
             $("#change").attr('class','mt-4 settings container mb-5 tab-pane ')
             
             $("#rename").attr('class','mt-4 settings container mb-5 tab-pane backgroungactive')
             $("#controller-a").attr('class','nav-link active')

          })


    </script>


    <script>
      

      $(document).ready(function(){

  // VALIDATING THE CHANNEL NAME



       // $('#newchannelname').keyup(function(){
           
       //          jQuery.ajax({
       //            url:"textsharinghelper.php",
       //            type:"POST",
       //             data: {
       //                  channelname : $('#newchannelname').val(),
       //                  previousname: $('#channelname').attr("data-user"),
       //                },
       //              success:function(data){  
       //                  $('#renamestatus').html(data);
       //                  }  
       //          });

       // });

       

});


      $(document).on('click', '#controller-b', function(){  
           jQuery.ajax({
                  url:"textsharinghelper.php",
                  type:"POST",
                   data: {
                       getnumbers:true,
                      },
                    success:function(data){  
                        $('#numberholder').html(data);
                        }  
                });
    });  



    $(document).on('click', '#deletemessage', function(){  
           jQuery.ajax({
                  url:"textsharinghelper.php",
                  type:"POST",
                   data: {
                       deletemessage:true,
                       id:$(this).data("id"),
                      },
                    success:function(data){  
                      $('#resultingrecievemessage').html(data);
                        
                        }  
                });
    });  



$(document).on('click', '#authbutton', function(){  
  
        $(this).attr("id" , "selectedauth") ;
         $(this).attr("class" , "btn btn-outline-secondary  rounded-circle  btn-xl  mr-2 active") ;
          $("button[id^='authbutton']").prop("disabled", true);



    });  

$(document).on('click', '#recievemessage', function(){  

       
          var room =    $("#recroomnumber").val();
          var auth =     $("#auth").val();
           jQuery.ajax({
                  url:"textsharinghelper.php",
                  type:"POST",
                   data: {
                       recievemessage:true,
                       auth:auth,
                       room:room,
                      

                      },
                    success:function(data){ 
                       $('#resultingrecievemessage').html(data); 
                       
                       $("#recroomnumber").val("");
                        $("button[id^='authbutton']").prop("disabled", false);
                        }  
                });
    });  


$(document).on('click', '#sendmessage', function(){  

          var auth =   $("#selectedauth").attr('data-numbers');
          var room =    $("#newroomnumber").val();
          var msg =     $("#msg").val();
           jQuery.ajax({
                  url:"textsharinghelper.php",
                  type:"POST",
                   data: {
                       uploadmsg:true,
                       auth:auth,
                       room:room,
                       msg:msg,

                      },
                    success:function(data){  
                       $('#checkstatus').html(data);
                       window.location.href = "textsharing.php";
                        }  
                });
    });  



 $(document).ready(function(){
     
         $('#newroomnumber').keyup(function(){
           
                jQuery.ajax({
                  url:"textsharinghelper.php",
                  type:"POST",
                   data: {
                        checkroomnumber:true,
                        roomnumber : $('#newroomnumber').val(),
                        
                      },
                    success:function(data){  
                        $('#checkstatus').html(data);
                        }  
                });

       });
      
    });


       

    </script>

  </body>
</html>