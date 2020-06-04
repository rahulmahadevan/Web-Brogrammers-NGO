<?php
    require 'include/database.php';

    $eventname= @$_POST['eventname'];
    $start = @$_POST['startdate'];
  $months= @$_POST['months'];
  $target = @$_POST['target'];
 $collected=@$_POST['collected'];
$volunteer= @$_POST['volunteercount'];
 $isended=false;
 $desc=@$_POST['desc'];             
try{
    
    $query = "INSERT INTO events(name,startdate,eventperiod,monthlytarget,amountcollected,hasended,description,volunteercount) VALUES('$eventname','$start','$months','$target','$collected','$isended','$desc','$volunteer')";
     $result=$db->prepare($query);
    $result->execute();
    if($result){
       
        header("location:admin-actions.php");
    }
}catch (PDOException $ex){                      
    die("Error " . $ex->getMessage());
}
  

?>