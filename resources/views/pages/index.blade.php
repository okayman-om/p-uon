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
    <div class="welcome container">
        <p>
            Congratulations on making it into the University of Newcastle! Now there is a bit of knowledge you should have before entering your first week of university.
            Getting into university is the first step, and the next couple of steps is getting accustomed to university and university life. As by no surprise university is full of opportunity and enjoyment when knowing everything that is going on. Which is why this guide has come to help you. 
            University is full of opportunity and foundations to get you a flying start in your working career, and here is the place where you can become ready for your first day at the University of Newcastle. 
        </p>
        <p><a href="/post/welcome" class="button">Read More</a></p>
    </div>
    <div class="roadmap">
        <img src="img/roadmap.svg" alt="">
    </div>
    <div class="learn container" id="learn-to-use">
        <h2 class="title">Learn to use</h2>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-title">
                    Zoom
                </div>
                <div class="card-content">
                    Zoom is a video conferencing software that helps to provide communications and distance education. Recently, Zoom has gained popularity and has become an integral part of daily lives due to the COVID-19 pandemic. 
                </div>
                <div class="c-button">
                    <a href="/post/zoom" class="button">Read More</a>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    BlackBoard
                </div>
                <div class="card-content">
                    Blackboard learn is an application used by the University of Newcastle for virtual learning. Blackboard is a learning management system that is used for online teaching, discussion and knowledge sharing.                
                </div>
                <div class="c-button">
                    <a href="/post/blackboard" class="button">Read More</a>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    myUON
                </div>
                <div class="card-content">
                    myUON is the Swiss army knife web application for students at the University of Newcastle. Students have all the tools necessary in one place like: Blackboard, Exams, timetable, personal details and so on.                 
                </div>
                <div class="c-button">
                    <a href="/post/myuon" class="button">Read More</a>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-title">
                    {{-- <h2>Zoom</h2> --}}
                </div>
                {{-- <img src="{{ asset('img/zoom.png') }}" alt="" srcset=""> --}}
                <div class="card-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet nesciunt harum ratione at fuga alias iste voluptatem eum ipsum, doloremque odit, a suscipit temporibus repellendus incidunt laborum itaque voluptatum placeat.</div>
                <div><a href="/zoom" class="button">Read More</a></div>
            </div>
            <a href="">
                <div class="card">
                    {{-- <img src="{{ asset('img/zoom.png') }}" alt="" srcset=""> --}}
                    <h2 class="card-content">BlackBoard</h2>
                </div>
            </a>
            <a href="">
                <div class="card">
                    {{-- <img src="{{ asset('img/zoom.png') }}" alt="" srcset=""> --}}
                    <h2 class="card-content">myUON</h2>
                </div>
            </a> !-->
        </div>
    </div>
    <div class="things container">
        <h2 class="title">Things to know</h2>
        <div class="things-wrapper">
            <a href="post/lectures-workshops">
                <div class="t-card">
                    <p class="">Lecture & Workshops</p>
                </div>
            </a>
            <a href="/videos">
                <div class="t-card">
                    <p class="">Tutorials</p>
                </div>
            </a>
            <a href="post/examination">
                <div class="t-card">
                    <p class="">Examination</p>
                </div>
            </a>
            <a href="https://www.newcastle.edu.au/library">
                <div class="t-card">
                    <p class="">Library</p>
                </div>
            </a>
            <a href="/our-stories">
                <div class="t-card">
                    <p class="">Our stories</p>
                </div>
            </a>
            <a href="https://www.newcastle.edu.au/profile">
                <div class="t-card">
                    <p class="">Find Staff</p>
                </div>
            </a>
        </div>
    </div>
@endsection

