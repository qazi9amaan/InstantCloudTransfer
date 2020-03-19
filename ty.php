<?php
   session_start();


   if($_SESSION['downloadavailable']==0)
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
     <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

     <link href="css/ct-navbar.css" rel="stylesheet" /> 
     
    


    <title>Kirangle|Url Shortner</title>
  </head>
  <style>
html { font-family: Saira Extra Condense;
  font-size: 1rem; }

@media (min-width: 576px) {
    html { font-size: 1.2rem; }
}
@media (min-width: 768px) {
    html { font-size: 1.3rem; }
}
@media (min-width: 992px) {
    html { font-size: 1.5rem; }
}
@media (min-width: 1200px) {
    html { font-size: 2rem; }
}


.fa:hover{
  transform: scale(1.5);
  font-size: 60px;
}
.fa{
 
 transition: transform .2s; 
  color: #333;
}
.lead{
  font-size: 32px;
}
a{
  text-decoration: none;
  color: #333;
}
a:hover{
  text-decoration: none;
  color: #333;


}
header
{
 height: 100vh;

 /* flex-box thing */
 display: flex;
 flex-direction: column;
 align-items: center;
 justify-content: center;
 background-size: cover; 
 margin-bottom: 30px;
}

*{
  font-family: 
}

#start{background :#333;
color:#fff;
height: 100%}


body,html {
  width: 100%;
  height: 100%;
  background: #333; 
}
.tile {
  height: 100%;
  width: 100%;
  position: relative;
  background-color: #ffc300;
}
#a {
  background-color: #333;
}

round-button {
  width: 25%;
}

.round-button-circle {
  width: 100%;
  height: 0;
  padding-bottom: 100%;
  border-radius: 50%;
  border: 10px solid #98a1a4;
  overflow: hidden;
}

.round-button-circle {
  width: 100%;
  height: 0;
  padding-bottom: 100%;
  border-radius: 50%;
  border: 10px solid #98a1a4;
  overflow: hidden;
  background: transparent;
  box-shadow: 0 0 3px gray;
}

.round-button-circle:hover {
  background: #30588e;
}

.round-button a {
  display: block;
  float: left;
  width: 100%;
  padding-top: 50%;
  padding-bottom: 50%;
  line-height: 1em;
  margin-top: -0.5em;
  text-align: center;
  color: #e2eaf3;
  font-family: Verdana;
  font-size: 1.2em;
  font-weight: bold;
  text-decoration: none;
}

 input {
  background: #333;
  color: #ffc300;
    width: 25rem;
    border: 1px solid #ffc300;
    padding: 12px;
}
#a h1{
  color: #ffc300;
    
}

.display-4{
  font-weight: 100;
  font-size: 3.9rem;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}


.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #4CAF50;
  color: white;
}

.round {
  border-radius: 50%;
}
 input[type=submit]:hover{
  background: #ffc300;
  color: #333;

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
.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

#info:hover{
  
  cursor: pointer;
}

.lead{
    color:#ffc300;
}

.yellow{
  background: #ffc300;
  color: #333;
}
.yellow:hover{
  background: #333;
  color: #ffc300;
}

.align-middle{
  margin-top: -45px;
}
  </style>
  <body>

   

  

 
<div class='tile' id='a'>
<br><br>
<div class="align-middle  ">
  <div class="text-center">
    <h1 center class = "display-2"> Thankyou! </h1>
      <h1 style = "text-align: center"class = "display-5"> Your download link is ready! </h1>
      <p style = "text-align: center"class="lead">For your privacy this link is designed to close automatically after <span id="timer"></span> please download fast!</p>
       <a download   onclick = "window.close();" target="_blank" id = "result" href="result/<?php echo $_GET['file']; ?>" class="btn btn-default yellow"> Download </a>
      
     
  </div>
</div>
 
</div>

   





       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
      <script>
       







var n = 15;
$('#timer').html(n)
       function goback() {

          
$('#timer').attr('href',"aa");
          $.ajax({  
                     url:"logout.php",  
                     method:"POST",  
                     data:{
                       delete:true,
                      },  
                     dataType:"text",  
                     success:function(data){  
                        
                         window.close();

                     }  
                });  



}

setTimeout(goback, 15000);
setInterval(function(){
n--;
$('#timer').html(n)

  }, 1000);




        
        
         
         

</script>

<script>
   
</script>



 
  </body>
</html>