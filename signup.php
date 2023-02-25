<?php
session_start();
if(isset($_SESSION['Email']))
{
?>

 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
   .form-control{
    width:220px;
    height: 60px;
    text-align: center;
    margin-left: 200px;
   }

   * {
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial, Helvetica, sans-serif;
  }
  
  /* Float four columns side by side */
  .column {
    float: left;
    width: 50%;
    padding: 0 0px;
  }
  
  /* Remove extra left and right margins, due to padding */
  .row {margin: 0 -5px;}
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive columns */
  @media screen and (max-width: 200px) {
    .column {
      width: 80%;
      display: block;
      margin-bottom: 20px;
    }
  }
  
  
  /* Style the counter cards */
  .card {
    box-shadow: 0 15px 20px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: purple;
    margin-top:25px ;
    margin-left: 40px;
    margin-right:40px ;
    margin-bottom: 25px;
   background-color: bisque;
           
  }
 

  h1{
        
        font-size:50px;
        margin-bottom:30px ;
       }

       p{
      
        font-size:large; 
       }


      #em{
        margin-right: 80px;
        margin-left: 20px;
        margin-top: 20px;
      }

      #pswd{
        margin-right: 20px;
        margin-left: 250px;
        margin-top: -60px;
        margin-bottom: 10px;
      }

      #rpswd{
        margin-right: 80px;
        margin-left: 20px;
        margin-top: -60px;
        margin-bottom: 10px;
      }

      #phone{
        margin-right: 20px;
        margin-left: 250px;
        margin-top: -60px;
        margin-bottom: 10px;
      }

      #DOB{
        margin-right: 80px;
        margin-left: 20px;
        margin-top: -60px;
        margin-bottom: 10px;
      }
       
      #city{
        margin-right: 20px;
        margin-left: 250px;
        margin-top: -60px;
        margin-bottom: 10px;
      }

      #state{
        margin-right: 80px;
        margin-left: 20px;
        margin-top: -60px;
        margin-bottom: 10px;
      }

      #co{
        margin-right: 20px;
        margin-left: 250px;
        margin-top: -60px;
        margin-bottom: 10px;
      }

      #pincode{
        margin-right: 80px;
        margin-left: 20px;
        margin-top: -50px;
        margin-bottom: 10px;
      }
    #invalid{
      margin-left: 10px;
      margin-top: 20px;
      margin-bottom: 20px;
      }
     
  </style>
</head>
<body>

<div>
<form action="logout.php" method="POST">
<?php
echo "Welcome"." ".$_SESSION['Email'];
?>
<br>
<input type="submit" name="submit" value="Logout">
</form>
</div>
    <div class="card">
        <div>
                <h1><strong>Let's Sign Up here</strong></h1>
        </div> 
    <div class="row"> 
        <div class="column"> 
 
            <img src="https://media.istockphoto.com/id/483731108/photo/technology-and-coffee-on-a-wooden-table.jpg?b=1&s=170667a&w=0&k=20&c=_CO1HjY597xwNn7SASXmYE92TMKHcSGC-A-ORKY0uOE="
            class="img-fluid" alt="Phone image" height="600px" weidth="600px">
</div>

<div class="column"> 
   
    
        
                 
  <form action="./register.php" method="post"  id="form-inline" class="needs-validation" novalidate >
        
        
        <div class="form-group">
                <label for="Email"></label>
                <input type="email" class="form-control" id="em" placeholder="Enter email" name="em" required >
                <div class="valid-feedback"></div>
                <div class="invalid-feedback" id="invalid"></div>
              </div>
      
     
     
    <div class="form-group">
        <label for="pswd"></label>
        <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required >
        <div class="valid-feedback"></div>
        <div class="invalid-feedback">this is required.</div>
        <div>
      
  
     
      <div class="form-group">
        <label for="pswd"></label>
        <input type="password" class="form-control" id="rpswd" placeholder="confirm password" name="rpswd" required >
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
      </div>
    
      <div class="form-group">
        <label for="number"></label>
                    <input required type="number"  class="form-control" id="phone" placeholder="Number" name="age">
        <div class="valid-feedback"></div>
        <div class="invalid-feedback">this is required.</div>
      </div>
      
</div>

   
      <div class="form-group">
        <label for="date"></label>
        <input  required type="Date" class="form-control" id="DOB" placeholder="DOB" name="DOB">
        <div class="valid-feedback"></div>
        <div class="invalid-feedback"></div>
      </div>
      
    
     
    <div class="form-group">
        <label for="country"></label>
        <input  required type="text"  class="form-control" id="co" placeholder="country" name="co">
        <div class="valid-feedback"></div>
      <div class="invalid-feedback">this is required.</div>
    </div>
    
    
    
    
    <div class="form-group">
    <label for="text"></label>
     <input  required type="text" class="form-control" id="state" placeholder="state" name="state">
     <div class="valid-feedback"></div>
     <div class="invalid-feedback"></div>
   </div> 
   
     
       
     <div class="form-group"> 
     <label for="text"></label>
     <input required  type="text" class="form-control" id="city" placeholder="City" name="city">
     <div class="valid-feedback"></div>
     <div class="invalid-feedback">this is required.</div>
   </div>
   
   
   
      
     <div class="form-group"> 
     <label for="number"></label>
     <input required type="number" class="form-control" id="pincode" placeholder="pincode" name="pincode">
     <div class="valid-feedback"></div>
     <div class="invalid-feedback"></div>
   </div>

   

   
   
    <input type="submit" class="btn btn-primary" value="Submit" name="submit"></input>
    <p class="demo">Already have an account <a href="http://localhost/shopping/tutorial10/index.php"
        class="link-Warning">Login</a> here </p>
  </form>
</div>
</div>
</div>
</div>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
<?php
}
else
{
	header('location:login.php');
}
?>