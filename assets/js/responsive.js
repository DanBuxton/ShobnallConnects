var toggleNav = $("#toggle-nav");
var nav = $("#nav");

$().ready(function () {
    if (window.location.href.includes('Admin'))
        var url = "../assets/js/functions.js";
    else
        var url = "assets/js/functions.js";
    $.getScript(url, function () {
        toggleNav.click(function () {
            // Get this to animate
            //toggleNav.rotate(90);
            //toggleNav.css("animate", "transform: rotate(90)");

            var menuicon = document.getElementsByClassName("icon-menu");
            if (menuicon.length > 0) {
                // Open
                toggleNav.removeClass("icon-menu");
                toggleNav.addClass("icon-cancel");

                nav.removeClass("collapse");
                nav.addClass("expand");
            } else {
                // Closed
                toggleNav.removeClass("icon-cancel");
                toggleNav.addClass("icon-menu");

                nav.removeClass("expand");
                nav.addClass("collapse");
            }

            // Animate the navbar from the left
            //nav.animate({ "transform": "200px" }, "slow");
        });
    });
});
