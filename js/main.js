jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
    });
    $(".top-menu ul li a").each(function () {
        var nomArchivo = document.location.pathname.match(/[^\/]+$/)[0];
        if ($(this).attr("href") == nomArchivo) {
            $(this).addClass("active");
        }
    });
      $().UItoTop({easingType: 'easeOutQuart'});

  
});