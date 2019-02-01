
// NAVIGATION


$(".mobile-logo").click(function() {
    $("ul").slideToggle();
    $("ul ul").css("display", "none");
});

$(".main-menu li").click(function() {
    $(this).find('ul').slideToggle();
});

$(window).resize(function() {
    if($(window).width() > 768) 
    {
          $("ul").removeAttr('style');
    }
});