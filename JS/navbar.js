// Keep track of how far the user has scrolled & change navbar color once past trigger point
$(window).scroll(function(){
    // If scrollTop > 60px add .scrolled class to nav element
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 60);
    });