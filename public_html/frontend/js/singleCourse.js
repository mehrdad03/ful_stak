document.addEventListener('livewire:navigated', () => {

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 700) {
            /*$("#header").addClass("header");*/
            $(".scroll-add-to-basket").addClass("fixed");
        } else{
            /* $("#header").removeClass("header");*/
            $(".scroll-add-to-basket").removeClass("fixed");
        }
    });


    var d = new Date().toLocaleDateString("fa-IR");
    $("#date").text(d);

    $(".moreDesc .show").on("click", function () {
        var $descText = $(".descText");
        var $showMore = $(".moreDesc .show p");
        var $showIcon = $(".moreDesc .show svg");

        // Toggle the 'open' class on the .descText element
        $descText.toggleClass("open");

        // Check if the .descText element has the 'open' class
        if ($descText.hasClass("open")) {
            // Change text and rotate the SVG icon to indicate 'close'
            $showMore.text("بسته شدن");
            $showIcon.css("transform", "rotate(180deg)");
        } else {
            // Change text and rotate the SVG icon back to indicate 'open'
            $showMore.text("ادامه مطلب");
            $showIcon.css("transform", "rotate(0deg)");
        }
    });

    // Accordion
    $(".acc-item").click(function () {
        $(".acc-item").removeClass("active");
        $(this).toggleClass("active");
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

    $("a.reply").on("click", function () {
        //hide other question box
        $(".newQ").hide();
        var formParent = $(this).parents(".question");
        formParent.find(".newA").toggle();
    });

        $('.page-item').on('click', function () {
        const section = document.getElementById('questions');
        section.scrollIntoView({behavior: 'smooth', block: 'start'});
    })

});
