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

  //Form validation
  $.validator.addMethod(
    "isName",
    function (value, element, params) {
      let regexp = new RegExp(params);
      return this.optional(element) || regexp.test(value);
    },
    "Недопустимый формат имени"
  );
  $.validator.addMethod(
    "isEmail",
    function (value, element, params) {
      const regexp = new RegExp(params);
      return this.optional(element) || regexp.test(value);
    },
    "Введите действительный адрес электронной почты"
  );
  $.validator.addMethod(
    "isPhone",
    function (value, element, params) {
      const regexp = new RegExp(params);
      return this.optional(element) || regexp.test(value);
    },
    "Введите действительный номер телефона"
  );

  $("#modal-form").validate({
    rules: {
      name: {
        required: true,
        minlength: 2,
        isName: /[a-zA-Zа-яА-Я]+./,
      },
      email: {
        required: true,
        email: true,
        isEmail: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i,
      },
      phone: {
        required: true,
        isPhone: /^\+[0-9]{10,11}/,
      },
    },
    messages: {
      name: {
        required: "Поле 'Имя' обязательно к заполнению",
      },

      email: {
        required: "Поле 'Email' обязательно к заполнению",
        email: "Недопустимый формат имени email",
      },
      phone: {
        required: "Поле 'Телефон' обязательно к заполнению",
      },
    },
  });

  //Строковые переменные для отображения ответа от сервера
  const successResponse = "Отлично! Мы скоро вам перезвоним.";
  const failResponse = "Что-то пошло не так...Не удалось отправить форму.";

  //Функция, которая удаляет div с ответом от сервера через 3 сек
  function removeResponse() {
    setTimeout(function () {
      $(".response-wrapper").fadeOut(200);
    }, 3000);
  }

  //Функция отправки ajax-запроса на сервер
  function feedbackForm(form) {
    let response = $.ajax({
      method: "POST",
      url: "main.php",
      data: form.serialize(),
      success: function (data) {
        if (response.readyState == 4) {
          // alert(4);
          if (response.status == 200) {
            // alert(200);
            $(".modal-wrapper").fadeOut(200);
            $(".response-wrapper").fadeIn(200);
            $(".response__title").html(successResponse);
            removeResponse();
            form.trigger("reset");
          }
        }
      },
    });

    //Если все плохо, показывается сообщение пользователю что что-то пошло не так
    response.fail(function () {
      // alert("all bad");

      $(".modal-wrapper").fadeOut(200);
      $(".response-wrapper").fadeIn(200);
      $(".response__title").html(failResponse);
      removeResponse();
      form.trigger("reset");
    });
  }

  $(".response-wrapper").on("click", function (event) {
    if ($(event.target).closest(".response").length == 0) {
      $(".response-wrapper").fadeOut(200);
    }
  });
  $(".close-icon").on("click", function () {
    $(".modal-wrapper").fadeOut(200);
  });
  $(".btn_close-response").on("click", function () {
    $(".response-wrapper").fadeOut(200);
  });
  $("#modal-form").on("submit", function (e) {
    e.preventDefault();
    feedbackForm($("#modal-form"));
  });

  //Modal
  $("button.phone").on("click", function () {
    $(".modal-wrapper").fadeIn(200);
  });
  $(".modal-wrapper").on("click", function (event) {
    if ($(event.target).closest("#modal-form").length == 0) {
      $(this).fadeOut(200);
    }
  });
});
