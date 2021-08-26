$(function () {
    $("#blackmenu ul li > a").addClass("animsition-link");

    $(".menu_box, .menu_box > ul").hover(
        function () {
            $(this).find("ul").slideDown();
        },
        function () {
            $(this).find("ul").slideUp();
        }
    );

    $("body").on("click toutchstart", ".icon-lang", function (e) {
        if ($(this).hasClass("lang-not-active")) {
        } else {
            e.preventDefault();
            $(".lang-not-active").slideDown();
        }
    });

    $("body").on("click", ".menubutton", function () {
        $("#blackmenu").slideDown();
        //$('body').toggleClass('blackmenuopened');
    });
    $("body").on("click", ".wburger, #blackmenuul a", function () {
        $("#blackmenu").slideUp();
        //$('body').toggleClass('blackmenuopened');
    });

    $(".parent_hover").hover(
        function () {
            $(this).find(".element_show").slideDown();
        },
        function () {
            $(this).find(".element_show").slideUp();
        }
    );

    $("#blackmenu ul li").hover(
        function () {
            $(this).find("ul.submenu").slideDown();
        },
        function () {
            $(this).find("ul.submenu").slideUp();
        }
    );

    $(".insert_v_url").click(function () {
        /*$('.intro_tube').attr( 'src','https://www.youtube.com/embed/5Am0MxS-5GU?autoplay=1');*/
        $(".intro_tube").attr(
            "src",
            "https://www.youtube.com/embed/1itj14Uj3Rg?rel=0"
        );
    });

    $(".intro_modal .close").click(function () {
        $(".intro_tube").attr("src", "#");
    });

    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".fix_nav").fadeIn();
        } else {
            $(".fix_nav").fadeOut();
        }
    });
});
