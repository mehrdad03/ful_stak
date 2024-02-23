$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
      $("#header").addClass("header");
    } else $("#header").removeClass("header");
  });

  $("#openMenu").on("click", function () {
    $(".mobileMenu").addClass("active");
    $(".dropBox").show();
    $('html body').addClass("notScroll");
  });

  $("#closeMenu").on("click", function () {
    $(".mobileMenu").removeClass("active");
    $('html body').removeClass("notScroll");
    $(".dropBox").hide();
  });
  $(".dropBox").on("click", function () {
    $(".mobileMenu").removeClass("active");
    $(this).hide();
  });

  // Accordions

  $(".contentBox").on("click", function () {
    $(this).toggleClass("active");
  });
});
