
<?php
   
   require 'include/database.php';
  
   try{
  
     
  }catch (PDOException $ex){
  
      die("Error " . $ex->getMessage());
  
  }
  
  
  ?>
  
  <html>
      <head>
          <title>Brogrammers-NGO</title>      

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
          <?php require 'include/header.php'; if(isset($_GET['from'])){
              ?>

              <script>
                  alert('Registration sucessfull');
              </script><?php
          } ?>
  
            
            <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
            <div class="carousel-item active">
             <a href="index.php"><img src="images/NGO1.jpg" alt="Los Angeles" width="1100" height="500"></a>
            </div>
            <div class="carousel-item">
                <img src="images/NGO2.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/NGO3.jpg" alt="New York" width="1100" height="500">
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
            </div>

            <div class="jumbotron">
            <h2>Brogrammers</h2>
            <p>Brogrammers is one of India’s largest independent and youth volunteer non-profit organisations.
Brogrammers was founded on August 15, 2006 by a small group of friends with a strong passion to change society today and build a better India for tomorrow. The organisation provides youngsters a platform to serve the society and bridges the gap between the educated and the uneducated.
Our volunteers educate and mentor children from orphanages, slum and village community centres across the country to give them a better future, which will benefit them as well as our country. The learning experience is mutual – our volunteers gain perspective and the experience to mould themselves into tomorrow’s leaders.
</p>
            </div>
            <div class="jumbotron">
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
    

          <?php require 'include/footer.php'; ?>
      
      </body>
  </html>