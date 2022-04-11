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
    <title>@yield("title")</title>
    <link rel="stylesheet" type="img/png" href="{{ asset('/images/fav.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <link rel="stylesheet" href="./css/main.css" />
  </head>

  <body>
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
                <input type="checkbox" onchange="modeSwitch(this)"/>
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
                  <a href="subCategory">جوجل بلاي المتجر الفرنسي الجوال والانترنت</a>
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
                  <a href="subCategory">جوجل بلاي المتجر الفرنسيالجوال والانترنت</a>
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
          <input type="checkbox" onchange="modeSwitch(this)"/>
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

    <!-- Start Banners -->
    <main>
      <div class="container">
        <div class="banners-grid">
          <a href="#!" class="banner">
            <img src="./images/banners/01.jpg" />
          </a>
          <a href="#!" class="banner">
            <img src="./images/banners/02.jpg" />
          </a>
          <a href="#!" class="banner">
            <img src="./images/banners/03.jpg" />
          </a>
          <a href="#!" class="banner">
            <img src="./images/banners/04.jpg" />
          </a>
        </div>
      </div>
    </main>
    <!-- End Banners -->

    <!-- Start products -->
    <section class="products-section">
      <div class="container">
        <div class="products-head">
          <h2 class="products-title">لا تفوتك عروض اليوم</h2>
          <a href="searchResults" class="products-more"> عرض الكل </a>
        </div>
        <div class="products-slider products-slider-0">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/01.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                   <span class="unavailable">
                     البطاقة غير متوفره
                   </span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/02.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
                    </span>
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/03.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
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
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
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
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-btn-next swiper-btn">
            <span class="las la-angle-left"></span>
          </div>
          <div class="swiper-btn-prev swiper-btn">
            <span class="las la-angle-right"></span>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <a href="searchResults" class="products-more"> عرض الكل </a>
      </div>
    </section>
    <!-- End products -->

    <!-- Start Banners -->
    <section class="double-banners">
      <div class="container">
        <div class="banners-grid">
          <a href="#!" class="banner">
            <img src="./images/banners/05.jpg" />
          </a>
          <a href="#!" class="banner">
            <img src="./images/banners/06.jpg" />
          </a>
        </div>
      </div>
    </section>
    <!-- End Banners -->

    <!-- Start products -->
    <section class="products-section">
      <div class="container">
        <div class="products-head">
          <h2 class="products-title">البطاقات الجديدة</h2>
          <a href="searchResults" class="products-more"> عرض الكل </a>
        </div>
        <div class="products-slider products-slider-1">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/05.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
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
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
                    </span>
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
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
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/08.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/09.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-btn-next swiper-btn">
            <span class="las la-angle-left"></span>
          </div>
          <div class="swiper-btn-prev swiper-btn">
            <span class="las la-angle-right"></span>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <a href="searchResults" class="products-more"> عرض الكل </a>
      </div>
    </section>
    <!-- End products -->

    <!-- Start products -->
    <section class="products-section">
      <div class="container">
        <div class="products-head">
          <h2 class="products-title">البطاقات الأكثر مبيعًا</h2>
          <a href="searchResults" class="products-more"> عرض الكل </a>
        </div>
        <div class="products-slider products-slider-2">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/09.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/10.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
                    </span>
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/01.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/02.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/03.jpg" />
                    </a>
                    <span class="discount-label">
                      <i class="las la-check-circle"></i>
                      وفرت 5 ريال
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                      <del class="old-price">75.00 ريال</del>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-btn-next swiper-btn">
            <span class="las la-angle-left"></span>
          </div>
          <div class="swiper-btn-prev swiper-btn">
            <span class="las la-angle-right"></span>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <a href="searchResults" class="products-more"> عرض الكل </a>
      </div>
    </section>
    <!-- End products -->

    <!-- Start products -->
    <section class="products-section">
      <div class="container">
        <div class="products-head">
          <h2 class="products-title">بطاقات مختارة من أجلك</h2>
          <a href="searchResults" class="products-more"> عرض الكل </a>
        </div>
        <div class="products-slider products-slider-3">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product">
                  <div class="img-here">
                    <a href="productDetails" class="product-img">
                      <img src="./images/products/03.jpg" />
                    </a>
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
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
                      <a href="productDetails"> ريزر جولد - 100 دولار (المتجر اﻷمريكي) </a>
                    </div>
                    <a href="subCategory" class="product-category">فري فاير</a>
                    <div class="product-prices">
                      <strong class="price">70.00 ريال</strong>
                    </div>
                  </div>
                  <div class="product-tools">
                    <button class="buy">
                      <i class="las la-shopping-cart"></i>
                      شراء سريع
                    </button>
                    <button
                      class="add-to-cart"
                      data-toggle="tooltip"
                      title="اضف إلى السلة"
                    >
                      <i class="las la-cart-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-btn-next swiper-btn">
            <span class="las la-angle-left"></span>
          </div>
          <div class="swiper-btn-prev swiper-btn">
            <span class="las la-angle-right"></span>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <a href="searchResults" class="products-more"> عرض الكل </a>
      </div>
    </section>
    <!-- End products -->

    <!-- Start Video -->
    <section class="video-section">
      <div class="container">
        <div class="section-head">
          <h2 class="section-title">عن ون كارد</h2>
        </div>
        <iframe
          class="video"
          src="https://www.youtube.com/embed/aF0blmYDeyg"
          allowfullscreen
          frameborder="0"
        ></iframe>
      </div>
    </section>
    <!-- End Video -->

    <!-- Start Features -->
    <section class="features-section">
      <div class="container">
        <div class="section-head">
          <h2 class="section-title">لماذا ون كارد؟</h2>
          <p class="section-paragraph">
            رؤيتنا تمثل كيفية جمع أفضل العروض لجعل حياتك أسهل. هدفنا أن نكون
            وسيلة الدفع الوحيدة التى تحتاجها
          </p>
        </div>
        <div class="features-grid">
          <div class="feature">
            <i class="las la-hand-holding-usd"></i>
            <span class="text">أسعارنا الأفضل</span>
          </div>
          <div class="feature">
            <i class="las la-percent"></i>
            <span class="text">عروضنا الأقوى</span>
          </div>
          <div class="feature">
            <i class="las la-headset"></i>
            <span class="text">خدمة عملاء متميزة</span>
          </div>
          <div class="feature">
            <i class="las la-mouse"></i>
            <span class="text">منتجات تناسب احتياجك</span>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features -->

    <!-- Start Testimonials -->
    <section class="testimonials-section">
      <div class="container">
        <div class="section-head">
          <h2 class="section-title">تقييمات عملاؤنا</h2>
        </div>

        <div class="testimonials-slider">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial">
                  <div class="testimonial-head">
                    <h4 class="user-name">نايف العتيبي</h4>
                    <span class="date">22 فبراير 2022</span>
                  </div>
                  <div class="rate-stars">
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                  </div>
                  <div class="review">
                    <p>
                      خلافاَ للإعتقاد السائد فإن إيبسوم ليس نصاَ عشوائياً، بل ان
                      له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل
                      الميلاد
                    </p>
                  </div>
                  <div class="more-cont">
                    <button class="more-text">
                      <span class="more"> اقرأ المزيد </span>
                      <span class="less"> اغلاق </span>
                      <i class="las la-angle-down"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial">
                  <div class="testimonial-head">
                    <h4 class="user-name">عبدالسلام علي</h4>
                    <span class="date">22 فبراير 2022</span>
                  </div>
                  <div class="rate-stars">
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star"></i>
                  </div>
                  <div class="review">
                    <p>
                      هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                      الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو
                      الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم
                      إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو
                      عبارات محرجة أو غير لائقة مخبأة في هذا النص.
                    </p>
                  </div>
                  <div class="more-cont">
                    <button class="more-text">
                      <span class="more"> اقرأ المزيد </span>
                      <span class="less"> اغلاق </span>
                      <i class="las la-angle-down"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial">
                  <div class="testimonial-head">
                    <h4 class="user-name">عدنان الجابر</h4>
                    <span class="date">22 فبراير 2022</span>
                  </div>
                  <div class="rate-stars">
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star"></i>
                  </div>
                  <div class="review">
                    <p>
                      هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة
                      ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل
                      توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام
                      طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما-
                      للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد
                      محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء
                    </p>
                  </div>
                  <div class="more-cont">
                    <button class="more-text">
                      <span class="more"> اقرأ المزيد </span>
                      <span class="less"> اغلاق </span>
                      <i class="las la-angle-down"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial">
                  <div class="testimonial-head">
                    <h4 class="user-name">نايف العتيبي</h4>
                    <span class="date">22 فبراير 2022</span>
                  </div>
                  <div class="rate-stars">
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star active"></i>
                    <i class="las la-star"></i>
                  </div>
                  <div class="review">
                    <p>
                      خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً،
                      بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل
                      الميلاد، مما يجعله أكثر من 2000 عام في القدم.
                    </p>
                  </div>
                  <div class="more-cont">
                    <button class="more-text">
                      <span class="more"> اقرأ المزيد </span>
                      <span class="less"> اغلاق </span>
                      <i class="las la-angle-down"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-btn-next swiper-btn">
            <span class="las la-angle-left"></span>
          </div>
          <div class="swiper-btn-prev swiper-btn">
            <span class="las la-angle-right"></span>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Testimonials -->

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
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/swiper.min.js"></script>
    <script src="./js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
