@extends('layouts.app')

@section('pageTitle', 'Iamelimars')

@section('sidenav-content')
    <li><a id="service-btn">Services</a></li>
    <li><a id="skills-btn">Skills</a></li>
    <li><a id="pricing-btn">Pricing</a></li>
    <li><a id="works-btn">Works</a></li>
    <li><a id="quote-btn">Quote</a></li>
    <li><a id="contact-btn">Contact</a></li>
    <li><a href="{{ route('posts') }}">Blog</a></li>
    <li><a href="{{ route('tutorials') }}">Tutorials</a></li>
    <li class="text-center"><i class="fa fa-circle-o " aria-hidden="true"></i></li>
@endsection

@section('content')
<div id="welcome-body">


    {{--<a class="menu menu-btn wow fadeIn" data-activates="slide-out" data-wow-duration="2s" data-wow-delay="0.7s">--}}
        {{--<div></div>--}}
        {{--<div></div>--}}
        {{--<div></div>--}}
    {{--</a>--}}
    {{-- <div class="video-background">
        <video class="" poster="" id="bgvid" playsinline autoplay muted loop>

        <source src="https://s3.us-east-2.amazonaws.com/iamelimars/Sparks.mp4" type="video/mp4">
    </video>
    </div> --}}




    <div id="hero" class="section">
        <div id="title-circle">
            <h3 id="hero-title" class="wow fadeInUp" data-wow-duration="3s" data-wow-delay="1.5s">ELI MARSHALL</h3>
            <h4 class="text-center"> Web Designer <br> & <br> Developer </h4>
        </div>

    </div>

    <!-- <div id="fullpage"> -->
    <div class="section " id="services">
        <div class="container content">
            <h1>Services</h1>
            <div class="col-xs-12 wow fadeIn " data-wow-duration="2s" data-wow-delay="0.5s">
                <div class="col-xs-12 service">
                    <h4>App Development</h4>
                    <hr>
                    <h5>I'm an expert in IOS app development with Objective-C and Swift. I am experienced with multithreading, GCD, API integration, design patterns and much more. I also do Android development and some experience in hybrid app development.</h5>
                </div>
            </div>
            <div class="col-xs-12 wow fadeIn " data-wow-duration="2s" data-wow-delay="0.5s">
                <div class="col-xs-12 service">
                    <h4>Web Development</h4>
                    <hr>
                    <h5>I am also an expert in web development using HTML, CSS, Bootstrap, Angular, JQuery and Javascript for front end development. As for the backend I use PHP and have some experience with Python. I am also excellent in Wordpress theme and plugin development</h5>
                </div>
            </div>
            <div class="col-xs-12 wow fadeIn " data-wow-duration="2s" data-wow-delay="0.5s">
                <div class="col-xs-12 service">
                    <h4>Design</h4>
                    <hr>
                    <h5>I do UI/UX design for both mobile and web applications using Sketch and Adobe Photoshop. I believe that user experience is the second most important element of a website. A great user experience gets user coming back for more.</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="skills">
        <div class="container content">
            <h1>Skills</h1>

            <div class="skillbar clearfix wow fadeIn " data-percent="100%" data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="skillbar-title"><span>HTML5</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">100%</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix wow fadeIn " data-percent="100%" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="skillbar-title" ><span>CSS3</span></div>
                <div class="skillbar-bar" ></div>
                <div class="skill-bar-percent">100%</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix wow fadeIn " data-percent="90%" data-wow-duration="2s" data-wow-delay="0.5s">
                <div class="skillbar-title" ><span>jQuery</span></div>
                <div class="skillbar-bar" ></div>
                <div class="skill-bar-percent">90%</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix wow fadeIn " data-percent="85%" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="skillbar-title" ><span>PHP</span></div>
                <div class="skillbar-bar" ></div>
                <div class="skill-bar-percent">85%</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix wow fadeIn " data-percent="87%" data-wow-duration="2s" data-wow-delay="0.7s">
                <div class="skillbar-title" ><span>Wordpress</span></div>
                <div class="skillbar-bar" ></div>
                <div class="skill-bar-percent">87%</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix wow fadeIn " data-percent="85%" data-wow-duration="2s" data-wow-delay="0.8s">
                <div class="skillbar-title"><span>Swift</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">85%</div>
            </div> <!-- End Skill Bar -->

            <div class="skillbar clearfix wow fadeIn " data-percent="92%" data-wow-duration="2s" data-wow-delay="0.9s">
                <div class="skillbar-title"><span>Objective.C</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">92%</div>
            </div>
            <!-- <div class="skillbar clearfix " data-percent="50%">
              <div class="skillbar-title"><span>React.js</span></div>
              <div class="skillbar-bar"></div>
              <div class="skill-bar-percent">50%</div>
            </div> -->
            <div class="skillbar clearfix wow fadeIn " data-percent="85%" data-wow-duration="2s" data-wow-delay="1.0s">
                <div class="skillbar-title"><span>Javascript</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">85%</div>
            </div>
            <div class="skillbar clearfix wow fadeIn " data-percent="80%" data-wow-duration="2s" data-wow-delay="1.1s">
                <div class="skillbar-title"><span>Photoshop</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">80%</div>
            </div>
        </div>
    </div>
    <div class="section " id="pricing">
        <div class="container content">
            <h1>Pricing</h1>
            <div class="col-xs-12 wow fadeIn " data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="col-xs-12 service">
                    <h4>Prices are based on three factors. Design, complexity, and size. Send me an email <a href="">here</a>, to get started with the process.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="section " id="works">
        <div class="container content">
            <h1>Works</h1>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeIn thumb" data-wow-duration="2s" data-wow-delay="0.3s">
                <a class="" href="https://itunes.apple.com/us/app/versify-free-daily-bible-verses/id1160046953?mt=8" target="_blank">
                    <img class="img-responsive" src="https://s3.us-east-2.amazonaws.com/iamelimars/Versify.jpg" alt="Versify">
                </a>
                <h4>Versify</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeIn thumb" data-wow-duration="2s" data-wow-delay="0.6s">
                <a class="" href="https://itunes.apple.com/US/app/id1169140387?mt=8" target="_blank">
                    <img class="img-responsive" src="https://s3.us-east-2.amazonaws.com/iamelimars/kouleur.jpg" alt="Kouleur">
                </a>
                <h4>Kouleur</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeIn thumb" data-wow-duration="2s" data-wow-delay="0.9s">
                <a class="" href="https://itunes.apple.com/us/app/parallax-weather/id1150730858?mt=8" target="_blank">
                    <img class="img-responsive" src="https://s3.us-east-2.amazonaws.com/iamelimars/parallax.jpg" alt="">
                </a>
                <h4>Parallax Weather</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeIn thumb" data-wow-duration="2s" data-wow-delay="0.9s">
                <a class="" href="http://aetwayalmeen.com" target="_blank">
                    <img class="img-responsive" src="https://s3.us-east-2.amazonaws.com/iamelimars/aetwayalmeen.jpg" alt="Aetwa Yalmeen">
                </a>
                <h4>AetwaYalmeen.com</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeIn thumb" data-wow-duration="2s" data-wow-delay="0.6s">
                <a class="" href="http://angelofloveboutique.com" target="_blank">
                    <img class="img-responsive" src="https://s3.us-east-2.amazonaws.com/iamelimars/angeloflove.jpg" alt="Angel of Love Boutique">
                </a>
                <h4>AngelOfLoveBoutique.com</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeIn thumb" data-wow-duration="2s" data-wow-delay="0.3s">
                <a class="" href="http://buildinghand.io/portfolio.php" target="_blank">
                    <img class="img-responsive" src="https://s3.us-east-2.amazonaws.com/iamelimars/BuildingHand.jpg" alt="Building Hand">
                </a>
                <h4>BuildingHand.io</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeIn thumb" data-wow-duration="2s" data-wow-delay="0.3s">
                <a class="" href="http://templateone.iamelimars.com/" target="_blank">
                    <img class="img-responsive" src="https://s3.us-east-2.amazonaws.com/iamelimars/portfolio_screenshot1.png" alt="Email Template">
                </a>
                <h4>Email Template</h4>
            </div>
        </div>
    </div>
    <div class="section " id="quote">
        <div class="container content">
            <h1>Quote</h1>
            <div class="col-xs-12 wow fadeIn " data-wow-duration="2s" data-wow-delay="0.3s">
                <div class="col-xs-12 service">
                    <h3>As iron sharpens iron, so one person sharpens another. <h6>Proverbs 27:17</h6> </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="section " id="contact">
        <div class="container content">
            <h1>Contact</h1>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                    <h3><i class="fa fa-map-marker" aria-hidden="true"></i>  Location</h3>
                    <h6>Miami, Florida</h6>
                    <h6>Email: iamelimars@yahoo.com</h6>
                    <a href="https://www.instagram.com/iamelimarss/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://github.com/iamelimars" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                </div>
                <!-- <div class="col-sm-8">
                  <form id="ajax-contact" method="post" action="mailer.php" class="col s12">
                    <div class="row">
                      <div class="input-field col-xs-12">
                        <input id="full_name" type="text" class="validate">
                        <label for="full_name">Your Name</label>
                      </div>
                      <div class="input-field col-xs-12">
                        <input id="phone_no" type="text" class="validate">
                        <label for="phone_no">Phone No.</label>
                      </div>
                      <div class="input-field col-xs-12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                      </div>
                      <div class="input-field col-xs-12">
                        <input id="subject" type="text" class="validate">
                        <label for="subject">Subject</label>
                      </div>
                      <div class="input-field col-xs-12">
                        <textarea class="materialize-textarea" id="message" type="text" cols="30" rows="10"></textarea>
                        <label for="message">Message</label>
                      </div>
                      <input type="submit" class="col-xs-12 submit" value="Submit">
                    </div>
                  </form>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection







{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<title>Laravel</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Raleway', sans-serif;--}}
                {{--font-weight: 100;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 12px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@if (Auth::check())--}}
                        {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ url('/login') }}">Login</a>--}}
                        {{--<a href="{{ url('/register') }}">Register</a>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--Laravel--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="https://laravel.com/docs">Documentation</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}
