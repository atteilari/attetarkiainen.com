// Using Jquery to change color of Navbar when scrolled over X amount of pixels from top
$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 60);
    });