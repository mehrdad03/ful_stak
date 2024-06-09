$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $("#header").addClass("header");
        } else $("#header").removeClass("header");
    });

    // Roadmap Popup
    $("#roadmapBtn").on("click", function () {
        $("#roadmapPopup").addClass("active");
    });
    $("body").on("click", function (event) {
        if (!$(event.target).closest("#roadmapBtn").length) {
            $("#roadmapPopup").removeClass("active");
        }
    });
    // Mobile version
    $("#mobileRoad").hide();
    $("#mRoad").on("click", function () {
        $("#mobileRoad").slideToggle();
    });

    // text slider
    var slideIndex = 0;
    var sliderText = ".vertical-slider .slider-text";
    var slideHeight = $(sliderText).outerHeight();

    function showSlide() {
        $(sliderText).css(
            "transform",
            "translateY(-" + slideHeight * slideIndex + "px)"
        );
        slideIndex = (slideIndex + 1) % $(sliderText).length;
    }

    setInterval(showSlide, 1500); // Change slide every 2 seconds

    // Mobile Menu
    $("#openMenu").on("click", function () {
        $(".mobileMenu").addClass("active");
        $(".dropBox").show();
        $("html body").addClass("notScroll");
    });
    $("#closeMenu").on("click", function () {
        $(".mobileMenu").removeClass("active");
        $("html body").removeClass("notScroll");
        $(".dropBox").hide();
    });
    $(".dropBox").on("click", function () {
        $(".mobileMenu").removeClass("active");
        $("html body").removeClass("notScroll");
        $(this).hide();
    });

    // Accordions
    $(".accordion-header").click(function () {
        var content = $(this).closest(".contentBox").find(".accordion-content");
        $(".accordion-content").not(content).slideUp();
        content.slideToggle();
    });

    // Slider
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
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
                slidesPerView: 2,
                spaceBetween: 50,
            },
            1440: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
});

//Profile After Auth
$(".profile button").on("click", function () {
    $(".popover").toggleClass("active");
});
// وقتی روی هر المانی به جز باکس کلیک شود
$("body").on("click", function (event) {
    // اگر المانی که کلیک شده است، باکس active نباشد، کلاس active از باکس حذف شود
    if (!$(event.target).closest(".profile").length) {
        $(".popover").removeClass("active");
    }
});
