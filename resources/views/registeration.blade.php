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
      <div class="register-page">
        <!-- Start Header -->
        <div class="small-head">
          <a href="index.php" class="logo">
            <img src="images/logo.svg" class="img-fluid" />
          </a>
        </div>
        <!-- End Header -->

        <!-- Start Body -->
        <div class="small-body">
          <div class="steps-progress">
            <ul class="progressbar list-unstyled">
              <li class="active">
                <i class="las la-user"></i>
              </li>
              <li>
                <i class="las la-envelope"></i>
              </li>
              <li>
                <i class="las la-mobile"></i>
              </li>
              <li>
                <i class="las la-check"></i>
              </li>
            </ul>
          </div>
          <div class="steps-content">
            <div class="stepOne" style="display: block">
              <h1 class="small-body-title">إنشاء حساب</h1>
              <h6 class="small-body-subtitle">
                هل لديك حساب؟ <a href="login">سجل دخول الآن</a>
              </h6>
              <div class="social-log">
                <a href="#!" class="social-log-link twitter-log">
                  <div class="social-icon">
                    <i class="lab la-twitter"></i>
                  </div>
                  <strong class="social-text"> تسجيل الدخول عبر تويتر </strong>
                </a>
                <a href="#!" class="social-log-link google-log">
                  <div class="social-icon">
                    <img src="images/google.svg" class="img-fluid" />
                  </div>
                  <strong class="social-text"> تسجيل الدخول عبر جوجل </strong>
                </a>
                <a href="#!" class="social-log-link facebook-log">
                  <div class="social-icon">
                    <i class="lab la-facebook-f"></i>
                  </div>
                  <strong class="social-text"> تسجيل الدخول عبر فيسبوك </strong>
                </a>
              </div>
              <div class="or">
                <span>أو</span>
              </div>
              <form class="log-form">
                <div class="form-line">
                  <div class="form-group">
                    <label>الاسم بالكامل</label>
                    <input type="text" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>البريد الإلكتروني</label>
                    <input type="email" class="form-control" />
                  </div>
                </div>
                <div class="form-line">
                  <div class="form-group">
                    <label>
                      دولة المتجر
                      <span data-toggle="tooltip" title="نص تجريبي">
                        <i class="las la-question-circle"></i>
                      </span>
                    </label>
                    <select class="form-control">
                      <option>السعودية</option>
                      <option>السعودية</option>
                      <option>السعودية</option>
                      <option>السعودية</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>رقم الجوال</label>
                    <div class="input-group">
                      <input type="tel" class="form-control" />
                      <span class="country-key">
                        +966
                        <img src="images/icons/sa.png" class="img-fluid" />
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-line">
                  <div class="form-group">
                    <label>كلمة المرور</label>
                    <div class="input-password">
                      <label class="password-show">
                        <input type="checkbox" onchange="showPass(this)" />
                        <i class="las la-eye"></i>
                      </label>
                      <input type="password" class="form-control" />
                    </div>
                    <div class="passowrd-roles">
                      <div class="role correct">
                        <i class="las la-circle"></i>
                        كلمة المرور يجب ان تكون باللغة الإنجليزية
                      </div>
                      <div class="role wrong">
                        <i class="las la-circle"></i>
                        تحتوي على 8 أحرف كحد أدنى
                      </div>
                      <div class="role">
                        <i class="las la-circle"></i>
                        تحتوي على حرف صغير على اﻷقل
                      </div>
                      <div class="role">
                        <i class="las la-circle"></i>
                        تحتوي على حرف كبير على اﻷقل
                      </div>
                      <div class="role">
                        <i class="las la-circle"></i>
                        تحتوي على رقم
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>تأكيد كلمة المرور</label>
                    <div class="input-password">
                      <label class="password-show">
                        <input type="checkbox" onchange="showPass(this)" />
                        <i class="las la-eye"></i>
                      </label>
                      <input type="password" class="form-control" />
                    </div>
                  </div>
                </div>
                <button type="submit" class="primary-btn submit-btn">
                  تسجيل
                </button>
              </form>
            </div>
            <div class="stepTwo" style="display: none">
              <h2 class="small-body-title">تحقق من بريدك اﻹلكترونى</h2>
              <h6 class="small-body-subtitle">
                تم إرسال رسالة إلى بريدك الإلكتروني
                <strong>email@gmail.com</strong><br />
                فضلا قم بالضغط على الرابط المرسل من ون كارد لإكمال عملية التحقق
              </h6>
              <div class="dashed-alert">
                <i class="las la-info-circle"></i>
                تأكد من مراجعة كل ملفات البريد الإلكتروني إذا لم تتمكن من العثور
                على الرسالة في صندوق الوارد
              </div>
              <h6 class="small-body-subtitle">
                لم تصلك الرسالة؟ <a href="forget">إعادة ارسال الرابط</a>
              </h6>
              <h6 class="small-body-subtitle">
                للحصول على المساعدة يمكنك الاتصال
                <a href="contact">بخدمة العملاء</a>
              </h6>
            </div>
            <div class="stepThree" style="display: none">
              <span class="checked">
                <i class="las la-check-circle"></i>
              </span>
              <h2 class="small-body-title">تحقق من بريدك اﻹلكترونى</h2>
            </div>
            <div class="stepTwo" style="display: none">
              <h2 class="small-body-title">تحقق من رقم الجوال</h2>
              <h6 class="small-body-subtitle">
                تم إرسال رمز التحقق إلى
                <strong>00966581000000</strong><br />
                فضلا قم بإدخال رمز التحقق المكون من 5 ارقام
              </h6>
              <form class="code-form">
                <div class="inputs-numbers">
                  <input
                    type="number"
                    placeholder="0"
                    class="form-control code-input"
                  />
                  <input
                    type="number"
                    placeholder="0"
                    class="form-control code-input"
                    disabled
                  />
                  <input
                    type="number"
                    placeholder="0"
                    class="form-control code-input"
                    disabled
                  />
                  <input
                    type="number"
                    placeholder="0"
                    class="form-control code-input"
                    disabled
                  />
                  <input
                    type="number"
                    placeholder="0"
                    class="form-control code-input"
                    disabled
                  />
                </div>
                <button
                  type="submit"
                  class="primary-btn submit-btn disabled"
                  id="code-submit-btn"
                >
                  تفعيل الحساب
                </button>
              </form>
              <h6 class="small-body-subtitle">
                لم تصلك الرسالة؟ <a href="forget">إعادة ارسال الرابط</a>
              </h6>
              <h6 class="small-body-subtitle">
                للحصول على المساعدة يمكنك الاتصال
                <a href="contact">بخدمة العملاء</a>
              </h6>
            </div>
            <div class="stepThree" style="display: none">
              <span class="checked">
                <i class="las la-check-circle"></i>
              </span>
              <h2 class="small-body-title">تم تفعيل الحساب بنجاح</h2>
              <h6 class="small-body-subtitle">
                يمكنك تسجيل الدخول الآن
              </h6>
              <a href="info" class="primary-btn submit-btn">
                تسجيل دخول
              </a>
            </div>
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
