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

    <div class="user-form-body-center">
      <div class="forget-page">
        <!-- Start Header -->
        <div class="small-head">
          <a href="index" class="logo">
            <img src="images/logo.svg" class="img-fluid" />
          </a>
        </div>
        <!-- End Header -->

        <!-- Start Body -->
        <div class="small-body">
          <h1 class="small-body-title">التحقق من الرابط</h1>
          <h6 class="small-body-subtitle">
            تم إرسال رابط إعادة تعيين كلمة المرور إلى بريدك الإلكتروني
            <strong>email@gmail.com</strong><br> فضلا قم بالضغط على الرابط المرسل من ون كارد لإكمال
            العملية
          </h6>
          <div class="dashed-alert">
            <i class="las la-info-circle"></i>
            تأكد من مراجعة كل ملفات البريد الإلكتروني إذا لم تتمكن من العثور على
            الرسالة في صندوق الوارد
          </div>
          <h6 class="small-body-subtitle">
            لم تصلك الرسالة؟ <a href="forget">إعادة ارسال الرابط</a>
          </h6>
          <h6 class="small-body-subtitle">
            للحصول على المساعدة يمكنك الاتصال
            <a href="contact">بخدمة العملاء</a>
          </h6>
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
