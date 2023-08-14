<?php

    $name=$_POST['name'];
    $mail=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];

    $con=mysqli_connect('localhost','root','','website');
    $sql="INSERT INTO register(Name,Email,Age,gender,password) values('$name','$mail','$age','$gender','$password')";
    $r=mysqli_query($con,$sql);
    if($r){
        echo "code executed";
    }
    else{
        echo "not save";
    }

?>

