// Offer slider
$(document).ready(function () {
  $(".offer-wrapper").slick({
    arrows: false,
    asNavFor: ".photo-wrapper__main-photo",
  });
  $(".photo-wrapper__main-photo").slick({
    arrows: false,
    asNavFor: ".offer-wrapper",
  });
  let tempArr = [];
  let temp;
  $(".slick-slide").each(function () {
    if (
      !$(this).hasClass("slick-cloned") &&
      $(this).closest(".offer-wrapper").length > 0
    ) {
      tempArr.push($(this).attr("data-slick-index"));
    }
    if ($(this).hasClass("slick-active")) {
      temp = $(this).attr("data-slick-index");
    }
  });

  for (let i = 0; i < tempArr.length; i++) {
    $(".navigation").append('<li class="navigation__item"></li>');
  }
  $(".navigation__item").eq(temp).addClass("navigation__item_active");

  $(".offer-wrapper").on("afterChange", function (event, slick, direction) {
    $(".navigation__item").removeClass("navigation__item_active");
    $(".navigation__item")
      .eq(slick.currentSlide)
      .addClass("navigation__item_active");
  });
  $(".navigation__item").on("click", function () {
    $(".navigation__item").removeClass("navigation__item_active");
    $(this).addClass("navigation__item_active");
    $(".offer-wrapper").slick("slickGoTo", $(this).index());
  });

  //Sticky header
  $(window).on("scroll", function () {
    let scroll = $(window).scrollTop();
    if (scroll < 156) {
      $(".header").removeClass("header-sticky");
      //$("#back-top").fadeOut(500);
    } else {
      $(".header").addClass("header-sticky");
    }
  });

  //Change src phone-icon
  $(".phone img").bind({
    mouseenter: function () {
      $(this).attr("src", "img/header/phone-icon-white.png");
    },
    mouseleave: function () {
      $(this).attr("src", "img/header/phone-icon.png");
    },
  });
});
