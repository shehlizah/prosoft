@extends('layouts.main')

@section('main-section')

<header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To ProSoft Tech!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{url('about')}}">Tell Me More</a>
            </div>
        </header>

@endsection()