<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bot.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/logo.png">   <!------------- يغير شعار الصفحة------------->
    <title>
        تسجيل دخول الإدارة
    </title>
    <style>
        #erro{
            color:red;
        }
    </style>
  </head>
  <body>
    <!---------------------------------------- القائمة  ----------------------------------------------->
    <div id="index"></div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: relative;">
        <div class="container-fluid" >
          <a class="navbar-brand" href="#">TECNO TECT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup" dir="rtl">
            <div class="navbar-nav">
              <a class="nav-link " aria-current="page" href="index.html">الرئيسية</a>
              <a class="nav-link " href="student registration.php" >إلتحق بنا</a>
             
              <a class="nav-link" href="about.html">من نحن</a>
              <a class="nav-link active" href="ind.php">تسجيل دخول المعلم</a>
              <a class="nav-link" href="conceted.php">اتصل بنا</a>
            </div>
       
           

          </div>
        </div>
      </nav>
      <!-----------------------------------نهاية القائمة------------------------------------------------>
      <!----------------------------------------- loginصفحة---------------------------->
     
      <div class="container" dir="rtl">
          <div class="row content"> <!---------------loginصورة------------------------->
              <div class="col-md-6 mb-4">
                  <img src="img/login.jpg" class="img-fluid" alt="login">
              </div>
              <div class="col-md-6">
                <h3 class="signin-text mb-3"> تسجيل الدخول </h3>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label>اسم المستخدم</label>
                        <input type="text" name="uname" placeholder="اسم المستخدم" class="form-control">
                    </div>
                    <div class="form-group">
                     <label>كلمة المرور</label>
                     <input type="password" name="password" placeholder="كلمة المرور"class="form-control"> 
                 </div>
                 <!------------------ كود الخطأ------------------------------>
                 <?php
                      if(isset($_GET['error'])){?>
                      <p id="erro"><?php echo $_GET['error']; ?> </p>
                      <?php }?>
                 <!------------------انتهاء كود الخطأ- ----------------------------->

        
                 <button class="btn btn-class"> تسجيل الدخول </button>
                </form>
               </div> 
          </div>
         
        </div>

      </div>

      <footer id="fotr">
      <div class="container" dir="rtl">
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
              <a href="index.html">الرئيسية</a>
            </h6>
            </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
              <a href="student registration.php"> إلتحق بنا </a>
            </h6>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
              <a href="about.html">من  نحن</a>
            </h6>
          </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
              <a href="ind.php">لوحة تحكم الإدارة</a>
            </h6>
                </div>
          <div class="col-md-2 mb-3">
            <h6 class="text-uppercase font-weight-bold">
              <a href="conceted.php">تواصل معنا</a>
            </h6>
          </div>
        </div>
        <hr class="rgba-white-light" style="margin: 0 15%;">
        <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
        <div class="col-md-8 col-12 mt-5">
            <h3 style="line-height: 1.7rem">
            مركز تكنوتك التعليمي  
          </h3>
          <img src="img/logo.png" alt="" id="foter-logoo">
          </div>
          <div class="col-md-8 col-12 mt-5">
            <p style="line-height: 1.7rem">
              غزة-تل الهوى- مقابل مستشفى القدس -مبنى البشائر الخيرية 
          </p>
          </div>
        </div>
        <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
      </div>
      <!-- Footer Links -->
      
      <!-- Copyright -->
      <!-- <div class="footer-copyright text-center py-3">تم التطوير بواسطة @ -->
      </div>
      <!-- Copyright -->
      
      </footer>
      
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>