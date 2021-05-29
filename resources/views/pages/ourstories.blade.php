@extends('layouts.master')
@section('main-content')
    <!-- ---------------------------------------- banner ---------------------------------------  -->
    <div class="banner">
        <div class="banner-text">
            <h2>Our Story</h2>
        </div>
    </div>

    <!-- --------------------------------- banner ends ------------------------------------------------ -->

    @foreach($customposts as $post)
    @endforeach
    <div class="container">
        <div class="blog-wrapper">
            @foreach($customposts as $post)
            <a href="story/{{ $post->slug }}">
                <div class="blog-card">
                    <div class="color">
                        <img src="img/cover.jpg" alt="" srcset="">
                    </div>
                    <h3 class="b-title">{{ $post->title }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection