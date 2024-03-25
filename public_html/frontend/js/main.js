$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $("#header").addClass("header");
        } else $("#header").removeClass("header");
    });

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
        $(this).hide();
    });

    // Accordions
    $(".accordion-header").click(function () {
        var content = $(this).closest(".contentBox").find(".accordion-content");
        $(".accordion-content").not(content).slideUp();
        content.slideToggle();
    });
});

//Profile After Auth
$(".profile button").on("click", function () {
    $(".popover").toggleClass("active");
});
