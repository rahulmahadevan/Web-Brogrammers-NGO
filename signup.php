
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
  
            
     <br>
<div class="col-md-4 offset-md-4 col-sm-6 offset-sm-4">
    <h2>Sign Up Now</h2>
    <br>
    <form method="POST" action="signup_submit.php" class="needs-validation" novalidate>
        <div class="form-group">
        <label for="uname">Fullname:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter fullname" name="fname" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Phone :</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter phone number" name="phone" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Email :</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter email" name="email" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Address:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter Address" name="add" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Age:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter Age" name="age" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">DOB :</label>
        <input type="text" class="form-control" id="uname" placeholder="dd/mm/yyyy" name="dob" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Gender:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter Gender" name="gender" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="exampleFormControlSelect1">Select ID </label>
        <select class="form-control" id="exampleFormControlSelect1">
        <option>Aadhar </option>
        <option>PAN </option>
        <option>Driving license </option> 
        </select>
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="uname" placeholder="Enter number" name="id" required>
        </div>
        <div class="form-group form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" required> I agree on  <a href="#">T&C</a>..
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Check this checkbox to continue.</div>
        </label>
        </div>
        <input type="submit" class="btn btn-primary"/>
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