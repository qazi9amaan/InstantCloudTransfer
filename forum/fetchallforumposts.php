
<?php


    include('../connection.php');

   

     session_start();

      
    
    if(isset($_GET['search']))
    {
        if(!empty($_GET['search'])){
            $forum =$_GET['forum'];
            $search =$_GET['search'];
            $sql = "SELECT * FROM forumposts WHERE forumname= '$forum' and title like '%$search%' ORDER BY uploaddate DESC";
            
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){                
                    while($row = mysqli_fetch_array($result)){

              echo   '<div class="card mb-4">
                        <div  class="sunny-morning-gradient  color-block mb-3  z-depth-1" src="http://placehold.it/750x300" alt="Card image cap">';

                          if(isset($_SESSION['status']))
                          {
                             if($_SESSION['broadcastchannel']=== $row['uploadedby'])
                              {
                                  echo '<i data-toggle="tooltip" id = "editpostbtn" data-description = "'.$row['description'].'"  data-editpostid = "'.$row['id'].'" title="Edit your post" class="fa fa-pencil-square-o mt-3 ml-2 mr-3" aria-hidden="true"></i>
                                    <i data-toggle="tooltip"  id = "deletepostbtn" data-deletepostid = "'.$row['id'].'" title="Delete your post" class="fa fa-trash mt-3 ml-4" aria-hidden="true"></i> 
                                         ';
                              }
                          }


                        echo '
                                <h1 id = "rowtitle" class=" responsive display- text-center text-uppercase  jumbotron vertical-center  ">'.$row['title'].'</h1>
                        </div> 
                        <div class="card-body">
                            <p  class="lead card-text y-overflow-hidden ">'.$row['description'].' </p>
                          <a id = "downloadbtn" href="downloadfielhelper.php?file='.$row['filename'].'" class="btn  peach-gradient float-right ">  Download </a>';

                         
                          
             echo '
                     </div>
                        <div class="card-footer text-muted"> Posted on '.$row['uploaddate'].' by  <a href="#">'
                        .$row['uploadedby'].'</a>
                        </div>
                      </div>';
                            
                    
                    }
                }
            }

        }
    }else{
        if(isset($_POST['showforumposts'])){
                $forumname =$_POST['forumname'];
                $sql = "SELECT * FROM forumposts WHERE forumname= '$forumname' ORDER BY uploaddate DESC";

                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){                
                        while($row = mysqli_fetch_array($result)){
                            

                                
             echo   '<div class="card mb-4">
                        <div  class="sunny-morning-gradient  color-block mb-3  z-depth-1" src="http://placehold.it/750x300" alt="Card image cap">';

                          if(isset($_SESSION['status']))
                          {
                             if($_SESSION['broadcastchannel']=== $row['uploadedby'])
                              {
                                  echo '<i data-toggle="tooltip" id = "editpostbtn" data-description = "'.$row['description'].'"  data-editpostid = "'.$row['id'].'" title="Edit your post" class="fa fa-pencil-square-o mt-3 ml-2 mr-3" aria-hidden="true"></i>
                                    <i data-toggle="tooltip"  id = "deletepostbtn" data-deletepostid = "'.$row['id'].'" title="Delete your post" class="fa fa-trash mt-3 ml-4" aria-hidden="true"></i> 
                                         ';
                              }
                          }


                        echo '
                                <h1 id = "rowtitle" class=" responsive display- text-center text-uppercase  jumbotron vertical-center  ">'.$row['title'].'</h1>
                        </div> 
                        <div class="card-body">
                            <p  class="lead card-text y-overflow-hidden ">'.$row['description'].' </p>
                          <a href="downloadfielhelper.php?file='.$row['filename'].'" class="btn  peach-gradient float-right ">  Download </a>';

                         
                          
             echo '
                     </div>
                        <div class="card-footer text-muted"> Posted on '.$row['uploaddate'].' by  <a href="#">'
                        .$row['uploadedby'].'</a>
                        </div>
                      </div>';
                                
                        
                        }
                    }
                else{
                  echo   ' <div class="card mb-4">
          <div  class="
               src="http://placehold.it/750x300" alt="Card image cap">
          <h1 id = "rowtitle" class=" responsive display- text-center text-uppercase  jumbotron vertical-center  ">
              Sorry No Posts Available!
          </div> 
         
        </div>';
                }}
        }
    }




      if(isset($_POST['showtopics'])){
                $forumname =$_POST['forumname'];
                $sql = "SELECT DISTINCT title FROM forumposts WHERE forumname= '$forumname' ORDER BY uploaddate DESC
                ";

                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){                
                        while($row = mysqli_fetch_array($result)){
                                echo '<li>
                    <a id = "sortbytitle" data-title ="'.$row['title'].'" href="#">'.$row['title'].'</a> 
                  </li>';
                        }
                    }
                }
        }


if(isset($_POST['showthoughts'])){
                $id =$_POST['forum_id'];
                $sql = "SELECT  * FROM forumowner WHERE id= '$id' 
                ";

                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){                
                        while($row = mysqli_fetch_array($result)){
                                echo $row['thought'];;
                        }
                    }else{
                      echo "No thoughts yet?";
                    }
                }
        }



         if(isset($_POST['sortbttile'])){
                $forumname =$_POST['forum'];
                $title =$_POST['title'];
                $sql = "SELECT * FROM forumposts WHERE forumname= '$forumname' and title= '$title' ORDER BY uploaddate DESC";

                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){                
                        while($row = mysqli_fetch_array($result)){
                             echo   '<div class="card mb-4">
                        <div  class="sunny-morning-gradient  color-block mb-3  z-depth-1" src="http://placehold.it/750x300" alt="Card image cap">';

                          if(isset($_SESSION['status']))
                          {
                             if($_SESSION['broadcastchannel']=== $row['uploadedby'])
                              {
                                  echo '<i data-toggle="tooltip" id = "editpostbtn" data-description = "'.$row['description'].'"  data-editpostid = "'.$row['id'].'" title="Edit your post" class="fa fa-pencil-square-o mt-3 ml-2 mr-3" aria-hidden="true"></i>
                                    <i data-toggle="tooltip"  id = "deletepostbtn" data-deletepostid = "'.$row['id'].'" title="Delete your post" class="fa fa-trash mt-3 ml-4" aria-hidden="true"></i> 
                                         ';
                              }
                          }


                        echo '
                                <h1 id = "rowtitle" class=" responsive display- text-center text-uppercase  jumbotron vertical-center  ">'.$row['title'].'</h1>
                        </div> 
                        <div class="card-body">
                            <p  class="lead card-text y-overflow-hidden ">'.$row['description'].' </p>
                          <a href="downloadfielhelper.php?file='.$row['filename'].'" class="btn  peach-gradient float-right ">  Download </a>';

                         
                          
             echo '
                     </div>
                        <div class="card-footer text-muted"> Posted on '.$row['uploaddate'].' by  <a href="#">'
                        .$row['uploadedby'].'</a>
                        </div>
                      </div>';
                        }
                    }
                }
        }
    
          if(isset($_POST['deleteforum'])){



              
          }     







?>