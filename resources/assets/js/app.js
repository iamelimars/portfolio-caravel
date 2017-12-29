
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






// // dots is an array of Dot objects,
// // mouse is an object used to track the X and Y position
//    // of the mouse, set with a mousemove event listener below
// var dots = [],
//     mouse = {
//       x: 0,
//       y: 0
//     };

// // The Dot object used to scaffold the dots
// var Dot = function() {
//   this.x = 0;
//   this.y = 0;
//   this.node = (function(){
//     var n = document.createElement("div");
//     n.className = "trail";
//     document.body.appendChild(n);
//     return n;
//   }());
// };
// // The Dot.prototype.draw() method sets the position of 
//   // the object's <div> node
// Dot.prototype.draw = function() {
//   this.node.style.left = this.x + "px";
//   this.node.style.top = this.y + "px";
// };

// // Creates the Dot objects, populates the dots array
// for (var i = 0; i < 3; i++) {
//   var d = new Dot();
//   dots.push(d);
// }

// // This is the screen redraw function
// function draw() {
//   // Make sure the mouse position is set everytime
//     // draw() is called.
//   var x = mouse.x,
//       y = mouse.y;
  
//   // This loop is where all the 90s magic happens
//   dots.forEach(function(dot, index, dots) {
//     var nextDot = dots[index + 1] || dots[0];
    
//     dot.x = x;
//     dot.y = y;
//     dot.draw();
//     x += (nextDot.x - dot.x) * .9;
//     y += (nextDot.y - dot.y) * .9;

//   });
// }

// addEventListener("mousemove", function(event) {
//   //event.preventDefault();
//   mouse.x = event.pageX;
//   mouse.y = event.pageY;
// });

// // animate() calls draw() then recursively calls itself
//   // everytime the screen repaints via requestAnimationFrame().
// function animate() {
//   draw();
//   requestAnimationFrame(animate);
// }

// // And get it started by calling animate().
// animate();













   //
    $('#loading_line').animate({
        width: '100%',
    }, {
        easing: 'linear',
        duration: 2000,
        step: function(now) {

            var onepercent = $(window).width / 100 * 1;
            var data = now / onepercent;




            datatwo = data.toFixed(0);
            datapos = (Math.abs(datatwo));
            console.log(Math.round(now * 100) / 100 + '%');

            $('#loader__label').html(Math.round((now * 100) / 100) + '%');
            $('#loader').delay(2500).fadeOut('fast');
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





    var SEPARATION = 100, AMOUNTX = 50, AMOUNTY = 50;
var container, stats;
var camera, scene, renderer;
var particles, particle, count = 0;
var mouseX = 0, mouseY = 0;
var windowHalfX = window.innerWidth / 2;
var windowHalfY = window.innerHeight / 2;
init();
animate();
function init() {
  container = document.getElementById('hero');
  // container = document.createElement( 'div' );
  // document.body.appendChild( container );
  camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 10000 );
  camera.position.z = 1000;
  camera.position.y = 1000;
  camera.position.x = -1000;
  scene = new THREE.Scene();
  particles = new Array();
  var PI2 = Math.PI * 2;
  var material = new THREE.SpriteCanvasMaterial( {
    color: 0xC5B358,
    program: function ( context ) {
      context.beginPath();
      context.arc( 0, 0, 0.5, 0, PI2, true );
      context.fill();
    }
  } );
  var i = 0;
  for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
    for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
      particle = particles[ i ++ ] = new THREE.Sprite( material );
      particle.position.x = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 );
      particle.position.z = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 );
      scene.add( particle );
    }
  }
  renderer = new THREE.CanvasRenderer();
  renderer.setClearColor (0xffffff, 1);
  renderer.setPixelRatio( window.devicePixelRatio );
  renderer.setSize( window.innerWidth, window.innerHeight );
  container.appendChild( renderer.domElement );
  stats = new Stats();
  // container.appendChild( stats.dom );
  document.addEventListener( 'mousemove', onDocumentMouseMove, false );
  document.addEventListener( 'touchstart', onDocumentTouchStart, false );
  document.addEventListener( 'touchmove', onDocumentTouchMove, false );
  //
  window.addEventListener( 'resize', onWindowResize, false );
}
function onWindowResize() {
  windowHalfX = window.innerWidth / 2;
  windowHalfY = window.innerHeight / 2;
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize( window.innerWidth, window.innerHeight );
}
//
function onDocumentMouseMove( event ) {
  mouseX = event.clientX - windowHalfX;
  mouseY = event.clientY - windowHalfY;
}
function onDocumentTouchStart( event ) {
  if ( event.touches.length === 1 ) {
    event.preventDefault();
    mouseX = event.touches[ 0 ].pageX - windowHalfX;
    mouseY = event.touches[ 0 ].pageY - windowHalfY;
  }
}
function onDocumentTouchMove( event ) {
  if ( event.touches.length === 1 ) {
    event.preventDefault();
    mouseX = event.touches[ 0 ].pageX - windowHalfX;
    mouseY = event.touches[ 0 ].pageY - windowHalfY;
  }
}
//
function animate() {
  requestAnimationFrame( animate );
  render();
  stats.update();
}
function render() {
  camera.position.x += ( mouseX - camera.position.x ) * .05;
  camera.position.y += ( - mouseY - camera.position.y ) * .05;
  // console.log(camera.position.x);
  camera.lookAt( scene.position );
  var i = 0;
  for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
    for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
      particle = particles[ i++ ];
      particle.position.y = ( Math.sin( ( ix + count ) * 0.3 ) * 50 ) +
        ( Math.sin( ( iy + count ) * 0.5 ) * 50 );
      particle.scale.x = particle.scale.y = ( Math.sin( ( ix + count ) * 0.3 ) + 1 ) * 4 +
        ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 4;
    }
  }
  renderer.render( scene, camera );
  count += 0.1;
}









});
