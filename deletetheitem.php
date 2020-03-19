<?php  
 include('connection.php'); 

 if(isset($_POST['id'])){
    $sql = "DELETE FROM storage WHERE bid = '".$_POST["id"]."'";  
    if(mysqli_query($connect, $sql))  
    {  
        echo 'Data Deleted';  
    }  
 }
 
 if(isset($_POST['multishareid']) && isset($_POST['mode'])){
    
    $sql = "UPDATE storage SET sharingmode = 'single' WHERE bid = '".$_POST["multishareid"]."'"; 
    if($_POST['mode']=='single'){
        $sql = "UPDATE storage SET sharingmode = 'multiple' WHERE bid = '".$_POST["multishareid"]."'"; 
    }
    
    if(mysqli_query($connect, $sql))  
    {  
        echo 'Data updated';  
    }  
 }
 
 
 ?>