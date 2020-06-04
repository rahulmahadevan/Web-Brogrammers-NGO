
<?php
   
   require 'include/database.php';
  
   try{
  
     
  }catch (PDOException $ex){
  
      die("Error " . $ex->getMessage());
  
  }
  
  
  ?>
  
  <html>
      <head>
          <title>Demo ::</title>      

          <?php require 'include/links.php'; ?>
          <style>
            /* Make the image fully responsive */
            .carousel-inner img {
                width: 100%;
                height: 100%;
            }
            </style>
      </head>
      <body style="font-family:Poppins; ">
      <marquee style='background-color:blue'>Current Events</marquee>
          <?php require 'include/header.php'; ?>
  
 
<div class="container">
  <h2>Your Small Contribution Today Leads to Great Future Tomorrow</h2>
  <hr>
  <form action="/action_page.php" class="needs-validation" novalidate>
    <div class="form-group">
      <label for="uname">Fullname :</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Fullname" name="fname" required>
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group">
      <label for="uname">Email :</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Email" name="email" required>
      <div class="valid-feedback">Valid.</div>
    </div>
  
    <div class="form-group">
      <label for="pwd">Phone :</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter Phone" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">Amount (INR) :</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Amount" name="amount" required>
      <div class="valid-feedback">Valid.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on <a href="#">T&C</a>.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
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

          <?php require 'include/footer.php'; ?>
      
      </body>
  </html>