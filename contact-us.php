<?php

$filename="C:\\wamp64\\www\\earthquake\\file.txt";


if(isset( $_POST['submit'])){
    $name= $_POST['name'];
    $email=$_POST['email'];
     $subject=$_POST['subject'];
     $message=$_POST['message'];
    
    if($name!='' && $email!=''&& $subject!=''&& $message!=''){
        
        
        
        $data= array('name'=> $name,'email'=> $email,'subject'=> $subject,'message'=> $message);
        
        
        $serializedData = json_encode( $data );
      
           file_put_contents( $filename,$serializedData ,FILE_APPEND );
        file_put_contents( $filename,PHP_EOL,FILE_APPEND );
           
 
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Earthquake</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
   <div class="container-fluid header" >
       <div class="container">
           
           
           
           
           
           
           
           
           
           
           <h1 class="clr tac"><b>EARTHQUAKE</b> </h1>
           <p class="clr tac">Bangladesh</p>
           
           
           
           
           
           
           
           
           
           
           
           
           
           
       </div>
   </div>
   
   <div class="container-fluid nav-bar">
       <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light bg-light nav-bar">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav  m-auto">
      <li class="nav-item active">
        <a class="nav-link pr-5 clrb" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-5 clrb" href="portfolio.php"><b>About Earthquake</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-5 clrb" href="about-us.php"> <b>About us</b></a>
      </li>
      <li class="nav-item dropdown pr-5 ">
        <a class="nav-link dropdown-toggle clrb" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b>Analysis</b>
        </a>
        <div class="dropdown-menu bgd" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Division-Wise-Prediction.php">Place Wise Analysis</a>
          <a class="dropdown-item" href="time-wise-prediction.php">Time Wise Analysis</a>
          
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link pr-4 clrb" href="contact-us.php"> <b>Contact us</b></a>
      </li>
    </ul>
  </div>
</nav>
 
       </div>
   </div>
   
   <div class="container-fluid cbg ">
    <div class="container">
      
      
      
      
      
      <div class="col-md-12 mt-5">
          <div class="row">
              <div class="col-md-2">
 
              </div>
              <div class="col-md-8 prediction-form mt-4 text-center">
                
               <h1 class="tac clr-black mt-4">Contact Us</h1>

    <form action="" method="post">
                <label for="name" class="mt-3">NAME</label> <br>
                  <input class="username" type="text" name="name" ><br>
                  <label for="email" class="mt-3">EMAIL</label><br>
                  <input class="username mt-4" type="email" name="email"><br>
                   <label for="subject" class="mt-3">SUBJECT</label><br> 
                  <input class="username mt-4" type="text" name="subject" ><br>
                  <label for="message" class="mt-3">MESSAGE</label><br>
                  <textarea class="username mt-4" name="message"> </textarea><br>
        <button  class="sub mt-4 mb-5" type="submit" name="submit" >SENT </button>
                  </form>
                 
              </div>
              <div class="col-md-2">
                  
              </div>
              
          </div>
      </div>
         </div>
    
   
</div> 
      
   

   
<!--<div class="container-fluid cbg ">
    <div class="container">
       
<form action="/action_page.php" class="tac">
  
 <h1 class="clrb">CONTACT US</h1>
  <input type="text" name="fname" placeholder=" Name" class="cp mt-5"><br>
  <input type="text" name="lname" placeholder="Email" class="cp  mt-3"><br>
   <input type="text" name="lname" placeholder="Subject" class="cp mt-3"><br>
   <textarea  placeholder="message" name="" id="" cols="50" rows="5" class=" cpt mt-3"></textarea> <br>
   
  <input type="submit" value="Submit" class="cpr mt-3">
</form>


  
  
   
    </div>
    
   
</div> //-->
   
   
<div class="container-fluid footer">
   <div class="container">
      <div class="col-md-12">
         <div class="row">
             <div class="col-md-6 tal">
                 <h1 class="clrb">Earthquake</h1>
             </div>
              <div class="col-md-6 mr">
               <div class="icon tar">
                    <a> <i class="fab fa-facebook-square fa-2x  pl-5 bordr"></i></a> 
                    <a> <i class="fab fa-youtube-square fa-2x  pl-5 bordr"></i></a> 
                    <a> <i class="fab fa-linkedin-in fa-2x  pl-5 bordr"></i></a> 
                    <a><i class="fab fa-github-alt fa-2x  pl-5 bordr"></i></a> 
               
               
                
               </div>
            
                 
             </div>
         </div>
      </div>
      <hr>
     
      <div class="col-md-12">
         <div class="row">
            <div class="col-md-6">
                <p class="clrb">©2018 Earthquake limited</p>
            </div>
            <div class="col-md-6">
                <ul class="nav justify-content-end">

  <li class="nav-item">
    <a class="nav-link pl-2 clrb" href="contact-us.php">Contact us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  pl-2 clrb" href="about-us.php">About us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  pl-2 clrb" href="Index.php">Home</a>
  </li>
</ul>
            </div>
         </div>
          
      </div>
       
   </div>
    
</div>
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>