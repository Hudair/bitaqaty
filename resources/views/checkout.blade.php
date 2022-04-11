<!DOCTYPE >
< dir="rtl" lang="ar">
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

  <body class="noHeader fixed-tools-body">
    <!-- Start preloader -->
    <div class="progress-bar">
      <span class="bar"><span class="progress"></span></span>
    </div>
    <!-- End preloader -->

    <!-- Start Header -->
    <div class="container">
      <div class="small-head">
        <a href="index." class="logo">
          <img src="images/logo.svg" class="img-fluid" />
        </a>
        <a href="index." class="back-shopping">
          <i class="las la-arrow-right"></i>
          إضافة المزيد من البطاقات
        </a>
      </div>
    </div>
    <!-- End Header -->

    <!-- Start Page Content -->
    <section class="page-content">
      <div class="container">
        <div class="checkout-page">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="page-title">تأكيد الطلب</h1>
              <div class="payment-list">
                <h6 class="payment-list-title">
                  يرجى إختيار طريقة الدفع لإكمال عملية الشراء
                </h6>
                <div class="payment-radio">
                  <label>
                    <input type="radio" name="payment" />
                    <div class="payment-info">
                      <span class="mark"></span>
                      <strong class="payment-name">مدى - Mada</strong>
                      <div class="payment-img">
                        <img
                          src="images/checkout-payment/01.png"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                  </label>
                </div>
                <div class="payment-radio">
                  <label>
                    <input type="radio" name="payment" />
                    <div class="payment-info">
                      <span class="mark"></span>
                      <strong class="payment-name">فيزا - VISA</strong>
                      <div class="payment-img">
                        <img
                          src="images/checkout-payment/02.png"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                  </label>
                </div>
                <div class="payment-radio">
                  <label>
                    <input type="radio" name="payment" />
                    <div class="payment-info">
                      <span class="mark"></span>
                      <strong class="payment-name"
                        >ماستر كارد - MasterCard</strong
                      >
                      <div class="payment-img">
                        <img
                          src="images/checkout-payment/03.png"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                  </label>
                </div>
                <div class="payment-radio">
                  <label>
                    <input type="radio" name="payment" />
                    <div class="payment-info">
                      <span class="mark"></span>
                      <strong class="payment-name"
                        >اس تي سي باي - STC Pay</strong
                      >
                      <div class="payment-img">
                        <img
                          src="images/checkout-payment/04.png"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                  </label>
                </div>
                <div class="payment-radio">
                  <label>
                    <input type="radio" name="payment" />
                    <div class="payment-info">
                      <span class="mark"></span>
                      <strong class="payment-name"
                        >أمريكان إكسبريس - American Express</strong
                      >
                      <div class="payment-img">
                        <img
                          src="images/checkout-payment/05.png"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                  </label>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="cart-head">
                <h2 class="cart-title">سلة الشراء</h2>
                <a role="button" class="edit-btn">
                  <i class="las la-edit"></i>
                  تعديل
                </a>
              </div>
              <div class="cart-list">
                <div class="cart-item">
                  <div class="item-body">
                    <a href="productDetails." class="item-img">
                      <img src="images/products/01.jpg" class="img-fluid" />
                    </a>
                    <div class="item-text">
                      <h3 class="item-name">
                        <a href="productDetails." class="item-name-anchor">
                          بطاقة بلايستيشن ستور سعودي 10 دولار
                        </a>
                      </h3>
                      <a href="subCategory." class="item-category">
                        بلايستيشن سعودي
                      </a>
                      <span class="item-price">
                        <span class="item-qty"> x 1 </span>
                        70.00 ريال
                      </span>
                      <div class="date-price">
                        <span class="expire-date"> صالح حتى 30/3/2022 </span>
                        <strong class="price">140.00 ريال</strong>
                      </div>
                    </div>
                  </div>
                  <div class="item-footer">
                    <button
                      type="button"
                      class="item-delete"
                      data-toggle="modal"
                      data-target="#deleteConfirm"
                      title="حذف من السلة"
                    >
                      <i class="las la-trash-alt"></i>
                    </button>
                    <div class="item-tools">
                      <div class="quantity">
                        <strong> الكمية </strong>
                        <select class="quantity-select">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                      </div>
                      <div class="final-price">70.00 ريال</div>
                    </div>
                  </div>
                </div>
                <div class="cart-item">
                  <div class="item-body">
                    <a href="productDetails." class="item-img">
                      <img src="images/products/02.jpg" class="img-fluid" />
                    </a>
                    <div class="item-text">
                      <h3 class="item-name">
                        <a href="productDetails." class="item-name-anchor">
                          Pubg Mobile 600+ Free 60 UC $9.99 Recharge Voucher
                        </a>
                      </h3>
                      <a href="subCategory." class="item-category">
                        ببجي
                      </a>
                      <span class="item-price">
                        <span class="item-qty"> x 1 </span>
                        70.00 ريال
                      </span>
                      <div class="date-price">
                        <span class="expire-date"> صالح حتى 30/3/2022 </span>
                        <strong class="price">140.00 ريال</strong>
                      </div>
                    </div>
                  </div>
                  <div class="item-footer">
                    <button
                      type="button"
                      class="item-delete"
                      data-toggle="modal"
                      data-target="#deleteConfirm"
                      title="حذف من السلة"
                    >
                      <i class="las la-trash-alt"></i>
                    </button>
                    <div class="item-tools">
                      <div class="quantity">
                        <strong> الكمية </strong>
                        <select class="quantity-select">
                          <option>1</option>
                          <option selected>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                        </select>
                      </div>
                      <div class="final-price">140.00 ريال</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group coupon-form">
                <label>كوبون خصم (إن وجد)</label>
                <div class="form-flex">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="ادخل رقم الكوبون"
                  />
                  <button class="coupon-btn disabled">تفعيل الكوبون</button>
                </div>
              </div>
              <div class="totals">
                <div class="total">
                  <span class="title"> إجمالي الكمية </span>
                  <strong class="value">3</strong>
                </div>
                <div class="total">
                  <span class="title"> إجمالي السعر </span>
                  <strong class="value">210.00 ريال</strong>
                </div>
                <div class="total">
                  <span class="title"> إجمالي الضريبة </span>
                  <strong class="value">14.00 ريال</strong>
                </div>
                <div class="total">
                  <span class="title">
                    الإجمالي المستحق (السعر + الضريبة)
                  </span>
                  <strong class="value">224.00 ريال</strong>
                </div>
              </div>
              <div class="checkout-btn">
                <a href="receipt." class="secondary-btn payment-btn">
                  ادفع الآن
                </a>
              </div>
              <p class="payment-hint">
                بالضغط على زر “ادفع الآن” فأنت توافق على
                <a href="terms.">شروط الإستخدام</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Page Content -->

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

    <div
      class="modal deleteConfirm"
      id="deleteConfirm"
      tabindex="-1"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <i class="las la-times"></i>
          </button>
          <p class="confirm-text">هل أنت متأكد من أنك تريد حذف هذه البطاقة ؟</p>
          <div class="modal-btns">
            <button
              type="button"
              class="primary-btn modal-btn"
              data-dismiss="modal"
            >
              احتفظ بالبطاقة
            </button>
            <button type="button" class="default-btn modal-btn">
              ازالة البطاقة اﻵن
            </button>
          </div>
        </div>
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
</>
