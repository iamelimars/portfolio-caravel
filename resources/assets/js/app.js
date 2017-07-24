
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.$ = window.jQuery = require('jquery');
require('wowjs');
window.Vue = require('vue');
require('jquery.scrollto');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

// window.addEventListener("load", function() {
//    var loadScreen = document.getElementById("loader");
//    document.body.removeChild(loadScreen);
// });

$(window).on('load', function() {
    console.log('loaded');
   //
    $('#loading_line').animate({
        width: '100%',
    }, {
        easing: 'linear',
        duration: 6000,
        step: function(now) {

            var onepercent = $(window).width / 100 * 1;
            var data = now / onepercent;




            datatwo = data.toFixed(0);
            datapos = (Math.abs(datatwo));
            console.log(Math.round(now * 100) / 100 + '%');

            $('#loader__label').html(Math.round((now * 100) / 100) + '%');
            $('#loader').delay(6500).fadeOut('slow');
        }
    });

});

$(document).ready(function(){
    var wow = new WOW(
        {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
            callback:     function(box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null // optional scroll container selector, otherwise use window
        }
    );
    wow.init();

    // console.log(wow);
    // $('.parallax').parallax();
    // $('#fullpage').fullpage();


});
