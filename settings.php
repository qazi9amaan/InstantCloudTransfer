
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
    <title>Kirangle | Account Settings</title>
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

  <style>
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
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black   absolute-top">
      <div class="container">

  <a data-user = "<?php echo $_SESSION['broadcastchannel']; ?> " class="navbar-brand check" href="home" id= "channelname" style="
    font-size: 25px; font-weight: 400; text-transform: uppercase;"> 
    <?php echo $_SESSION['broadcastchannel']; ?>
      
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
    <span class="navbar-toggler-icon"></span>
  </button>
     

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                    
                    <li class="nav-item ">
                          <a href="broadcast.php" class="nav-link ">
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
                     
                       <li class="nav-item  ">
                          <a href="account.php" class="nav-link">
                               <i class="pe-7s-user"></i>
                                  <p>Account</p>
                          </a>
                    </li>  
                    <li class="nav-item active ">
                          <a href="settings.php" class="nav-link">
                               <i class="pe-7s-config"></i>
                                  <p>Settings</p>
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

<div class="container mt-4 ">
<ul class="nav nav-pills nav-fill" role = "tablist">
  <li class=" nav-item mr-3">
    <a class="nav-link active "  id = "controller-a" href="#rename" >
        <i class="pe-7s-pen"></i>
                                <p>Rename </p>

    </a>
  </li>
  <li class="nav-item mr-3">
    <a class="nav-link  " id = "controller-b" href="#password">
        <i class="pe-7s-door-lock"></i>
                                <p>Password</p>

    </a>
  </li>
  
 
  <li class="nav-item mr-3">
    <a  class="nav-link  "  id = "controller-c" href="#delete" >
        <i class="pe-7s-trash"></i>
                                <p> Delete</p>
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
            Renaming ..
          </h1>
          <p class="  px-4 lead">
            Renaming your channel name will only be possible if the new name you wish to have is not used by anyone. This is an irreversible change, it can't be undone. All your previous room number will be transferred to the new channel. Are you sure you want change your channel name please select action the proceed.
          </p>
          <div class="container">
               <form  id = "changechannelname" name ="changechannelname" class="form-horizontal" >
               <input id = "previousbroadcastname" type="text" hidden value =" <?php echo $_SESSION['broadcastchannel']; ?>" >
                <div class="input-group">
                      <input required name = "newchannelname" type="text" class="form-control" id = "newchannelname" placeholder = "Please type a new channel name" aria-label="Text input with dropdown button">
                   <div id = "renamestatus" class="input-group-append">

                   </div>
                    </div>
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
            Changing password ..
          </h1>
          <p class="  px-4 lead">
            Changing your channel password is an irreversible change, it can't be undone.Are you sure you want change your channel passwod please select action the proceed.
          </p>
          <div class="container">
               <form class="form-horizontal">
                  <div class="input-group">
                      <input  required type="text" id = "newpassword" class="form-control" placeholder = "New password " aria-label="Text input with dropdown button">
                     
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" id = "changemypassword" type="button" aria-haspopup="true" aria-expanded="false">Change Password</button>
                        </div>
                    </div>
                </form>
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
            Deleting Account ..
          </h1>
          <p class="  px-4 lead">
            Deleting your channel is an irreversible change, it can't be undone.  All your  room number will be closed. Your forum will be no more accessible. Your multiple share will no longer be public. Are you sure you want delete your channel ? please select action the proceed.
          </p>
           
          <div class="container">
               <form class="form-horizontal">
                  <div class="input-group">
                    <select class="custom-select" id="deleteaccount">
                             <option value="">Whats your stand?</option>
                            <option value="delete">Premanently delete account</option>
                            <option value="cancel">Cancel</option>
                          </select>
                          <div class="input-group-append">
                      <a class="btn btn-outline-secondary" href = "home" id = "deletebtn" type="button">Choose an action</a>
                    </div>
                  </div>
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


<!-- FUNCTIONS  -->

<script>
 $(document).ready(function(){

  // VALIDATING THE CHANNEL NAME

       $('#newchannelname').keyup(function(){
           
                jQuery.ajax({
                  url:"changesettingsfunc.php",
                  type:"POST",
                   data: {
                        channelname : $('#newchannelname').val(),
                        previousname: $('#channelname').attr("data-user"),
                      },
                    success:function(data){  
                        $('#renamestatus').html(data);
                        }  
                });

       });




       $(document).on('click', '#changemypassword', function(){  
           var id=$(this).data("id2"); 
            
           if(confirm("Are you sure you want to change your password"))  
           {    $('#changemypassword').prop("disabled", true);
                $.ajax({  
                     url:"changesettingsfunc.php",  
                     method:"POST",  
                     data:{
                        checkpassword:"1",
                        auth : $('#newpassword').val(),
                        channel: $('#channelname').attr("data-user"),
                     },  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                           $('#newpassword').val("");
                           $('#newpassword').attr("placeholder","Success! you can change next password after some time");
                           $('#changemypassword').prop("disabled", true);
                           $('#newpassword').prop("disabled", true);
                     }  
                });  
           }  
    });  



       
    $("#deleteaccount").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
      var allbooks = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */

      if(allbooks=='cancel'){
        window.location.href = 'home';
      }else{
              if(confirm("Are you sure you want to delete your channel If yes please choose the action button to proceed")){
                var val = "changesettingsfunc.php?deleteaccount=1&user="+$('#channelname').attr('data-user');
                 $('#deletebtn').attr("href", val);

                
                
      }
      else{
          window.location.href = 'home';
      }}
    });

  });

</script>
  
  </body>
</html>
