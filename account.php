
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
.card-body {
    
    padding: 1.5rem;
}


@media (min-width: 576px) {
    .card-columns {
        column-count: 2;
    }
}

@media (min-width: 768px) {
    .card-columns {
        column-count: 2;
    }
}

@media (min-width: 992px) {
    .card-columns {
        column-count: 3;
    }
}

@media (min-width: 576px) {
  input[type="sarch"] {
    margin-left:0;
  }
}

[class*="navbar-ct"] .btn-default {
  margin-top: 1px;
    margin-right: 34px;
    color: #FFFFFF;
    padding: 0px; 
    padding-top: 4px;
    padding-left: 17px;
    margin: 0px;
    border: 0px solid #fff;
    padding-bottom: 3px;
    margin-right: -19px;
    font-size: 27px;
    
   }

   
[class*="navbar-ct"] .btn-default:focus {
     border: 0px solid #fff;

    
   }

   @media (min-width: 576px) {
    .card-columns {
        column-count: 2;
    }
}

.w-72 {
    width: 70%!important;
}

#search_text{
  
    -webkit-appearance: searchfield;

}

.btn:focus{
  shadow :none;
}


  </style>
  <body>
    
    <!-- Navigation -->

    <div id="navbar-full">
    <div id="navbar">
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black   absolute-top">
      <div class="container">
      <div class="collapse navbar-end navbar-collapse" id="navbarSupportedContent">
  <a data-user = "<?php echo $_SESSION['broadcastchannel']; ?>" class="navbar-brand check" href="index.php" id= "channelname" style="MAX-WIDTH: 123PX;
    PADDING-LEFT: 10PX;
    font-size: 25px;
    font-weight: 400;
    margin-left:15px;
    text-transform: uppercase;
    OVERFLOW-X: HIDDEN;"> 
    <?php echo $_SESSION['broadcastchannel']; ?>
      
    </a></div>

    <form class="navbar-form mr-4 mt-0 mb-0 my-auto d-flex justify-content-center w-72" role="search">
            <div class="input-group">
            
                <input required type="search" id = "search_text" class="form-control search" style=" margin-top :1px; margin-left: 10px;background:rgba(0, 0, 0, 0.1);padding : 22px;border-radius: 5px;" placeholder="Room number">
                <span class="input-group-btn">
                        <button id = "searchbtn" onclick='search()'; class="btn btn-default">
                        <i class="pe-7s-search"></i>
                        </button>
                    </span>
            </div>
        </form>
       
        

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
    <span class="navbar-toggler-icon"></span>
  </button>
     

  <div class="collapse navbar-end navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                    
                   <li class="nav-item  ">
                          <a href="account.php" class="nav-link">
                               <i class="pe-7s-users"></i>
                                  <p>Forums</p>
                          </a>
                    </li>  
                     
                       <li class="nav-item active ">
                          <a href="account.php" class="nav-link">
                               <i class="pe-7s-user"></i>
                                  <p>Account</p>
                          </a>
                    </li>  
                    <li class="nav-item  ">
                          <a href="settings.php" class="nav-link">
                               <i class="pe-7s-tools"></i>
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

<ul class="nav nav-pills nav-fill">


   <li class="nav-item mr-2">
    <a class="nav-link " href="download">
        <i class="pe-7s-cloud-upload"></i>
                                <p>Broadcast</p>

    </a>
  </li>

  <li class="nav-item mr-2">
    <a class="nav-link " href="download">
        <i class="pe-7s-cloud-download"></i>
                                <p>Download</p>

    </a>
  </li>
  
  <li class="nav-item mr-2">
    <a class="nav-link " href="forum\forum-main.php">
        <i class="pe-7s-users"></i>
                                <p> My Forum</p>

    </a>
  </li>
</ul>
</div>

 <div class=" container mt-5">
   <h1 responsive class="display-4">Multiple Share Records</h1>

    <div class="card-columns">
    </div>
  </div>
  <br>










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

    </script>

  <!-- AJAX CODES -->
  <script type = "text/javascript">

   $(document).ready(function(){
      
       fetch_data();
       var showall =  setInterval(fetch_data,2000);
        
       $('#search_text').keyup(function(){
          
          clearInterval(showall);
          var x = $(this).val();
          $('#searchbtn').attr("onclick","clearall()")
          $('#searchbtn').attr("id","clearbtn")
          $('.pe-7s-search').attr("class","pe-7s-close")
        if(!$(this).val())
        {

          $('#clearbtn').attr("onclick","")
          $('#clearbtn').attr("id","searchbtn")
          $('.pe-7s-close').attr("class","pe-7s-search")


          fetch_data();
           showall =  setInterval(fetch_data,2000);
        
        }else{
          clearInterval(showall);
          $.ajax({
            url:"fetchdata.php", 
                method:"GET",
                data:'search='+x+'&user='+$('#channelname').attr("data-user"),
                success:function(data){  
                     $('.card-columns').html(data);  
                }  
          });
        }
      });
      
    });


    function clearall()
    {
        $('.pe-7s-close').attr("class","pe-7s-search")
        fetch_data();
         showall =  setInterval(fetch_data,2000);
    }

      
    

   function fetch_data()  
      {  
           $.ajax({  
                url:"fetchdata.php",  
                method:"POST",
                data:{
                  user: $('#channelname').attr("data-user")
                },
                success:function(data){  
                     $('.card-columns').html(data);  
                }  
           }); 
       } 

    


    $(document).on('click', '#btn_delete', function(){  
           var id=$(this).data("id2"); 
            
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"deletetheitem.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
    });  


    $(document).on('click', '#btn_toggle', function(){  
           var multishareid=$(this).data("id3"); 
           var mode=$(this).data("mode"); 
            
           if(confirm("Do you really want to change to multisharing?"))  
           {  
                $.ajax({  
                     url:"deletetheitem.php",  
                     method:"POST",  
                     data:{
                       multishareid:multishareid,
                       mode:mode
                      },  
                     dataType:"text",  
                     success:function(data){  
                         alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
    });  


    
      $(document).on('click', '#btn_copy', function(){  
           var url= "#url"+$(this).data("urlid"); 
           prompt("Your broadcast link is",""+$(url).attr("value")); 
           fetch_data();
      });  

      
      
    
     
  </script>
  
  </body>
</html>
