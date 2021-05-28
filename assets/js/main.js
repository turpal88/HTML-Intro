(function ($) {
  "use strict";

  /* 1. Preloder (готовый код, можно использовать в любом проекте) */
  $(window).on("load", function () {
    $("#preloader-active").delay(450).fadeOut("slow");
    $("body").delay(450).css({
      overflow: "visible",
    });
  });

  /* 2. Sticky And Scroll UP */
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll < 400) {
      $(".header-sticky").removeClass("sticky-bar");
      $("#back-top").fadeOut(500);
    } else if (
      $(window).width() < 992 &&
      $(".menu-main").hasClass("menu-main-active")
    ) {
      $(".header-sticky").removeClass("sticky-bar");
    } else {
      $(".header-sticky").addClass("sticky-bar");
      $("#back-top").fadeIn(500);
    }
  });

  // Scroll Up
  $("#back-top a").on("click", function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });

  //User-defined scripts

  //Modal
  $("button.header-btn").on("click", function () {
    $(".modal-wrapper").fadeIn(500);
  });
  $(".modal-wrapper").on("click", function (event) {
    if ($(event.target).closest("#modal-form").length == 0) {
      $(this).fadeOut(500);
    }
  });

  //Slider
  $(".slider-area").slick({
    dots: true,
  });

  //Parallax
  let scene = document.getElementById("scene");
  let parallaxInstance = new Parallax(scene);

  //Tabs
  const makeActiveTab = function (idname, etarget) {
    $(".tab-pane").removeClass("show active");
    $(".nav-link").removeClass("active");
    idname.addClass("show active");
    etarget.addClass("active");
  };
  //Height of div with tab-content

  $("#nav-tab").on("click", (event) => {
    const scrollDistance = $("#nav-tabContent").offset().top;
    switch ($(event.target).attr("id")) {
      case "nav-home-tab":
        $(window).scrollTop(scrollDistance);
        makeActiveTab($("#nav-home"), $(event.target));
        break;
      case "nav-profile-tab":
        $(window).scrollTop(scrollDistance);
        makeActiveTab($("#nav-profile"), $(event.target));
        break;
      case "nav-contact-tab":
        $(window).scrollTop(scrollDistance);
        makeActiveTab($("#nav-contact"), $(event.target));
        break;
      case "nav-dinner-tab":
        $(window).scrollTop(scrollDistance);
        makeActiveTab($("#nav-dinner"), $(event.target));
        break;
    }
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

  $("form").each(function () {
    $(this).validate({
      rules: {
        name: {
          required: true,
          minlength: 2,
          isName: /[a-zA-z]+./,
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
  });

  //Строковые переменные для отображения ответа от сервера
  const successResponse = "Спасибо! Мы свяжемся с вами в ближайшее время.";
  const failResponse = "Что-то пошло не так...Не удалось отправить форму.";

  //Функция, которая удаляет div с ответом от сервера через 3 сек
  function removeResponse() {
    setTimeout(function () {
      $(body).remove($(".response-wrapper"));
    }, 3000);
  }

  //Функция отправки ajax-запроса на сервер
  function feedbackForm(form) {
    let response = $.ajax({
      method: "POST",
      url: "mail.php",
      data: form.serialize(),
    });
    //Если статус ответа 4, проверяем что статус 200, скрываем прелоадер и добавляется динамически разметка - div с сообщением пользователю
    if (response.readyState == 4) {
      if (response.status == 200) {
        $("#preloader-active").fadeOut(50);
        $(body).append(
          $(`<div class="response-wrapper">
                          <div class="overlay"></div>
                          <div class="response response_success">${successResponse}</div>
                          </div>`)
        );
        removeResponse();
      }
      //Если еще идет загрузка ответа, показываем прелоадер
    } else if (response.readyState == 3) {
      $("#preloader-active").fadeIn(50);
    }
    //Если все плохо, показывается сообщение пользователю что что-то пошло не так
    response.fail(function () {
      $("#preloader-active").fadeOut(50);
      $(body).append(
        $(`<div class="response-wrapper">
                          <div class="overlay"></div>
                          <div class="response response_fail">${failResponse}</div>
                          </div>`)
      );
      removeResponse();
    });
  }
  feedbackForm($(".form-book"));

  //Small menu-button
  $(".slicknav_btn").on("click", function () {
    $(".slicknav_btn").fadeOut(50);
    $(".menu-main").addClass("menu-main-active");
    $(".header-sticky").removeClass("sticky-bar");
  });
  $(".arrow-box").on("click", function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 400) {
      $(".header-sticky").addClass("sticky-bar");
    }
    $(".slicknav_btn").fadeIn(50);
    $(".menu-main").removeClass("menu-main-active");
  });
})(jQuery);
