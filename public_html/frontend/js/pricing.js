$(document).ready(function () {
  // Stacks
  $(".stack_btns li").on("click", function () {
    $(".stack_btns li").removeClass("tab");
    $(this).addClass("tab");
  });
});
