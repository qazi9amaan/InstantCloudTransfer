<?php
   session_start();
   if(!isset($_SESSION['status']))
    {
      header("location:index.php");
    }
    $broadcastchannel =  $_SESSION['broadcastchannel'];
    $forumname =  $_GET['forum'];
    
     $siteurl = 'localhost/test2';
     

     $conn = mysqli_connect('localhost', 'root', '','instantsharing');



function savetodbforposts($filename, $broadcastchannel ,$forumname,$title ,$description,$conn)
{
  if(isset($_SESSION['status'])){
    $broadcastchannel =  $_SESSION['broadcastchannel'];
  }
  $dt=date("Y-m-d H:i:s");
  
  // $sql = "INSERT INTO storage (filename, broadcastchannel,roomnumber,sharingmode,uploaddate)
  //   VALUES ('$filename', '$broadcastchannel','$forumname', 'multiple','$dt');";

  $sql = "INSERT INTO forumposts (title, uploadedby,forumname,uploaddate,description,filename)
    VALUES ('$title', '$broadcastchannel','$forumname','$dt','$description','$filename');";

    if (mysqli_query($conn, $sql)) {
      header('Location:../home');
      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



 if(isset($_POST['upload_post_to_forum']))
  { 
    
      $broadcastchannel =  $_POST['broadcastchannel'];
    if(isset($_SESSION['status'])){
      $broadcastchannel =  $_SESSION['broadcastchannel'];
    }

    if(true)
    {

      
      if(isset($_FILES['upload'])=== true)
      {
            if(count(array_filter($_FILES['upload']['name']))>1)
            {
               // echo "<pre>". print_r $_FILES['upload'] ."</prev>"; shows content of the file
                // zip instance
                $zip = new ZipArchive();
                $file_name_zip = time().".zip";
                $path_to_save = '../result/'.$file_name_zip;
              
                if($zip->open($path_to_save,ZipArchive::CREATE)!==true)
                {
                  echo "filename already exists";
                }
                $files = $_FILES['upload'];
                
                
                for( $i = 0 ; $i < count($files['name']); $i++)
                {
                    $tmp = $files['tmp_name'][$i];
                    $filename = $files['name'][$i];
                    move_uploaded_file($tmp, 'uploads/'.$filename);
                    $zip->addFile('../uploads/'.$filename); 
                }
                $zip->close();
                savetodbforposts($file_name_zip, $broadcastchannel ,$forumname,$_POST['title'],$_POST['description'],$conn);
          }
          else{
                    $files = $_FILES['upload'];
                    $tmp = $files['tmp_name'][0];
                    $filename = $files['name'][0];
                    move_uploaded_file($tmp, '../result/'.$filename);
                    savetodbforposts($filename, $broadcastchannel ,$forumname,$_POST['title'],$_POST['description'],$conn);
          }
        }else{
          // error provide username
          echo "sorry no file";
        }
    }else{
            // provide file
            echo "sorry no name";
          }

    echo "done" ;
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
    <title>Kirangle | Upload Post</title>
  </head>

  <style>
     body{
        background: #373737
      }
    .login-form-2{
      /* height: 498px; */
     
      padding: 5%;
      background:#2d2d2d ;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 .display-3{
    
    color: #373737;
    margin-bottom: 30px;
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
  margin-top: 2.0rem;
    
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
  .display-3{
    color: #777575
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
  height: 510px;
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
.custom-select option{
  padding: 7px;
  border-radius: 3px;
 }
  
  .input-group-text{
    color: #e4e4e4;
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
         <input  style = "width: 100%;" class = "lead showurl" type="text" name="" id="myInput" value="<?php echo (isset($_GET['m']))?$_GET['m']  :'';?>" >
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
    <nav class="navbar navbar-expand-lg  navbar-dark navbar-ct-black   fixed-bottom">
      <div class="container">
  <a class="navbar-brand check" href="index.php" style="
    font-size: 25px;
    font-weight: 400;
"><?php echo $_SESSION['broadcastchannel']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" >
    <span class="navbar-toggler-icon"></span>
  </button>
     

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
                    
                    <li class="nav-item  ">
                          <a href="forum-main.php" class="nav-link">
                              <i style = "color:#1084FF" class="pe-7s-users"></i>
                                    <p><?php echo $_GET['forum']; ?></p></p>
                                        </a>
                      </li>  
                       <li class="nav-item active ">
                          <a href="forum-main.php" class="nav-link">
                               <i  class="pe-7s-paperclip"></i>
                                  <p>Upload </p>
                          </a>
                    </li> 
                        <li class="nav-item  ">
                          <a href="forum-main.php" class="nav-link">
                               <i class="pe-7s-folder"></i>
                                  <p>Shared Files</p>
                          </a>
                    </li> 
                     
                    <li class="nav-item  ">
                          <a href="forum-main.php" class="nav-link">
                               <i class="pe-7s-home"></i>
                                  <p>Home</p>
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
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 login-form-1">
                   <p id = "flag"class="lead">Please post your file here.</p>
                 <div class="wrapper">
                  <form action="forum-upload-post.php?forum=<?php echo $_GET['forum']; ?>" enctype="multipart/form-data" method="post">
                    <div class="file-upload">
                      <input name="upload[]" type="file" multiple="multiple" class="upload up" id="up"  />
                      <span id = "check">
                         <i class="fa fa-arrow-up"></i>
                      </span>
                     
                    </div>
              
                      
                  </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 login-form-2 mb-5 pb-4 ">
                 <h1 class="display-3">Upload to <?php echo $_GET['forum']; ?> </h1>
                
                    
                     
                        <div class="form-group">
                            <input type="text" disabled name = "forumname" class="form-control" placeholder="Forum Name *" value="<?php echo $_GET['forum']; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" disabled name = "broadcastchannel" class="form-control" placeholder="Channel Name *" value="<?php echo $_SESSION['broadcastchannel']; ?>" />
                        </div>

                         <div class="form-group">
                            <input type="text" required  class="form-control" name ="title" placeholder="Title *"  />
                        </div>
                         <div class="form-group">
                          <textarea name="description" class="form-control" placeholder="Description *" ></textarea>
                            <!-- <input type="text" required name = "broadcastchannel" class="form-control" placeholder="Title *"  /> -->
                        </div>

                        <div class="form-group">
                            <input name = "upload_post_to_forum" type="submit" class="btnSubmit" value="Upload Now" />
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>











  




       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    <!-- Optional JavaScript -->
    <script>
    
     $(document).on('change','#up', function(){
            var names = [];
            var length = $(this).get(0).files.length;
                for (var i = 0; i < $(this).get(0).files.length; ++i) {
                    names.push($(this).get(0).files[i].name);
                }
                // $("input[name=file]").val(names);

                if(length>2){
                  var fileName = names.join(', ');
                }
                document.getElementById('flag').innerHTML = length +" Files selected!";
                  document.querySelector('.file-upload').style.color = "#fff";
                  document.querySelector('.file-upload').style.background = "#373737";

                   document.querySelector('#check').setAttribute("class","fa-stack");
                   document.querySelector('#check').innerHTML = '<strong class="fa-stack-1x">'+length+'</strong>';
                  
                  
                  
                
                
       });

       if ($('.display-3').width() > $('login-form-2').width()) {
        $('.display-3').css('font-size', '3rem');
    }

    function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  document.location.href = 'home';
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