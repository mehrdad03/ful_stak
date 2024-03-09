$(document).ready(function () {
    $('.coursbtn button').on('click', function(){
        $('.coursbtn button').removeClass('active');
        $(this).addClass('active');
    })
    $(".circlechart").circlechart();

    $(".modal-backdrop").hide();
    $("#openMenu").on("click", function () {
      $(".sidebar").css("right", "-10px");
      $(".modal-backdrop").show();
    });
    $("#close").on("click", function () {
      $(".sidebar").css("right", "-400px");
      $(".modal-backdrop").hide();
      $('body').removeClass("notScroll")
    });
    $(".modal-backdrop").on("click", function () {
      $(".sidebar").css("right", "-500px");
      $(".modal-backdrop").hide();
      $('body').removeClass("notScroll")
    });
});
