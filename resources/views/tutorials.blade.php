@extends('layouts.app')

@section('pageTitle', 'Iamelimars')

@section('sidenav-content')
    <li><a href="{{ route('welcome') }}">Home</a></li>

    <li><a href="{{ route('tutorials') }}">Tutorials</a></li>
    <li><a href="{{ route('posts') }}">Blog</a></li>
    <li class="text-center"><i class="fa fa-circle-o " aria-hidden="true"></i></li>
@endsection

@section('content')
    <div class="container white-background">
        @foreach($tutorials as $tutorial)
            <div class="col-md-6">
                <h2>{{ $tutorial->title }}</h2>

                <h4>{{ $tutorial->excerpt }}</h4>

                {!! $tutorial->body !!}
                {{--{{ $tutorial->body }}--}}
                {{ $tutorial->created_at }}

                <img src="{{ $tutorial->image_url }}" alt="{{ $tutorial->title }}">
            </div>



        @endforeach

    </div>
    {{ $tutorials->links() }}

@endsection


