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
    <li class="text-center"><i class="fa fa-circle-o " aria-hidden="true"></i></li>
@endsection

@section('content')
<div class="container white-background">
    @foreach($posts as $post)
        <div class="col-md-6">
            <h2>{{ $post->title }}</h2>

            <h4>{{ $post->excerpt }}</h4>

            {!! $post->body !!}

            {{--<img src="{{ $post->image }}" alt="{{ $post->title }}">--}}
        </div>



    @endforeach

</div>
{{ $posts->links() }}


@endsection