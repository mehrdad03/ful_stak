$(document).ready(function () {
    var d = new Date().toLocaleDateString("fa-IR");
    $("#date").text(d);

    // Show More
    $(".more .show").on("click", function () {
        $(".exText").addClass("open")
        // change text and svg degree when clicked
        if($(".exText").hasClass("open")) {
            $(".more .show p").text("بسته شدن");
            $(".more .show svg").css("transform", "rotate(180deg)");
            if($(".exText").hasClass("open")){
                $(".more .show").on("click", function () {
                    $(".exText").removeClass("open")
                    $(".more .show p").text("ادامه مطلب");
                    $(".more .show svg").css("transform", "rotate(0deg)");
                })
            }
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


