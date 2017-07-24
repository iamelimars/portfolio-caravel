$(document).ready(function(){
    console.log('working');
    new WOW().init();
    // $('.parallax').parallax();
    // $('#fullpage').fullpage();

    $('.menu-btn').sideNav({
            menuWidth: $(window).width(), // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        }
    );

    // Get the form
    var form = $('#ajax-contact');

    //  Get the message
    var formMessages = $('#form-messages')

    // $(form).submit(function(event) {
    //   //Stop the browser from submitting the form
    //   event.preventDefault();
    //
    //   var formData = $(form).serialize();
    //
    //   var fullName = $('#full_name').val();
    //   var email = $('#email').val();
    //   var subject = $('#subject').val();
    //   var message = $('#message').val();
    //
    //
    //   console.log(fullName);
    //   console.log(email);
    //   console.log(subject);
    //   console.log(message);
    //
    //
    //   $.ajax({
    //       type: 'POST',
    //       url: $(form).attr('action'),
    //       data: "name=" + fullName + "&email=" + email + "&message=" + message
    //   })
    //   // .done(function(response) {
    //   //   console.log("Success");
    //   //     // Make sure that the formMessages div has the 'success' class.
    //   //     $(formMessages).removeClass('error');
    //   //     $(formMessages).addClass('success');
    //   //
    //   //     // Set the message text.
    //   //     $(formMessages).text(response);
    //   //
    //   //     // Clear the form.
    //   //     $('#name').val('');
    //   //     $('#email').val('');
    //   //     $('#message').val('');
    //   // })
    //   // .fail(function(data) {
    //   //   console.log("Failed");
    //   //     // Make sure that the formMessages div has the 'error' class.
    //   //     $(formMessages).removeClass('success');
    //   //     $(formMessages).addClass('error');
    //   //
    //   //     // Set the message text.
    //   //     if (data.responseText !== '') {
    //   //         $(formMessages).text(data.responseText);
    //   //     } else {
    //   //         $(formMessages).text('Oops! An error occured and your message could not be sent.');
    //   //     }
    //   // });
    //
    //
    //   console.log("Submitted");
    // });


    $('#close-sidenav').click(function () {
        $('#close-sidenav').sideNav('hide');
    });

    $('#service-btn').click(function() {
        $('#services').animatescroll({scrollSpeed:3000,easing:'easeInOutSine'});
    });
    $('#skills-btn').click(function() {
        $('#skills').animatescroll({scrollSpeed:3000,easing:'easeInOutSine'});
    });
    $('#pricing-btn').click(function() {
        $('#pricing').animatescroll({scrollSpeed:3000,easing:'easeInOutSine'});
    });
    $('#works-btn').click(function() {
        $('#works').animatescroll({scrollSpeed:3000,easing:'easeInOutSine'});
    });
    $('#quote-btn').click(function() {
        $('#quote').animatescroll({scrollSpeed:3000,easing:'easeInOutSine'});
    });
    $('#contact-btn').click(function() {
        $('#contact').animatescroll({scrollSpeed:3000,easing:'easeInOutSine'});
    });

    jQuery(document).ready(function(){
        jQuery('.skillbar').each(function(){
            jQuery(this).find('.skillbar-bar').animate({
                width:jQuery(this).attr('data-percent')
            },4000);
        });
    });


    var parallax = document.querySelectorAll(".parallax"),
        speed = 0.4;

    window.onscroll = function(){
        [].slice.call(parallax).forEach(function(el,i){

            var windowYOffset = window.pageYOffset,
                elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

            el.style.backgroundPosition = elBackgrounPos;

        });
    };
})
