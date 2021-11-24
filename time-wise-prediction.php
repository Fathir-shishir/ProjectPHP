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
      
      <h3 class="tac clrb">SELECT YEAR FOR CALCULATE THE PERCENTAGE OF EARTHQUAKE</h3>
      
      
      <div class="col-md-12">
          <div class="row">
             
             
              <div class="col-md-5 date-six-col mt-5">
               
                
                 
        <form action="" method="post">       
<select class="select date-wid" name="date" id="date">
 <option value="" disabled selected >Select Year</option>
  <option value="2016" echo >2016</option>
  <option value=2017>2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
 
</select>
                  <button class="date-sub"> submit</button>
              </form>   
               
              </div>
              
              <hr>
              <div class="col-md-7  mt-5">
               
                 
                  <?php
                  
                  if(isset($_POST['date']) && $_POST['date'] !='' ){
                      
                      
                      if($_POST['date']==2016){
                         echo'
                         
                         
                         
                         <div class="col-md-12">
                          <div class="row">
                          <div class="col-md-6">
                         <table border=4px  > 
                         
                         
                
                <thead>
                 <th> Real Date of 2016</th>
                 <th> Magnitude</th>
                 
                </thead>
                    <tr>
                   
                    <td> 04/01/16</td>
                    <td> 6.6</td>
                   
                    
                    </tr>
                     <tr>
                   
                    <td>05/02/16 </td>
                    <td> 5.1</td>
                  
                    
                    </tr>
                     <tr>
                   
                    <td> 22/02/16</td>
                    <td>5.1 </td>
                   
                    
                    </tr>
                     <tr>
                   
                    <td> 07/03/16</td>
                    <td>4.4 </td>
                  
                    
                    </tr>
                       <tr>
                   
                    <td> 13/03/16</td>
                    <td> 4.3</td>
                 
                    
                    </tr>
                       <tr>
                   
                    <td> 05/04/16</td>
                    <td> 4.6</td>
                   
                    
                    </tr>
                       <tr>
                   
                    <td>13/04/16 </td>
                    <td> 7.2</td>
                   
                    
                    </tr>
                       <tr>
                   
                    <td> 07/05/16</td>
                    <td>4.2 </td>
                   
                    
                    </tr>
                       <tr>
                   
                    <td>12/05/16 </td>
                    <td>4.8 </td>
                   
                    
                    </tr>
                       <tr>
                   
                    <td> 17/05/16</td>
                    <td>3.5 </td>
                    
                    
                    </tr>
                   
                       <tr>
                   
                    <td>22/06/16 </td>
                    <td>4.9 </td>
                   
                    
                    </tr>
                       <tr>
                   
                    <td> 27/06/16</td>
                    <td>4.9 </td>
                   
                    
                    </tr>
                       <tr>
                   
                    <td>03/07/16 </td>
                    <td> 4.5</td>
                  
                    
                    </tr>
                       <tr>
                   
                    <td>27/07/16 </td>
                    <td> 4.9</td>
                   
                    
                    </tr>
                       <tr>
                   
                    <td>23/08/16 </td>
                    <td>5.0 </td>
                 
                    
                    </tr>
                       <tr>
                   
                    <td> 24/08/16</td>
                    <td> 6.8</td>
                   
                    
                    </tr>
               
                       <tr>
                   
                    <td>07/10/16 </td>
                    <td>4.2 </td>
                  
                    
                    </tr>
                       <tr>
                   
                    <td>19/10/16 </td>
                    <td> 4.6</td>
                 
                    
                    </tr>
                       <tr>
                   
                    <td> 23/10/16</td>
                    <td>4.4 </td>
                   
                    
                    </tr>
                       <tr>
                   
                    <td>15/11/16 </td>
                    <td> 4.6</td>
                    
                    
                    </tr>
                    
                    
                    </table>
                         </div>
                         
                    <div class="col-md-6 ">
                    
                    <table border=4px>
                    <thead>
              
                 <th> Predicted date of 2016</th>
               
                 <th> Magnitude</th>
                </thead>
                
                
                <tr>
                   
                    
                    <td>16/01/16 </td>
                    <td>4.6 </td>
                    
                    </tr>
                     <tr>
                   
                   
                    <td> 02/02/16</td>
                    <td> 4.94</td>
                    
                    </tr>
                     <tr>
                   
                 
                    <td>20/02/16 </td>
                    <td> 4.61</td>
                    
                    </tr>
                     <tr>
                   
                   
                    <td>08/03/16 </td>
                    <td> 5.04</td>
                    
                    </tr>
                       <tr>
                   
                  
                    <td>26/03/16 </td>
                    <td>4.73 </td>
                    
                    </tr>
                  
                       <tr>
                   
                  
                    <td>12/04/16 </td>
                    <td> 4.98</td>
                    
                    </tr>
                       <tr>
                   
                   
                    <td>30/04/16 </td>
                    <td>4.95 </td>
                    
                    </tr>
                    
                       <tr>
                   
                    
                    <td>17/05/16 </td>
                    <td>4.80 </td>
                    
                    </tr>
                       <tr>
                   
                   
                    <td> 03/06/16</td>
                    <td> 4.98</td>
                    
                    </tr>
                       <tr>
                   
                  
                    <td> 21/06/16</td>
                    <td> 4.81</td>
                    
                    </tr>
                  
                       <tr>
                   
                    
                    <td> 08/07/16</td>
                    <td> 4.78</td>
                    
                    </tr>
                       <tr>
                   
                   
                    <td>26/07/16 </td>
                    <td> 4.94</td>
                    
                    </tr>
                       <tr>
                   
                   
                    <td>12/08/16 </td>
                    <td> 4.86</td>
                    
                    </tr>
                       <tr>
                   
                   
                    <td> 30/08/16</td>
                    <td>4.85 </td>
                    
                    </tr>
                       <tr>
                   
                    
                    <td> 16/09/16</td>
                    <td>4.85 </td>
                    
                    </tr>
                       <tr>
                   
                   
                    <td>03/10/16 </td>
                    <td>4.79 </td>
                    
                    </tr>
                       <tr>
                   
                   
                    <td>21/10/16 </td>
                    <td>4.84 </td>
                    
                    </tr>
              
                       <tr>
                   
                  
                    <td>07/11/16 </td>
                    <td>4.7 </td>
                    
                    </tr>
                 
                    </table>
                    </div>
                    </div>
                    </div>
                    
                    
                         ';
                          
                          
                      }
                     if($_POST['date']==2018){
                         
                echo'
                
                <div class="col-md-12">
                          <div class="row">
                           <div class="col-md-6">
                <table border=4px> 
                
                <thead>
                 <th> Real Date of 2018</th>
                 <th> Magnitude</th>
                 
                </thead>
                    <tr>
                   
                    <td> 07/01/18</td>
                    <td> 5.5</td>
                 
                    
                    </tr>
                     <tr>
                   
                     <td> 20/01/18</td>
                    <td> 4.5</td>
                    
                    
                    </tr>
                       <tr>
                   
                    <td> 30/01/18</td>
                    <td> 4.2</td>
                  
                    
                    </tr>
                        <tr>
                   
                     <td> 15/03/18</td>
                    <td> 4.3</td>
                   
                    
                    </tr>
                        <tr>
                   
                    <td> 02/04/18</td>
                    <td> 4.9</td>
                   
                    
                    </tr>
                        <tr>
                   
                      <td> 24/04/18</td>
                    <td> 5.2</td>
                    
                    
                    </tr>
                        <tr>
                   
                   <td> 06/05/18</td>
                    <td> 4.6</td>
                    
                    
                    </tr>
                        <tr>
                   
                     <td> 06/06/18</td>
                    <td> 4.8</td>
                   
                    
                    </tr>
                        <tr>
                   
                     <td> 11/06/18</td>
                    <td> 4.9</td>
                  
                    
                    </tr>
                        <tr>
                   
                     <td> 17/06/18</td>
                    <td> 4.6</td>
                   
                    
                    </tr>
                    
                         <tr>
                   
                     <td> 26/06/18</td>
                    <td> 4.6</td>
                    
                    
                    </tr>
                    
                         <tr>
                   
                     <td> 13/07/18</td>
                    <td> 4.7</td>
                  
                    
                    </tr>
                    
                         <tr>
                   
                     <td> 28/08/18</td>
                    <td>5.0</td>
                   
                    
                    </tr>
                    
                             <tr>
                   
                     <td> 08/09/18</td>
                    <td>4.5</td>
                   
                    
                    </tr>
                     <tr>
                   
                     <td> 12/09/18</td>
                    <td>5.3</td>
                   
                    
                    </tr>
                      <tr>
                   
                     <td> 25/09/18</td>
                    <td>4.7</td>
                 
                    
                    </tr>
                    </table>
                
                            </div
                            
                            <div class="col-md-6">
                            
                    
                         
                          
                <table border=4px  > 
                
                <thead>
                
                 <th> Predicted date of 2018</th>
                 <th> Magnitude</th>
                </thead>
                    <tr>
                   
                   
                    <td> 15/01/18</td>
                    <td> 4.7</td>
                    
                    </tr>
                     <tr>
                   
                    
                    <td> 02/02/18</td>
                    <td> 4.89</td>
                    
                    </tr>
                       <tr>
                   
                   
                    <td> 20/02/18</td>
                    <td> 4.83</td>
                    
                    </tr>
                        <tr>
                   
                    
                    <td> 10/03/18</td>
                    <td> 4.54</td>
                    
                    </tr>
                        <tr>
                   
                    
                    <td> 28/03/18</td>
                    <td> 4.76</td>
                    
                    </tr>
                        <tr>
                   
                   
                    <td> 15/04/18</td>
                    <td> 4.59</td>
                    
                    </tr>
                        <tr>
                   
                  
                    <td> 03/05/18</td>
                    <td> 4.71</td>
                    
                    </tr>
                        <tr>
                   
                   
                    <td> 21/05/18</td>
                    <td> 4.69</td>
                    
                    </tr>
                        <tr>
                   
                     
                    <td> 08/06/18</td>
                    <td> 4.6</td>
                    
                    </tr>
                        <tr>
                   
                     
                    <td> 26/06/18</td>
                    <td> 4.59</td>
                    
                    </tr>
                    
                         <tr>
                   
                    
                    <td> 14/07/18</td>
                    <td> 4.68</td>
                    
                    </tr>
                    
                         <tr>
                   
                    
                    <td> 01/08/18</td>
                    <td> 4.48</td>
                    
                    </tr>
                    
                         <tr>
                   
                     
                    <td> 19/08/18</td>
                    <td> 4.61</td>
                    
                    </tr>
                    
                             <tr>
                   
                     
                    <td> 06/09/18</td>
                    <td>4.53</td>
                    
                    </tr>
                     <tr>
                   
                     
                    <td> 24/09/18</td>
                    <td>4.44</td>
                    
                    </tr>
                      <tr>
                   
                     <td> 25/09/18</td>
                    <td>4.7</td>
                 
                    
                    </tr>
                    </table>
                            </div>
                            </div>
                            <div>
                
                
                
                
                ';
                       
                          
                     }
                        if($_POST['date']==2017){
                           echo'
                           
                           <div class="col-md-12">
                          <div class="row">
                          <div class="col-md-6">
                          <table border=4px  > 
                
                <thead>
                 <th> Real Date of 2017</th>
                 <th> Magnitude</th>
                 
                </thead>
                    <tr>
                   
                    <td> 03/01/17</td>
                    <td> 5.5</td>
                    
                    
                    </tr>
                    
                       <tr>
                   
                    <td> 12/02/17</td>
                    <td> 4.4</td>
                    
                    
                    </tr>
                        <tr>
                   
                     <td> 24/02/17</td>
                    <td> 5.0</td>
                    
                    
                    </tr>
                        <tr>
                   
                    <td> 21/03/17</td>
                    <td> 3.9</td>
                    
                    
                    </tr>
                        <tr>
                   
                      <td> 25/04/17</td>
                    <td> 4.6</td>
                    
                    
                    </tr>
                        <tr>
                   
                   <td> 28/04/17</td>
                    <td> 4.1</td>
                    
                    
                    </tr>
                        <tr>
                   
                     <td> 18/05/17</td>
                    <td>4.0</td>
                    
                    
                    </tr>
                        <tr>
                   
                     <td> 19/06/17</td>
                    <td> 4.6</td>
                    
                    
                    </tr>
                        <tr>
                   
                     <td> 03/08/17</td>
                    <td> 5.1</td>
                    
                 
                    
                         <tr>
                   
                     <td> 11/08/17</td>
                    <td> 4.1</td>
                    
                    
                    </tr>
                    
                         <tr>
                   
                     <td> 21/08/17</td>
                    <td>4.9</td>
                    
                    
                    </tr>
                    
                             <tr>
                   
                     <td> 07/09/17</td>
                    <td>4.2</td>
                    
                    
                    </tr>
                     <tr>
                   
                     <td>03/10/17</td>
                    <td>4.5</td>
                    
                    
                    </tr>
                     
                         <tr>
                   
                     <td>08/11/17</td>
                    <td>4.7</td>
                    
                    
                    </tr>
                        <tr>
                   
                     <td>20/11/17</td>
                    <td>4.9</td>
                    
                    
                    </tr>
                         <tr>
                   
                     <td>11/12/17</td>
                    <td>4.7</td>
                    
                    
                    </tr>
                         <tr>
                   
                     <td>23/12/17</td>
                    <td>4.6</td>
                    
                    
                    </tr>
                          <tr>
                   
                     <td>29/12/17</td>
                    <td>5.0</td>
                    
                    
                    </tr>
                    </table>
                          </div>
                          
                          <div class="col-md-6">
                          <table border=4px> 
                
                <thead>
                 
                 <th> Predicted date of 2017</th>
                 <th> Magnitude</th>
                </thead>
                    <tr>
                   
                    
                    <td> 12/01/17</td>
                    <td> 3.86</td>
                    
                    </tr>
                     <tr>
                   
                     
                    <td> 29/01/17</td>
                    <td> 4.7</td>
                    
                    </tr>
                       <tr>
                   
                    
                    <td> 16/02/17</td>
                    <td> 5.1</td>
                    
                    </tr>
                        <tr>
                   
                     
                    <td> 05/03/17</td>
                    <td> 4.57</td>
                    
                    </tr>
                        <tr>
                   
                    
                    <td> 10/04/17</td>
                    <td> 4.19</td>
                    
                    </tr>
                        <tr>
                   
                      
                    <td> 27/04/17</td>
                    <td> 4.5</td>
                    
                    </tr>
                        <tr>
                   
                   
                    <td> 15/05/17</td>
                    <td> 5.13</td>
                    
                    </tr>
                        <tr>
                   
                     
                    <td> 01/06/17</td>
                    <td> 4.69</td>
                    
                    </tr>
                        <tr>
                   
                     
                    <td> 19/06/17</td>
                    <td> 4.67</td>
                    
                    </tr>
                        <tr>
                   
                     
                    <td> 07/07/17</td>
                    <td> 4.86</td>
                    
                    </tr>
                    
                         <tr>
                   
                     
                    <td> 24/07/17</td>
                    <td> 4.45</td>
                    
                    </tr>
                    
                         <tr>
                   
                     
                    <td> 11/08/17</td>
                    <td> 5.1</td>
                    
                    </tr>
                    
                         <tr>
                   
                    
                    <td> 28/08/17</td>
                    <td> 5.00</td>
                    
                    </tr>
                    
                             <tr>
                   
                     
                    <td> 15/09/17</td>
                    <td>4.48</td>
                    
                    </tr>
                     <tr>
                   
                     
                    <td> 03/10/17</td>
                    <td>4.96</td>
                    
                    </tr>
                      
                         <tr>
                   
                     
                    <td> 07/11/17</td>
                    <td>4.84</td>
                    
                    </tr>
                        <tr>
                   
                     
                    <td> 24/11/17</td>
                    <td>5.1</td>
                    
                    </tr>
                         <tr>
                   
                     
                    <td> 12/12/17</td>
                    <td>4.54</td>
                    
                    </tr>
                         <tr>
                   
                     
                    <td> 30/12/17</td>
                    <td>4.74</td>
                    
                    </tr>
                       
                    </table>
                          </div>
                          </div>
                          </div>
                          
                           
                           
                           
                
                
                '; 
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