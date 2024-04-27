$(document).ready(function () {
    var d = new Date().toLocaleDateString("fa-IR");
    $("#date").text(d);

    // Show More
    $(".more button").on("click", function () {
        $(".exText").css("height", "100%");
        $(this).hide();
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


