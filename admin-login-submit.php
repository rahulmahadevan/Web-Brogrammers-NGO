<?php
    require 'include/database.php';
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $query="SELECT email,password FROM logindetails WHERE role='Admin'";
    echo $query;
    $result=$db->prepare($query);
    $result->execute();
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if($email==$row['email']){
        if($pass=$row['password']){
            header("location:admin-actions.php");
        }else{
            echo "Wrong Password";
        }
    }else{
        echo "Invalid email";
    }
?>