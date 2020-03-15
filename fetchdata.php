<?php
    $conn = mysqli_connect('localhost', 'root', '' ,'instantsharing');

    if(isset($_GET['search']))
    {
        if(!empty($_GET['search'])){
            $channel =$_GET['user'];
            $search =$_GET['search'];
            $sql = "SELECT * FROM storage WHERE broadcastchannel= '$channel' and roomnumber like '%$search%'";
            
            if($result = mysqli_query($conn, $sql)){
                if(mysqli_num_rows($result) > 0){                
                    while($row = mysqli_fetch_array($result)){
                        
                            
                                echo   '<div class="card ">
                            <div class="card-body ">
                                &nbsp; <small class="lead">'.$row['uploaddate'].'</small>  
                                <span  style = "float:right;" data-toggle="tooltip" title="Downloads" 
                                class="badge badge-primary badge-pill ">'.$row['downloadcount'].'</span>

                                <p class="card-text "> &nbsp;&nbsp;<span data-id1"'.$row['bid'].'
                                "  class = "lead">Room no. : '.$row['roomnumber'] .' </span> &nbsp; &nbsp;
                                
                                <i class="fa fa-clipboard ml-1 " id = "btn_copy" data-urlid = "'.$row['bid'].'" data-toggle="tooltip" title="Show url"  style="font-size: 22px; color:#fff;" aria-hidden="true">
                                </i><input type= "text" id = "url'.$row['bid'].'"  value = "'.$row['url'].'" hidden/>

                                <br>&nbsp;&nbsp;<span class = "lead">Filename :'.$row['filename'] .'</span>
                                    
                                <i class="fa fa-trash-o "data-toggle="tooltip" title="Delete broadcast" name = "btn_delete" 
                                    id="btn_delete" data-id2="'.$row['bid'].'"  style="font-size: 22px;" aria-hidden="true"> </i>
                                    <br>&nbsp;&nbsp;<span class = "lead">Mode : '.$row['sharingmode'] .'</span>
                                    <i class="fa fa-refresh  ml-1 " id = "btn_toggle" data-id3 = "'.$row['bid'].'" data-mode = "'.$row['sharingmode'] .'"data-toggle="tooltip" title= "Toggle mode"  style="font-size: 22px;" aria-hidden="true">
                                    </i>               
                                </p>
                            </div>
                        </div>';
                            
                    
                    }
                }
            }

        }
    }else{
        if(isset($_POST['user'])){
                $channel =$_POST['user'];
                $sql = "SELECT * FROM storage WHERE broadcastchannel= '$channel' ";

                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){                
                        while($row = mysqli_fetch_array($result)){
                            
                                
                                    echo   '<div class="card ">
                                <div class="card-body ">
                                    &nbsp; <small class="lead">'.$row['uploaddate'].'</small>  
                                    <span  style = "float:right;" data-toggle="tooltip" title="Downloads" 
                                    class="badge badge-primary badge-pill ">'.$row['downloadcount'].'</span>

                                    <p class="card-text "> &nbsp;&nbsp;<span data-id1"'.$row['bid'].'
                                    "  class = "lead">Room no. : '.$row['roomnumber'] .' </span> &nbsp; &nbsp;
                                    
                                    <i class="fa fa-clipboard ml-1 " id = "btn_copy" data-urlid = "'.$row['bid'].'" data-toggle="tooltip" title="Show url"  style="font-size: 22px; color:#fff;" aria-hidden="true">
                                    </i><input type= "text" id = "url'.$row['bid'].'"  value = "'.$row['url'].'" hidden/>

                                    <br>&nbsp;&nbsp;<span class = "lead">Filename :'.$row['filename'] .'</span>
                                        
                                    <i class="fa fa-trash-o "data-toggle="tooltip" title="Delete broadcast" name = "btn_delete" 
                                        id="btn_delete" data-id2="'.$row['bid'].'"  style="font-size: 22px;" aria-hidden="true"> </i>
                                        <br>&nbsp;&nbsp;<span class = "lead">Mode : '.$row['sharingmode'] .'</span>
                                        <i class="fa fa-refresh  ml-1 " id = "btn_toggle" data-id3 = "'.$row['bid'].'" data-mode = "'.$row['sharingmode'] .'"data-toggle="tooltip" title= "Toggle mode"  style="font-size: 22px;" aria-hidden="true">
                                        </i>               
                                    </p>
                                </div>
                            </div>';
                                
                        
                        }
                    }
                }
        }
    }
                    

?>