(function (f) {
    f(window).scroll(function () {
        f('#secondary_bar')[
            (f(this).scrollTop() > 55 ? "add" : "remove") + "Class"
            ]("bar_fixed");
    });
});