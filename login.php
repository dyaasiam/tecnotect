 <?php
// session_start();
include "admin/dp_con.php";

if(isset($_POST['uname']) && isset($_POST['password'])){
  function validate($data){
    $data =trim($data);
    $data =stripcslashes($data);
    $data =htmlspecialchars($data);
    return $data;
  }
  $uname=validate($_POST['uname']);
  $pass=validate($_POST['password']);
  if(empty($uname)){
    header("location: ind.php?error=خطا اسم المستخدم");
    exit();
  }elseif (empty($pass)){
    # code...
    header("location: ind.php?error=خطا كلمة المرور");
    exit();
  }else {
   $sql ="SELECT * FROM user WHERE user_name='$uname' AND password='$pass'";
   $reslt=mysqli_query($con,$sql);
   if(mysqli_num_rows($reslt)==1){
     $row = mysqli_fetch_assoc($reslt);
     if($row['user_name'] === $uname && $row['password'] === $pass){
       $_SESSION['user_name'] = $row['user_name'];
       $_SESSION['name'] = $row['name'];
       $_SESSION['id'] = $row['id'];
       header("location: admin/dashbored.php");
      exit(); 
      
     }
     else {
      header("location: ind.php?error=خطأ اسم المستخدم أو كلمة المرور ");
      exit(); 
     }
    }
     else {
      header("location: ind.php?error= خطأ اسم المستخدم أو كلمة المرور");
      exit(); 
     }
   }
  }


else{
  header("location: admin/dashbored.php");
  exit();
}
?>
<?php

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>
  <html>
   <nav class="navbar navbar-dark bg-primary">
      <p>مرحبا استاذ<?php $_SESSION['name']?></p>
  <a href='ind.php' class='lought'> <p> تسجيل الخروج </p></a>
  
</nav>
  <html>

<?php
}else {
  header("location:admin/dashbord.php");
  exit();
}

?> 





