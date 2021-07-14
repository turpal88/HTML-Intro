$(document).ready(function () {
  //Control mobile menu
  $(".slicknav-btn").on("click", function () {
    //$("header").fadeOut(200);
    $(".mobile-menu").css("transform", "translateX(0)");
    $(".slicknav-btn").fadeOut(200);
  });
  $(".x").on("click", function () {
    $(".mobile-menu").css("transform", "translateX(100%)");
    $(".slicknav-btn").fadeIn(100);
  });
});
