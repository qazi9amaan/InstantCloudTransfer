
<?php 
    session_start();
    if(isset($_GET['logout']))
    {
        session_destroy();
        header("location:index.php");
    }


    if(isset($_GET['delete']))
    {
         $_SESSION['downloadavailable']=0;
         sleep(2);
        header("location:index.php");
    }

?>
