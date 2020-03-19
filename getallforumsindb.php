<?php
    
    include('connection.php');

    if(isset($_GET['searchforum']))
    {
        if(!empty($_GET['search'])){
            
            $search =$_GET['search'];
            $sql = "SELECT * FROM forumowner WHERE  forumname like '%$search%' ORDER BY id DESC";
            
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){                
                    while($row = mysqli_fetch_array($result)){
                        
                            
                                echo   '<div class="card visiter ">
	                                <div class="card-body ">
	                                    <p class="card-text ">  &nbsp;&nbsp;<span data-id1"'.$row['id'].'
	                                    "  class = "lead">'.$row['forumname'] .' (  </span>
										 <small class="lead"> '.$row['forumtopic'].' )</small> 

	                                    <br>&nbsp;&nbsp;<span class = "lead">Desc : '.$row['forumdesc'] .'</span>
	                                        
	                                   
	                                        <br>&nbsp;&nbsp;<span class = "lead">Privacy : '.$row['sharingmode'] .'</span>
	                                        
	                                    </p>

										<a  href="forum/forumviewhelper.php?id=" id = "'.$row['id'].'" class=" stretched-link "></a>
	                                </div>
                            </div>';
                            
                    
                    }
                }
            }

        }
    }else{
        if(isset($_POST['showallforums'])){
              
                $sql = "SELECT * FROM forumowner  ORDER BY id DESC";

                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){                
                        while($row = mysqli_fetch_array($result)){
                            
                                
                         echo   '<div class="card visiter">
	                                <div class="card-body ">
	                                    <p class="card-text ">  &nbsp;&nbsp;<span data-id1"'.$row['id'].'
	                                    "  class = "lead">Forum : '.$row['forumname'] .'  </span><br> &nbsp;
										 <small class="lead"> Topic : '.$row['forumtopic'].' </small> 

	                                    <br>&nbsp;&nbsp;<span class = "lead">Desc : '.$row['forumdesc'] .'</span>
	                                        
	                                 
	                                        <br>&nbsp;&nbsp;<span class = "lead">Privacy : '.$row['sharingmode'] .'</span>
	                                                 
	                                    </p>

										<a href="forum/forumviewhelper.php?id='.$row['id'].'&forum='.$row['forumname'].'" class=" stretched-link "></a>

	                                </div>
                            </div>';
                                

                        
                        }
                    }
                }
        }
    }
                    

?>