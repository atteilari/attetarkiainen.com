// Keep track of how far the user has scrolled & play animation once past trigger point
$(window).scroll(function(){
    // If scrollTop > 250px add .fadingIn class to i elements
    $('i').toggleClass('fadingIn', $(this).scrollTop() > 250);
    });