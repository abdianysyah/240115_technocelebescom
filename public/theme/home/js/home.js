$(document).ready(function(){
    $(".navbar-toggler").on("click", function () {
        if ($(".navbar-toggler").attr("aria-expanded") === "true") {
            $("nav").addClass("bg-scroll");
        } else {
            $("nav").removeClass("bg-scroll");
        }
    });
});