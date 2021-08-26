var counter = 200;
var opacityCount = 0;
var lastScroll = 0;

window.addEventListener("scroll", function () {
    var currentScroll =
        document.documentElement.scrollTop || this.document.body.scrollTop;
    if (currentScroll > 0 && lastScroll <= currentScroll) {
        lastScroll = currentScroll;
        if (counter < 201 && counter > 100) {
            counter -= 1;
            opacityCount += 0.015;
            if (opacityCount > 1) {
                opacityCount = 1;
            }
            $(".banner").css({ "background-size": "auto" + counter + "%" });
            $(".banner-overlay").css({ opacity: opacityCount });
        } else {
            lastScroll = currentScroll;
            if (counter < 200) {
                counter += 1;
            }
            opacityCount -= 0.015;
            if (opacityCount < 0.01) {
                opacityCount = 0.01;
            }
            $(".banner").css({ "background-size": "auto" + counter + "%" });
            $(".banner-overlay").css({ opacity: opacityCount });
        }
    }
});
