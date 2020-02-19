$(window).scroll(function() {
    if ($("#menu").offset().top > 56) {
        $("#menu").removeClass("navbar-dark");
        $("#menu").removeClass("bg-dark");
        $("#menu").addClass("navbar-light");
        $("#menu").addClass("bg-light");
    } else {
        $("#menu").removeClass("navbar-light");
        $("#menu").removeClass("bg-light");
        $("#menu").addClass("navbar-dark");
        $("#menu").addClass("bg-dark");
    }
});