<?php
$host="localhost";
$user="root";
$pass=""; 
$db="tecno_tect";
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
    echo"تم الاتصال بقواعد البيانات";
}else{
    echo 'error database';
}
?>