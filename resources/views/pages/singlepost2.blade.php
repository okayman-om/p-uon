@extends('layouts.master')
@section('main-content')
    <!-- ----------------------------------- Blog Content ------------------------------------------------ -->
    <div class="blog-background">
        <h1 class="post-title">{{ $custompost->title }}</h1>
        <div class="blog-content">
            <div class="b-content">
                {!! $custompost->post !!}
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------ Blog Content Ends ------------------------- -->

@endsection