
<?php
   
   require 'include/database.php';
  
   try{
  
     
  }catch (PDOException $ex){
  
      die("Error " . $ex->getMessage());
  
  }

  ?>
  
  <html>
      <head>
          <title>Admin ::</title>      

          <?php require 'include/links.php'; ?>
          <style>


.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
  
      </head>
      <body style="font-family:Poppins; ">
      <div class="sidenav">
          <a><br></a>
        <a href="#about">Events</a>
        <a href="#services">Requests</a>
        <a href="#clients">Fund history</a>
        </div>
  
           
  
        <div class="jumbotron" style="margin-left:140px">
            <div class="row">
                <div class="col-lg-4" style="display:inline-block; padding:20px; text-align:center">
                    <h4><?php 
                         try{
                            $query="SELECT COUNT(eventid) FROM events";
                            $result=$db->prepare($query);
                            $result->execute();
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                            echo $row['COUNT(eventid)'];
                        }catch (PDOException $ex){
                        
                            die("Error " . $ex->getMessage());
                        
                        }
                    ?></h4>
                    <p>Completed Events</p>
                </div>
                <div class="col-lg-4" style="display:inline-block;padding:20px; text-align:center ">
                    <h4>INR 5000</h4>
                    <p>Funds Collected</p>
                </div>
                <div class="col-lg-4" style="display:inline-block;padding:20px; text-align:center ">
                    <h4><?php 
                         try{
                            $query="SELECT COUNT(email) FROM userdetails WHERE status='Approved' AND role='volunteer'";
                            $result=$db->prepare($query);
                            $result->execute();
                            $row = $result->fetch(PDO::FETCH_ASSOC);
                            echo $row['COUNT(email)'];
                        }catch (PDOException $ex){
                        
                            die("Error " . $ex->getMessage());
                        
                        }
                    ?></h4>
                    <p>Active Volenteers</p>
                </div>
            </div>
            </div>

        <button class="btn btn-outline-dark" type="submit" style="margin-left: 200px;"><a style="text-decoration:none;" href="createevent.php">Create Event</a></button>
        <button class="btn btn-outline-dark" type="submit" >Requests</button>
        <br>
        <hr>
          <?php require 'include/footer.php'; ?>
      
      </body>
  </html>