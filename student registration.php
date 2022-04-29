<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bot.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/registan.css">
    <link rel="icon" href="img/logo.png">   <!------------- يغير شعار الصفحة------------->
    <title>
      إلتحق الأن
    </title>
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
              <a class="nav-link active" href="student registration.php" >إلتحق بنا</a>
              
              <a class="nav-link" href="about.html">من نحن</a>
              <a class="nav-link" href="ind.php">تسجيل دخول المعلم</a>
              <a class="nav-link" href="conceted.php">اتصل بنا</a>


            </div>
        

          </div>
        </div>
      </nav>
      <!-----------------------------------نهاية القائمة------------------------------------------------>
      <!---------------------------------------صور المركز----------------------------------------->
      <h3 class="photo">صور المركز</h3>
      <center>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="    width: 70%;
" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider1.jpg" class="d-block w-100 lg-4"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider4.jpg" class="d-block w-100 lg-4" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider3.jpg" class="d-block w-100 lg-4" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider5.jpg" class="d-block w-100 lg-4" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider6.jpg" class="d-block w-100 lg-4" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</center>
<!-------------------------------------------------------------------------------------------->
      <h3 class="photo">طلب الإلتحاق</h3>
      <div class="container" dir="rtl">
          <div class="row content">
          <!-- <h3 class="signin-text"> تسجيل الدخول </h3> -->
          <div class="col-md-6">
          <div class="form-group">
             <label>اسم الطالب</label>
            <input type="text" name="" placeholder="اسم الطالب" class="form-control">
          </div>
          <div class="form-group">
             <label>عنوان الطالب</label>
            <input type="text" name="" placeholder="عنوان الطالب" class="form-control">
          </div>
          
          </div> 

          <div class="col-md-6">
          <div class="form-group">
             <label>رقم ولى أمر الطالب</label>
            <input type="text" name="" placeholder="رقم ولى أمر الطالب" class="form-control">
          </div>
          
          <label>الصف الدراسي</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-g ">
           <option selected>اختيار صف الطالب</option>
           <option value="1">الصف الأول</option>
            <option value="2">الصف الثاني</option>
           <option value="3">الصف الثالث</option>
           <option value="4">الصف الرابع</option>
           <option value="5">الصف الخامس</option>
          <option value="6">الصف السادس</option>
          <option value="7">الصف السابع</option>
          <option value="8">الصف الثامن</option>
          <option value="9">الصف التاسع</option>
          <option value="10">الصف العاشر</option>
         <option value="11">الصف الحادى عشر</option>
            </select>        
          </div>
          <center> <br>
        <button type="button" class="btn">طلب التسجيل</button>
        </center>
        </div>
      </div>

    <!------------------------------------------الفوتر----------------------------------------------->
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