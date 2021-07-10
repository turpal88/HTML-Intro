$(document).ready(function () {
  $(".sizes-types__item").on("click", function () {
    $(".sizes-types__item").removeClass("sizes-types__item_active");
    $(this).addClass("sizes-types__item_active");
  });

  $(".colors-types__item").on("click", function () {
    $(".colors-types__item").removeClass("colors-types__item_active");
    $(this).addClass("colors-types__item_active");
  });
});
