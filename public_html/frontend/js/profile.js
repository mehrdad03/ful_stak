$(document).ready(function () {
    $('.coursbtn button').on('click', function(){
        $('.coursbtn button').removeClass('active');
        $(this).addClass('active');
    })
    $(".circlechart").circlechart();
});
