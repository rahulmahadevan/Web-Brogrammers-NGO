<?php
    require 'include/database.php';

    $fullname= @$_POST['fname'];
  $age = @$_POST['age'];
    $email = @$_POST['email'];
  $phone= @$_POST['phone'];
  $address = @$_POST['add'];
 $gender=@$_POST['gender'];
$dob= @$_POST['dob'];
 $id=  @$_POST['id'];
                
try{
    
    $query = "INSERT INTO userdetails VALUES('$fullname','$phone','$email','$address','$age','$gender','$dob','$id','Approved','volunteer')";
     $result=$db->prepare($query);
    $result->execute();
    if($result){
       
        header("location:index.php?from=submit");
    }
}catch (PDOException $ex){
                        
    die("Error " . $ex->getMessage());

}
  

?>