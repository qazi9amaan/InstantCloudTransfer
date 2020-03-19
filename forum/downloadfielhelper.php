<?php
 if(isset($_GET['file'])){
  $filename=$_GET['file'];
   $files = scandir("../result");
   
      for($a=1;$a<count($files);$a++)
      {
          if($files[$a] ===  $filename )
          {
            
          
          $_SESSION['downloadavailable']=1;
          $file = ("result/$filename");
           $filetype=filetype($file);

          
           $filenamefinal=basename($file);
           echo  $filenamefinal;
           sleep(3);

           header("Location:../ty.php?file=".$filenamefinal);


           
          }
      }
}


?>