// script.js

// This script file will be used to add interactivity to the plugin's frontend

jQuery(document).ready(function($) {

    // FAQ accordion functionality
    $('.faq-question').on('click', function() {
        $(this).next('.faq-answer').slideToggle();
    });

    // Lightbox functionality for screenshots
    $('.screenshot img').on('click', function() {
        var imgSrc = $(this).attr('src');
        $('body').append('<div class="lightbox"><img src="' + imgSrc + '"><span class="close">X</span></div>');
        $('.lightbox').fadeIn();
    });

    // Close lightbox
    $('body').on('click', '.lightbox .close', function() {
        $('.lightbox').fadeOut(function() {
            $(this).remove();
        });
    });

    // Testimonials slider functionality
    // Assuming you're using a simple slider where only one testimonial is visible at a time
    var testimonials = $('.testimonial');
    var currentTestimonial = 0;
    testimonials.hide().eq(currentTestimonial).show();

    $('.next-testimonial').on('click', function() {
        testimonials.eq(currentTestimonial).hide();
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        testimonials.eq(currentTestimonial).show();
    });

    $('.prev-testimonial').on('click', function() {
        testimonials.eq(currentTestimonial).hide();
        currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
        testimonials.eq(currentTestimonial).show();
    });

});
