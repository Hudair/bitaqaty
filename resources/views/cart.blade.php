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

  <body class="fixed-tools-body">
    <!-- Start preloader -->
    <div class="progress-bar">
      <span class="bar"><span class="progress"></span></span>
    </div>
    <!-- End preloader -->
    <!-- Start Header -->
    <header>
      <div class="header-cont">
        <div class="container">
          <div class="header">
            <a href="index" class="logo">
              <img src="./images/logo.svg" class="img-fluid" />
            </a>
            <form class="search-form">
              <input type="search" placeholder="ابحث باسم البطاقة أو التصنيف" />
              <button class="search-btn">
                <i class="las la-search"></i>
              </button>
            </form>
            <div class="header-tools">
              <div class="user-cont">
                <i class="las la-user"></i>
                <a href="login">دخول</a>
                <span>/</span>
                <a href="registeration">تسجيل جديد</a>
              </div>
              <!-- if logged -->
              <!-- <div class="user-cont logged">
              <i class="las la-user"></i>
              <span class="user-name"> بسام العميري </span>
              <div class="user-list">
                <a href="#!">حسابى</a>
                <a href="#!">طلباتى</a>
                <a href="#!">تسجيل الخروج</a>
              </div>
            </div>
            <div class="fav-cont">
              <a href="#!" class="fav-icon">
                <i class="lar la-heart"></i>
              </a>
            </div> -->
              <!-- endif logged -->
              <div class="cart-cont">
                <a href="cart" class="cart-icon">
                  <i class="las la-shopping-cart"></i>
                  <strong class="count"> 10 </strong>
                </a>
              </div>
              <div class="gift-cont">
                <a href="giftsRewards" class="gift-icon guest">
                  <i class="las la-gift"></i>
                  <strong class="text"> 1850 نقطة </strong>
                </a>
              </div>
            </div>

            <div class="float-tools">
              <div class="country-lang">
                <div class="country">
                  <img src="./images/icons/sa.png" class="img-fluid" />
                  السعودية
                </div>
                <span>-</span>
                <div class="lang">العربية</div>
              </div>

              <div class="mode-switch">
                <input type="checkbox" onchange="modeSwitch(this)" />
                <div class="bg"></div>
                <span class="handle">
                  <img src="./images/icons/light.svg" class="light" />
                  <img src="./images/icons/dark.svg" class="dark" />
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="header-nav">
        <div class="container">
          <ul class="header-list list-unstyled">
            <li class="has-sub">
              <a href="category">
                جوجل بلاي
                <i class="las la-angle-down"></i>
              </a>
              <ul class="submenu list-unstyled">
                <li>
                  <a href="subCategory">جوجل بلاي المتجر الأمريكي</a>
                </li>
                <li>
                  <a href="subCategory">جوجل بلاي المتجر السعودي</a>
                </li>
                <li>
                  <a href="subCategory">جوجل بلاي المتجر اﻹماراتي</a>
                </li>
                <li>
                  <a href="subCategory">جوجل بلاي المتجر البريطاني</a>
                </li>
                <li>
                  <a href="subCategory"
                    >جوجل بلاي المتجر الفرنسي الجوال والانترنت</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="category">الجوال والانترنت</a>
            </li>
            <li>
              <a href="category">بلايستيشن</a>
            </li>
            <li>
              <a href="category">ايتونز</a>
            </li>
            <li>
              <a href="category">ألعاب أونلاين</a>
            </li>
            <li>
              <a href="category">اتصال عبر الانترنت</a>
            </li>
            <li>
              <a href="category">ترفيه</a>
            </li>
            <li>
              <a href="category">ألعاب فيديو</a>
            </li>
            <li>
              <a href="category">بطاقات تسوق</a>
            </li>
            <li class="has-sub">
              <a href="category">
                ألعاب كمبيوتر
                <i class="las la-angle-down"></i>
              </a>
              <ul class="submenu list-unstyled">
                <li>
                  <a href="subCategory">ستيم والت المتجر اﻷمريكي</a>
                </li>
                <li>
                  <a href="subCategory">EA Play</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر السعودي</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر الإماراتي</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر اﻷوروبي</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر البحريني</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر الكويتي</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر العماني</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر القطري</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="category">خدمات اخرى</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- End Header -->

    <!-- Start Fixed Bar -->
    <section class="fixed-bar">
      <a role="button" class="fixed-btn menu-btn">
        <i class="las la-bars"></i>
        <span class="text"> القائمة </span>
      </a>
      <a href="login" class="fixed-btn">
        <i class="las la-user"></i>
        <span class="text"> دخول/ تسجيل </span>
      </a>
      <a href="giftsRewards" class="fixed-btn">
        <i class="las la-gift"></i>
        <span class="text"> نقاطي </span>
      </a>
      <a href="cart" class="fixed-btn">
        <i class="las la-shopping-cart"></i>
        <span class="text"> السلة </span>
      </a>
    </section>
    <!-- End Fixed Bar -->

    <!-- Start Sidenav -->
    <div class="sidenav-overlay"></div>
    <section class="sidenav">
      <div class="sidenav-header">
        <div class="country-lang">
          <div class="country">
            <img src="./images/icons/sa.png" class="img-fluid" />
            السعودية
          </div>
          <span>-</span>
          <div class="lang">العربية</div>
        </div>
        <a role="button" class="sidenav-close-btn">
          <i class="las la-times"></i>
        </a>
      </div>
      <ul class="sidenav-body list-unstyled">
        <li class="cats">
          <a role="button">
            أقسام التسوق
            <i class="las la-angle-up"></i>
          </a>
          <ul class="cats-list list-unstyled">
            <li class="has-sub">
              <a href="category">
                جوجل بلاي
                <i class="las la-angle-down"></i>
              </a>
              <ul class="side-submenu list-unstyled">
                <li>
                  <a href="subCategory">جوجل بلاي المتجر الأمريكي</a>
                </li>
                <li>
                  <a href="subCategory">جوجل بلاي المتجر السعودي</a>
                </li>
                <li>
                  <a href="subCategory">جوجل بلاي المتجر اﻹماراتي</a>
                </li>
                <li>
                  <a href="subCategory">جوجل بلاي المتجر البريطاني</a>
                </li>
                <li>
                  <a href="subCategory"
                    >جوجل بلاي المتجر الفرنسيالجوال والانترنت</a
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="category">الجوال والانترنت</a>
            </li>
            <li>
              <a href="category">بلايستيشن</a>
            </li>
            <li>
              <a href="category">ايتونز</a>
            </li>
            <li>
              <a href="category">ألعاب أونلاين</a>
            </li>
            <li>
              <a href="category">اتصال عبر الانترنت</a>
            </li>
            <li>
              <a href="category">ترفيه</a>
            </li>
            <li>
              <a href="category">ألعاب فيديو</a>
            </li>
            <li>
              <a href="category">بطاقات تسوق</a>
            </li>
            <li class="has-sub">
              <a href="category">
                ألعاب كمبيوتر
                <i class="las la-angle-down"></i>
              </a>
              <ul class="side-submenu list-unstyled">
                <li>
                  <a href="subCategory">ستيم والت المتجر اﻷمريكي</a>
                </li>
                <li>
                  <a href="subCategory">EA Play</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر السعودي</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر الإماراتي</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر اﻷوروبي</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر البحريني</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر الكويتي</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر العماني</a>
                </li>
                <li>
                  <a href="subCategory">ستيم والت المتجر القطري</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="category">خدمات أخرى</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="about">عن ون كارد</a>
        </li>
        <li>
          <a href="searchResults">البطاقات الجديدة</a>
        </li>
        <li>
          <a href="searchResults">عروض اليوم</a>
        </li>
        <li>
          <a href="bestseller">الأكثر مبيعًا</a>
        </li>
        <li>
          <a href="contact">اتصل بنا</a>
        </li>
      </ul>
      <div class="sidenav-footer">
        <strong class="switcher-title"> وضع النهار/ الليل </strong>
        <div class="mode-switch">
          <input type="checkbox" onchange="modeSwitch(this)" />
          <div class="bg"></div>
          <span class="handle">
            <img src="./images/icons/light.svg" class="light" />
            <img src="./images/icons/dark.svg" class="dark" />
          </span>
        </div>
      </div>
    </section>
    <!-- End Sidenav -->

    <!-- Start Popup -->
    <div class="popup-overlay"></div>
    <div class="country-lang-popup">
      <a role="button" class="close-btn">
        <i class="las la-times"></i>
      </a>
      <h4 class="popup-title">
        قم بتحديث الدولة واللغة لعرض البطاقات المناسبة لك
      </h4>
      <div class="popup-form">
        <div class="popup-group">
          <label class="popup-label"> الدولة </label>
          <div class="country-select">
            <input type="hidden" />
            <div class="selected">
              <span class="country">
                <img src="./images/icons/sa.png" />
                <span class="text">السعودية</span>
              </span>
            </div>
            <div class="options-dropdown">
              <span class="country">
                <img src="./images/icons/usa.png" />
                <span class="text">الولايات المتحدة</span>
              </span>
              <span class="country">
                <img src="./images/icons/eg.png" />
                <span class="text">مصر</span>
              </span>
              <span class="country">
                <img src="./images/icons/uae.png" />
                <span class="text">الامارات</span>
              </span>
            </div>
          </div>
        </div>
        <div class="popup-group">
          <label class="popup-label"> اللغة </label>
          <select class="lang-select">
            <option>العربية</option>
            <option>English</option>
          </select>
        </div>
        <button class="popup-submit">
          <i class="las la-check-circle"></i>
          حفظ
        </button>
      </div>
    </div>
    <!-- End Popup -->

    <!-- Start Breadcrumb -->
    <section class="breadcrumb-section">
      <div class="container">
        <ol class="breadcrumb">
          <li>
            <a href="index">الرئيسية</a>
          </li>
          <li class="active">سلة الشراء</li>
        </ol>
      </div>
    </section>
    <!-- End Breadcrumb -->

    <!-- Start Page Content -->
    <section class="page-content">
      <div class="container">
        <div class="cart-page">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="page-title">سلة الشراء</h1>
              <div class="cart-list">
                <div class="cart-item">
                  <div class="item-body">
                    <a href="productDetails" class="item-img">
                      <img src="images/products/01.jpg" class="img-fluid" />
                    </a>
                    <div class="item-text">
                      <h3 class="item-name">
                        <a href="productDetails" class="item-name-anchor">
                          بطاقة بلايستيشن ستور سعودي 10 دولار
                        </a>
                      </h3>
                      <a href="subCategory" class="item-category">
                        بلايستيشن سعودي
                      </a>
                      <span class="item-price"> 70.00 ريال </span>
                      <div class="date-price">
                        <span class="expire-date"> صالح حتى 30/3/2022 </span>
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
                    <a href="productDetails" class="item-img">
                      <img src="images/products/02.jpg" class="img-fluid" />
                    </a>
                    <div class="item-text">
                      <h3 class="item-name">
                        <a href="productDetails" class="item-name-anchor">
                          Pubg Mobile 600+ Free 60 UC $9.99 Recharge Voucher
                        </a>
                      </h3>
                      <a href="subCategory" class="item-category">
                        ببجي
                      </a>
                      <span class="item-price"> 70.00 ريال </span>
                      <div class="date-price">
                        <span class="expire-date"> صالح حتى 30/3/2022 </span>
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
              <div class="cart-btns">
                <a href="index" class="primary-btn continue">
                  إضافة المزيد
                </a>
                <a href="checkout" class="secondary-btn checkout">
                  تابع عملية الدفع
                </a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="small-suggested-products">
                <div class="products-head">
                  <h2 class="products-title">الناس يشترون أيضا</h2>
                </div>
                <div class="products-small-slider">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="product">
                          <div class="img-here">
                            <a href="productDetails" class="product-img">
                              <img src="./images/products/03.jpg" />
                            </a>
                            <span class="discount-label">
                              <i class="las la-check-circle"></i> وفرت 5 ريال
                            </span>
                            <button
                              class="add-to-fav"
                              data-toggle="tooltip"
                              title="اضف إلى المفضلة"
                            >
                              <i class="lar la-heart"></i>
                            </button>
                          </div>
                          <div class="product-info">
                            <div class="product-name">
                              <a href="productDetails">
                                بطاقة بلايستيشن نتورك - بطاقة 50 دولار (المتجر
                                الأمريكي)
                              </a>
                            </div>
                            <a href="subCategory" class="product-category"
                              >فري فاير</a
                            >
                            <div class="product-prices">
                              <strong class="price">70.00 ريال</strong>
                              <del class="old-price">75.00 ريال</del>
                            </div>
                          </div>
                          <div class="product-tools">
                            <button class="buy">
                              <i class="las la-cart-plus"></i>
                              اضف إلى السلة
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product">
                          <div class="img-here">
                            <a href="productDetails" class="product-img">
                              <img src="./images/products/04.jpg" />
                            </a>
                            <button
                              class="add-to-fav active"
                              data-toggle="tooltip"
                              title="حذف من المفضلة"
                            >
                              <i class="lar la-heart"></i>
                            </button>
                          </div>
                          <div class="product-info">
                            <div class="product-name">
                              <a href="productDetails">
                                بطاقة بلايستيشن نتورك - بطاقة 50 دولار (المتجر
                                الأمريكي)
                              </a>
                            </div>
                            <a href="subCategory" class="product-category"
                              >فري فاير</a
                            >
                            <div class="product-prices">
                              <strong class="price">70.00 ريال</strong>
                              <del class="old-price">75.00 ريال</del>
                            </div>
                          </div>
                          <div class="product-tools">
                            <button class="buy">
                              <i class="las la-cart-plus"></i>
                              اضف إلى السلة
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product">
                          <div class="img-here">
                            <a href="productDetails" class="product-img">
                              <img src="./images/products/05.jpg" />
                            </a>
                            <span class="discount-label">
                              <i class="las la-check-circle"></i> وفرت 5 ريال
                            </span>
                            <button
                              class="add-to-fav"
                              data-toggle="tooltip"
                              title="اضف إلى المفضلة"
                            >
                              <i class="lar la-heart"></i>
                            </button>
                          </div>
                          <div class="product-info">
                            <div class="product-name">
                              <a href="productDetails">
                                بطاقة بلايستيشن نتورك - بطاقة 50 دولار (المتجر
                                الأمريكي)
                              </a>
                            </div>
                            <a href="subCategory" class="product-category"
                              >فري فاير</a
                            >
                            <div class="product-prices">
                              <strong class="price">70.00 ريال</strong>
                              <del class="old-price">75.00 ريال</del>
                            </div>
                          </div>
                          <div class="product-tools">
                            <button class="buy">
                              <i class="las la-cart-plus"></i>
                              اضف إلى السلة
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product">
                          <div class="img-here">
                            <a href="productDetails" class="product-img">
                              <img src="./images/products/06.jpg" />
                            </a>
                            <span class="discount-label">
                              <i class="las la-check-circle"></i> وفرت 5 ريال
                            </span>
                            <button
                              class="add-to-fav"
                              data-toggle="tooltip"
                              title="اضف إلى المفضلة"
                            >
                              <i class="lar la-heart"></i>
                            </button>
                          </div>
                          <div class="product-info">
                            <div class="product-name">
                              <a href="productDetails">
                                بطاقة بلايستيشن نتورك - بطاقة 50 دولار (المتجر
                                الأمريكي)
                              </a>
                            </div>
                            <a href="subCategory" class="product-category"
                              >فري فاير</a
                            >
                            <div class="product-prices">
                              <strong class="price">70.00 ريال</strong>
                              <del class="old-price">75.00 ريال</del>
                            </div>
                          </div>
                          <div class="product-tools">
                            <button class="buy">
                              <i class="las la-cart-plus"></i>
                              اضف إلى السلة
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product">
                          <div class="img-here">
                            <a href="productDetails" class="product-img">
                              <img src="./images/products/07.jpg" />
                            </a>
                            <span class="discount-label">
                              <i class="las la-check-circle"></i> وفرت 5 ريال
                            </span>
                            <button
                              class="add-to-fav"
                              data-toggle="tooltip"
                              title="اضف إلى المفضلة"
                            >
                              <i class="lar la-heart"></i>
                            </button>
                          </div>
                          <div class="product-info">
                            <div class="product-name">
                              <a href="productDetails">
                                بطاقة بلايستيشن نتورك - بطاقة 50 دولار (المتجر
                                الأمريكي)
                              </a>
                            </div>
                            <a href="subCategory" class="product-category"
                              >فري فاير</a
                            >
                            <div class="product-prices">
                              <strong class="price">70.00 ريال</strong>
                              <del class="old-price">75.00 ريال</del>
                            </div>
                          </div>
                          <div class="product-tools">
                            <button class="buy">
                              <i class="las la-cart-plus"></i>
                              اضف إلى السلة
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Page Content -->

    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="footer">
          <div class="row">
            <div class="col-lg-4 col-12">
              <div class="footer-about">
                <div class="footer-logo">
                  <img src="./images/logo.svg" class="img-fluid" />
                </div>
                <p class="footer-paragraph">
                  رؤيتنا تمثل كيفية جمع أفضل العروض لجعل حياتك أسهل. هدفنا أن
                  نكون وسيلة الدفع الوحيدة التى تحتاجها
                </p>
                <div class="socials">
                  <a href="#!" class="social">
                    <i class="lab la-snapchat-ghost"></i>
                  </a>
                  <a href="#!" class="social">
                    <i class="lab la-telegram-plane"></i>
                  </a>
                  <a href="#!" class="social">
                    <i class="lab la-twitter"></i>
                  </a>
                  <a href="#!" class="social">
                    <i class="lab la-facebook-f"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="footer-nav">
                <h3 class="footer-title">المساعدة</h3>
                <ul class="list-unstyled">
                  <li>
                    <a href="about">من نحن</a>
                  </li>
                  <li>
                    <a href="terms">شروط الإستخدام</a>
                  </li>
                  <li>
                    <a href="policies">السياسات</a>
                  </li>
                  <li>
                    <a href="how-to-buy">طريقة الشراء</a>
                  </li>
                  <li>
                    <a href="faqs">الأسئلة الشائعة</a>
                  </li>
                  <li>
                    <a href="contact">اتصل بنا</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="footer-download">
                <h3 class="footer-title">حمل تطبيق ون كارد</h3>
                <div class="download">
                  <a href="#!">
                    <img src="./images/icons/playStore.png" class="img-fluid" />
                  </a>
                  <a href="#!">
                    <img src="./images/icons/appStore.png" class="img-fluid" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="last-footer">
        <div class="container">
          <div class="footer-flex">
            <p class="copyrights">© ون كارد 2022 - جميع الحقوق محفوظة</p>
            <div class="maarof-vat">
              <a href="#!" class="maarof">
                <img src="./images/icons/maroof.png" class="img-fluid" />
              </a>
              <a href="#!" class="vat">
                <img src="./images/icons/vat.svg" class="img-fluid" />
              </a>
            </div>
            <div class="payment">
              <span><img src="./images/payment/01.png" /></span>
              <span><img src="./images/payment/02.png" /></span>
              <span><img src="./images/payment/03.png" /></span>
              <span><img src="./images/payment/04.png" /></span>
              <span><img src="./images/payment/05.png" /></span>
              <span><img src="./images/payment/06.png" /></span>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

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
</html>
