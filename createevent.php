
<?php
   
   require 'include/database.php';
  
   try{
  
     
  }catch (PDOException $ex){
  
      die("Error " . $ex->getMessage());
  
  }
  
  
  ?>
  
  <html>
      <head>
          <title>Create Event ::</title>      

          <?php require 'include/links.php'; ?>
    
      </head>
      <body style="font-family:Poppins; ">
 

  
            
     <br>
<div class="col-md-4 offset-md-4 col-sm-6 offset-sm-4">
    <h2>Create Event</h2>
    <br>
    <form action="add-event-submit.php" method="POST" class="needs-validation" novalidate>
        <div class="form-group">
        <label for="uname">Event Name:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter fullname" name="eventname" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Start Date :</label>
        <input type="text" class="form-control" id="uname" placeholder="dd/mm/yyyy" name="startdate" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Months :</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter number of months" name="months" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Target :</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter Monthly target" name="target" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Funds collected:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter Amount" name="collected" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Number of Volunteers :</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter count" name="volunteer" required>
        <div class="valid-feedback">Valid.</div>
        </div>
        <div class="form-group">
        <label for="uname">Description :</label>
        <textarea rows="3" cols="10" type="text" class="form-control" id="uname" placeholder="Enter Desc." name="desc" required></textarea>
        <div class="valid-feedback">Valid.</div>
        </div>
            <input type="submit" value="Submit" class="btn btn-primary">
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