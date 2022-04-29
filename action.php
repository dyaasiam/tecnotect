<?php
include "admin/dp_con.php";
$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$messag=$_POST['messag'];
    $sqli="insert into contacted(username,email,contact,messag) values('$username','$email','$contact','$messag')";
    $reseult=mysqli_query($con,$sqli);
    if($reseult){
        header('location:conceted.php');

    }
    

?>  