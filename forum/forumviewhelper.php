
<?php
   session_start();
  $conn = mysqli_connect('localhost', 'root', '' ,'instantsharing');

?>


  <?php
 
    if(isset($_GET['id']))
    {
      $forumid=$_GET['id'];
      $sql = "SELECT * FROM forumowner WHERE id= '$forumid' ";

                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){ 
                      $row=mysqli_fetch_array($result);



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
    <!-- <script src="../js/ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
     <link href="../css/ct-navbar.css" rel="stylesheet" /> 
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 
    <title>Kirangle | Cloud Share</title>
  </head>
  



  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
  <style>
  

#rowtitle{
  
}
  .jumbotron{
    background: none;
    border: none;
    box-shadow: none;
  }
  .card-text{
   
   display: block;
    display: -webkit-box;
    max-width: 100%;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis
  }
  .posttitle{
     font-family: 'Roboto', sans-serif;
     font-size: 55px;
     font-weight: 500;
  }

    .forumtitle
    {
     
      background:#333;
      display: block;
      width: 730px;
      height: 300px;
    }
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

.settings{
  display: none;
}

.backgroungactive{
  display: block;
}
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
     background-color: #3b3b3b;
}

[class*="navbar-ct"] .btn-default {
    
    color: #FFFFFF;
    padding: 0px;
    padding-right: 13px;
    padding-top: 4px;
    padding-left: 17px;
    margin: 0px;
    border: 0px solid #fff;
    padding-bottom: 3px;
    margin-right: 0px; 
    font-size: 27px;
}
#rowtitle{
      color: #fff; 
     text-shadow: 0 0 3px #fff, 0 2px 12px #333;

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

.showurl{
   background: #333;
    color: #ffc300;
  size: 25px;
       height: 65px;
    border: 1px solid #ffc300;
    
}




  </style>
  <body>
    
    
  <div id="navbar-full">
    <div id="navbar">
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black  fixed-bottom">
      <div class="container">
   


    <a class="navbar-brand " href="forum-main.php" data-forumname = " <?php echo $_GET['forum']; ?>" id= "forumname" > 
    Forum @ <?php echo $_GET['forum']; ?> 
        </a>
 

  <button id = "navtoggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sss"  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
     

  <div class="collapse navbar-end navbar-collapse" state = "closed" id="sss">
            <ul class="navbar-nav justify-content-center  mx-auto">

                         <li class="nav-item  ">
                          <a href="../home" class="nav-link">
                               <i class="pe-7s-home"></i>
                                  <p>Home</p>
                          </a>
                    </li> 
                      <li class="nav-item  ">
                          <a href="forum-main.php" class="nav-link">
                              <i style = "color:#1084FF" class="pe-7s-mail-open-file"></i>
                                    <p>Messages</p>
                                        </a>
                      </li>  
                       <?php if(isset( $_SESSION['broadcastchannel'])){ ?>
                        <li class="nav-item  ">
                          <a href="forum-upload-post.php?forum= <?php echo $_GET['forum']; ?>&id= <?php echo $_GET['id']; ?>" class="nav-link">
                               <i  class="pe-7s-paperclip"></i>
                                  <p>Upload </p>
                          </a>
                    </li> 

                      <?php 
                        if($_SESSION['broadcastchannel'] === $row['owner']){

                      ?>
                        <li class="nav-item  ">
                          <a href="#" id = "deleteforum" data-forumid = "<?php echo $_GET['id']; ?>" class="nav-link">
                              <i class="pe-7s-trash"></i>
                                    <p>Delete Forum</p>
                                        </a>
                      </li> 

                       <li class="nav-item  ">
                          <a href="#" id = "pinathought" data-forumid = "<?php echo $_GET['id']; ?>" class="nav-link">
                              <i class="pe-7s-pin"></i>
                                    <p>Pin Thought</p>
                                        </a>
                      </li> 
                      <?php
                        }

                      ?>
                         <?php 
                        if($_SESSION['broadcastchannel'] != $row['owner']){

                      ?>
                       

                      <?php
                        }

                      ?>
                         <?php
                        }else{

                      ?>
                       
                        <li class="nav-item  ">
                          <a href="../login.php" class="nav-link">
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



<!-- NAVBAR TOP   -->
 
    <div id="navbar-full">
    <div id="navbar">
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black   absolute-top">
      <div class="container">
     <?php if(isset( $_SESSION['broadcastchannel'])){ ?>
        <a  data-user = "<?php echo $_SESSION['broadcastchannel']; ?>" class="navbar-brand check" href="../home" id= "channelname" style="MAX-    MAX-WIDTH: 86px;
          PADDING-LEFT: 7PX;
          font-size: 19px;
          font-weight: 400;
          margin-left: 9px;
          text-transform: uppercase;
          OVERFLOW-X: HIDDEN;"> 
          <?php echo $_SESSION['broadcastchannel']; ?>
            
          </a>
    <?php }?>


    <form class="navbar-form mr-4 mt-0 mb-0 my-auto d-flex justify-content-center w-72" role="search">
            <div class="input-group">
            
                <input required type="search" id = "search_text" class="form-control search" style=" margin-top :1px; ;background:rgba(0, 0, 0, 0.1);padding : 22px;border-radius: 5px;" placeholder="Search for post">
                <span class="input-group-btn">
                        <a href ="forumviewhelper.php?id=<?php echo $_GET['id']; ?>&forum=<?php echo $_GET['forum']; ?>" id = "searchbtn" onclick='search()'; class="btn btn-default peach-gradient ">
                        <i class="pe-7s-search"></i>
                        </a>
                    </span>
            </div>
        </form>
       
        


     

 </div>
</nav></div></div>

 <!-- Modal -->
  <div class="modal show" id="exampleModalCenter" tabindex="1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">What's on your mind?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span style="color: #ffc300;" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-5">
         <textarea  style = "width: 100%;" class = "form-control lead showurl" id="uploadathoughtvalue" placeholder="Whats your thought?" ></textarea>
        </div>
        <div class="modal-footer" style="
      margin-top: -27px;
  ">
          <button  type="button" class="btn btn-lg-dark" data-dismiss="modal">Close</button>
          <button type="button"   id = "uploadathoughtbtn"class="btn btn-lg-dark"> Upload Now</button>
        </div>
      </div>
    </div>
  </div>






  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 style = "color:#fff" class="  my-4 display-3 text-center text-uppercase"> <?php echo $_GET['forum']; ?>
          <small id = "forumtitle" style = "color:#fff" class="text-uppercase"><?php echo $row['forumtopic']; ?></small>
        </h1>
  
  <div id="result">
       

        <!-- Blog Post -->
       <!--  <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div> -->

      
  </div>
        <!-- Pagination -->
       <!--  <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul> -->

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        
  
        <!-- Categories Widget -->
        <div class="card my-5">
          <h5 class="card-header">Topics</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul id = "showtopics" class="list-unstyled mb-0">

                  
                  
                </ul>
              </div>
             
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="mb-5  card my-4">
          <h5 class="card-header">Forum Description</h5>
          <div class="card-body">
            <?php echo $row['forumdesc'] ?>
          </div>
        </div>
          
        <div class="mb-5  card my-4">
          <h5 class="card-header">Whats Happening?</h5>
          <div class="card-body">
            <p class = "msg" id = "showthought"></p>
          </div>
            
        </div>
        

     

      </div>

    </div>
    <!-- /.row -->

  </div>






<?php
     }               
    }
  }

?>


   

   
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js"></script>
  <!--   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->

 <!-- Optional JavaScript -->
   <script>
       if ($('.display-3').width() > $('login-form-2').width()) {
        $('.display-3').css('font-size', '3rem');
      }
        if ($('.display-4').width() > $('login-form-1').width()) {
        $('.display-4').css('font-size', '3rem');
    }

  </script>




    <script>
    
       $('#controller-b').on('click', function (e) {
        e.preventDefault()
         $("#controller-a").attr('class','nav-link ')
         $("#files").attr('class','mt-4 settings container mb-5 tab-pane ')

          $("#controller-c").attr('class','nav-link ')
         $("#about").attr('class','mt-4 settings container mb-5 tab-pane ')
         
         $("#upload").attr('class','mt-4 settings container mb-5 tab-pane backgroungactive')
         $("#controller-b").attr('class','nav-link active')
          })
            $('#controller-c').on('click', function (e) {
            e.preventDefault()
             $("#controller-a").attr('class','nav-link ')
             $("#files").attr('class','mt-4 settings container mb-5 tab-pane ')
            $("#controller-b").attr('class','nav-link ')
             $("#upload").attr('class','mt-4 settings container mb-5 tab-pane ')
             
             $("#about").attr('class','mt-4 settings container mb-5 tab-pane backgroungactive')
             $("#controller-c").attr('class','nav-link active')
          })
             $('#controller-a').on('click', function (e) {
            e.preventDefault()
             $("#controller-b").attr('class','nav-link ')
             $("#about").attr('class','mt-4 settings container mb-5 tab-pane ')

            $("#controller-c").attr('class','nav-link ')
             $("#upload").attr('class','mt-4 settings container mb-5 tab-pane ')
             
             $("#files").attr('class','mt-4 settings container mb-5 tab-pane backgroungactive')
             $("#controller-a").attr('class','nav-link active')

          })


    </script>
    

  <!-- AJAX CODES -->
 <script>
   
    $(document).ready(function(){

     
      
      
       fetch_data();
       fetch_topics();
        fetch_thought();
       var showall =  setInterval(fetch_data,9000);




        $(document).on('click', '#sortbytitle', function(){ 
          clearInterval(showall); 
           var title=$(this).data("title"); 
           var forum= $('#forumname').attr("data-forumname");
            
            clearInterval(showall);
                $.ajax({  
                     url:"fetchallforumposts.php",  
                     method:"POST",  
                     data:{
                      sortbttile:true,
                       title:title,
                       forum:forum
                      },  
                     dataType:"text",  
                     success:function(data){  
                          $('#result').html(data);  
                     }  
                });  
            
    });  
        
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
            url:"fetchallforumposts.php", 
                method:"GET",
                data:'search='+x+'&forum='+$('#forumname').attr("data-forumname"),
                success:function(data){  
                     $('#result').html(data);  
                }  
          });
        }
      });
      
    });



           function fetch_thought()  
      {  var forum_id = <?php echo $_GET["id"]; ?>;
           $.ajax({  
                url:"fetchallforumposts.php",  
                method:"POST",
                data:{
                  showthoughts:true,
                  forum_id:forum_id,
                },
                success:function(data){  
                     $('#showthought').html(data);  
                }  
           }); 
       } 


           function fetch_topics()  
      {  
           $.ajax({  
                url:"fetchallforumposts.php",  
                method:"POST",
                data:{
                  showtopics:true,
                  forumname: $('#forumname').attr("data-forumname")
                },
                success:function(data){  
                     $('#showtopics').html(data);  
                }  
           }); 
       } 



     function fetch_data()  
      {  
           $.ajax({  
                url:"fetchallforumposts.php",  
                method:"POST",
                data:{
                  showforumposts:true,
                  forumname: $('#forumname').attr("data-forumname")
                },
                success:function(data){  
                     $('#result').html(data); 
                     fetch_topics(); 

                }  
           }); 
       } 

   $(document).on('click', '#deleteforum', function(){  
           
            if(confirm("Are you sure you want to delete your forum.")){
                    window.location.href = 'forum-main.php';
                var val = "deleteforum=1&forum="+$('#forumname').attr('data-forumname')+"&id="+<?php echo $_GET["id"]; ?>;
                 $.ajax({  
                url:"forumfunc.php",  
                method:"GET",
                data:val,
                success:function(data){  
          
                }  
           }); 

      }
      else{
          window.location.href = '../home';
      }
    });  

     




 $(document).on('click', '#deletepostbtn', function(){  
           var id=$(this).data("deletepostid"); 
            
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"forumfunc.php",  
                     method:"POST",  
                     data:{
                      deletepost:true,
                      id:id,
                    },  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
    });  



 $(document).on('click', '#editpostbtn', function(){  
           var id=$(this).data("editpostid"); 
           var desc=$(this).data("description"); 
           
            var value=prompt("Please enter your new description?",desc);
           if( value )  
           {  
                $.ajax({  
                     url:"forumfunc.php",  
                     method:"POST",  
                     data:{
                      editpost:true,
                      id:id,
                      value:value,
                    },  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
    });  


 $(document).on('click', '#uploadathoughtbtn', function(){  
          var forum_id = <?php echo $_GET["id"]; ?>;
           var value=$('#uploadathoughtvalue').val(); 

          $('#uploadathoughtbtn').attr('value','Please wait!'); 
           
           
             $.ajax({  
                     url:"forumfunc.php",  
                     method:"POST",  
                     data:{
                      updatethought:true,
                      forum_id:forum_id,
                      value:value,
                    },  
                     dataType:"text",  
                     success:function(data){  
                          fetch_thought(); 
                          $('#exampleModalCenter').modal('hide');
                     }  
                });  
            
    });  


 






 </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script>
   
   $(document).on('click', '#pinathought', function(){  
         $('#exampleModalCenter').modal('show')

    }); 
 </script>
  
  </body>
</html>
