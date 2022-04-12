@extends("layouts.master")

@section("title")
About us | MyWebsite
@endsection

@section("content")

<!DOCTYPE html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no"
    />
    <title>OneCard</title>
    <link rel="shortcut icon" type="img/png" href="./images/fav.png" />
    <link rel="stylesheet" href="./css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" href="./css/swiper.min.css" />
    <link rel="stylesheet" href="./css/line-awesome.css" />
    <link rel="stylesheet" href="./css/select2.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <link rel="stylesheet" href="./css/main.css" />
  </head>

  <body class="noHeader">
    <!-- Start preloader -->
    <div class="progress-bar">
      <span class="bar"><span class="progress"></span></span>
    </div>
    <!-- End preloader -->

    <div class="user-form-body">
      <div class="user-form-cont">
        <!-- Start Header -->
        <div class="small-head">
          <a href="index.php" class="logo">
            <img src="images/logo.svg" class="img-fluid" />
          </a>
          <a href="login" class="back-shopping">
            <i class="las la-arrow-right"></i>
            رحوع
          </a>
        </div>
        <!-- End Header -->

        <!-- Start Body -->
        <div class="small-body">
          <h1 class="small-body-title">اعادة تعيين كلمة المرور</h1>
          <h6 class="small-body-subtitle">
            فضلا قم بإدخال بريدك الإلكتروني المسجل وستصلك بها رابط إعادة تعيين
            كلمة المرور
          </h6>
          <form class="log-form">
            <div class="form-group">
              <div class="input-cont-icon">
                <i class="las la-envelope input-icon"></i>
                <input
                  type="email"
                  class="form-control"
                  placeholder="البريد الإلكتروني"
                />
              </div>
            </div>
            <a href="reset" class="primary-btn submit-btn">
              ارسال الرابط
            </a>
            <!-- <button type="submit" class="primary-btn submit-btn">
              ارسال الرابط
            </button> -->
          </form>
        </div>
        <!-- End Body -->

        <!-- Start footer -->
        <div class="small-footer">
          <p class="copyrights">© ون كارد 2022 - جميع الحقوق محفوظة</p>
          <div class="maarof-vat">
            <a href="#!" class="maarof">
              <img src="./images/icons/maroof.png" class="img-fluid" />
            </a>
            <a href="#!" class="vat">
              <img src="./images/icons/vat.svg" class="img-fluid" />
            </a>
          </div>
        </div>
        <!-- End footer -->
      </div>
      <div class="user-form-img">
        <img src="images/user-banners/forget.jpg" class="img-fluid" />
      </div>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/swiper.min.js"></script>
    <script src="./js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
