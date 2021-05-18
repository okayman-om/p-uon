@extends('layouts.master')
@section('main-content')
    <!-- ---------------------------------------- banner ---------------------------------------  -->
    <div class="banner">
        <div class="banner-text">
            <h2>Blogs</h2>
        </div>
    </div>

    <!-- --------------------------------- banner ends ------------------------------------------------ -->

    @foreach($posts as $post)
    {{ $post->title }}
    @endforeach
    <div class="container">
        <div class="blog-wrapper">
            @foreach($posts as $post)
            <a href="singlepost/{{ $post->slug }}">
                <div class="blog-card">
                    <div class="color"></div>
                    <h3 class="b-title">{{ $post->title }}</h3>
                </div>
            </a>
            @endforeach
            <a href="singlepost">
                <div class="blog-card">
                    <div class="color">
                        <img src="img/cover.jpg" alt="" srcset="">
                    </div>
                    <h3 class="b-title">Grading System</h3>
                </div>
            </a>
            <a href="singlepost">
                <div class="blog-card">
                    <div class="color">
                        <img src="img/cover.jpg" alt="" srcset="">
                    </div>
                    <h3 class="b-title">Accomodation</h3>
                </div>
            </a>
            <a href="singlepost">
                <div class="blog-card">
                    <div class="color">
                        <img src="img/cover.jpg" alt="" srcset="">
                    </div>
                    <h3 class="b-title">Travel</h3>
                </div>
            </a>
            <a href="singlepost">
                <div class="blog-card">
                    <div class="color">
                        <img src="img/cover.jpg" alt="" srcset="">
                    </div>
                    <h3 class="b-title">Lecture & Workshops</h3>
                </div>
            </a>
            <a href="singlepost">
                <div class="blog-card">
                    <div class="color">
                        <img src="img/cover.jpg" alt="" srcset="">
                    </div>
                    <h3 class="b-title">Going around Campus</h3>
                </div>
            </a>
            
        </div>
    </div>
@endsection