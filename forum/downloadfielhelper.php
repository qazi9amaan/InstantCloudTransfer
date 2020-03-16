<?php
 if(isset($_GET['file'])){
  $filename=$_GET['file'];
   $files = scandir("../result");
   
      for($a=1;$a<count($files);$a++)
      {
          if($files[$a] ===  $filename )
          {
            
          
           $file = ("../result/$filename");
           $filetype=filetype($file);
           $filename=basename($file);
           header ("Content-Type: ".$filetype);
           header ("Content-Length: ".filesize($file));
           header ("Content-Disposition: attachment; filename=".$filename);
           readfile($file);


           
          }
      }
}


?>