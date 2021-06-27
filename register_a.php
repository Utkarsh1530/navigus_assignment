<?php
include("db.php");
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $t_or_s=$_POST['t_or_s'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql= "INSERT INTO `lwu`.`signup` (`name`, `phone`, `t_or_s`, `email`, `password`) VALUES ('$name', '$phone', '$t_or_s', '$email', '$password');";
    echo "Registerd successfully";
    
    if($con->query($sql)==true){
        echo"successful";
        header("Location: index.php");
    }
    else{
        echo"error:$sql<br> $con->error";
    }
    
    }
   

?>
