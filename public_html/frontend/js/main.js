document.addEventListener('livewire:navigated', () => {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            /*$("#header").addClass("header");*/
            $("#story").addClass("sticky");
        } else{
           /* $("#header").removeClass("header");*/
            $("#story").removeClass("sticky");
        }
    });

    // Roadmap Popup
    $("#roadmapBtn").on("click", function () {
        $("#roadmapPopup").toggleClass("active");
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

    setInterval(showSlide, 1500); // Change slide every 1.5 seconds

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

    // Show more / less
    $(".more .show").on("click", function () {
        var $exText = $(".exText");
        var $showMore = $(".more .show p");
        var $toggleIcon = $(".toggle-icon");

        // Toggle the 'open' class on the .exText element
        $exText.toggleClass("open");

        // Check if the .exText element has the 'open' class
        if ($exText.hasClass("open")) {
            // Change text and rotate the SVG icon to indicate 'close'
            $showMore.text("بسته شدن");
            $toggleIcon.replaceWith(
                '<svg class="toggle-icon text-danger" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M3.53 2.47a.75.75 0 0 0-1.06 1.06l18 18a.75.75 0 1 0 1.06-1.06l-18-18ZM22.676 12.553a11.249 11.249 0 0 1-2.631 4.31l-3.099-3.099a5.25 5.25 0 0 0-6.71-6.71L7.759 4.577a11.217 11.217 0 0 1 4.242-.827c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113Z" /><path d="M15.75 12c0 .18-.013.357-.037.53l-4.244-4.243A3.75 3.75 0 0 1 15.75 12ZM12.53 15.713l-4.243-4.244a3.75 3.75 0 0 0 4.244 4.243Z" /><path d="M6.75 12c0-.619.107-1.213.304-1.764l-3.1-3.1a11.25 11.25 0 0 0-2.63 4.31c-.12.362-.12.752 0 1.114 1.489 4.467 5.704 7.69 10.675 7.69 1.5 0 2.933-.294 4.242-.827l-2.477-2.477A5.25 5.25 0 0 1 6.75 12Z" /></svg>'
            );
        } else {
            // Change text and rotate the SVG icon back to indicate 'open'
            $showMore.text("ادامه مطلب");
            $toggleIcon.replaceWith(
                '<svg class="toggle-icon text-white" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" /><path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" /></svg>'
            );
        }
    });


    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollTopBtn").style.display = "flex";
        } else {
            document.getElementById("scrollTopBtn").style.display = "none";
        }
    }

    function scrollToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    document.getElementById("scrollTopBtn").addEventListener("click", scrollToTop);


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

