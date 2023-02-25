<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  @media screen and (max-width: 600px) {
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
    margin-top:50px ;
    margin-left: 80px;
    margin-right:80px ;
    margin-bottom: 40px;
   background-color: bisque;
    background-size: cover;
  }
  #uname{
    margin-top: 30px;
    margin-bottom: 40px;
  }
  #pwd{
    margin-bottom: 30px;
  }
  p{
    margin-top: 30px;
    font-size: large;
  }
  </style>
</head>
<body>
    <div class="card">
        <div>
            <h2>Welcome Back</h2>
            <h1><strong> Stay tuned here</strong></h1>
        </div> 
    <div class="row"> 
        <div class="column"> 
 
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
            class="img-fluid" alt="Phone image" height="500px" weidth="600px">

            
</div>

<div class="column"> 
   
  <form action="./checklogin.php" method="post" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="Email"></label>
      <input type="email" class="form-control" id="em" placeholder="Enter email" name="em" required >
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">please enter valid Email.</div>
    </div>

    <div class="form-group">
      <label for="pswd"></label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required >
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">this is required.</div>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        <p class="demo">Don't have an account? <a href="http://localhost/phpcodes/profile.html"
        class="link-Warning">Sign Up</a> here </p>
  </form>
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
