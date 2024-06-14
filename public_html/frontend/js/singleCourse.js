$(document).ready(function () {
    var d = new Date().toLocaleDateString("fa-IR");
    $("#date").text(d);

    $(".more .show").on("click", function () {
        var $exText = $(".exText");
        var $showMore = $(".more .show p");
        var $showIcon = $(".more .show svg");
    
        // Toggle the 'open' class on the .exText element
        $exText.toggleClass("open");
    
        // Check if the .exText element has the 'open' class
        if ($exText.hasClass("open")) {
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
});
