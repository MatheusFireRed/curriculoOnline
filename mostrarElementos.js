$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
 
    if (scroll >= 0) { //você escolhe o valor que desejar
       $("redes-sociais").addClass("animated fadeInUp");
       $("menu").addClass("animated fadeInUp");
    }