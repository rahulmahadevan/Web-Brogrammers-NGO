
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
            <div class="posMargin">
                <div class="row">
                        <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-4">
                            
                    <form method="POST" action="admin-login-submit.php"  class="was-validated">
                            <div class="form-group">
                            <label for="uname">Email :</label>
                            <input type="Email" class="form-control" id="uname" placeholder="Enter email" name="email" required>
                            <div class="valid-feedback">Valid.</div>
                            <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                            </div>
                            <div class="form-group">
                            <label for="pwd">Password :</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
                            <div class="valid-feedback">Valid.</div>
                            <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                            </div>
                            <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary">
                        </form>

                        </div>
                    </div>
            </div>
    <br>

          <?php require 'include/footer.php'; ?>
      
      </body>
  </html>