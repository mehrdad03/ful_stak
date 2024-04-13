$(document).ready(function () {
    var d = new Date().toLocaleDateString("fa-IR");
    $("#date").text(d);

    // Show More
    $(".more button").on("click", function () {
        $(".exText").css("height", "800px");
        $(".more").text("");
    });

    // Accordion
    $(".acc-item").on("click", function () {
        $(".acc-item").removeClass("active");
        $(this).toggleClass("active");
        $(this).css("margin-bottom", "5%");
    });

    // Q & A
    $(".newQ").hide();
    $(".addQ").on("click", function () {
        $(".newA").hide();
        $(".newQ").show();
    });
    $(".closeQ").on("click", function () {
        $(".newQ").hide();
        $(".newA").hide();
    });
});

$('a.reply').on('click', function () {
    //hide other question box
    $(".newQ").hide();
    var formParent=$(this).parents('.question')
   formParent.find('.newA').toggle()

})

// Slider
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});
