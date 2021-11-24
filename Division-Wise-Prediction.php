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
        <a class="nav-link pr-5 clrb" href="about-us.php"> <b>About Us</b></a>
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
        <a class="nav-link pr-4 clrb" href="contact-us.php"> <b>Contact Us</b></a>
      </li>
    </ul>
  </div>
</nav>
 
       </div>
   </div>
   
<div class="container-fluid cbg ">
    <div class="container">
      
      <h3 class="tac clrb">SELECT PLACE TO ANALYSIS OF EARTHQUAKE</h3>
      
      
      <div class="col-md-12">
          <div class="row">
             
             
              <div class="col-md-6 date-six-col mt-5">
               
                
                 
        <form action="" method="post">       
<select class="select date-wid" name="place" id="date">
 <option value="" disabled selected >Select place</option>
  <option value="Bogra">Bogra Fault Zone</option>
  <option value=Sylhet>Sylhet Fault Zone </option>
  <option value="Chittagong">Chittagong Fault Zone </option>
  <option value="Tripura">Tripura Fault Zone</option>
  
  <option value="Dauki">Dauki Fault Zone  </option>

 
</select>
                  <button class="date-sub" name="submit"> submit</button>
              </form>   
               
              </div>
              
              <hr>
              <div class="col-md-6  mt-5">
               
                 <?php
                   if(isset($_POST['place']) && $_POST['place'] !='' ){
                       
                       if($_POST['place']=="Sylhet"){
                           echo"
                          
                          <ul>
                          <li>Sylhet </li>
                          <li>Sunamganj </li>
                           <li>Netrokona </li>
                            <li>Habiganj </li>
                            <li>Moulvibazar </li>
                          </ul>
                          <h3>This districts are located in SYLHET FAULT ZONE and Sunamganj is the most risky place in this fault zone.</h3>
                           
                           ";
                           
                   }
                       if($_POST['place']=="Bogra"){
                           echo"
                          
                          <ul>
                          <li>Bogra </li>
                          <li>Jamalpur </li>
                           <li>sirajgonj </li>
                            <li>gaibandha </li>
                            <li>natore  </li>
                          </ul>
                          <h3>This districts are located in BOGRA FAULT ZONE.Sirajgonj is the most risky place in this fault zone.</h3>
                           
                           ";
                           
                   }
                       if($_POST['place']=="Tripura"){
                           echo"
                          
                          <ul>
                          <li>Brammanbaria </li>
                          <li>Comilla </li>
                           <li>Narshindi </li>
                            <li>Narayanganj </li>
                            <li>Chandpur   </li>
                          </ul>
                          <h3>This districts are located in TRIPURA  FAULT ZONE. Here Brammanbaria and Comilla is the most risky district..</h3>
                           
                           ";
                           
                   }
                        if($_POST['place']=="Dauki"){
                           echo"
                          
                          <ul>
                          <li>Netrokona </li>
                          <li>Sherpur </li>
                           <li>Mymenshing </li>
                            <li>Jamalpur  </li>
                            
                          </ul>
                          <h3>This districts are located in DAUKI  FAULT ZONE. Here Brammanbaria and Comilla is the most risky district..</h3>
                           
                           ";
                           
                   }
                       if($_POST['place']=="Chittagong"){
                           echo"
                          
                          <ul>
                          <li>Khagrachari </li>
                          <li>Rangamati </li>
                           <li>Chittaganj </li>
                            <li>Bandarban  </li>
                            <li>Cox’s bazar   </li>
                            
                          </ul>
                          <h3>This districts are located in CHITTAGONG  FAULT ZONE. Here Khagrachari  and Rangamati  is the most risky district.</h3>
                           
                           ";
                           
                   }
                  
                   }
                  ?>
                  
              </div>
              
             
              
          </div>
      </div>
      
      
      
  
      </div> 
      
      
       
     

  
   
    
    
   
</div> 
 
   
   
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
   
   <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>