function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
        $('header').addClass("sticky");
    } else {
        $('header').removeClass("sticky");
    };
});


// Make the Back To Top slide smoothly

$('#back-to-top').each(function () {
    $(this).click(function () {
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
        return false;
    })
})

$('.con-work').fadeInScroll();
$('.card').fadeInScroll();