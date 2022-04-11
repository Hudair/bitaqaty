$(window).on("load", function () {
  $(".progress-bar").fadeOut("300", function () {
    $(this).remove();
  });

  var checked = localStorage.getItem("mode");
  if (checked == "darkMode") {
    if (document.querySelectorAll(".mode-switch input").length > 0) {
      document.querySelectorAll(".mode-switch input")[0].checked = checked;
    }
    document.body.classList.add(checked);
  }
});
$(document).ready(function () {
  /***** tooltip *****/
  $("[data-toggle]").tooltip();

  /***** product slider *****/
  var slides = document.getElementsByClassName("products-slider");
  for (var i = 0; i < slides.length; i++) {
    var productswiper = new Swiper(
      ".products-slider-" + i + " .swiper-container",
      {
        loop: true,
        breakpoints: {
          0: {
            slidesPerView: 2,
            spaceBetween: 8,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1200: {
            slidesPerView: 4,
            spaceBetween: 31,
          },
        },
        pagination: {
          el: ".products-slider-" + i + " .swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".products-slider-" + i + " .swiper-btn-next",
          prevEl: ".products-slider-" + i + " .swiper-btn-prev",
        },
        on: {
          init: function (swiper) {
            $('[data-toggle="tooltip"]').tooltip();
          },
        },
      }
    );
  }
  var smallproductswiper = new Swiper(
    ".products-small-slider .swiper-container",
    {
      loop: true,
      breakpoints: {
        0: {
          slidesPerView: 2,
          spaceBetween: 8,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 9,
        },
      },
      pagination: {
        el: ".products-small-slider .swiper-pagination",
        clickable: true,
      },
      on: {
        init: function (swiper) {
          $('[data-toggle="tooltip"]').tooltip();
        },
      },
    }
  );

  /***** testimonial slider *****/
  var testimonialswiper = new Swiper(".testimonials-slider .swiper-container", {
    // loop: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 15,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: 23,
      },
      1199: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
    pagination: {
      el: ".testimonials-slider .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".testimonials-slider .swiper-btn-next",
      prevEl: ".testimonials-slider .swiper-btn-prev",
    },
  });

  /***** view more review *****/
  $(".review").each(function () {
    var height = $(this).prop("scrollHeight");
    if (height > 66) {
      $(this).addClass("trim");
      $(this).siblings(".more-cont").show();
    }
  });
  $(".more-text").click(function (e) {
    var text = $(this).parents(".testimonial").find(".review");
    var height = text.prop("scrollHeight");
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
      text.height(height).css("display", "block");
    } else {
      text.height(65);
    }
  });

  /***** language country modal *****/
  $("body").click(function (e) {
    $(".options-dropdown").fadeOut(300);
  });
  $(".country-select").click(function (e) {
    e.stopPropagation();
    $(this).find(".options-dropdown").fadeToggle(300);
  });
  $(".options-dropdown .country").click(function (e) {
    var innerText = $(this).html();
    var countryName = $(this).find(".text").html();
    $(".country-select .selected .country").html(innerText);
    $(".country-select input").val(countryName);
  });
  $(".lang-select").select2({
    minimumResultsForSearch: Infinity,
    dropdownCssClass: "lang-dropdown",
  });

  $(".country-lang").click(function (e) {
    $(".popup-overlay, .country-lang-popup").fadeIn();
    $("body").addClass("overflow");
  });
  $(".popup-overlay, .close-btn").click(function (e) {
    $(".popup-overlay, .country-lang-popup").fadeOut();
    $("body").removeClass("overflow");
  });

  $(".cats>a").click(function (e) {
    $(this).toggleClass("active").siblings("ul").slideToggle();
  });

  $(".has-sub>a>i").click(function (e) {
    e.preventDefault();
    var thisParent = $(this).parent("a");
    $(".has-sub>a").not(thisParent).removeClass("active");
    if (thisParent.siblings("ul").css("display") == "none") {
      thisParent.addClass("active").siblings("ul").slideDown(500);
    } else {
      thisParent.removeClass("active").siblings("ul").slideUp(500);
    }
    $(".has-sub>a").not(thisParent).siblings("ul").slideUp(500);
  });

  $(".menu-btn").click(function () {
    $("body").toggleClass("overflow");
    $(".sidenav-overlay").fadeToggle();
    $(".sidenav").toggleClass("active");
    $(this).toggleClass("active");
  });
  $(".sidenav-overlay, .sidenav-close-btn").click(function () {
    $("body").removeClass("overflow");
    $(".sidenav-overlay").fadeOut();
    $(".sidenav").removeClass("active");
    $(".menu-btn").removeClass("active");
  });
  var prevScroll = $(window).scrollTop();

  $(this).scrollTop() >= 250
    ? $("header").addClass("fixed")
    : $("header").removeClass("fixed fixsedt");
  $(window).scroll(function () {
    $(this).scrollTop() >= 250
      ? $("header").addClass("fixed")
      : $("header").removeClass("fixed fixsedt");

    var currentScroll = $(window).scrollTop();
    prevScroll < currentScroll && prevScroll > 0
      ? $("header").removeClass("fixsedt")
      : $("header").addClass("fixsedt"),
      (prevScroll = currentScroll);
  });

  if ($(window).width() < 992) {
    var height = $(".page-p").prop("scrollHeight");
    console.log(height);
    if (height > 57) {
      $(".page-p").siblings(".show-more-cont").show();
    }
    $(".head-summary .show-more").click(function (e) {
      var text = $(this).parents(".head-summary").find(".page-p");
      var height = text.prop("scrollHeight");
      $(this).toggleClass("active");
      if ($(this).hasClass("active")) {
        text.height(height).css("display", "block");
      } else {
        text.height(56).css("display", "-webkit-box");
      }
    });

    var height = $(".product-main-p").prop("scrollHeight");
    console.log(height);
    if (height > 85) {
      $(".product-main-p").siblings(".show-more-cont").show();
    }
    $(".product-main-summary .show-more").click(function (e) {
      var text = $(this)
        .parents(".product-main-summary")
        .find(".product-main-p");
      var height = text.prop("scrollHeight");
      $(this).toggleClass("active");
      if ($(this).hasClass("active")) {
        text.height(height).css("display", "block");
      } else {
        text.height(84).css("display", "-webkit-box");
      }
    });
  }

  $(".edit-btn").click(function () {
    $(".item-footer").slideToggle(300);
    $(".date-price .price").fadeToggle(300);
  });

  const inputElements = [...document.querySelectorAll("input.code-input")];

  inputElements.forEach((ele, index) => {
    ele.addEventListener("input", (e) => {
      const [first] = e.target.value;
      e.target.value = first ?? "";
      const lastInputBox = index === inputElements.length - 1;
      const insertedContent = first !== undefined;
      if (insertedContent && !lastInputBox) {
        inputElements[index + 1].removeAttribute("disabled");
        inputElements[index + 1].focus();
        inputElements[index + 1].dispatchEvent(new Event("input"));
      }
      if (insertedContent && lastInputBox) {
        document.getElementById("code-submit-btn").classList.remove("disabled");
      }
    });
  });

  flatpickr(".form-flatpickr");

  const progressBar = document.getElementById("pointsProgress");
  if (progressBar) {
    progressBar.style.width = progressBar.getAttribute("data-width");
  }

  /***** gifts slider *****/
  var giftswiper = new Swiper(".gifts-slider .swiper-container", {
    // loop: true,
    spaceBetween: 20,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      767: {
        slidesPerView: 3,
      },
      1199: {
        slidesPerView: 3,
      },
    },
    pagination: {
      el: ".gifts-slider .swiper-pagination",
      clickable: true,
    },
    observer: true,
    observeParents: true,
  });
});
function showPass(showPass) {
  sibling = showPass.parentElement.nextElementSibling;
  sibling.focus();
  if (showPass.checked) {
    sibling.setAttribute("type", "text");
  } else {
    sibling.setAttribute("type", "password");
  }
}

function edit(button) {
  button.style.display = "none";
  var editBtns = document.querySelectorAll(".edit-btns")[0];
  editBtns.style.display = "flex";
  var editableElements = document.querySelectorAll("input.editable");
  editableElements.forEach((ele) => {
    ele.removeAttribute("disabled");
  });
}

function copyText(copyText) {
  navigator.clipboard.writeText(copyText.getAttribute("data-code"));
}

function accordion(acc_head) {
  acc_head.classList.toggle("active");
  var panel = acc_head.nextElementSibling;
  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

function modeSwitch(checkBox) {
  if (checkBox.checked == true) {
    document.body.classList.add("darkMode");
    localStorage.setItem("mode", "darkMode");
  } else {
    document.body.classList.remove("darkMode");
    localStorage.setItem("mode", "light");
  }
}
