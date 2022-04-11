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
          <a href="index" class="logo">
            <img src="images/logo.svg" class="img-fluid" />
          </a>
        </div>
        <!-- End Header -->

        <!-- Start Body -->
        <div class="small-body">
          <h1 class="small-body-title">تسجيل دخول</h1>
          <h6 class="small-body-subtitle">
            مستخدم جديد؟ <a href="registeration">انشئ حسابك الآن</a>
          </h6>

          <div class="social-log">
            <a href="#!" class="social-log-link facebook-log">
              <div class="social-icon">
                <i class="lab la-facebook-f"></i>
              </div>
              <strong class="social-text"> تسجيل الدخول عبر فيسبوك </strong>
            </a>
            <a href="#!" class="social-log-link google-log">
              <div class="social-icon">
                <img src="images/google.svg" class="img-fluid" />
              </div>
              <strong class="social-text"> تسجيل الدخول عبر جوجل </strong>
            </a>
            <a href="#!" class="social-log-link twitter-log">
              <div class="social-icon">
                <i class="lab la-twitter"></i>
              </div>
              <strong class="social-text"> تسجيل الدخول عبر تويتر </strong>
            </a>
          </div>

          <div class="or">
            <span>أو</span>
          </div>
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
            <div class="form-group">
              <div class="input-cont-icon">
                <i class="las la-lock input-icon"></i>
                <label class="password-show">
                  <input type="checkbox" onchange="showPass(this)" />
                  <i class="las la-eye"></i>
                </label>
                <input
                  type="password"
                  class="form-control"
                  placeholder="كلمة المرور"
                />
              </div>
            </div>
            <button type="submit" class="primary-btn submit-btn">دخول</button>
          </form>
          <div class="forgt-cont">
              <a href="forget">
                هل نسيت كلمة المرور؟
              </a>
          </div>
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
        <img src="images/user-banners/login.jpg" class="img-fluid" />
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
