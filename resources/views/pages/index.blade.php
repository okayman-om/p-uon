@extends('layouts.master')
@section('main-content')
<!-- ---------------------------------------- Cover ---------------------------------------  -->    
<div class="cover">
        <div class="cover-text">
            <h2>WELCOME TO UNIVERSITY OF NEWCASTLE</h2>
            <p>Welcome first year students, We are here to help you conquer the University life.</p>
        </div>
    </div>

    <!-- --------------------------------- Cover ends ------------------------------------------------ -->
    <div class="roadmap">
        <img src="img/roadmap.svg" alt="">
    </div>
    <div class="learn container">
        <h2 class="title">Learn to use</h2>
        <div class="card-wrapper">
            <div class="card">
                {{-- <img src="{{ asset('img/zoom.png') }}" alt="" srcset=""> --}}
                <h2 class="card-content">Zoom</h2>
            </div>
            <div class="card">
                <h2 class="card-content">Blackboard</h2>
            </div>
            <div class="card">
                <h2 class="card-content">myUon</h2>
            </div>
        </div>
    </div>
    <div class="things container">
        <h2 class="title">Things to do</h2>
        <div class="things-wrapper">
            <a href="">
                <div class="t-card">
                    <p class="">Assignments</p>
                </div>
            </a>
            <a href="">
                <div class="t-card">
                    <p class="">Tutorials</p>
                </div>
            </a>
            <a href="">
                <div class="t-card">
                    <p class="">Around Campus</p>
                </div>
            </a>
            <a href="">
                <div class="t-card">
                    <p class="">Library</p>
                </div>
            </a>
            <a href="">
                <div class="t-card">
                    <p class="">Our stories</p>
                </div>
            </a>
            <a href="">
                <div class="t-card">
                    <p class="">Going around Campus</p>
                </div>
            </a>
        </div>
    </div>
@endsection

