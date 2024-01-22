
$(document).ready(function(){


$(document).ready(function () {

    $(".navbar-toggler").on("click", function () {
        if ($(".navbar-toggler").attr("aria-expanded") === "true") {
            $("nav").addClass("bg-scroll");
        } else {
            $("nav").removeClass("bg-scroll");
        }
    });

});
  
});

// $(".card-contain")
//     .on("mouseenter", function () {
//         $(this).find(".deskription").css("display", "flex");
//         $(this).find(".card-content").fadeIn();
//     })
//     .on("mouseleave", function () {
//         $(this).find(".deskription").css("display", "none");
//         $(this).find(".card-content").fadeOut();
//     });

