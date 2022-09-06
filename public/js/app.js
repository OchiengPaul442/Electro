$(document).ready(function () {
    // close menu list on click outside div
    closeDiv("#mobile-menu-list", ".menu1", ".menu2");
    // close search bar on click outside div
    closeDiv("#mobile-search-bar", ".icon1", ".icon2");
    // show and hide menu
    showHideDiv(".menu1", ".menu2", "#mobile-menu-list");
    // show and hide search bar
    showHideDiv(".icon1", ".icon2", "#mobile-search-bar");
    // show and hide drawer
    showHideDiv2(".message-btn", ".message-btn", "#drawer-contact");

    // Auth modal (different form display) section
    function authModal() {
        // login form
        $(".auth-btn").click(function () {
            $("#login-form").show();
            $("#signup-form").hide(300);
            $("#forgotpwd-form").hide(300);
            $("#AuthModalPopupScrollableLabel").text("Login Form");
        });
        // signup form
        $("#no-account-btn").click(function () {
            $("#login-form").hide(300);
            $("#signup-form").show(300);
            $("#AuthModalPopupScrollableLabel").text("SignUp Form");
        });
        // login form
        $("#have-account-btn,#have-account-btn2").click(function () {
            $("#login-form").show(300);
            $("#signup-form").hide(300);
            $("#forgotpwd-form").hide(300);
            $("#AuthModalPopupScrollableLabel").text("Login Form");
        });
        // forgot password form
        $("#forgotpwd-btn").click(function () {
            $("#login-form").hide(300);
            $("#signup-form").hide(300);
            $("#forgotpwd-form").show(300);
            $("#AuthModalPopupScrollableLabel").text("Password Recovery Form");
        });
    }
    // Stick navbar to top of screen when scrolled down
    function stickyNavbar() {
        var navbar = $("#Navbar,#mobile-menu-list");
        var navbarHeight = navbar.height();
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= navbarHeight) {
                $("#menu-list-stick").show(200);
                navbar.addClass("sticky");
            } else {
                $("#menu-list-stick").hide(200);
                navbar.removeClass("sticky");
            }
        });
    }
    // Scroll to top of page when clicked on top button
    function scrollToTop() {
        $(window).scroll(function () {
            // show button
            if ($(this).scrollTop() > 100) {
                $("#scroll-to-top").fadeIn();
            } else {
                $("#scroll-to-top").fadeOut();
            }
        });
        // code to animate scroll to top page
        $("#scroll-to-top").click(function () {
            $("html, body").animate({ scrollTop: 0 }, 800);
            return false;
        });
    }
    // Close div when clicked outside of it
    function closeDiv(x, y, z) {
        $(document).mouseup(function (e) {
            var container = $(x);
            if (
                !container.is(e.target) &&
                container.has(e.target).length === 0
            ) {
                // search section
                $(y).show();
                $(z).hide();
                container.slideUp(500);
            }
        });
    }
    // code to show and hide div
    function showHideDiv(a, b, c) {
        $(a).click(function () {
            $(a).toggle();
            $(b).toggle();
            $(c).slideToggle(500);
        });
    }
    function showHideDiv2(x, y, z) {
        $(x).click(function () {
            $(x).toggle();
            $(y).toggle();
            $(z).show();
        });
    }
   
    // function call
    scrollToTop();
    stickyNavbar();
    authModal();
});
